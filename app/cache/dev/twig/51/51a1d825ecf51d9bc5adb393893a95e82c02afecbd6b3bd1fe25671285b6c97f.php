<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_063df717b4e05f5654c4ff89ce0ad403a55c5442785299f88dcae2367fc21515 extends Twig_Template
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
        $__internal_ddd2e60adc6acbcc9677c33b0eee37921a6cfaa02715cb8990224961723815b9 = $this->env->getExtension("native_profiler");
        $__internal_ddd2e60adc6acbcc9677c33b0eee37921a6cfaa02715cb8990224961723815b9->enter($__internal_ddd2e60adc6acbcc9677c33b0eee37921a6cfaa02715cb8990224961723815b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ddd2e60adc6acbcc9677c33b0eee37921a6cfaa02715cb8990224961723815b9->leave($__internal_ddd2e60adc6acbcc9677c33b0eee37921a6cfaa02715cb8990224961723815b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
