<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$user_email}}</title>



</head>
<body>

<table style="width: 670px;" align="center">
    <tr style="width: 600px;height:150px;">
        <td align="center">
            <h4 style="text-align: center">{{$data->full_name}}</h4><br>{{$data->email}}<br>{{$data->contact1}},{{$data->contact2}}<br>{{$data->address1}},<br>{{$data->address2}}.
        </td>
        <td style="text-align: right">
            <img src="{{URL('storage/forms/form6')}}/{{$data->main_image}}" alt="photo" style="margin-left:20px;width:150px;height:150px">
        </td>
        <td style="text-align: right">

        </td>
    </tr>
</table>

<div>
    <h4>
        PERSONAL STATEMENT:
    </h4>
    <p>{{$data->statement}}</p>

</div>

<hr style="background: black;height: 10px;">

<div>
    <h4>
        EDUCATION
    </h4>
    <ul type="disc">
        <li>{{$data->edu_qualify1}}</li>
        <li>{{$data->edu_qualify2}}</li>
        <li>{{$data->edu_qualify3}}</li>
        <li>{{$data->edu_qualify4}}</li>
    </ul>

</div>
<hr style="background: #a9a4a4;">

<div>
    <h4>
        EMPLOYMENT
    </h4>
    <b>{{$data->employ1}}</b>
    <p>{{$data->employ_description}}</p>
    <div>
        <p>Achievements</p>
    </div><ul type="disc">
        <li>{{$data->achievement1}}</li>
        <li>{{$data->achievement2}}
        </li>
    </ul>

</div>



{{--<div>--}}
{{--    <b>awdadw</b>--}}
{{--    <p>wdaw</p>--}}
{{--</div>--}}
{{--<div>--}}
{{--    <b>awdadw</b>--}}
{{--    <p>wdaw</p>--}}
{{--</div>--}}
{{--<hr style="background: #a9a4a4;">--}}
<div>
    <b>TECHNICAL SKILLS :</b>{{$data->technical_skills}}  <br><br>

    <b>OTHER SKILLS   : </b>{{$data->other_skills}}  <br><br>

</div>

<div class="page_break" style="page-break-before: always;"></div>
{{--<table width="870px" align="left" border="0">--}}
{{--    <tr>--}}
{{--        <td>--}}
{{--            <ul type="disc">--}}
{{--                <li> 	Full Name</li>--}}
{{--                <li> 	Date of birth--}}
{{--                </li>--}}
{{--                <li> 	Nationality--}}
{{--                </li>--}}
{{--                <li> 	Gender--}}
{{--                </li>--}}
{{--                <li> 	N.I.C No--}}
{{--                </li>--}}
{{--                <li> 	Civil Status--}}
{{--                </li>--}}
{{--                <li> 	School attended--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </td>--}}
{{--        <td>--}}
{{--            <ul type="none">--}}
{{--                <li>: Matara Arachilage Proboda Janaka Priyadarshana--}}
{{--                </li>--}}
{{--                <li>: 21st April 1990--}}
{{--                </li>--}}
{{--                <li>: Sri Lankan--}}
{{--                </li>--}}
{{--                <li>: Male--}}
{{--                </li>--}}
{{--                <li>: 9021121747V--}}
{{--                </li>--}}
{{--                <li>: Single--}}
{{--                </li>--}}
{{--                <li>: Mahinda College, Galle--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </td>--}}
{{--    </tr>--}}
{{--</table>--}}
<br><br>
<table style="height: 110px" width="670px" align="center" border="0">
    <tr>
        <td>
            <ul type="disc">
                <li> 	Full Name		: {{$data->p_name}}
                </li>
                <li> 	Date of birth 		: {{$data->p_dob}}
                </li>
                <li> 	Nationality 		: {{$data->p_nationality}}
                </li>
                <li> 	Gender 		: {{$data->p_gender}}
                </li>
                <li> 	N.I.C No 		: {{$data->p_nic}}
                </li>
                <li> 	Civil Status 		: {{$data->p_status}}
                </li>
                <li> 	School attended	: {{$data->p_school}}
                </li>
            </ul>
        </td>
    </tr>
</table>

<hr>




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
            <label>{{$data->non_refree1_email}}</label><br>
        </td>
    </tr>
</table>
{{--<div class="page_break" style="page-break-before: always;"></div>--}}
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
            <label>{{$data->non_refree2_email}}</label><br>

        </td>
    </tr>
</table>

<p>I do hereby declare that the above details written by me are true and correct. If I am selected as a successful candidate, I shall endeavor my best to perform the work entrusted to me to the best of my ability and to the best of your satisfaction.  </p>

<p><br><br><br><br>……………………………………</p>
<p>{{$data->full_name}} </p>
</body>
</html>
