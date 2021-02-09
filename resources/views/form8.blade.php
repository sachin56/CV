<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.harbourthemes.com/demo/dot/blocks/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2020 17:42:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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

    <!--[if IE]>
    <link href="../assets/css/ie.css" rel="stylesheet">
    <![endif]-->

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
                                <form method="post" class="contact-form" id="FormEight" enctype="multipart/form-data">


                                    <div class="col-md-12">
                                        <label for="uploadImg" class="uploadImg">Upload Image</label>
                                        <input type="file" id="uploadImg" class="show-for-sr" name="main_image" required>
                                        <label id="image-name" class="label-hide"></label>
                                        <br><br>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="contact-f-name" class="contact-f-name" type="text" name="full_name" placeholder="Full Name" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="address1" class="address1" type="text" name="address1" placeholder="Address line 01" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="address2" class="address2" type="text" name="address2" placeholder="Address line 02" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="address3" class="address3" type="text" name="address3" placeholder="Address line 03" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="address3" class="address3" type="text" name="address4" placeholder="Address line 04" required>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="contact_Number" class="contact_Number" type="text" name="contact1" placeholder="contact_Number" required>
                                    </div>



                                    <div class="col-md-12"><h3>OBJECTIVE</h3></div>


                                    <div class="col-md-12">
                                        <textarea id="contact-Enter Details" class="contact-Enter Details" name="objective" placeholder="Enter Details" required></textarea>
                                    </div>


                                    <div class="col-md-12"><h3>PERSONAL PROFILE</h3></div>

                                    <div class="col-md-6">
                                        <input id="contact-Date of birth" class="contact-Date of birth" type="text" name="dob" placeholder="Date of birth" required>
                                    </div>


                                    <div class="col-md-6">
                                        <input id="contact-Age" class="contact-Age" type="text" name="age" placeholder="Age" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-Sex" class="contact-Sex" type="text" name="gender" placeholder="Gender" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-Nationality" class="contact-Nationality" type="text" name="school" placeholder="School Attended" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-Civil Status" class="contact-Civil Status" type="text" name="martial_status" placeholder="Martial Status" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-Nationality" class="contact-Nationality" type="text" name="nationality" placeholder="Nationality" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-NIC number" class="contact-NIC number" type="text" name="nic" placeholder="NIC number" required>
                                    </div>


                                    <div class="col-md-12"><h3>PROFESSIONAL QUALIFICATIONS</h3></div>

                                    <div class="col-md-12">
                                        <textarea id="contact-Qulification One" class="contact-Qulification One" name="pro_qualify" placeholder="Qulifications" required></textarea>
                                    </div>


                                    <div class="col-md-12"><h3>Key Skills</h3></div>

                                    <div class="col-md-12">
                                        <textarea id="skill_One" class="skill_One" name="skill1" placeholder="Skills" required></textarea>
                                    </div>


                                    <div class="col-md-12">
                                        <textarea id="skill_two" class="skill_two" name="skill2" placeholder="Skills" required></textarea>
                                    </div>


                                    <div class="col-md-12">
                                        <textarea id="skill_three" class="skill_three" name="skill3" placeholder="Skills" required></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <textarea id="skill_four" class="skill_four" name="skill4" placeholder="Skills" required></textarea>
                                    </div>


                                    <div class="col-md-12"><h3>EDUCATION QUALIFICATIONS</h3></div>


                                    <div class="col-md-4">
                                        <input id="contact-stream" class="contact-stream1" type="text" name="al_stream" placeholder="G.C.E A/L Stream" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="contact-year" class="contact-Year1" type="text" name="al_year" placeholder="Year" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="contact-index no" class="contact-indexNo" type="text" name="al_index" placeholder="Index Number" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-subject one" class="contact-subject one" type="text" name="al_subject1" placeholder="Subject One" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade one" class="contact-grade one" type="text" name="al_grade1" placeholder="Grade" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject two" class="contact-subject two" type="text" name="al_subject2" placeholder="Subject Two" >
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade two" class="contact-grade two" type="text" name="al_grade2" placeholder="Grade" >
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject three" class="contact-subject three" type="text" name="al_subject3" placeholder="Subject Three">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade three" class="contact-grade three" type="text" name="al_grade3" placeholder="Grade">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject four" class="contact-subject four" type="text" name="al_subject4" placeholder="Subject Four" >
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade four" class="contact-grade four" type="text" name="al_grade4" placeholder="Grade">
                                    </div>

                                    <div class="col-md-12"><h5></h5></div>

                                    <div class="col-md-4">
                                        <input id="contact-year" class="contact-year" type="text" name="year1" placeholder="G.C.E O/L Year" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="contact-year" class="contact-Year1" type="text" name="ol_year" placeholder="Year" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="contact-index no" class="contact-indexNo" type="text" name="ol_index" placeholder="Index Number" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-subject one" class="contact-subject one" type="text" name="ol_subject1" placeholder="Subject One" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade one" class="contact-grade one" type="text" name="ol_grade1" placeholder="Grade" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject two" class="contact-subject two" type="text" name="ol_subject2" placeholder="Subject Two" >
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade two" class="contact-grade two" type="text" name="ol_grade2" placeholder="Grade">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject three" class="contact-subject three" type="text" name="ol_subject3" placeholder="Subject Three">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade three" class="contact-grade three" type="text" name="ol_grade3" placeholder="Grade">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject four" class="contact-subject four" type="text" name="ol_subject4" placeholder="Subject Four">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade four" class="contact-grade four" type="text" name="ol_grade4" placeholder="Grade">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject five" class="contact-subject five" type="text" name="ol_subject5" placeholder="Subject Five">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade five" class="contact-grade five" type="text" name="ol_grade5" placeholder="Grade">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject six" class="contact-subject six" type="text" name="ol_subject6" placeholder="Subject Six">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade six" class="contact-grade six" type="text" name="ol_grade6" placeholder="Grade">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject seven" class="contact-subject seven" type="text" name="ol_subject7" placeholder="Subject Seven">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade seven" class="contact-grade seven" type="text" name="ol_grade7" placeholder="Grade">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject eight" class="contact-subject eight" type="text" name="ol_subject8" placeholder="Subject Eight">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade eight" class="contact-grade eight" type="text" name="ol_grade8" placeholder="Grade">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject nine" class="contact-subject nine" type="text" name="ol_subject9" placeholder="Subject Nine">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade nine" class="contact-grade nine" type="text" name="ol_grade9" placeholder="Grade">
                                    </div>


                                    <div class="col-md-12">
                                        <h3>Work Experience</h3>

                                    </div>



                                    <div class="col-md-6">
                                        <input id="fname" class="fname" type="text" name="job1" placeholder="Job" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="address" class="address" type="text" name="job2" placeholder="Job" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="fname" class="fname" type="text" name="job1_company" placeholder="Company" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="address" class="address" type="text" name="job2_company" placeholder="Company" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="period_two" class="period_two" type="text" name="job1_period" placeholder="Period" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="period_two" class="period_two" type="text" name="job2_period" placeholder="Period" >
                                    </div>


                                    <div class="col-md-12">

                                        <h4>NON-RETATED REFEREES</h4>

                                    </div>


                                    <div class="col-md-6">
                                        <input id="non_refree1_name" class="non_refree1_name" type="text" name="non_refree1_name" placeholder="Non Related Referee1 Name" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_post" class="non_refree1_post" type="text" name="non_refree1_post" placeholder="Non Related Referee1 Post" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_workplace" class="non_refree1_workplace" type="text" name="non_refree1_workplace" placeholder="Non Related Referee1 working Place" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_tel" class="non_refree1_tel" type="text" name="non_refree1_tel" placeholder="Contact Number of Referee1" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree2_name" class="non_refree2_name" type="text" name="non_refree2_name" placeholder="Non Related Referee2 Name" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree2_post" class="non_refree2_post" type="text" name="non_refree2_post" placeholder="Non Related Referee2 Post" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree2_workplace" class="non_refree2_workplace" type="text" name="non_refree2_workplace" placeholder="Non Related Referee2 working Place">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree2_tel" class="non_refree2_tel" type="text" name="non_refree2_tel" placeholder="Contact Number of Referee2" >
                                    </div>


                                    <div class="clearfix"></div>

                                    <div class="col-md-12 form-btn-submit">
                                        <input type="submit" id="contact-button" class="button button-full contact-submit" value="Submit" >
                                    </div>

                                </form>
                                <!-- End Contact Form -->
                            </div>
                        </div> <!-- .row -->
                    </div> <!-- .container -->
                </section>
                <!-- End Contact us -->


            </main>
        </div> <!-- #primary -->
    </div> <!-- #content -->



</div> <!-- #page -->

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

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

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

    $('#FormEight').on('submit', function(event) {
        event.preventDefault();

        $.ajax({
            url: "{{url('/form8/submit')}}",
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
    });

</script>

</body>
</html>
