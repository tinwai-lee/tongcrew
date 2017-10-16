<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_634dff4b6beac0a0cc6dabfe4744e16f79e1dd25c2a7a132cca6e7ce295b4bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634dff4b6beac0a0cc6dabfe4744e16f79e1dd25c2a7a132cca6e7ce295b4bb2->enter($__internal_634dff4b6beac0a0cc6dabfe4744e16f79e1dd25c2a7a132cca6e7ce295b4bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b932e4b669d22b63db4e3dada26519c515bc3af94000a2109c198b2ca3d6bfad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b932e4b669d22b63db4e3dada26519c515bc3af94000a2109c198b2ca3d6bfad->enter($__internal_b932e4b669d22b63db4e3dada26519c515bc3af94000a2109c198b2ca3d6bfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_634dff4b6beac0a0cc6dabfe4744e16f79e1dd25c2a7a132cca6e7ce295b4bb2->leave($__internal_634dff4b6beac0a0cc6dabfe4744e16f79e1dd25c2a7a132cca6e7ce295b4bb2_prof);

        
        $__internal_b932e4b669d22b63db4e3dada26519c515bc3af94000a2109c198b2ca3d6bfad->leave($__internal_b932e4b669d22b63db4e3dada26519c515bc3af94000a2109c198b2ca3d6bfad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c69df0efb94a9d1a2439d0b3a9c5d2160bba26601350960873bd16f0ba773e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69df0efb94a9d1a2439d0b3a9c5d2160bba26601350960873bd16f0ba773e41->enter($__internal_c69df0efb94a9d1a2439d0b3a9c5d2160bba26601350960873bd16f0ba773e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f34505410e1b9cc9be9b469afe0a1414d55f670cd1d379483bbcd3376136bfb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34505410e1b9cc9be9b469afe0a1414d55f670cd1d379483bbcd3376136bfb9->enter($__internal_f34505410e1b9cc9be9b469afe0a1414d55f670cd1d379483bbcd3376136bfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f34505410e1b9cc9be9b469afe0a1414d55f670cd1d379483bbcd3376136bfb9->leave($__internal_f34505410e1b9cc9be9b469afe0a1414d55f670cd1d379483bbcd3376136bfb9_prof);

        
        $__internal_c69df0efb94a9d1a2439d0b3a9c5d2160bba26601350960873bd16f0ba773e41->leave($__internal_c69df0efb94a9d1a2439d0b3a9c5d2160bba26601350960873bd16f0ba773e41_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c49fe2266fef077c38d7f87de2a156fd798aa9a2f75c720d885dc18ec914362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c49fe2266fef077c38d7f87de2a156fd798aa9a2f75c720d885dc18ec914362->enter($__internal_9c49fe2266fef077c38d7f87de2a156fd798aa9a2f75c720d885dc18ec914362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9e2c2566fb1965373690661f827b79c304f4935dd40b8e27f6542255f5776cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e2c2566fb1965373690661f827b79c304f4935dd40b8e27f6542255f5776cc->enter($__internal_b9e2c2566fb1965373690661f827b79c304f4935dd40b8e27f6542255f5776cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b9e2c2566fb1965373690661f827b79c304f4935dd40b8e27f6542255f5776cc->leave($__internal_b9e2c2566fb1965373690661f827b79c304f4935dd40b8e27f6542255f5776cc_prof);

        
        $__internal_9c49fe2266fef077c38d7f87de2a156fd798aa9a2f75c720d885dc18ec914362->leave($__internal_9c49fe2266fef077c38d7f87de2a156fd798aa9a2f75c720d885dc18ec914362_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_255ededa0494e78945893ee5b5b685b205102f185f36d7d808a986ff8e2756af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255ededa0494e78945893ee5b5b685b205102f185f36d7d808a986ff8e2756af->enter($__internal_255ededa0494e78945893ee5b5b685b205102f185f36d7d808a986ff8e2756af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_103fc96fa44a8d1d7fcf810ef21df9f63a7cd131b77822fe27aa185438c80fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103fc96fa44a8d1d7fcf810ef21df9f63a7cd131b77822fe27aa185438c80fbb->enter($__internal_103fc96fa44a8d1d7fcf810ef21df9f63a7cd131b77822fe27aa185438c80fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_103fc96fa44a8d1d7fcf810ef21df9f63a7cd131b77822fe27aa185438c80fbb->leave($__internal_103fc96fa44a8d1d7fcf810ef21df9f63a7cd131b77822fe27aa185438c80fbb_prof);

        
        $__internal_255ededa0494e78945893ee5b5b685b205102f185f36d7d808a986ff8e2756af->leave($__internal_255ededa0494e78945893ee5b5b685b205102f185f36d7d808a986ff8e2756af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/joseph.lee/dev/tongcrew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
