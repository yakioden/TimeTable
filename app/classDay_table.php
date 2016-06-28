<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classDay_table extends Model
{

    protected $table = "classDay";

    protected $fillabel = [
        "id","class_Id","day","period","subject_Id"
    ];
    //hasMany設定
    public function subject()
    {
        return $this->belongsTo('App\subject_table','id');

    }
    public function class_()
    {
        return $this->belongsTo('App\class_table');

    }
}
