<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Duve Creative</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/proj.css">

    <!-- script
   ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

    <!-- header 
   ================================================== -->
    <header>

        <div class="row">
            <div class="logo">duve creative</div>
            <a href="#contact" class="smoothscroll contact-scroll"><i class="fa fa-envelope-o"></i></a>
        </div>

    </header>
    <!-- /header -->

    <!-- home
   ================================================== -->
    <section id="home">

        <div class="content-wrap-table">

            <div class="main-content-tablecell">

                <div class="row">
                    <div class="col-twelve">

                        <div id="counter">
                            <div class="half">
                                <span>334 <sup>days</sup></span>
                                <span>23 <sup>hours</sup></span>
                            </div>
                            <div class="half">
                                <span>50 <sup>mins</sup></span>
                                <span>33 <sup>secs</sup></span>
                            </div>
                        </div>

                        <div class="bottom-text">
                            <h1>duve creative is launching.</h1>
                        </div>

                    </div>
                    <!-- /twelve -->

                </div>
                <!-- /row -->

            </div>
            <!-- /main-content -->

        </div>
        <!-- /content-wrap -->

    </section>

    <!-- contact
   ================================================== -->
    <section id="contact">
        <div class="row">
            <div class="col-twelve">
                <!-- contact-warning -->
                <div id="message-warning" style="display:none;">
                </div>
                <!-- contact-success -->
                <div id="message-success" style="display:none;">
                    Your message was sent, thank you!
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-twelve">

                <h1>Get In Touch.</h1>
                <div id="tab-contact" class="tab-content">

                    <!-- Starting of ajax contact form -->
                    <form class="contact__form" method="post" action="mailer5.php">

                        <!-- Element of the ajax contact form -->
                        <div class="row">
                            <div class="form-field">
                                <input name="name" type="text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-field">
                                <input name="email" type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-field">
                                <select name="inquiry" class="form-control" required>
                                    <option value="" disabled selected>What is your business inquire?</option>
                                    <option value="UX">Branding</option>
                                    <option value="UX">UX Design</option>
                                    <option value="FED">UI Development</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <input name="subject" type="text" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="form-field">
                                <textarea name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-field">
                                <div class="g-recaptcha" data-sitekey="6Lf6CHoUAAAAAEEvZfLRIUXl93mimp1lt5RwNlux"></div>
                            </div>
                            <div class="form-field">
                                <input name="submit" type="submit" class="btn btn-success" value="Send Message">
                            </div>
                        </div>

                </div>

                </form>
                <!-- Ending of ajax contact form -->

                <div class="back-to-top">
                    <a href="#top" id="scrollTop" class="smoothscroll">Back to Top</a>
                </div>
            </div>

        </div>
        <!-- twelve -->

        </div>
        <!-- row -->

    </section>
    <!-- /info -->

    <div class="linear-loader" style="display:none;">
        <div class="loader-bar"></div>
    </div>
    <!-- Java Script
   ================================================== -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="main5.js"></script>

    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("UA-7708547-1");
            pageTracker._trackPageview();
        } catch (err) {}
    </script>

</body>

</html>