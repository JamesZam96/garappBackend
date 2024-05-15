<?php

namespace App\Http\Services;
use Illuminate\Database\Eloquent\Model;

class DataServices {
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    
  public function all(){
    return $this->model::all();
  }

}