<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_55d9597f00dcb41af1cc65e66f43e814a4aae838b2ae5ad8b1029c0a53ca2f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_9355907fb44e0cad0b2acb593c3f5e6cd3258912503569aa5b24b182ba4eca55 = $this->env->getExtension("native_profiler");
        $__internal_9355907fb44e0cad0b2acb593c3f5e6cd3258912503569aa5b24b182ba4eca55->enter($__internal_9355907fb44e0cad0b2acb593c3f5e6cd3258912503569aa5b24b182ba4eca55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9355907fb44e0cad0b2acb593c3f5e6cd3258912503569aa5b24b182ba4eca55->leave($__internal_9355907fb44e0cad0b2acb593c3f5e6cd3258912503569aa5b24b182ba4eca55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa6a9ee5e2ea5038f75432b4b53bfe2e7b62599020cb74dc560568da43e3a54d = $this->env->getExtension("native_profiler");
        $__internal_fa6a9ee5e2ea5038f75432b4b53bfe2e7b62599020cb74dc560568da43e3a54d->enter($__internal_fa6a9ee5e2ea5038f75432b4b53bfe2e7b62599020cb74dc560568da43e3a54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fa6a9ee5e2ea5038f75432b4b53bfe2e7b62599020cb74dc560568da43e3a54d->leave($__internal_fa6a9ee5e2ea5038f75432b4b53bfe2e7b62599020cb74dc560568da43e3a54d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd47cbee5f3f556b95c5e639fab7ba90b182db84fc047c42cc5ef4fcdbb7e362 = $this->env->getExtension("native_profiler");
        $__internal_dd47cbee5f3f556b95c5e639fab7ba90b182db84fc047c42cc5ef4fcdbb7e362->enter($__internal_dd47cbee5f3f556b95c5e639fab7ba90b182db84fc047c42cc5ef4fcdbb7e362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd47cbee5f3f556b95c5e639fab7ba90b182db84fc047c42cc5ef4fcdbb7e362->leave($__internal_dd47cbee5f3f556b95c5e639fab7ba90b182db84fc047c42cc5ef4fcdbb7e362_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
