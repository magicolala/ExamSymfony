<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_fc63468691332de379a3f405ee704b738418a21de53eb3013f7e0f2c4b2142b1 extends Twig_Template
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
        $__internal_aeaff4c74d1e98d64ecab4a623483e84345e5ba4a0ca0406eca9a7fbb7f7972d = $this->env->getExtension("native_profiler");
        $__internal_aeaff4c74d1e98d64ecab4a623483e84345e5ba4a0ca0406eca9a7fbb7f7972d->enter($__internal_aeaff4c74d1e98d64ecab4a623483e84345e5ba4a0ca0406eca9a7fbb7f7972d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_aeaff4c74d1e98d64ecab4a623483e84345e5ba4a0ca0406eca9a7fbb7f7972d->leave($__internal_aeaff4c74d1e98d64ecab4a623483e84345e5ba4a0ca0406eca9a7fbb7f7972d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
