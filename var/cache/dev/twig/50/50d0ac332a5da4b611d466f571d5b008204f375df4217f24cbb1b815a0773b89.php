<?php

/* lucky/number.html.twig */
class __TwigTemplate_58bf94ad6c1504cdb20553852af1e81cf5438bb48a2bfa011e22afc6d8de95f3 extends Twig_Template
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
        $__internal_ec6553e0130276f7c1853231a19f477f8b0ce75e3994cfd7d1dba410d8cff29b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6553e0130276f7c1853231a19f477f8b0ce75e3994cfd7d1dba410d8cff29b->enter($__internal_ec6553e0130276f7c1853231a19f477f8b0ce75e3994cfd7d1dba410d8cff29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_97ffae1da82b2a5ea02129ac6b62c081cecea3fac7e617cffe9152d780d66654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ffae1da82b2a5ea02129ac6b62c081cecea3fac7e617cffe9152d780d66654->enter($__internal_97ffae1da82b2a5ea02129ac6b62c081cecea3fac7e617cffe9152d780d66654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 1
        echo "<?php
";
        // line 3
        echo "
<h1><b>Your lucky number is ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        echo "</b></h1>";
        
        $__internal_ec6553e0130276f7c1853231a19f477f8b0ce75e3994cfd7d1dba410d8cff29b->leave($__internal_ec6553e0130276f7c1853231a19f477f8b0ce75e3994cfd7d1dba410d8cff29b_prof);

        
        $__internal_97ffae1da82b2a5ea02129ac6b62c081cecea3fac7e617cffe9152d780d66654->leave($__internal_97ffae1da82b2a5ea02129ac6b62c081cecea3fac7e617cffe9152d780d66654_prof);

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

<h1><b>Your lucky number is {{ number }}</b></h1>", "lucky/number.html.twig", "/var/www/html/app/app/app/Resources/views/lucky/number.html.twig");
    }
}
