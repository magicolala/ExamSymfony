<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_60cc4b04378a20710976e4d17dec624a9d1d0e957ddd68b933219a2ab28801c9 extends Twig_Template
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
        $__internal_e7b402657993cc659f15a4e74571f878d4796fbbc876b5db40b70f5f533f35d9 = $this->env->getExtension("native_profiler");
        $__internal_e7b402657993cc659f15a4e74571f878d4796fbbc876b5db40b70f5f533f35d9->enter($__internal_e7b402657993cc659f15a4e74571f878d4796fbbc876b5db40b70f5f533f35d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e7b402657993cc659f15a4e74571f878d4796fbbc876b5db40b70f5f533f35d9->leave($__internal_e7b402657993cc659f15a4e74571f878d4796fbbc876b5db40b70f5f533f35d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
