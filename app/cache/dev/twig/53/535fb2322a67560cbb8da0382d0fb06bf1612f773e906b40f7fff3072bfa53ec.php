<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_3ed0c04cb2ff83826f6f064e417432d8ce27c346545049884e41e6bc54309612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_37cd15994d4c30047aa187236bd122ea314874d536fc72c4754e5bc10bc61165 = $this->env->getExtension("native_profiler");
        $__internal_37cd15994d4c30047aa187236bd122ea314874d536fc72c4754e5bc10bc61165->enter($__internal_37cd15994d4c30047aa187236bd122ea314874d536fc72c4754e5bc10bc61165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37cd15994d4c30047aa187236bd122ea314874d536fc72c4754e5bc10bc61165->leave($__internal_37cd15994d4c30047aa187236bd122ea314874d536fc72c4754e5bc10bc61165_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e213bd74fbaf64cbf3ce3c0209dfdca62a998a814e5b3a4b50a296ef6fd2b1f3 = $this->env->getExtension("native_profiler");
        $__internal_e213bd74fbaf64cbf3ce3c0209dfdca62a998a814e5b3a4b50a296ef6fd2b1f3->enter($__internal_e213bd74fbaf64cbf3ce3c0209dfdca62a998a814e5b3a4b50a296ef6fd2b1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e213bd74fbaf64cbf3ce3c0209dfdca62a998a814e5b3a4b50a296ef6fd2b1f3->leave($__internal_e213bd74fbaf64cbf3ce3c0209dfdca62a998a814e5b3a4b50a296ef6fd2b1f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
