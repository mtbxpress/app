<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_898937426ad9c8ed16c05c4de983eea4333303b7009db6b0d23b569fc7fb52eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898937426ad9c8ed16c05c4de983eea4333303b7009db6b0d23b569fc7fb52eb->enter($__internal_898937426ad9c8ed16c05c4de983eea4333303b7009db6b0d23b569fc7fb52eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8ddb930cb9632425164603d0f65b032eaadc07460381ef1d8e1dc2e754a68def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddb930cb9632425164603d0f65b032eaadc07460381ef1d8e1dc2e754a68def->enter($__internal_8ddb930cb9632425164603d0f65b032eaadc07460381ef1d8e1dc2e754a68def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_898937426ad9c8ed16c05c4de983eea4333303b7009db6b0d23b569fc7fb52eb->leave($__internal_898937426ad9c8ed16c05c4de983eea4333303b7009db6b0d23b569fc7fb52eb_prof);

        
        $__internal_8ddb930cb9632425164603d0f65b032eaadc07460381ef1d8e1dc2e754a68def->leave($__internal_8ddb930cb9632425164603d0f65b032eaadc07460381ef1d8e1dc2e754a68def_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_82d54ce2b8790ad3bc0e4b2df163356cec05e905aef4c85c5a469bdd142b4a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d54ce2b8790ad3bc0e4b2df163356cec05e905aef4c85c5a469bdd142b4a1b->enter($__internal_82d54ce2b8790ad3bc0e4b2df163356cec05e905aef4c85c5a469bdd142b4a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db280aa5ef8d88436bd4754514ee0ecd6c14c2c90ed4ce970f9c3dac759a6616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db280aa5ef8d88436bd4754514ee0ecd6c14c2c90ed4ce970f9c3dac759a6616->enter($__internal_db280aa5ef8d88436bd4754514ee0ecd6c14c2c90ed4ce970f9c3dac759a6616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db280aa5ef8d88436bd4754514ee0ecd6c14c2c90ed4ce970f9c3dac759a6616->leave($__internal_db280aa5ef8d88436bd4754514ee0ecd6c14c2c90ed4ce970f9c3dac759a6616_prof);

        
        $__internal_82d54ce2b8790ad3bc0e4b2df163356cec05e905aef4c85c5a469bdd142b4a1b->leave($__internal_82d54ce2b8790ad3bc0e4b2df163356cec05e905aef4c85c5a469bdd142b4a1b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b477d7ce73032ca97ef94031592985101ab841f842984ea4eb63d53a7ba5dc48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b477d7ce73032ca97ef94031592985101ab841f842984ea4eb63d53a7ba5dc48->enter($__internal_b477d7ce73032ca97ef94031592985101ab841f842984ea4eb63d53a7ba5dc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a9ef51b3dc11ef1fc4bbeade0cd43cb3c30048e9ac8739f38187e3712e249d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ef51b3dc11ef1fc4bbeade0cd43cb3c30048e9ac8739f38187e3712e249d20->enter($__internal_a9ef51b3dc11ef1fc4bbeade0cd43cb3c30048e9ac8739f38187e3712e249d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a9ef51b3dc11ef1fc4bbeade0cd43cb3c30048e9ac8739f38187e3712e249d20->leave($__internal_a9ef51b3dc11ef1fc4bbeade0cd43cb3c30048e9ac8739f38187e3712e249d20_prof);

        
        $__internal_b477d7ce73032ca97ef94031592985101ab841f842984ea4eb63d53a7ba5dc48->leave($__internal_b477d7ce73032ca97ef94031592985101ab841f842984ea4eb63d53a7ba5dc48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ef489371f84dce3bfe3505244ac8f27d433f333ff23f9ecc574b5a475f0342c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef489371f84dce3bfe3505244ac8f27d433f333ff23f9ecc574b5a475f0342c->enter($__internal_2ef489371f84dce3bfe3505244ac8f27d433f333ff23f9ecc574b5a475f0342c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f1983ded7c1d2155f244cdf78c87a0c254beee8a7b71d3a819e0bdc71092cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1983ded7c1d2155f244cdf78c87a0c254beee8a7b71d3a819e0bdc71092cf9->enter($__internal_4f1983ded7c1d2155f244cdf78c87a0c254beee8a7b71d3a819e0bdc71092cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f1983ded7c1d2155f244cdf78c87a0c254beee8a7b71d3a819e0bdc71092cf9->leave($__internal_4f1983ded7c1d2155f244cdf78c87a0c254beee8a7b71d3a819e0bdc71092cf9_prof);

        
        $__internal_2ef489371f84dce3bfe3505244ac8f27d433f333ff23f9ecc574b5a475f0342c->leave($__internal_2ef489371f84dce3bfe3505244ac8f27d433f333ff23f9ecc574b5a475f0342c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
