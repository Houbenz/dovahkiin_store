<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{

    use Searchable;

    protected $primaryKey ="id";

    protected $attributs = [
        "available" => false,
    ];
}
