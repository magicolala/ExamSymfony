<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_234c3eb730521fb9b21620a903d49295941fbe9204a2549f51c6e5e106ae643f extends Twig_Template
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
        $__internal_9cd36bfd7ccc93ab97e70f1c2519d17bc928b0d87836dcd831d15fe90b1fbbec = $this->env->getExtension("native_profiler");
        $__internal_9cd36bfd7ccc93ab97e70f1c2519d17bc928b0d87836dcd831d15fe90b1fbbec->enter($__internal_9cd36bfd7ccc93ab97e70f1c2519d17bc928b0d87836dcd831d15fe90b1fbbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9cd36bfd7ccc93ab97e70f1c2519d17bc928b0d87836dcd831d15fe90b1fbbec->leave($__internal_9cd36bfd7ccc93ab97e70f1c2519d17bc928b0d87836dcd831d15fe90b1fbbec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
