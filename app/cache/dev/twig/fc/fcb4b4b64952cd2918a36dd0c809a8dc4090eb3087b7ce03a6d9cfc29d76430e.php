<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_480ba13595860aa0659da0f4152b4fbb9475150f09dcfc4799e531b3266baed4 extends Twig_Template
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
        $__internal_9eb0072f1f00dc8b81ebb559d291bb6b58a2c451545555ae7e96b843a2a2f2e3 = $this->env->getExtension("native_profiler");
        $__internal_9eb0072f1f00dc8b81ebb559d291bb6b58a2c451545555ae7e96b843a2a2f2e3->enter($__internal_9eb0072f1f00dc8b81ebb559d291bb6b58a2c451545555ae7e96b843a2a2f2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9eb0072f1f00dc8b81ebb559d291bb6b58a2c451545555ae7e96b843a2a2f2e3->leave($__internal_9eb0072f1f00dc8b81ebb559d291bb6b58a2c451545555ae7e96b843a2a2f2e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
