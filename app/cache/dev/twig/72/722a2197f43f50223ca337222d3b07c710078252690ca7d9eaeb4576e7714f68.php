<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_986aec3fe88e7f7b6ca0119bff424631c472b2356eb1c6b7339b5aad110fbe10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_e3ae6b87608b6f676b1cb5dd11bbcad4fe8812eb1b70ad668a73ae7beccc62b7 = $this->env->getExtension("native_profiler");
        $__internal_e3ae6b87608b6f676b1cb5dd11bbcad4fe8812eb1b70ad668a73ae7beccc62b7->enter($__internal_e3ae6b87608b6f676b1cb5dd11bbcad4fe8812eb1b70ad668a73ae7beccc62b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3ae6b87608b6f676b1cb5dd11bbcad4fe8812eb1b70ad668a73ae7beccc62b7->leave($__internal_e3ae6b87608b6f676b1cb5dd11bbcad4fe8812eb1b70ad668a73ae7beccc62b7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e88624a25330aeb0b762d339dcd02846c09abb701fd037de3f31d23ca1d071e2 = $this->env->getExtension("native_profiler");
        $__internal_e88624a25330aeb0b762d339dcd02846c09abb701fd037de3f31d23ca1d071e2->enter($__internal_e88624a25330aeb0b762d339dcd02846c09abb701fd037de3f31d23ca1d071e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e88624a25330aeb0b762d339dcd02846c09abb701fd037de3f31d23ca1d071e2->leave($__internal_e88624a25330aeb0b762d339dcd02846c09abb701fd037de3f31d23ca1d071e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
