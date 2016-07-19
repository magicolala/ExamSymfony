<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_427e6599a0032cc74ea4bcd0c71c4371adda1370d2bee7da0a1c18de2098ab84 extends Twig_Template
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
        $__internal_958726719a09bac8eda286c0a476a66d2dd26c6798a52c9e2de88cce817c36d7 = $this->env->getExtension("native_profiler");
        $__internal_958726719a09bac8eda286c0a476a66d2dd26c6798a52c9e2de88cce817c36d7->enter($__internal_958726719a09bac8eda286c0a476a66d2dd26c6798a52c9e2de88cce817c36d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_958726719a09bac8eda286c0a476a66d2dd26c6798a52c9e2de88cce817c36d7->leave($__internal_958726719a09bac8eda286c0a476a66d2dd26c6798a52c9e2de88cce817c36d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
