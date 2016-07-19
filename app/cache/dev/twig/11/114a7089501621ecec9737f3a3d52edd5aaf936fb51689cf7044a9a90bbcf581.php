<?php

/* @Frontend/Default/article2.html.twig */
class __TwigTemplate_0db028d64a150b634be0601a10161ff4071fe1b464fe89201cb69098ced010c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Frontend/Default/article2.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a4b07f344b2db702b42d84f857fbd04922b373198e242330935ef65d1d564e1 = $this->env->getExtension("native_profiler");
        $__internal_2a4b07f344b2db702b42d84f857fbd04922b373198e242330935ef65d1d564e1->enter($__internal_2a4b07f344b2db702b42d84f857fbd04922b373198e242330935ef65d1d564e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Frontend/Default/article2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a4b07f344b2db702b42d84f857fbd04922b373198e242330935ef65d1d564e1->leave($__internal_2a4b07f344b2db702b42d84f857fbd04922b373198e242330935ef65d1d564e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ff8e97a33b8e82ba6b0a8b531f83eab1c2d2b3c138eb7cac5f10e1e86206ccf = $this->env->getExtension("native_profiler");
        $__internal_5ff8e97a33b8e82ba6b0a8b531f83eab1c2d2b3c138eb7cac5f10e1e86206ccf->enter($__internal_5ff8e97a33b8e82ba6b0a8b531f83eab1c2d2b3c138eb7cac5f10e1e86206ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h1>Titre de l'article</h1>

\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/wild.jpe"), "html", null, true);
        echo "\">

";
        
        $__internal_5ff8e97a33b8e82ba6b0a8b531f83eab1c2d2b3c138eb7cac5f10e1e86206ccf->leave($__internal_5ff8e97a33b8e82ba6b0a8b531f83eab1c2d2b3c138eb7cac5f10e1e86206ccf_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Default/article2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	<h1>Titre de l'article</h1>*/
/* */
/* 	<img src="{{ asset('img/wild.jpe') }}">*/
/* */
/* {% endblock %}*/
/* */
