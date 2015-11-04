<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e430f432d3a05f8d62efe0fae2a2d907422b1b237eafd684af6fc3bf8ce7765e extends Twig_Template
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
        $__internal_283f3f7fd35fd6e775cfa1d6f68983e8bcb0077e871929ce85914b89b58f7800 = $this->env->getExtension("native_profiler");
        $__internal_283f3f7fd35fd6e775cfa1d6f68983e8bcb0077e871929ce85914b89b58f7800->enter($__internal_283f3f7fd35fd6e775cfa1d6f68983e8bcb0077e871929ce85914b89b58f7800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_283f3f7fd35fd6e775cfa1d6f68983e8bcb0077e871929ce85914b89b58f7800->leave($__internal_283f3f7fd35fd6e775cfa1d6f68983e8bcb0077e871929ce85914b89b58f7800_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
