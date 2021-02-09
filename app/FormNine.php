<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormNine extends Model
{
    protected $table = 'form_nines';
    protected $primarykey = 'id';
    protected $fillable = ['id','user_id','full_name','address1','contact1','email','objective','skill1',
        'skill2','skill3','skill4','skill5',
        'exp1','exp2','exp3','al_year','al_index_no','al_subject1','al_subject2','al_result1','al_result2','ol_year','ol_index_no','subject1',
        'subject2','subject3','subject4','subject5','subject6','subject7','subject8','subject9','subject10','result1','result2','result3','result4',
        'result5','result6','result7','result7','result8','result9','result10','name_in_full','nationality','nic','dob','age','martial_status','p_address','school'];
    public $timestamps = false;
}
