<?php

/* FrontendBundle:Default:article.html.twig */
class __TwigTemplate_f7f1dafe96c181136350f99c8cf089975804dfe75c209c65f09c31c4b9ec5a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:article.html.twig", 1);
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
        $__internal_ab68d719327221547d4ffe2eaf7215c599cdba66e77d32185e9b7d070638c8cd = $this->env->getExtension("native_profiler");
        $__internal_ab68d719327221547d4ffe2eaf7215c599cdba66e77d32185e9b7d070638c8cd->enter($__internal_ab68d719327221547d4ffe2eaf7215c599cdba66e77d32185e9b7d070638c8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab68d719327221547d4ffe2eaf7215c599cdba66e77d32185e9b7d070638c8cd->leave($__internal_ab68d719327221547d4ffe2eaf7215c599cdba66e77d32185e9b7d070638c8cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f27668f72c66674ecb44d35de322e261d157024940309d03c0c9a938bb175719 = $this->env->getExtension("native_profiler");
        $__internal_f27668f72c66674ecb44d35de322e261d157024940309d03c0c9a938bb175719->enter($__internal_f27668f72c66674ecb44d35de322e261d157024940309d03c0c9a938bb175719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f27668f72c66674ecb44d35de322e261d157024940309d03c0c9a938bb175719->leave($__internal_f27668f72c66674ecb44d35de322e261d157024940309d03c0c9a938bb175719_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:article.html.twig";
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
