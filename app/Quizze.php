<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Quizze extends Model
{
    use HasTranslations;
    public $translatable = ['name'];

    public function teacher()
    {
        return $this->belongsTo('App\Teacher', 'teacher_id');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject', 'subject_id');
    }

    public function grade()
    {
        return $this->belongsTo('App\Grade', 'grade_id');
    }

    public function classroom()
    {
        return $this->belongsTo('App\Classroom', 'classroom_id');
    }


    public function section()
    {
        return $this->belongsTo('App\Section', 'section_id');
    }
}
