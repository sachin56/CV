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

{{--    <!--[if lt IE 9]>--}}
{{--    <script src="../assets/js/html5shiv.js"></script>--}}
{{--    <script src="../assets/js/respond.min.js"></script>--}}
{{--    <![endif]-->--}}

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
                                <form method="post" class="contact-form" id="FormSix" enctype="multipart/form-data">

                                    <div class="col-md-12">
                                        <label for="uploadImg" class="uploadImg">Upload Image</label>
                                        <input type="file" id="uploadImg" class="show-for-sr" name="main_image" >
                                        <label id="image-name" class="label-hide"></label>
                                        <br><br>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="fullname" class="contact-f-name" type="text" name="full_name" placeholder="Full Name" >
                                    </div>

                                    <div class="col-md-12">
                                        <input id="email" class="contact-email" type="email" name="email" placeholder="Email" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact1" class="address3" type="text" name="contact1" placeholder="Contact No 1" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="address3" class="address3" type="text" name="contact2" placeholder="Contact No 2">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="address1" class="address1" type="text" name="address1" placeholder="Address line 01" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="address2" class="address2" type="text" name="address2" placeholder="Address line 02" >
                                    </div>


                                    <div class="col-md-12">
                                        <input id="contact-Enter Details" class="contact-Enter Details" type="text" name="statement" placeholder="Personal Statement" >
                                    </div>



                                    <div class="col-md-12">

                                        <h3>Education</h3>

                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="edu_qulify1" placeholder="Qualification 1" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="edu_qulify2" placeholder="Qualification 2" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="edu_qulify3" placeholder="Qualification 3">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="edu_qulify4" placeholder="Qualification 4">
                                    </div>

                                    <div class="col-md-12">
                                        <h3>Employment</h3>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="Company" class="Company" type="text" name="employ1" placeholder="employment" >
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="Period" name="employ_description" placeholder="employment description" ></textarea>
                                    </div>



                                    <div class="col-md-12">
                                        <input id="Worked Years" class="Worked Years" type="text" name="achievement1" placeholder="achievement 1" >
                                    </div>

                                    <div class="col-md-12">
                                        <input id="Worked Years" class="Worked Years" type="text" name="achievement2" placeholder="achievement 2">
                                    </div>


                                    <div class="col-md-12">
                                        <h3 style="font-size: large;">TECHNICAL SKILLS</h3>

                                    </div>


                                    <div class="col-md-12">
                                        <input id="technical_skills" class="technical_skills" type="text" name="technical_skills" placeholder="Enter Skills">
                                    </div>


                                    <div class="col-md-12">
                                        <h3 style="font-size: large;">OTHER SKILLS</h3>

                                    </div>


                                    <div class="col-md-12">
                                        <input id="technical_skills" class="technical_skills" type="text" name="other_skills" placeholder="Enter Skills">
                                    </div>



                                    <div class="col-md-12">
                                        <h3 style="font-size: large;">PERSONAL</h3>

                                    </div>


                                    <div class="col-md-6">
                                        <input id="fname" class="fname" type="text" name="p_name" placeholder="Full Name" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="address" class="address" type="text" name="p_address" placeholder="Address" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="dob" class="dofb" type="text" name="p_dob" placeholder="Date of Birth" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="age" class="age" type="text" name="p_age" placeholder="Age" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="gender" class="gender" type="text" name="p_gender" placeholder="Gender" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="civil_Status" class="Civil_Status" type="text" name="p_Status" placeholder="Civil Status" >
                                    </div>


                                    <div class="col-md-12">

                                        <h4>NON-RETATED REFEREES</h4>

                                    </div>


                                    <div class="col-md-6">
                                        <input id="non_refree1_name" class="non_refree1_name" type="text" name="non_refree1_name" placeholder="Non Related Referee1 Name" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_post" class="non_refree1_post" type="text" name="non_refree1_post" placeholder="Non Related Referee1 Post" >
                                    </div>

                                    <div class="col-md-12">
                                        <input id="non_refree1_workplace" class="non_refree1_workplace" type="text" name="non_refree1_workplace" placeholder="Non Related Referee1 working Place" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_tel" class="non_refree1_tel" type="text" name="non_refree1_tel" placeholder="Contact Number of Referee1" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_email" class="non_refree1_email" type="text" name="non_refree1_email" placeholder="Email of Referee1" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree2_name" class="non_refree2_name" type="text" name="non_refree2_name" placeholder="Non Related Referee2 Name" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree2_post" class="non_refree2_post" type="text" name="non_refree2_post" placeholder="Non Related Referee2 Post" >
                                    </div>

                                    <div class="col-md-12">
                                        <input id="non_refree2_workplace" class="non_refree2_workplace" type="text" name="non_refree2_workplace" placeholder="Non Related Referee2 working Place" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree2_tel" class="non_refree2_tel" type="text" name="non_refree2_tel" placeholder="Contact Number of Referee2" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree2_email" class="non_refree2_email" type="text" name="non_refree2_email" placeholder="Email of Referee2" >
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="col-md-12 form-btn-submit">
                                        <input id="contact-button" class="button button-full contact-submit" name="contact-submit" value="Submit" type="submit">
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

    <!-- Start Footer -->
{{--    <footer id="colophon" class="container-fluid site-footer footer-color">--}}
{{--        <div class="container footer-container site-top-footer">--}}
{{--            <div class="row">--}}

{{--                <div class="col-md-6 col-sm-12 footer-col footer-col-1">--}}
{{--                    <h3>About Us</h3>--}}
{{--                    <p>Obcaecati cupiditate non recusandae error sit voluptatem accusantium doloremque laudantium. Cupiditate non recusandae aspernatur aut rerum. Veniam, quis nostrum exercitationem.</p>--}}
{{--                </div> <!-- .footer-col-1 -->--}}

{{--                <div class="col-md-2 col-sm-4 footer-col footer-col-2">--}}
{{--                    <h3>Product</h3>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#" title="Features">Features</a></li>--}}
{{--                        <li><a href="#" title="Pricing">Pricing</a></li>--}}
{{--                        <li><a href="#" title="Download">Download</a></li>--}}
{{--                        <li><a href="#" title="Showcase">Showcase</a></li>--}}
{{--                        <li><a href="#" title="Integration">Integration</a></li>--}}
{{--                    </ul>--}}
{{--                </div> <!-- .footer-col-2 -->--}}

{{--                <div class="col-md-2 col-sm-4 footer-col footer-col-3">--}}
{{--                    <h3>Support</h3>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#" title="Support Docs">Support Docs</a></li>--}}
{{--                        <li><a href="#" title="Community">Community</a></li>--}}
{{--                        <li><a href="#" title="API Docs">API Docs</a></li>--}}
{{--                        <li><a href="#" title="Terms of Use">Terms of Use</a></li>--}}
{{--                        <li><a href="#" title="Privacy">Privacy</a></li>--}}
{{--                    </ul>--}}
{{--                </div> <!-- .footer-col-3 -->--}}

{{--                <div class="col-md-2 col-sm-4 footer-col footer-col-4">--}}
{{--                    <h3>Company</h3>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#" title="About">About</a></li>--}}
{{--                        <li><a href="#" title="Blog">Blog</a></li>--}}
{{--                        <li><a href="#" title="Jobs">Jobs</a></li>--}}
{{--                        <li><a href="#" title="Contacts">Contacts</a></li>--}}
{{--                    </ul>--}}
{{--                </div> <!-- .footer-col-4 -->--}}

{{--                <div class="col-md-12 col-sm-12 bottom-footer">--}}

{{--                    <div class="col-md-6 col-sm-12 copy-text">--}}
{{--                        <p>Dot - App, Software and SaaS Product HTML Template. All rights reserved.</p>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-6 col-sm-12 social-links">--}}
{{--                        <ul class="footer-social-icons">--}}
{{--                            <li><a href="#" title="Facebook"><i class="fa fa-fw fa-facebook" aria-hidden="true"></i></a></li>--}}
{{--                            <li><a href="#" title="Twitter"><i class="fa fa-fw fa-twitter" aria-hidden="true"></i></a></li>--}}
{{--                            <li><a href="#" title="Instagram"><i class="fa fa-fw fa-instagram" aria-hidden="true"></i></a></li>--}}
{{--                            <li><a href="#" title="Behance"><i class="fa fa-fw fa-behance" aria-hidden="true"></i></a></li>--}}
{{--                            <li><a href="#" title="Linkedin"><i class="fa fa-fw fa-linkedin" aria-hidden="true"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div> <!-- .social-links -->--}}

{{--                </div> <!-- .bottom-footer -->--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
<!-- End Footer -->

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

    $('#FormSix').on('submit', function(event) {

        event.preventDefault();


            var full_name = $("#fullname").val();
            var email = $("#email").val();
            var contact_no = $("#contact1").val();
            var address1 = $("#address1").val();
            var ref1_name = $("#non_refree1_name").val();
            var ref1_post = $("#non_refree1_post").val();
            var ref1_workplace = $("#non_refree1_workplace").val();
            var ref1_contact = $("#non_refree1_tel").val();
            var dob = $("#non_refree1_tel").val();


        $.ajax({
            url: "{{url('/form6/submit')}}",
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
