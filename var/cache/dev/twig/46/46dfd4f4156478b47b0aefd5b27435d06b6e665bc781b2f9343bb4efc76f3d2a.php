<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4c7ee6b6a70e19e1728bf743135918827cecd678896ad7d03cad889ff28fb82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c7ee6b6a70e19e1728bf743135918827cecd678896ad7d03cad889ff28fb82->enter($__internal_f4c7ee6b6a70e19e1728bf743135918827cecd678896ad7d03cad889ff28fb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_087aa1faff7c87b72a46fb493f9da0eefda96621eccd68b9f9243539fbec711a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087aa1faff7c87b72a46fb493f9da0eefda96621eccd68b9f9243539fbec711a->enter($__internal_087aa1faff7c87b72a46fb493f9da0eefda96621eccd68b9f9243539fbec711a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f4c7ee6b6a70e19e1728bf743135918827cecd678896ad7d03cad889ff28fb82->leave($__internal_f4c7ee6b6a70e19e1728bf743135918827cecd678896ad7d03cad889ff28fb82_prof);

        
        $__internal_087aa1faff7c87b72a46fb493f9da0eefda96621eccd68b9f9243539fbec711a->leave($__internal_087aa1faff7c87b72a46fb493f9da0eefda96621eccd68b9f9243539fbec711a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc5c9f41692966b7529f8a48962add25e211402d1115b69e1476d5b5fe22c3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5c9f41692966b7529f8a48962add25e211402d1115b69e1476d5b5fe22c3c4->enter($__internal_cc5c9f41692966b7529f8a48962add25e211402d1115b69e1476d5b5fe22c3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8fcb3a92af1a8b0ec5a247cd8874a306d37b38a3399bc1533a5564f485700d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcb3a92af1a8b0ec5a247cd8874a306d37b38a3399bc1533a5564f485700d28->enter($__internal_8fcb3a92af1a8b0ec5a247cd8874a306d37b38a3399bc1533a5564f485700d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8fcb3a92af1a8b0ec5a247cd8874a306d37b38a3399bc1533a5564f485700d28->leave($__internal_8fcb3a92af1a8b0ec5a247cd8874a306d37b38a3399bc1533a5564f485700d28_prof);

        
        $__internal_cc5c9f41692966b7529f8a48962add25e211402d1115b69e1476d5b5fe22c3c4->leave($__internal_cc5c9f41692966b7529f8a48962add25e211402d1115b69e1476d5b5fe22c3c4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8bae08910fcc19f5df5ff074301eba669eac6696b4944e41bcfe3da210946692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bae08910fcc19f5df5ff074301eba669eac6696b4944e41bcfe3da210946692->enter($__internal_8bae08910fcc19f5df5ff074301eba669eac6696b4944e41bcfe3da210946692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8046eed30e22fcd3b7941a05c512430313ef32c571bfa30a205596d97330f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8046eed30e22fcd3b7941a05c512430313ef32c571bfa30a205596d97330f9b->enter($__internal_a8046eed30e22fcd3b7941a05c512430313ef32c571bfa30a205596d97330f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a8046eed30e22fcd3b7941a05c512430313ef32c571bfa30a205596d97330f9b->leave($__internal_a8046eed30e22fcd3b7941a05c512430313ef32c571bfa30a205596d97330f9b_prof);

        
        $__internal_8bae08910fcc19f5df5ff074301eba669eac6696b4944e41bcfe3da210946692->leave($__internal_8bae08910fcc19f5df5ff074301eba669eac6696b4944e41bcfe3da210946692_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cc1821a9449b35b4c403388973ec714ccdf20c5bec7dcf4828b383a8a1e6079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc1821a9449b35b4c403388973ec714ccdf20c5bec7dcf4828b383a8a1e6079->enter($__internal_3cc1821a9449b35b4c403388973ec714ccdf20c5bec7dcf4828b383a8a1e6079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0244af1bf167fba00e4f57391f399fee11c2b66555407a5456536fb231bee452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0244af1bf167fba00e4f57391f399fee11c2b66555407a5456536fb231bee452->enter($__internal_0244af1bf167fba00e4f57391f399fee11c2b66555407a5456536fb231bee452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0244af1bf167fba00e4f57391f399fee11c2b66555407a5456536fb231bee452->leave($__internal_0244af1bf167fba00e4f57391f399fee11c2b66555407a5456536fb231bee452_prof);

        
        $__internal_3cc1821a9449b35b4c403388973ec714ccdf20c5bec7dcf4828b383a8a1e6079->leave($__internal_3cc1821a9449b35b4c403388973ec714ccdf20c5bec7dcf4828b383a8a1e6079_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/joseph.lee/dev/tongcrew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
