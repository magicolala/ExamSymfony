<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_29cadeaf920e811fa0ade912daa1043f99ffbbb9f1d40276b7583841e567ac2e extends Twig_Template
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
        $__internal_f7bff14148422dda98132f75459f107873276de7d6964051f217c895534ed07b = $this->env->getExtension("native_profiler");
        $__internal_f7bff14148422dda98132f75459f107873276de7d6964051f217c895534ed07b->enter($__internal_f7bff14148422dda98132f75459f107873276de7d6964051f217c895534ed07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f7bff14148422dda98132f75459f107873276de7d6964051f217c895534ed07b->leave($__internal_f7bff14148422dda98132f75459f107873276de7d6964051f217c895534ed07b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
