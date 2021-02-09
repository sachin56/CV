<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormTwo extends Model
{
    protected $table = 'form_twos';
    protected $primarykey = 'id';
    protected $fillable = ['id','address','full_name','dob','contact_no','sex','age','nic','driving_license','civil_status','religion','nationality','school',
                            'subject1','subject2','subject3','subject4','subject5','subject6','subject7','result1','result2','result3',
                            'result4','result5','result6','result7','company','period','work_years','cover_area','work_city','language'
                           ,'non_refree1_name','non_refree1_post','non_refree1_workplace','non_refree1_tel',
                            'non_refree2_name','non_refree2_post','non_refree2_workplace','non_refree2_tel'];
    public $timestamps = false;
}
