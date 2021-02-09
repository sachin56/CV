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
                                <form method="post" class="contact-form" id="FormNine" enctype="multipart/form-data">


                                    <div class="col-md-12">
                                        <input id="contact-f-name" class="contact-f-name" type="text" name="full_name" placeholder="Full Name" required>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="address1" class="address1" type="text" name="address1" placeholder="Address line 01" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="address3" class="address3" type="text" name="contact1" placeholder="Contact No 1" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-email" class="contact-email" type="email" name="email" placeholder="Email" required>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="contact-Objective" class="contact-Objective" type="text" name="objective" placeholder="objective" required>
                                    </div>

                                    <div class="col-md-12">

                                        <div class="col-md-12"><h3>Skills</h3></div>

                                        <div class="col-md-12">
                                            <input id="Subject" class="Subject" type="text" name="skill1" placeholder="Skill1" required>
                                            <input id="Subject" class="Subject" type="text" name="skill2" placeholder="Skill2" required>
                                            <input id="Subject" class="Subject" type="text" name="skill3" placeholder="Skill3" required>
                                            <input id="Subject" class="Subject" type="text" name="skill4" placeholder="Skill4" required>
                                            <input id="Subject" class="Subject" type="text" name="skill5" placeholder="Skill4" required>
                                        </div>
                                    </div>


                                    <div class="col-md-12">

                                        <div class="col-md-12"><h3>Work Experience</h3></div>

                                        <div class="col-md-12">
                                            <input id="Subject" class="Subject" type="text" name="exp1" placeholder="experience 1" required>
                                            <input id="Subject" class="Subject" type="text" name="exp2" placeholder="experience 2" >
                                            <input id="Subject" class="Subject" type="text" name="exp3" placeholder="experience 3" >
                                        </div>

                                    </div>


                                    <div class="col-md-12">

                                        <div class="col-md-12"><h3>EDUCATONAL BACKGROUND</h3></div>
                                        <div class="col-md-12"><h4>G.C.E.(A/L) Examination</h4></div>

                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="al_year" placeholder="Al year" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="al_index" placeholder="Al index number" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="al_subject1" placeholder="Subject " required>
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Results" class="Results" type="text" name="al_results1" placeholder="Results" required>
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="al_subject2" placeholder="Subject" required>
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Results" class="Results" type="text" name="al_results2" placeholder="Results" required>
                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="col-md-12"><h4>G.C.E.(O/L) Examination</h4></div>

                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="ol_year" placeholder="Ol year" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="ol_index" placeholder="Ol index number" required>
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="subject1" placeholder="Subject" required>
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Results" class="Results" type="text" name="results1" placeholder="Results" required>
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="subject2" placeholder="Subject">
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Results" class="Results" type="text" name="results2" placeholder="Results">
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="subject3" placeholder="Subject">
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Results" class="Results" type="text" name="results3" placeholder="Results">
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
                                            <input id="Subject" class="Subject" type="text" name="subject7" placeholder="Subject" >
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
                                            <input id="Subject" class="Subject" type="text" name="subject9" placeholder="Subject" >
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Results" class="Results" type="text" name="results9" placeholder="Results" >
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Subject" class="Subject" type="text" name="subject10" placeholder="Subject" >
                                        </div>

                                        <div class="col-md-6">
                                            <input id="Results" class="Results" type="text" name="results10" placeholder="Results" >
                                        </div>

                                    </div>



                                    <div class="col-md-12"><h4>PERSONAL INFORMATIONS</h4></div>

                                    <div class="col-md-12">
                                        <input id="contact-f-name" class="contact-f-name" type="text" name="name_in_full" placeholder="Name in Full" required>
                                    </div>



                                    <div class="col-md-12">
                                        <input id="Subject" class="Subject" type="text" name="nationality" placeholder="Nationality" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-NIC number" class="contact-NIC number" type="text" name="nic" placeholder="NIC number" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact_no" class="contact_no" type="text" name="dob" placeholder="Date of Birth" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-NIC number" class="contact-NIC number" type="text" name="age" placeholder="Age" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-Civil Status" class="contact-Civil Status" type="text" name="martial_status" placeholder="Martial Status" required>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="address1" class="address1" type="text" name="p_address" placeholder="Permanant Address" required>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="contact-Religion" class="contact-Religion" type="text" name="school" placeholder="School" required>
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

    $('#FormNine').on('submit', function(event) {
        event.preventDefault();

        $.ajax({
            url: "{{url('/form9/submit')}}",
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
