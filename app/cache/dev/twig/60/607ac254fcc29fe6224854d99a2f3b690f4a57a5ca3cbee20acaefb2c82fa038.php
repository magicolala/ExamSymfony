<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5230f79d624d41dfa256af8a695adef639c53a09fbbaf8bc910af3b61b318a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2f6e79c9adaac5c5f91a0a40f8350df4473472674a00a9a3ff6bdb33d5d2133 = $this->env->getExtension("native_profiler");
        $__internal_c2f6e79c9adaac5c5f91a0a40f8350df4473472674a00a9a3ff6bdb33d5d2133->enter($__internal_c2f6e79c9adaac5c5f91a0a40f8350df4473472674a00a9a3ff6bdb33d5d2133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c2f6e79c9adaac5c5f91a0a40f8350df4473472674a00a9a3ff6bdb33d5d2133->leave($__internal_c2f6e79c9adaac5c5f91a0a40f8350df4473472674a00a9a3ff6bdb33d5d2133_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
