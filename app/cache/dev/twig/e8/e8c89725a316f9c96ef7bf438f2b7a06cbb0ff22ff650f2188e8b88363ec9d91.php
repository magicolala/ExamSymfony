<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_2e78ed69b57b7708f2c2cd3d35a101dab1748870bb0467f0d6e5da7662c97df4 extends Twig_Template
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
        $__internal_39ee70b56c655ebc9703a5ba1d449e708a7c50267f76d8ae9ac3b3bf24bdf43a = $this->env->getExtension("native_profiler");
        $__internal_39ee70b56c655ebc9703a5ba1d449e708a7c50267f76d8ae9ac3b3bf24bdf43a->enter($__internal_39ee70b56c655ebc9703a5ba1d449e708a7c50267f76d8ae9ac3b3bf24bdf43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_39ee70b56c655ebc9703a5ba1d449e708a7c50267f76d8ae9ac3b3bf24bdf43a->leave($__internal_39ee70b56c655ebc9703a5ba1d449e708a7c50267f76d8ae9ac3b3bf24bdf43a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
