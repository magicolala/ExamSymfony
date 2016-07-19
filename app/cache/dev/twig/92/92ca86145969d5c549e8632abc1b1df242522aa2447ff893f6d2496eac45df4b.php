<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b8a1158974aa496d51c96590a01b7dc26c3dd0677b348e20c0c8155fe5e25554 extends Twig_Template
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
        $__internal_6f57b643398c65205307ca0fd076baa380df2871539be837bd8c64d4cf6f0055 = $this->env->getExtension("native_profiler");
        $__internal_6f57b643398c65205307ca0fd076baa380df2871539be837bd8c64d4cf6f0055->enter($__internal_6f57b643398c65205307ca0fd076baa380df2871539be837bd8c64d4cf6f0055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6f57b643398c65205307ca0fd076baa380df2871539be837bd8c64d4cf6f0055->leave($__internal_6f57b643398c65205307ca0fd076baa380df2871539be837bd8c64d4cf6f0055_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
