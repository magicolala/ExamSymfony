<?php

/* FrontendBundle:Comment:form.html.twig */
class __TwigTemplate_7b6550da0daa9d11e1ec0cb45317f5e66ffdfa373e3f41b739a0b155e9e8cc4c extends Twig_Template
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
        $__internal_02c6cc64ad6f6856c5a9e7463738c0e45d9af02a98dadef34d5251ec7bcca8db = $this->env->getExtension("native_profiler");
        $__internal_02c6cc64ad6f6856c5a9e7463738c0e45d9af02a98dadef34d5251ec7bcca8db->enter($__internal_02c6cc64ad6f6856c5a9e7463738c0e45d9af02a98dadef34d5251ec7bcca8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Comment:form.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_create", array("film_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "film", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
</form>
";
        
        $__internal_02c6cc64ad6f6856c5a9e7463738c0e45d9af02a98dadef34d5251ec7bcca8db->leave($__internal_02c6cc64ad6f6856c5a9e7463738c0e45d9af02a98dadef34d5251ec7bcca8db_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('comment_create', { 'film_id' : comment.film.id } ) }}" method="post" {{ form_enctype(form) }} class="blogger">*/
/*     {{ form_widget(form) }}*/
/*     <p>*/
/*         <input type="submit" value="Submit">*/
/*     </p>*/
/* </form>*/
/* */
