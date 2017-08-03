<?php

/* empresa/mostrarUnaEmp.html.twig */
class __TwigTemplate_ab8c61537c428bfa9df721d5d46fa298d52c1a8d2ae24ed12238006a4d61ba03 extends Twig_Template
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
        $__internal_9a14e84b7d406530ee2a9010364ac482ccf80ef8cd31f6ec6cfa308e1f3c2f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a14e84b7d406530ee2a9010364ac482ccf80ef8cd31f6ec6cfa308e1f3c2f72->enter($__internal_9a14e84b7d406530ee2a9010364ac482ccf80ef8cd31f6ec6cfa308e1f3c2f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/mostrarUnaEmp.html.twig"));

        $__internal_ab37c2b0d964f01a0c7a05f0fbf214cb4d65c005f2ff0c751fe21b4df2ca8a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab37c2b0d964f01a0c7a05f0fbf214cb4d65c005f2ff0c751fe21b4df2ca8a9b->enter($__internal_ab37c2b0d964f01a0c7a05f0fbf214cb4d65c005f2ff0c751fe21b4df2ca8a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/mostrarUnaEmp.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>dddd</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t<h3>Mostrar una Empresa</h3>
        <ul id=\"empresa\">
            <li>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "nombreEmpresa", array()), "html", null, true);
        echo " || ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "ciudadEmpresa", array()), "html", null, true);
        echo "</li>
        </ul>
    </body>
</html>";
        
        $__internal_9a14e84b7d406530ee2a9010364ac482ccf80ef8cd31f6ec6cfa308e1f3c2f72->leave($__internal_9a14e84b7d406530ee2a9010364ac482ccf80ef8cd31f6ec6cfa308e1f3c2f72_prof);

        
        $__internal_ab37c2b0d964f01a0c7a05f0fbf214cb4d65c005f2ff0c751fe21b4df2ca8a9b->leave($__internal_ab37c2b0d964f01a0c7a05f0fbf214cb4d65c005f2ff0c751fe21b4df2ca8a9b_prof);

    }

    public function getTemplateName()
    {
        return "empresa/mostrarUnaEmp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>dddd</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
\t<h3>Mostrar una Empresa</h3>
        <ul id=\"empresa\">
            <li>{{ empresa.nombreEmpresa }} || {{ empresa.ciudadEmpresa }}</li>
        </ul>
    </body>
</html>", "empresa/mostrarUnaEmp.html.twig", "/var/www/html/app/app/app/Resources/views/empresa/mostrarUnaEmp.html.twig");
    }
}
