<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_855f3ac23b2be31e5f9e8ad07202d1076c7071db9665765d63e73a5d3c7b3630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_be8ed630f877cc675244f63adee4c9846d6642a3c9e2c9c91fd16a95ea6eac7f = $this->env->getExtension("native_profiler");
        $__internal_be8ed630f877cc675244f63adee4c9846d6642a3c9e2c9c91fd16a95ea6eac7f->enter($__internal_be8ed630f877cc675244f63adee4c9846d6642a3c9e2c9c91fd16a95ea6eac7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be8ed630f877cc675244f63adee4c9846d6642a3c9e2c9c91fd16a95ea6eac7f->leave($__internal_be8ed630f877cc675244f63adee4c9846d6642a3c9e2c9c91fd16a95ea6eac7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2eea78c784c33a7090e3ef470769a0a97de230a7c758fa75ce574da77311976d = $this->env->getExtension("native_profiler");
        $__internal_2eea78c784c33a7090e3ef470769a0a97de230a7c758fa75ce574da77311976d->enter($__internal_2eea78c784c33a7090e3ef470769a0a97de230a7c758fa75ce574da77311976d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2eea78c784c33a7090e3ef470769a0a97de230a7c758fa75ce574da77311976d->leave($__internal_2eea78c784c33a7090e3ef470769a0a97de230a7c758fa75ce574da77311976d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
