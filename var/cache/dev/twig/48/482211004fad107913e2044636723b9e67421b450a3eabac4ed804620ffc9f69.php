<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
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
        $__internal_85d83b2848e702c5d81cee61c498b927f5eee5d9cad47b5c29058e924fdbde42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d83b2848e702c5d81cee61c498b927f5eee5d9cad47b5c29058e924fdbde42->enter($__internal_85d83b2848e702c5d81cee61c498b927f5eee5d9cad47b5c29058e924fdbde42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e50cf2bcdab8bf8287f4d558e0ae47d2a554214d359315189780e6160d30ec5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50cf2bcdab8bf8287f4d558e0ae47d2a554214d359315189780e6160d30ec5a->enter($__internal_e50cf2bcdab8bf8287f4d558e0ae47d2a554214d359315189780e6160d30ec5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_85d83b2848e702c5d81cee61c498b927f5eee5d9cad47b5c29058e924fdbde42->leave($__internal_85d83b2848e702c5d81cee61c498b927f5eee5d9cad47b5c29058e924fdbde42_prof);

        
        $__internal_e50cf2bcdab8bf8287f4d558e0ae47d2a554214d359315189780e6160d30ec5a->leave($__internal_e50cf2bcdab8bf8287f4d558e0ae47d2a554214d359315189780e6160d30ec5a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7e51a39de860dfe39e77b7f1ad464bfcc014758d4fa4db43f054481bbbae87c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e51a39de860dfe39e77b7f1ad464bfcc014758d4fa4db43f054481bbbae87c->enter($__internal_a7e51a39de860dfe39e77b7f1ad464bfcc014758d4fa4db43f054481bbbae87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0390be0642a95ca3538a91689b0afbd2466d638871d04650abca2ad9070a13e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0390be0642a95ca3538a91689b0afbd2466d638871d04650abca2ad9070a13e9->enter($__internal_0390be0642a95ca3538a91689b0afbd2466d638871d04650abca2ad9070a13e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0390be0642a95ca3538a91689b0afbd2466d638871d04650abca2ad9070a13e9->leave($__internal_0390be0642a95ca3538a91689b0afbd2466d638871d04650abca2ad9070a13e9_prof);

        
        $__internal_a7e51a39de860dfe39e77b7f1ad464bfcc014758d4fa4db43f054481bbbae87c->leave($__internal_a7e51a39de860dfe39e77b7f1ad464bfcc014758d4fa4db43f054481bbbae87c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99163c57f5198ee5a7c7542835b733e4d6d0dd64eb7c034281d26f0e9bd0f677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99163c57f5198ee5a7c7542835b733e4d6d0dd64eb7c034281d26f0e9bd0f677->enter($__internal_99163c57f5198ee5a7c7542835b733e4d6d0dd64eb7c034281d26f0e9bd0f677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f49aaa1724d33b8982c5d9a63326ce7b5a15e5ed6882a429dc033d143c259f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49aaa1724d33b8982c5d9a63326ce7b5a15e5ed6882a429dc033d143c259f2b->enter($__internal_f49aaa1724d33b8982c5d9a63326ce7b5a15e5ed6882a429dc033d143c259f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f49aaa1724d33b8982c5d9a63326ce7b5a15e5ed6882a429dc033d143c259f2b->leave($__internal_f49aaa1724d33b8982c5d9a63326ce7b5a15e5ed6882a429dc033d143c259f2b_prof);

        
        $__internal_99163c57f5198ee5a7c7542835b733e4d6d0dd64eb7c034281d26f0e9bd0f677->leave($__internal_99163c57f5198ee5a7c7542835b733e4d6d0dd64eb7c034281d26f0e9bd0f677_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bb0f43c22b930d760e59a29e145521727fc50a9b0d020c9282688114b450aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb0f43c22b930d760e59a29e145521727fc50a9b0d020c9282688114b450aea->enter($__internal_4bb0f43c22b930d760e59a29e145521727fc50a9b0d020c9282688114b450aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a66356bb01e1155beb62ac66ae0429603e82616be252a7064ef46eec02264b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66356bb01e1155beb62ac66ae0429603e82616be252a7064ef46eec02264b0a->enter($__internal_a66356bb01e1155beb62ac66ae0429603e82616be252a7064ef46eec02264b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a66356bb01e1155beb62ac66ae0429603e82616be252a7064ef46eec02264b0a->leave($__internal_a66356bb01e1155beb62ac66ae0429603e82616be252a7064ef46eec02264b0a_prof);

        
        $__internal_4bb0f43c22b930d760e59a29e145521727fc50a9b0d020c9282688114b450aea->leave($__internal_4bb0f43c22b930d760e59a29e145521727fc50a9b0d020c9282688114b450aea_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f02fcf97e156531426076014a58221130ae518786bee9c801a170ed0e546c471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02fcf97e156531426076014a58221130ae518786bee9c801a170ed0e546c471->enter($__internal_f02fcf97e156531426076014a58221130ae518786bee9c801a170ed0e546c471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_51a9e81f92e877a04b1dc72bcad7b4a574d06c74e30cf84528a8460b5e9b7ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a9e81f92e877a04b1dc72bcad7b4a574d06c74e30cf84528a8460b5e9b7ba3->enter($__internal_51a9e81f92e877a04b1dc72bcad7b4a574d06c74e30cf84528a8460b5e9b7ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_51a9e81f92e877a04b1dc72bcad7b4a574d06c74e30cf84528a8460b5e9b7ba3->leave($__internal_51a9e81f92e877a04b1dc72bcad7b4a574d06c74e30cf84528a8460b5e9b7ba3_prof);

        
        $__internal_f02fcf97e156531426076014a58221130ae518786bee9c801a170ed0e546c471->leave($__internal_f02fcf97e156531426076014a58221130ae518786bee9c801a170ed0e546c471_prof);

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
", "base.html.twig", "/var/www/html/app/app/app/Resources/views/base.html.twig");
    }
}
