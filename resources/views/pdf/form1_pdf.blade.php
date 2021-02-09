<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{$user_email}}</title>
</head>

<body>
<table style="width: 670px;" align="center">
    <tr style="height: 120px;">
        <td style="text-align: center">
            <b>{{$data->full_name}}</b><br>
            <b>{{$data->address1}},</b><br>
            <b>{{$data->address2}},</b><br>
            <b>{{$data->address3}}.</b><br>
            <b>Tel: {{$data->contact1}}, {{$data->contact2}}</b><br>
            <b>Email address: {{$data->email}}</b><br><br>
        </td>
        <td style="width: 120px;">
            <img src="{{URL('storage/forms/form1')}}/{{$data->main_image}}" alt="photo" height="120" width="120">
        </td>
    </tr><br><br>


</table>

<table style="width: 670px;" align="center">
    <tr>
        <td><b>PERSONAL PROFILE</b><br></td>
    </tr>
    <tr>
        <td>
            <p>
                {{$data->personal_profile}}
            </p>
        </td>
    </tr>
    <tr>
        <td style="height: 50px">
            <label><b>Date of Birth</b>:{{$data->personal_profile}}</label><br>
            <label><b>Civil Status</b>:{{$data->civil_status}}</label><br>
            <label><b>Sex</b>:{{$data->sex}}</label><br>
            <label><b>Religion</b>:{{$data->religion}}</label><br>
            <label><b>NIC Number</b>:{{$data->nic}}</label><br>
        </td>
    </tr>
</table>

<table style="width: 670px;" align="center">
    <tr>
        <td style="height: 50px">
            <h3><b>EDUCATIONAL QUALIFICATIONS</b></h3>
        </td>
    </tr>
</table>
<table style="width: 670px;" align="center">
    <tr>
        <td>{{$data->subject1}}</td>
        <td>{{$data->result1}}</td>
    </tr>

    <tr>
        <td>{{$data->subject2}}</td>
        <td>{{$data->result2}}</td>
    </tr>

    <tr>
        <td>{{$data->subject3}}</td>
        <td>{{$data->result3}}</td>
    </tr>

    <tr>
        <td>{{$data->subject4}}</td>
        <td>{{$data->result4}}</td>
    </tr>

    <tr>
        <td>{{$data->subject5}}</td>
        <td>{{$data->result5}}</td>
    </tr>

    <tr>
        <td>{{$data->subject6}}</td>
        <td>{{$data->result6}}</td>
    </tr>

    <tr>
        <td>{{$data->subject7}}</td>
        <td>{{$data->result7}}</td>
    </tr>

    <tr>
        <td>{{$data->subject8}}</td>
        <td>{{$data->result8}}</td>
    </tr>

    <tr>
        <td>{{$data->subject9}}</td>
        <td>{{$data->result9}}</td>
    </tr>
</table>

<table style="width: 670px;" align="center">
    <tr style="margin-bottom: 20px">
        <td style="height: 50px">
            <label><b>G.C.E(A/L) Examination</b></label><br>
            {{--            <label><b>(Mahanama College - Colombo 03)</b></label><br>--}}
        </td>
    </tr>
</table>
<table style="width: 670px;" align="center">
    <tr>
        <td>{{$data->al_subject1}}</td>
        <td>{{$data->al_result1}}</td>
    </tr>
    <tr>
        <td>{{$data->al_subject2}}</td>
        <td>{{$data->al_result2}}</td>
    </tr>
    <tr>
        <td>{{$data->al_subject3}}</td>
        <td>{{$data->al_result3}}</td>
    </tr>
    <tr>
        <td>{{$data->al_subject4}}</td>
        <td>{{$data->al_result4}}</td>
    </tr>
    {{--    <tr>--}}
    {{--        <td style="text-align: center">Z-Score - 1.73</td>--}}
    {{--    </tr>--}}
</table>
<br><br>
<table style="width: 670px;" align="center">
    <tr>
        <td>
{{--            <label><b>Damma School FInal Certification Examination</b>(Index No. 8016690)</label><br>--}}
            <p>{{$data->other_qualify}}</p><br>
        </td>
    </tr>


{{--    <tr>--}}
{{--        <td>Life of the Buddha</td>--}}
{{--        <td>-C</td>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <td>Buddhism and Proficiency in pali</td>--}}
{{--        <td>-D</td>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <td>History of Buddha Sasana</td>--}}
{{--        <td>-D</td>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <td>Buddhist Culture</td>--}}
{{--        <td>-D</td>--}}
{{--    </tr>--}}
</table>
<div class="page_break" style="page-break-before: always;"></div>

<table style="width: 670px;" align="center">
    <tr style="margin-bottom: 20px">
        <td style="height: 50px">
            <label><b>ACEDEMIC QUALIFICATIONS</b></label><br>

        </td>
    </tr>
</table>
<table style="width: 670px;" align="center">
    <tr>
        <td>

            <label>{{$data->a_qualify1}}</label><br>
            <label>{{$data->a_qualify2}}</label><br>
            <label>{{$data->a_qualify3}}</label><br>
            <label>{{$data->a_qualify4}}</label><br>
        </td>
    </tr>
</table>
<table style="width: 670px;" align="center">
    <tr style="margin-bottom: 20px">
        <td style="height: 50px">
            <label><b>PROFESSIONAL QUALIFICATION</b></label><br>

        </td>
    </tr>
</table>
<table style="width: 670px;" align="center">
    <tr>
        <td>

            <label>{{$data->p_qualify1}}</label><br>
            <label>{{$data->p_qualify2}}</label><br>
            <label>{{$data->p_qualify3}}</label><br>
            <label>{{$data->a_qualify4}}</label><br>
        </td>
    </tr>
</table>
<table style="width: 670px;" align="center">
    <tr style="margin-bottom: 20px">
        <td style="height: 50px">
            <label><b>SKILLS AND COMPETENCIES</b></label><br>

        </td>
    </tr>
</table>
<table style="width: 670px;" align="center">
    <tr>
        <td>

            <label>{{$data->skill1}}</label><br>
            <label>{{$data->skill2}}</label><br>
            <label>{{$data->skill3}}</label><br>
            <label>{{$data->skill4}}</label><br>
            <label>{{$data->skill5}}</label><br>
            <label>{{$data->skill6}}</label><br>
        </td>
    </tr>
</table>
<table style="width: 670px;" align="center">
    <tr style="margin-bottom: 20px">
        <td style="height: 50px">
            <label><b>NON-RELATED REFEREES</b></label><br>

        </td>
    </tr>
</table>
<table style="width: 670px;" align="center">
    <tr>
        <td>
            <label>{{$data->non_refree1_name}}</label><br>
        </td>
    </tr>
</table>

<table style="width: 670px;" align="center">
    <tr>
        <td>
            <label>{{$data->non_refree1_post}}</label><br>
            <label>{{$data->non_refree1_workplace}}</label><br>
            <label>{{$data->non_refree1_tel}}</label><br>
        </td>
    </tr>
</table>
<br><br>
<table style="width: 670px;" align="center">
    <tr>
        <td>
            <label>{{$data->non_refree2_name}}</label><br>
        </td>
    </tr>
</table>
<table style="width: 670px;" align="center">
    <tr>
        <td>
            <label>{{$data->non_refree2_post}}</label><br>
            <label>{{$data->non_refree2_workplace}}</label><br>
            <label>{{$data->non_refree2_tel}}</label><br>

        </td>
    </tr>
</table>




</body>
</html>
