<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d8268ccaee80efe29298d3a6908c1b3bac37239dedd28de4a142e00d1c52e6a7 extends Twig_Template
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
        $__internal_a79b36bf944036f9b248ab7462ec307953177b702c5561ca5d592fe2b9cd892d = $this->env->getExtension("native_profiler");
        $__internal_a79b36bf944036f9b248ab7462ec307953177b702c5561ca5d592fe2b9cd892d->enter($__internal_a79b36bf944036f9b248ab7462ec307953177b702c5561ca5d592fe2b9cd892d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a79b36bf944036f9b248ab7462ec307953177b702c5561ca5d592fe2b9cd892d->leave($__internal_a79b36bf944036f9b248ab7462ec307953177b702c5561ca5d592fe2b9cd892d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
