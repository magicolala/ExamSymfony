<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_631e1513fe6e9bf17c3c59fb43ae04fab5d822ef6f8f7a017f37bbb540f08152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f127a2ec9e65ddbac565d4b43b50a88e992c7b5e571cee38ab0e87ba79905aee = $this->env->getExtension("native_profiler");
        $__internal_f127a2ec9e65ddbac565d4b43b50a88e992c7b5e571cee38ab0e87ba79905aee->enter($__internal_f127a2ec9e65ddbac565d4b43b50a88e992c7b5e571cee38ab0e87ba79905aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f127a2ec9e65ddbac565d4b43b50a88e992c7b5e571cee38ab0e87ba79905aee->leave($__internal_f127a2ec9e65ddbac565d4b43b50a88e992c7b5e571cee38ab0e87ba79905aee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6acdaa5f9f937b2476ec76f98c95bbd7c95806b5d7fe6cff804c85d76e8b3771 = $this->env->getExtension("native_profiler");
        $__internal_6acdaa5f9f937b2476ec76f98c95bbd7c95806b5d7fe6cff804c85d76e8b3771->enter($__internal_6acdaa5f9f937b2476ec76f98c95bbd7c95806b5d7fe6cff804c85d76e8b3771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6acdaa5f9f937b2476ec76f98c95bbd7c95806b5d7fe6cff804c85d76e8b3771->leave($__internal_6acdaa5f9f937b2476ec76f98c95bbd7c95806b5d7fe6cff804c85d76e8b3771_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fee11d6adaa33fc33f5f5bcd47f7331843e78cca39e50f35e9b680fef3960caf = $this->env->getExtension("native_profiler");
        $__internal_fee11d6adaa33fc33f5f5bcd47f7331843e78cca39e50f35e9b680fef3960caf->enter($__internal_fee11d6adaa33fc33f5f5bcd47f7331843e78cca39e50f35e9b680fef3960caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fee11d6adaa33fc33f5f5bcd47f7331843e78cca39e50f35e9b680fef3960caf->leave($__internal_fee11d6adaa33fc33f5f5bcd47f7331843e78cca39e50f35e9b680fef3960caf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_18cbcee2823c9dfa42e6d9d0aa25788142c4228422fc216dd24c41ac8bdbf666 = $this->env->getExtension("native_profiler");
        $__internal_18cbcee2823c9dfa42e6d9d0aa25788142c4228422fc216dd24c41ac8bdbf666->enter($__internal_18cbcee2823c9dfa42e6d9d0aa25788142c4228422fc216dd24c41ac8bdbf666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_18cbcee2823c9dfa42e6d9d0aa25788142c4228422fc216dd24c41ac8bdbf666->leave($__internal_18cbcee2823c9dfa42e6d9d0aa25788142c4228422fc216dd24c41ac8bdbf666_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
