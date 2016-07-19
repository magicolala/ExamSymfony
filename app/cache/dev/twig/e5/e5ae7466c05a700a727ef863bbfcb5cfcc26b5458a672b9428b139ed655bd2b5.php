<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d2e9841fa8e12c6c8a50b9869bfcd8f358aade729e5d602f6a9799a420eb9ec0 extends Twig_Template
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
        $__internal_c76a25e1562bccdc7ef4d49263ee560991adcfeb6053e7148925d59af7f82d56 = $this->env->getExtension("native_profiler");
        $__internal_c76a25e1562bccdc7ef4d49263ee560991adcfeb6053e7148925d59af7f82d56->enter($__internal_c76a25e1562bccdc7ef4d49263ee560991adcfeb6053e7148925d59af7f82d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c76a25e1562bccdc7ef4d49263ee560991adcfeb6053e7148925d59af7f82d56->leave($__internal_c76a25e1562bccdc7ef4d49263ee560991adcfeb6053e7148925d59af7f82d56_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
