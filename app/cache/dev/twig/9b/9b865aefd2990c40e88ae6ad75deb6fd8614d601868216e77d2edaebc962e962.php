<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b20515c9d3bad4b5575bca49f163c64c317b9fb7e6302964b7b3bdbe7f5d2abd extends Twig_Template
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
        $__internal_2804f7b866bcd215cdb53756057effb977e92defecb46b1051e88be9ca63e90b = $this->env->getExtension("native_profiler");
        $__internal_2804f7b866bcd215cdb53756057effb977e92defecb46b1051e88be9ca63e90b->enter($__internal_2804f7b866bcd215cdb53756057effb977e92defecb46b1051e88be9ca63e90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2804f7b866bcd215cdb53756057effb977e92defecb46b1051e88be9ca63e90b->leave($__internal_2804f7b866bcd215cdb53756057effb977e92defecb46b1051e88be9ca63e90b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
