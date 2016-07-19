<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_3f8d15690bd765ea74fa19689c7787550f8a4989a4c2f833b5b232ad6f4e299c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_4e57cd573a109c2b0967572134383442b23752588771740a6f21c8e9ab228ead = $this->env->getExtension("native_profiler");
        $__internal_4e57cd573a109c2b0967572134383442b23752588771740a6f21c8e9ab228ead->enter($__internal_4e57cd573a109c2b0967572134383442b23752588771740a6f21c8e9ab228ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e57cd573a109c2b0967572134383442b23752588771740a6f21c8e9ab228ead->leave($__internal_4e57cd573a109c2b0967572134383442b23752588771740a6f21c8e9ab228ead_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_032b89bfad2dd8a2cf10e156a1fc2cad30f3ecc02cafaa1fae5f3b8d4ca0a72b = $this->env->getExtension("native_profiler");
        $__internal_032b89bfad2dd8a2cf10e156a1fc2cad30f3ecc02cafaa1fae5f3b8d4ca0a72b->enter($__internal_032b89bfad2dd8a2cf10e156a1fc2cad30f3ecc02cafaa1fae5f3b8d4ca0a72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_032b89bfad2dd8a2cf10e156a1fc2cad30f3ecc02cafaa1fae5f3b8d4ca0a72b->leave($__internal_032b89bfad2dd8a2cf10e156a1fc2cad30f3ecc02cafaa1fae5f3b8d4ca0a72b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
