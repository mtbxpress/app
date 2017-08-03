<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d2217564a15161dc9c3b01cc3c5886b1ba7fac250bee2461f56b7412168615b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2217564a15161dc9c3b01cc3c5886b1ba7fac250bee2461f56b7412168615b->enter($__internal_8d2217564a15161dc9c3b01cc3c5886b1ba7fac250bee2461f56b7412168615b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6fbc3a900ea09e7da059d496e78a77586a6503cea5eb1a7cdcb3eb264d7feb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbc3a900ea09e7da059d496e78a77586a6503cea5eb1a7cdcb3eb264d7feb01->enter($__internal_6fbc3a900ea09e7da059d496e78a77586a6503cea5eb1a7cdcb3eb264d7feb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>

";
        
        $__internal_8d2217564a15161dc9c3b01cc3c5886b1ba7fac250bee2461f56b7412168615b->leave($__internal_8d2217564a15161dc9c3b01cc3c5886b1ba7fac250bee2461f56b7412168615b_prof);

        
        $__internal_6fbc3a900ea09e7da059d496e78a77586a6503cea5eb1a7cdcb3eb264d7feb01->leave($__internal_6fbc3a900ea09e7da059d496e78a77586a6503cea5eb1a7cdcb3eb264d7feb01_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f9e2639f15c54e78837d0606bf0216168fea148ee3432a20669dc8ab958944f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9e2639f15c54e78837d0606bf0216168fea148ee3432a20669dc8ab958944f->enter($__internal_1f9e2639f15c54e78837d0606bf0216168fea148ee3432a20669dc8ab958944f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22abd372393f5e34238ff585dd418b2f1f85363bbabb27445d00bf43f1994073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22abd372393f5e34238ff585dd418b2f1f85363bbabb27445d00bf43f1994073->enter($__internal_22abd372393f5e34238ff585dd418b2f1f85363bbabb27445d00bf43f1994073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_22abd372393f5e34238ff585dd418b2f1f85363bbabb27445d00bf43f1994073->leave($__internal_22abd372393f5e34238ff585dd418b2f1f85363bbabb27445d00bf43f1994073_prof);

        
        $__internal_1f9e2639f15c54e78837d0606bf0216168fea148ee3432a20669dc8ab958944f->leave($__internal_1f9e2639f15c54e78837d0606bf0216168fea148ee3432a20669dc8ab958944f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02858dff18824d5fcae09ffcae3f70fb2cc5cc835127de1b49a85d7bb32022ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02858dff18824d5fcae09ffcae3f70fb2cc5cc835127de1b49a85d7bb32022ad->enter($__internal_02858dff18824d5fcae09ffcae3f70fb2cc5cc835127de1b49a85d7bb32022ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c897c3d618f705b80bfa19d3c50df0ba586e9e00214ca84bc88688890e31dc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c897c3d618f705b80bfa19d3c50df0ba586e9e00214ca84bc88688890e31dc0f->enter($__internal_c897c3d618f705b80bfa19d3c50df0ba586e9e00214ca84bc88688890e31dc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c897c3d618f705b80bfa19d3c50df0ba586e9e00214ca84bc88688890e31dc0f->leave($__internal_c897c3d618f705b80bfa19d3c50df0ba586e9e00214ca84bc88688890e31dc0f_prof);

        
        $__internal_02858dff18824d5fcae09ffcae3f70fb2cc5cc835127de1b49a85d7bb32022ad->leave($__internal_02858dff18824d5fcae09ffcae3f70fb2cc5cc835127de1b49a85d7bb32022ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0c62e6978c3fcef11a6f43c357c7576216b869bb0553c4a1c1e0a09c0870065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c62e6978c3fcef11a6f43c357c7576216b869bb0553c4a1c1e0a09c0870065->enter($__internal_b0c62e6978c3fcef11a6f43c357c7576216b869bb0553c4a1c1e0a09c0870065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a78aa740c18d2c186d292de0fb3f85db30c36bff7d27707caa7fdf32beb67123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78aa740c18d2c186d292de0fb3f85db30c36bff7d27707caa7fdf32beb67123->enter($__internal_a78aa740c18d2c186d292de0fb3f85db30c36bff7d27707caa7fdf32beb67123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a78aa740c18d2c186d292de0fb3f85db30c36bff7d27707caa7fdf32beb67123->leave($__internal_a78aa740c18d2c186d292de0fb3f85db30c36bff7d27707caa7fdf32beb67123_prof);

        
        $__internal_b0c62e6978c3fcef11a6f43c357c7576216b869bb0553c4a1c1e0a09c0870065->leave($__internal_b0c62e6978c3fcef11a6f43c357c7576216b869bb0553c4a1c1e0a09c0870065_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b484ac1b2e30ea07abe95fa4db727d0915f4262e7f4ed8962c8be1e7015efbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b484ac1b2e30ea07abe95fa4db727d0915f4262e7f4ed8962c8be1e7015efbcc->enter($__internal_b484ac1b2e30ea07abe95fa4db727d0915f4262e7f4ed8962c8be1e7015efbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_438279b6a76842dd6b31b32f9d4ab79df07673b1adb76bec6db9b12e6b08971f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438279b6a76842dd6b31b32f9d4ab79df07673b1adb76bec6db9b12e6b08971f->enter($__internal_438279b6a76842dd6b31b32f9d4ab79df07673b1adb76bec6db9b12e6b08971f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_438279b6a76842dd6b31b32f9d4ab79df07673b1adb76bec6db9b12e6b08971f->leave($__internal_438279b6a76842dd6b31b32f9d4ab79df07673b1adb76bec6db9b12e6b08971f_prof);

        
        $__internal_b484ac1b2e30ea07abe95fa4db727d0915f4262e7f4ed8962c8be1e7015efbcc->leave($__internal_b484ac1b2e30ea07abe95fa4db727d0915f4262e7f4ed8962c8be1e7015efbcc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 11,  101 => 10,  84 => 6,  66 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>

", "base.html.twig", "/var/www/html/app/app/app/Resources/views/base.html.twig");
    }
}
