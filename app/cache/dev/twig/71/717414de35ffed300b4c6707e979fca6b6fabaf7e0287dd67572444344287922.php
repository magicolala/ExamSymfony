<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c533ce79c59bb9dcfeda0e04c350c6136fe12f7798f0f6c76e1e33f222098c68 extends Twig_Template
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
        $__internal_501c4760ea921395efc7381805f1b9d154508a3ddad07eb3f84b57d26db2201e = $this->env->getExtension("native_profiler");
        $__internal_501c4760ea921395efc7381805f1b9d154508a3ddad07eb3f84b57d26db2201e->enter($__internal_501c4760ea921395efc7381805f1b9d154508a3ddad07eb3f84b57d26db2201e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_501c4760ea921395efc7381805f1b9d154508a3ddad07eb3f84b57d26db2201e->leave($__internal_501c4760ea921395efc7381805f1b9d154508a3ddad07eb3f84b57d26db2201e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
