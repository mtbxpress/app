<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
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
        $__internal_c9abbb6ffc2ef6385f8f36a85ca64e552ed5a5f4400fe39abc42f026b2e9ef76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9abbb6ffc2ef6385f8f36a85ca64e552ed5a5f4400fe39abc42f026b2e9ef76->enter($__internal_c9abbb6ffc2ef6385f8f36a85ca64e552ed5a5f4400fe39abc42f026b2e9ef76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_113ded048ed33924e6a3ab0dbdfd024a62d40276e5d598f99f7320199dabd50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113ded048ed33924e6a3ab0dbdfd024a62d40276e5d598f99f7320199dabd50b->enter($__internal_113ded048ed33924e6a3ab0dbdfd024a62d40276e5d598f99f7320199dabd50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_c9abbb6ffc2ef6385f8f36a85ca64e552ed5a5f4400fe39abc42f026b2e9ef76->leave($__internal_c9abbb6ffc2ef6385f8f36a85ca64e552ed5a5f4400fe39abc42f026b2e9ef76_prof);

        
        $__internal_113ded048ed33924e6a3ab0dbdfd024a62d40276e5d598f99f7320199dabd50b->leave($__internal_113ded048ed33924e6a3ab0dbdfd024a62d40276e5d598f99f7320199dabd50b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f394f1e2c85c230f15ca3a212c2611b1ad9b71d520aaed40f4e700ec07e09632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f394f1e2c85c230f15ca3a212c2611b1ad9b71d520aaed40f4e700ec07e09632->enter($__internal_f394f1e2c85c230f15ca3a212c2611b1ad9b71d520aaed40f4e700ec07e09632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2fb57f4ae2ccb2d64d749c230895cf6b80a8079d3fdfc3e32e4952d582a6b54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb57f4ae2ccb2d64d749c230895cf6b80a8079d3fdfc3e32e4952d582a6b54a->enter($__internal_2fb57f4ae2ccb2d64d749c230895cf6b80a8079d3fdfc3e32e4952d582a6b54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2fb57f4ae2ccb2d64d749c230895cf6b80a8079d3fdfc3e32e4952d582a6b54a->leave($__internal_2fb57f4ae2ccb2d64d749c230895cf6b80a8079d3fdfc3e32e4952d582a6b54a_prof);

        
        $__internal_f394f1e2c85c230f15ca3a212c2611b1ad9b71d520aaed40f4e700ec07e09632->leave($__internal_f394f1e2c85c230f15ca3a212c2611b1ad9b71d520aaed40f4e700ec07e09632_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7a203e359c36c6c3d76e831b529bd6d14e02d5cd685b914a2388b3683656b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a203e359c36c6c3d76e831b529bd6d14e02d5cd685b914a2388b3683656b46->enter($__internal_e7a203e359c36c6c3d76e831b529bd6d14e02d5cd685b914a2388b3683656b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a75483ae7751ff75a1733e66ff48d54c45005b0612c1abb9a9067942a2df016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a75483ae7751ff75a1733e66ff48d54c45005b0612c1abb9a9067942a2df016->enter($__internal_8a75483ae7751ff75a1733e66ff48d54c45005b0612c1abb9a9067942a2df016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8a75483ae7751ff75a1733e66ff48d54c45005b0612c1abb9a9067942a2df016->leave($__internal_8a75483ae7751ff75a1733e66ff48d54c45005b0612c1abb9a9067942a2df016_prof);

        
        $__internal_e7a203e359c36c6c3d76e831b529bd6d14e02d5cd685b914a2388b3683656b46->leave($__internal_e7a203e359c36c6c3d76e831b529bd6d14e02d5cd685b914a2388b3683656b46_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_daf4c38b355d06769dd2deec3e7c60d234e86208f88044e9e98c283863f47084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf4c38b355d06769dd2deec3e7c60d234e86208f88044e9e98c283863f47084->enter($__internal_daf4c38b355d06769dd2deec3e7c60d234e86208f88044e9e98c283863f47084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_385897744f01b0e185f207d2808547a22670fb956bd9cc41ef76ea70c7e292bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385897744f01b0e185f207d2808547a22670fb956bd9cc41ef76ea70c7e292bb->enter($__internal_385897744f01b0e185f207d2808547a22670fb956bd9cc41ef76ea70c7e292bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_385897744f01b0e185f207d2808547a22670fb956bd9cc41ef76ea70c7e292bb->leave($__internal_385897744f01b0e185f207d2808547a22670fb956bd9cc41ef76ea70c7e292bb_prof);

        
        $__internal_daf4c38b355d06769dd2deec3e7c60d234e86208f88044e9e98c283863f47084->leave($__internal_daf4c38b355d06769dd2deec3e7c60d234e86208f88044e9e98c283863f47084_prof);

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
", "@Twig/layout.html.twig", "/var/www/html/app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
