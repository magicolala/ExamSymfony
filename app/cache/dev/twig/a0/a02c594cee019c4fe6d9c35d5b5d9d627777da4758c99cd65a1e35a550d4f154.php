<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b111737d381d70274db85f184e73c7792e20686d245aa0277a7e960850373c7a extends Twig_Template
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
        $__internal_2efebb62c7e841f2469dd933294994da998087e6fbd1ebb47aaabb058ff9bb93 = $this->env->getExtension("native_profiler");
        $__internal_2efebb62c7e841f2469dd933294994da998087e6fbd1ebb47aaabb058ff9bb93->enter($__internal_2efebb62c7e841f2469dd933294994da998087e6fbd1ebb47aaabb058ff9bb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2efebb62c7e841f2469dd933294994da998087e6fbd1ebb47aaabb058ff9bb93->leave($__internal_2efebb62c7e841f2469dd933294994da998087e6fbd1ebb47aaabb058ff9bb93_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
