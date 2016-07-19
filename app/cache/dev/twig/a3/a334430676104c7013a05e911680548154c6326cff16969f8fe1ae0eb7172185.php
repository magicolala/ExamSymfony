<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0836fad7e40f0c9a5ec41d6b2b7dec8dea48a93b466b1c6dd9c9a7dcc27c8039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_cb2f5469172edfbb23f49e748a1648ef11ee6fcf7da028392e5ebc526c8bc71f = $this->env->getExtension("native_profiler");
        $__internal_cb2f5469172edfbb23f49e748a1648ef11ee6fcf7da028392e5ebc526c8bc71f->enter($__internal_cb2f5469172edfbb23f49e748a1648ef11ee6fcf7da028392e5ebc526c8bc71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb2f5469172edfbb23f49e748a1648ef11ee6fcf7da028392e5ebc526c8bc71f->leave($__internal_cb2f5469172edfbb23f49e748a1648ef11ee6fcf7da028392e5ebc526c8bc71f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a849f1f6f4d565129a539e130100b8c1c0329fbe111c9d020ab972d18faacbfc = $this->env->getExtension("native_profiler");
        $__internal_a849f1f6f4d565129a539e130100b8c1c0329fbe111c9d020ab972d18faacbfc->enter($__internal_a849f1f6f4d565129a539e130100b8c1c0329fbe111c9d020ab972d18faacbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a849f1f6f4d565129a539e130100b8c1c0329fbe111c9d020ab972d18faacbfc->leave($__internal_a849f1f6f4d565129a539e130100b8c1c0329fbe111c9d020ab972d18faacbfc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
