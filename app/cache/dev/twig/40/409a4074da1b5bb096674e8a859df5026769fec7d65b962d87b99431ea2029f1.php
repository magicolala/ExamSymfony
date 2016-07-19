<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_4bf14beaf0b0541eab07130d014a0b0867bfb8d094acc3918ce9bb651f85be4c extends Twig_Template
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
        $__internal_ddad3b0c380d90171d1844f15392adb6919942d585ec2ce8c793431a2025b947 = $this->env->getExtension("native_profiler");
        $__internal_ddad3b0c380d90171d1844f15392adb6919942d585ec2ce8c793431a2025b947->enter($__internal_ddad3b0c380d90171d1844f15392adb6919942d585ec2ce8c793431a2025b947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_ddad3b0c380d90171d1844f15392adb6919942d585ec2ce8c793431a2025b947->leave($__internal_ddad3b0c380d90171d1844f15392adb6919942d585ec2ce8c793431a2025b947_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
