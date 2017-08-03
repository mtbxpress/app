<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
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
        $__internal_ae54224728ede93c31fe91695bb548175d4efbe13533d016ac8cc564b8f2400f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae54224728ede93c31fe91695bb548175d4efbe13533d016ac8cc564b8f2400f->enter($__internal_ae54224728ede93c31fe91695bb548175d4efbe13533d016ac8cc564b8f2400f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6a34d324f8477eb0f966cfea87cabfd424785e63a050c4170dee3532472e3342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a34d324f8477eb0f966cfea87cabfd424785e63a050c4170dee3532472e3342->enter($__internal_6a34d324f8477eb0f966cfea87cabfd424785e63a050c4170dee3532472e3342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae54224728ede93c31fe91695bb548175d4efbe13533d016ac8cc564b8f2400f->leave($__internal_ae54224728ede93c31fe91695bb548175d4efbe13533d016ac8cc564b8f2400f_prof);

        
        $__internal_6a34d324f8477eb0f966cfea87cabfd424785e63a050c4170dee3532472e3342->leave($__internal_6a34d324f8477eb0f966cfea87cabfd424785e63a050c4170dee3532472e3342_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08a3ca85433989651701c6bf3ed9e10f6612864e02c1053f09f8811fdaab8832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a3ca85433989651701c6bf3ed9e10f6612864e02c1053f09f8811fdaab8832->enter($__internal_08a3ca85433989651701c6bf3ed9e10f6612864e02c1053f09f8811fdaab8832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_beea0a521cd73e839643e5559a8041e3a17650758f6e0187da8a3e0a7adfb0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beea0a521cd73e839643e5559a8041e3a17650758f6e0187da8a3e0a7adfb0af->enter($__internal_beea0a521cd73e839643e5559a8041e3a17650758f6e0187da8a3e0a7adfb0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_beea0a521cd73e839643e5559a8041e3a17650758f6e0187da8a3e0a7adfb0af->leave($__internal_beea0a521cd73e839643e5559a8041e3a17650758f6e0187da8a3e0a7adfb0af_prof);

        
        $__internal_08a3ca85433989651701c6bf3ed9e10f6612864e02c1053f09f8811fdaab8832->leave($__internal_08a3ca85433989651701c6bf3ed9e10f6612864e02c1053f09f8811fdaab8832_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5b05ff3038b6d21f123ebd2a6635644a1fc69c20e4706cde91cc01f71faf9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b05ff3038b6d21f123ebd2a6635644a1fc69c20e4706cde91cc01f71faf9c9->enter($__internal_b5b05ff3038b6d21f123ebd2a6635644a1fc69c20e4706cde91cc01f71faf9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0afe1e8abc16930c346bc8233ef9765b3fd3e38d2781141bda16a97228ccdfb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afe1e8abc16930c346bc8233ef9765b3fd3e38d2781141bda16a97228ccdfb7->enter($__internal_0afe1e8abc16930c346bc8233ef9765b3fd3e38d2781141bda16a97228ccdfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0afe1e8abc16930c346bc8233ef9765b3fd3e38d2781141bda16a97228ccdfb7->leave($__internal_0afe1e8abc16930c346bc8233ef9765b3fd3e38d2781141bda16a97228ccdfb7_prof);

        
        $__internal_b5b05ff3038b6d21f123ebd2a6635644a1fc69c20e4706cde91cc01f71faf9c9->leave($__internal_b5b05ff3038b6d21f123ebd2a6635644a1fc69c20e4706cde91cc01f71faf9c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d475576a56cc60b8a69765b7d62363e13d959ea63138766acd0aeb461fc91fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d475576a56cc60b8a69765b7d62363e13d959ea63138766acd0aeb461fc91fd->enter($__internal_0d475576a56cc60b8a69765b7d62363e13d959ea63138766acd0aeb461fc91fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_71b703ae6434871e72666b9e128d40c40bc21c244bae327f76815c2abcb5fe9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b703ae6434871e72666b9e128d40c40bc21c244bae327f76815c2abcb5fe9d->enter($__internal_71b703ae6434871e72666b9e128d40c40bc21c244bae327f76815c2abcb5fe9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_71b703ae6434871e72666b9e128d40c40bc21c244bae327f76815c2abcb5fe9d->leave($__internal_71b703ae6434871e72666b9e128d40c40bc21c244bae327f76815c2abcb5fe9d_prof);

        
        $__internal_0d475576a56cc60b8a69765b7d62363e13d959ea63138766acd0aeb461fc91fd->leave($__internal_0d475576a56cc60b8a69765b7d62363e13d959ea63138766acd0aeb461fc91fd_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/app/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
