<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_c4a3d615fc8154f27a1bc923a38b181db715beb55c92f23d33143fc749de32c2 extends Twig_Template
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
        $__internal_72c29c1a94095bc338674bd1c4698653efcd2fea7f5e545d5305212866540bb3 = $this->env->getExtension("native_profiler");
        $__internal_72c29c1a94095bc338674bd1c4698653efcd2fea7f5e545d5305212866540bb3->enter($__internal_72c29c1a94095bc338674bd1c4698653efcd2fea7f5e545d5305212866540bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_72c29c1a94095bc338674bd1c4698653efcd2fea7f5e545d5305212866540bb3->leave($__internal_72c29c1a94095bc338674bd1c4698653efcd2fea7f5e545d5305212866540bb3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
