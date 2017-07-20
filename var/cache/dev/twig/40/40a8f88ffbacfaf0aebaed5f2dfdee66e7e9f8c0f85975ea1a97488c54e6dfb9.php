<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
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
        $__internal_137b318f6531eb62df68580ad9e54a71a82d8beaec8a2e9a83ddbb2c60282085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137b318f6531eb62df68580ad9e54a71a82d8beaec8a2e9a83ddbb2c60282085->enter($__internal_137b318f6531eb62df68580ad9e54a71a82d8beaec8a2e9a83ddbb2c60282085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b15b99ae268f6f17a14ee5c816e3d6b6ef512c432999bf9a743cfc58b0658bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15b99ae268f6f17a14ee5c816e3d6b6ef512c432999bf9a743cfc58b0658bd9->enter($__internal_b15b99ae268f6f17a14ee5c816e3d6b6ef512c432999bf9a743cfc58b0658bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_137b318f6531eb62df68580ad9e54a71a82d8beaec8a2e9a83ddbb2c60282085->leave($__internal_137b318f6531eb62df68580ad9e54a71a82d8beaec8a2e9a83ddbb2c60282085_prof);

        
        $__internal_b15b99ae268f6f17a14ee5c816e3d6b6ef512c432999bf9a743cfc58b0658bd9->leave($__internal_b15b99ae268f6f17a14ee5c816e3d6b6ef512c432999bf9a743cfc58b0658bd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9230f091637456c1c8ec1034a1a5e2aca3ec5e8282e0eb8f3cded4d97fabf73f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9230f091637456c1c8ec1034a1a5e2aca3ec5e8282e0eb8f3cded4d97fabf73f->enter($__internal_9230f091637456c1c8ec1034a1a5e2aca3ec5e8282e0eb8f3cded4d97fabf73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a7b61e2f6e35a361b7bd7e1ffa2c2b2ae35733effdf7523aad50e0647bbe6276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b61e2f6e35a361b7bd7e1ffa2c2b2ae35733effdf7523aad50e0647bbe6276->enter($__internal_a7b61e2f6e35a361b7bd7e1ffa2c2b2ae35733effdf7523aad50e0647bbe6276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a7b61e2f6e35a361b7bd7e1ffa2c2b2ae35733effdf7523aad50e0647bbe6276->leave($__internal_a7b61e2f6e35a361b7bd7e1ffa2c2b2ae35733effdf7523aad50e0647bbe6276_prof);

        
        $__internal_9230f091637456c1c8ec1034a1a5e2aca3ec5e8282e0eb8f3cded4d97fabf73f->leave($__internal_9230f091637456c1c8ec1034a1a5e2aca3ec5e8282e0eb8f3cded4d97fabf73f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3647918de5fb24e220167046591671975fc1e4b949b2f3fdecae480c8eaa08dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3647918de5fb24e220167046591671975fc1e4b949b2f3fdecae480c8eaa08dd->enter($__internal_3647918de5fb24e220167046591671975fc1e4b949b2f3fdecae480c8eaa08dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b7c4895e975b1ad209f2136fc1fce12dbb5eac33ad3bc774e5aef3172064f9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c4895e975b1ad209f2136fc1fce12dbb5eac33ad3bc774e5aef3172064f9f3->enter($__internal_b7c4895e975b1ad209f2136fc1fce12dbb5eac33ad3bc774e5aef3172064f9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b7c4895e975b1ad209f2136fc1fce12dbb5eac33ad3bc774e5aef3172064f9f3->leave($__internal_b7c4895e975b1ad209f2136fc1fce12dbb5eac33ad3bc774e5aef3172064f9f3_prof);

        
        $__internal_3647918de5fb24e220167046591671975fc1e4b949b2f3fdecae480c8eaa08dd->leave($__internal_3647918de5fb24e220167046591671975fc1e4b949b2f3fdecae480c8eaa08dd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b5d100edf04263f56961438675048af36245be19f0d8109871a3944fca6d80b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5d100edf04263f56961438675048af36245be19f0d8109871a3944fca6d80b->enter($__internal_7b5d100edf04263f56961438675048af36245be19f0d8109871a3944fca6d80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c2db8fc6d45b28286db9874d747e74afc5720b9e6ea0c952c03e6a5fab2fce1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2db8fc6d45b28286db9874d747e74afc5720b9e6ea0c952c03e6a5fab2fce1b->enter($__internal_c2db8fc6d45b28286db9874d747e74afc5720b9e6ea0c952c03e6a5fab2fce1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c2db8fc6d45b28286db9874d747e74afc5720b9e6ea0c952c03e6a5fab2fce1b->leave($__internal_c2db8fc6d45b28286db9874d747e74afc5720b9e6ea0c952c03e6a5fab2fce1b_prof);

        
        $__internal_7b5d100edf04263f56961438675048af36245be19f0d8109871a3944fca6d80b->leave($__internal_7b5d100edf04263f56961438675048af36245be19f0d8109871a3944fca6d80b_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
