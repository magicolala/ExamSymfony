<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f917c325155c5dd64e168dc5996801b92217d993ce11b00346ca551bf2c2574f extends Twig_Template
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
        $__internal_aac034da1431d1db098027b2e0cfd9efe21b687248405090d6df0f3d0732d96e = $this->env->getExtension("native_profiler");
        $__internal_aac034da1431d1db098027b2e0cfd9efe21b687248405090d6df0f3d0732d96e->enter($__internal_aac034da1431d1db098027b2e0cfd9efe21b687248405090d6df0f3d0732d96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_aac034da1431d1db098027b2e0cfd9efe21b687248405090d6df0f3d0732d96e->leave($__internal_aac034da1431d1db098027b2e0cfd9efe21b687248405090d6df0f3d0732d96e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
