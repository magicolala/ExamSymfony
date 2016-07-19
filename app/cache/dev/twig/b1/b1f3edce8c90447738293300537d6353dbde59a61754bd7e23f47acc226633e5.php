<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0470436778d2bf9a32bea616fcd9688e19a797a715ab9048ce25388012f6a3a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a822657e94dbe22c5aeb5a267057c7ae1cad715c149a27ed97bb156ddd692e2f = $this->env->getExtension("native_profiler");
        $__internal_a822657e94dbe22c5aeb5a267057c7ae1cad715c149a27ed97bb156ddd692e2f->enter($__internal_a822657e94dbe22c5aeb5a267057c7ae1cad715c149a27ed97bb156ddd692e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a822657e94dbe22c5aeb5a267057c7ae1cad715c149a27ed97bb156ddd692e2f->leave($__internal_a822657e94dbe22c5aeb5a267057c7ae1cad715c149a27ed97bb156ddd692e2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_172de504233d3e53960b4f786e7ee555823adac970ad5ed2de031dec86c4f796 = $this->env->getExtension("native_profiler");
        $__internal_172de504233d3e53960b4f786e7ee555823adac970ad5ed2de031dec86c4f796->enter($__internal_172de504233d3e53960b4f786e7ee555823adac970ad5ed2de031dec86c4f796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_172de504233d3e53960b4f786e7ee555823adac970ad5ed2de031dec86c4f796->leave($__internal_172de504233d3e53960b4f786e7ee555823adac970ad5ed2de031dec86c4f796_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
