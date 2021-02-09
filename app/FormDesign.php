<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormDesign extends Model
{
    protected $table = 'form_twos';
    protected $primarykey = 'id';
    protected $fillable = ['id','design'];
    public $timestamps = false;
}
