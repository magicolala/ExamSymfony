<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4431ebb9277b2a7595183908effb0cf5ee121e8eafcca00e6f4d5c95b55e2b36 extends Twig_Template
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
        $__internal_828c57dbf53441bd7a03c11db63270530c5f68d86364044cab3b368279001b3a = $this->env->getExtension("native_profiler");
        $__internal_828c57dbf53441bd7a03c11db63270530c5f68d86364044cab3b368279001b3a->enter($__internal_828c57dbf53441bd7a03c11db63270530c5f68d86364044cab3b368279001b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_828c57dbf53441bd7a03c11db63270530c5f68d86364044cab3b368279001b3a->leave($__internal_828c57dbf53441bd7a03c11db63270530c5f68d86364044cab3b368279001b3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
