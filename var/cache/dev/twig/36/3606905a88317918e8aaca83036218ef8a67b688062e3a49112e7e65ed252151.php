<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47402345c9f056fa747805bbb3a7250d9d062cbd45b98e4f65b02e5df0d631d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47402345c9f056fa747805bbb3a7250d9d062cbd45b98e4f65b02e5df0d631d5->enter($__internal_47402345c9f056fa747805bbb3a7250d9d062cbd45b98e4f65b02e5df0d631d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4b282d6a6006fd71da715953bff6c2e84ee7eaf6ba97bee2ee48fce5fa5736f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b282d6a6006fd71da715953bff6c2e84ee7eaf6ba97bee2ee48fce5fa5736f4->enter($__internal_4b282d6a6006fd71da715953bff6c2e84ee7eaf6ba97bee2ee48fce5fa5736f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47402345c9f056fa747805bbb3a7250d9d062cbd45b98e4f65b02e5df0d631d5->leave($__internal_47402345c9f056fa747805bbb3a7250d9d062cbd45b98e4f65b02e5df0d631d5_prof);

        
        $__internal_4b282d6a6006fd71da715953bff6c2e84ee7eaf6ba97bee2ee48fce5fa5736f4->leave($__internal_4b282d6a6006fd71da715953bff6c2e84ee7eaf6ba97bee2ee48fce5fa5736f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cac2488aa36d13bd616d162da29d29ef604eff1182493823f5e15e46580dc59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac2488aa36d13bd616d162da29d29ef604eff1182493823f5e15e46580dc59e->enter($__internal_cac2488aa36d13bd616d162da29d29ef604eff1182493823f5e15e46580dc59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c3eb1db4c237f4762ecbdc439a666e6f0d3fdacd71ace51977c48c81d99be8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3eb1db4c237f4762ecbdc439a666e6f0d3fdacd71ace51977c48c81d99be8bb->enter($__internal_c3eb1db4c237f4762ecbdc439a666e6f0d3fdacd71ace51977c48c81d99be8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c3eb1db4c237f4762ecbdc439a666e6f0d3fdacd71ace51977c48c81d99be8bb->leave($__internal_c3eb1db4c237f4762ecbdc439a666e6f0d3fdacd71ace51977c48c81d99be8bb_prof);

        
        $__internal_cac2488aa36d13bd616d162da29d29ef604eff1182493823f5e15e46580dc59e->leave($__internal_cac2488aa36d13bd616d162da29d29ef604eff1182493823f5e15e46580dc59e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a36b73e5fc490fc84d946333fc724e05968e974da7f873bddb481bf6252a3a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36b73e5fc490fc84d946333fc724e05968e974da7f873bddb481bf6252a3a71->enter($__internal_a36b73e5fc490fc84d946333fc724e05968e974da7f873bddb481bf6252a3a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5147670a88a35c2701e6cdc360b112b2c8e7732c2cb5f1fd6c29b87a98f1774d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5147670a88a35c2701e6cdc360b112b2c8e7732c2cb5f1fd6c29b87a98f1774d->enter($__internal_5147670a88a35c2701e6cdc360b112b2c8e7732c2cb5f1fd6c29b87a98f1774d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5147670a88a35c2701e6cdc360b112b2c8e7732c2cb5f1fd6c29b87a98f1774d->leave($__internal_5147670a88a35c2701e6cdc360b112b2c8e7732c2cb5f1fd6c29b87a98f1774d_prof);

        
        $__internal_a36b73e5fc490fc84d946333fc724e05968e974da7f873bddb481bf6252a3a71->leave($__internal_a36b73e5fc490fc84d946333fc724e05968e974da7f873bddb481bf6252a3a71_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_830aeaf52e3bfc15efce2939683e7aeba2c33a621831ee719344a1caf5532ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830aeaf52e3bfc15efce2939683e7aeba2c33a621831ee719344a1caf5532ed4->enter($__internal_830aeaf52e3bfc15efce2939683e7aeba2c33a621831ee719344a1caf5532ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1dcabbb3e6fe7764c9823467f2f9a001e97f6b92b5424d3e5184230193298e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dcabbb3e6fe7764c9823467f2f9a001e97f6b92b5424d3e5184230193298e5c->enter($__internal_1dcabbb3e6fe7764c9823467f2f9a001e97f6b92b5424d3e5184230193298e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1dcabbb3e6fe7764c9823467f2f9a001e97f6b92b5424d3e5184230193298e5c->leave($__internal_1dcabbb3e6fe7764c9823467f2f9a001e97f6b92b5424d3e5184230193298e5c_prof);

        
        $__internal_830aeaf52e3bfc15efce2939683e7aeba2c33a621831ee719344a1caf5532ed4->leave($__internal_830aeaf52e3bfc15efce2939683e7aeba2c33a621831ee719344a1caf5532ed4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/joseph.lee/dev/tongcrew/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
