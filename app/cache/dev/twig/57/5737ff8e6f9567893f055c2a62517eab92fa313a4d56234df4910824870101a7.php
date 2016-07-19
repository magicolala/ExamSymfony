<?php

/* @Frontend/Default/newfilm.html.twig */
class __TwigTemplate_cf784427e1fe668721a5a222657f6b3158ac8f9fe292eab2567ff909c5afd15b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Frontend/Default/newfilm.html.twig", 1);
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
        $__internal_66b8c7a4df8ffc32f5df640536da084514c2ed51ffdbbdfbf25a7a6c9b8d713b = $this->env->getExtension("native_profiler");
        $__internal_66b8c7a4df8ffc32f5df640536da084514c2ed51ffdbbdfbf25a7a6c9b8d713b->enter($__internal_66b8c7a4df8ffc32f5df640536da084514c2ed51ffdbbdfbf25a7a6c9b8d713b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Frontend/Default/newfilm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66b8c7a4df8ffc32f5df640536da084514c2ed51ffdbbdfbf25a7a6c9b8d713b->leave($__internal_66b8c7a4df8ffc32f5df640536da084514c2ed51ffdbbdfbf25a7a6c9b8d713b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d0b9389aa9eed1864d73040e38a22a58e7bcba74431eda02612b7911f08781c = $this->env->getExtension("native_profiler");
        $__internal_9d0b9389aa9eed1864d73040e38a22a58e7bcba74431eda02612b7911f08781c->enter($__internal_9d0b9389aa9eed1864d73040e38a22a58e7bcba74431eda02612b7911f08781c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"col-md-6 col-md-offset-3 form-new\">
\t
\t<div class=\"col-md-12\">
\t\t<h1>Ajoutez un nouveau film</h1>
\t\t<hr>
\t</div>

\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parution", array()), 'label');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parution", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "folder", array()), 'label');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "folder", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t<hr>
\t\t\t<input type=\"submit\">
\t\t</div>

\t";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_9d0b9389aa9eed1864d73040e38a22a58e7bcba74431eda02612b7911f08781c->leave($__internal_9d0b9389aa9eed1864d73040e38a22a58e7bcba74431eda02612b7911f08781c_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Default/newfilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 42,  97 => 35,  91 => 32,  85 => 29,  79 => 26,  73 => 23,  67 => 20,  61 => 17,  55 => 14,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="col-md-6 col-md-offset-3 form-new">*/
/* 	*/
/* 	<div class="col-md-12">*/
/* 		<h1>Ajoutez un nouveau film</h1>*/
/* 		<hr>*/
/* 	</div>*/
/* */
/* 	{{ form_start(form) }}*/
/* 		<div class="col-md-12">*/
/* 			{{ form_label(form.titre) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_widget(form.titre) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_label(form.description) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_widget(form.description) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_label(form.parution) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_widget(form.parution) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_label(form.folder) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_widget(form.folder) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			<hr>*/
/* 			<input type="submit">*/
/* 		</div>*/
/* */
/* 	{{ form_end(form) }}*/
/* </div>*/
/* */
/* {% endblock %} */
