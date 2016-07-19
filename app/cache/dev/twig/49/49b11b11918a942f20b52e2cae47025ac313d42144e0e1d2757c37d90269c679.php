<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_133bc01e2c5121ab3744f906a6dd85653d7ab3140933b9b0ca7925bef4767b19 extends Twig_Template
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
        $__internal_da53693f2cc3d313f6d4b2996ae54e744b4330e3e5045864d35993b886d6883d = $this->env->getExtension("native_profiler");
        $__internal_da53693f2cc3d313f6d4b2996ae54e744b4330e3e5045864d35993b886d6883d->enter($__internal_da53693f2cc3d313f6d4b2996ae54e744b4330e3e5045864d35993b886d6883d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_da53693f2cc3d313f6d4b2996ae54e744b4330e3e5045864d35993b886d6883d->leave($__internal_da53693f2cc3d313f6d4b2996ae54e744b4330e3e5045864d35993b886d6883d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
