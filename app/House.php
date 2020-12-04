<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $attributes = array(
        'imgs' => '[]',
        'thumb' => '',
        'alive' => 1
      );
}
