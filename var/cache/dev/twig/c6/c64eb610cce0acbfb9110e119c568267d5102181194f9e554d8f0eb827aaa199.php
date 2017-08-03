<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c7fe62658eb971f674e8985049fa2d6c9cbbf0f142b670d6a51a35219059e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7fe62658eb971f674e8985049fa2d6c9cbbf0f142b670d6a51a35219059e93->enter($__internal_3c7fe62658eb971f674e8985049fa2d6c9cbbf0f142b670d6a51a35219059e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_322cf9097ecf245c358fecfe0c27281882782cc3c84a5e1ce6f7220b9e262ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322cf9097ecf245c358fecfe0c27281882782cc3c84a5e1ce6f7220b9e262ecf->enter($__internal_322cf9097ecf245c358fecfe0c27281882782cc3c84a5e1ce6f7220b9e262ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c7fe62658eb971f674e8985049fa2d6c9cbbf0f142b670d6a51a35219059e93->leave($__internal_3c7fe62658eb971f674e8985049fa2d6c9cbbf0f142b670d6a51a35219059e93_prof);

        
        $__internal_322cf9097ecf245c358fecfe0c27281882782cc3c84a5e1ce6f7220b9e262ecf->leave($__internal_322cf9097ecf245c358fecfe0c27281882782cc3c84a5e1ce6f7220b9e262ecf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07493813c2935fc088626582e38c0921418d574843010479cabc519e64b20895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07493813c2935fc088626582e38c0921418d574843010479cabc519e64b20895->enter($__internal_07493813c2935fc088626582e38c0921418d574843010479cabc519e64b20895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c5eed82e8ad53e82500d6aa307f45ba47b394ef21d2cd60173beced53f78f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5eed82e8ad53e82500d6aa307f45ba47b394ef21d2cd60173beced53f78f2c->enter($__internal_1c5eed82e8ad53e82500d6aa307f45ba47b394ef21d2cd60173beced53f78f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1c5eed82e8ad53e82500d6aa307f45ba47b394ef21d2cd60173beced53f78f2c->leave($__internal_1c5eed82e8ad53e82500d6aa307f45ba47b394ef21d2cd60173beced53f78f2c_prof);

        
        $__internal_07493813c2935fc088626582e38c0921418d574843010479cabc519e64b20895->leave($__internal_07493813c2935fc088626582e38c0921418d574843010479cabc519e64b20895_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1068d6b56ac6117aa62d455bbc508213ac4420f8ab149f577093e3507dd8f340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1068d6b56ac6117aa62d455bbc508213ac4420f8ab149f577093e3507dd8f340->enter($__internal_1068d6b56ac6117aa62d455bbc508213ac4420f8ab149f577093e3507dd8f340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ca916fda520ed413a4a2cf518d206056ff5971db5886ed96fe304bff0c55447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca916fda520ed413a4a2cf518d206056ff5971db5886ed96fe304bff0c55447->enter($__internal_7ca916fda520ed413a4a2cf518d206056ff5971db5886ed96fe304bff0c55447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7ca916fda520ed413a4a2cf518d206056ff5971db5886ed96fe304bff0c55447->leave($__internal_7ca916fda520ed413a4a2cf518d206056ff5971db5886ed96fe304bff0c55447_prof);

        
        $__internal_1068d6b56ac6117aa62d455bbc508213ac4420f8ab149f577093e3507dd8f340->leave($__internal_1068d6b56ac6117aa62d455bbc508213ac4420f8ab149f577093e3507dd8f340_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f651d45d14812a79646a126012bf6fbf5b9d7a6cb775703b075d3cb63b3f90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f651d45d14812a79646a126012bf6fbf5b9d7a6cb775703b075d3cb63b3f90e->enter($__internal_5f651d45d14812a79646a126012bf6fbf5b9d7a6cb775703b075d3cb63b3f90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0ae27e3dca2f2c0e23ff649528f5b8df57181ff92b46bd1c95703bdd345c88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ae27e3dca2f2c0e23ff649528f5b8df57181ff92b46bd1c95703bdd345c88a->enter($__internal_b0ae27e3dca2f2c0e23ff649528f5b8df57181ff92b46bd1c95703bdd345c88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b0ae27e3dca2f2c0e23ff649528f5b8df57181ff92b46bd1c95703bdd345c88a->leave($__internal_b0ae27e3dca2f2c0e23ff649528f5b8df57181ff92b46bd1c95703bdd345c88a_prof);

        
        $__internal_5f651d45d14812a79646a126012bf6fbf5b9d7a6cb775703b075d3cb63b3f90e->leave($__internal_5f651d45d14812a79646a126012bf6fbf5b9d7a6cb775703b075d3cb63b3f90e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/app/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
