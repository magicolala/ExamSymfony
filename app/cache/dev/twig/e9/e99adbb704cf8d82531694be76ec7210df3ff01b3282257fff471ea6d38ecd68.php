<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_45e66796c6dea508e41349121a76f12490edbb65817c9a2cce8f9371304e4d88 extends Twig_Template
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
        $__internal_3ed27dbf0a45693c24176907e1cacb166e055aa85f30ba4753ac3041cd59a484 = $this->env->getExtension("native_profiler");
        $__internal_3ed27dbf0a45693c24176907e1cacb166e055aa85f30ba4753ac3041cd59a484->enter($__internal_3ed27dbf0a45693c24176907e1cacb166e055aa85f30ba4753ac3041cd59a484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3ed27dbf0a45693c24176907e1cacb166e055aa85f30ba4753ac3041cd59a484->leave($__internal_3ed27dbf0a45693c24176907e1cacb166e055aa85f30ba4753ac3041cd59a484_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
