<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4b0ed20f0049991140e84dc678c216b5b931867e6e7fbbecaec0299ef2923793 extends Twig_Template
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
        $__internal_6440b9885b3c0c233d7d1a6b0a5bc8e17d6f600882004e01a03c67120e60b5e9 = $this->env->getExtension("native_profiler");
        $__internal_6440b9885b3c0c233d7d1a6b0a5bc8e17d6f600882004e01a03c67120e60b5e9->enter($__internal_6440b9885b3c0c233d7d1a6b0a5bc8e17d6f600882004e01a03c67120e60b5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6440b9885b3c0c233d7d1a6b0a5bc8e17d6f600882004e01a03c67120e60b5e9->leave($__internal_6440b9885b3c0c233d7d1a6b0a5bc8e17d6f600882004e01a03c67120e60b5e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
