<!DOCTYPE html>
<html>
<head>

    <title>{{$user_email}}</title>

    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">--}}
    <link href="{{URL('home_assest/bootstrap.css')}}" rel="stylesheet">

</head>
<body>

<div class="col-md-12" style="background: #7f62a2;">
    <h4 style="text-align: right">CURRICULAM VITAE.</h4>

</div>

<div class="col-md-12">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6" style="margin-top: 40px;">
            <div style="margin-top: 50px;">
                <table style="width:100%;text-align: left;" border="3">
                    <tr>
                        <td style="width: 40px;background: #7f62a2"></td>
                        <td>
                            <div>
                                <h6>{{$data->full_name}}</h6>
                                <h6>{{$data->address1}}.</h6>
                                <h6>Mobile :- {{$data->contact1}}</h6>
                                <h6>E Mail :- {{$data->email}}</h6>
                            </div>
                        </td>
                    </tr>

                </table>
            </div>
            <div style="margin-top:40px;">
                <ul>
                    <li>
                        <b>Objectives</b>
                        <p>{{$data->objective}}</p>
                    </li>
                </ul>
            </div>

            <div style="margin-top:40px;">
                <ul>
                    <li>
                        <b>STRENGTH & SKILLS</b><br><br>
                        <ul>

                            <li>
                                {{$data->skill1}}
                            </li>
                            <li>
                                {{$data->skill2}}
                            </li>
                            <li>
                                {{$data->skill3}}
                            </li>
                            <li>
                                {{$data->skill4}}
                            </li>
                            <li>
                                {{$data->skill5}}
                            </li>
                        </ul>
                    </li><br><br>
                    <li>
                        <b>WORKING EXPERIENCE</b><br><br>
                        <ul>

                            <li>
                                {{$data->exp1}}
                            </li>
                            <li>
                                {{$data->exp2}}
                            </li>
                            <li>
                                {{$data->exp3}}
                            </li>
                        </ul>
                    </li>
                    <br><br>
                    <li>
                        <b>EDUCATONAL BACKGROUND</b><br><br>
                        <b>G.C.E.(A/L) Examination - Year {{$data->al_year}}[index No:{{$data->al_index_no}}]</b><br><br>
                        <ul>
                            <table>
                                <tr>
                                    <th style="width: 177px;">Subject</th>

                                    <th>Grade</th>
                                </tr>
                                <tr>
                                    <td>{{$data->al_subject1}}</td>
                                    <td>{{$data->al_result1}}</td>
                                </tr>
                                <tr>
                                    <td>{{$data->al_subject2}}</td>
                                    <td>{{$data->al_result2}}</td>

                                </tr>
                            </table>
                        </ul>

                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>

<div class="page_break" style="page-break-before: always;"></div>


<div class="col-md-12" style="background: #7f62a2;page-break-inside: avoid;">
    <h4 style="text-align: right">CURRICULAM VITAE.</h4>

</div>

<div class="col-md-12">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6" style="margin-top: 40px;">

            <div style="margin-top:40px;">
                <ul>
                    <br><br>
                    <li>
                        <b>G.C.E.(O/L) Examination - Year {{$data->ol_year}}[index No:{{$data->ol_index_no}}]</b><br><br>
                        <ul>
                            <table>
                                <tr>
                                    <th style="width: 177px;">Subjects</th>

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
                                <tr>
                                    <td>{{$data->subject10}}</td>
                                    <td>{{$data->result10}}</td>

                                </tr>
                            </table>
                        </ul>

                    </li>
                    <br><br>
                    <li>
                        <b>PERSONAL INFORMATIONS</b><br><br>
                        <ul>
                            <table>
                                <tr>
                                    <td style="width: 177px;">Name in Full :</td>

                                    <td>{{$data->name_in_full}}</td>
                                </tr>
                                <tr>
                                    <td>Nationality :</td>
                                    <td>{{$data->nationality}}</td>
                                </tr>
                                <tr>
                                    <td>NIC No :</td>
                                    <td>{{$data->nic}}</td>

                                </tr>
                                <tr>
                                    <td>Date of Birth :</td>
                                    <td>{{$data->dob}}</td>

                                </tr>
                                <tr>
                                    <td>Age :</td>
                                    <td>{{$data->age}}</td>

                                </tr>
                                <tr>
                                    <td>Marital Status :</td>
                                    <td>{{$data->martial_status}}</td>

                                </tr>
                                <tr>
                                    <td>Permanent Address :</td>
                                    <td>{{$data->p_address}}</td>
                                </tr>
                                <tr>
                                    <td>School Attended :</td>
                                    <td>{{$data->school}}</td>

                                </tr>

                            </table><br><br>
                            <p>To achieve high level of life style, to be innovative &amp; to be a successful team member of a
                                massive team with the desire to share the best practical experiences, learn new ideas and
                                continuously work to words the improvement within the team as a whole by achieving my
                                career objective to be a professional while to ensure the entire satisfaction of my superiors.
                            </p>
                        </ul>

                    </li>
                </ul>
                <br><br>
                <div class="row">

                    <div>Date</div>
                    <div style="margin-left: 630px;">Signature</div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>
</body>
</html>
