<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b24f61287798448449a491b312123073cc5398e52b86c9c8b863fad3f53c8c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_48e4681bbfeb6f9a733d64f226d92cc6f020e24a497d04baafa2b973fe998847 = $this->env->getExtension("native_profiler");
        $__internal_48e4681bbfeb6f9a733d64f226d92cc6f020e24a497d04baafa2b973fe998847->enter($__internal_48e4681bbfeb6f9a733d64f226d92cc6f020e24a497d04baafa2b973fe998847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48e4681bbfeb6f9a733d64f226d92cc6f020e24a497d04baafa2b973fe998847->leave($__internal_48e4681bbfeb6f9a733d64f226d92cc6f020e24a497d04baafa2b973fe998847_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_760bfdadb83388da839a573b6ac4a8b03e2816dcea210850302d0af132443e1f = $this->env->getExtension("native_profiler");
        $__internal_760bfdadb83388da839a573b6ac4a8b03e2816dcea210850302d0af132443e1f->enter($__internal_760bfdadb83388da839a573b6ac4a8b03e2816dcea210850302d0af132443e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_760bfdadb83388da839a573b6ac4a8b03e2816dcea210850302d0af132443e1f->leave($__internal_760bfdadb83388da839a573b6ac4a8b03e2816dcea210850302d0af132443e1f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
