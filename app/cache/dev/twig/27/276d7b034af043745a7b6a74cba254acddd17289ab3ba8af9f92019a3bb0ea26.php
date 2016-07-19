<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f0ea63fec6e3bbfe27d0e4416c8addad73a98190289d94a667866cb60431a2c6 extends Twig_Template
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
        $__internal_e6476ee21fc1700bcf928fa6c52d28fd5d100989e5fc46c8fae36abe34465694 = $this->env->getExtension("native_profiler");
        $__internal_e6476ee21fc1700bcf928fa6c52d28fd5d100989e5fc46c8fae36abe34465694->enter($__internal_e6476ee21fc1700bcf928fa6c52d28fd5d100989e5fc46c8fae36abe34465694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e6476ee21fc1700bcf928fa6c52d28fd5d100989e5fc46c8fae36abe34465694->leave($__internal_e6476ee21fc1700bcf928fa6c52d28fd5d100989e5fc46c8fae36abe34465694_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
