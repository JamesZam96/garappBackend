<?php

namespace App\Http\Services;
use Illuminate\Database\Eloquent\Model;

class DataServices {
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    
  public function getAll(){
    return $this->model->orderBy('id', 'desc')->paginate();
  }
  public function getById($id){
    return $this->model->find($id);
  }
  public function create(array $data){
    return $this->model->create($data);
  }
  public function update($id, array $data)
  {
      $record = $this->getById($id);
      if (!$record) {
          return null;
      }
      $record->update($data);
      return $record;
  }

  public function delete($id)
  {
      $record = $this->getById($id);
      if (!$record) {
          return null;
      }
      $record->delete();
      return $record;
  }


}