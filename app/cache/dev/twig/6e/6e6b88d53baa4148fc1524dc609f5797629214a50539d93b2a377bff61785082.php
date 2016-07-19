<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_b6557a15a75c029d5c00a2e3a3f347169db07d0b997f9067ca12ca9a76e27716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_4e76b4fda34d5daafe4eb789796ede57281a973e4c4c3d869045a92235324d5a = $this->env->getExtension("native_profiler");
        $__internal_4e76b4fda34d5daafe4eb789796ede57281a973e4c4c3d869045a92235324d5a->enter($__internal_4e76b4fda34d5daafe4eb789796ede57281a973e4c4c3d869045a92235324d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e76b4fda34d5daafe4eb789796ede57281a973e4c4c3d869045a92235324d5a->leave($__internal_4e76b4fda34d5daafe4eb789796ede57281a973e4c4c3d869045a92235324d5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13763ef849cf3b42d6237ccc52e9699df3470dec95a6bfabd9211cadfc242d56 = $this->env->getExtension("native_profiler");
        $__internal_13763ef849cf3b42d6237ccc52e9699df3470dec95a6bfabd9211cadfc242d56->enter($__internal_13763ef849cf3b42d6237ccc52e9699df3470dec95a6bfabd9211cadfc242d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_13763ef849cf3b42d6237ccc52e9699df3470dec95a6bfabd9211cadfc242d56->leave($__internal_13763ef849cf3b42d6237ccc52e9699df3470dec95a6bfabd9211cadfc242d56_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
