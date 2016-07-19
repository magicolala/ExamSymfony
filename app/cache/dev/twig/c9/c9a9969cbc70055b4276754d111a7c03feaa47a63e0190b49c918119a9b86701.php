<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_cb2a4deff243644918a75b5647b87e080c5d634280e8f2c930200d9bd2473552 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_880e3db729e4889b8e958efc8b17e20fc4ca14902dfdcbb24a66b7299cab2de9 = $this->env->getExtension("native_profiler");
        $__internal_880e3db729e4889b8e958efc8b17e20fc4ca14902dfdcbb24a66b7299cab2de9->enter($__internal_880e3db729e4889b8e958efc8b17e20fc4ca14902dfdcbb24a66b7299cab2de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_880e3db729e4889b8e958efc8b17e20fc4ca14902dfdcbb24a66b7299cab2de9->leave($__internal_880e3db729e4889b8e958efc8b17e20fc4ca14902dfdcbb24a66b7299cab2de9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adfd3c0959fd1d9f8c8e4dafc5bcb7173104504525103b22d80e051f763b7844 = $this->env->getExtension("native_profiler");
        $__internal_adfd3c0959fd1d9f8c8e4dafc5bcb7173104504525103b22d80e051f763b7844->enter($__internal_adfd3c0959fd1d9f8c8e4dafc5bcb7173104504525103b22d80e051f763b7844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_adfd3c0959fd1d9f8c8e4dafc5bcb7173104504525103b22d80e051f763b7844->leave($__internal_adfd3c0959fd1d9f8c8e4dafc5bcb7173104504525103b22d80e051f763b7844_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
