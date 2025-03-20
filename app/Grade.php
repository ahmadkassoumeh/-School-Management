<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Grade extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];

    protected $fillable=['Name','Notes'];
    public $timestamps = true;
    

    public function Sections()
    {
        return $this->hasMany('App\Section', 'Grade_id');
    }

}
