<?php

/* @Frontend/Comment/create.html.twig */
class __TwigTemplate_8158432edc0efffee50a413ee188c3e05daffd1211a69d90f93b5eefe0896ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Frontend/Comment/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d785f9918a09d6a69b0000b3b5ff3343b0e2000c32992513010f3e790c8e4951 = $this->env->getExtension("native_profiler");
        $__internal_d785f9918a09d6a69b0000b3b5ff3343b0e2000c32992513010f3e790c8e4951->enter($__internal_d785f9918a09d6a69b0000b3b5ff3343b0e2000c32992513010f3e790c8e4951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Frontend/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d785f9918a09d6a69b0000b3b5ff3343b0e2000c32992513010f3e790c8e4951->leave($__internal_d785f9918a09d6a69b0000b3b5ff3343b0e2000c32992513010f3e790c8e4951_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22986571de872b34130529fe18006868475446b55178c08870735b15e40a9867 = $this->env->getExtension("native_profiler");
        $__internal_22986571de872b34130529fe18006868475446b55178c08870735b15e40a9867->enter($__internal_22986571de872b34130529fe18006868475446b55178c08870735b15e40a9867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Comment";
        
        $__internal_22986571de872b34130529fe18006868475446b55178c08870735b15e40a9867->leave($__internal_22986571de872b34130529fe18006868475446b55178c08870735b15e40a9867_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbf61655f100c2c0fc97ae041c778885f26799ca43007fe2f8caeb734a17c6ec = $this->env->getExtension("native_profiler");
        $__internal_dbf61655f100c2c0fc97ae041c778885f26799ca43007fe2f8caeb734a17c6ec->enter($__internal_dbf61655f100c2c0fc97ae041c778885f26799ca43007fe2f8caeb734a17c6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Add comment for blog post \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "film", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 7
        $this->loadTemplate("FrontendBundle:Comment:form.html.twig", "@Frontend/Comment/create.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        
        $__internal_dbf61655f100c2c0fc97ae041c778885f26799ca43007fe2f8caeb734a17c6ec->leave($__internal_dbf61655f100c2c0fc97ae041c778885f26799ca43007fe2f8caeb734a17c6ec_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Comment/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}Add Comment{% endblock%}*/
/* */
/* {% block body %}*/
/*     <h1>Add comment for blog post "{{ comment.film.title }}"</h1>*/
/*     {% include 'FrontendBundle:Comment:form.html.twig' with { 'form': form } %}*/
/* {% endblock %}*/
/* */
