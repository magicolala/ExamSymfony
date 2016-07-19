<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c20bd4cdc01c5205d49e47b398afe177042c7386e6a13ecd02e28806255ed9ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_7a6c19910676e15d0e706c5dda44fc60db42dc73fde09194271037437ce57ebd = $this->env->getExtension("native_profiler");
        $__internal_7a6c19910676e15d0e706c5dda44fc60db42dc73fde09194271037437ce57ebd->enter($__internal_7a6c19910676e15d0e706c5dda44fc60db42dc73fde09194271037437ce57ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a6c19910676e15d0e706c5dda44fc60db42dc73fde09194271037437ce57ebd->leave($__internal_7a6c19910676e15d0e706c5dda44fc60db42dc73fde09194271037437ce57ebd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32f8a14152df1c114cdb37a6f83f48131985e03514737d87d2bef745421a027b = $this->env->getExtension("native_profiler");
        $__internal_32f8a14152df1c114cdb37a6f83f48131985e03514737d87d2bef745421a027b->enter($__internal_32f8a14152df1c114cdb37a6f83f48131985e03514737d87d2bef745421a027b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_32f8a14152df1c114cdb37a6f83f48131985e03514737d87d2bef745421a027b->leave($__internal_32f8a14152df1c114cdb37a6f83f48131985e03514737d87d2bef745421a027b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
