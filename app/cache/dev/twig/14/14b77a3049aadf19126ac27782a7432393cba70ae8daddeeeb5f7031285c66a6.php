<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_8bf6d48e14da4feee9019a360c45f96caa8e5e69203927427914a5c6b136ac74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_76b8eeeec61277019bdfe72af07de149c02dadd8d64766107ce0f0826ed14c9d = $this->env->getExtension("native_profiler");
        $__internal_76b8eeeec61277019bdfe72af07de149c02dadd8d64766107ce0f0826ed14c9d->enter($__internal_76b8eeeec61277019bdfe72af07de149c02dadd8d64766107ce0f0826ed14c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76b8eeeec61277019bdfe72af07de149c02dadd8d64766107ce0f0826ed14c9d->leave($__internal_76b8eeeec61277019bdfe72af07de149c02dadd8d64766107ce0f0826ed14c9d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39cc9e940bc6ba20fa97c637f6e52261727e6d5503671b67ba045b45213ef4a6 = $this->env->getExtension("native_profiler");
        $__internal_39cc9e940bc6ba20fa97c637f6e52261727e6d5503671b67ba045b45213ef4a6->enter($__internal_39cc9e940bc6ba20fa97c637f6e52261727e6d5503671b67ba045b45213ef4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_39cc9e940bc6ba20fa97c637f6e52261727e6d5503671b67ba045b45213ef4a6->leave($__internal_39cc9e940bc6ba20fa97c637f6e52261727e6d5503671b67ba045b45213ef4a6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
