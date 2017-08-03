<?php

/* empresa/mostrarAllEmp.html.twig */
class __TwigTemplate_c113c382099ac5ce59082027047b8c319ff28ebde1b27d7dbf8593ecfd854f50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "empresa/mostrarAllEmp.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3020fc7375c0bdef3f9e0888ae3fb97c1a0806b8d929f3c06a83e6b3ba50a98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3020fc7375c0bdef3f9e0888ae3fb97c1a0806b8d929f3c06a83e6b3ba50a98e->enter($__internal_3020fc7375c0bdef3f9e0888ae3fb97c1a0806b8d929f3c06a83e6b3ba50a98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/mostrarAllEmp.html.twig"));

        $__internal_effd7d1cd228e392af364dab4d46744ecb562c3ae5d725c8fe2b61d488b4ebc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effd7d1cd228e392af364dab4d46744ecb562c3ae5d725c8fe2b61d488b4ebc4->enter($__internal_effd7d1cd228e392af364dab4d46744ecb562c3ae5d725c8fe2b61d488b4ebc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/mostrarAllEmp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3020fc7375c0bdef3f9e0888ae3fb97c1a0806b8d929f3c06a83e6b3ba50a98e->leave($__internal_3020fc7375c0bdef3f9e0888ae3fb97c1a0806b8d929f3c06a83e6b3ba50a98e_prof);

        
        $__internal_effd7d1cd228e392af364dab4d46744ecb562c3ae5d725c8fe2b61d488b4ebc4->leave($__internal_effd7d1cd228e392af364dab4d46744ecb562c3ae5d725c8fe2b61d488b4ebc4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d99d54da4697943c229b5baca08f5e27b491a89d14e40e81a5f58cbc5befa232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99d54da4697943c229b5baca08f5e27b491a89d14e40e81a5f58cbc5befa232->enter($__internal_d99d54da4697943c229b5baca08f5e27b491a89d14e40e81a5f58cbc5befa232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_584f9950a9ceee3fc1029910d918ef59013a512a33342179ebef66238248691c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584f9950a9ceee3fc1029910d918ef59013a512a33342179ebef66238248691c->enter($__internal_584f9950a9ceee3fc1029910d918ef59013a512a33342179ebef66238248691c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "My cool blog posts";
        
        $__internal_584f9950a9ceee3fc1029910d918ef59013a512a33342179ebef66238248691c->leave($__internal_584f9950a9ceee3fc1029910d918ef59013a512a33342179ebef66238248691c_prof);

        
        $__internal_d99d54da4697943c229b5baca08f5e27b491a89d14e40e81a5f58cbc5befa232->leave($__internal_d99d54da4697943c229b5baca08f5e27b491a89d14e40e81a5f58cbc5befa232_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a92f085f02e37d7bcc1707cc51a67395cb15db669fda9f3b70f12c3a449893dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92f085f02e37d7bcc1707cc51a67395cb15db669fda9f3b70f12c3a449893dc->enter($__internal_a92f085f02e37d7bcc1707cc51a67395cb15db669fda9f3b70f12c3a449893dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e71b9781fe0525fc347d694de9de88b9943c49a16a02f73a01b6e139d4a3d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e71b9781fe0525fc347d694de9de88b9943c49a16a02f73a01b6e139d4a3d74->enter($__internal_0e71b9781fe0525fc347d694de9de88b9943c49a16a02f73a01b6e139d4a3d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h3>Empresas</h3>
        <ul id=\"empresas\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 8
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombreEmpresa", array()), "html", null, true);
            echo " || ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "ciudadEmpresa", array()), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </ul>
";
        
        $__internal_0e71b9781fe0525fc347d694de9de88b9943c49a16a02f73a01b6e139d4a3d74->leave($__internal_0e71b9781fe0525fc347d694de9de88b9943c49a16a02f73a01b6e139d4a3d74_prof);

        
        $__internal_a92f085f02e37d7bcc1707cc51a67395cb15db669fda9f3b70f12c3a449893dc->leave($__internal_a92f085f02e37d7bcc1707cc51a67395cb15db669fda9f3b70f12c3a449893dc_prof);

    }

    public function getTemplateName()
    {
        return "empresa/mostrarAllEmp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 10,  76 => 8,  72 => 7,  68 => 5,  59 => 4,  41 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/blog/index.html.twig #}
{% extends 'base.html.twig' %}
{% block title %}My cool blog posts{% endblock %}
{% block body %}
\t<h3>Empresas</h3>
        <ul id=\"empresas\">
            {% for empresa in empresas %}
                <li>{{ empresa.nombreEmpresa }} || {{ empresa.ciudadEmpresa }}</li>
            {% endfor %}
        </ul>
{% endblock %}

", "empresa/mostrarAllEmp.html.twig", "/var/www/html/app/app/app/Resources/views/empresa/mostrarAllEmp.html.twig");
    }
}
