<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'vuescript' => array($this, 'block_vuescript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3407040b69a55b2961fe2b39a9bdda7a3240d8ee285a2b7b839bd6023cb06272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3407040b69a55b2961fe2b39a9bdda7a3240d8ee285a2b7b839bd6023cb06272->enter($__internal_3407040b69a55b2961fe2b39a9bdda7a3240d8ee285a2b7b839bd6023cb06272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cb6a99f8b260d7f6fa467e531c7e30f76d0ef3e2657b6a760589bd93cba951f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6a99f8b260d7f6fa467e531c7e30f76d0ef3e2657b6a760589bd93cba951f9->enter($__internal_cb6a99f8b260d7f6fa467e531c7e30f76d0ef3e2657b6a760589bd93cba951f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 9]><html class=\"ie ie9\"> <![endif]-->
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"keywords\" content=\"pizza, delivery food, fast food, sushi, take away, chinese, italian food\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Ansonika\">
        <title>QuickFood - Quality delivery or take away food</title>
        <!-- Favicons-->
        <link rel=\"shortcut icon\" href=\"/img/favicon.ico\" type=\"image/x-icon\">
        <link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"/img/apple-touch-icon-57x57-precomposed.png\">
        <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"/img/apple-touch-icon-72x72-precomposed.png\">
        <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\" href=\"/img/apple-touch-icon-114x114-precomposed.png\">
        <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\" href=\"/img/apple-touch-icon-144x144-precomposed.png\">
        
        <!-- GOOGLE WEB FONT -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
        <!-- BASE CSS -->
        <link href=\"/css/base.css\" rel=\"stylesheet\">
        
        <!-- Radio and check inputs -->
        <link href=\"/css/skins/square/grey.css\" rel=\"stylesheet\">
        <!--[if lt IE 9]>
        <script src=\"/js/html5shiv.min.js\"></script>
        <script src=\"/js/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lte IE 8]>
        <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a>.</p>
        <![endif]-->
        <div id=\"preloader\">
            <div class=\"sk-spinner sk-spinner-wave\" id=\"status\">
                <div class=\"sk-rect1\"></div>
                <div class=\"sk-rect2\"></div>
                <div class=\"sk-rect3\"></div>
                <div class=\"sk-rect4\"></div>
                <div class=\"sk-rect5\"></div>
            </div>
        </div><!-- End Preload -->
        <!-- Header ================================================== -->
        <header>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col--md-4 col-sm-4 col-xs-4\">
                        <a href=\"index.html\" id=\"logo\">
                            <img src=\"/img/tongcrew_logo.png\" height=\"23\" alt=\"\" data-retina=\"true\" class=\"hidden-xs\">
                            <img src=\"/img/tongcrew_logo.png\" height=\"23\" alt=\"\" data-retina=\"true\" class=\"hidden-lg hidden-md hidden-sm\">
                        </a>
                    </div>
                    <nav class=\"col--md-8 col-sm-8 col-xs-8\">
                        <a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu mobile</span></a>
                        <div class=\"main-menu\">
                            <div id=\"header_menu\">
                                <img src=\"/img/logo.png\" width=\"190\" height=\"23\" alt=\"\" data-retina=\"true\">
                            </div>
                            <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_close\"></i></a>
                            <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_close\"></i></a>
                            <ul>
                                
                                <li><a href=\"about.html\"><i class=\"icon-star\"></i>&nbsp;本月湯單</a></li>
                                <li><a href=\"faq.html\"><i class=\"icon-truck\"></i>&nbsp;訂購流程</a></li>
                                <li><a href=\"#0\" data-toggle=\"modal\" data-target=\"#login_2\"><i class=\"icon-login-2\"></i>&nbsp;登入</a></li>
                                <li><a href=\"https://www.facebook.com/tongcrewsoup/\" target=\"_blank\"><i class=\"icon-facebook-rect-1\"></i>&nbsp;FB 專頁</a>
                            </ul>
                        </div><!-- End main-menu -->
                    </nav>
                </div><!-- End row -->
            </div><!-- End container -->
        </header>
        <!-- End Header =============================================== -->
        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "        
    <!-- Footer ================================================== -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-3\">
                    <h3>付款方式</h3>
                    <p>現金及湯券</p>
                    
                </div>
                <div class=\"col-md-3 col-sm-3\">
                    <h3>關於靚佬湯</h3>
                    <ul>
                        <li><a href=\"about.html\">關於我們</a></li>
                        <li><a href=\"faq.html\">訂購流程</a></li>
                        <li><a href=\"contacts.html\">聯絡我們</a></li>
                        <li><a href=\"#0\" data-toggle=\"modal\" data-target=\"#login_2\">登入</a></li>
                        <li><a href=\"#0\" data-toggle=\"modal\" data-target=\"#register\">登記</a></li>
                        <li><a href=\"#0\">服務條款及細則</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-3\"  id=\"newsletter\">
                    <h3>加入每月快訊</h3>
                    <p>緊貼靚佬湯每月最新湯單及消息</p>
                    <div id=\"message-newsletter_2\"></div>
                    <form method=\"post\" action=\"assets/newsletter.php\" name=\"newsletter_2\" id=\"newsletter_2\">
                        <div class=\"form-group\">
                            <input name=\"email_newsletter_2\" id=\"email_newsletter_2\"  type=\"email\" value=\"\"  placeholder=\"電郵地址\" class=\"form-control\">
                        </div>
                        <input type=\"submit\" value=\"提交\" class=\"btn_1\" id=\"submit-newsletter_2\">
                    </form>
                </div>
                <div class=\"col-md-2 col-sm-3\">
                    <!-- <h3>Settings</h3>
                    <div class=\"styled-select\">
                        <select class=\"form-control\" name=\"lang\" id=\"lang\">
                            <option value=\"English\" selected>English</option>
                            <option value=\"French\">French</option>
                            <option value=\"Spanish\">Spanish</option>
                            <option value=\"Russian\">Russian</option>
                        </select>
                    </div>
                    <div class=\"styled-select\">
                        <select class=\"form-control\" name=\"currency\" id=\"currency\">
                            <option value=\"USD\" selected>USD</option>
                            <option value=\"EUR\">EUR</option>
                            <option value=\"GBP\">GBP</option>
                            <option value=\"RUB\">RUB</option>
                        </select>
                    </div> -->
                </div>
            </div><!-- End row -->
            <!-- <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"social_footer\">
                        <ul>
                            <li><a href=\"#0\"><i class=\"icon-facebook\"></i></a></li>
                            <li><a href=\"#0\"><i class=\"icon-twitter\"></i></a></li>
                            <li><a href=\"#0\"><i class=\"icon-google\"></i></a></li>
                            <li><a href=\"#0\"><i class=\"icon-instagram\"></i></a></li>
                            <li><a href=\"#0\"><i class=\"icon-pinterest\"></i></a></li>
                            <li><a href=\"#0\"><i class=\"icon-vimeo\"></i></a></li>
                            <li><a href=\"#0\"><i class=\"icon-youtube-play\"></i></a></li>
                        </ul>
                        <p>© Quick Food 2015</p>
                    </div>
                </div>
            </div> --><!-- End row -->
        </div><!-- End container -->
        </footer>
        <!-- End Footer =============================================== -->
        <div class=\"layer\"></div><!-- Mobile menu overlay mask -->
        
        <!-- Login modal -->
        <div class=\"modal fade\" id=\"login_2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLogin\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content modal-popup\">
                    <a href=\"#\" class=\"close-link\"><i class=\"icon_close_alt2\"></i></a>
                    <form action=\"#\" class=\"popup-form\" id=\"myLogin\">
                        <div class=\"login_icon\"><i class=\"icon_lock_alt\"></i></div>
                        <input type=\"text\" class=\"form-control form-white\" placeholder=\"電郵地址\">
                        <input type=\"text\" class=\"form-control form-white\" placeholder=\"密碼\">
                        <div class=\"text-left\">
                            <a href=\"#\">忘記密碼？</a>
                        </div>
                        <button type=\"submit\" class=\"btn btn-submit\">登入</button>
                    </form>
                </div>
            </div>
        </div><!-- End modal -->
            
        <!-- Register modal -->
        <div class=\"modal fade\" id=\"register\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myRegister\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content modal-popup\">
                    <a href=\"#\" class=\"close-link\"><i class=\"icon_close_alt2\"></i></a>
                    <form action=\"#\" class=\"popup-form\" id=\"myRegister\">
                        <div class=\"login_icon\"><i class=\"icon_lock_alt\"></i></div>
                        <input type=\"text\" class=\"form-control form-white\" placeholder=\"Name\">
                        <input type=\"text\" class=\"form-control form-white\" placeholder=\"Last Name\">
                        <input type=\"email\" class=\"form-control form-white\" placeholder=\"Email\">
                        <input type=\"text\" class=\"form-control form-white\" placeholder=\"Password\"  id=\"password1\">
                        <input type=\"text\" class=\"form-control form-white\" placeholder=\"Confirm password\"  id=\"password2\">
                        <div id=\"pass-info\" class=\"clearfix\"></div>
                        <div class=\"checkbox-holder text-left\">
                            <div class=\"checkbox\">
                                <input type=\"checkbox\" value=\"accept_2\" id=\"check_2\" name=\"check_2\" />
                                <label for=\"check_2\"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-submit\">Register</button>
                    </form>
                </div>
            </div>
        </div><!-- End Register modal -->
            
        <!-- Search Menu -->
        <div class=\"search-overlay-menu\">
            <span class=\"search-overlay-close\"><i class=\"icon_close\"></i></span>
            <form role=\"search\" id=\"searchform\" method=\"get\">
                <input value=\"\" name=\"q\" type=\"search\" placeholder=\"Search...\" />
                <button type=\"submit\"><i class=\"icon-search-6\"></i>
                </button>
            </form>
        </div>
        <!-- End Search Menu -->
        
        <!-- COMMON SCRIPTS -->
        <script src=\"/js/jquery-2.2.4.min.js\"></script>
        <script src=\"/js/common_scripts_min.js\"></script>
        <script src=\"/js/functions.js\"></script>
        <script src=\"/assets/validate.js\"></script>
        <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vue.js"), "html", null, true);
        echo "\"></script>
        <script src=\"/js/vue-resource.js\"></script>
        <!-- SPECIFIC SCRIPTS -->
        <script  src=\"/js/cat_nav_mobile.js\"></script>
        <script>\$('#cat_nav').mobileMenu();</script>
        <script src=\"/js/theia-sticky-sidebar.js\"></script>
        
        <script>
            \$('#cat_nav a[href^=\"#\"]').on('click', function (e) {
                e.preventDefault();
                var target = this.hash;
                var \$target = \$(target);
                \$('html, body').stop().animate({
                    'scrollTop': \$target.offset().top - 70
                    }, 900, 'swing', function () {
                        window.location.hash = target;
                });
            });
        </script>
        ";
        // line 228
        $this->displayBlock('vuescript', $context, $blocks);
        // line 230
        echo "    </body>
</html>";
        
        $__internal_3407040b69a55b2961fe2b39a9bdda7a3240d8ee285a2b7b839bd6023cb06272->leave($__internal_3407040b69a55b2961fe2b39a9bdda7a3240d8ee285a2b7b839bd6023cb06272_prof);

        
        $__internal_cb6a99f8b260d7f6fa467e531c7e30f76d0ef3e2657b6a760589bd93cba951f9->leave($__internal_cb6a99f8b260d7f6fa467e531c7e30f76d0ef3e2657b6a760589bd93cba951f9_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6c46289ff5e9490398a23317c5095f85839bfec9fcab5a32f460353d4efd3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c46289ff5e9490398a23317c5095f85839bfec9fcab5a32f460353d4efd3c1->enter($__internal_a6c46289ff5e9490398a23317c5095f85839bfec9fcab5a32f460353d4efd3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84ed315a3510a042ae0cf9cef1e50270f9552ea680af2c563f75944c5e4c0e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ed315a3510a042ae0cf9cef1e50270f9552ea680af2c563f75944c5e4c0e2e->enter($__internal_84ed315a3510a042ae0cf9cef1e50270f9552ea680af2c563f75944c5e4c0e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "        ";
        
        $__internal_84ed315a3510a042ae0cf9cef1e50270f9552ea680af2c563f75944c5e4c0e2e->leave($__internal_84ed315a3510a042ae0cf9cef1e50270f9552ea680af2c563f75944c5e4c0e2e_prof);

        
        $__internal_a6c46289ff5e9490398a23317c5095f85839bfec9fcab5a32f460353d4efd3c1->leave($__internal_a6c46289ff5e9490398a23317c5095f85839bfec9fcab5a32f460353d4efd3c1_prof);

    }

    // line 228
    public function block_vuescript($context, array $blocks = array())
    {
        $__internal_6ee27dd6a84766464514eaccd65bfec81993f62e2802feb65a5334caf2794d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee27dd6a84766464514eaccd65bfec81993f62e2802feb65a5334caf2794d42->enter($__internal_6ee27dd6a84766464514eaccd65bfec81993f62e2802feb65a5334caf2794d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vuescript"));

        $__internal_2535b655fd20cf76ae709012776330b2aa9db7e44c199d034fff2e4744e376d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2535b655fd20cf76ae709012776330b2aa9db7e44c199d034fff2e4744e376d8->enter($__internal_2535b655fd20cf76ae709012776330b2aa9db7e44c199d034fff2e4744e376d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vuescript"));

        // line 229
        echo "        ";
        
        $__internal_2535b655fd20cf76ae709012776330b2aa9db7e44c199d034fff2e4744e376d8->leave($__internal_2535b655fd20cf76ae709012776330b2aa9db7e44c199d034fff2e4744e376d8_prof);

        
        $__internal_6ee27dd6a84766464514eaccd65bfec81993f62e2802feb65a5334caf2794d42->leave($__internal_6ee27dd6a84766464514eaccd65bfec81993f62e2802feb65a5334caf2794d42_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 229,  293 => 228,  283 => 76,  274 => 75,  263 => 230,  261 => 228,  239 => 209,  105 => 77,  103 => 75,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 9]><html class=\"ie ie9\"> <![endif]-->
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"keywords\" content=\"pizza, delivery food, fast food, sushi, take away, chinese, italian food\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Ansonika\">
        <title>QuickFood - Quality delivery or take away food</title>
        <!-- Favicons-->
        <link rel=\"shortcut icon\" href=\"/img/favicon.ico\" type=\"image/x-icon\">
        <link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"/img/apple-touch-icon-57x57-precomposed.png\">
        <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"/img/apple-touch-icon-72x72-precomposed.png\">
        <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\" href=\"/img/apple-touch-icon-114x114-precomposed.png\">
        <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\" href=\"/img/apple-touch-icon-144x144-precomposed.png\">
        
        <!-- GOOGLE WEB FONT -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
        <!-- BASE CSS -->
        <link href=\"/css/base.css\" rel=\"stylesheet\">
        
        <!-- Radio and check inputs -->
        <link href=\"/css/skins/square/grey.css\" rel=\"stylesheet\">
        <!--[if lt IE 9]>
        <script src=\"/js/html5shiv.min.js\"></script>
        <script src=\"/js/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lte IE 8]>
        <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a>.</p>
        <![endif]-->
        <div id=\"preloader\">
            <div class=\"sk-spinner sk-spinner-wave\" id=\"status\">
                <div class=\"sk-rect1\"></div>
                <div class=\"sk-rect2\"></div>
                <div class=\"sk-rect3\"></div>
                <div class=\"sk-rect4\"></div>
                <div class=\"sk-rect5\"></div>
            </div>
        </div><!-- End Preload -->
        <!-- Header ================================================== -->
        <header>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col--md-4 col-sm-4 col-xs-4\">
                        <a href=\"index.html\" id=\"logo\">
                            <img src=\"/img/tongcrew_logo.png\" height=\"23\" alt=\"\" data-retina=\"true\" class=\"hidden-xs\">
                            <img src=\"/img/tongcrew_logo.png\" height=\"23\" alt=\"\" data-retina=\"true\" class=\"hidden-lg hidden-md hidden-sm\">
                        </a>
                    </div>
                    <nav class=\"col--md-8 col-sm-8 col-xs-8\">
                        <a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu mobile</span></a>
                        <div class=\"main-menu\">
                            <div id=\"header_menu\">
                                <img src=\"/img/logo.png\" width=\"190\" height=\"23\" alt=\"\" data-retina=\"true\">
                            </div>
                            <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_close\"></i></a>
                            <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_close\"></i></a>
                            <ul>
                                
                                <li><a href=\"about.html\"><i class=\"icon-star\"></i>&nbsp;本月湯單</a></li>
                                <li><a href=\"faq.html\"><i class=\"icon-truck\"></i>&nbsp;訂購流程</a></li>
                                <li><a href=\"#0\" data-toggle=\"modal\" data-target=\"#login_2\"><i class=\"icon-login-2\"></i>&nbsp;登入</a></li>
                                <li><a href=\"https://www.facebook.com/tongcrewsoup/\" target=\"_blank\"><i class=\"icon-facebook-rect-1\"></i>&nbsp;FB 專頁</a>
                            </ul>
                        </div><!-- End main-menu -->
                    </nav>
                </div><!-- End row -->
            </div><!-- End container -->
        </header>
        <!-- End Header =============================================== -->
        {% block body %}
        {% endblock %}
        
    <!-- Footer ================================================== -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-3\">
                    <h3>付款方式</h3>
                    <p>現金及湯券</p>
                    
                </div>
                <div class=\"col-md-3 col-sm-3\">
                    <h3>關於靚佬湯</h3>
                    <ul>
                        <li><a href=\"about.html\">關於我們</a></li>
                        <li><a href=\"faq.html\">訂購流程</a></li>
                        <li><a href=\"contacts.html\">聯絡我們</a></li>
                        <li><a href=\"#0\" data-toggle=\"modal\" data-target=\"#login_2\">登入</a></li>
                        <li><a href=\"#0\" data-toggle=\"modal\" data-target=\"#register\">登記</a></li>
                        <li><a href=\"#0\">服務條款及細則</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-3\"  id=\"newsletter\">
                    <h3>加入每月快訊</h3>
                    <p>緊貼靚佬湯每月最新湯單及消息</p>
                    <div id=\"message-newsletter_2\"></div>
                    <form method=\"post\" action=\"assets/newsletter.php\" name=\"newsletter_2\" id=\"newsletter_2\">
                        <div class=\"form-group\">
                            <input name=\"email_newsletter_2\" id=\"email_newsletter_2\"  type=\"email\" value=\"\"  placeholder=\"電郵地址\" class=\"form-control\">
                        </div>
                        <input type=\"submit\" value=\"提交\" class=\"btn_1\" id=\"submit-newsletter_2\">
                    </form>
                </div>
                <div class=\"col-md-2 col-sm-3\">
                    <!-- <h3>Settings</h3>
                    <div class=\"styled-select\">
                        <select class=\"form-control\" name=\"lang\" id=\"lang\">
                            <option value=\"English\" selected>English</option>
                            <option value=\"French\">French</option>
                            <option value=\"Spanish\">Spanish</option>
                            <option value=\"Russian\">Russian</option>
                        </select>
                    </div>
                    <div class=\"styled-select\">
                        <select class=\"form-control\" name=\"currency\" id=\"currency\">
                            <option value=\"USD\" selected>USD</option>
                            <option value=\"EUR\">EUR</option>
                            <option value=\"GBP\">GBP</option>
                            <option value=\"RUB\">RUB</option>
                        </select>
                    </div> -->
                </div>
            </div><!-- End row -->
            <!-- <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"social_footer\">
                        <ul>
                            <li><a href=\"#0\"><i class=\"icon-facebook\"></i></a></li>
                            <li><a href=\"#0\"><i class=\"icon-twitter\"></i></a></li>
                            <li><a href=\"#0\"><i class=\"icon-google\"></i></a></li>
                            <li><a href=\"#0\"><i class=\"icon-instagram\"></i></a></li>
                            <li><a href=\"#0\"><i class=\"icon-pinterest\"></i></a></li>
                            <li><a href=\"#0\"><i class=\"icon-vimeo\"></i></a></li>
                            <li><a href=\"#0\"><i class=\"icon-youtube-play\"></i></a></li>
                        </ul>
                        <p>© Quick Food 2015</p>
                    </div>
                </div>
            </div> --><!-- End row -->
        </div><!-- End container -->
        </footer>
        <!-- End Footer =============================================== -->
        <div class=\"layer\"></div><!-- Mobile menu overlay mask -->
        
        <!-- Login modal -->
        <div class=\"modal fade\" id=\"login_2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLogin\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content modal-popup\">
                    <a href=\"#\" class=\"close-link\"><i class=\"icon_close_alt2\"></i></a>
                    <form action=\"#\" class=\"popup-form\" id=\"myLogin\">
                        <div class=\"login_icon\"><i class=\"icon_lock_alt\"></i></div>
                        <input type=\"text\" class=\"form-control form-white\" placeholder=\"電郵地址\">
                        <input type=\"text\" class=\"form-control form-white\" placeholder=\"密碼\">
                        <div class=\"text-left\">
                            <a href=\"#\">忘記密碼？</a>
                        </div>
                        <button type=\"submit\" class=\"btn btn-submit\">登入</button>
                    </form>
                </div>
            </div>
        </div><!-- End modal -->
            
        <!-- Register modal -->
        <div class=\"modal fade\" id=\"register\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myRegister\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content modal-popup\">
                    <a href=\"#\" class=\"close-link\"><i class=\"icon_close_alt2\"></i></a>
                    <form action=\"#\" class=\"popup-form\" id=\"myRegister\">
                        <div class=\"login_icon\"><i class=\"icon_lock_alt\"></i></div>
                        <input type=\"text\" class=\"form-control form-white\" placeholder=\"Name\">
                        <input type=\"text\" class=\"form-control form-white\" placeholder=\"Last Name\">
                        <input type=\"email\" class=\"form-control form-white\" placeholder=\"Email\">
                        <input type=\"text\" class=\"form-control form-white\" placeholder=\"Password\"  id=\"password1\">
                        <input type=\"text\" class=\"form-control form-white\" placeholder=\"Confirm password\"  id=\"password2\">
                        <div id=\"pass-info\" class=\"clearfix\"></div>
                        <div class=\"checkbox-holder text-left\">
                            <div class=\"checkbox\">
                                <input type=\"checkbox\" value=\"accept_2\" id=\"check_2\" name=\"check_2\" />
                                <label for=\"check_2\"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-submit\">Register</button>
                    </form>
                </div>
            </div>
        </div><!-- End Register modal -->
            
        <!-- Search Menu -->
        <div class=\"search-overlay-menu\">
            <span class=\"search-overlay-close\"><i class=\"icon_close\"></i></span>
            <form role=\"search\" id=\"searchform\" method=\"get\">
                <input value=\"\" name=\"q\" type=\"search\" placeholder=\"Search...\" />
                <button type=\"submit\"><i class=\"icon-search-6\"></i>
                </button>
            </form>
        </div>
        <!-- End Search Menu -->
        
        <!-- COMMON SCRIPTS -->
        <script src=\"/js/jquery-2.2.4.min.js\"></script>
        <script src=\"/js/common_scripts_min.js\"></script>
        <script src=\"/js/functions.js\"></script>
        <script src=\"/assets/validate.js\"></script>
        <script src=\"{{ asset('js/vue.js') }}\"></script>
        <script src=\"/js/vue-resource.js\"></script>
        <!-- SPECIFIC SCRIPTS -->
        <script  src=\"/js/cat_nav_mobile.js\"></script>
        <script>\$('#cat_nav').mobileMenu();</script>
        <script src=\"/js/theia-sticky-sidebar.js\"></script>
        
        <script>
            \$('#cat_nav a[href^=\"#\"]').on('click', function (e) {
                e.preventDefault();
                var target = this.hash;
                var \$target = \$(target);
                \$('html, body').stop().animate({
                    'scrollTop': \$target.offset().top - 70
                    }, 900, 'swing', function () {
                        window.location.hash = target;
                });
            });
        </script>
        {% block vuescript %}
        {% endblock %}
    </body>
</html>", "base.html.twig", "/Users/joseph.lee/dev/tongcrew/app/Resources/views/base.html.twig");
    }
}
