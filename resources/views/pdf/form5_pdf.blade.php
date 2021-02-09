<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$user_email}}</title>



</head>
<>


<table style="width: 670px;" align="center">
    <tr style="width: 500px;height:150px;">
        <td align="center">
            <h4 style="text-align: center">{{$data->full_name}}</h4><br>{{$data->address1}},<br>{{$data->address2}}.<br>Tel :{{$data->contact1}},{{$data->contact2}}<br>Email :{{$data->email}}
        </td>
        <td style="text-align: right">
            <img src="{{URL('storage/forms/form5')}}/{{$data->main_image}}" alt="photo" style="margin-left:20px;width:150px;height:150px">
        </td>
    </tr>
</table>

<div>
    <h4 style="background: #0165cc;color: #ffffff;">
        CAREER OBJECTIVE:
    </h4>
    <p>{{$data->objective}}</p>

</div>

<div>
    <h4 style="background: #0165cc;color: #ffffff;">
        ACADEMIC QUALIFICATION:
    </h4>

    <ul type="disc">
        <li>{{$data->a_qualify1}}</li>
        <li>{{$data->a_qualify2}}
        </li>
        <li>{{$data->a_qualify3}}
        </li>
        <li>{{$data->a_qualify4}}</li>
        <li>{{$data->a_qualify5}}
        </li>
        <li>{{$data->a_qualify6}}
        </li>
    </ul>

</div>

<div>
    <h4 style="background: #0165cc;color: #ffffff;">
        SKILLS AND ABILITIES:
    </h4>
    <p>{{$data->skill_ability}}</p>

</div>


<div>
    <h4 style="background: #0165cc;color: #ffffff;">
     EDUCATION QUALIFICATION:
    </h4>
    <b>Edexcel I.G.C.S.E. Ordinary Level Examination</b>
    <ul>
        <table style="align:center">
            <tr>
                <td>Subject </td>
                <td>Grade</td>

            </tr>
            <tr>
                <td>{{$data->subject1}} </td>
                <td>{{$data->result1}}</td>

            </tr>
            <tr>
                <td>{{$data->subject2}} </td>
                <td>{{$data->result2}}</td>

            </tr>
            <tr>
                <td>{{$data->subject3}} </td>
                <td>{{$data->result3}}</td>

            </tr>

            <tr>
                <td>{{$data->subject4}}</td>
                <td>{{$data->result4}}</td>

            </tr>

            <tr>
                <td>{{$data->subject5}} </td>
                <td>{{$data->result5}}</td>

            </tr>

        </table>
    </ul>


    <div>
    <h4>
    <b>G.C.E. Ordinary Level Examination</b></h4>
    <ul>
    <table style="align:center">

                <tr>
                <td><li>{{$data->ol_subject1}}</li> </td>
                <td>{{$data->ol_result1}}</td>

                </tr>

                <tr>
                <td><li>{{$data->ol_subject2}}</li> </td>
                <td>{{$data->ol_result2}}</td>

                </tr>


            </table>
            </ul>
            <div>

                <div class="page_break" style="page-break-before: always;"></div>

    <h4 style="background: #0165cc;color: #ffffff;">
        ACADAMIC INFORMATION:
    </h4>
</div>
    <ul type="disc">
        <table style="align:center">
                <tr>
                    <td>{{$data->a_qualify1}}</td>
                </tr>
                <tr>
                    <td>{{$data->a_qualify2}}</td>
                </tr>
                <tr>
                    <td>{{$data->a_qualify3}} </td>
                </tr>
                <tr>
                    <td>{{$data->a_qualify4}} </td>
                </tr>
                <tr>
                    <td>{{$data->a_qualify5}} </td>
                </tr>
                <tr>
                    <td>{{$data->a_qualify6}} </td>
                </tr>
            </table>

    </ul>
</div>




<div>
    <h4 style="background: #0165cc;color: #ffffff;">
    GAMES AND ATHLETICS:
    </h4>
</div>
    <ul type="disc">
        <table style="align:center">
            <tr>
                <td>{{$data->game1}}</td>
            </tr>
            <tr>
                <td>{{$data->game2}}</td>
            </tr>
            <tr>
                <td>{{$data->game3}} </td>
            </tr>
            <tr>
                <td>{{$data->game4}} </td>
            </tr>
            <tr>
                <td>{{$data->game5}}</td>
            </tr>
            <tr>
                <td>{{$data->game6}}</td>
            </tr>
        </table>
    </ul>
</div>


<div>
    <h4 style="background: #0165cc;color: #ffffff;">
    SKILLS AND COMPETENCIES:
    </h4>
</div>
<div>
    <ul type="disc">

            <table style="align:center">
                <tr>
                    <td>{{$data->skill1}}</td>
                </tr>
                <tr>
                    <td>{{$data->skill2}}</td>
                </tr>
                <tr>
                    <td>{{$data->skill3}} </td>
                </tr>
                <tr>
                    <td>{{$data->skill4}} </td>
                </tr>
                <tr>
                    <td>{{$data->skill5}} </td>
                </tr>
                <tr>
                    <td>{{$data->skill6}} </td>
                </tr>
            </table>


    </ul>
</div>

<div>
    <h4 style="background: #0165cc;color: #ffffff;">
    PERSONAL DETAILS:
    </h4>
</div>

<ul>
        <table style="align:center">
            <tr>
                <td>Date of Birth </td>
                <td style="width:500px;"> {{$data->dob}}</td>

            </tr>
            <tr>
                <td >Marital Status</td>
                <td>{{$data->m_status}}</td>

            </tr>
            <tr>
                <td>Nationality </td>
                <td>{{$data->nationality}}</td>

            </tr>
            <tr>
                <td>NIC Number</td>
                <td>{{$data->nic}}</td>

            </tr>

            <tr>
                <td>Schools attended</td>
                <td>{{$data->school}}</td>

            </tr>



        </table>
    </ul>

    <div>
    <h4 style="background: #0165cc;color: #ffffff;">
    NON-RELATED REFEREES:
    </h4>
</div>

<ul>
        <table style="align:center">
            <tr>
                <td>{{$data->non_refree1_name}}</td>
                <td style="width:500px;">{{$data->non_refree2_name}}</td>

            </tr>
            <tr>
                <td >{{$data->non_refree1_post}}</td>
                <td>{{$data->non_refree2_post}}</td>

            </tr>
            <tr>
                <td>{{$data->non_refree1_workplace}} </td>
                <td>{{$data->non_refree2_workplace}}</td>

            </tr>
            <!-- <tr>
                <td>Ethul Kotte</td>
                <td>No. 21/5, Nawala Road</td>

            </tr>

            <tr>
                <td>Sri Lanka</td>
                <td>Colombo 05</td>

            </tr> -->

            <tr>
                <td>Mobile: {{$data->non_refree1_tel}}</td>
                <td>{{$data->non_refree2_tel}}</td>

            </tr>



        </table>
    </ul>



</div>

</div>

</body>


</html>
