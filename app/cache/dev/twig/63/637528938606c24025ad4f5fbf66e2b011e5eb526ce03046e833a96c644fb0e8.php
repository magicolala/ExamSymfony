<?php

/* FrontendBundle:Default:show.html.twig */
class __TwigTemplate_585e172712d86c95135a2f57472201072d6b8b0407b4adeabc992702064d30c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:show.html.twig", 1);
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
        $__internal_2962b22c3ddc54527faf6bc79210dd32c6bd7255a45d5b3ba2f16ba9c78e776b = $this->env->getExtension("native_profiler");
        $__internal_2962b22c3ddc54527faf6bc79210dd32c6bd7255a45d5b3ba2f16ba9c78e776b->enter($__internal_2962b22c3ddc54527faf6bc79210dd32c6bd7255a45d5b3ba2f16ba9c78e776b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2962b22c3ddc54527faf6bc79210dd32c6bd7255a45d5b3ba2f16ba9c78e776b->leave($__internal_2962b22c3ddc54527faf6bc79210dd32c6bd7255a45d5b3ba2f16ba9c78e776b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be7f4d0a9c63edf6bb0652146685c54bb74789690527d1a02bd93b30bdf2d283 = $this->env->getExtension("native_profiler");
        $__internal_be7f4d0a9c63edf6bb0652146685c54bb74789690527d1a02bd93b30bdf2d283->enter($__internal_be7f4d0a9c63edf6bb0652146685c54bb74789690527d1a02bd93b30bdf2d283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-5 col-md-offset-1 left\">
\t\t\t<img class=\"img-style-3\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("uploads/film/" . $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "folder", array())) . "")), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-5\">

\t\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "titre", array()), "html", null, true);
        echo "</h2>
\t\t\t<hr>
\t\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "description", array()), "html", null, true);
        echo "</p>

\t\t</div>
\t</div>
\t<div class=\"col-md-10 col-md-offset-1\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Commentaires : </h2>
\t\t\t<hr />
\t\t\t<section class=\"comments\" id=\"comments\">

\t\t\t\t<h3>Add Comment</h3>

\t\t\t\t";
        // line 24
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Comment:new", array("film_id" => $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id", array()))));
        echo "
\t\t        <section class=\"previous-comments\">
\t\t            <h3>Comments</h3>
\t\t            ";
        // line 27
        $this->loadTemplate("FrontendBundle:Comment:index.html.twig", "FrontendBundle:Default:show.html.twig", 27)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 28
        echo "\t\t        </section>
\t\t    </section>
\t\t</div>
\t</div>

";
        
        $__internal_be7f4d0a9c63edf6bb0652146685c54bb74789690527d1a02bd93b30bdf2d283->leave($__internal_be7f4d0a9c63edf6bb0652146685c54bb74789690527d1a02bd93b30bdf2d283_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 28,  77 => 27,  71 => 24,  56 => 12,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="col-md-12">*/
/* 		<div class="col-md-5 col-md-offset-1 left">*/
/* 			<img class="img-style-3" src="{{ asset('uploads/film/' ~ film.folder ~ '') }}">*/
/* 		</div>*/
/* 		<div class="col-md-5">*/
/* */
/* 			<h2>{{ film.titre }}</h2>*/
/* 			<hr>*/
/* 			<p>{{ film.description }}</p>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-10 col-md-offset-1">*/
/* 		<div class="col-md-12">*/
/* 			<h2>Commentaires : </h2>*/
/* 			<hr />*/
/* 			<section class="comments" id="comments">*/
/* */
/* 				<h3>Add Comment</h3>*/
/* */
/* 				{{ render(controller( 'FrontendBundle:Comment:new', { 'film_id': film.id } )) }}*/
/* 		        <section class="previous-comments">*/
/* 		            <h3>Comments</h3>*/
/* 		            {% include 'FrontendBundle:Comment:index.html.twig' with { 'comments': comments } %}*/
/* 		        </section>*/
/* 		    </section>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
