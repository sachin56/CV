<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$user_email}}</title>

</head>
<body>
<ul>
<table style= "width:670px" align="center" border="0">
    <tr style= "height: 100px">
        <td align="left">{{$data->full_name}}</td>
    </tr>
    <tr style= "height: 120px">
        <td>{{$data->address1}},<br>{{$data->address2}},<br>{{$data->address3}},<br>{{$data->address4}}.<br>Telephone :{{$data->contact1}}(mobile)</td>
        <td>
            <img src="{{URL('storage/forms/form8')}}/{{$data->main_image}}" alt="photo" style="margin-left:20px;width:150px;height:150px">
        </td>
    </tr>
</table></ul>
<br>
<br>
<table style="height: 20px" width="620px" align="center" border="1">
    <tr><td style="text-align:left"><b>OBJECTIVE</b></td></tr>
</table><br>
<table style="height: 20px" width="620px" align="center" border="0">
    <tr><td style="text-align:left">
            <p>{{$data->objective}}</p>
        </td></tr>
</table>
<table style="height: 20px" width="620px" align="center" border="1">
    <tr><td style="text-align:left"><b>PERSONAL PROFILE</b></td></tr>
</table><br>
<table style="height: 20px" width="500px" align="center" border="0">
    <tr><td style="text-align:left">
            Date of Birth
        </td>
        <td>:</td>
        <td style="text-align: left">{{$data->dob}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            Age
        </td>
        <td>:</td>
        <td style="text-align: left"> {{$data->age}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            Gender
        </td>
        <td>:</td>
        <td style="text-align: left"> {{$data->gender}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            School Attended
        </td>
        <td>:</td>
        <td style="text-align: left"> {{$data->school}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            Marital Status
        </td>
        <td>:</td>
        <td style="text-align: left"> {{$data->martial_status}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            NAtionality
        </td>
        <td>:</td>
        <td style="text-align: left"> {{$data->nationality}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            NIC Number
        </td>
        <td>:</td>
        <td style="text-align: left"> {{$data->nic}}
        </td>
    </tr>
</table>

<table style="height: 20px;margin-top: 20px;" width="620px" align="center" border="1">
    <tr><td style="text-align:left"><b>PROFESSIONAL QUALIFICATIONS</b></td></tr>
</table><br>
<table style="height: 20px" width="500px" align="center" border="0">
    <tr><td style="text-align: left">
            <div><p>{{$data->pro_qualify}}</p></div>
        </td></tr>
</table>


<table style="height: 20px;margin-top: 20px;" width="620px" align="center" border="1">
    <tr><td style="text-align:left"><b>KEY SKILLS</b></td></tr>
</table><br>
<table style="height: 20px" width="500px" align="center" border="0">
    <tr><td style="text-align: left">
            <div><p>{{$data->skill1}}</p></div>
        </td></tr>
    <tr><td style="text-align: left">
            <div><p>{{$data->skill2}}</p></div>
        </td></tr>
    <tr><td style="text-align: left">
            <div><p>{{$data->skill3}}</p></div>
        </td></tr>
    <tr><td style="text-align: left">
            <div><p>{{$data->skill4}}</p></div>
        </td></tr>
</table>

<table style="height: 20px" width="620px" align="center" border="1">
    <tr><td style="text-align:left"><b>EDUCATIONAL QUALIFICATIONS</b></td></tr>
</table><br>



<table style="height: 20px" width="620px" align="center" border="0">
    <tr><td style="text-align:left"><b>General Certificate of Education – (Advanced Level) – {{$data->al_year}}.
            </b></td></tr>
</table><br>


<table style="height: 20px" width="500px" align="center" border="0">
    <tr><td style="text-align:left">
            {{$data->al_subject1}}
        </td>
{{--        <td>:</td>--}}
        <td style="text-align: left">{{$data->al_grade1}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->al_subject2}}
        </td>
{{--        <td>:</td>--}}
        <td style="text-align: left"> {{$data->al_grade2}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->al_subject3}}
        </td>
{{--        <td>:</td>--}}
        <td style="text-align: left"> {{$data->al_grade3}}
        </td>
    </tr>

</table>

<br>

<table style="height: 20px" width="620px" align="center" border="0">
    <tr><td style="text-align:left"><b>General Certificate of Education – (Ordinary Level) – {{$data->ol_year}}.
            </b></td></tr>
</table><br>

<table style="height: 20px" width="500px" align="center" border="0">
    <tr><td style="text-align:left">
            {{$data->ol_subject1}}
        </td>
{{--        <td>-</td>--}}
        <td style="text-align: left">{{$data->ol_grade1}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->ol_subject2}}
        </td>
{{--        <td>-</td>--}}
        <td style="text-align: left"> {{$data->ol_grade2}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->ol_subject3}}
        </td>
{{--        <td>-</td>--}}
        <td style="text-align: left"> {{$data->ol_grade3}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->ol_subject4}}
        </td>
{{--        <td>-</td>--}}
        <td style="text-align: left"> {{$data->ol_grade4}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->ol_subject5}}
        </td>
{{--        <td>-</td>--}}
        <td style="text-align: left"> {{$data->ol_grade5}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->ol_subject6}}
        </td>
{{--        <td>-</td>--}}
        <td style="text-align: left"> {{$data->ol_grade6}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->ol_subject7}}
        </td>
{{--        <td>-</td>--}}
        <td style="text-align: left"> {{$data->ol_grade7}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->ol_subject8}}
        </td>
{{--        <td>-</td>--}}
        <td style="text-align: left"> {{$data->ol_grade8}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->ol_subject9}}
        </td>
{{--        <td>-</td>--}}
        <td style="text-align: left"> {{$data->ol_grade9}}
        </td>
    </tr>
</table>
<br>

<table style="height: 20px" width="620px" align="center" border="1">
    <tr><td style="text-align:left"><b>WORKING  EXPERIENCE</b></td></tr>
</table><br>
<table style="height: 20px" width="500px" align="center" border="0">
    <tr><td style="text-align:left">
            {{$data->job1}}
        </td>
{{--        <td>:</td>--}}
        <td style="text-align: left">{{$data->job1_company}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            Period
        </td>
{{--        <td>:</td>--}}
        <td style="text-align: left"> {{$data->job1_period}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->job2}}
        </td>
{{--        <td>:</td>--}}
        <td style="text-align: left"> {{$data->job1_company}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            Period
        </td>
{{--        <td>:</td>--}}
        <td style="text-align: left"> {{$data->job1_period}}
        </td>
    </tr>

</table>
<br>

<table style="height: 20px" width="620px" align="center" border="1">
    <tr><td style="text-align:left"><b>NON RELATED REFEREES</b></td></tr>
</table><br>
<table style="height: 20px" width="500px" align="center" border="0">
    <tr><td style="text-align:left">
            {{$data->non_refree1_name}}
        </td>
        <td></td>
        <td style="text-align: left">{{$data->non_refree2_name}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->non_refree1_post}}
        </td>
        <td></td>
        <td style="text-align: left"> {{$data->non_refree2_post}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->non_refree1_workplace}}
        </td>
        <td></td>
        <td style="text-align: left"> {{$data->non_refree2_workplace}}
        </td>
    </tr>
    <tr><td style="text-align:left">
            {{$data->non_refree1_tel}}
        </td>
        <td></td>
        <td style="text-align: left"> {{$data->non_refree2_tel}}
        </td>
    </tr>



</table>


</body>
</html>
