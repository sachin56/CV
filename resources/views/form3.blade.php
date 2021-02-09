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
                                <form id="form_three" method="post" class="contact-form" action="{{URL('/form3/submit')}}">
                                    @csrf
                                    {{--                                    <div class="col-md-12">--}}
                                    {{--                                        <h2>Contact Us</h2>--}}
                                    {{--                                    </div>--}}

                                    <div class="col-md-12">
                                        <input id="fullname" class="contact-f-name" type="text" name="fullname" placeholder="Full Name / සම්පූර්ණ නම " required>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="address1" class="address1" type="text" name="address" placeholder="Address / ලිපිනය" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="email" class="contact-email" type="text" name="email" placeholder="Email / විද්‍යුත් තැපෑලය " required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact_no1" class="contact-Phone number" type="text" name="contact_no1" placeholder="Phone number / දුරකතන අංකය 1 " required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact_no2" class="contact-Phone number" type="text" name="contact_no2" placeholder="Phone number / දුරකතන අංකය 2 " required>
                                    </div>

                                    <div class="col-md-12"><h5>Profile</h5></div>


                                    <div class="col-md-12">
                                        <input id="statement1" class="contact-Statment one" type="text" name="statement1" placeholder="Statment One / ප්‍රකාශය 1" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="statement2" class="contact-Statment Two" type="text" name="statement2" placeholder="Statment Two / ප්‍රකාශය 2" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="statement3" class="contact-Statment Three" type="text" name="statement3" placeholder="Statment Three / ප්‍රකාශය 3" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="statement4" class="contact-Statment four" type="text" name="statement4" placeholder="Statment Four / ප්‍රකාශය 4" required>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="statement5" class="contact-Statment Five" type="text" name="statement5" placeholder="Statment Five / ප්‍රකාශය 5" required>
                                    </div>


                                    <div class="col-md-12"><h5>Professional Qualifications / වෘත්තීය සුදුසුකම්</h5></div>
                                    <div class="col-md-12">
                                        <input id="skill1" class="contact-Skill one" type="text" name="skill1" placeholder="Skill One / දක්ෂතා හා කුසලතා 1" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="contact-Statment two" class="contact-Skill Two" type="text" name="skill2" placeholder="Skill Two / දක්ෂතා හා කුසලතා 2" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="contact-Statment Three" class="contact-Skill Three" type="text" name="skill3" placeholder="Skill Three / දක්ෂතා හා කුසලතා 3" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="contact-Statment four" class="contact-Skill four" type="text" name="skill4" placeholder="Skill Four / දක්ෂතා හා කුසලතා 4" required>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="contact-Statment Five" class="contact-Skill Five" type="text" name="skill5" placeholder="Skill Five  / දක්ෂතා හා කුසලතා 5" required>
                                    </div>

                                    <div class="col-md-12"><h5>Educational Qualifications / අධ්‍යාපනික සුදුසුකම්</h5></div>

                                    <div class="col-md-4">
                                        <input id="contact-stream" class="contact-stream1" type="text" name="stream" placeholder="G.C.E A/L Stream /උසස් පෙළ විෂය ධාරාව" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="contact-year" class="contact-Year1" type="text" name="year" placeholder="Year / වර්ෂය" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="contact-index no" class="contact-indexNo" type="text" name="al_index" placeholder="Index Number / විභාග අංකය" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-subject one" class="contact-subject one" type="text" name="al_subject1" placeholder="Subject One / විෂය 1" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade one" class="contact-grade one" type="text" name="al_result1" placeholder="Grade / ප්‍රතිඵලය 1" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject two" class="contact-subject two" type="text" name="al_subject2" placeholder="Subject Two / විෂය 2">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade two" class="contact-grade two" type="text" name="al_result2" placeholder="Grade / ප්‍රතිඵලය 2">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject three" class="contact-subject three" type="text" name="al_subject3" placeholder="Subject Three / විෂය 3">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade three" class="contact-grade three" type="text" name="al_result3" placeholder="Grade / ප්‍රතිඵලය 3">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject four" class="contact-subject four" type="text" name="al_subject4" placeholder="Subject Four / විෂය 4">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade four" class="contact-grade four" type="text" name="al_result4" placeholder="Grade / ප්‍රතිඵලය 4">
                                    </div>

                                    <div class="col-md-12"><h5></h5></div>

                                    <div class="col-md-6">
                                        <input id="contact-year" class="contact-year" type="text" name="year1" placeholder="G.C.E O/L Year / සමාන්‍ය පෙළ විෂය ධාරාව" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-index no" class="contact-indexNo" type="text" name="ol_index" placeholder="Index Number / විභාග අංකය" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-subject one" class="contact-subject one" type="text" name="subject1" placeholder="Subject One / විෂය 1" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade one" class="contact-grade one" type="text" name="result1" placeholder="Grade / ප්‍රතිඵලය 1" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject two" class="contact-subject two" type="text" name="subject2" placeholder="Subject Two / විෂය 2">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade two" class="contact-grade two" type="text" name="result2" placeholder="Grade / ප්‍රතිඵලය 2">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject three" class="contact-subject three" type="text" name="subject3" placeholder="Subject Three / විෂය 3">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade three" class="contact-grade three" type="text" name="result3" placeholder="Grade / ප්‍රතිඵලය 3">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject four" class="contact-subject four" type="text" name="subject4" placeholder="Subject Four / විෂය 4">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade four" class="contact-grade four" type="text" name="result4" placeholder="Grade / ප්‍රතිඵලය 4">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject five" class="contact-subject five" type="text" name="subject5" placeholder="Subject Five / විෂය 5">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade five" class="contact-grade five" type="text" name="result5" placeholder="Grade / ප්‍රතිඵලය 5">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject six" class="contact-subject six" type="text" name="subject6" placeholder="Subject Six / විෂය 6">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade six" class="contact-grade six" type="text" name="result6" placeholder="Grade / ප්‍රතිඵලය 6">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject seven" class="contact-subject seven" type="text" name="subject7" placeholder="Subject Seven / විෂය 7">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade seven" class="contact-grade seven" type="text" name="result7" placeholder="Grade / ප්‍රතිඵලය 7">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject eight" class="contact-subject eight" type="text" name="subject8" placeholder="Subject Eight / විෂය 8">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade eight" class="contact-grade eight" type="text" name="result8" placeholder="Grade / ප්‍රතිඵලය 8">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-subject nine" class="contact-subject nine" type="text" name="subject9" placeholder="Subject Nine / විෂය 9">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="contact-grade nine" class="contact-grade nine" type="text" name="result9" placeholder="Grade / ප්‍රතිඵලය 9">
                                    </div>

                                    <div class="col-md-12"><h5>Projects Completed / ව්‍යාපෘති</h5></div>
                                    <div class="col-md-12">
                                        <input id="project1" class="contact-project one" type="text" name="project1" placeholder="Completed Project One / ව්‍යාපෘති 1" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="project2" class="contact-project two" type="text" name="project2" placeholder="Completed Project Two / ව්‍යාපෘති 2">
                                    </div>

                                    <div class="col-md-12"><h5>Experience / අත්දැකීම්</h5></div>
                                    <div class="col-md-12">
                                        <input id="exp" class="contact-experience" type="text" name="exp" placeholder="Experience / අත්දැකීම්" required>
                                    </div>

                                    <div class="col-md-12"><h5>Personal Details / පුද්ගලික විස්තර</h5></div>
                                    <div class="col-md-12">
                                        <input id="contact-full name" class="contact-full name" type="text" name="fname" placeholder="Full Name / සම්පූර්ණ නම" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="dob" class="contact-dob" type="text" name="dob" placeholder="Date Of Birth / උපන්දිනය" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="nationality" class="contact-nationality" type="text" name="nationality" placeholder="Nationality / ජාතිය" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="gender" class="contact-civil status" type="text" name="gender" placeholder="Gender / ස්ත්‍රී පුරුෂ භාවය" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="nic" class="contact-nic no" type="text" name="nicNo" placeholder="NIC Number / ජා.හැ. අංකය" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="civil_status" class="contact-nic no" type="text" name="civil_status" placeholder="Civil Status / සිවිල් තත්වය" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="school" class="contact-nic no" type="text" name="school" placeholder="School Attended / පාසල" required>
                                    </div>

                                    <div class="col-md-12"><h5>Non-Related Referees / නිර්දේශ කරන්නන්</h5></div>
                                    <div class="col-md-6">
                                        <input id="non_refree1_name" class="contact-full name1" type="text" name="fname1" placeholder="Refree1 Name / නිර්දේශ කරන්නාගේ නම 1" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_post" class="contact-post one" type="text" name="post1" placeholder="Refree1 Post / නිර්දේශ කරන්නාගේ තනතුර 1" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_workplace" class="contact-company one" type="text" name="company1" placeholder="Refree1 Company / නිර්දේශ කරන්නාගේ රැකියා ස්ථානය 1" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_address" class="contact-address one" type="text" name="address1" placeholder="Refree1 Address / නිර්දේශ කරන්නාගේ ලිපිනය 1" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_tel" class="contact-tele one" type="text" name="tele1" placeholder="Refree1 Telephone Number / නිර්දේශ කරන්නාගේ දුරකතන අංකය 1" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="non_refree1_email" class="contact-email one" type="text" name="email1" placeholder="Refree1 Email / නිර්දේශ කරන්නාගේ විද්‍යුත් තැපෑලය 1" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-full name two" class="contact-full name2" type="text" name="fname2" placeholder="Refree2 Name / නිර්දේශ කරන්නාගේ නම 2">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-post two" class="contact-post two" type="text" name="post2" placeholder="Refree2 Post / නිර්දේශ කරන්නාගේ තනතුර 2">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-company two" class="contact-company two" type="text" name="company2" placeholder="Refree2 Company / නිර්දේශ කරන්නාගේ රැකියා ස්ථානය 2">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-address two" class="contact-address two" type="text" name="address2" placeholder="Refree2 Address / නිර්දේශ කරන්නාගේ ලිපිනය 2">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-tele two" class="contact-tele two" type="text" name="tele2" placeholder="Refree2 Telephone Number / නිර්දේශ කරන්නාගේ දුරකතන අංකය 2">
                                    </div>

                                    <div class="col-md-6">
                                        <input id="contact-email two" class="contact-email two" type="text" name="email2" placeholder="Refree2 Email / නිර්දේශ කරන්නාගේ විද්‍යුත් තැපෑලය 2">
                                    </div>


                                    <div class="clearfix"></div>

                                    <div class="col-md-12 form-btn-submit">
                                        <input id="btnSubmit" class="button button-full contact-submit" name="contact-submit" value="Submit" type="submit">
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
        var email = $("#email").val();
        var contact_no1 = $("#contact_no1").val();
        var stat1 = $("#statement1").val();
        var dob = $("#dob").val();
        var nationality = $("#nationality").val();
        var gender = $("#gender").val();
        var nic = $("#nic").val();
        var civil_status = $("#civil_status").val();
        var school = $("#school").val();
        var ref1_name = $("#non_refree1_name").val();
        var ref1_post = $("#non_refree1_post").val();
        var ref1_workplace = $("#non_refree1_workplace").val();
        var ref1_address = $("#non_refree1_address").val();
        var ref1_contact = $("#non_refree1_tel").val();
        var ref1_email = $("#non_refree1_email").val();

        if(full_name === "") {
            alert("Please enter full name");
            return false;
        }
        else if(address1 === "") {
            alert("Please enter address");
            return false;
        }
        else if(email === "") {
            alert("Please enter email");
            return false;
        }
        else if(contact_no1 === "") {
            alert("Please enter contact number 1");
            return false;
        }

        else if(stat1 === "") {
            alert("Please enter at least 1 statement");
            return false;
        }
        else if(dob === "") {
            alert("Please enter Date of Birth");
            return false;
        }
        else if(nationality === "") {
            alert("Please enter nationality");
            return false;
        }
        else if(gender === "") {
            alert("Please enter gender");
            return false;
        }
        else if(nic === "") {
            alert("Please enter NIC");
            return false;
        }

        else if(civil_status === "") {
            alert("Please enter civil_status");
            return false;
        }
        else if(school === "") {
            alert("Please enter school");
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
        }else if(ref1_address === "") {
            alert("Please enter Refree Address");
            return false;
        }
        else if(ref1_contact === "") {
            alert("Please enter Refree contact No");
            return false;
        }
        else if(ref1_email === "") {
            alert("Please enter Refree Email");
            return false;
        }
    });
</script>

</body>
</html>
