<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76f652f3c02554226bb47b83d4d6c7c025eed30aa18cabd234248390fcfa7efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f652f3c02554226bb47b83d4d6c7c025eed30aa18cabd234248390fcfa7efd->enter($__internal_76f652f3c02554226bb47b83d4d6c7c025eed30aa18cabd234248390fcfa7efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_384c82ae2a792287cf1bf2bdc1e9c639b2e36babe0315ed19ca3a3aa98cac7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384c82ae2a792287cf1bf2bdc1e9c639b2e36babe0315ed19ca3a3aa98cac7f5->enter($__internal_384c82ae2a792287cf1bf2bdc1e9c639b2e36babe0315ed19ca3a3aa98cac7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_76f652f3c02554226bb47b83d4d6c7c025eed30aa18cabd234248390fcfa7efd->leave($__internal_76f652f3c02554226bb47b83d4d6c7c025eed30aa18cabd234248390fcfa7efd_prof);

        
        $__internal_384c82ae2a792287cf1bf2bdc1e9c639b2e36babe0315ed19ca3a3aa98cac7f5->leave($__internal_384c82ae2a792287cf1bf2bdc1e9c639b2e36babe0315ed19ca3a3aa98cac7f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_88eab10c9fac4058f8b7bdefd80f4b1905c26f0aa1779e87aade2bcf595b68d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88eab10c9fac4058f8b7bdefd80f4b1905c26f0aa1779e87aade2bcf595b68d7->enter($__internal_88eab10c9fac4058f8b7bdefd80f4b1905c26f0aa1779e87aade2bcf595b68d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80f884cbe72cbddb618e5c1e68b687d8e0d098c8b8a9b84ad2f9cde37e2d46b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f884cbe72cbddb618e5c1e68b687d8e0d098c8b8a9b84ad2f9cde37e2d46b5->enter($__internal_80f884cbe72cbddb618e5c1e68b687d8e0d098c8b8a9b84ad2f9cde37e2d46b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_80f884cbe72cbddb618e5c1e68b687d8e0d098c8b8a9b84ad2f9cde37e2d46b5->leave($__internal_80f884cbe72cbddb618e5c1e68b687d8e0d098c8b8a9b84ad2f9cde37e2d46b5_prof);

        
        $__internal_88eab10c9fac4058f8b7bdefd80f4b1905c26f0aa1779e87aade2bcf595b68d7->leave($__internal_88eab10c9fac4058f8b7bdefd80f4b1905c26f0aa1779e87aade2bcf595b68d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70965b103612414f42528dcf81375a8660c69ab6ed7fc558d023f5512138aefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70965b103612414f42528dcf81375a8660c69ab6ed7fc558d023f5512138aefe->enter($__internal_70965b103612414f42528dcf81375a8660c69ab6ed7fc558d023f5512138aefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8521cd6593e27ff13013423956a153dfd4cfbed14dc4fbd3bc0ed6bbc5e825ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8521cd6593e27ff13013423956a153dfd4cfbed14dc4fbd3bc0ed6bbc5e825ee->enter($__internal_8521cd6593e27ff13013423956a153dfd4cfbed14dc4fbd3bc0ed6bbc5e825ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8521cd6593e27ff13013423956a153dfd4cfbed14dc4fbd3bc0ed6bbc5e825ee->leave($__internal_8521cd6593e27ff13013423956a153dfd4cfbed14dc4fbd3bc0ed6bbc5e825ee_prof);

        
        $__internal_70965b103612414f42528dcf81375a8660c69ab6ed7fc558d023f5512138aefe->leave($__internal_70965b103612414f42528dcf81375a8660c69ab6ed7fc558d023f5512138aefe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_78c4c0f7603e8b31b0338c735c7bfc128c41e4c8b2c8312895ffbc1c2187726b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c4c0f7603e8b31b0338c735c7bfc128c41e4c8b2c8312895ffbc1c2187726b->enter($__internal_78c4c0f7603e8b31b0338c735c7bfc128c41e4c8b2c8312895ffbc1c2187726b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4b106cd87d1176e2cfe36a1ffe3fc37b3298aab207086b71bdca0cebbe92332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b106cd87d1176e2cfe36a1ffe3fc37b3298aab207086b71bdca0cebbe92332->enter($__internal_c4b106cd87d1176e2cfe36a1ffe3fc37b3298aab207086b71bdca0cebbe92332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c4b106cd87d1176e2cfe36a1ffe3fc37b3298aab207086b71bdca0cebbe92332->leave($__internal_c4b106cd87d1176e2cfe36a1ffe3fc37b3298aab207086b71bdca0cebbe92332_prof);

        
        $__internal_78c4c0f7603e8b31b0338c735c7bfc128c41e4c8b2c8312895ffbc1c2187726b->leave($__internal_78c4c0f7603e8b31b0338c735c7bfc128c41e4c8b2c8312895ffbc1c2187726b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb2a8c970a91b04d4e59fbef096953253c0645b95a327fc28e86bb2fbbcdb236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2a8c970a91b04d4e59fbef096953253c0645b95a327fc28e86bb2fbbcdb236->enter($__internal_bb2a8c970a91b04d4e59fbef096953253c0645b95a327fc28e86bb2fbbcdb236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_86aa36ea70c5eec0e225cc5b5904f7e3b14344468e9e7aed01389647fdd10b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86aa36ea70c5eec0e225cc5b5904f7e3b14344468e9e7aed01389647fdd10b4d->enter($__internal_86aa36ea70c5eec0e225cc5b5904f7e3b14344468e9e7aed01389647fdd10b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_86aa36ea70c5eec0e225cc5b5904f7e3b14344468e9e7aed01389647fdd10b4d->leave($__internal_86aa36ea70c5eec0e225cc5b5904f7e3b14344468e9e7aed01389647fdd10b4d_prof);

        
        $__internal_bb2a8c970a91b04d4e59fbef096953253c0645b95a327fc28e86bb2fbbcdb236->leave($__internal_bb2a8c970a91b04d4e59fbef096953253c0645b95a327fc28e86bb2fbbcdb236_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/app/app/Resources/views/base.html.twig");
    }
}
