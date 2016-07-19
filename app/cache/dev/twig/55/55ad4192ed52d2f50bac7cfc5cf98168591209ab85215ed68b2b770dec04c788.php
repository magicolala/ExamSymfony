<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_7c6963d3da3a22fe782c2e8dde018afde8f1eaefb8b3660de560960d325b7bf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c20686da7221e5ca163945aefa8e4026fc4d1dbf4ce758b67b99cc7a5517f5cd = $this->env->getExtension("native_profiler");
        $__internal_c20686da7221e5ca163945aefa8e4026fc4d1dbf4ce758b67b99cc7a5517f5cd->enter($__internal_c20686da7221e5ca163945aefa8e4026fc4d1dbf4ce758b67b99cc7a5517f5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c20686da7221e5ca163945aefa8e4026fc4d1dbf4ce758b67b99cc7a5517f5cd->leave($__internal_c20686da7221e5ca163945aefa8e4026fc4d1dbf4ce758b67b99cc7a5517f5cd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_feb81517460c0e69efb870e87ace0dc0eeb9038d8e37df4fce2e1dbc304fa7bb = $this->env->getExtension("native_profiler");
        $__internal_feb81517460c0e69efb870e87ace0dc0eeb9038d8e37df4fce2e1dbc304fa7bb->enter($__internal_feb81517460c0e69efb870e87ace0dc0eeb9038d8e37df4fce2e1dbc304fa7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_feb81517460c0e69efb870e87ace0dc0eeb9038d8e37df4fce2e1dbc304fa7bb->leave($__internal_feb81517460c0e69efb870e87ace0dc0eeb9038d8e37df4fce2e1dbc304fa7bb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_41b6909df7ae80c47e1c540e0f8de66ee25474802e56fab503239ccb4b8801b1 = $this->env->getExtension("native_profiler");
        $__internal_41b6909df7ae80c47e1c540e0f8de66ee25474802e56fab503239ccb4b8801b1->enter($__internal_41b6909df7ae80c47e1c540e0f8de66ee25474802e56fab503239ccb4b8801b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_41b6909df7ae80c47e1c540e0f8de66ee25474802e56fab503239ccb4b8801b1->leave($__internal_41b6909df7ae80c47e1c540e0f8de66ee25474802e56fab503239ccb4b8801b1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2d5b5ac97bc87d22504aaec284be64afbdc5a9329baa8c93f350ee5b8ecf14e5 = $this->env->getExtension("native_profiler");
        $__internal_2d5b5ac97bc87d22504aaec284be64afbdc5a9329baa8c93f350ee5b8ecf14e5->enter($__internal_2d5b5ac97bc87d22504aaec284be64afbdc5a9329baa8c93f350ee5b8ecf14e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2d5b5ac97bc87d22504aaec284be64afbdc5a9329baa8c93f350ee5b8ecf14e5->leave($__internal_2d5b5ac97bc87d22504aaec284be64afbdc5a9329baa8c93f350ee5b8ecf14e5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
