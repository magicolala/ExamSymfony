<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6ac36c881e0ddcbd7dba872d6b32ff2c6e66e6491983f3f99e8e7826a5521437 extends Twig_Template
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
        $__internal_345d728826414ef1cc0496f92abce058c6583d29ee2cd7381024d1bfcff50b39 = $this->env->getExtension("native_profiler");
        $__internal_345d728826414ef1cc0496f92abce058c6583d29ee2cd7381024d1bfcff50b39->enter($__internal_345d728826414ef1cc0496f92abce058c6583d29ee2cd7381024d1bfcff50b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_345d728826414ef1cc0496f92abce058c6583d29ee2cd7381024d1bfcff50b39->leave($__internal_345d728826414ef1cc0496f92abce058c6583d29ee2cd7381024d1bfcff50b39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
