<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormThree extends Model
{
    protected $table = 'form_threes';
    protected $primarykey = 'id';
    protected $fillable = ['id','full_name','address','email','contact_no1','contact_no2','statement1','statement2',
        'statement3','statement4','statement5','skill1','skill12','skill3','skill4','skill5',
        'subject1','subject2','subject3','subject4','subject5','subject6','subject7','subject8','subject9','result1','result2','result3',
        'result4','result5','result6','result7','result8','result9','al_subject1','al_subject2','al_subject3','al_subject4','al_result1','al_result2','al_result3',
        'al_result4','project1','project2','experience1','experience2','name_full','dob','nationality','gender','nic','civil_status','school','non_refree1_name','non_refree1_post','non_refree1_workplace','non_refree1_address','non_refree1_tel','non_refree1_email',
        'non_refree2_name','non_refree2_post','non_refree2_workplace','non_refree2_address','non_refree2_tel','non_refree2_email','al_stream','al_year','al_index','ol_year','ol_index'];
    public $timestamps = false;
}
