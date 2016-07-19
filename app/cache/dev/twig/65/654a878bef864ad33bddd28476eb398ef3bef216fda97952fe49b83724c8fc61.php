<?php

/* @Frontend/Comment/form.html.twig */
class __TwigTemplate_649313c9f9a338efe30df2367375984f37f87c03006ddfa07f125ce94beb0dc4 extends Twig_Template
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
        $__internal_c6712ea032fbdfc52d5b39113ea09d49c3b3fd671809de04d3ca2ff345fb4410 = $this->env->getExtension("native_profiler");
        $__internal_c6712ea032fbdfc52d5b39113ea09d49c3b3fd671809de04d3ca2ff345fb4410->enter($__internal_c6712ea032fbdfc52d5b39113ea09d49c3b3fd671809de04d3ca2ff345fb4410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Frontend/Comment/form.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_comment_create", array("film_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "film", array()), "id", array()))), "html", null, true);
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
        
        $__internal_c6712ea032fbdfc52d5b39113ea09d49c3b3fd671809de04d3ca2ff345fb4410->leave($__internal_c6712ea032fbdfc52d5b39113ea09d49c3b3fd671809de04d3ca2ff345fb4410_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Comment/form.html.twig";
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
/* <form action="{{ path('BloggerBlogBundle_comment_create', { 'film_id' : comment.film.id } ) }}" method="post" {{ form_enctype(form) }} class="blogger">*/
/*     {{ form_widget(form) }}*/
/*     <p>*/
/*         <input type="submit" value="Submit">*/
/*     </p>*/
/* </form>*/
/* */
