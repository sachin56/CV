<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$user_email}}</title>

</head>
<body>
<table style="height: 40px" width="670px" bgcolor="#4D81D2" align="center" bordercolor="#8F9BF9" border="0">
    <tr><td style="text-align: center"><b>CURRICULUM VITAE</b></td></tr>
</table>
<br>
<br>

<table style="height: 120px" width="670px" align="center"  border="1">

    <td style="text-align: center">
        <br>
        {{$data->full_name}}<br>
        {{$data->address}},<br>
        {{$data->email}}<br>
        {{$data->contact_no1}}, {{$data->contact_no2}}
    </td>

</table>
<br>
<br>

<table style="height: 20px" width="670px" bgcolor="#4D81D2" align="center" border="0">
    <tr><td><b>Profile</b></td></tr>
</table>

<br>
<br>
<table style="height: 110px" width="670px" align="center"  border="1">
    <tr>
        <td>
            <ul type="disc">
                <li>{{$data->statement1}}</li>
                <li>{{$data->statement2}}
                </li>
                <li>{{$data->statement3}}
                </li>
                <li>{{$data->statement4}}</li>
                <li>{{$data->statement5}}
                </li>
            </ul>
        </td>
    </tr>

</table>
<br>
<br>

<table style="height: 20px" width="670px" bgcolor="#4D81D2" align="center" border="0">
    <tr><td><b>Professional Qualifications</b></td></tr>
</table>

<br>
<br>
<table style="height: 110px" width="670px" align="center" border="1">
    <tr>
        <td>
            <ul type="disc">
                <li>{{$data->skill1}}
                </li>
                <li>{{$data->skill2}}
                </li>
                <li>{{$data->skill3}}
                </li>
                <li>{{$data->skill4}}
                </li>
                <li>{{$data->skill5}}
                </li>
            </ul>
        </td>
    </tr>
</table>
<br>
<br>
<div class="page_break" style="page-break-before: always;"></div>
<table style="height: 20px" width="670px" bgcolor="#4D81D2" align="center" border="0">
    <tr><td><b>Educational Qualifications</b></td></tr>
</table>
<br>
<br>

<table style="height: 110px" width="670px" align="center" border="0">
    <tr>
        <td>
            <ul type="disc">
                <li> 	G.C.E  Advanced Level ({{$data->al_stream}} stream) – {{$data->al_year}}	(Index No: {{$data->al_index}})
                </li>
                <br>
                <br>
                <table width="200px" border="0">
                    <tr>
                        <td><b>Subject</b></td>
                        <td><b>Grade</b></td>
                    </tr>
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
                </table>
                <br>
                <br>
                <li> 	G.C.E  Ordinary Level – {{$data->ol_year}}	(Index No: {{$data->ol_index}})
                </li>
                <br>
                <br>
                <table width="200px" border="0">
                    <tr>
                        <td><b>Subject</b></td>
                        <td><b>Grade</b></td>
                    </tr>
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
            </ul>
        </td>
    </tr>
</table>
<br>
<br>

<table style="height: 20px" width="670px" bgcolor="#4D81D2" align="center" border="0">
    <tr><td><b>Project Completed</b></td></tr>
</table>
<br>
<br>
<table style="height: 110px" width="670px" align="center"  border="1">
    <tr>
        <td>
            <ul type="disc">
                <li> 	{{$data->project1}}</li>
                <li> 	{{$data->project2}}
                </li>

            </ul>
        </td>
    </tr>

</table>
<br>
<br>
<div class="page_break" style="page-break-before: always;"></div>
<table style="height: 20px" width="670px" bgcolor="#4D81D2" align="center" border="0">
    <tr><td><b>Experience</b></td></tr>
</table>

<br>
<br>
<table style="height: 110px" width="670px" align="center" border="1">
    <tr>
        <td>
            <ul type="disc">
                <li> {{$data->experience1}}

                </li>

            </ul>
        </td>
    </tr>
</table>
<br>
<br>

<table style="height: 20px" width="670px" bgcolor="#4D81D2" align="center" border="0">
    <tr><td><b>Personal Details</b></td></tr>
</table>

<br>
<br>
<table style="height: 110px" width="670px" align="center" border="1">
    <tr>
        <td>
            <ul type="disc">
                <li> 	Full Name		: {{$data->name_full}}
                </li>
                <li> 	Date of birth 		: {{$data->dob}}
                </li>
                <li> 	Nationality 		: {{$data->nationality}}
                </li>
                <li> 	Gender 		: {{$data->gender}}
                </li>
                <li> 	N.I.C No 		: {{$data->nic}}
                </li>
                <li> 	Civil Status 		: {{$data->civil_status}}
                </li>
                <li> 	School attended	: {{$data->school}}
                </li>
            </ul>
        </td>
    </tr>
</table>
<br>
<br>

<table style="height: 20px" width="670px" bgcolor="#4D81D2" align="center" border="0">
    <tr><td><b>Non-Related Referees</b></td></tr>
</table>

<br>
<br>
<table style="height: 110px" width="670px" align="center" border="0">
    <tr>
        <td>
            {{$data->non_refree1_name}},<br>
            {{$data->non_refree1_post}}<br>
            {{$data->non_refree1_workplace}}<br>
            {{$data->non_refree1_address}}<br>
            Tel : {{$data->non_refree1_tel}}<br>
            Email: {{$data->non_refree1_email}}
        </td>
        <td>
            {{$data->non_refree2_name}},<br>
            {{$data->non_refree2_post}}<br>
            {{$data->non_refree2_workplace}}<br>
            {{$data->non_refree2_address}}<br>
             {{$data->non_refree2_tel}}<br>
            {{$data->non_refree2_email}}
        </td>
    </tr>
</table>
<br>
<br>
<br>
<table style="height: 110px" width="670px" align="center" border="0">
    <tr><td>
            I hereby certify that the above information is correct and complete to the best of my knowledge & belief.
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </td>
    </tr>
    <tr>

        <td>
            ………………………<br>
            {{$data->full_name}}
        </td>
        <td>
            ……………………………<br>
            Date
        </td>

    </tr>
</table>
</body>
</html>
