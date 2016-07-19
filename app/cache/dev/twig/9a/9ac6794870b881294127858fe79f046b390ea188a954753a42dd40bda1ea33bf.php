<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5fac08caa0169264b5242513cec5714173f421b4617db25ce76c9c059d6f75d8 extends Twig_Template
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
        $__internal_8b99e37bcdae45f72eab8c650b1affe1288870213b2cfed2b95ef5137fa881d1 = $this->env->getExtension("native_profiler");
        $__internal_8b99e37bcdae45f72eab8c650b1affe1288870213b2cfed2b95ef5137fa881d1->enter($__internal_8b99e37bcdae45f72eab8c650b1affe1288870213b2cfed2b95ef5137fa881d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8b99e37bcdae45f72eab8c650b1affe1288870213b2cfed2b95ef5137fa881d1->leave($__internal_8b99e37bcdae45f72eab8c650b1affe1288870213b2cfed2b95ef5137fa881d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
