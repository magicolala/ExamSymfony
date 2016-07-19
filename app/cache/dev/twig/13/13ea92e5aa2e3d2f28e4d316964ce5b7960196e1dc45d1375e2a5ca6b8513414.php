<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2dad9d8fa1a441208b5134bb6a227e044fac6f4c6d54dc8ff0b52ea05f4258b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2662c45631ea2c62d539ed0d9f30ac9301a7d60260ed96b54d26c574a3f1eac0 = $this->env->getExtension("native_profiler");
        $__internal_2662c45631ea2c62d539ed0d9f30ac9301a7d60260ed96b54d26c574a3f1eac0->enter($__internal_2662c45631ea2c62d539ed0d9f30ac9301a7d60260ed96b54d26c574a3f1eac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2662c45631ea2c62d539ed0d9f30ac9301a7d60260ed96b54d26c574a3f1eac0->leave($__internal_2662c45631ea2c62d539ed0d9f30ac9301a7d60260ed96b54d26c574a3f1eac0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fc52bce676b43220494cbbc4789ed5a26be51f63e417f87564aeed413f45df4a = $this->env->getExtension("native_profiler");
        $__internal_fc52bce676b43220494cbbc4789ed5a26be51f63e417f87564aeed413f45df4a->enter($__internal_fc52bce676b43220494cbbc4789ed5a26be51f63e417f87564aeed413f45df4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_fc52bce676b43220494cbbc4789ed5a26be51f63e417f87564aeed413f45df4a->leave($__internal_fc52bce676b43220494cbbc4789ed5a26be51f63e417f87564aeed413f45df4a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9b97ed654cf1875196b4a7da9a560cd29aa897b5b693f89c449e3be448e4cd9f = $this->env->getExtension("native_profiler");
        $__internal_9b97ed654cf1875196b4a7da9a560cd29aa897b5b693f89c449e3be448e4cd9f->enter($__internal_9b97ed654cf1875196b4a7da9a560cd29aa897b5b693f89c449e3be448e4cd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9b97ed654cf1875196b4a7da9a560cd29aa897b5b693f89c449e3be448e4cd9f->leave($__internal_9b97ed654cf1875196b4a7da9a560cd29aa897b5b693f89c449e3be448e4cd9f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_73cfc688aceb9be851d839e5d37b91b6138b88ee032ca7e87499be5c6754b470 = $this->env->getExtension("native_profiler");
        $__internal_73cfc688aceb9be851d839e5d37b91b6138b88ee032ca7e87499be5c6754b470->enter($__internal_73cfc688aceb9be851d839e5d37b91b6138b88ee032ca7e87499be5c6754b470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_73cfc688aceb9be851d839e5d37b91b6138b88ee032ca7e87499be5c6754b470->leave($__internal_73cfc688aceb9be851d839e5d37b91b6138b88ee032ca7e87499be5c6754b470_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
