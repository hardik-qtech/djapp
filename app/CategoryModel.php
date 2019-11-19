<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    //tablename
    public $table='category';
    //primaryKey
    public $primaryKey='category_id';
    //timestamps
    public $timestamps=true;
}
