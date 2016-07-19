<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_2639cc578810425620e5256dfad2dcb09792607646d133246b6beef1fb1198f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_557e647c49d4196d1f0db733c94edfe21b0d576e5a0c30059d118f21ca540ab1 = $this->env->getExtension("native_profiler");
        $__internal_557e647c49d4196d1f0db733c94edfe21b0d576e5a0c30059d118f21ca540ab1->enter($__internal_557e647c49d4196d1f0db733c94edfe21b0d576e5a0c30059d118f21ca540ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_557e647c49d4196d1f0db733c94edfe21b0d576e5a0c30059d118f21ca540ab1->leave($__internal_557e647c49d4196d1f0db733c94edfe21b0d576e5a0c30059d118f21ca540ab1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_734096b8663dd8d4712d55f5b36c334a151170a3d8675be16ed43f07ebac5e8a = $this->env->getExtension("native_profiler");
        $__internal_734096b8663dd8d4712d55f5b36c334a151170a3d8675be16ed43f07ebac5e8a->enter($__internal_734096b8663dd8d4712d55f5b36c334a151170a3d8675be16ed43f07ebac5e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_734096b8663dd8d4712d55f5b36c334a151170a3d8675be16ed43f07ebac5e8a->leave($__internal_734096b8663dd8d4712d55f5b36c334a151170a3d8675be16ed43f07ebac5e8a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
