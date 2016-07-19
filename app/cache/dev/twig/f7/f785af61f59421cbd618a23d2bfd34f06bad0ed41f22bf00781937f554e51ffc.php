<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_0adc0c1137653a0956825482b01217ccbe90fb64e94bc3cc5a557a98db91b764 extends Twig_Template
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
        $__internal_be0b43e1c9b3be219d783abd0b433406bebb4ff7c0713d319c9702491148aa54 = $this->env->getExtension("native_profiler");
        $__internal_be0b43e1c9b3be219d783abd0b433406bebb4ff7c0713d319c9702491148aa54->enter($__internal_be0b43e1c9b3be219d783abd0b433406bebb4ff7c0713d319c9702491148aa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_be0b43e1c9b3be219d783abd0b433406bebb4ff7c0713d319c9702491148aa54->leave($__internal_be0b43e1c9b3be219d783abd0b433406bebb4ff7c0713d319c9702491148aa54_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7f6f8f76a8231f72f58f700331e612ab19a4586939640fff0f2df194570aceeb = $this->env->getExtension("native_profiler");
        $__internal_7f6f8f76a8231f72f58f700331e612ab19a4586939640fff0f2df194570aceeb->enter($__internal_7f6f8f76a8231f72f58f700331e612ab19a4586939640fff0f2df194570aceeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7f6f8f76a8231f72f58f700331e612ab19a4586939640fff0f2df194570aceeb->leave($__internal_7f6f8f76a8231f72f58f700331e612ab19a4586939640fff0f2df194570aceeb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_510867d0514277a3548becc9c9ff6400167a280938606a5f821e6f613387fec3 = $this->env->getExtension("native_profiler");
        $__internal_510867d0514277a3548becc9c9ff6400167a280938606a5f821e6f613387fec3->enter($__internal_510867d0514277a3548becc9c9ff6400167a280938606a5f821e6f613387fec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_510867d0514277a3548becc9c9ff6400167a280938606a5f821e6f613387fec3->leave($__internal_510867d0514277a3548becc9c9ff6400167a280938606a5f821e6f613387fec3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dd82547bfd94f96edd36fc4ef7e546cb4deb867e3aab6439879ab8b1bd23745e = $this->env->getExtension("native_profiler");
        $__internal_dd82547bfd94f96edd36fc4ef7e546cb4deb867e3aab6439879ab8b1bd23745e->enter($__internal_dd82547bfd94f96edd36fc4ef7e546cb4deb867e3aab6439879ab8b1bd23745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dd82547bfd94f96edd36fc4ef7e546cb4deb867e3aab6439879ab8b1bd23745e->leave($__internal_dd82547bfd94f96edd36fc4ef7e546cb4deb867e3aab6439879ab8b1bd23745e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
