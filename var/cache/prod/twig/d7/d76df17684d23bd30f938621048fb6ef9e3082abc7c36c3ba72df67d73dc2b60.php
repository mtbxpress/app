<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_75f055f82c081197d7407f1528b1c1c48c0d16adf1ee93978320201a8524a8db extends Twig_Template
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
        // line 1
        echo "<!-- Me he creado carpetas nuevas app/Resources/views/-TwigBundles-/-views-/-Exception-/error.html.twig 

he copiado la pagina de error para modificarlo a mi gusto de la ruta
vendor/symfony/symfony/Bundle/TwigBundle/Resources/views/exception  -->

<!DOCTYPE html>
<html>
    <head>
     <!--   <meta charset=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" /> -->
        <title>Pagina de error MIA</title>
    </head>
    <body>
        <h1>Pagina no encontrada</h1>
        <h2>Te has equivocaoooooo</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error.html.twig", "/var/www/html/app/app/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
