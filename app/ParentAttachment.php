<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentAttachment extends Model
{
    protected $fillable=['file_name','parent_id'];
}
