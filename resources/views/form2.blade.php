<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>CVTemp</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

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

    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->

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
                                <form id="form_two" class="contact-form" method="post" action="{{URL('/form2/submit')}}" >
                                    @csrf

                                    <div class="col-md-12">
                                        <input id="address1" class="address1" type="text" name="address" placeholder="Address line / ලිපිනය " >
                                    </div>

                                    <div class="col-md-12">
                                        <input id="fullname" class="contact-f-name" type="text" name="fullname" placeholder="Full Name / සම්පූර්ණ නම" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="dob" class="contact-Date of birth" type="text" name="dob" placeholder="Date of birth / උපන්දිනය" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact_no" class="contact_no" type="text" name="contact_no" placeholder="Contact No / දුරකතන අංකය" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="sex" class="contact-Sex" type="text" name="sex" placeholder="Sex / ස්ත්රී පුරුෂ භාවය" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="age" class="contact-Age" type="text" name="age" placeholder="Age / වයස" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="nic" class="contact-NIC number" type="text" name="nic" placeholder="NIC number / ජා.හැ.අ." >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="driving_license" class="contact-Driving License" type="text" name="driving_license" placeholder="Driving License / රියැදුරු බලපත්ර
" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="civil_status" class="contact-Civil Status" type="text" name="civil_status" placeholder="Civil Status / සිවිල් තත්වය" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="religion" class="contact-Religion" type="text" name="religion" placeholder="Religion / ආගම" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="nationality" class="contact-Nationality" type="text" name="nationality" placeholder="Nationality / ජාතිය" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="school" class="contact-School" type="text" name="school" placeholder="School / පාසල" >
                                    </div>


                                    <div class="col-md-12">

                                        <h3>Education Qulifications / අධ්‍යාපනික සුදුසුකම්</h3>
                                        <h4>G.C.E.(O/L) Examination / සාමාන්‍ය පෙල ප්‍රතිඵල</h4>

                                    </div>

                                    <div class="col-md-6">
                                        <input id="subject1" class="Subject" type="text" name="subject1" placeholder="Subject1 / විෂය 1" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="results1" class="Results" type="text" name="results1" placeholder="Results1 / ප්‍රතිඵලය 1" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="subject2" class="Subject" type="text" name="subject2" placeholder="Subject2 / විෂය 2">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="results2" class="Results" type="text" name="results2" placeholder="Results2 / ප්‍රතිඵලය 2" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="subject3" class="Subject" type="text" name="subject3" placeholder="Subject3 / විෂය 3" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="results3" placeholder="Results3 / ප්‍රතිඵලය 3" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="subject4" placeholder="Subject4 / විෂය 4" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="results4" placeholder="Results4 / ප්‍රතිඵලය 4" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="subject5" placeholder="Subject5 / විෂය 5" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="results5" placeholder="Results5 / ප්‍රතිඵලය 5" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Subject" class="Subject" type="text" name="subject6" placeholder="Subject6 / විෂය 6" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="Results" class="Results" type="text" name="results6" placeholder="Results6 / ප්‍රතිඵලය 6" >
                                    </div>


                                    <div class="col-md-12"><h5>Work Expirence / වෘත්තීය අත්දැකීම්</h5></div>


                                    <div class="col-md-6">
                                        <input id="company" class="Company" type="text" name="company" placeholder="Company / රැකියා ස්ථානය" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="period" class="Period" type="text" name="period" placeholder="Period / කාල සීමාව" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="worked_years" class="Worked Years" type="text" name="worked_years" placeholder="Worked Years / රැකියා වර්ෂය" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="covered_area" class="Covered area" type="text" name="covered_area" placeholder="Covered area / ආවරණය කළ ප්‍රදේශ" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="city_work" class="City worked in" type="text" name="city_work" placeholder="City worked in / රැකියා ස්ථානය නගරය " >
                                    </div>


                                    <div class="col-md-12">
                                        <h4>Language Fluency / භාෂා චතුරතාව</h4>
                                    </div>


                                    <div class="col-md-12">
                                        <input id="language" class="contact-Enter Languages" type="text" name="language" placeholder="Enter Languages / භාෂා" >
                                    </div>




                                    <div class="col-md-12">

                                        <h4>NON-RELATED REFEREES / නිර්දේශ කරන්නන්</h4>

                                    </div>


                                    <div class="col-md-6">
                                        <input id="non_refree1_name" class="non_refree1_name" type="text" name="non_refree1_name" placeholder="Non Related Referee1 Name / නිර්දේශ කරන්නාගේ නම 1" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_post" class="non_refree1_post" type="text" name="non_refree1_post" placeholder="Non Related Referee1 Post / නිර්දේශ කරන්නාගේ තනතුර 1" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_workplace" class="non_refree1_workplace" type="text" name="non_refree1_workplace" placeholder="Non Related Referee1 working Place / නිර්දේශ කරන්නාගේ රැකියා ස්ථානය 1" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_tel" class="non_refree1_tel" type="text" name="non_refree1_tel" placeholder="Contact Number of Referee1 / නිර්දේශ කරන්නාගේ දුරකතන අංකය 1" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree2_name" class="non_refree2_name" type="text" name="non_refree2_name" placeholder="Non Related Referee2 Name / නිර්දේශ කරන්නාගේ නම 2" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree2_post" class="non_refree2_post" type="text" name="non_refree2_post" placeholder="Non Related Referee2 Post / නිර්දේශ කරන්නාගේ තනතුර 2" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree2_workplace" class="non_refree2_workplace" type="text" name="non_refree2_workplace" placeholder="Non Related Referee2 working Place / නිර්දේශ කරන්නාගේ රැකියා ස්ථානය 2" >
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree2_tel" class="non_refree2_tel" type="text" name="non_refree2_tel" placeholder="Contact Number of Referee2 / නිර්දේශ කරන්නාගේ දුරකතන අංකය 2" >
                                    </div>


                                    <div class="clearfix"></div>

                                    <div class="col-md-12 form-btn-submit">
                                        <input id="btnSubmit" class="button button-full contact-submit" value="Submit" type="submit">
                                    </div>

                                </form>
                            </div>
                            <!-- End Contact Form -->

                        </div> <!-- .row -->
                    </div> <!-- .container -->
                </section>
                <!-- End Contact us -->

                <!-- Start Newsletter -->
            {{--                <section id="newsletter---1" class="container-fluid section-block newsletter-form-section bg-primary-color">--}}
            {{--                    <div class="container">--}}
            {{--                        <div class="row">--}}

            {{--                            <h2>Newsletter</h2>--}}
            {{--                            <div class="block-desc">--}}
            {{--                                <p>Totam rem aperiam eaque ipsa, quae ab illo. Aliquid ex ea commodi autem vel eum fugiat, quo voluptas assumenda est.</p>--}}
            {{--                            </div>--}}

            {{--                            <!-- Start Newsletter Form -->--}}
            {{--                            <div class="col-md-12 newsletter-form-block">--}}
            {{--                                <div class="col-md-6 center-form">--}}
            {{--                                    <form id="newsletter-form" class="newsletter-form" action="http://demo.harbourthemes.com/demo/dot/blocks/newsletter.php">--}}
            {{--                                        <input id="newsletter-email" class="newsletter-email newsletter-email" type="email" name="newsletter-email" placeholder="Enter your email">--}}
            {{--                                        <input id="newsletter-submit" class="button-form newsletter-submit" name="newsletter-submit" value="Submit" type="submit">--}}
            {{--                                    </form>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <!-- End Newsletter Form -->--}}

            {{--                        </div> <!-- .row -->--}}
            {{--                    </div> <!-- .container -->--}}
            {{--                </section>--}}
            <!-- End Newsletter -->

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

    $( "#btnSubmit" ).click(function() {

        var full_name = $("#fullname").val();
        var address1 = $("#address1").val();
        var dob = $("#dob").val();
        var contact_no = $("#contact_no").val();
        var sex = $("#sex").val();
        var age = $("#age").val();
        var nic = $("#nic").val();
        var driving_license = $("#driving_license").val();
        var civil_status = $("#civil_status").val();
        var religion = $("#religion").val();
        var nationality = $("#nationality").val();
        var school = $("#school").val();
        // var sub1 = $("#subject1").val();
        // var sub2 = $("#subject2").val();
        // var sub3 = $("#subject3").val();
        // var res1 = $("#results1").val();
        // var res2 = $("#result2").val();
        // var res3 = $("#results3").val();
        var company = $("#company").val();
        var period = $("#period").val();
        var worked_years = $("#worked_years").val();
        var covered_area = $("#covered_area").val();
        var city_work = $("#city_work").val();
        var language = $("#language").val();
        var ref1_name = $("#non_refree1_name").val();
        var ref1_post = $("#non_refree1_post").val();
        var ref1_workplace = $("#non_refree1_workplace").val();
        var ref1_contact = $("#non_refree1_tel").val();

        if(address1 === "") {
            alert("Please enter address ");
            return false;
        }
        else if(full_name === "") {
            alert("Please enter full name");
            return false;
        }
        else if(dob === "") {
            alert("Please enter date of birth");
            return false;
        }
        else if(contact_no === "") {
            alert("Please enter contact number");
            return false;
        }
        else if(sex === "") {
            alert("Please enter Sex");
            return false;
        }

        else if(age === "") {
            alert("Please enter Age");
            return false;
        }
        else if(nic === "") {
            alert("Please enter NIC");
            return false;
        }
        else if(driving_license === "") {
            alert("Please enter driving license");
            return false;
        }
        else if(civil_status === "") {
            alert("Please enter civil status");
            return false;
        }
        else if(religion === "") {
            alert("Please enter Religion");
            return false;
        }
        else if(nationality === "") {
            alert("Please enter nationality");
            return false;
        }else if(school === "") {
            alert("Please enter school");
            return false;
        }
        // else if(sub1 === "") {
        //     alert("Please enter at least 3 ol subjects and results");
        //     return false;
        // }else if(res1 === "") {
        //     alert("Please enter at least 3 ol subjects and results");
        //     return false;
        // }else if(sub2 === "") {
        //     alert("Please enter at least 3 ol subjects and results");
        //     return false;
        // }else if(res2 === "") {
        //     alert("Please enter at least 3 ol subjects and results");
        //     return false;
        // }else if(sub3 === "") {
        //     alert("Please enter at least 3 ol subjects and results");
        //     return false;
        // }else if(res3 === "") {
        //     alert("Please enter at least 3 ol subjects and results");
        //     return false;
        // }
         else if(company === "") {
            alert("Please enter company");
            return false;
        }else if( period=== "") {
            alert("Please enter period");
            return false;
        }else if(worked_years === "") {
            alert("Please enter worked years");
            return false;
        }else if(covered_area === "") {
            alert("Please enter covered area");
            return false;
        }else if(city_work === "") {
            alert("Please enter work city");
            return false;
        }
        else if(language === "") {
            alert("Please enter language");
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
    });



</script>

</body>
</html>
