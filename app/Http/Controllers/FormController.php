<?php

namespace App\Http\Controllers;

use App\FormEight;
use App\FormFive;
use App\FormFour;
use App\FormNine;
use App\FormOne;
use App\FormSeven;
use App\FormSix;
use App\FormThree;
use App\FormTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class FormController extends Controller
{


    public function formOneSave(Request $request) {

        $user = Auth::user();
        $user_id = $user->id;

        $main_image = $request->file('main_image');
        $full_name = $request->input('full_name');
        $address1 = $request->input('address1');
        $address2 = $request->input('address2');
        $address3 = $request->input('address3');

        $contact1 = $request->input('contact1');
        $contact2 = $request->input('contact2');
        $email = $request->input('email');
        $personal_profile = $request->input('personal_profile');
        $dob = $request->input('dob');
        $civil_status = $request->input('civil_status');
        $sex = $request->input('sex');
        $religion = $request->input('religion');
        $nic = $request->input('nic');
        $subject1 = $request->input('subject1');
        $subject2 = $request->input('subject2');
        $subject3 = $request->input('subject3');
        $subject4 = $request->input('subject4');
        $subject5 = $request->input('subject5');
        $subject6 = $request->input('subject6');
        $subject7 = $request->input('subject7');
        $subject8 = $request->input('subject8');
        $subject9 = $request->input('subject9');

        $results1 = $request->input('results1');
        $results2 = $request->input('results2');
        $results3 = $request->input('results3');
        $results4 = $request->input('results4');
        $results5 = $request->input('results5');
        $results6 = $request->input('results6');
        $results7 = $request->input('results7');
        $results8 = $request->input('results8');
        $results9 = $request->input('results9');

        $al_subject1 = $request->input('al_subject1');
        $al_subject2 = $request->input('al_subject2');
        $al_subject3 = $request->input('al_subject3');
        $al_subject4 = $request->input('al_subject4');

        $al_results1 = $request->input('al_results1');
        $al_results2 = $request->input('al_results2');
        $al_results3 = $request->input('al_results3');
        $al_results4 = $request->input('al_results4');

        $other_qualify = $request->input('other_qualify');

        $a_qualify1 = $request->input('a_qualify1');
        $a_qualify2 = $request->input('a_qualify2');
        $a_qualify3 = $request->input('a_qualify3');
        $a_qualify4= $request->input('a_qualify4');

        $p_qualify1 = $request->input('p_qualify1');
        $p_qualify2 = $request->input('p_qualify2');
        $p_qualify3 = $request->input('p_qualify3');
        $p_qualify4 = $request->input('p_qualify4');

        $skill1 = $request->input('skill1');
        $skill2 = $request->input('skill2');
        $skill3 = $request->input('skill3');
        $skill4 = $request->input('skill4');
        $skill5 = $request->input('skill5');
        $skill6 = $request->input('skill6');

        $non_refree1_name = $request->input('non_refree1_name');
        $non_refree1_post = $request->input('non_refree1_post');
        $non_refree1_workplace = $request->input('non_refree1_workplace');
        $non_refree1_tel = $request->input('non_refree1_tel');

        $non_refree2_name = $request->input('non_refree2_name');
        $non_refree2_post = $request->input('non_refree2_post');
        $non_refree2_workplace = $request->input('non_refree2_workplace');
        $non_refree2_tel = $request->input('non_refree2_tel');

        $formOne = new FormOne();

        $formOne->user_id = $user_id;

        if(!empty($main_image)) {

            $file_e = File::extension($main_image->getClientOriginalName());
            $file_ex = strtolower(File::extension($main_image->getClientOriginalName()));

            if($file_ex != "png" && $file_ex != "jpg" && $file_ex != "jpeg" && $file_ex != "gif") {
                $res['success'] = false;
                $res['message']= 'Invalid photo type!';
                return response( $res );
            }

            $filename = uniqid().".".$file_ex;
            $main_image->storeAs('public/forms/form1', $filename);

            $formOne->main_image = $filename;
        }
        $formOne->full_name = $full_name;
        $formOne->address1 = $address1;
        $formOne->address2 = $address2;
        $formOne->address3 = $address3;
        $formOne->contact1 = $contact1;
        $formOne->contact2 = $contact2;
        $formOne->email = $email;
        $formOne->personal_profile = $personal_profile;
        $formOne->dob = $dob;
        $formOne->civil_status = $civil_status;
        $formOne->sex = $sex;
        $formOne->religion = $religion;
        $formOne->nic = $nic;
        $formOne->subject1 = $subject1;
        $formOne->subject2 = $subject2;
        $formOne->subject3 = $subject3;
        $formOne->subject4 = $subject4;
        $formOne->subject5 = $subject5;
        $formOne->subject6 = $subject6;
        $formOne->subject7 = $subject7;
        $formOne->subject8 = $subject8;
        $formOne->subject9 = $subject9;

        $formOne->result1 = $results1;
        $formOne->result2 = $results2;
        $formOne->result3 = $results3;
        $formOne->result4 = $results4;
        $formOne->result5 = $results5;
        $formOne->result6 = $results6;
        $formOne->result7 = $results7;
        $formOne->result8 = $results8;
        $formOne->result9 = $results9;

        $formOne->al_subject1 = $al_subject1;
        $formOne->al_subject2 = $al_subject2;
        $formOne->al_subject3 = $al_subject3;
        $formOne->al_subject4 = $al_subject4;

        $formOne->al_result1 = $al_results1;
        $formOne->al_result2 = $al_results2;
        $formOne->al_result3 = $al_results3;
        $formOne->al_result4 = $al_results4;

        $formOne->a_qualify1 = $a_qualify1;
        $formOne->a_qualify2 = $a_qualify2;
        $formOne->a_qualify3 = $a_qualify3;
        $formOne->a_qualify4 = $a_qualify4;

        $formOne->p_qualify1 = $p_qualify1;
        $formOne->p_qualify2 = $p_qualify2;
        $formOne->p_qualify3 = $p_qualify3;
        $formOne->p_qualify4 = $p_qualify4;

        $formOne->skill1 = $skill1;
        $formOne->skill2 = $skill2;
        $formOne->skill3 = $skill3;
        $formOne->skill4 = $skill4;
        $formOne->skill5 = $skill5;
        $formOne->skill6 = $skill6;

        $formOne->non_refree1_name = $non_refree1_name;
        $formOne->non_refree1_post = $non_refree1_post;
        $formOne->non_refree1_workplace = $non_refree1_workplace;
        $formOne->non_refree1_tel = $non_refree1_tel;

        $formOne->non_refree2_name = $non_refree2_name;
        $formOne->non_refree2_post = $non_refree2_post;
        $formOne->non_refree2_workplace = $non_refree2_workplace;
        $formOne->non_refree2_tel = $non_refree2_tel;

        $formOne->other_qualify = $other_qualify;


        $formOne->save();

        $design = 1;
        $res['success'] = true;
        $res['message']= $design;
        return response( $res );


    }


    public function formTwoSave(Request $request) {

        $user = Auth::user();
        $user_id = $user->id;


        $address = $request->input('address');
        $full_name = $request->input('fullname');
        $dob = $request->input('dob');
        $contact_no = $request->input('contact_no');
        $sex = $request->input('sex');
        $age = $request->input('age');
        $nic = $request->input('nic');
        $driving_license = $request->input('driving_license');
        $civil_status = $request->input('civil_status');
        $religion = $request->input('religion');
        $nationality = $request->input('nationality');
        $school = $request->input('school');
        $subject1 = $request->input('subject1');
        $subject2 = $request->input('subject2');
        $subject3 = $request->input('subject3');
        $subject4 = $request->input('subject4');
        $subject5 = $request->input('subject5');
        $subject6 = $request->input('subject6');
        $subject7 = $request->input('subject7');
        $result1 = $request->input('results1');
        $result2 = $request->input('results2');
        $result3 = $request->input('results3');
        $result4 = $request->input('results4');
        $result5 = $request->input('results5');
        $result6 = $request->input('results6');
        $result7 = $request->input('results7');
        $company = $request->input('company');
        $period = $request->input('period');
        $work_years = $request->input('worked_years');
        $cover_area = $request->input('covered_area');
        $work_city = $request->input('city_work');
        $language = $request->input('language');

        $non_refree1_name = $request->input('non_refree1_name');
        $non_refree1_post = $request->input('non_refree1_post');
        $non_refree1_workplace = $request->input('non_refree1_workplace');
        $non_refree1_tel = $request->input('non_refree1_tel');

        $non_refree2_name = $request->input('non_refree2_name');
        $non_refree2_post = $request->input('non_refree2_post');
        $non_refree2_workplace = $request->input('non_refree2_workplace');
        $non_refree2_tel = $request->input('non_refree2_tel');

        $formTwo = new FormTwo();

        $formTwo->user_id = $user_id;
        $formTwo->address = $address;
        $formTwo->full_name = $full_name;
        $formTwo->dob = $dob;
        $formTwo->contact_no = $contact_no;
        $formTwo->sex = $sex;
        $formTwo->age = $age;
        $formTwo->nic = $nic;
        $formTwo->driving_license = $driving_license;
        $formTwo->civil_status = $civil_status;
        $formTwo->religion = $religion;
        $formTwo->nationality = $nationality;
        $formTwo->school = $school;
        $formTwo->subject1 = $subject1;
        $formTwo->subject2 = $subject2;
        $formTwo->subject3 = $subject3;
        $formTwo->subject4 = $subject4;
        $formTwo->subject5 = $subject5;
        $formTwo->subject6 = $subject6;
        $formTwo->subject7 = $subject7;
        $formTwo->result1 = $result1;
        $formTwo->result2 = $result2;
        $formTwo->result3 = $result3;
        $formTwo->result4 = $result4;
        $formTwo->result5 = $result5;
        $formTwo->result6 = $result6;
        $formTwo->result7 = $result7;
        $formTwo->company = $company;
        $formTwo->period = $period;
        $formTwo->work_years = $work_years;
        $formTwo->cover_area = $cover_area;
        $formTwo->work_city = $work_city;
        $formTwo->language = $language;
        $formTwo->non_refree1_name = $non_refree1_name;
        $formTwo->non_refree1_post = $non_refree1_post;
        $formTwo->non_refree1_workplace = $non_refree1_workplace;
        $formTwo->non_refree1_tel = $non_refree1_tel;

        $formTwo->non_refree2_name = $non_refree2_name;
        $formTwo->non_refree2_post = $non_refree2_post;
        $formTwo->non_refree2_workplace = $non_refree2_workplace;
        $formTwo->non_refree2_tel = $non_refree2_tel;

        $formTwo->save();

        $design = 2;
//        return redirect('/download/pdf');
        return view('download_pdf',['design'=>$design]);
    }

    public function formThreeSave(Request $request) {

        $user = Auth::user();
        $user_id = $user->id;

        $full_name = $request->input('fullname');
        $address = $request->input('address');
        $email = $request->input('email');
        $contact_no1 = $request->input('contact_no1');
        $contact_no2 = $request->input('contact_no2');
        $statement1 = $request->input('statement1');
        $statement2 = $request->input('statement2');
        $statement3 = $request->input('statement3');
        $statement4 = $request->input('statement4');
        $statement5 = $request->input('statement5');
        $skill1 = $request->input('skill1');
        $skill2 = $request->input('skill2');
        $skill3 = $request->input('skill3');
        $skill4 = $request->input('skill4');
        $skill5 = $request->input('skill5');



        $formThree = new FormThree();

        $formThree->user_id = $user_id;
        $formThree->full_name = $full_name;
        $formThree->address = $address;
        $formThree->email = $email;
        $formThree->contact_no1 = $contact_no1;
        $formThree->contact_no2 = $contact_no2;
        $formThree->statement1 = $statement1;
        $formThree->statement2 = $statement2;
        $formThree->statement3 = $statement3;
        $formThree->statement4 = $statement4;
        $formThree->statement5 = $statement5;
        $formThree->skill1 = $skill1;
        $formThree->skill2 = $skill2;
        $formThree->skill3 = $skill3;
        $formThree->skill4 = $skill4;
        $formThree->skill5 = $skill5;

        $formThree->al_stream = $request->input('stream');
        $formThree->al_year = $request->input('year');
        $formThree->al_index = $request->input('al_index');
        $formThree->al_subject1 = $request->input('al_subject1');
        $formThree->al_subject2 = $request->input('al_subject2');
        $formThree->al_subject3 = $request->input('al_subject3');
        $formThree->al_subject4 = $request->input('al_subject4');

        $formThree->al_result1 = $request->input('al_result1');
        $formThree->al_result2 = $request->input('al_result2');
        $formThree->al_result3 = $request->input('al_result3');
        $formThree->al_result4 = $request->input('al_result4');

        $formThree->ol_year = $request->input('year1');
        $formThree->ol_index = $request->input('ol_index');
        $formThree->subject1 = $request->input('subject1');
        $formThree->subject2 = $request->input('subject2');
        $formThree->subject3 = $request->input('subject3');
        $formThree->subject4 = $request->input('subject4');
        $formThree->subject5 = $request->input('subject5');
        $formThree->subject6 = $request->input('subject6');
        $formThree->subject7 = $request->input('subject7');
        $formThree->subject8 = $request->input('subject8');
        $formThree->subject9 = $request->input('subject9');

        $formThree->result1 = $request->input('result1');
        $formThree->result2 = $request->input('result2');
        $formThree->result3 = $request->input('result3');
        $formThree->result4 = $request->input('result4');
        $formThree->result5 = $request->input('result5');
        $formThree->result6 = $request->input('result6');
        $formThree->result7 = $request->input('result7');
        $formThree->result8 = $request->input('result8');
        $formThree->result9 = $request->input('result9');

        $formThree->project1 = $request->input('project1');
        $formThree->project2 = $request->input('project2');
        $formThree->experience1 = $request->input('exp');

        $formThree->name_full = $request->input('fname');
        $formThree->dob = $request->input('dob');
        $formThree->nationality = $request->input('nationality');
        $formThree->gender = $request->input('gender');
        $formThree->nic = $request->input('nicNo');
        $formThree->civil_status = $request->input('civil_status');
        $formThree->school = $request->input('school');

        $formThree->non_refree1_name = $request->input('fname1');
        $formThree->non_refree1_post = $request->input('post1');
        $formThree->non_refree1_workplace = $request->input('company1');
        $formThree->non_refree1_address = $request->input('address1');
        $formThree->non_refree1_tel = $request->input('tele1');
        $formThree->non_refree1_email = $request->input('email1');

        $formThree->non_refree2_name = $request->input('fname2');
        $formThree->non_refree2_post = $request->input('post2');
        $formThree->non_refree2_workplace = $request->input('company2');
        $formThree->non_refree2_address = $request->input('address2');
        $formThree->non_refree2_tel = $request->input('tele2');
        $formThree->non_refree2_email = $request->input('email2');

        $formThree->save();

        $design = 3;

        return view('download_pdf',['design'=>$design]);
    }

    public function formFourSave(Request $request) {

//dd($request);
        $user = Auth::user();
        $user_id = $user->id;

        $full_name = $request->input('fullname');
        $address = $request->input('address');
        $contact_no1 = $request->input('contact1');
        $contact_no2 = $request->input('contact2');
        $email = $request->input('email');
        $objective = $request->input('objective');
        $subject1 = $request->input('subject1');
        $subject2 = $request->input('subject2');
        $subject3 = $request->input('subject3');
        $subject4 = $request->input('subject4');
        $subject5 = $request->input('subject5');
        $subject6 = $request->input('subject6');
        $subject7 = $request->input('subject7');
        $subject8 = $request->input('subject8');
        $subject9 = $request->input('subject9');
        $result1 = $request->input('results1');
        $result2 = $request->input('results2');
        $result3 = $request->input('results3');
        $result4 = $request->input('results4');
        $result5 = $request->input('results5');
        $result6 = $request->input('results6');
        $result7 = $request->input('results7');
        $result8 = $request->input('results8');
        $result9 = $request->input('results9');
        $al_subject1 = $request->input('al_subject1');
        $al_subject2 = $request->input('al_subject2');
        $al_subject3 = $request->input('al_subject3');
        $al_subject4 = $request->input('al_subject4');
        $al_result1 = $request->input('al_results1');
        $al_result2 = $request->input('al_results2');
        $al_result3 = $request->input('al_results3');
        $al_result4 = $request->input('al_results4');
        $higher_edu = $request->input('higher_edu');
        $other1 = $request->input('other1');
        $other2 = $request->input('other2');
        $other3 = $request->input('other3');




        $formFour = new FormFour();

        $formFour->user_id = $user_id;
        $formFour->full_name = $full_name;
        $formFour->address = $address;
        $formFour->contact_no1 = $contact_no1;
        $formFour->contact_no2 = $contact_no2;
        $formFour->email = $email;
        $formFour->objective = $objective;
        $formFour->subject1 = $subject1;
        $formFour->subject2 = $subject2;
        $formFour->subject3 = $subject3;
        $formFour->subject4 = $subject4;
        $formFour->subject5 = $subject5;
        $formFour->subject6 = $subject6;
        $formFour->subject7 = $subject7;
        $formFour->subject8 = $subject8;
        $formFour->subject9 = $subject9;
        $formFour->result1 = $result1;
        $formFour->result2 = $result2;
        $formFour->result3 = $result3;
        $formFour->result4 = $result4;
        $formFour->result5 = $result5;
        $formFour->result6 = $result6;
        $formFour->result7 = $result7;
        $formFour->result8 = $result8;
        $formFour->result9 = $result9;
        $formFour->al_subject1 = $al_subject1;
        $formFour->al_subject2 = $al_subject2;
        $formFour->al_subject3 = $al_subject3;
        $formFour->al_subject4 = $al_subject4;
        $formFour->al_result1 = $al_result1;
        $formFour->al_result2 = $al_result2;
        $formFour->al_result3 = $al_result3;
        $formFour->al_result4 = $al_result4;
        $formFour->higher_edu = $higher_edu;
        $formFour->other1 = $other1;
        $formFour->other2 = $other2;
        $formFour->other3 = $other3;

        $formFour->work_xp1 = $request->input('work_xp1');
        $formFour->work_xp1_description = $request->input('work_xp1_description');
        $formFour->work_xp1_res1 = $request->input('work_xp1_res1');
        $formFour->work_xp1_res2 = $request->input('work_xp1_res2');
        $formFour->work_xp1_res3 = $request->input('work_xp1_res3');
        $formFour->work_xp1_res4 = $request->input('work_xp1_res4');

        $formFour->work_xp2 = $request->input('work_xp2');
        $formFour->work_xp2_description = $request->input('work_xp2_description');
        $formFour->work_xp2_res1 = $request->input('work_xp2_res1');
        $formFour->work_xp2_res2 = $request->input('work_xp2_res2');
        $formFour->work_xp2_res3 = $request->input('work_xp2_res3');
        $formFour->work_xp2_res4 = $request->input('work_xp2_res4');

        $formFour->non_refree1_name = $request->input('non_refree1_name');
        $formFour->non_refree1_post = $request->input('non_refree1_post');
        $formFour->non_refree1_workplace = $request->input('non_refree1_workplace');
        $formFour->non_refree1_tel = $request->input('non_refree1_tel');

        $formFour->non_refree2_name = $request->input('non_refree2_name');
        $formFour->non_refree2_post = $request->input('non_refree2_post');
        $formFour->non_refree2_workplace = $request->input('non_refree2_workplace');
        $formFour->non_refree2_tel = $request->input('non_refree2_tel');

        $formFour->save();

        $design = 4;

        return view('download_pdf',['design'=>$design]);

    }

    public function formFiveSave(Request $request) {


        $user = Auth::user();
        $user_id = $user->id;

        $main_image = $request->file('main_image');
        $full_name = $request->input('full_name');
        $address1 = $request->input('address1');
        $address2 = $request->input('address2');
        $contact_no1 = $request->input('contact1');
        $contact_no2 = $request->input('contact2');
        $email = $request->input('email');
        $objective = $request->input('objective');
        $a_qualify1 = $request->input('a_qualify1');
        $a_qualify2 = $request->input('a_qualify2');
        $a_qualify3 = $request->input('a_qualify3');
        $a_qualify4 = $request->input('a_qualify4');
        $a_qualify5 = $request->input('a_qualify5');
        $a_qualify6 = $request->input('a_qualify6');

        $skill_ability = $request->input('skill_ability');

        $subject1 = $request->input('subject1');
        $results1 = $request->input('results1');
        $subject2 = $request->input('subject2');
        $results2 = $request->input('results2');
        $subject3 = $request->input('subject3');
        $results3 = $request->input('results3');

        $formfive = new FormFive();

        $formfive->user_id = $user_id;

        if(!empty($main_image)) {

            $file_e = File::extension($main_image->getClientOriginalName());
            $file_ex = strtolower(File::extension($main_image->getClientOriginalName()));

            if($file_ex != "png" && $file_ex != "jpg" && $file_ex != "jpeg" && $file_ex != "gif") {
                $res['success'] = false;
                $res['message']= 'Invalid photo type!';
                return response( $res );
            }

            $filename = uniqid().".".$file_ex;
            $main_image->storeAs('public/forms/form5', $filename);

            $formfive->main_image = $filename;
        }

        $formfive->full_name = $full_name;
        $formfive->address1 = $address1;
        $formfive->address2 = $address2;
        $formfive->contact1 = $contact_no1;
        $formfive->contact2 = $contact_no2;
        $formfive->email = $email;
        $formfive->objective = $objective;
        $formfive->a_qualify1 = $a_qualify1;
        $formfive->a_qualify2 = $a_qualify2;
        $formfive->a_qualify3 = $a_qualify3;
        $formfive->a_qualify4 = $a_qualify4;
        $formfive->a_qualify5 = $a_qualify5;
        $formfive->a_qualify6 = $a_qualify6;
        $formfive->skill_ability = $skill_ability;
        $formfive->subject1 = $subject1;
        $formfive->result1 = $results1;
        $formfive->subject2 = $subject2;
        $formfive->result2 = $results2;
        $formfive->subject3 = $subject3;
        $formfive->result3 = $results3;

        $formfive->subject4 = $request->input('subject4');
        $formfive->subject5 = $request->input('subject5');
        $formfive->result4 = $request->input('results4');
        $formfive->result5 = $request->input('results5');
        $formfive->result6 = $request->input('results6');


        $formfive->ol_subject1 = $request->input('ol_subject1');
        $formfive->ol_result1 = $request->input('ol_result1');
        $formfive->ol_subject2 = $request->input('ol_subject2');
        $formfive->ol_result2 = $request->input('ol_result2');

        $formfive->al_subject1 = $request->input('al_subject1');
        $formfive->al_result1 = $request->input('al_result1');
        $formfive->al_subject2 = $request->input('al_subject2');
        $formfive->al_result2 = $request->input('al_result2');

        $formfive->lead1 = $request->input('lead1');
        $formfive->lead2 = $request->input('lead2');
        $formfive->lead3 = $request->input('lead3');
        $formfive->lead4 = $request->input('lead4');
        $formfive->lead5 = $request->input('lead5');
        $formfive->lead6 = $request->input('lead6');
        $formfive->lead7 = $request->input('lead7');


        $formfive->game1 = $request->input('game1');
        $formfive->game2 = $request->input('game2');
        $formfive->game3 = $request->input('game3');
        $formfive->game4 = $request->input('game4');

        $formfive->skill1 = $request->input('skill1');
        $formfive->skill2 = $request->input('skill2');
        $formfive->skill3 = $request->input('skill3');
        $formfive->skill4 = $request->input('skill4');
        $formfive->skill5 = $request->input('skill5');
        $formfive->skill6 = $request->input('skill6');

        $formfive->dob = $request->input('dob');
        $formfive->m_status = $request->input('m_status');
        $formfive->nationality = $request->input('nationality');
        $formfive->nic = $request->input('nic');
        $formfive->school = $request->input('school');

        $formfive->non_refree1_name = $request->input('non_refree1_name');
        $formfive->non_refree1_post = $request->input('non_refree1_post');
        $formfive->non_refree1_workplace = $request->input('non_refree1_workplace');
        $formfive->non_refree1_tel = $request->input('non_refree1_tel');

        $formfive->non_refree2_name = $request->input('non_refree2_name');
        $formfive->non_refree2_post = $request->input('non_refree2_post');
        $formfive->non_refree2_workplace = $request->input('non_refree2_workplace');
        $formfive->non_refree2_tel = $request->input('non_refree2_tel');

        $formfive->save();

        $design = 5;

        $res['success'] = true;
        $res['message']= $design;
        return response( $res );
    }

    public function formSixSave(Request $request) {

//dd($request);
        $user = Auth::user();
        $user_id = $user->id;

        $main_image = $request->file('main_image');
        $full_name = $request->input('full_name');

        $contact_email = $request->input('email');
        $contact1 = $request->input('contact1');
        $contact2 = $request->input('contact2');
        $address1 = $request->input('address1');
        $address2 = $request->input('address2');
        $statement = $request->input('statement');
        $edu_qulify1 = $request->input('edu_qulify1');
        $edu_qulify2 = $request->input('edu_qulify2');
        $edu_qulify3 = $request->input('edu_qulify3');
        $edu_qulify4 = $request->input('edu_qulify4');

        $employ1 = $request->input('employ1');
        $employ_description = $request->input('employ_description');
        $achievement1 = $request->input('achievement1');
        $achievement2 = $request->input('achievement2');


        $formSix = new FormSix();

        $formSix->user_id = $user_id;

        if(!empty($main_image)) {

            $file_e = File::extension($main_image->getClientOriginalName());
            $file_ex = strtolower(File::extension($main_image->getClientOriginalName()));

            if($file_ex != "png" && $file_ex != "jpg" && $file_ex != "jpeg" && $file_ex != "gif") {
                $res['success'] = false;
                $res['message']= 'Invalid photo type!';
                return response( $res );
            }

            $filename = uniqid().".".$file_ex;
            $main_image->storeAs('public/forms/form6', $filename);

            $formSix->main_image = $filename;
        }

        $formSix->full_name = $full_name;
        $formSix->email = $contact_email;
        $formSix->contact1 = $contact1;
        $formSix->contact2 = $contact2;
        $formSix->address1 = $address1;
        $formSix->address2 = $address2;
        $formSix->statement = $statement;

        $formSix->edu_qualify1 = $edu_qulify1;
        $formSix->edu_qualify2 = $edu_qulify2;
        $formSix->edu_qualify3 = $edu_qulify3;
        $formSix->edu_qualify4 = $edu_qulify4;

        $formSix->employ1 = $employ1;
        $formSix->employ_description = $employ_description;
        $formSix->achievement1 = $achievement1;
        $formSix->achievement2 = $achievement2;


        $formSix->technical_skills = $request->input('technical_skills');
        $formSix->other_skills = $request->input('other_skills');
        $formSix->p_name = $request->input('p_name');
        $formSix->p_address = $request->input('p_address');
        $formSix->p_dob = $request->input('p_dob');
        $formSix->p_age = $request->input('p_age');
        $formSix->p_gender = $request->input('p_gender');
        $formSix->p_Status = $request->input('p_Status');

        $formSix->non_refree1_name = $request->input('non_refree1_name');
        $formSix->non_refree1_post = $request->input('non_refree1_post');
        $formSix->non_refree1_workplace = $request->input('non_refree1_workplace');
        $formSix->non_refree1_tel = $request->input('non_refree1_tel');
        $formSix->non_refree1_email = $request->input('non_refree1_email');

        $formSix->non_refree2_name = $request->input('non_refree2_name');
        $formSix->non_refree2_post = $request->input('non_refree2_post');
        $formSix->non_refree2_workplace = $request->input('non_refree2_workplace');
        $formSix->non_refree2_tel = $request->input('non_refree2_tel');
        $formSix->non_refree2_email = $request->input('non_refree2_email');


        $formSix->save();

        $design = 6;

        $res['success'] = true;
        $res['message']= $design;
        return response( $res );

    }

    public function formSevenSave(Request $request) {


        $user = Auth::user();
        $user_id = $user->id;

        $main_image = $request->file('main_image');
        $full_name = $request->input('full_name');
        $address1 = $request->input('address1');
        $address2 = $request->input('address2');
        $contact1 = $request->input('contact1');
        $contact2 = $request->input('contact2');
        $email = $request->input('email');

        $exp1 = $request->input('exp1');
        $exp1_description = $request->input('exp1_description');
        $exp2 = $request->input('exp2');
        $exp2_description = $request->input('exp2_description');

        $edu_qulify1 = $request->input('edu_qualify1');
        $edu_qulify2 = $request->input('edu_qualify2');
        $edu_qulify3 = $request->input('edu_qualify3');
        $edu_qulify4 = $request->input('edu_qualify4');
        $edu_qulify5 = $request->input('edu_qualify5');
        $edu_qulify6 = $request->input('edu_qualify6');


        $formSeven = new FormSeven();

        $formSeven->user_id = $user_id;

        if(!empty($main_image)) {

            $file_e = File::extension($main_image->getClientOriginalName());
            $file_ex = strtolower(File::extension($main_image->getClientOriginalName()));

            if($file_ex != "png" && $file_ex != "jpg" && $file_ex != "jpeg" && $file_ex != "gif") {
                $res['success'] = false;
                $res['message']= 'Invalid photo type!';
                return response( $res );
            }

            $filename = uniqid().".".$file_ex;
            $main_image->storeAs('public/forms/form7', $filename);

            $formSeven->main_image = $filename;
        }

        $formSeven->full_name = $full_name;
        $formSeven->address1 = $address1;
        $formSeven->address2 = $address2;
        $formSeven->contact1 = $contact1;
        $formSeven->contact2 = $contact2;
        $formSeven->email = $email;
        $formSeven->exp1 = $exp1;
        $formSeven->exp1_description = $exp1_description;
        $formSeven->exp2 = $exp2;
        $formSeven->exp2_description = $exp2_description;

        $formSeven->edu_qualify1 = $edu_qulify1;
        $formSeven->edu_qualify2 = $edu_qulify2;
        $formSeven->edu_qualify3 = $edu_qulify3;
        $formSeven->edu_qualify4 = $edu_qulify4;
        $formSeven->edu_qualify5 = $edu_qulify5;
        $formSeven->edu_qualify6 = $edu_qulify6;

        $formSeven->edu_qualification = $request->input('edu_qualification');
        $formSeven->edu_time = $request->input('edu_time');
        $formSeven->ol_subject1 = $request->input('ol_subject1');
        $formSeven->ol_subject2 = $request->input('ol_subject2');
        $formSeven->ol_subject3 = $request->input('ol_subject3');
        $formSeven->ol_result1 = $request->input('ol_result1');
        $formSeven->ol_result2 = $request->input('ol_result2');
        $formSeven->ol_result3 = $request->input('ol_result3');
        $formSeven->al_subject1 = $request->input('al_subject1');
        $formSeven->al_subject2 = $request->input('al_subject2');
        $formSeven->al_subject3 = $request->input('al_subject3');
        $formSeven->al_subject4 = $request->input('al_subject4');
        $formSeven->al_result1 = $request->input('al_result1');
        $formSeven->al_result2 = $request->input('al_result2');
        $formSeven->al_result3 = $request->input('al_result3');
        $formSeven->al_result4 = $request->input('al_result4');
        $formSeven->dob = $request->input('dob');
        $formSeven->age = $request->input('age');
        $formSeven->m_status = $request->input('m_status');
        $formSeven->gender = $request->input('gender');
        $formSeven->languages = $request->input('languages');
        $formSeven->nationality = $request->input('nationality');
        $formSeven->religion = $request->input('religion');

        $formSeven->sport1 = $request->input('sport1');
        $formSeven->sport2 = $request->input('sport2');
        $formSeven->sport3 = $request->input('sport3');



        $formSeven->non_refree1_name = $request->input('non_refree1_name');
        $formSeven->non_refree1_post = $request->input('non_refree1_post');
        $formSeven->non_refree1_workplace = $request->input('non_refree1_workplace');
        $formSeven->non_refree1_tel = $request->input('non_refree1_tel');

        $formSeven->non_refree2_name = $request->input('non_refree2_name');
        $formSeven->non_refree2_post = $request->input('non_refree2_post');
        $formSeven->non_refree2_workplace = $request->input('non_refree2_workplace');
        $formSeven->non_refree2_tel = $request->input('non_refree2_tel');

        $formSeven->save();

        $design = 7;

        $res['success'] = true;
        $res['message']= $design;
        return response( $res );

    }

    public function formEightSave(Request $request) {

        $user = Auth::user();
        $user_id = $user->id;

        $main_image = $request->file('main_image');
        $full_name = $request->input('full_name');
        $address1 = $request->input('address1');
        $address2 = $request->input('address2');
        $address3 = $request->input('address3');
        $address4 = $request->input('address4');

        $contact1 = $request->input('contact1');
        $objective = $request->input('objective');

        $dob = $request->input('dob');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $school = $request->input('school');
        $martial_status = $request->input('martial_status');

        $nationality = $request->input('nationality');
        $nic = $request->input('nic');


        $pro_qualify = $request->input('pro_qualify');


        $formEight = new FormEight();

        $formEight->user_id = $user_id;

        if(!empty($main_image)) {

            $file_e = File::extension($main_image->getClientOriginalName());
            $file_ex = strtolower(File::extension($main_image->getClientOriginalName()));

            if($file_ex != "png" && $file_ex != "jpg" && $file_ex != "jpeg" && $file_ex != "gif") {
                $res['success'] = false;
                $res['message']= 'Invalid photo type!';
                return response( $res );
            }

            $filename = uniqid().".".$file_ex;
            $main_image->storeAs('public/forms/form8', $filename);

            $formEight->main_image = $filename;
        }
        $formEight->full_name = $full_name;
        $formEight->address1 = $address1;
        $formEight->address2 = $address2;
        $formEight->address3 = $address3;
        $formEight->address4 = $address4;
        $formEight->contact1 = $contact1;
        $formEight->objective = $objective;
        $formEight->dob = $dob;
        $formEight->age = $age;
        $formEight->gender = $gender;
        $formEight->school = $school;
        $formEight->martial_status = $martial_status;
        $formEight->nationality = $nationality;
        $formEight->nic = $nic;
        $formEight->pro_qualify = $pro_qualify;

        $formEight->skill1 = $request->input('skill1');
        $formEight->skill2 = $request->input('skill2');
        $formEight->skill3 = $request->input('skill3');
        $formEight->skill4 = $request->input('skill4');

        $formEight->al_stream = $request->input('al_stream');
        $formEight->al_year = $request->input('al_year');
        $formEight->al_index = $request->input('al_index');
        $formEight->al_subject1 = $request->input('al_subject1');
        $formEight->al_subject2 = $request->input('al_subject2');
        $formEight->al_subject3 = $request->input('al_subject3');
        $formEight->al_subject4 = $request->input('al_subject4');

        $formEight->al_grade1 = $request->input('al_grade1');
        $formEight->al_grade2 = $request->input('al_grade2');
        $formEight->al_grade3 = $request->input('al_grade3');
        $formEight->al_grade4 = $request->input('al_grade4');

        $formEight->ol_year = $request->input('ol_year');
        $formEight->ol_subject1 = $request->input('ol_subject1');
        $formEight->ol_subject2 = $request->input('ol_subject2');
        $formEight->ol_subject3 = $request->input('ol_subject3');
        $formEight->ol_subject4 = $request->input('ol_subject4');
        $formEight->ol_subject5 = $request->input('ol_subject5');
        $formEight->ol_subject6 = $request->input('ol_subject6');
        $formEight->ol_subject7 = $request->input('ol_subject7');
        $formEight->ol_subject8 = $request->input('ol_subject8');
        $formEight->ol_subject9 = $request->input('ol_subject9');

        $formEight->ol_grade1 = $request->input('ol_grade1');
        $formEight->ol_grade2 = $request->input('ol_grade2');
        $formEight->ol_grade3 = $request->input('ol_grade3');
        $formEight->ol_grade4 = $request->input('ol_grade4');
        $formEight->ol_grade5 = $request->input('ol_grade5');
        $formEight->ol_grade6 = $request->input('ol_grade6');
        $formEight->ol_grade7 = $request->input('ol_grade7');
        $formEight->ol_grade8 = $request->input('ol_grade8');
        $formEight->ol_grade9 = $request->input('ol_grade9');

        $formEight->job1 = $request->input('job1');
        $formEight->job2 = $request->input('job2');

        $formEight->job1_company = $request->input('job1_company');
        $formEight->job2_company = $request->input('job2_company');
        $formEight->job1_period = $request->input('job1_period');
        $formEight->job2_period = $request->input('job2_period');



        $formEight->non_refree1_name = $request->input('non_refree1_name');
        $formEight->non_refree1_post = $request->input('non_refree1_post');
        $formEight->non_refree1_workplace = $request->input('non_refree1_workplace');
        $formEight->non_refree1_tel = $request->input('non_refree1_tel');

        $formEight->non_refree2_name = $request->input('non_refree2_name');
        $formEight->non_refree2_post = $request->input('non_refree2_post');
        $formEight->non_refree2_workplace = $request->input('non_refree2_workplace');
        $formEight->non_refree2_tel = $request->input('non_refree2_tel');


        $formEight->save();

        $design = 8;

        $res['success'] = true;
        $res['message']= $design;
        return response( $res );
    }

    public function formNineSave(Request $request) {


        $user = Auth::user();
        $user_id = $user->id;

        $full_name = $request->input('full_name');
        $address1 = $request->input('address1');
        $contact1 = $request->input('contact1');
        $email = $request->input('email');
        $objective = $request->input('objective');
        $skill1 = $request->input('skill1');
        $skill2 = $request->input('skill2');
        $skill3 = $request->input('skill3');
        $skill4 = $request->input('skill4');
        $skill5 = $request->input('skill5');
        $exp1 = $request->input('exp1');
        $exp2 = $request->input('exp2');
        $exp3 = $request->input('exp3');
        $al_year = $request->input('al_year');
        $al_index = $request->input('al_index');
        $al_subject1 = $request->input('al_subject1');
        $al_subject2 = $request->input('al_subject2');
        $al_results1 = $request->input('al_results1');
        $al_results2 = $request->input('al_results2');

        $ol_year = $request->input('ol_year');
        $ol_index = $request->input('ol_index');
        $subject1 = $request->input('subject1');
        $subject2 = $request->input('subject2');
        $subject3 = $request->input('subject3');
        $subject4 = $request->input('subject4');
        $subject5 = $request->input('subject5');
        $subject6 = $request->input('subject6');
        $subject7 = $request->input('subject7');
        $subject8 = $request->input('subject8');
        $subject9 = $request->input('subject9');
        $subject10 = $request->input('subject10');

        $results1 = $request->input('results1');
        $results2 = $request->input('results2');
        $results3 = $request->input('results3');
        $results4 = $request->input('results4');
        $results5 = $request->input('results5');
        $results6 = $request->input('results6');
        $results7 = $request->input('results7');
        $results8 = $request->input('results8');
        $results9 = $request->input('results9');
        $results10 = $request->input('results10');

        $name_in_full = $request->input('name_in_full');
        $nationality = $request->input('nationality');
        $nic = $request->input('nic');
        $dob = $request->input('dob');

        $age = $request->input('age');
        $martial_status = $request->input('martial_status');
        $p_address = $request->input('p_address');
        $school = $request->input('school');


        $formNine = new FormNine();

        $formNine->user_id = $user_id;

        $formNine->full_name = $full_name;
        $formNine->address1 = $address1;
        $formNine->contact1 = $contact1;
        $formNine->email = $email;
        $formNine->objective = $objective;
        $formNine->skill1 = $skill1;
        $formNine->skill2 = $skill2;
        $formNine->skill3 = $skill3;
        $formNine->skill4 = $skill4;
        $formNine->skill5 = $skill5;

        $formNine->exp1 = $exp1;
        $formNine->exp2 = $exp2;
        $formNine->exp3 = $exp3;

        $formNine->al_year = $al_year;
        $formNine->al_index_no = $al_index;
        $formNine->al_subject1 = $al_subject1;
        $formNine->al_subject2 = $al_subject2;
        $formNine->al_result1 = $al_results1;
        $formNine->al_result2 = $al_results2;

        $formNine->ol_year = $ol_year;
        $formNine->ol_index_no = $ol_index;


        $formNine->subject1 = $subject1;
        $formNine->subject2 = $subject2;
        $formNine->subject3 = $subject3;
        $formNine->subject4 = $subject4;
        $formNine->subject5 = $subject5;
        $formNine->subject6 = $subject6;
        $formNine->subject7 = $subject7;
        $formNine->subject8 = $subject8;
        $formNine->subject9 = $subject9;
        $formNine->subject10 = $subject10;

        $formNine->result1 = $results1;
        $formNine->result2 = $results2;
        $formNine->result3 = $results3;
        $formNine->result4 = $results4;
        $formNine->result5 = $results5;
        $formNine->result6 = $results6;
        $formNine->result7 = $results7;
        $formNine->result8 = $results8;
        $formNine->result9 = $results9;
        $formNine->result10 = $results10;




        $formNine->name_in_full = $name_in_full;
        $formNine->nationality = $nationality;
        $formNine->nic = $nic;
        $formNine->dob = $dob;
        $formNine->age = $age;
        $formNine->martial_status = $martial_status;
        $formNine->p_address = $p_address;
        $formNine->school = $school;




        $formNine->save();

        $design = 9;
        $res['success'] = true;
        $res['message']= $design;
        return response( $res );


    }
}
