<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_f9ae286157f21be9ab5866196953aef77f8da8ea5f380068240ba98c6b14447c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_22ae0cacf8b404bb41e0cd390f2303d173e181a14bae345c5a8afd7b4bb5399b = $this->env->getExtension("native_profiler");
        $__internal_22ae0cacf8b404bb41e0cd390f2303d173e181a14bae345c5a8afd7b4bb5399b->enter($__internal_22ae0cacf8b404bb41e0cd390f2303d173e181a14bae345c5a8afd7b4bb5399b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22ae0cacf8b404bb41e0cd390f2303d173e181a14bae345c5a8afd7b4bb5399b->leave($__internal_22ae0cacf8b404bb41e0cd390f2303d173e181a14bae345c5a8afd7b4bb5399b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0de5cc68ea5fc32b2f8155747ffab2d5ad8740079125bf40d9aaa84d843fc75c = $this->env->getExtension("native_profiler");
        $__internal_0de5cc68ea5fc32b2f8155747ffab2d5ad8740079125bf40d9aaa84d843fc75c->enter($__internal_0de5cc68ea5fc32b2f8155747ffab2d5ad8740079125bf40d9aaa84d843fc75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_0de5cc68ea5fc32b2f8155747ffab2d5ad8740079125bf40d9aaa84d843fc75c->leave($__internal_0de5cc68ea5fc32b2f8155747ffab2d5ad8740079125bf40d9aaa84d843fc75c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
