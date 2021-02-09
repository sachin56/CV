<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$user_email}}</title>

</head>
<body>
<div  style="500px;text-align: center;">


    <h3>CURRICULUM VITAE</h3>

</div>



<label>{{$data->full_name}},</label> <br>
<label>{{$data->address}}</label> <br>
<label>{{$data->contact_no}},</label> <br>

<div><h4 style="background: lightskyblue">
        PERSONAL DETAILS
    </h4></div>



<label>Name in Full  :  {{$data->full_name}} </label> <br>

<label>Date of Birth  :  {{$data->dob}}</label> <br>

<label>Sex      :    {{$data->sex}}  </label> <br>

<label>Age      :      {{$data->age}}</label> <br>

<label>NIC No      :      {{$data->nic}}</label> <br>

<label>Driving Liense      :      {{$data->driving_license}}</label> <br>

<label>Civil Status      :      {{$data->civil_status}} </label> <br>

<label>Religion      :     {{$data->religion}}</label> <br>

<label>Nationality     :     {{$data->nationality}}</label> <br>

<label>School      :      {{$data->school}}</label> <br>

<div><h4 style="background: lightskyblue">
        EDUCATION QULIFICATION
    </h4></div>

<div><h4>
        G.C.E (O/L) Examiniation 2012
    </h4></div>

<table>
    <tr style="text-align:left;">
        <th style="width: 177px;">Subject</th><br>

        <th>Grade</th>
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


</table>


<div><h4 style="background: lightskyblue">
        WORKING EXPIRENCE
    </h4></div>

<label>Company  :  {{$data->company}}</label> <br><br>

<label>Period     :    {{$data->period}}  </label> <br><br>

<label>Worked Years      :      {{$data->work_years}}</label> <br><br>

<label>Covered area      :    {{$data->cover_area}}</label> <br><br>

<label>Worked City      :    {{$data->work_city}}</label> <br><br>

<div><h4 style="background: lightskyblue">
        LANGUAGE FLAUANCY
    </h4></div>

<label>{{$data->language}}</label> <br><br>

<div class="page_break" style="page-break-before: always;"></div>

<div>
    <h4 style="background: lightskyblue">Non Related Referees</h4>

    <table style="height: 110px" width="670px"border="0">
        <tr>
            <td>
                {{$data->non_refree1_name}}.,<br>
                {{$data->non_refree1_post}}<br>
                {{$data->non_refree1_workplace}}<br>
                {{$data->non_refree1_tel}}<br>

            </td>
            <td>
                {{$data->non_refree2_name}}.,<br>
                {{$data->non_refree2_post}}<br>
                {{$data->non_refree2_workplace}}<br>
                {{$data->non_refree2_tel}}<br>
            </td>
        </tr>
    </table>

    <p>I wish to conform that above particulars are true and correct to the best of my knowledge.
        If any of the particulars are found to be incurred before of after selection of employment I
        am aware that I would be disqualified of the label termination of service without
        compensation.</p>

    <table style="height: 110px" width="670px"border="0">
        <tr>
            <td>
                ................................
            </td>
            <td>
                ................................
            </td>
        </tr>
        <tr>
            <td>
                Date
            </td>
            <td>
                Signature of Applicant
            </td>
        </tr>
    </table>

</div>

</body>
</html>
