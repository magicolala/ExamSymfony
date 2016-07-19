<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_70c7e34983ab34106d78e07671853df09c9dc4afab96037ff44840d0a21e6114 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_189585e3824232300372c6b74e7ec9108222ca6ccd8163a9c9e21acae88340c0 = $this->env->getExtension("native_profiler");
        $__internal_189585e3824232300372c6b74e7ec9108222ca6ccd8163a9c9e21acae88340c0->enter($__internal_189585e3824232300372c6b74e7ec9108222ca6ccd8163a9c9e21acae88340c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_189585e3824232300372c6b74e7ec9108222ca6ccd8163a9c9e21acae88340c0->leave($__internal_189585e3824232300372c6b74e7ec9108222ca6ccd8163a9c9e21acae88340c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26a0b9443499480486c5877a7281bd085ca709d7cbac0281f675c5bf080ee6b3 = $this->env->getExtension("native_profiler");
        $__internal_26a0b9443499480486c5877a7281bd085ca709d7cbac0281f675c5bf080ee6b3->enter($__internal_26a0b9443499480486c5877a7281bd085ca709d7cbac0281f675c5bf080ee6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_26a0b9443499480486c5877a7281bd085ca709d7cbac0281f675c5bf080ee6b3->leave($__internal_26a0b9443499480486c5877a7281bd085ca709d7cbac0281f675c5bf080ee6b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
