<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_0492c2fc8c2784e4b41d81f9410f40a0239d61d0cae596ccf35e17ca9baf6481 extends Twig_Template
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
        $__internal_c043c15e8fca1e8e1b2e4c07c6517fc01832348f7ec45802984db33f2c84f5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c043c15e8fca1e8e1b2e4c07c6517fc01832348f7ec45802984db33f2c84f5ae->enter($__internal_c043c15e8fca1e8e1b2e4c07c6517fc01832348f7ec45802984db33f2c84f5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_c218cf6433ea115d0d6a6d37e7d55d8842ae9835f60cb0a39fd8a54e89c6d35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c218cf6433ea115d0d6a6d37e7d55d8842ae9835f60cb0a39fd8a54e89c6d35b->enter($__internal_c218cf6433ea115d0d6a6d37e7d55d8842ae9835f60cb0a39fd8a54e89c6d35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? $this->getContext($context, "logs"))), "channel", array(), "any", true, true);
        // line 2
        echo "
<table class=\"logs\">
    <thead>
        <tr>
            <th>Level</th>
            ";
        // line 7
        if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
            echo "<th>Channel</th>";
        }
        // line 8
        echo "            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 14
            echo "        <tr class=\"status-";
            echo ((($this->getAttribute($context["log"], "priority", array()) >= 400)) ? ("error") : (((($this->getAttribute($context["log"], "priority", array()) >= 300)) ? ("warning") : ("normal"))));
            echo "\">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo "</span>
                <span class=\"text-muted newline\">";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
            echo "</span>
            </td>
            ";
            // line 19
            if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
                // line 20
                echo "                <td class=\"text-small text-bold nowrap\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 24
            echo "            <td>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </tbody>
</table>
";
        
        $__internal_c043c15e8fca1e8e1b2e4c07c6517fc01832348f7ec45802984db33f2c84f5ae->leave($__internal_c043c15e8fca1e8e1b2e4c07c6517fc01832348f7ec45802984db33f2c84f5ae_prof);

        
        $__internal_c218cf6433ea115d0d6a6d37e7d55d8842ae9835f60cb0a39fd8a54e89c6d35b->leave($__internal_c218cf6433ea115d0d6a6d37e7d55d8842ae9835f60cb0a39fd8a54e89c6d35b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  75 => 24,  69 => 21,  66 => 20,  64 => 19,  59 => 17,  55 => 16,  49 => 14,  45 => 13,  38 => 8,  34 => 7,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set channel_is_defined = (logs|first).channel is defined %}

<table class=\"logs\">
    <thead>
        <tr>
            <th>Level</th>
            {% if channel_is_defined %}<th>Channel</th>{% endif %}
            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    {% for log in logs %}
        <tr class=\"status-{{ log.priority >= 400 ? 'error' : log.priority >= 300 ? 'warning' : 'normal' }}\">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
            </td>
            {% if channel_is_defined %}
                <td class=\"text-small text-bold nowrap\">
                    {{ log.channel }}
                </td>
            {% endif %}
            <td>{{ log.message|format_log_message(log.context) }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@Twig/Exception/logs.html.twig", "/var/www/html/app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
