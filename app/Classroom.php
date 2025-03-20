<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Classroom extends Model
{
    //
    protected $table = 'classrooms';

     use HasTranslations;
     public $translatable = ['Name_Class'];
     protected $fillable=['Name_Class','grade_id'];

   
    public $timestamps = true;

    public function Grades()
    {
        return $this->belongsTo('App\Grade', 'grade_id');
    }

}
