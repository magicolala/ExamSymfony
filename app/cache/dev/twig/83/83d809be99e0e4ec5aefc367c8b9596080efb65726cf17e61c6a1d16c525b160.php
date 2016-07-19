<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1ed80062d5e0dc4cf222eeff991d2553b65a64fa5446f91df57db59fe1edc41a extends Twig_Template
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
        $__internal_f863ca937a2a500f2145af372f7733af47e26a9fef84fc54929965bf2ce9d9df = $this->env->getExtension("native_profiler");
        $__internal_f863ca937a2a500f2145af372f7733af47e26a9fef84fc54929965bf2ce9d9df->enter($__internal_f863ca937a2a500f2145af372f7733af47e26a9fef84fc54929965bf2ce9d9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f863ca937a2a500f2145af372f7733af47e26a9fef84fc54929965bf2ce9d9df->leave($__internal_f863ca937a2a500f2145af372f7733af47e26a9fef84fc54929965bf2ce9d9df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
