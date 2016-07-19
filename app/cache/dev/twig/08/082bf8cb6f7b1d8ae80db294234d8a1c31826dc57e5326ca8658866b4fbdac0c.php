<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_4eb9aafc1d1ebc79263945772153c2407217fc8ff6aafbb7658f12f6acf27a28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_b734a5792390cfd8a32eec35a848169513f5960addf349bf1751d17f6828a116 = $this->env->getExtension("native_profiler");
        $__internal_b734a5792390cfd8a32eec35a848169513f5960addf349bf1751d17f6828a116->enter($__internal_b734a5792390cfd8a32eec35a848169513f5960addf349bf1751d17f6828a116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b734a5792390cfd8a32eec35a848169513f5960addf349bf1751d17f6828a116->leave($__internal_b734a5792390cfd8a32eec35a848169513f5960addf349bf1751d17f6828a116_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b0245595c3b9961d52d58dd48e944c9caff9316bc731bd7ea04f3f8ed845e98 = $this->env->getExtension("native_profiler");
        $__internal_1b0245595c3b9961d52d58dd48e944c9caff9316bc731bd7ea04f3f8ed845e98->enter($__internal_1b0245595c3b9961d52d58dd48e944c9caff9316bc731bd7ea04f3f8ed845e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1b0245595c3b9961d52d58dd48e944c9caff9316bc731bd7ea04f3f8ed845e98->leave($__internal_1b0245595c3b9961d52d58dd48e944c9caff9316bc731bd7ea04f3f8ed845e98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
