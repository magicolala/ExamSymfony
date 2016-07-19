<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_903b6d94ab68484fd510486b79d94fb987e947cf16f371d2c3c4119f06084055 extends Twig_Template
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
        $__internal_9b32dfb1344201a9207fcc7d6e590b22a075cd125e8c8c7c7286410bd2872225 = $this->env->getExtension("native_profiler");
        $__internal_9b32dfb1344201a9207fcc7d6e590b22a075cd125e8c8c7c7286410bd2872225->enter($__internal_9b32dfb1344201a9207fcc7d6e590b22a075cd125e8c8c7c7286410bd2872225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9b32dfb1344201a9207fcc7d6e590b22a075cd125e8c8c7c7286410bd2872225->leave($__internal_9b32dfb1344201a9207fcc7d6e590b22a075cd125e8c8c7c7286410bd2872225_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
