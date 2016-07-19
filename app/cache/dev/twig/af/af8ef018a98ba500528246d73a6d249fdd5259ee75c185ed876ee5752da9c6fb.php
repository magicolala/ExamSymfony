<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7d913ea0c010ad9dc0da83a92803d4e4e9f3770b0c90edf6cd3ff4a89266434c extends Twig_Template
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
        $__internal_cb3fabd093f2f7cf3a92b487cda2625c8b88a15a188bb22d115d5d994aa5ae7c = $this->env->getExtension("native_profiler");
        $__internal_cb3fabd093f2f7cf3a92b487cda2625c8b88a15a188bb22d115d5d994aa5ae7c->enter($__internal_cb3fabd093f2f7cf3a92b487cda2625c8b88a15a188bb22d115d5d994aa5ae7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_cb3fabd093f2f7cf3a92b487cda2625c8b88a15a188bb22d115d5d994aa5ae7c->leave($__internal_cb3fabd093f2f7cf3a92b487cda2625c8b88a15a188bb22d115d5d994aa5ae7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
