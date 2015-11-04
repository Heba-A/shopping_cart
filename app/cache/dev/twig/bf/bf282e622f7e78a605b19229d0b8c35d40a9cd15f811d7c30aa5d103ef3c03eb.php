<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_657e9cd4ea21e1f81e906dde63b683c0ea6687ad748f116e99654849b5987638 extends Twig_Template
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
        $__internal_ac662b513a6093fb60ba4ba41c97d2199584606f3aca2d00941a550bac53f7d5 = $this->env->getExtension("native_profiler");
        $__internal_ac662b513a6093fb60ba4ba41c97d2199584606f3aca2d00941a550bac53f7d5->enter($__internal_ac662b513a6093fb60ba4ba41c97d2199584606f3aca2d00941a550bac53f7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ac662b513a6093fb60ba4ba41c97d2199584606f3aca2d00941a550bac53f7d5->leave($__internal_ac662b513a6093fb60ba4ba41c97d2199584606f3aca2d00941a550bac53f7d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
