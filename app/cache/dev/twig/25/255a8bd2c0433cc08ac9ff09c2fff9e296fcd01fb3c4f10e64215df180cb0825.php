<?php

/* FrontendBundle:Default:article2.html.twig */
class __TwigTemplate_2dedf3e2d59729f33f3606883f87515fda7d710020b1218f514236013702731e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:article2.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97333636fd73e0b82a89e705fa184c7841f482783968d303562bc1f4eb5bad03 = $this->env->getExtension("native_profiler");
        $__internal_97333636fd73e0b82a89e705fa184c7841f482783968d303562bc1f4eb5bad03->enter($__internal_97333636fd73e0b82a89e705fa184c7841f482783968d303562bc1f4eb5bad03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:article2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97333636fd73e0b82a89e705fa184c7841f482783968d303562bc1f4eb5bad03->leave($__internal_97333636fd73e0b82a89e705fa184c7841f482783968d303562bc1f4eb5bad03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28b03b9a7189d17baa10708d8d882904905d538a729f78a5d2d5487e4c79a184 = $this->env->getExtension("native_profiler");
        $__internal_28b03b9a7189d17baa10708d8d882904905d538a729f78a5d2d5487e4c79a184->enter($__internal_28b03b9a7189d17baa10708d8d882904905d538a729f78a5d2d5487e4c79a184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h1>Titre de l'article</h1>

\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/wild.jpe"), "html", null, true);
        echo "\">

";
        
        $__internal_28b03b9a7189d17baa10708d8d882904905d538a729f78a5d2d5487e4c79a184->leave($__internal_28b03b9a7189d17baa10708d8d882904905d538a729f78a5d2d5487e4c79a184_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:article2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	<h1>Titre de l'article</h1>*/
/* */
/* 	<img src="{{ asset('img/wild.jpe') }}">*/
/* */
/* {% endblock %}*/
/* */
