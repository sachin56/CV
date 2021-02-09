<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormFive extends Model
{
    protected $table = 'form_fives';
    protected $primarykey = 'id';
    protected $fillable = ['id','main_image','full_name','address1','address2','contact1','contact2','email','objective','a_qualify1','a_qualify2','a_qualify3','a_qualify4','a_qualify5','a_qualify6',
        'skill_ability','subject1','subject2','subject3','subject4','subject5','subject6','result1','result2','result3','result4','result5'
        ,'result6','ol_subject1','ol_subject2','ol_subject3','ol_subject4','ol_result1','ol_result2','al_subject1','al_subject2','al_subject3','al_subject4','lead1','lead2','lead3','lead4','lead5','lead6'
        ,'lead7','game1','game2','game3','game4','skill1','skill2','skill3','skill4','skill5','dob','m_status','nationality','nic','school','non_refree1_name',
        'non_refree1_post','non_refree1_workplace','non_refree1_tel','non_refree2_name','non_refree2_post','non_refree2_workplace','non_refree2_tel'];
    public $timestamps = false;
}
