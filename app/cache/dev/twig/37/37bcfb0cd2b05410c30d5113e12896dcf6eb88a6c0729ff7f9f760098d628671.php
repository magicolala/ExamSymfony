<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_db93c4c0d2689fd710018e684e642ffe16b78115ef2911f551684061040aa59a extends Twig_Template
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
        $__internal_72c0e020ba88521818774996f123fb64530a99c77aa1c8a3b8a31c78805eb919 = $this->env->getExtension("native_profiler");
        $__internal_72c0e020ba88521818774996f123fb64530a99c77aa1c8a3b8a31c78805eb919->enter($__internal_72c0e020ba88521818774996f123fb64530a99c77aa1c8a3b8a31c78805eb919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_72c0e020ba88521818774996f123fb64530a99c77aa1c8a3b8a31c78805eb919->leave($__internal_72c0e020ba88521818774996f123fb64530a99c77aa1c8a3b8a31c78805eb919_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
