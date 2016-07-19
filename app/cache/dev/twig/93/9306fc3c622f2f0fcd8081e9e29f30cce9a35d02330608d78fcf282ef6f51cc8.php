<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7bdf7ee99454b9729b83e024115b738c8ee459efd37464647696cae532e47bda extends Twig_Template
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
        $__internal_51f5616e5a8fea4433c0f10cee09bc29341da7b3c3c90c13d1ee45f55668b45a = $this->env->getExtension("native_profiler");
        $__internal_51f5616e5a8fea4433c0f10cee09bc29341da7b3c3c90c13d1ee45f55668b45a->enter($__internal_51f5616e5a8fea4433c0f10cee09bc29341da7b3c3c90c13d1ee45f55668b45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_51f5616e5a8fea4433c0f10cee09bc29341da7b3c3c90c13d1ee45f55668b45a->leave($__internal_51f5616e5a8fea4433c0f10cee09bc29341da7b3c3c90c13d1ee45f55668b45a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
