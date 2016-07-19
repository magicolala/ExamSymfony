<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c765a82b1e6e9028f867a39f14515a6283ba6539081456c4da2463fee00eb0dc extends Twig_Template
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
        $__internal_0f7016dc4a4784069f5d7fd3d4bc76276dd28d23a13dab2e3104a0c5e7e3344d = $this->env->getExtension("native_profiler");
        $__internal_0f7016dc4a4784069f5d7fd3d4bc76276dd28d23a13dab2e3104a0c5e7e3344d->enter($__internal_0f7016dc4a4784069f5d7fd3d4bc76276dd28d23a13dab2e3104a0c5e7e3344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0f7016dc4a4784069f5d7fd3d4bc76276dd28d23a13dab2e3104a0c5e7e3344d->leave($__internal_0f7016dc4a4784069f5d7fd3d4bc76276dd28d23a13dab2e3104a0c5e7e3344d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
