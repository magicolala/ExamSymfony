<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_861a4cfc6923e55fb29e5972796e445a315bb2883192622c01a3c5287a7f2b5f extends Twig_Template
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
        $__internal_81580a79a107604969f42b289aebfbe598065f128af52a7c89b397979def3e97 = $this->env->getExtension("native_profiler");
        $__internal_81580a79a107604969f42b289aebfbe598065f128af52a7c89b397979def3e97->enter($__internal_81580a79a107604969f42b289aebfbe598065f128af52a7c89b397979def3e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_81580a79a107604969f42b289aebfbe598065f128af52a7c89b397979def3e97->leave($__internal_81580a79a107604969f42b289aebfbe598065f128af52a7c89b397979def3e97_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
