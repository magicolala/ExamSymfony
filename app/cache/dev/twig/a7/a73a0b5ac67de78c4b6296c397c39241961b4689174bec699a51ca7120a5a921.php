<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d007dcc1c515fc25529243016d74178d1d5d24111cf8ea9603adfdd24aaf7c6f extends Twig_Template
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
        $__internal_d36fafda310257b88521794e9abc8832b387e6034219c6f7d4afbb1f6aa443e3 = $this->env->getExtension("native_profiler");
        $__internal_d36fafda310257b88521794e9abc8832b387e6034219c6f7d4afbb1f6aa443e3->enter($__internal_d36fafda310257b88521794e9abc8832b387e6034219c6f7d4afbb1f6aa443e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d36fafda310257b88521794e9abc8832b387e6034219c6f7d4afbb1f6aa443e3->leave($__internal_d36fafda310257b88521794e9abc8832b387e6034219c6f7d4afbb1f6aa443e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
