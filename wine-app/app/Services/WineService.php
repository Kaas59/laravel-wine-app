<?php

namespace App\Services;

use App\Models\Wine;

class WineService{

  public function searchWineCategory(){
    return;
  }

  public function searchWineList(){
    return;
  }

  public function getNew(){
    return Wine::oderBy('created_at', 'desc')->limit(20);
  }

}
