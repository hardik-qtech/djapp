<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SongsModel extends Model
{
    //tablename
    public $table='songs';
    //primaryKey
    public $primaryKey='song_id';
    //timestamps
    public $timestamps=true;


    public function category()
    {
        return $this->belongsTo('App\CategoryModel', 'category_id', 'category_id');
    }
}
