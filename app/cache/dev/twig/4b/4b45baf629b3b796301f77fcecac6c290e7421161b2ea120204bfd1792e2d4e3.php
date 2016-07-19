<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_81f7d33e486d506b74a0bc6dcd17cb58437268fb7a5d1078d4b0cd1492363264 extends Twig_Template
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
        $__internal_4865d4d93f29088e08598fc8e9a6611fc99b19507d3c72c2d049fdb8d318050b = $this->env->getExtension("native_profiler");
        $__internal_4865d4d93f29088e08598fc8e9a6611fc99b19507d3c72c2d049fdb8d318050b->enter($__internal_4865d4d93f29088e08598fc8e9a6611fc99b19507d3c72c2d049fdb8d318050b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4865d4d93f29088e08598fc8e9a6611fc99b19507d3c72c2d049fdb8d318050b->leave($__internal_4865d4d93f29088e08598fc8e9a6611fc99b19507d3c72c2d049fdb8d318050b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
