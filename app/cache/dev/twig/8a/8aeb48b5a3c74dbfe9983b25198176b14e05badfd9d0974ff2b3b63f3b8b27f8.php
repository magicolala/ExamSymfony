<?php

/* @Frontend/Default/article.html.twig */
class __TwigTemplate_0c627eae69bfe1d9818a1cc0258071015eb3962b65e177aa8bac937f8cb2b3a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Frontend/Default/article.html.twig", 1);
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
        $__internal_92ffb302836cda52d3ea2623b97b170edeb0c089c5b3e3b750119a4283849bac = $this->env->getExtension("native_profiler");
        $__internal_92ffb302836cda52d3ea2623b97b170edeb0c089c5b3e3b750119a4283849bac->enter($__internal_92ffb302836cda52d3ea2623b97b170edeb0c089c5b3e3b750119a4283849bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Frontend/Default/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92ffb302836cda52d3ea2623b97b170edeb0c089c5b3e3b750119a4283849bac->leave($__internal_92ffb302836cda52d3ea2623b97b170edeb0c089c5b3e3b750119a4283849bac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d91417d9da7536b994cd0977e213f32d93dbb3d23d1b960b55570692409265ef = $this->env->getExtension("native_profiler");
        $__internal_d91417d9da7536b994cd0977e213f32d93dbb3d23d1b960b55570692409265ef->enter($__internal_d91417d9da7536b994cd0977e213f32d93dbb3d23d1b960b55570692409265ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"contenu\"></div>



\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<h3>Titre de l'article</h3>
\t\t\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/wild.jpe"), "html", null, true);
        echo "\" class=\"image-article\"/>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"bloc-article\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"http://lorempixel.com/140/140/\" />
\t\t\t\t\t\t\t<p>autre article</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"http://lorempixel.com/140/140/\" />
\t\t\t\t\t\t\t<p>autre article</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"http://lorempixel.com/140/140/\" />
\t\t\t\t\t\t\t<p>autre article</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_d91417d9da7536b994cd0977e213f32d93dbb3d23d1b960b55570692409265ef->leave($__internal_d91417d9da7536b994cd0977e213f32d93dbb3d23d1b960b55570692409265ef_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Default/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="contenu"></div>*/
/* */
/* */
/* */
/* 	<div class="container-fluid">*/
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 				<div class="row">*/
/* 					<div class="col-md-8">*/
/* 						<h3>Titre de l'article</h3>*/
/* 						<img src="{{ asset('img/wild.jpe') }}" class="image-article"/>*/
/* 						<p>*/
/* 							Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>*/
/* 						</p>*/
/* 					</div>*/
/* 					<div class="bloc-article">*/
/* 						<div class="col-md-4">*/
/* 							<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />*/
/* 							<p>autre article</p>*/
/* 						</div>*/
/* 						<div class="col-md-4">*/
/* 							<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />*/
/* 							<p>autre article</p>*/
/* 						</div>*/
/* 						<div class="col-md-4">*/
/* 							<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />*/
/* 							<p>autre article</p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
