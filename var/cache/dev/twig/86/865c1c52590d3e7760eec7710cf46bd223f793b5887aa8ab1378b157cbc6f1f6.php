<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6385cb39321e52fe4436e29f3422678f1ce8348f77d8b906bb7e9ad4382fe198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6385cb39321e52fe4436e29f3422678f1ce8348f77d8b906bb7e9ad4382fe198->enter($__internal_6385cb39321e52fe4436e29f3422678f1ce8348f77d8b906bb7e9ad4382fe198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2674aadf701b85b8918a8aa837eeae673022c4e91d14343dd3d7e75666987c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2674aadf701b85b8918a8aa837eeae673022c4e91d14343dd3d7e75666987c11->enter($__internal_2674aadf701b85b8918a8aa837eeae673022c4e91d14343dd3d7e75666987c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6385cb39321e52fe4436e29f3422678f1ce8348f77d8b906bb7e9ad4382fe198->leave($__internal_6385cb39321e52fe4436e29f3422678f1ce8348f77d8b906bb7e9ad4382fe198_prof);

        
        $__internal_2674aadf701b85b8918a8aa837eeae673022c4e91d14343dd3d7e75666987c11->leave($__internal_2674aadf701b85b8918a8aa837eeae673022c4e91d14343dd3d7e75666987c11_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca2811cd7a91e2cbf55a1e4f125e0c09486bd7a3fc4ef5a079dc82f6062e0f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2811cd7a91e2cbf55a1e4f125e0c09486bd7a3fc4ef5a079dc82f6062e0f27->enter($__internal_ca2811cd7a91e2cbf55a1e4f125e0c09486bd7a3fc4ef5a079dc82f6062e0f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_60aac11231d5555d54a6ebc6f220379921a00eaae208d963012e1946f75214ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60aac11231d5555d54a6ebc6f220379921a00eaae208d963012e1946f75214ed->enter($__internal_60aac11231d5555d54a6ebc6f220379921a00eaae208d963012e1946f75214ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60aac11231d5555d54a6ebc6f220379921a00eaae208d963012e1946f75214ed->leave($__internal_60aac11231d5555d54a6ebc6f220379921a00eaae208d963012e1946f75214ed_prof);

        
        $__internal_ca2811cd7a91e2cbf55a1e4f125e0c09486bd7a3fc4ef5a079dc82f6062e0f27->leave($__internal_ca2811cd7a91e2cbf55a1e4f125e0c09486bd7a3fc4ef5a079dc82f6062e0f27_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d7da8b2844d0b9ce04b8f6f0d2a8f8d7bba421a980b74c1b4bef4127d8e64ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7da8b2844d0b9ce04b8f6f0d2a8f8d7bba421a980b74c1b4bef4127d8e64ed->enter($__internal_9d7da8b2844d0b9ce04b8f6f0d2a8f8d7bba421a980b74c1b4bef4127d8e64ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ff672476e3063bbcc7e199326d3bb882d36c0f792b02b332dfd741785ac53976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff672476e3063bbcc7e199326d3bb882d36c0f792b02b332dfd741785ac53976->enter($__internal_ff672476e3063bbcc7e199326d3bb882d36c0f792b02b332dfd741785ac53976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff672476e3063bbcc7e199326d3bb882d36c0f792b02b332dfd741785ac53976->leave($__internal_ff672476e3063bbcc7e199326d3bb882d36c0f792b02b332dfd741785ac53976_prof);

        
        $__internal_9d7da8b2844d0b9ce04b8f6f0d2a8f8d7bba421a980b74c1b4bef4127d8e64ed->leave($__internal_9d7da8b2844d0b9ce04b8f6f0d2a8f8d7bba421a980b74c1b4bef4127d8e64ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f21a3cc4ad867ac78bad81fde88822113afbfb45c1f50a0e1fc68ee0f64d086d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21a3cc4ad867ac78bad81fde88822113afbfb45c1f50a0e1fc68ee0f64d086d->enter($__internal_f21a3cc4ad867ac78bad81fde88822113afbfb45c1f50a0e1fc68ee0f64d086d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b25e19ff50abe7672b5cd330e2d357ff8a84e63da3a90b977ad2f411bf31e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b25e19ff50abe7672b5cd330e2d357ff8a84e63da3a90b977ad2f411bf31e4a->enter($__internal_6b25e19ff50abe7672b5cd330e2d357ff8a84e63da3a90b977ad2f411bf31e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b25e19ff50abe7672b5cd330e2d357ff8a84e63da3a90b977ad2f411bf31e4a->leave($__internal_6b25e19ff50abe7672b5cd330e2d357ff8a84e63da3a90b977ad2f411bf31e4a_prof);

        
        $__internal_f21a3cc4ad867ac78bad81fde88822113afbfb45c1f50a0e1fc68ee0f64d086d->leave($__internal_f21a3cc4ad867ac78bad81fde88822113afbfb45c1f50a0e1fc68ee0f64d086d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/joseph.lee/dev/tongcrew/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
