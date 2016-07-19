<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_32cd35c8347115a9915af7281a98784de203b86b2f5df57bf3fd6c927d6b6249 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_04f1eab3375325bf83a12db20cc131b3591d0d1b573c965b76fbc06c77e97417 = $this->env->getExtension("native_profiler");
        $__internal_04f1eab3375325bf83a12db20cc131b3591d0d1b573c965b76fbc06c77e97417->enter($__internal_04f1eab3375325bf83a12db20cc131b3591d0d1b573c965b76fbc06c77e97417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04f1eab3375325bf83a12db20cc131b3591d0d1b573c965b76fbc06c77e97417->leave($__internal_04f1eab3375325bf83a12db20cc131b3591d0d1b573c965b76fbc06c77e97417_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_177c39d90b5f0a09255690f22f01779ea9f44a2efa9423a69ca968628334eb9a = $this->env->getExtension("native_profiler");
        $__internal_177c39d90b5f0a09255690f22f01779ea9f44a2efa9423a69ca968628334eb9a->enter($__internal_177c39d90b5f0a09255690f22f01779ea9f44a2efa9423a69ca968628334eb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_177c39d90b5f0a09255690f22f01779ea9f44a2efa9423a69ca968628334eb9a->leave($__internal_177c39d90b5f0a09255690f22f01779ea9f44a2efa9423a69ca968628334eb9a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
