<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d3e6d176428472c8c33828fd5e7daec45882ea8f27bb338452555d5eb2f343de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_dd87358d3d894ad3ca1deeba410353a65f235d246a06c5205bed9e854c86d1e4 = $this->env->getExtension("native_profiler");
        $__internal_dd87358d3d894ad3ca1deeba410353a65f235d246a06c5205bed9e854c86d1e4->enter($__internal_dd87358d3d894ad3ca1deeba410353a65f235d246a06c5205bed9e854c86d1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd87358d3d894ad3ca1deeba410353a65f235d246a06c5205bed9e854c86d1e4->leave($__internal_dd87358d3d894ad3ca1deeba410353a65f235d246a06c5205bed9e854c86d1e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b8423801cdb8712410e7b5b94afd878a8e6a3a7f0e448de052aee8d3591487d = $this->env->getExtension("native_profiler");
        $__internal_4b8423801cdb8712410e7b5b94afd878a8e6a3a7f0e448de052aee8d3591487d->enter($__internal_4b8423801cdb8712410e7b5b94afd878a8e6a3a7f0e448de052aee8d3591487d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4b8423801cdb8712410e7b5b94afd878a8e6a3a7f0e448de052aee8d3591487d->leave($__internal_4b8423801cdb8712410e7b5b94afd878a8e6a3a7f0e448de052aee8d3591487d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
