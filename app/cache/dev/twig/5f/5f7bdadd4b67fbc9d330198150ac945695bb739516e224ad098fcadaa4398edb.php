<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b80c6a8fcd16166f93f88de8b71d4b217742611645a077a4515cbc851ce6999d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5024bc9eb89b5391caae4e2849d382266906b0f7d66188f2fc67aa081134da3 = $this->env->getExtension("native_profiler");
        $__internal_f5024bc9eb89b5391caae4e2849d382266906b0f7d66188f2fc67aa081134da3->enter($__internal_f5024bc9eb89b5391caae4e2849d382266906b0f7d66188f2fc67aa081134da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f5024bc9eb89b5391caae4e2849d382266906b0f7d66188f2fc67aa081134da3->leave($__internal_f5024bc9eb89b5391caae4e2849d382266906b0f7d66188f2fc67aa081134da3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4bd915035722a819738ff79b6d744d1cd1fa8f793ef6ee43fee241134328826f = $this->env->getExtension("native_profiler");
        $__internal_4bd915035722a819738ff79b6d744d1cd1fa8f793ef6ee43fee241134328826f->enter($__internal_4bd915035722a819738ff79b6d744d1cd1fa8f793ef6ee43fee241134328826f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4bd915035722a819738ff79b6d744d1cd1fa8f793ef6ee43fee241134328826f->leave($__internal_4bd915035722a819738ff79b6d744d1cd1fa8f793ef6ee43fee241134328826f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
