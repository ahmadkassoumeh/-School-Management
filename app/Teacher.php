<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Teacher extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];
    protected $guarded=[];

    public function specializations()
    {
        return $this->belongsTo('App\Specialization', 'Specialization_id');
    }

    // علاقة بين المعلمين والانواع لجلب جنس المعلم
    public function genders()
    {
        return $this->belongsTo('App\Gender', 'Gender_id');
    }

    // علاقة المعلمين مع الاقسام
    public function Sections()
    {
        return $this->belongsToMany('App\Section','teacher_section');
    }

}
