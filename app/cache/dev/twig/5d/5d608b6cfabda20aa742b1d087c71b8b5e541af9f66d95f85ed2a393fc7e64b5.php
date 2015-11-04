<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ecf35b5d6147e1f2d0f9b9323d015809e65995d2f98c5f2b39087091fa76bb86 extends Twig_Template
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
        $__internal_e0edc0e5eec462ec559b5744356fbc6127eb2847bbf04183e509c402463bfb07 = $this->env->getExtension("native_profiler");
        $__internal_e0edc0e5eec462ec559b5744356fbc6127eb2847bbf04183e509c402463bfb07->enter($__internal_e0edc0e5eec462ec559b5744356fbc6127eb2847bbf04183e509c402463bfb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e0edc0e5eec462ec559b5744356fbc6127eb2847bbf04183e509c402463bfb07->leave($__internal_e0edc0e5eec462ec559b5744356fbc6127eb2847bbf04183e509c402463bfb07_prof);

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
