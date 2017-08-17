<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link href="index.html" rel="canonical" />
    <link href="favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="{{asset('css/chosen.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/layout.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/template.css')}}" type="text/css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700,700italic,800,800italic" type="text/css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Abril+Fatface" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/material-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/thin.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/komento.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/color_scheme_1.css')}}" type="text/css" id="color_scheme" />
    <link rel="stylesheet" href="{{asset('css/lrstyle.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/rd-parallax.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/camera.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/icemegamenu.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}" type="text/css" />
    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3.exp;language=en-GB;libraries=places'></script>
    <script src="{{asset('media/jui/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('media/jui/js/jquery-noconflict.js')}}" type="text/javascript"></script>
    <script src="{{asset('media/jui/js/jquery-migrate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('media/jui/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('media/jui/js/chosen.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/scripts.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.cookies.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/style_switcher_demo.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.rd-parallax.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/camera.min.js')}}"type="text/javascript"></script>
    <script src="{{asset('js/menu.js')}}" type="text/javascript" defer="defer"></script>
    <script src="{{asset('js/jquery.rd-navbar.js')}}" type="text/javascript" defer="defer"></script>
    <script type='text/javascript' src="{{asset('js/googlemapsv3.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.hasTooltip').tooltip({
                "html": true,
                "container": "body"
            });
        });
        jQuery(document).ready(function() {
            jQuery('select').chosen({
                "disable_search_threshold": 10,
                "allow_single_deselect": true,
                "placeholder_text_multiple": "Select some options",
                "placeholder_text_single": "Select an option",
                "no_results_text": "No results match"
            });
        });

        var path = "js/";
        (function($) {
            $(document).ready(function() {
                var o = $("#back-top");
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        o.fadeIn()
                    } else {
                        o.fadeOut()
                    }
                });
                var $scrollEl = ($.browser.mozilla || $.browser.msie) ? $("html") : $("body");
                o.find("a").click(function() {
                    $scrollEl.animate({
                        scrollTop: 0
                    }, 400);
                    return false
                })
            })
        })(jQuery);
        (function($) {
            $(document).ready(function() {
                var o = $('a[href="#modal"]');
                o.click(function(e) {
                    $("#modal").modal({
                        show: true,
                        backdrop: false
                    });
                    e.preventDefault()
                });
                $("#modal button.modalClose").click(function(e) {
                    $("#modal").modal("hide");
                    e.preventDefault()
                });
                $(".modal-hide").click(function(e) {
                    $("#modal").modal("hide")
                })
            })
        })(jQuery);
        window.olark || (function(c) {
            var f = window,
                d = document,
                l = f.location.protocol == "https:" ? "https:" : "http:",
                z = c.name,
                r = "load";
            var nt = function() {
                f[z] = function() {
                    (a.s = a.s || []).push(arguments)
                };
                var a = f[z]._ = {},
                    q = c.methods.length;
                while (q--) {
                    (function(n) {
                        f[z][n] = function() {
                            f[z]("call", n, arguments)
                        }
                    })(c.methods[q])
                }
                a.l = c.loader;
                a.i = nt;
                a.p = {
                    0: +new Date
                };
                a.P = function(u) {
                    a.p[u] = new Date - a.p[0]
                };

                function s() {
                    a.P(r);
                    f[z](r)
                }
                f.addEventListener ? f.addEventListener(r, s, false) : f.attachEvent("on" + r, s);
                var ld = function() {
                    function p(hd) {
                        hd = "head";
                        return ["<", hd, "></", hd, "><", i, ' onl' + 'oad="var d=', g, ";d.getElementsByTagName('head')[0].", j, "(d.", h, "('script')).", k, "='", l, "//", a.l, "'", '"', "></", i, ">"].join("")
                    }
                    var i = "body",
                        m = d[i];
                    if (!m) {
                        return setTimeout(ld, 100)
                    }
                    a.P(1);
                    var j = "appendChild",
                        h = "createElement",
                        k = "src",
                        n = d[h]("div"),
                        v = n[j](d[h](z)),
                        b = d[h]("iframe"),
                        g = "document",
                        e = "domain",
                        o;
                    n.style.display = "none";
                    m.insertBefore(n, m.firstChild).id = z;
                    b.frameBorder = "0";
                    b.id = z + "-loader";
                    if (/MSIE[ ]+6/.test(navigator.userAgent)) {
                        b.src = "javascript:false"
                    }
                    b.allowTransparency = "true";
                    v[j](b);
                    try {
                        b.contentWindow[g].open()
                    } catch (w) {
                        c[e] = d[e];
                        o = "javascript:var d=" + g + ".open();d.domain='" + d.domain + "';";
                        b[k] = o + "void(0);"
                    }
                    try {
                        var t = b.contentWindow[g];
                        t.write(p());
                        t.close()
                    } catch (x) {
                        b[k] = o + 'd.write("' + p().replace(/"/g, String.fromCharCode(92) + '"') + '");d.close();'
                    }
                    a.P(2)
                };
                ld()
            };
            nt()
        })({
            loader: "static.olark.com/jsclient/loader0.js",
            name: "olark",
            methods: ["configure", "extend", "declare", "identify"]
        });
        olark.identify('5615-604-10-1042');
        jQuery(function($) {
            $("#camera-slideshow_201").camera({
                alignment: "topCenter",
                autoAdvance: 1,
                mobileAutoAdvance: 1,
                barDirection: "leftToRight",
                barPosition: "bottom",
                cols: 6,
                easing: "swing",
                mobileEasing: "swing",
                fx: "simpleFade",
                mobileFx: "simpleFade",
                gridDifference: 250,
                height: "38.24390243902439%",
                imagePath: "images/",
                hover: 0,
                loader: "none",
                loaderColor: "#eeeeee",
                loaderBgColor: "#222222",
                loaderOpacity: .8,
                loaderPadding: 2,
                loaderStroke: 7,
                minHeight: "600px",
                navigation: 1,
                navigationHover: 1,
                mobileNavHover: 0,
                opacityOnGrid: 0,
                overlayer: 0,
                pagination: 0,
                playPause: 0,
                pauseOnClick: 0,
                pieDiameter: 38,
                piePosition: "rightTop",
                portrait: 0,
                rows: 4,
                slicedCols: 6,
                slicedRows: 4,
                thumbnails: 0,
                time: 7000,
                transPeriod: 500
            })
        });
        jQuery(function($) {
            var e = $(window).width();
            $("#icemegamenu").find(".icesubMenu").each(function(a) {
                var b = $(this).offset();
                var c = b.left + $(this).width();
                if (c >= e) {
                    $(this).addClass("ice_righttoleft")
                }
            });
            $(window).resize(function() {
                var d = $(window).width();
                $("#icemegamenu").find(".icesubMenu").removeClass("ice_righttoleft").each(function(a) {
                    var b = $(this).offset();
                    var c = b.left + $(this).width();
                    if (c >= d) {
                        $(this).addClass("ice_righttoleft")
                    }
                })
            })
        });
        jQuery(function($){
            $(".iceMenuTitle").click(function(){
                $(this).toggleClass('icemega_active');

            })
        })
    </script>
</head>
<body>
<body class="body__home option-com_content view-category task- itemid-101">
<div id="wrapper">
    <div class="wrapper-inner">
        <a id="fake" href='#'></a>
        <div class="header">
            <div id="top">
                <div class="row-container">
                    <div class="container-fluid">
                        <div class="row-fluid">
                            <nav class="moduletable home_menu  span12">
                                <div class="module_container">
                                    <div class="icemegamenu">
                                        <ul id="icemegamenu">
                                            <li id="iceMenu_101" class="iceMenuLiLevel_1 mzr-drop parent current active fullwidth">
                                                <a href="/" class="icemega_active iceMenuTitle ">
                                                    <span class="icemega_title icemega_nosubtitle">Home</span>
                                                </a>
                                                <ul class="icesubMenu icemodules sub_level_1" style="width:100%">
                                                    <li>
                                                        <div style="float:left; width: 1px" class="iceCols">
                                                            <ul>
                                                                <li id="iceMenu_347" class="iceMenuLiLevel_2 ">
                                                                    <div class="icemega_cover_module" style="width:100%">
                                                                        <div class="icemega_modulewrap center articles" style="width:auto; ">
                                                                            <div class="mod-newsflash-adv mod-newsflash-adv__center articles cols-3" id="module_223">
                                                                                <div class="row-fluid">
                                                                                    <article class="span4 item item_num0 item__module  " id="item_155">
                                                                                        <div class="item_content">
                                                                                            <header class="item_header">
                                                                                                <h2 class="item_title item_title__center articles">
                                                                                                    Dinners </h2>
                                                                                            </header>
                                                                                            <div class="item_introtext">
                                                                                                <strong><span>Our Famous Prawn Linguine</span>£7.75 / 13.50</strong>
                                                                                                <p>Fried garlicky prawns, fennel, tomatoes, chilli, saffron, fish broth &amp; lemony rocket</p>
                                                                                                <strong><span>Gnocchi Genovese</span>£6.00 / 11.50</strong>
                                                                                                <p>Potato gnocchi with green beans, crushed purple potatoes, basil pesto, toasted pine nuts, Bella Lodi &amp; ricotta</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clearfix"></div>
                                                                                    </article>
                                                                                    <article class="span4 item item_num1 item__module  " id="item_156">
                                                                                        <div class="item_content">
                                                                                            <header class="item_header">
                                                                                                <h2 class="item_title item_title__center articles">
                                                                                                    Lunches </h2>
                                                                                            </header>
                                                                                            <div class="item_introtext">
                                                                                                <strong><span>Turkey Milanese</span>£13.50</strong>
                                                                                                <p>Stuffed with prosciutto &amp; provolone, breadcrumbed &amp; topped with a free-range egg &amp; black summer truffle</p>
                                                                                                <strong><span>Fritto Misto</span>£7.95 / 14.95</strong>
                                                                                                <p>Mixed seasonal flash-fried sustainable fish &amp; shellfish served with chunky Italian tartare sauce &amp; lemon</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clearfix"></div>
                                                                                    </article>
                                                                                    <article class="span4 item item_num2 item__module  lastItem" id="item_157">
                                                                                        <div class="item_content">
                                                                                            <header class="item_header">
                                                                                                <h2 class="item_title item_title__center articles">
                                                                                                    Breakfasts </h2>
                                                                                            </header>
                                                                                            <div class="item_introtext">
                                                                                                <strong><span>Artisan Breads</span>£3.95</strong>
                                                                                                <p>Freshly baked focaccia, ciabatta, seeded crackerbread, sourdough, grissini, extra virgin olive oil, balsamic</p>
                                                                                                <strong><span>Crab &amp; Avocado Bruschetta</span>£6.70</strong>
                                                                                                <p>Fresh white &amp; brown crab, crunchy fennel, smashed avocado, yoghurt &amp; chilli</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clearfix"></div>
                                                                                    </article>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                                <div class="mod-newsflash-adv_custom-link">
                                                                                    <a class="btn btn-info" href="blog.html">view all menu</a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="iceMenu_335" class="iceMenuLiLevel_1 mzr-drop parent ">
                                                <a class=" iceMenuTitle " href="/reservation">
                                                    <span class="icemega_title icemega_nosubtitle">Reservation</span>
                                                </a>
                                                <ul class="icesubMenu icemodules sub_level_1" style="width:250px">
                                                    <li>
                                                        <div style="float:left;width:250px" class="iceCols">
                                                            <ul>
                                                                <li id="iceMenu_336" class="iceMenuLiLevel_2 ">
                                                                    <a href="/joomla_58322/index.php/pages/pricing" class=" iceMenuTitle ">
                                                                        <span class="icemega_title icemega_nosubtitle">Pricing</span>
                                                                    </a>
                                                                </li>
                                                                <li id="iceMenu_138" class="iceMenuLiLevel_2 ">
                                                                    <a href="/joomla_58322/index.php/pages/faqs" class=" iceMenuTitle ">
                                                                        <span class="icemega_title icemega_nosubtitle">FAQs</span>
                                                                    </a>
                                                                </li>
                                                                <li id="iceMenu_136" class="iceMenuLiLevel_2 ">
                                                                    <a href="/joomla_58322/index.php/pages/our-team" class=" iceMenuTitle ">
                                                                        <span class="icemega_title icemega_nosubtitle">Our team</span>
                                                                    </a>
                                                                </li>
                                                                <li id="iceMenu_135" class="iceMenuLiLevel_2 ">
                                                                    <a href="/joomla_58322/index.php/pages/history" class=" iceMenuTitle ">
                                                                        <span class="icemega_title icemega_nosubtitle">History</span>
                                                                    </a>
                                                                </li>
                                                                <li id="iceMenu_137" class="iceMenuLiLevel_2 ">
                                                                    <a href="/joomla_58322/index.php/pages/testimonials" class=" iceMenuTitle ">
                                                                        <span class="icemega_title icemega_nosubtitle">Testimonials</span>
                                                                    </a>
                                                                </li>
                                                                <li id="iceMenu_305" class="iceMenuLiLevel_2 ">
                                                                    <a href="/joomla_58322/index.php/pages/site-map" class=" iceMenuTitle ">
                                                                        <span class="icemega_title icemega_nosubtitle">Site map</span>
                                                                    </a>
                                                                </li>
                                                                <li id="iceMenu_342" class="iceMenuLiLevel_2 ">
                                                                    <a href="/joomla_58322/index.php/forum" class=" iceMenuTitle ">
                                                                        <span class="icemega_title icemega_nosubtitle">Forum</span>
                                                                    </a>
                                                                </li>
                                                                <li id="iceMenu_343" class="iceMenuLiLevel_2 ">
                                                                    <a href="/joomla_58322/index.php/pages/careers" class=" iceMenuTitle ">
                                                                        <span class="icemega_title icemega_nosubtitle">Careers</span>
                                                                    </a>
                                                                </li>
                                                                <li id="iceMenu_283" class="iceMenuLiLevel_2 ">
                                                                    <a href="/joomla_58322/index.php/pages/portfolio" class=" iceMenuTitle ">
                                                                        <span class="icemega_title icemega_nosubtitle">Portfolio</span>
                                                                    </a>
                                                                </li>
                                                                <li id="iceMenu_426" class="iceMenuLiLevel_2 ">
                                                                    <a href="/joomla_58322/index.php/pages/elements" class=" iceMenuTitle ">
                                                                        <span class="icemega_title icemega_nosubtitle">Elements</span>
                                                                    </a>
                                                                </li>
                                                                <li id="iceMenu_171" class="iceMenuLiLevel_2 ">
                                                                    <a href="/joomla_58322/index.php/template-settings" class=" iceMenuTitle ">
                                                                        <span class="icemega_title icemega_nosubtitle">Template settings</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="iceMenu_134" class="iceMenuLiLevel_1 ">
                                                <a href="/about" class=" iceMenuTitle ">
                                                    <span class="icemega_title icemega_nosubtitle">About us</span>
                                                </a>
                                            </li>
                                            <li id="iceMenu_285" class="iceMenuLiLevel_1 ">
                                                <a href="/blog" class=" iceMenuTitle ">
                                                    <span class="icemega_title icemega_nosubtitle">Blog</span>
                                                </a>
                                            </li>
                                            <li id="iceMenu_203" class="iceMenuLiLevel_1 gallery">
                                                <a href="/gallery" class=" iceMenuTitle ">
                                                    <span class="icemega_title icemega_nosubtitle">Gallery</span>
                                                </a>
                                            </li>
                                            <li id="iceMenu_142" class="iceMenuLiLevel_1 ">
                                                <a href="/contacts" class=" iceMenuTitle ">
                                                    <span class="icemega_title icemega_nosubtitle">Contacts</span>
                                                </a>
                                            </li>
                                            <li id="iceMenu_467" class="iceMenuLiLevel_1 mzr-drop parent menu-login-form">
                                                <a href="#" class=" iceMenuTitle ">
                                                    <span class="icemega_title icemega_nosubtitle">Login</span>
                                                </a>
                                                <ul class="icesubMenu icemodules sub_level_1" style="width:330px">
                                                    <li>
                                                        <div style="float:left;width:330px" class="iceCols">
                                                            <ul>
                                                                <li id="iceMenu_438" class="iceMenuLiLevel_2 ">
                                                                    <div class="icemega_cover_module" style="width:330px">
                                                                        <div class="icemega_modulewrap login_megamenu login_shell" style="width:auto; ">
                                                                            <h5 class="">Login or register</h5>
                                                                            <form action="/joomla_58322/index.php" method="post" id="login-form">
                                                                                <div class="mod-login_userdata">
                                                                                    <div id="form-login-username">
                                                                                        <div class="control">
                                                                                            <div class="input-prepend">
                                                                                                <input id="modlgn-username" type="text" name="username" class="input-small" tabindex="0" size="18" placeholder="Username" required />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="form-login-password">
                                                                                        <div class="control">
                                                                                            <div class="input-prepend">
                                                                                                <input id="modlgn-passwd" type="password" name="password" class="input-small" tabindex="0" size="18" placeholder="Password" required />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="reset_remind">
                                                                                        <ul class="unstyled">
                                                                                            <li><a href="/joomla_58322/index.php/password-reset">Forgot your password?</a></li>
                                                                                            <li><a href="/joomla_58322/index.php/username-reminder-request">Forgot your username?</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="mod-login_submit">
                                                                                        <button type="submit" tabindex="3" name="Submit" class="btn btn-primary">Login</button>
                                                                                    </div>
                                                                                    <input type="hidden" name="option" value="com_users">
                                                                                    <input type="hidden" name="task" value="user.login">
                                                                                    <input type="hidden" name="return" value="aW5kZXgucGhwP0l0ZW1pZD0xMDE=">
                                                                                    <input type="hidden" name="47a1f6ad1291d670680fbd25728d8cb6" value="1" /> OR <a class="register" href="/joomla_58322/index.php/user-registration">Register</a>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="iceMenu_437" class="iceMenuLiLevel_1 mzr-drop parent menu-search">
                                                <a href="#" class=" iceMenuTitle ">
                                                    <span class="icemega_title icemega_nosubtitle">Search</span>
                                                </a>
                                                <ul class="icesubMenu icemodules sub_level_1" style="width:100%">
                                                    <li>
                                                        <div style="float:left;width:1px" class="iceCols">
                                                            <ul>
                                                                <li id="iceMenu_477" class="iceMenuLiLevel_2 ">
                                                                    <div class="icemega_cover_module" style="width:100%">
                                                                        <div class="icemega_modulewrap top_search" style="width:auto; ">
                                                                            <i class="search thin-icon-email-search"></i>
                                                                            <div role="search" class="mod-search mod-search__top_search">
                                                                                <form action="" method="post" class="navbar-form">
                                                                                    <label for="searchword" class="element-invisible">Search ...</label>
                                                                                    <input id="searchword" name="searchword" maxlength="200" class="inputbox mod-search_searchword" type="text" size="20" placeholder="Search ..." required>
                                                                                    <button class="button btn btn-primary" onclick="this.form.searchword.focus();"><i class="search thin-icon-email-search"></i> </button>
                                                                                    <input type="hidden" name="task" value="search">
                                                                                    <input type="hidden" name="option" value="com_search">
                                                                                    <input type="hidden" name="Itemid" value="101">
                                                                                </form>
                                                                                <i class="fa fa-times"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div>@yield('content')</div>
</body>
</body>
</html>