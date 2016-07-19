<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_d351f624e02cb7e1cb681522febcbf5fb8a55c56db8ece27079cf35d2ecde53f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_82784d8207c9e44a2597c113da342e2d5bdc755f93be9dcaaafc929f9b4371c4 = $this->env->getExtension("native_profiler");
        $__internal_82784d8207c9e44a2597c113da342e2d5bdc755f93be9dcaaafc929f9b4371c4->enter($__internal_82784d8207c9e44a2597c113da342e2d5bdc755f93be9dcaaafc929f9b4371c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82784d8207c9e44a2597c113da342e2d5bdc755f93be9dcaaafc929f9b4371c4->leave($__internal_82784d8207c9e44a2597c113da342e2d5bdc755f93be9dcaaafc929f9b4371c4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_824682ee2d7590723c6c33f2b03e5553e539d0ee0f7099579015b7c45c9e898b = $this->env->getExtension("native_profiler");
        $__internal_824682ee2d7590723c6c33f2b03e5553e539d0ee0f7099579015b7c45c9e898b->enter($__internal_824682ee2d7590723c6c33f2b03e5553e539d0ee0f7099579015b7c45c9e898b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_824682ee2d7590723c6c33f2b03e5553e539d0ee0f7099579015b7c45c9e898b->leave($__internal_824682ee2d7590723c6c33f2b03e5553e539d0ee0f7099579015b7c45c9e898b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
