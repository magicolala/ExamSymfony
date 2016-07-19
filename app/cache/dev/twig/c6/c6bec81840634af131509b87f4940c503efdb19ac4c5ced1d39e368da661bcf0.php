<?php

/* FrontendBundle:Comment:create.html.twig */
class __TwigTemplate_8a0e1c8753e2259de779a3af51696dbf9025ff0b4293ca79b1c13ac1dab1e346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Comment:create.html.twig", 1);
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
        $__internal_5bfbce94f9d3abdb26ec946a171c7d147b24d7c9c2422ae3c5dc4034f4663aaf = $this->env->getExtension("native_profiler");
        $__internal_5bfbce94f9d3abdb26ec946a171c7d147b24d7c9c2422ae3c5dc4034f4663aaf->enter($__internal_5bfbce94f9d3abdb26ec946a171c7d147b24d7c9c2422ae3c5dc4034f4663aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bfbce94f9d3abdb26ec946a171c7d147b24d7c9c2422ae3c5dc4034f4663aaf->leave($__internal_5bfbce94f9d3abdb26ec946a171c7d147b24d7c9c2422ae3c5dc4034f4663aaf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bce39f531edb991064325716dd8285ebecd4c5de5a6b029ad86e5ace683ef250 = $this->env->getExtension("native_profiler");
        $__internal_bce39f531edb991064325716dd8285ebecd4c5de5a6b029ad86e5ace683ef250->enter($__internal_bce39f531edb991064325716dd8285ebecd4c5de5a6b029ad86e5ace683ef250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Comment";
        
        $__internal_bce39f531edb991064325716dd8285ebecd4c5de5a6b029ad86e5ace683ef250->leave($__internal_bce39f531edb991064325716dd8285ebecd4c5de5a6b029ad86e5ace683ef250_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9df61c91d71a605fad91023418ead353834c067c46785c880aae1797b9f1bcd9 = $this->env->getExtension("native_profiler");
        $__internal_9df61c91d71a605fad91023418ead353834c067c46785c880aae1797b9f1bcd9->enter($__internal_9df61c91d71a605fad91023418ead353834c067c46785c880aae1797b9f1bcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Add comment for blog post \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "film", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 7
        $this->loadTemplate("FrontendBundle:Comment:form.html.twig", "FrontendBundle:Comment:create.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        
        $__internal_9df61c91d71a605fad91023418ead353834c067c46785c880aae1797b9f1bcd9->leave($__internal_9df61c91d71a605fad91023418ead353834c067c46785c880aae1797b9f1bcd9_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Comment:create.html.twig";
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
