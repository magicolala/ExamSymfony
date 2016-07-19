<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3080e330b8c90939512f0036a02ac88e5241845267ee36376d2f94376fa7be07 extends Twig_Template
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
        $__internal_0bdf4843668e8c498975d1c3aea89eaa0bdcff7b566a76f8c22e15e44763a38a = $this->env->getExtension("native_profiler");
        $__internal_0bdf4843668e8c498975d1c3aea89eaa0bdcff7b566a76f8c22e15e44763a38a->enter($__internal_0bdf4843668e8c498975d1c3aea89eaa0bdcff7b566a76f8c22e15e44763a38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0bdf4843668e8c498975d1c3aea89eaa0bdcff7b566a76f8c22e15e44763a38a->leave($__internal_0bdf4843668e8c498975d1c3aea89eaa0bdcff7b566a76f8c22e15e44763a38a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
