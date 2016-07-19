<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f2421020daef46453b2e1b9debb1d4cef70bc051d6d5190452f164e820eb3ee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_79563a1a65de5492d9c483929516c97bdaa7efd6e1410b7e4efc906b27854410 = $this->env->getExtension("native_profiler");
        $__internal_79563a1a65de5492d9c483929516c97bdaa7efd6e1410b7e4efc906b27854410->enter($__internal_79563a1a65de5492d9c483929516c97bdaa7efd6e1410b7e4efc906b27854410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79563a1a65de5492d9c483929516c97bdaa7efd6e1410b7e4efc906b27854410->leave($__internal_79563a1a65de5492d9c483929516c97bdaa7efd6e1410b7e4efc906b27854410_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffe7d14ad9265101d04774bf5f2abcdfc5898f174b5db9945674481d4f3b763d = $this->env->getExtension("native_profiler");
        $__internal_ffe7d14ad9265101d04774bf5f2abcdfc5898f174b5db9945674481d4f3b763d->enter($__internal_ffe7d14ad9265101d04774bf5f2abcdfc5898f174b5db9945674481d4f3b763d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ffe7d14ad9265101d04774bf5f2abcdfc5898f174b5db9945674481d4f3b763d->leave($__internal_ffe7d14ad9265101d04774bf5f2abcdfc5898f174b5db9945674481d4f3b763d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_153638f8e0367b063a91433951a49b769a4eabdbd84f86690e7ea89d36b6740f = $this->env->getExtension("native_profiler");
        $__internal_153638f8e0367b063a91433951a49b769a4eabdbd84f86690e7ea89d36b6740f->enter($__internal_153638f8e0367b063a91433951a49b769a4eabdbd84f86690e7ea89d36b6740f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_153638f8e0367b063a91433951a49b769a4eabdbd84f86690e7ea89d36b6740f->leave($__internal_153638f8e0367b063a91433951a49b769a4eabdbd84f86690e7ea89d36b6740f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2dcef88272418836b2e942a80da5d1f753dc68e6f0eb94258ad1113e303a15b = $this->env->getExtension("native_profiler");
        $__internal_a2dcef88272418836b2e942a80da5d1f753dc68e6f0eb94258ad1113e303a15b->enter($__internal_a2dcef88272418836b2e942a80da5d1f753dc68e6f0eb94258ad1113e303a15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a2dcef88272418836b2e942a80da5d1f753dc68e6f0eb94258ad1113e303a15b->leave($__internal_a2dcef88272418836b2e942a80da5d1f753dc68e6f0eb94258ad1113e303a15b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
