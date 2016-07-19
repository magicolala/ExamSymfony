<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_8351b6ff3cf93b12bc21dd0cf483baea2d4b25fd62bb1901dadd36c5e0afdd62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_608bbab62622747f427c855a2c255482935e2fb1b787c2da7192a9a58e4ca604 = $this->env->getExtension("native_profiler");
        $__internal_608bbab62622747f427c855a2c255482935e2fb1b787c2da7192a9a58e4ca604->enter($__internal_608bbab62622747f427c855a2c255482935e2fb1b787c2da7192a9a58e4ca604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_608bbab62622747f427c855a2c255482935e2fb1b787c2da7192a9a58e4ca604->leave($__internal_608bbab62622747f427c855a2c255482935e2fb1b787c2da7192a9a58e4ca604_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0d920fd7ae2255cabf56e6588de2872eda6dedd34062289d8d98d1d3b15769e = $this->env->getExtension("native_profiler");
        $__internal_b0d920fd7ae2255cabf56e6588de2872eda6dedd34062289d8d98d1d3b15769e->enter($__internal_b0d920fd7ae2255cabf56e6588de2872eda6dedd34062289d8d98d1d3b15769e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_b0d920fd7ae2255cabf56e6588de2872eda6dedd34062289d8d98d1d3b15769e->leave($__internal_b0d920fd7ae2255cabf56e6588de2872eda6dedd34062289d8d98d1d3b15769e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
