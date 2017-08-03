<?php

/* empresa/mostrarAllEmp.html.twig */
class __TwigTemplate_c113c382099ac5ce59082027047b8c319ff28ebde1b27d7dbf8593ecfd854f50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bbba9a8553229552deba3ff1b43e894607d853a2de06e63312ceb5cd41d75c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bbba9a8553229552deba3ff1b43e894607d853a2de06e63312ceb5cd41d75c1->enter($__internal_2bbba9a8553229552deba3ff1b43e894607d853a2de06e63312ceb5cd41d75c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/mostrarAllEmp.html.twig"));

        $__internal_7811802817a954cc7f092bac1b47270c383c566337cf0ea2585a53ea02b8b824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7811802817a954cc7f092bac1b47270c383c566337cf0ea2585a53ea02b8b824->enter($__internal_7811802817a954cc7f092bac1b47270c383c566337cf0ea2585a53ea02b8b824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/mostrarAllEmp.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Symfony!</title>
    </head>
    <body>
        <h1>EMPRESAS</h1>

        <ul id=\"empresas\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 11
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
        // line 13
        echo "        </ul>
    </body>
</html>";
        
        $__internal_2bbba9a8553229552deba3ff1b43e894607d853a2de06e63312ceb5cd41d75c1->leave($__internal_2bbba9a8553229552deba3ff1b43e894607d853a2de06e63312ceb5cd41d75c1_prof);

        
        $__internal_7811802817a954cc7f092bac1b47270c383c566337cf0ea2585a53ea02b8b824->leave($__internal_7811802817a954cc7f092bac1b47270c383c566337cf0ea2585a53ea02b8b824_prof);

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
        return array (  51 => 13,  40 => 11,  36 => 10,  25 => 1,);
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
        <title>Welcome to Symfony!</title>
    </head>
    <body>
        <h1>EMPRESAS</h1>

        <ul id=\"empresas\">
            {% for empresa in empresas %}
                <li>{{ empresa.nombreEmpresa }} || {{ empresa.ciudadEmpresa }}</li>
            {% endfor %}
        </ul>
    </body>
</html>", "empresa/mostrarAllEmp.html.twig", "/var/www/html/app/app/app/Resources/views/empresa/mostrarAllEmp.html.twig");
    }
}
