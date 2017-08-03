<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
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
        $__internal_05a5e178b08935c2a70f1c389c3225a78e5639f1d3f7f2f7a3526fcebee593fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a5e178b08935c2a70f1c389c3225a78e5639f1d3f7f2f7a3526fcebee593fe->enter($__internal_05a5e178b08935c2a70f1c389c3225a78e5639f1d3f7f2f7a3526fcebee593fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f85d5c1b3e4c63df3e020e5ae364fef377e992ac97949b4da6428b4b3f3e6bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85d5c1b3e4c63df3e020e5ae364fef377e992ac97949b4da6428b4b3f3e6bd4->enter($__internal_f85d5c1b3e4c63df3e020e5ae364fef377e992ac97949b4da6428b4b3f3e6bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_05a5e178b08935c2a70f1c389c3225a78e5639f1d3f7f2f7a3526fcebee593fe->leave($__internal_05a5e178b08935c2a70f1c389c3225a78e5639f1d3f7f2f7a3526fcebee593fe_prof);

        
        $__internal_f85d5c1b3e4c63df3e020e5ae364fef377e992ac97949b4da6428b4b3f3e6bd4->leave($__internal_f85d5c1b3e4c63df3e020e5ae364fef377e992ac97949b4da6428b4b3f3e6bd4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_377ff933ad9d695edeb8582af6bd83eec24d66496f82740b44d8e37f52d466c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377ff933ad9d695edeb8582af6bd83eec24d66496f82740b44d8e37f52d466c6->enter($__internal_377ff933ad9d695edeb8582af6bd83eec24d66496f82740b44d8e37f52d466c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95727cd040ad519fd49ffd4aab98d431447c37272c922afbca08027dea91f885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95727cd040ad519fd49ffd4aab98d431447c37272c922afbca08027dea91f885->enter($__internal_95727cd040ad519fd49ffd4aab98d431447c37272c922afbca08027dea91f885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_95727cd040ad519fd49ffd4aab98d431447c37272c922afbca08027dea91f885->leave($__internal_95727cd040ad519fd49ffd4aab98d431447c37272c922afbca08027dea91f885_prof);

        
        $__internal_377ff933ad9d695edeb8582af6bd83eec24d66496f82740b44d8e37f52d466c6->leave($__internal_377ff933ad9d695edeb8582af6bd83eec24d66496f82740b44d8e37f52d466c6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_62035ba15ed2ce27fe1768bdb60e95bbbaefd2bea874e898feae8c3554038ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62035ba15ed2ce27fe1768bdb60e95bbbaefd2bea874e898feae8c3554038ca0->enter($__internal_62035ba15ed2ce27fe1768bdb60e95bbbaefd2bea874e898feae8c3554038ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5524d8f801e02ca9dde7c976eca8085e420b65c026b3893d18265377b9760f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5524d8f801e02ca9dde7c976eca8085e420b65c026b3893d18265377b9760f8d->enter($__internal_5524d8f801e02ca9dde7c976eca8085e420b65c026b3893d18265377b9760f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5524d8f801e02ca9dde7c976eca8085e420b65c026b3893d18265377b9760f8d->leave($__internal_5524d8f801e02ca9dde7c976eca8085e420b65c026b3893d18265377b9760f8d_prof);

        
        $__internal_62035ba15ed2ce27fe1768bdb60e95bbbaefd2bea874e898feae8c3554038ca0->leave($__internal_62035ba15ed2ce27fe1768bdb60e95bbbaefd2bea874e898feae8c3554038ca0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_74fb8cab5f7dff83dfc1cddd6abf9b4bb2e24b6ed9c2d32541907ca0d8d4bf7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fb8cab5f7dff83dfc1cddd6abf9b4bb2e24b6ed9c2d32541907ca0d8d4bf7f->enter($__internal_74fb8cab5f7dff83dfc1cddd6abf9b4bb2e24b6ed9c2d32541907ca0d8d4bf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_882c17dc6ab1eb2a496188bd890efc001daeeff29d707c402e8fc659cbc9a4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882c17dc6ab1eb2a496188bd890efc001daeeff29d707c402e8fc659cbc9a4f3->enter($__internal_882c17dc6ab1eb2a496188bd890efc001daeeff29d707c402e8fc659cbc9a4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_882c17dc6ab1eb2a496188bd890efc001daeeff29d707c402e8fc659cbc9a4f3->leave($__internal_882c17dc6ab1eb2a496188bd890efc001daeeff29d707c402e8fc659cbc9a4f3_prof);

        
        $__internal_74fb8cab5f7dff83dfc1cddd6abf9b4bb2e24b6ed9c2d32541907ca0d8d4bf7f->leave($__internal_74fb8cab5f7dff83dfc1cddd6abf9b4bb2e24b6ed9c2d32541907ca0d8d4bf7f_prof);

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
", "@Twig/layout.html.twig", "/var/www/html/app/app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
