<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_1a8db23f25dbf0356b1b5b75662c15cbac4f2ff07e29ee5889f896c2e83c62dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c01fc6f1eaa8eb00e1e209d0de3bcf6884122fa92f1b1bac51bd4b5f08d8f4e = $this->env->getExtension("native_profiler");
        $__internal_6c01fc6f1eaa8eb00e1e209d0de3bcf6884122fa92f1b1bac51bd4b5f08d8f4e->enter($__internal_6c01fc6f1eaa8eb00e1e209d0de3bcf6884122fa92f1b1bac51bd4b5f08d8f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c01fc6f1eaa8eb00e1e209d0de3bcf6884122fa92f1b1bac51bd4b5f08d8f4e->leave($__internal_6c01fc6f1eaa8eb00e1e209d0de3bcf6884122fa92f1b1bac51bd4b5f08d8f4e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11896c80c78561d3f91f26d2d280e5104efab03d01b570f706a4ad504ed85649 = $this->env->getExtension("native_profiler");
        $__internal_11896c80c78561d3f91f26d2d280e5104efab03d01b570f706a4ad504ed85649->enter($__internal_11896c80c78561d3f91f26d2d280e5104efab03d01b570f706a4ad504ed85649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_11896c80c78561d3f91f26d2d280e5104efab03d01b570f706a4ad504ed85649->leave($__internal_11896c80c78561d3f91f26d2d280e5104efab03d01b570f706a4ad504ed85649_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
