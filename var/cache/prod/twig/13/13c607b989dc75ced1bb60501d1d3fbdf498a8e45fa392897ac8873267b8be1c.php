<?php

/* AppBundle:shop:index.html.twig */
class __TwigTemplate_64e497f27a51bba8d4fdb8de14c3f2dd157afaceb6efcca27603625a9882d821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:shop:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'vuescript' => array($this, 'block_vuescript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"app\">
\t\t<!-- SubHeader =============================================== -->
        <section class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/banner.jpg\" data-natural-width=\"1366\" data-natural-height=\"666\">
            <div id=\"subheader\">
                <div id=\"sub_content\">
                    <div id=\"thumb\"><img src=\"img/logo_full.png\" alt=\"\"></div>
                    
                    <h2 style=\"color: #fff\">原味靚湯，自家製作</h2>
                    <div><i class=\"icon_pin\"></i> <strong>送貨地區：</strong> 九龍灣</div>
                    <div><i class=\"icon_clock\"></i> <strong>送貨時間：</strong> 12:00 ~ 13:30</div>
                </div><!-- End sub_content -->
            </div><!-- End subheader -->
        </section><!-- End section -->
        <!-- End SubHeader ============================================ -->
        
        <!-- Content ================================================== -->
        <div class=\"container margin_60_35\">
            <div class=\"row\">
                
                <div class=\"col-md-3\">
                    <div class=\"box_style_2 hidden-xs\" id=\"help\">
                        <img src=\"img/whatsapp.png\" style=\"width: 60px\" />
                        <h4>聯絡客服</h4>
                        <a href=\"tel://56891075\" class=\"phone\">56891075</a>
                        <small>服務時間：9.00am - 3.30pm</small>
                    </div>
                </div><!-- End col-md-3 -->
                    
                <div class=\"col-md-6\">
                    <div class=\"box_style_2\" id=\"main_menu\">
                        <h2 class=\"inner\">餐牌</h2>
                        <h3 class=\"nomargin_top\" id=\"starters\">是日靚湯</h3>
                        <p>
                            每月均有提供不同的是日靚湯，詳情請留意靚佬湯FB專頁。
                        </p>
                        <table class=\"table table-striped cart-list\">
                            <thead>
                                <tr>
                                    <th>
                                        單品
                                    </th>
                                    <th>
                                        價錢
                                    </th>
                                    <th>
                                        落單
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for=\"soup in soups\">
                                    <td class=\"description\">
\t                                    <figure class=\"thumb_menu_list\"><img src=\"img/menu-thumb-1.jpg\" alt=\"thumb\"></figure>
\t                                    <h5>[[ soup['name'] ]]</h5>
\t                                    <p>
\t                                        [[ soup['description'] ]]
\t                                    </p>
\t                                </td>
\t                                <td>
\t                                    <strong>\$ [[ soup['price'] ]]</strong>
\t                                </td>
\t                                <td>
\t                                    <a href=\"javascript:void(0)\" v-on:click=\"updateOrder(soup['id'], 'add')\"><i class=\"icon_plus_alt2 add_btn\"></i></a>
\t                                </td>
\t                            </tr>
\t                        </tbody>
                    \t</table>
                    <hr>
                    <h3 id=\"main_courses\">湯券</h3>
                    <p>
                        - 優惠券\$350/10張，買20張送1張，即\$700/21張。<br>
                        - 每張優惠券可換領\$38之湯水一盅，不可換領其他產品。<br>
                        - 優惠券不能兌換現金，不可與其他優惠一同使用。<br>
                    </p>
                    <table class=\"table table-striped cart-list \">
                        <thead>
                            <tr>
                                <th>
                                    單品
                                </th>
                                <th>
                                    價格
                                </th>
                                <th>
                                    下單
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for=\"coupon in coupons\">
                                <td class=\"description\">
                                    <figure class=\"thumb_menu_list\"><img src=\"img/menu-thumb-1.jpg\" alt=\"thumb\"></figure>
                                    <h5>[[ coupon['name'] ]]</h5>
                                    <p>
                                        [[ coupon['description'] ]]
                                    </p>
                                </td>
                                <td>
                                    <strong>\$ [[ coupon['price'] ]]</strong>
                                </td>
                                <td>
                                    <a href=\"javascript:void(0)\" v-on:click=\"updateOrder(coupon['id'], 'add')\"><i class=\"icon_plus_alt2 add_btn\"></i></a>
                                </td>
                            </tr>\t
\t                    </tbody>
\t                </table>
\t            </div><!-- End box_style_1 -->
\t        </div><!-- End col-md-6 -->
                
        <div class=\"col-md-3\" id=\"sidebar\">
            <div class=\"theiaStickySidebar\">
                <div id=\"cart_box\">
                    <h3>您的訂單 <i class=\"icon_cart_alt pull-right\"></i></h3>
                    <div class=\"orders_wrapper\" v-show=\"showList\">
                    \t<table class=\"table table_summary\" >
\t                        <tbody>
\t                            <tr v-for=\"(quantity, id) in orders\" v-if=\"id != 0 && quantity > 0\">
\t\t\t\t\t\t\t\t\t<td>
\t                                    <a href=\"javascript:void(0)\" class=\"remove_item\" v-on:click=\"updateOrder(id, 'remove')\"><i class=\"icon_minus_alt\"></i></a> <strong>[[ quantity ]]<i class=\"icon-cancel\"></i></strong>[[ products[id]['name'] ]]
\t                                </td>
\t                                <td>
\t                                    <strong class=\"pull-right\">\$[[ products[id]['price'] ]]</strong>
\t                                </td>
\t                            </tr>
\t                        </tbody>
\t                    </table>
\t                    <hr>
\t                    <div id=\"coupons\" v-show=\"regularSoups > 0\">
\t\t\t\t\t\t\t<div id=\"use_coupon\" >使用優惠券 <span id=\"times\"><i class=\"icon-cancel\"></i></span> [[ usedCoupons ]]</div>
\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"remove_item\" v-show=\"usedCoupons > 0\" v-on:click=\"updateCouponUsage('remove')\"><i class=\"icon_minus_alt\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"add_item\" v-show=\"usedCoupons < regularSoups\" v-on:click=\"updateCouponUsage('add')\"><i class=\"icon_plus_alt\"></i></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t                    </div>
\t                    
\t                    <table class=\"table table_summary\">
\t                        <tbody>
\t                        \t<tr>
\t                        \t\t<td class=\"subtotal\">
\t                                    小計：<span class=\"pull-right\">\$[[ subtotal ]]</span>
\t                                </td>
\t                            </tr>
\t                            <tr>
\t\t\t\t\t\t\t\t\t<td class=\"total\">
\t                                    總數：<span class=\"pull-right\">\$[[ total ]]</span>
\t                                </td>
\t                            </tr>
\t                        </tbody>
\t                    </table>
\t                    
\t                    <hr>
\t                    <a class=\"btn_full\" href=\"cart.html\">現在結帳</a>
                    </div>
                    <div v-show=\"!showList\">
                    \t<p>訂單未有任何單品</p>
                    </div>
                </div><!-- End cart_box -->
            </div><!-- End theiaStickySidebar -->
        </div><!-- End col-md-3 -->
                    
    </div><!-- End row -->
    </div><!-- End container -->
    <!-- End Content =============================================== -->
</div>
";
    }

    // line 172
    public function block_vuescript($context, array $blocks = array())
    {
        // line 173
        echo "<script>
\tvar app = new Vue({
        delimiters: ['[[', ']]'],
        el: '#app',
        data: {
        \tsoups:";
        // line 178
        echo twig_jsonencode_filter(($context["soups"] ?? null));
        echo ",
        \tcoupons: ";
        // line 179
        echo twig_jsonencode_filter(($context["coupons"] ?? null));
        echo ",
        \tproducts: ";
        // line 180
        echo twig_jsonencode_filter(($context["products"] ?? null));
        echo ",
        \torders: [],
        \tshowList: false,
        \tsubtotal: 0,
        \ttotal: 0,
        \tusedCoupons: 0,
        \tregularSoups: 0
    \t},
    \tmethods: {
    \t\tupdateOrder: function(id, action){
    \t\t\tif (action == 'add'){
    \t\t\t\tif (typeof this.orders[id] == 'undefined'){
    \t\t\t\t\tVue.set(app.orders, id, 1);
    \t\t\t\t\t// app.orders[id] = 1;
\t    \t\t\t} else {
\t    \t\t\t\tVue.set(app.orders, id, app.orders[id] + 1);
\t    \t\t\t}
\t    \t\t\tif (!this.showList) this.showList = true;
    \t\t\t} else {
    \t\t\t\tVue.set(app.orders, id, app.orders[id] - 1);

    \t\t\t\tvar orderHasItems = false;
    \t\t\t\tfor (var k in this.products){
    \t\t\t\t\tif (typeof this.orders[k] != 'undefined' && this.orders[k] > 0) orderHasItems = true
    \t\t\t\t}
    \t\t\t\tif (!orderHasItems) {
    \t\t\t\t\tthis.orders = [];
    \t\t\t\t\tthis.showList = false;
    \t\t\t\t}
    \t\t\t}

    \t\t\tthis.updateTotal();
    \t\t},
    \t\tupdateCouponUsage: function(action){
    \t\t\tvar toUpdate = false;
    \t\t\tif (action == 'add'){
    \t\t\t\tif (this.usedCoupons < this.regularSoups) {
    \t\t\t\t\tthis.usedCoupons++;
    \t\t\t\t\ttoUpdate = true;
    \t\t\t\t}
    \t\t\t} else {
    \t\t\t\tif (this.usedCoupons > 0){
    \t\t\t\t\tthis.usedCoupons--;
    \t\t\t\t\ttoUpdate = true;
    \t\t\t\t}
    \t\t\t}
    \t\t\tif (toUpdate) this.updateTotal();
    \t\t},
    \t\tupdateTotal: function(){
    \t\t\tthis.subtotal = 0;
    \t\t\tthis.total = 0;
    \t\t\tthis.regularSoups = 0;
    \t\t\tfor (var i in this.orders){
    \t\t\t\tthis.subtotal += this.products[i]['price'] * this.orders[i];
    \t\t\t\tif (this.products[i]['price'] == 38){
    \t\t\t\t\tthis.regularSoups+=this.orders[i];
    \t\t\t\t}
    \t\t\t}
    \t\t\tthis.total = this.subtotal - (this.usedCoupons * 38);
    \t\t}
    \t}
    });
</script>
<script>
    \$('#sidebar').theiaStickySidebar({
        additionalMarginTop: 80
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:shop:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 180,  216 => 179,  212 => 178,  205 => 173,  202 => 172,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:shop:index.html.twig", "/Users/joseph.lee/dev/tongcrew/src/AppBundle/Resources/views/shop/index.html.twig");
    }
}
