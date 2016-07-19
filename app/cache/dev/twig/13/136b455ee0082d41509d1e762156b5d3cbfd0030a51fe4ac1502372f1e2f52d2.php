<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6e774aeb6c3afb275eac0ec2749bb7a6c68bfe8d62179ac90fbc49a121403309 extends Twig_Template
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
        $__internal_af9ec76b9b26a2fdbeb81093d58ef7d29ffd2cafbaebd62851c0be840b2ca7f9 = $this->env->getExtension("native_profiler");
        $__internal_af9ec76b9b26a2fdbeb81093d58ef7d29ffd2cafbaebd62851c0be840b2ca7f9->enter($__internal_af9ec76b9b26a2fdbeb81093d58ef7d29ffd2cafbaebd62851c0be840b2ca7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_af9ec76b9b26a2fdbeb81093d58ef7d29ffd2cafbaebd62851c0be840b2ca7f9->leave($__internal_af9ec76b9b26a2fdbeb81093d58ef7d29ffd2cafbaebd62851c0be840b2ca7f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
