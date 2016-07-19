<?php

/* @Frontend/Default/show.html.twig */
class __TwigTemplate_453459cce09fe5ae05831a79d1e67da5273bfaf6cd60bde522bfd49c0302ea96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Frontend/Default/show.html.twig", 1);
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
        $__internal_8e847caacb699b0c735546102d14027dc0d330bcb2b6816fc7dce5c65e439065 = $this->env->getExtension("native_profiler");
        $__internal_8e847caacb699b0c735546102d14027dc0d330bcb2b6816fc7dce5c65e439065->enter($__internal_8e847caacb699b0c735546102d14027dc0d330bcb2b6816fc7dce5c65e439065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Frontend/Default/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e847caacb699b0c735546102d14027dc0d330bcb2b6816fc7dce5c65e439065->leave($__internal_8e847caacb699b0c735546102d14027dc0d330bcb2b6816fc7dce5c65e439065_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aec5cce93d387afc78f2174a33416344b7cb22a2b265ea7ca1112c05c64d2231 = $this->env->getExtension("native_profiler");
        $__internal_aec5cce93d387afc78f2174a33416344b7cb22a2b265ea7ca1112c05c64d2231->enter($__internal_aec5cce93d387afc78f2174a33416344b7cb22a2b265ea7ca1112c05c64d2231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-5 col-md-offset-1 left\">
\t\t\t<img class=\"img-style-3\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("uploads/film/" . $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "folder", array())) . "")), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-5\">

\t\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "titre", array()), "html", null, true);
        echo "</h2>
\t\t\t<hr>
\t\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "description", array()), "html", null, true);
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Comment:new", array("movie_id" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "id", array()))));
        echo "
\t\t        <section class=\"previous-comments\">
\t\t            <h3>Comments</h3>
\t\t            ";
        // line 27
        $this->loadTemplate("FrontendBundle:Comment:index.html.twig", "@Frontend/Default/show.html.twig", 27)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 28
        echo "\t\t        </section>
\t\t    </section>
\t\t</div>
\t</div>

";
        
        $__internal_aec5cce93d387afc78f2174a33416344b7cb22a2b265ea7ca1112c05c64d2231->leave($__internal_aec5cce93d387afc78f2174a33416344b7cb22a2b265ea7ca1112c05c64d2231_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Default/show.html.twig";
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
/* 			<img class="img-style-3" src="{{ asset('uploads/film/' ~ movie.folder ~ '') }}">*/
/* 		</div>*/
/* 		<div class="col-md-5">*/
/* */
/* 			<h2>{{ movie.titre }}</h2>*/
/* 			<hr>*/
/* 			<p>{{ movie.description }}</p>*/
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
/* 				{{ render(controller( 'FrontendBundle:Comment:new', { 'movie_id': movie.id } )) }}*/
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
