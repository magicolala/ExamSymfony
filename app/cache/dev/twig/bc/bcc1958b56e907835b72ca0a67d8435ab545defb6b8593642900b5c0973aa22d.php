<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_b281df299c6a42b0f415dc93a0f03d0132ba590c215d9364196d254fb30d876a extends Twig_Template
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
        $__internal_3d20d492223e326cd0836b974e25bde362c48d8a54749e7d22d97aa2f53a4f49 = $this->env->getExtension("native_profiler");
        $__internal_3d20d492223e326cd0836b974e25bde362c48d8a54749e7d22d97aa2f53a4f49->enter($__internal_3d20d492223e326cd0836b974e25bde362c48d8a54749e7d22d97aa2f53a4f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3d20d492223e326cd0836b974e25bde362c48d8a54749e7d22d97aa2f53a4f49->leave($__internal_3d20d492223e326cd0836b974e25bde362c48d8a54749e7d22d97aa2f53a4f49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
