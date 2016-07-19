<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_dc92a12449101b73a7451a846fe4738d3b3308ae7dee5ff2ae0eff6794cf5130 extends Twig_Template
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
        $__internal_73e4c62cbb514adbffcb32a9e6603088acf62baea067162cc1bc8cdf259cdeb3 = $this->env->getExtension("native_profiler");
        $__internal_73e4c62cbb514adbffcb32a9e6603088acf62baea067162cc1bc8cdf259cdeb3->enter($__internal_73e4c62cbb514adbffcb32a9e6603088acf62baea067162cc1bc8cdf259cdeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_73e4c62cbb514adbffcb32a9e6603088acf62baea067162cc1bc8cdf259cdeb3->leave($__internal_73e4c62cbb514adbffcb32a9e6603088acf62baea067162cc1bc8cdf259cdeb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
