<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_c9528d59063b7c5f3eaaf449775d038c27088cb5e22816166a0f636134f6c1c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_23f49de803aac1d428ff3aa375291faab55c4292fdfbd7c336cedd991722c046 = $this->env->getExtension("native_profiler");
        $__internal_23f49de803aac1d428ff3aa375291faab55c4292fdfbd7c336cedd991722c046->enter($__internal_23f49de803aac1d428ff3aa375291faab55c4292fdfbd7c336cedd991722c046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23f49de803aac1d428ff3aa375291faab55c4292fdfbd7c336cedd991722c046->leave($__internal_23f49de803aac1d428ff3aa375291faab55c4292fdfbd7c336cedd991722c046_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c03715eca54640dd77c04ce6cda476dae9d825d372703fe2f38a1c0e919f0fed = $this->env->getExtension("native_profiler");
        $__internal_c03715eca54640dd77c04ce6cda476dae9d825d372703fe2f38a1c0e919f0fed->enter($__internal_c03715eca54640dd77c04ce6cda476dae9d825d372703fe2f38a1c0e919f0fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_c03715eca54640dd77c04ce6cda476dae9d825d372703fe2f38a1c0e919f0fed->leave($__internal_c03715eca54640dd77c04ce6cda476dae9d825d372703fe2f38a1c0e919f0fed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
