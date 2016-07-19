<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7fc4b08198b28cd37554775ed25ab286f3e7029d9c9ca9a81571292fa9e8f5e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_52f9121fa8184c35cc2dabe057f240ba04dd3f388055eb7ed7bc4881aebd7d06 = $this->env->getExtension("native_profiler");
        $__internal_52f9121fa8184c35cc2dabe057f240ba04dd3f388055eb7ed7bc4881aebd7d06->enter($__internal_52f9121fa8184c35cc2dabe057f240ba04dd3f388055eb7ed7bc4881aebd7d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52f9121fa8184c35cc2dabe057f240ba04dd3f388055eb7ed7bc4881aebd7d06->leave($__internal_52f9121fa8184c35cc2dabe057f240ba04dd3f388055eb7ed7bc4881aebd7d06_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_055eda8875229b6e61f40008aa64be72d9e98657579f6350edb2fca6ed8353b3 = $this->env->getExtension("native_profiler");
        $__internal_055eda8875229b6e61f40008aa64be72d9e98657579f6350edb2fca6ed8353b3->enter($__internal_055eda8875229b6e61f40008aa64be72d9e98657579f6350edb2fca6ed8353b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_055eda8875229b6e61f40008aa64be72d9e98657579f6350edb2fca6ed8353b3->leave($__internal_055eda8875229b6e61f40008aa64be72d9e98657579f6350edb2fca6ed8353b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2523f616812f253dd2f5672cde23116f060b7d39ed728695755529c1e0921b9e = $this->env->getExtension("native_profiler");
        $__internal_2523f616812f253dd2f5672cde23116f060b7d39ed728695755529c1e0921b9e->enter($__internal_2523f616812f253dd2f5672cde23116f060b7d39ed728695755529c1e0921b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2523f616812f253dd2f5672cde23116f060b7d39ed728695755529c1e0921b9e->leave($__internal_2523f616812f253dd2f5672cde23116f060b7d39ed728695755529c1e0921b9e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26f0b5c416bc88a220941ecdc1abcd2c22ba672fd28d27a90513f3cefcb09c19 = $this->env->getExtension("native_profiler");
        $__internal_26f0b5c416bc88a220941ecdc1abcd2c22ba672fd28d27a90513f3cefcb09c19->enter($__internal_26f0b5c416bc88a220941ecdc1abcd2c22ba672fd28d27a90513f3cefcb09c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26f0b5c416bc88a220941ecdc1abcd2c22ba672fd28d27a90513f3cefcb09c19->leave($__internal_26f0b5c416bc88a220941ecdc1abcd2c22ba672fd28d27a90513f3cefcb09c19_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
