<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    protected $guarded=[];

    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id');
    }

     // علاقة بين الترقيات والمراحل الدراسية لجلب اسم المرحلة في جدول الترقيات

     public function f_grade()
     {
         return $this->belongsTo('App\Grade', 'from_grade');
     }
 
 
     // علاقة بين الترقيات الصفوف الدراسية لجلب اسم الصف في جدول الترقيات
 
     public function f_classroom()
     {
         return $this->belongsTo('App\Classroom', 'from_Classroom');
     }
 
     // علاقة بين الترقيات الاقسام الدراسية لجلب اسم القسم  في جدول الترقيات
 
     public function f_section()
     {
         return $this->belongsTo('App\Section', 'from_section');
     }
 
     // علاقة بين الترقيات والمراحل الدراسية لجلب اسم المرحلة في جدول الترقيات
 
     public function t_grade()
     {
         return $this->belongsTo('App\Grade', 'to_grade');
     }
 
 
     // علاقة بين الترقيات الصفوف الدراسية لجلب اسم الصف في جدول الترقيات
 
     public function t_classroom()
     {
         return $this->belongsTo('App\Classroom', 'to_Classroom');
     }
 
     // علاقة بين الترقيات الاقسام الدراسية لجلب اسم القسم  في جدول الترقيات
 
     public function t_section()
     {
         return $this->belongsTo('App\Section', 'to_section');
     }
 
 

}
