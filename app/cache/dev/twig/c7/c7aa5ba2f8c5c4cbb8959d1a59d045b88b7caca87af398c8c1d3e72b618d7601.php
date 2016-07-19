<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_90e8e353e4d85a920786355bdd543a5928df1b26b24c7e3eeb825e5087b683b0 extends Twig_Template
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
        $__internal_8adb92bd80d26c706266d20fcdcf08b5564bf4a5f6d738dba314ccc25dcb25c0 = $this->env->getExtension("native_profiler");
        $__internal_8adb92bd80d26c706266d20fcdcf08b5564bf4a5f6d738dba314ccc25dcb25c0->enter($__internal_8adb92bd80d26c706266d20fcdcf08b5564bf4a5f6d738dba314ccc25dcb25c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8adb92bd80d26c706266d20fcdcf08b5564bf4a5f6d738dba314ccc25dcb25c0->leave($__internal_8adb92bd80d26c706266d20fcdcf08b5564bf4a5f6d738dba314ccc25dcb25c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
