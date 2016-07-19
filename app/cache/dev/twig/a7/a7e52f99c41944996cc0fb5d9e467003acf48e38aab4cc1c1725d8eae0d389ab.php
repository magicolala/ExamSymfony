<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_ef52adcf9b825385cbbd1bd98e6ee1cc5b759f9b75d2122544f5e2d73f7b1b9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_68510a3580c4233f2196963f8138d0822b0755b6a60ec1d4044f415fdf6752cc = $this->env->getExtension("native_profiler");
        $__internal_68510a3580c4233f2196963f8138d0822b0755b6a60ec1d4044f415fdf6752cc->enter($__internal_68510a3580c4233f2196963f8138d0822b0755b6a60ec1d4044f415fdf6752cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68510a3580c4233f2196963f8138d0822b0755b6a60ec1d4044f415fdf6752cc->leave($__internal_68510a3580c4233f2196963f8138d0822b0755b6a60ec1d4044f415fdf6752cc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_592a352fab209743861ee68678b64e3863937e5c194ac3a4dcc98f15b8f42ad9 = $this->env->getExtension("native_profiler");
        $__internal_592a352fab209743861ee68678b64e3863937e5c194ac3a4dcc98f15b8f42ad9->enter($__internal_592a352fab209743861ee68678b64e3863937e5c194ac3a4dcc98f15b8f42ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_592a352fab209743861ee68678b64e3863937e5c194ac3a4dcc98f15b8f42ad9->leave($__internal_592a352fab209743861ee68678b64e3863937e5c194ac3a4dcc98f15b8f42ad9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
