<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_fd23b6570c153b6cdb44186462dc3a62ff480476b827d67d065d55f4493b386b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_5fcaa27bd81241ff2c8e34e3ccccd52495cce00c1da5720a8ba12e44aa3b086f = $this->env->getExtension("native_profiler");
        $__internal_5fcaa27bd81241ff2c8e34e3ccccd52495cce00c1da5720a8ba12e44aa3b086f->enter($__internal_5fcaa27bd81241ff2c8e34e3ccccd52495cce00c1da5720a8ba12e44aa3b086f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fcaa27bd81241ff2c8e34e3ccccd52495cce00c1da5720a8ba12e44aa3b086f->leave($__internal_5fcaa27bd81241ff2c8e34e3ccccd52495cce00c1da5720a8ba12e44aa3b086f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8747c60be9b5734df1d583f03ca459ba4269ba286ad469b59ad267eaa206a8db = $this->env->getExtension("native_profiler");
        $__internal_8747c60be9b5734df1d583f03ca459ba4269ba286ad469b59ad267eaa206a8db->enter($__internal_8747c60be9b5734df1d583f03ca459ba4269ba286ad469b59ad267eaa206a8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8747c60be9b5734df1d583f03ca459ba4269ba286ad469b59ad267eaa206a8db->leave($__internal_8747c60be9b5734df1d583f03ca459ba4269ba286ad469b59ad267eaa206a8db_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
