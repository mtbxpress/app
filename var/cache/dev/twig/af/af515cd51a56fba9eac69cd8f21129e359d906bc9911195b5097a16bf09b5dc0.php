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
        $__internal_5de9ad3e0b4c133766137c1ad2d6f6c373083d4573f2aa7ea9449453c5ad6565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de9ad3e0b4c133766137c1ad2d6f6c373083d4573f2aa7ea9449453c5ad6565->enter($__internal_5de9ad3e0b4c133766137c1ad2d6f6c373083d4573f2aa7ea9449453c5ad6565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/mostrarUnaEmp.html.twig"));

        $__internal_706b2dbe97c344c20b3040d9deeb43e741def152552497f1f11b64a94307f969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706b2dbe97c344c20b3040d9deeb43e741def152552497f1f11b64a94307f969->enter($__internal_706b2dbe97c344c20b3040d9deeb43e741def152552497f1f11b64a94307f969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/mostrarUnaEmp.html.twig"));

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
        echo " || ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "id", array()), "html", null, true);
        echo "</li>
        </ul>
    </body>
</html>";
        
        $__internal_5de9ad3e0b4c133766137c1ad2d6f6c373083d4573f2aa7ea9449453c5ad6565->leave($__internal_5de9ad3e0b4c133766137c1ad2d6f6c373083d4573f2aa7ea9449453c5ad6565_prof);

        
        $__internal_706b2dbe97c344c20b3040d9deeb43e741def152552497f1f11b64a94307f969->leave($__internal_706b2dbe97c344c20b3040d9deeb43e741def152552497f1f11b64a94307f969_prof);

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
            <li>{{ empresa.nombreEmpresa }} || {{ empresa.ciudadEmpresa }} || {{ empresa.id }}</li>
        </ul>
    </body>
</html>", "empresa/mostrarUnaEmp.html.twig", "/var/www/html/app/app/app/Resources/views/empresa/mostrarUnaEmp.html.twig");
    }
}
