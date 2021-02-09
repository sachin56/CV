<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormSeven extends Model
{
    protected $table = 'form_sevens';
    protected $primarykey = 'id';
    protected $fillable = ['id','main_image','full_name','address1','address2','contact1','contact2','email','exp1','exp1_description','exp2','exp2_description','edu_qualify1',
        'edu_qualify2','edu_qualify3','edu_qualify4','edu_qualify5','edu_qualify6','edu_qualification','edu_time','ol_subject1','ol_subject2','ol_subject3','ol_result1'
    ,'ol_result2','ol_result3','al_subject1','al_subject2','al_subject3','al_subject4','al_result1','al_result2','al_result3','al_result4','dob','age',
        'm_status','gender','languages','nationality','religion','sport1','sport2','sport3','non_refree1_name','non_refree1_post','non_refree1_workplace','non_refree1_tel',
        'non_refree2_name','non_refree2_post','non_refree2_workplace','non_refree2_tel'];
    public $timestamps = false;
}
