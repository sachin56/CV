<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormSix extends Model
{
    protected $table = 'form_sixes';
    protected $primarykey = 'id';
    protected $fillable = ['id','main_image','full_name','email','contact1','contact2','address1','address2','statement','edu_qualify1','edu_qualify2','edu_qualify3','edu_qualify4',
        'employ1','employ_description','achievement1','achievement2','technical_skills','other_skills','p_name','p_address','p_dob','p_age'
        ,'p_gender','p_Status','non_refree1_name','non_refree2_name','non_refree1_post','non_refree2_post','non_refree1_workplace','non_refree2_workplace'
        ,'non_refree1_tel','non_refree2_tel','non_refree1_email','non_refree2_email'
    ];
    public $timestamps = false;
}
