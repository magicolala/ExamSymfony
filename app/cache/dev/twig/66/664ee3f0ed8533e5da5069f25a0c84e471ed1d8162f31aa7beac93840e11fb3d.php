<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_d678f54f1dd7269cbcb5391c720418893d35126b77f5d1df4102f2ae09043179 extends Twig_Template
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
        $__internal_bad2e466bb42cbb61bc9c98b4ad7edf988f57990325bb8c00cde210be5c8770c = $this->env->getExtension("native_profiler");
        $__internal_bad2e466bb42cbb61bc9c98b4ad7edf988f57990325bb8c00cde210be5c8770c->enter($__internal_bad2e466bb42cbb61bc9c98b4ad7edf988f57990325bb8c00cde210be5c8770c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bad2e466bb42cbb61bc9c98b4ad7edf988f57990325bb8c00cde210be5c8770c->leave($__internal_bad2e466bb42cbb61bc9c98b4ad7edf988f57990325bb8c00cde210be5c8770c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c3b78618aa85201b7de54465953d98267f6144e1e80389749e03580c0f46be7c = $this->env->getExtension("native_profiler");
        $__internal_c3b78618aa85201b7de54465953d98267f6144e1e80389749e03580c0f46be7c->enter($__internal_c3b78618aa85201b7de54465953d98267f6144e1e80389749e03580c0f46be7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c3b78618aa85201b7de54465953d98267f6144e1e80389749e03580c0f46be7c->leave($__internal_c3b78618aa85201b7de54465953d98267f6144e1e80389749e03580c0f46be7c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7fab5824e85b1a0e97cbfa4c67e99acb9b7e913c6eb60270e9010b18ded27157 = $this->env->getExtension("native_profiler");
        $__internal_7fab5824e85b1a0e97cbfa4c67e99acb9b7e913c6eb60270e9010b18ded27157->enter($__internal_7fab5824e85b1a0e97cbfa4c67e99acb9b7e913c6eb60270e9010b18ded27157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7fab5824e85b1a0e97cbfa4c67e99acb9b7e913c6eb60270e9010b18ded27157->leave($__internal_7fab5824e85b1a0e97cbfa4c67e99acb9b7e913c6eb60270e9010b18ded27157_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fae9cf7ace5e741bdb030efd71f3e32efcd96b914ac1546556ed54106669e490 = $this->env->getExtension("native_profiler");
        $__internal_fae9cf7ace5e741bdb030efd71f3e32efcd96b914ac1546556ed54106669e490->enter($__internal_fae9cf7ace5e741bdb030efd71f3e32efcd96b914ac1546556ed54106669e490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fae9cf7ace5e741bdb030efd71f3e32efcd96b914ac1546556ed54106669e490->leave($__internal_fae9cf7ace5e741bdb030efd71f3e32efcd96b914ac1546556ed54106669e490_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
