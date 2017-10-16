<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_edaf73c63603964fb658c57af8131b0c2cdc9036093ba63fa1e26ededaf215dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca3ebd6428590af4622ebff17717b1509def57db35eeca570b35b313cb3a2046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3ebd6428590af4622ebff17717b1509def57db35eeca570b35b313cb3a2046->enter($__internal_ca3ebd6428590af4622ebff17717b1509def57db35eeca570b35b313cb3a2046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_30dd43905359f364466c1a1ae0c0f3914496e765ae590fecad19bcbe825a8e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30dd43905359f364466c1a1ae0c0f3914496e765ae590fecad19bcbe825a8e22->enter($__internal_30dd43905359f364466c1a1ae0c0f3914496e765ae590fecad19bcbe825a8e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca3ebd6428590af4622ebff17717b1509def57db35eeca570b35b313cb3a2046->leave($__internal_ca3ebd6428590af4622ebff17717b1509def57db35eeca570b35b313cb3a2046_prof);

        
        $__internal_30dd43905359f364466c1a1ae0c0f3914496e765ae590fecad19bcbe825a8e22->leave($__internal_30dd43905359f364466c1a1ae0c0f3914496e765ae590fecad19bcbe825a8e22_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50fda9790c687cfdc821b1cc600db8b10f7feb76016c714be8a2638a7bade591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fda9790c687cfdc821b1cc600db8b10f7feb76016c714be8a2638a7bade591->enter($__internal_50fda9790c687cfdc821b1cc600db8b10f7feb76016c714be8a2638a7bade591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a4b84ec2ba67264f2df5bf5d1895467e001e07edc19b5f0c36cd2c9c776c2cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b84ec2ba67264f2df5bf5d1895467e001e07edc19b5f0c36cd2c9c776c2cdb->enter($__internal_a4b84ec2ba67264f2df5bf5d1895467e001e07edc19b5f0c36cd2c9c776c2cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a4b84ec2ba67264f2df5bf5d1895467e001e07edc19b5f0c36cd2c9c776c2cdb->leave($__internal_a4b84ec2ba67264f2df5bf5d1895467e001e07edc19b5f0c36cd2c9c776c2cdb_prof);

        
        $__internal_50fda9790c687cfdc821b1cc600db8b10f7feb76016c714be8a2638a7bade591->leave($__internal_50fda9790c687cfdc821b1cc600db8b10f7feb76016c714be8a2638a7bade591_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/joseph.lee/dev/tongcrew/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
