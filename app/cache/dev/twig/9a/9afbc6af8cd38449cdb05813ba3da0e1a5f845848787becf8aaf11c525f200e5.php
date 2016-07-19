<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5b92e023cda348f1eeb86f38203f3d4797faf03e2d95ab3d877c987eec7da3f4 extends Twig_Template
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
        $__internal_da9210f277661b36f758e3c4921619f82a930882df6514f8685b9614b8a2e839 = $this->env->getExtension("native_profiler");
        $__internal_da9210f277661b36f758e3c4921619f82a930882df6514f8685b9614b8a2e839->enter($__internal_da9210f277661b36f758e3c4921619f82a930882df6514f8685b9614b8a2e839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_da9210f277661b36f758e3c4921619f82a930882df6514f8685b9614b8a2e839->leave($__internal_da9210f277661b36f758e3c4921619f82a930882df6514f8685b9614b8a2e839_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
