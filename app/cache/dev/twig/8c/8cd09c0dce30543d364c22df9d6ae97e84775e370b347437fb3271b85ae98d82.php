<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_da6185242e0566ac780a06ac82cf56ed8133af204b551137912e75dd4dd1d3df extends Twig_Template
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
        $__internal_108386b7ba73342bb133b246e24f3a7fc4865deba4ab7ec8bc2a11c93fe0a537 = $this->env->getExtension("native_profiler");
        $__internal_108386b7ba73342bb133b246e24f3a7fc4865deba4ab7ec8bc2a11c93fe0a537->enter($__internal_108386b7ba73342bb133b246e24f3a7fc4865deba4ab7ec8bc2a11c93fe0a537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_108386b7ba73342bb133b246e24f3a7fc4865deba4ab7ec8bc2a11c93fe0a537->leave($__internal_108386b7ba73342bb133b246e24f3a7fc4865deba4ab7ec8bc2a11c93fe0a537_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
