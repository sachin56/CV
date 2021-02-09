<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormFour extends Model
{
    protected $table = 'form_fours';
    protected $primarykey = 'id';
    protected $fillable = ['id','full_name','address','contact_no1','contact_no2','email','objective','subject1','subject2','subject3','subject4','subject5','subject6','subject7','subject8','subject9','result1','result2','result3',
        'result4','result5','result6','result7','result8','result9','al_subject1','al_subject2','al_subject3','al_subject4','al_result1','al_result2','al_result3',
        'al_result4','higher_edu','other1','other2','other3','work_xp1','work_xp1_description','work_xp1_res1','work_xp1_res2','work_xp1_res3','work_xp1_res4','work_xp2','work_xp2_description','work_xp2_res1','work_xp2_res2','work_xp2_res3','work_xp2_res4','non_refree1_name','non_refree1_post','non_refree1_workplace','non_refree1_tel',
        'non_refree2_name','non_refree2_post','non_refree2_workplace','non_refree2_tel'];
    public $timestamps = false;
}
