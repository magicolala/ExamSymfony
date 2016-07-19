<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9619d4ea3bb713245750a27572c88e466a9333d37188319a7176a1163b1fa48a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c9a60504568bec43a237ad186a8c42d14fca1fffa8275b58c4c2a0376c62754 = $this->env->getExtension("native_profiler");
        $__internal_9c9a60504568bec43a237ad186a8c42d14fca1fffa8275b58c4c2a0376c62754->enter($__internal_9c9a60504568bec43a237ad186a8c42d14fca1fffa8275b58c4c2a0376c62754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c9a60504568bec43a237ad186a8c42d14fca1fffa8275b58c4c2a0376c62754->leave($__internal_9c9a60504568bec43a237ad186a8c42d14fca1fffa8275b58c4c2a0376c62754_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46af0b31cd5fc304d447462644a2717f49852964b3afb3f0edc662f24bbd4f84 = $this->env->getExtension("native_profiler");
        $__internal_46af0b31cd5fc304d447462644a2717f49852964b3afb3f0edc662f24bbd4f84->enter($__internal_46af0b31cd5fc304d447462644a2717f49852964b3afb3f0edc662f24bbd4f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_46af0b31cd5fc304d447462644a2717f49852964b3afb3f0edc662f24bbd4f84->leave($__internal_46af0b31cd5fc304d447462644a2717f49852964b3afb3f0edc662f24bbd4f84_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_387aea6a8063907d710e88b4224e4f98e86001570f4e846b9d47a431cd70b720 = $this->env->getExtension("native_profiler");
        $__internal_387aea6a8063907d710e88b4224e4f98e86001570f4e846b9d47a431cd70b720->enter($__internal_387aea6a8063907d710e88b4224e4f98e86001570f4e846b9d47a431cd70b720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_387aea6a8063907d710e88b4224e4f98e86001570f4e846b9d47a431cd70b720->leave($__internal_387aea6a8063907d710e88b4224e4f98e86001570f4e846b9d47a431cd70b720_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
