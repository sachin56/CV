<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>CVTemp</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons for Desktop, iOS and android -->
    <link rel="icon" type="image/png" sizes="32x32" href="http://demo.harbourthemes.com/demo/dot/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://demo.harbourthemes.com/demo/dot/assets/images/favicons/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://demo.harbourthemes.com/demo/dot/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="http://demo.harbourthemes.com/demo/dot/assets/images/favicons/android-chrome-192x192.png">
    <link rel="mask-icon" href="http://demo.harbourthemes.com/demo/dot/assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

    <link href="{{URL('home_assest/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL('home_assest/font-awesome.css')}}" rel="stylesheet">
    <link href="{{URL('home_assest/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{URL('home_assest/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{URL('home_assest/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{URL('home_assest/owl.theme.default.css')}}" rel="stylesheet">
    <link href="{{URL('home_assest/aos.css')}}" rel="stylesheet">
    <link href="{{URL('home_assest/style.css')}}" rel="stylesheet">
    <link href="{{URL('home_assest/color-switcher.css')}}" rel="stylesheet">
    <link href="{{URL('home_assest/color-1.css')}}" rel="stylesheet">



    <script src="{{URL('home_assest/modernizr.js')}}"></script>

    <style>

        .uploadImg{
            display: inline-block;
            vertical-align: middle;
            margin: 0 0 1rem 0;
            font-family: inherit;
            padding: 0.85em 1em;
            -webkit-appearance: none;
            border: 1px solid transparent;
            border-radius: 0;
            -webkit-transition: background-color 0.25s ease-out, color 0.25s ease-out;
            transition: background-color 0.25s ease-out, color 0.25s ease-out;
            font-size: 0.9rem;
            line-height: 1;
            text-align: center;
            cursor: pointer;
            background-color: #38ceea;
            color: #fefefe;
        }

        .show-for-sr {
            position: absolute !important;
            width: 1px;
            height: 1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            border: 0;
        }


    </style>
</head>

<body>

<div id="page" class="site"> <div class="baseline-grid1"></div>

    <!-- Start Header -->
    <header id="masthead" class="site-header">

        @include('layouts.navbar')

    </header>
    <!-- End Header -->

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                <!-- Start Contact us -->
                <section id="contact-us---1" class="container-fluid section-block contact-form-section">
                    <div class="form-bg"></div> <!-- Background image -->
                    <div class="overlay"></div>	<!-- Overlay -->
                    <div class="container">
                        <div class="row">

                            <!-- Start Contact Form -->
                            <div class="col-md-10 center-form border-box" style="margin-top: 20px;padding-bottom: 100px;">
                                <form method="post" class="contact-form" id="FormOne" enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <label for="uploadImg" class="uploadImg">Upload Image</label>
                                        <input type="file" id="uploadImg" class="show-for-sr" name="main_image" >
                                        <label id="image-name" class="label-hide"></label>
                                        <br><br>
                                    </div>


                                    <div class="col-md-12">
                                        <input id="full_name" class="contact-f-name" type="text" name="full_name" placeholder="Full Name/සම්පූර්ණ නම" >
                                    </div>

                                    <div class="col-md-12">
                                        <input id="address1" class="address1" type="text" name="address1" placeholder="Address line 01/ලිපිනය පළමු පෙළ" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="address2" class="address2" type="text" name="address2" placeholder="Address line 02/ලිපිනය දෙවන පෙළ" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="address3" class="address3" type="text" name="address3" placeholder="Address line 03/ලිපිනය තෙවන පෙළ" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact1" class="address3" type="text" name="contact1" placeholder="Contact No 1//දුරකතන අංකය 1" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact2" class="address3" type="text" name="contact2" placeholder="Contact No 2/දුරකතන අංකය 2">
                                    </div>


                                    <div class="col-md-6">
                                        <input id="email" class="contact-email" type="text" name="email" placeholder="Email / විද්‍යුත් තැපෑල" >
                                    </div>

                                    <div class="col-md-12">
                                        <input id="personal_profile" class="contact-Objective" type="text" name="personal_profile" placeholder="Personal Profile /පුද්ගලික පැතිකඩ" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="dob" class="contact_no" type="text" name="dob" placeholder="Date of Birth/උපන්දිනය" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="civil_status" class="contact-Civil Status" type="text" name="civil_status" placeholder="Civil Status/සිවිල් තත්වය" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="sex" class="contact-Sex" type="text" name="sex" placeholder="Sex/ස්ත්රී පුරුෂ භාවය" >
                                    </div>


                                    <div class="col-md-6">
                                        <input id="religion" class="contact-Religion" type="text" name="religion" placeholder="Religion/ආගම" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="nic" class="contact-NIC number" type="text" name="nic" placeholder="NIC number/ජා.හැ.අ." >
                                    </div>


                                    <div class="col-md-12">

                                        <h3>Education Qulifications</h3>
                                        <h4>G.C.E.(O/L) Examination/සාමාන්‍ය පෙල ප්‍රතිඵල</h4>

                                    </div>

                                    <div class="col-md-6">
                                        <input id="subject1" class="Subject" type="text" name="subject1" placeholder="Subject" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="results1" class="Results" type="text" name="results1" placeholder="Results / ප්‍රතිඵලඋඅ" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="subject2" class="Subject" type="text" name="subject2" placeholder="Subject">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="results2" class="Results" type="text" name="results2" placeholder="Results">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="subject3" class="Subject" type="text" name="subject3" placeholder="Subject">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="results3" class="Results" type="text" name="results3" placeholder="Results">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="subject4" placeholder="Subject">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="results4" placeholder="Results">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="subject5" placeholder="Subject">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="results5" placeholder="Results">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="subject6" placeholder="Subject">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="results6" placeholder="Results">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="subject7" placeholder="Subject">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="results7" placeholder="Results">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="subject8" placeholder="Subject">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="results8" placeholder="Results">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="subject9" placeholder="Subject">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="results9" placeholder="Results">
                                    </div>

                                    <div class="col-md-12"><h4>G.C.E.(A/L) Examination</h4></div>
                                    <div class="col-md-6">
                                        <input id="al_subject1" class="Subject" type="text" name="al_subject1" placeholder="Subject" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="al_results1" class="Results" type="text" name="al_results1" placeholder="Results" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="al_subject2" class="Subject" type="text" name="al_subject2" placeholder="Subject">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="al_results2" class="Results" type="text" name="al_results2" placeholder="Results">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="al_subject3" placeholder="Subject">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="al_results3" placeholder="Results">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="al_subject4" placeholder="Subject">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="al_results4" placeholder="Results">
                                    </div>

                                    <div class="col-md-12">
                                        <h4>Other Qualifications</h4>
                                    </div>

                                    <div class="col-md-12">
                                        <textarea name="other_qualify" id="other_qualify" class="contact-Enter Details" type="text" placeholder="Enter Other qualification details" ></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <h4>ACEDEMIC QUALIFICATIONS</h4>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="a_qualify1" class="Subject" type="text" name="a_qualify1" placeholder="Acedemic Qualifications 1" >
                                    </div>

                                    <div class="col-md-12">
                                        <input id="Subject" class="Subject" type="text" name="a_qualify2" placeholder="Acedemic Qualifications 2">
                                    </div>

                                    <div class="col-md-12">
                                        <input id="Subject" class="Subject" type="text" name="a_qualify3" placeholder="Acedemic Qualifications 3">
                                    </div>

                                    <div class="col-md-12">
                                        <input id="Subject" class="Subject" type="text" name="a_qualify4" placeholder="Acedemic Qualifications 4">
                                    </div>

                                    <div class="col-md-12">
                                        <h4>PROFESSIONAL QUALIFICATION</h4>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="p_qualify1" class="Subject" type="text" name="p_qualify1" placeholder="Professional Qualification 1" >
                                    </div>

                                    <div class="col-md-12">
                                        <input id="Subject" class="Subject" type="text" name="p_qualify2" placeholder="Professional Qualification 2" >
                                    </div>

                                    <div class="col-md-12">
                                        <input id="Subject" class="Subject" type="text" name="p_qualify3" placeholder="Professional Qualification 3" >
                                    </div>

                                    <div class="col-md-12">
                                        <input id="Subject" class="Subject" type="text" name="p_qualify4" placeholder="Professional Qualification 4">
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <h4>SKILLS AND COMPETENCIES</h4>
                                        </div>

                                        <div class="col-md-12">
                                            <input id="skill1" class="Subject" type="text" name="skill1" placeholder="Skills And Competencies 1" >
                                        </div>

                                        <div class="col-md-12">
                                            <input id="Subject" class="Subject" type="text" name="skill2" placeholder="Skills And Competencies 2" >
                                        </div>

                                        <div class="col-md-12">
                                            <input id="Subject" class="Subject" type="text" name="skill3" placeholder="Skills And Competencies 3" >
                                        </div>

                                        <div class="col-md-12">
                                            <input id="Subject" class="Subject" type="text" name="skill4" placeholder="Skills And Competencies 4" >
                                        </div>

                                        <div class="col-md-12">
                                            <input id="Subject" class="Subject" type="text" name="skill5" placeholder="Skills And Competencies 5" >
                                        </div>

                                        <div class="col-md-12">
                                            <input id="Subject" class="Subject" type="text" name="skill6" placeholder="Skills And Competencies 6">
                                        </div>

                                        <div class="col-md-12">
                                            <h4>NON-RELATED REFEREES</h4>
                                        </div>

                                        <div class="col-md-6">
                                            <input id="non_refree1_name" class="Subject" type="text" name="non_refree1_name" placeholder="Non-Related Referee1 Name " >
                                        </div>

                                        <div class="col-md-6">
                                            <input id="non_refree1_post" class="Subject" type="text" name="non_refree1_post" placeholder="Non-Related Referee1 Post " >
                                        </div>

                                        <div class="col-md-6">
                                            <input id="non_refree1_workplace" class="Subject" type="text" name="non_refree1_workplace" placeholder="Non-Related Referee1 Workplace" >
                                        </div>

                                        <div class="col-md-6">
                                            <input id="non_refree1_tel" class="Subject" type="text" name="non_refree1_tel" placeholder="Contact Number of Referee1" >
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="non_refree2_name" placeholder="Non-Related Referee1 Name" >
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="non_refree2_post" placeholder="Non-Related Referee1 Post" >
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="non_refree2_workplace" placeholder="Non-Related Referee1 Workplace" >
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="non_refree2_tel" placeholder="Contact Number of Referee1">
                                        </div>

                                    </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-12 form-btn-submit">
                                            <input id="contact-button" class="button button-full contact-submit" value="Submit" type="submit">
                                        </div>

                                </form>
                            </div>
                            <!-- End Contact Form -->

                        </div> <!-- .row -->
                    </div> <!-- .container -->
                </section>
                <!-- End Contact us -->


            </main>
        </div> <!-- #primary -->
    </div> <!-- #content -->


</div>

<!-- Include JS -->
<script src="{{URL('home_assest/jquery.min.js')}}"></script>
<script src="{{URL('home_assest/bootstrap.min.js')}}"></script>
<script src="{{URL('home_assest/bootstrap-hover-dropdown.js')}}"></script>
<script src="{{URL('home_assest/magnific-popup.min.js')}}"></script>
<script src="{{URL('home_assest/owl.carousel.min.js')}}"></script>
<script src="{{URL('home_assest/parallax.js')}}"></script>
<script src="{{URL('home_assest/aos.js')}}"></script>
{{--<script src="http://demo.harbourthemes.com/demo/dot/assets/js/color-switcher.js"></script>--}}
<script src="{{URL('init.js')}}"></script>

{{--<!--[if lte IE 9]>--}}
{{--<script src="../assets/js/placeholders.js"></script>--}}
{{--<script src="../assets/js/init-for-ie.js"></script>--}}
<![endif]-->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-80974374-1', 'auto');
    ga('send', 'pageview');

    $("#uploadImg").change(function(e) {

        let lbl = document.getElementById('image-name');
        var fileName = e. target. files[0]. name;
        lbl.innerText = fileName;

    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#FormOne').on('submit', function(event) {
        event.preventDefault();



        var full_name = $("#full_name").val();
        var address1 = $("#address1").val();
        var address2 = $("#address2").val();
        var address3 = $("#address3").val();
        var contact_no = $("#contact1").val();
        var email = $("#email").val();
        var p_profile = $("#personal_profile").val();
        var dob = $("#dob").val();
        var c_status = $("#civil_status").val();
        var sex = $("#sex").val();
        var religion = $("#religion").val();
        var nic = $("#nic").val();
        var sub1 = $("#subject1").val();
        var sub2 = $("#subject2").val();
        var sub3 = $("#subject3").val();
        var res1 = $("#results1").val();
        var res2 = $("#result2").val();
        var res3 = $("#results3").val();
        var al_sub1 = $("#al_subject1").val();
        var al_sub2 = $("#al_subject2").val();
        var al_res1 = $("#al_results1").val();
        var al_res2 = $("#al_results2").val();
        var o_qualify = $("#other_qualify").val();
        var a_qualify = $("#a_qualify1").val();
        var p_qualify = $("#p_qualify1").val();
        var skill1 = $("#skill1").val();
        var ref1_name = $("#non_refree1_name").val();
        var ref1_post = $("#non_refree1_post").val();
        var ref1_workplace = $("#non_refree1_workplace").val();
        var ref1_contact = $("#non_refree1_tel").val();


            if(full_name === "") {
                alert("Please enter full name");
                return false;
            }
            else if(address1 === "") {
                alert("Please enter address as line 1,line 2 & line 3");
                return false;
            }
            else if(address2 === "") {
                alert("Please enter address as line 1,line 2 & line 3");
                return false;
            }
            else if(address3 === "") {
                alert("Please enter address as line 1,line 2 & line 3");
                return false;
            }
            else if(contact_no === "") {
                alert("Please enter contact number");
                return false;
            }else if(email === "") {
                alert("Please enter email");
                return false;
            }else if(p_profile === "") {
                alert("Please fill personal Profile area");
                return false;
            }else if(dob === "") {
                alert("Please enter date of birth");
                return false;
            }else if(c_status === "") {
                alert("Please enter civil Status");
                return false;
            }else if(sex === "") {
                alert("Please enter Sex");
                return false;
            }else if(religion === "") {
                alert("Please enter Religion");
                return false;
            }else if(nic === "") {
                alert("Please enter NIC");
                return false;
            }else if(sub1 === "") {
                alert("Please enter at least 3 ol subjects and results");
                return false;
            }else if(res1 === "") {
                alert("Please enter at least 3 ol subjects and results");
                return false;
            }else if(sub2 === "") {
                alert("Please enter at least 3 ol subjects and results");
                return false;
            }else if(res2 === "") {
                alert("Please enter at least 3 ol subjects and results");
                return false;
            }else if(sub3 === "") {
                alert("Please enter at least 3 ol subjects and results");
                return false;
            }else if(res3 === "") {
                alert("Please enter at least 3 ol subjects and results");
                return false;
            }else if(al_sub1 === "") {
                alert("Please enter at least 2 al subjects and results");
                return false;
            }else if(al_sub1 === "") {
                alert("Please enter at least 2 al subjects and results");
                return false;
            }else if(al_res1 === "") {
                alert("Please enter at least 2 al subjects and results");
                return false;
            }else if( al_sub2=== "") {
                alert("Please enter at least 2 al subjects and results");
                return false;
            }else if(al_res2 === "") {
                alert("Please enter address");
                return false;
            }else if(o_qualify === "") {
                alert("Please enter other qualification");
                return false;
            }else if(a_qualify === "") {
                alert("Please enter Academic Qualification");
                return false;
            }
            else if(p_qualify === "") {
                alert("Please enter Professional Qualification");
                return false;
            }
            else if(skill1 === "") {
                alert("Please enter Skill");
                return false;
            }
            else if(ref1_name === "") {
                alert("Please enter Refree Name");
                return false;
            }else if(ref1_post === "") {
                alert("Please enter Refree Post");
                return false;
            }else if(ref1_workplace === "") {
                alert("Please enter Refree Workplace");
                return false;
            }else if(ref1_contact === "") {
                alert("Please enter Refree contact No");
                return false;
            }
            else {

                $.ajax({
                    url: "{{url('/form1/submit')}}",
                    method: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        console.log(response.message);
                        if(response.success) {

                            window.location.href = "{{url('/download/pdf')}}/"+response.message;
                        } else {
                            if(response.message == "") {
                                response.message = "Error Occured while updating profile. Please try again!";
                            }
                        }
                    }
                });

            }
    });

    function showError(message) {
        $.confirm({
            icon: 'fa fa-exclamation-triangle',
            theme: 'modern',
            animation: 'left',
            type: 'red',
            title: 'Error!',
            content: message,
            buttons: {
                close: function () {
                }
            }
        });
    }
</script>

</body>
</html>
