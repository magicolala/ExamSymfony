<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_04526936b3e5090de09443a9a1311ea2f8bafe56c5cf799c4cc9246aa2330310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_0571e1698b63f217a28f3c2f8d5bb9641c015334745f9a0ab40e77d2d32cca9b = $this->env->getExtension("native_profiler");
        $__internal_0571e1698b63f217a28f3c2f8d5bb9641c015334745f9a0ab40e77d2d32cca9b->enter($__internal_0571e1698b63f217a28f3c2f8d5bb9641c015334745f9a0ab40e77d2d32cca9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0571e1698b63f217a28f3c2f8d5bb9641c015334745f9a0ab40e77d2d32cca9b->leave($__internal_0571e1698b63f217a28f3c2f8d5bb9641c015334745f9a0ab40e77d2d32cca9b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5fecff6dfda593aa72f990000c00ba0565a972e61d0efc2a93e4feeba1de6bc = $this->env->getExtension("native_profiler");
        $__internal_e5fecff6dfda593aa72f990000c00ba0565a972e61d0efc2a93e4feeba1de6bc->enter($__internal_e5fecff6dfda593aa72f990000c00ba0565a972e61d0efc2a93e4feeba1de6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e5fecff6dfda593aa72f990000c00ba0565a972e61d0efc2a93e4feeba1de6bc->leave($__internal_e5fecff6dfda593aa72f990000c00ba0565a972e61d0efc2a93e4feeba1de6bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
