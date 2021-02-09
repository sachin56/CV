<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$user_email}}</title>



    <style>
        div.a {
            text-indent: 20px;
        }
    </style>
</head>

<body>

<div style= "">
    <h1 style="color:#468785">{{$data->full_name}}</h1>
    <hr>
</div>
<div style ="">
    <p>{{$data->address}}</p> <p>{{$data->contact_no1}}</p>
    <p>Home:{{$data->contact_no2}}| {{$data->email}}</p>


</div>
<div style ="">
    <h3 style="color:#468785">Objective</h3>

    <label>{{$data->objective}} </label>
</div>

<div style="">
    <h3 style="color:#468785">Education</h3>
    <P><b>G.C.E ORDINARY LEVEL |2011| VISAKHA VIDYALAYA </b><P>
    <div  class="a">
        <table style="align:center" width="300px">

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

        </table></div><br>
    <P><b>G.C.E ADVANCED LEVEL |2014| VISAKHA VIDYALAYA </b><P>
    <div  class="a">
        <table style="align:center">
            <tr>
                <td>{{$data->al_subject1}} </td>
                <td>{{$data->al_result1}}</td>

            </tr>
            <tr>
                <td>{{$data->al_subject2}}</td>
                <td>{{$data->al_result2}}</td>

            </tr>
            <tr>
                <td>{{$data->al_subject3}} </td>
                <td>{{$data->al_result3}}</td>

            </tr>
            <tr>
                <td>{{$data->al_subject4}}</td>
                <td>{{$data->al_result4}}</td>

            </tr>
        </table></div>
</div>
<div style="">
    <h3 style="color:#468785">Higher Education</h3>
    <div class="a">
        <p>{{$data->higher_edu}}</p>
    </div>
    <div class="page_break" style="page-break-before: always;"></div>
    <h3 style="color:#468785">Other Achievements</h3>
    <div class="a">
        <table style="align:center">
            <tr>
                <td>{{$data->other1}}</td>
            </tr>
            <tr>
                <td>{{$data->other2}} </td>
            </tr>
            <tr>
                <td>{{$data->other3}}</td>
            </tr>
        </table>
    </div>
</div>
<div style="">
    <h3 style="color:#468785">Work Experience</h3>
    <div class="a">
        <p><li><b>{{$data->work_xp1}}</b></li><p>
        <p>{{$data->work_xp1_description}}</p>
        <br>

        <div class="a">Job responsibilities contained –</div>
        <ul>
            <li><table style="align:center">
                    <tr>
                        <td>{{$data->work_xp1_res1}}</td>
                    </tr>
                    <tr>
                        <td>{{$data->work_xp1_res2}} </td>
                    </tr>
                    <tr>
                        <td>{{$data->work_xp1_res3}}</td>
                    </tr>
                    <tr>
                        <td>{{$data->work_xp1_res3}}</td>
                    </tr>
                </table>
            </li>


        </ul>

    </div>
    <div>
        <p><li><b>{{$data->work_xp2}}</b></li><p>
        <p>{{$data->work_xp2_description}}</p>
        <br>

        <div class="a">Job responsibilities contained –</div>
        <ul>
            <li><table style="align:center">
                    <tr>
                        <td>{{$data->work_xp2_res1}}</td>
                    </tr>
                    <tr>
                        <td>{{$data->work_xp2_res2}} </td>
                    </tr>
                    <tr>
                        <td>{{$data->work_xp2_res3}}</td>
                    </tr>
                    <tr>
                        <td>{{$data->work_xp2_res3}}</td>
                    </tr>
                </table>
            </li>


        </ul>

        <!-- <p><li><b>CO-ORDINATING EXECUTIVE | OVERSEAS REALTY CEYLON LIMITED</b></li><p>
        <p><li><b>CO-ORDINATING EXECUTIVE | OVERSEAS REALTY CEYLON LIMITED</b></li><p></div>	 -->
        <div>
            <h3 style="color:#468785;padding: 0;">Non Related Referees</h3>

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

        </div>

    </div>

    </div>
</body>
</html>
