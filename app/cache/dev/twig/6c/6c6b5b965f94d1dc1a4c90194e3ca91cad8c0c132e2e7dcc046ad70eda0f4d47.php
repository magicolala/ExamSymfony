<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b2778ca9beb8c716f87b897c8677b128cfc3d734b1d66c2dc2cb03dba7fdbe4c extends Twig_Template
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
        $__internal_3a66124d9bfa800f9dda15e35ba274c568214bf88ac05b01edd8c5c1d74e1ddf = $this->env->getExtension("native_profiler");
        $__internal_3a66124d9bfa800f9dda15e35ba274c568214bf88ac05b01edd8c5c1d74e1ddf->enter($__internal_3a66124d9bfa800f9dda15e35ba274c568214bf88ac05b01edd8c5c1d74e1ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3a66124d9bfa800f9dda15e35ba274c568214bf88ac05b01edd8c5c1d74e1ddf->leave($__internal_3a66124d9bfa800f9dda15e35ba274c568214bf88ac05b01edd8c5c1d74e1ddf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
