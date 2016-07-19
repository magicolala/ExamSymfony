<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_792615abc1daac9a038b08e01d5a23ae3e96e045ead6d6e918aae0bab54d21b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d8ba65046f64bc6b3035b00219f4675fd20c42c9150f03a133b1e7de72a9ba0 = $this->env->getExtension("native_profiler");
        $__internal_4d8ba65046f64bc6b3035b00219f4675fd20c42c9150f03a133b1e7de72a9ba0->enter($__internal_4d8ba65046f64bc6b3035b00219f4675fd20c42c9150f03a133b1e7de72a9ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d8ba65046f64bc6b3035b00219f4675fd20c42c9150f03a133b1e7de72a9ba0->leave($__internal_4d8ba65046f64bc6b3035b00219f4675fd20c42c9150f03a133b1e7de72a9ba0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cdb0bcbd7750d6a26b202f3b63b1360f25fff43a8a951f2c0686f3175e4986c6 = $this->env->getExtension("native_profiler");
        $__internal_cdb0bcbd7750d6a26b202f3b63b1360f25fff43a8a951f2c0686f3175e4986c6->enter($__internal_cdb0bcbd7750d6a26b202f3b63b1360f25fff43a8a951f2c0686f3175e4986c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cdb0bcbd7750d6a26b202f3b63b1360f25fff43a8a951f2c0686f3175e4986c6->leave($__internal_cdb0bcbd7750d6a26b202f3b63b1360f25fff43a8a951f2c0686f3175e4986c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d884b90ef603dd642b31e2eeee69535f118f1ca2ad2c61075355a5c90a193c0 = $this->env->getExtension("native_profiler");
        $__internal_8d884b90ef603dd642b31e2eeee69535f118f1ca2ad2c61075355a5c90a193c0->enter($__internal_8d884b90ef603dd642b31e2eeee69535f118f1ca2ad2c61075355a5c90a193c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8d884b90ef603dd642b31e2eeee69535f118f1ca2ad2c61075355a5c90a193c0->leave($__internal_8d884b90ef603dd642b31e2eeee69535f118f1ca2ad2c61075355a5c90a193c0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8234aeacdf507d11300859502ebd2094f42a2f55e7b7b27868231f57ab7a2ddc = $this->env->getExtension("native_profiler");
        $__internal_8234aeacdf507d11300859502ebd2094f42a2f55e7b7b27868231f57ab7a2ddc->enter($__internal_8234aeacdf507d11300859502ebd2094f42a2f55e7b7b27868231f57ab7a2ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8234aeacdf507d11300859502ebd2094f42a2f55e7b7b27868231f57ab7a2ddc->leave($__internal_8234aeacdf507d11300859502ebd2094f42a2f55e7b7b27868231f57ab7a2ddc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
