<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_e729ad8cc436ca552843731e3d54c583f68349f02f166bc99cc248cb850d3f40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_e3c7b336b7c52a56727202ded5a7b39bf5c1a7bb6b713d550f2e0b8ab35c1620 = $this->env->getExtension("native_profiler");
        $__internal_e3c7b336b7c52a56727202ded5a7b39bf5c1a7bb6b713d550f2e0b8ab35c1620->enter($__internal_e3c7b336b7c52a56727202ded5a7b39bf5c1a7bb6b713d550f2e0b8ab35c1620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3c7b336b7c52a56727202ded5a7b39bf5c1a7bb6b713d550f2e0b8ab35c1620->leave($__internal_e3c7b336b7c52a56727202ded5a7b39bf5c1a7bb6b713d550f2e0b8ab35c1620_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08fb1d190f45ad6936e7ab70087728973cc5d1db00fa1d9ef1a5e61990d67bb1 = $this->env->getExtension("native_profiler");
        $__internal_08fb1d190f45ad6936e7ab70087728973cc5d1db00fa1d9ef1a5e61990d67bb1->enter($__internal_08fb1d190f45ad6936e7ab70087728973cc5d1db00fa1d9ef1a5e61990d67bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_08fb1d190f45ad6936e7ab70087728973cc5d1db00fa1d9ef1a5e61990d67bb1->leave($__internal_08fb1d190f45ad6936e7ab70087728973cc5d1db00fa1d9ef1a5e61990d67bb1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
