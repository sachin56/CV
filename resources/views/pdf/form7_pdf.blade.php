<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$user_email}}</title>
</head>

<body>

<table style="width: 670px;" align="center">
    <tr style="width: 500px;">
        <td align="center">
            <h1 style=""><u>Curriculum Vitae</u></h1>
            <lable>{{$data->full_name}}</lable>
        </td>
        <td style="text-align: right">
            <img src="{{URL('storage/forms/form7')}}/{{$data->main_image}}" alt="photo" style="margin-left:20px;width:150px;height:150px">
        </td>
        <td style="text-align: right">
        </td>
    </tr>


    <tr >
        <td>{{$data->address1}},<br>{{$data->address2}}.<br>Telephone :{{$data->contact1}}(mobile)<br>Email :{{$data->email}}</td>
    </tr>


</table>

<hr>


<div style="">
    <h4><u>PROFESSIONAL EXPERIENCE</u></h4>
</div>

<ul>
    <div style="text-align:left">
        <div style="">
            <lable><li>{{$data->exp1}}</li></lable>
            <lable><li>{{$data->exp1_description}} </li></lable>
        </div>

        <div style="">
            <lable><li>{{$data->exp2}}</li></lable>
            <lable><li>{{$data->exp2_description}} </li></lable>

        </div>

        </div>
</ul>

<div style="text-align:left"><h4><u>HIGHIER EDUCATION QUALIFICATION</u></h4></div>

<ul>
<label><li>{{$data->edu_qualify1}}</li></label>
<label><li>{{$data->edu_qualify2}}</li></label>
<label><li>{{$data->edu_qualify3}}</li></label>
<label><li>{{$data->edu_qualify4}}</li></label>
<label><li>{{$data->edu_qualify5}}</li></label>
<label><li>{{$data->edu_qualify6}}</li></label>
</ul>
<div style="text-align:left"><h4><u>EDUCATION QUALIFICATION</u></h4></div>
<ul>
<table style="width:100%">
    <tr>
        <td>{{$data->edu_qualification}}</td>
        <td>{{$data->edu_time}}</td>

    </tr>
</table>
</ul>

<div style="text-align:left"><h4><u>General Certificate of Education (Ordinary Level) Examination </u></h4></div>
<ul>
<table style="width:70%">
    <tr>
        <td><u>Subject</u></td>
        <td><u>Grade</u></td>
    </tr>
    <tr>
        <td>{{$data->ol_subject1}}</td>
        <td>{{$data->ol_result1}}</td>
    </tr>
    <tr>
        <td>{{$data->ol_subject1}}</td>
        <td>{{$data->ol_result2}}</td>
    </tr>
    <tr>
        <td>{{$data->ol_subject3}}</td>
        <td>{{$data->ol_result3}}</td>
    </tr>

</table>
</ul>
<div style="text-align:left"><h4><u>General Certificate of Education (Advanced Level) Examination</u></h4></div>
<ul>
<table style="width:70%">
    <tr>
        <td><u>Subject</u></td>
        <td><u>Grade</u></td>
    </tr>
    <tr>
        <td>{{$data->al_subject1}}</td>
        <td>{{$data->al_result1}}</td>
    </tr>
    <tr>
        <td>{{$data->al_subject1}}</td>
        <td>{{$data->al_result2}}</td>
    </tr>
    <tr>
        <td>{{$data->al_subject1}}</td>
        <td>{{$data->al_result3}}</td>
    </tr>
    <tr>
        <td>{{$data->al_subject4}}</td>
        <td>{{$data->al_result4}}</td>
    </tr>

</table>
</ul>
<div style="text-align:left"><h4><u><div style="text-align:left"><h4><u>SPORTS & CURRICULAR ACTIVITIES</u></h4></div></u></h4></div>
<ul>
<lable>{{$data->sport1}}</lable><br>
<lable>{{$data->sport2}}</lable><br>
<lable>{{$data->sport3}}</lable><br>
</ul>

<div style="text-align:left"><h4><u><div style="text-align:left"><h4><u>REFEREES</u></h4></div></u></h4></div>
<ul>
<table style="width:70%">
    <tr>
        <td>{{$data->non_refree1_name}}</td>
        <td><u><b>{{$data->non_refree2_name}}</b></u></td>
    </tr>
    <tr>
        <td>{{$data->non_refree1_post}}</td>
        <td>{{$data->non_refree2_workplace}}</td>
    </tr>
    <tr>
        <td>{{$data->non_refree1_workplace}}</td>
        <td>{{$data->non_refree2_tel}}</td>
    </tr>
    <tr>
        <td>{{$data->non_refree1_tel}}</td>

    </tr>

</table></ul>
<br>
<label >I certify that the above mentioned particulars submitted by me are true and correct according to <br>the best of my knowledge, and I assure you an efficient service, if given an opportunity to serve you.</label>

</body>



