<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_1c830be4f13044fcaa0a5d5ff43ec277a7b72428bbef94b1ad706049934f1ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_ab4aa8282cdb18f7a4c08350f40b161e5d86ab38f18618b705cf75aff82828a4 = $this->env->getExtension("native_profiler");
        $__internal_ab4aa8282cdb18f7a4c08350f40b161e5d86ab38f18618b705cf75aff82828a4->enter($__internal_ab4aa8282cdb18f7a4c08350f40b161e5d86ab38f18618b705cf75aff82828a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab4aa8282cdb18f7a4c08350f40b161e5d86ab38f18618b705cf75aff82828a4->leave($__internal_ab4aa8282cdb18f7a4c08350f40b161e5d86ab38f18618b705cf75aff82828a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d66a6997c48c74ba34b6b6ed6d18ba50b51d093275b88aad2986c361d8adaa01 = $this->env->getExtension("native_profiler");
        $__internal_d66a6997c48c74ba34b6b6ed6d18ba50b51d093275b88aad2986c361d8adaa01->enter($__internal_d66a6997c48c74ba34b6b6ed6d18ba50b51d093275b88aad2986c361d8adaa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d66a6997c48c74ba34b6b6ed6d18ba50b51d093275b88aad2986c361d8adaa01->leave($__internal_d66a6997c48c74ba34b6b6ed6d18ba50b51d093275b88aad2986c361d8adaa01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
