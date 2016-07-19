<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_45997a6e752d52bda5d62469167213f938b0e4e3d6cc47422da02755eeaaa8a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_801849a6b7a5914c0d424c27d4764b2b7c53cd59b50c0deef1f2cb6215592fa5 = $this->env->getExtension("native_profiler");
        $__internal_801849a6b7a5914c0d424c27d4764b2b7c53cd59b50c0deef1f2cb6215592fa5->enter($__internal_801849a6b7a5914c0d424c27d4764b2b7c53cd59b50c0deef1f2cb6215592fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_801849a6b7a5914c0d424c27d4764b2b7c53cd59b50c0deef1f2cb6215592fa5->leave($__internal_801849a6b7a5914c0d424c27d4764b2b7c53cd59b50c0deef1f2cb6215592fa5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_859400423fa16ac1ed785f09201e605cc2c3fb2ae562532844c97a8893d6c2f4 = $this->env->getExtension("native_profiler");
        $__internal_859400423fa16ac1ed785f09201e605cc2c3fb2ae562532844c97a8893d6c2f4->enter($__internal_859400423fa16ac1ed785f09201e605cc2c3fb2ae562532844c97a8893d6c2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_859400423fa16ac1ed785f09201e605cc2c3fb2ae562532844c97a8893d6c2f4->leave($__internal_859400423fa16ac1ed785f09201e605cc2c3fb2ae562532844c97a8893d6c2f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
