<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0bd1904daf32018f5ba1e93ef666915a028202048c9d05268d0fb8be706972ff extends Twig_Template
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
        $__internal_35e9531ffaa17c395b2546ca08cb7febefe4587df2415d62a8f00966efe1ff99 = $this->env->getExtension("native_profiler");
        $__internal_35e9531ffaa17c395b2546ca08cb7febefe4587df2415d62a8f00966efe1ff99->enter($__internal_35e9531ffaa17c395b2546ca08cb7febefe4587df2415d62a8f00966efe1ff99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_35e9531ffaa17c395b2546ca08cb7febefe4587df2415d62a8f00966efe1ff99->leave($__internal_35e9531ffaa17c395b2546ca08cb7febefe4587df2415d62a8f00966efe1ff99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
