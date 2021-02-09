<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormOne extends Model
{
        protected $table = 'form_ones';
        protected $primarykey = 'id';
        protected $fillable = ['id','user_id','main_image','full_name','address1','address2','address3','contact1','contact2','email','personal_profile','dob',
            'civil_status','sex','religion','nic',
            'subject1','subject2','subject3','subject4','subject5','subject6','subject7','subject8','subject9','result1','result2','result3',
            'result4','result5','result6','result7','result8','result9','al_subject1','al_subject2','al_subject3','al_subject4','al_result1','al_result2','al_result3',
            'al_result4','other_qualify','a_qualify1','a_qualify2','a_qualify3','a_qualify4','p_qualify1','p_qualify2','p_qualify3','p_qualify4',
            'skill1','skill2','skill3','skill4','skill5','skill16','non_refree1_name','non_refree1_post','non_refree1_workplace','non_refree1_tel',
            'non_refree2_name','non_refree2_post','non_refree2_workplace','non_refree2_tel'];
        public $timestamps = false;
}
