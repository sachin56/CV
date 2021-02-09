<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormEight extends Model
{
    protected $table = 'form_eights';
    protected $primarykey = 'id';
    protected $fillable = ['id','main_image','full_name','address1','address2','address3','address4','email','contact1','objective','dob','age','gender','school',
        'martial_status','nationality','nic','pro_qualify','skill1','skill2','skill3','skill4','al_stream','al_year','al_index','al_subject1'
        ,'al_subject2','al_subject3','al_subject4','al_grade1','al_grade2','al_grade3','al_grade4','ol_year','ol_subject1','ol_subject2','ol_subject3'
        ,'ol_subject4','ol_subject5','ol_subject6','ol_subject7','ol_subject8','ol_subject9','ol_grade1','ol_grade2','ol_grade3','ol_grade4'
        ,'ol_grade5','ol_grade6','ol_grade7','ol_grade8','ol_grade9','job1','job2','job1_company','job2_company','job1_period','job2_period','non_refree1_name',
        'non_refree1_post','non_refree1_workplace','non_refree1_tel','non_refree2_name','non_refree2_post','non_refree2_workplace','non_refree2_tel'];
    public $timestamps = false;
}
