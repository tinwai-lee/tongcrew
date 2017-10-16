<?php

/* AppBundle:Shop:cart.html.twig */
class __TwigTemplate_33c7de0f7b5a54f05529b1494519551602d75cbe3c513f5f56892960ed4c8e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Shop:cart.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97914469fe2ce467f88c24f5586815a07ad5871ddd45c31346540aead970e47e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97914469fe2ce467f88c24f5586815a07ad5871ddd45c31346540aead970e47e->enter($__internal_97914469fe2ce467f88c24f5586815a07ad5871ddd45c31346540aead970e47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Shop:cart.html.twig"));

        $__internal_f0d7f784e41eb17b970303d2f92ff2695951538519bdb5b9e4dfbfef2411310f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d7f784e41eb17b970303d2f92ff2695951538519bdb5b9e4dfbfef2411310f->enter($__internal_f0d7f784e41eb17b970303d2f92ff2695951538519bdb5b9e4dfbfef2411310f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Shop:cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97914469fe2ce467f88c24f5586815a07ad5871ddd45c31346540aead970e47e->leave($__internal_97914469fe2ce467f88c24f5586815a07ad5871ddd45c31346540aead970e47e_prof);

        
        $__internal_f0d7f784e41eb17b970303d2f92ff2695951538519bdb5b9e4dfbfef2411310f->leave($__internal_f0d7f784e41eb17b970303d2f92ff2695951538519bdb5b9e4dfbfef2411310f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e435a5eddacf4a9a592d35290900c01c86877b39d9fa17d4212560fabbde4807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e435a5eddacf4a9a592d35290900c01c86877b39d9fa17d4212560fabbde4807->enter($__internal_e435a5eddacf4a9a592d35290900c01c86877b39d9fa17d4212560fabbde4807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55f32b3de8870a00617bb98a798fcca6843a30c75c607164f8c6647432246b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f32b3de8870a00617bb98a798fcca6843a30c75c607164f8c6647432246b58->enter($__internal_55f32b3de8870a00617bb98a798fcca6843a30c75c607164f8c6647432246b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div id=\"app\">
\t<!-- SubHeader =============================================== -->
\t<section class=\"parallax-window\" id=\"short\" data-parallax=\"scroll\" data-image-src=\"/img/banner.jpg\" data-natural-width=\"1366\" data-natural-height=\"666\">
\t\t<div id=\"subheader\">
\t\t\t<div id=\"sub_content\">
\t\t\t\t<h1>訂單結帳</h1>
\t\t\t\t<!-- <div class=\"bs-wizard\">
\t\t\t\t\t<div class=\"col-xs-4 bs-wizard-step active\">
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><strong>1.</strong> 送貨資料</div>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t\t<a href=\"#0\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-4 bs-wizard-step disabled\">
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><strong>2.</strong> Payment</div>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t\t<a href=\"cart_2.html\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-4 bs-wizard-step disabled\">
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><strong>3.</strong> Finish!</div>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t\t<a href=\"cart_3.html\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>--><!-- End bs-wizard -->
\t\t\t</div><!-- End sub_content -->
\t\t</div><!-- End subheader -->
\t</section><!-- End section -->
\t<!-- End SubHeader ============================================ -->
\t<!-- Content ================================================== -->
\t<div class=\"container margin_60_35\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">

\t\t\t\t<div class=\"box_style_2 hidden-xs info\">
\t\t\t\t\t<h4 class=\"nomargin_top\">送貨流程 <i class=\"icon_clock_alt pull-right\"></i></h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t前一天晚上八點前及當天早上十點前下單，送貨時間爲十二點至兩點。
\t\t\t\t\t</p>
\t\t\t\t\t<hr>
\t\t\t\t\t<h4>付款方法 <i class=\"icon-money pull-right\"></i></h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t暫時只接受現金到付。
\t\t\t\t\t</p>
\t\t\t\t</div><!-- End box_style_1 -->

\t\t\t\t<div class=\"box_style_2 hidden-xs\" id=\"help\">
\t\t\t\t    <img src=\"/img/whatsapp.png\" style=\"width: 60px\" />
                    <h4>聯絡客服</h4>
                    <a href=\"tel://56891075\" class=\"phone\">56891075</a>
                    <small>服務時間：9.00am - 3.30pm</small>
\t\t\t\t</div>

\t\t\t</div><!-- End col-md-3 -->

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"box_style_2\" id=\"order_process\">
\t\t\t\t\t<h2 class=\"inner\">送貨資料</h2>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>姓名</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"姓名\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>手提電話號碼</label>
\t\t\t\t\t\t<input type=\"text\" id=\"mobile\" name=\"mobile\" class=\"form-control\" placeholder=\"手提電話號碼\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label>送貨地區</label>
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"district\" id=\"district\">
\t\t\t\t\t\t\t\t<option value=\"kowloon-bay\" selected>九龍灣</option>
\t\t\t\t\t\t\t\t<option value=\"kwun-tong\">觀塘</option>
\t\t\t\t\t\t\t\t<option value=\"central\">中環</option>
\t\t\t\t\t\t\t\t<option value=\"san-po-kong\">新䈬崗</option>
\t\t\t\t\t\t\t\t<option value=\"quarry-bay\">鰂魚涌</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<label>送貨街道</label>
\t\t\t\t\t\t<input type=\"text\" id=\"address\" name=\"address\" class=\"form-control\" placeholder=\"送貨街道\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>送貨大廈</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"building\" name=\"building\" class=\"form-control\" placeholder=\"送貨大廈\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>送貨樓層</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"floor\" name=\"floor\" class=\"form-control\" placeholder=\"送貨樓層\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>送貨單位</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"room\" name=\"room\" class=\"form-control\" placeholder=\"送貨單位\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- End box_style_1 -->
\t\t\t</div><!-- End col-md-6 -->
\t\t\t\t
\t\t\t<div class=\"col-md-3\" id=\"sidebar\">
\t\t\t\t<div class=\"theiaStickySidebar\">
\t\t\t\t\t<div id=\"cart_box\">
\t\t\t\t\t\t<h3>您的訂單 <i class=\"icon_cart_alt pull-right\"></i></h3>
\t\t\t\t\t\t<table class=\"table table_summary\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? $this->getContext($context, "orders")));
        foreach ($context['_seq'] as $context["id"] => $context["order"]) {
            // line 117
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "quantity", array(), "array"), "html", null, true);
            echo "<i class=\"icon-cancel\"></i></strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "name", array(), "array"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<strong class=\"pull-right\">\$";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "price", array(), "array"), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"row\" id=\"options_2\" style=\"padding-left: 20px;\">
\t\t\t\t\t\t\t<p>使用優惠券 <span id=\"times\"><i class=\"icon-cancel\"></i></span> ";
        // line 130
        echo twig_escape_filter($this->env, ($context["usedCoupons"] ?? $this->getContext($context, "usedCoupons")), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div><!-- Edn options 2 -->
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<table class=\"table table_summary\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t小計 <span class=\"pull-right\">\$";
        // line 137
        echo twig_escape_filter($this->env, ($context["subtotal"] ?? $this->getContext($context, "subtotal")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"total\">
\t\t\t\t\t\t\t\t\t\t總數 <span class=\"pull-right\">\$";
        // line 142
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<a class=\"btn_full\" href=\"javascript:void(0)\" onclick=\"window.alert('done')\">完成結帳</a>
\t\t\t\t\t\t<a class=\"btn_full_outline\" href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "\"><i class=\"icon-right\"></i> 更改訂單</a>
\t\t\t\t\t</div><!-- End cart_box -->
\t\t\t\t</div><!-- End theiaStickySidebar -->
\t\t\t</div><!-- End col-md-3 -->
\t\t\t\t\t\t\t
\t\t</div><!-- End row -->
\t</div><!-- End container -->
<!-- End Content =============================================== -->
</div>\t\t\t\t\t\t\t\t\t
";
        
        $__internal_55f32b3de8870a00617bb98a798fcca6843a30c75c607164f8c6647432246b58->leave($__internal_55f32b3de8870a00617bb98a798fcca6843a30c75c607164f8c6647432246b58_prof);

        
        $__internal_e435a5eddacf4a9a592d35290900c01c86877b39d9fa17d4212560fabbde4807->leave($__internal_e435a5eddacf4a9a592d35290900c01c86877b39d9fa17d4212560fabbde4807_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Shop:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 149,  214 => 142,  206 => 137,  196 => 130,  190 => 126,  180 => 122,  172 => 119,  168 => 117,  164 => 116,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div id=\"app\">
\t<!-- SubHeader =============================================== -->
\t<section class=\"parallax-window\" id=\"short\" data-parallax=\"scroll\" data-image-src=\"/img/banner.jpg\" data-natural-width=\"1366\" data-natural-height=\"666\">
\t\t<div id=\"subheader\">
\t\t\t<div id=\"sub_content\">
\t\t\t\t<h1>訂單結帳</h1>
\t\t\t\t<!-- <div class=\"bs-wizard\">
\t\t\t\t\t<div class=\"col-xs-4 bs-wizard-step active\">
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><strong>1.</strong> 送貨資料</div>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t\t<a href=\"#0\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-4 bs-wizard-step disabled\">
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><strong>2.</strong> Payment</div>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t\t<a href=\"cart_2.html\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-4 bs-wizard-step disabled\">
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><strong>3.</strong> Finish!</div>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t\t<a href=\"cart_3.html\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>--><!-- End bs-wizard -->
\t\t\t</div><!-- End sub_content -->
\t\t</div><!-- End subheader -->
\t</section><!-- End section -->
\t<!-- End SubHeader ============================================ -->
\t<!-- Content ================================================== -->
\t<div class=\"container margin_60_35\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">

\t\t\t\t<div class=\"box_style_2 hidden-xs info\">
\t\t\t\t\t<h4 class=\"nomargin_top\">送貨流程 <i class=\"icon_clock_alt pull-right\"></i></h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t前一天晚上八點前及當天早上十點前下單，送貨時間爲十二點至兩點。
\t\t\t\t\t</p>
\t\t\t\t\t<hr>
\t\t\t\t\t<h4>付款方法 <i class=\"icon-money pull-right\"></i></h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t暫時只接受現金到付。
\t\t\t\t\t</p>
\t\t\t\t</div><!-- End box_style_1 -->

\t\t\t\t<div class=\"box_style_2 hidden-xs\" id=\"help\">
\t\t\t\t    <img src=\"/img/whatsapp.png\" style=\"width: 60px\" />
                    <h4>聯絡客服</h4>
                    <a href=\"tel://56891075\" class=\"phone\">56891075</a>
                    <small>服務時間：9.00am - 3.30pm</small>
\t\t\t\t</div>

\t\t\t</div><!-- End col-md-3 -->

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"box_style_2\" id=\"order_process\">
\t\t\t\t\t<h2 class=\"inner\">送貨資料</h2>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>姓名</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"姓名\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>手提電話號碼</label>
\t\t\t\t\t\t<input type=\"text\" id=\"mobile\" name=\"mobile\" class=\"form-control\" placeholder=\"手提電話號碼\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label>送貨地區</label>
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"district\" id=\"district\">
\t\t\t\t\t\t\t\t<option value=\"kowloon-bay\" selected>九龍灣</option>
\t\t\t\t\t\t\t\t<option value=\"kwun-tong\">觀塘</option>
\t\t\t\t\t\t\t\t<option value=\"central\">中環</option>
\t\t\t\t\t\t\t\t<option value=\"san-po-kong\">新䈬崗</option>
\t\t\t\t\t\t\t\t<option value=\"quarry-bay\">鰂魚涌</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<label>送貨街道</label>
\t\t\t\t\t\t<input type=\"text\" id=\"address\" name=\"address\" class=\"form-control\" placeholder=\"送貨街道\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>送貨大廈</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"building\" name=\"building\" class=\"form-control\" placeholder=\"送貨大廈\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>送貨樓層</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"floor\" name=\"floor\" class=\"form-control\" placeholder=\"送貨樓層\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>送貨單位</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"room\" name=\"room\" class=\"form-control\" placeholder=\"送貨單位\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- End box_style_1 -->
\t\t\t</div><!-- End col-md-6 -->
\t\t\t\t
\t\t\t<div class=\"col-md-3\" id=\"sidebar\">
\t\t\t\t<div class=\"theiaStickySidebar\">
\t\t\t\t\t<div id=\"cart_box\">
\t\t\t\t\t\t<h3>您的訂單 <i class=\"icon_cart_alt pull-right\"></i></h3>
\t\t\t\t\t\t<table class=\"table table_summary\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for id, order in orders %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<strong>{{ order['quantity'] }}<i class=\"icon-cancel\"></i></strong> {{ order['name'] }}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<strong class=\"pull-right\">\${{ order['price'] }}</strong>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"row\" id=\"options_2\" style=\"padding-left: 20px;\">
\t\t\t\t\t\t\t<p>使用優惠券 <span id=\"times\"><i class=\"icon-cancel\"></i></span> {{ usedCoupons }}</p>
\t\t\t\t\t\t</div><!-- Edn options 2 -->
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<table class=\"table table_summary\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t小計 <span class=\"pull-right\">\${{ subtotal }}</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"total\">
\t\t\t\t\t\t\t\t\t\t總數 <span class=\"pull-right\">\${{ total }}</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<a class=\"btn_full\" href=\"javascript:void(0)\" onclick=\"window.alert('done')\">完成結帳</a>
\t\t\t\t\t\t<a class=\"btn_full_outline\" href=\"{{ url('homepage') }}\"><i class=\"icon-right\"></i> 更改訂單</a>
\t\t\t\t\t</div><!-- End cart_box -->
\t\t\t\t</div><!-- End theiaStickySidebar -->
\t\t\t</div><!-- End col-md-3 -->
\t\t\t\t\t\t\t
\t\t</div><!-- End row -->
\t</div><!-- End container -->
<!-- End Content =============================================== -->
</div>\t\t\t\t\t\t\t\t\t
{% endblock %}

", "AppBundle:Shop:cart.html.twig", "/Users/joseph.lee/dev/tongcrew/src/AppBundle/Resources/views/Shop/cart.html.twig");
    }
}
