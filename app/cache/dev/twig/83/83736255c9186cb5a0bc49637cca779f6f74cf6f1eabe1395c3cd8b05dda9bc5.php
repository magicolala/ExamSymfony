<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_a290be2a64e4c7ab83cf5742f271cd41757d794ef9cae2a6f94f02bb911bb15d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_7418c85d7a169e93e812a07b5001d62b9af62492404bf7c60e29c6bf6cbc7c95 = $this->env->getExtension("native_profiler");
        $__internal_7418c85d7a169e93e812a07b5001d62b9af62492404bf7c60e29c6bf6cbc7c95->enter($__internal_7418c85d7a169e93e812a07b5001d62b9af62492404bf7c60e29c6bf6cbc7c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7418c85d7a169e93e812a07b5001d62b9af62492404bf7c60e29c6bf6cbc7c95->leave($__internal_7418c85d7a169e93e812a07b5001d62b9af62492404bf7c60e29c6bf6cbc7c95_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25b0eedc0e4a7276299b00c9c28b8ecccce3429e1a2bffc290b4e6ea5e3d25c2 = $this->env->getExtension("native_profiler");
        $__internal_25b0eedc0e4a7276299b00c9c28b8ecccce3429e1a2bffc290b4e6ea5e3d25c2->enter($__internal_25b0eedc0e4a7276299b00c9c28b8ecccce3429e1a2bffc290b4e6ea5e3d25c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_25b0eedc0e4a7276299b00c9c28b8ecccce3429e1a2bffc290b4e6ea5e3d25c2->leave($__internal_25b0eedc0e4a7276299b00c9c28b8ecccce3429e1a2bffc290b4e6ea5e3d25c2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
