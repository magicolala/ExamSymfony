<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_bbab6355090c08a6438e9c8f9b1f729878df990e3c1ee0393f09def0a57b6d9c extends Twig_Template
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
        $__internal_6daef160167a1e2f4a7148afd4c82f5ea2ac26f0f1323e7e3421181d392a4076 = $this->env->getExtension("native_profiler");
        $__internal_6daef160167a1e2f4a7148afd4c82f5ea2ac26f0f1323e7e3421181d392a4076->enter($__internal_6daef160167a1e2f4a7148afd4c82f5ea2ac26f0f1323e7e3421181d392a4076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_6daef160167a1e2f4a7148afd4c82f5ea2ac26f0f1323e7e3421181d392a4076->leave($__internal_6daef160167a1e2f4a7148afd4c82f5ea2ac26f0f1323e7e3421181d392a4076_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
