<?php

/* lucky/number.html.twig */
class __TwigTemplate_07ed3357ad237e632a47653fe33c21571b67eaac294b7e65f980ccaf31e8e393 extends Twig_Template
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
        $__internal_42acf0319222741473bdeb335de890c7526370daf464f5ee4cf1e9f9034a7959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42acf0319222741473bdeb335de890c7526370daf464f5ee4cf1e9f9034a7959->enter($__internal_42acf0319222741473bdeb335de890c7526370daf464f5ee4cf1e9f9034a7959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_1664ca1a59eeae115d5ecc067a419683d21141cbf9f4459945434f81b5bb3b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1664ca1a59eeae115d5ecc067a419683d21141cbf9f4459945434f81b5bb3b58->enter($__internal_1664ca1a59eeae115d5ecc067a419683d21141cbf9f4459945434f81b5bb3b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 1
        echo "<?php
";
        // line 3
        echo "
<h1><b>Your lucky number is ";
        // line 4
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "</b></h1>";
        
        $__internal_42acf0319222741473bdeb335de890c7526370daf464f5ee4cf1e9f9034a7959->leave($__internal_42acf0319222741473bdeb335de890c7526370daf464f5ee4cf1e9f9034a7959_prof);

        
        $__internal_1664ca1a59eeae115d5ecc067a419683d21141cbf9f4459945434f81b5bb3b58->leave($__internal_1664ca1a59eeae115d5ecc067a419683d21141cbf9f4459945434f81b5bb3b58_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
{# app/Resources/views/lucky/number.html.twig #}

<h1><b>Your lucky number is {{ number }}</b></h1>", "lucky/number.html.twig", "/var/www/html/app/app/Resources/views/lucky/number.html.twig");
    }
}
