<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_b5cfe3fb323645ccc65e97690328557955b59a1b5f60ed5c1ce04d8494b01cf9 extends Twig_Template
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
        $__internal_3239b84caf191cb5ad4f17eae43aecc7f62d369ddacefebf437883071fdc7561 = $this->env->getExtension("native_profiler");
        $__internal_3239b84caf191cb5ad4f17eae43aecc7f62d369ddacefebf437883071fdc7561->enter($__internal_3239b84caf191cb5ad4f17eae43aecc7f62d369ddacefebf437883071fdc7561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3239b84caf191cb5ad4f17eae43aecc7f62d369ddacefebf437883071fdc7561->leave($__internal_3239b84caf191cb5ad4f17eae43aecc7f62d369ddacefebf437883071fdc7561_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
