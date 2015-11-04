<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b614b5cfc588a2dd7958be188fe871d51ed2d936546ff87d88aeda62a07ca057 extends Twig_Template
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
        $__internal_9c7ea007dd8b1d6b46f254b0c987a612f8b342cc47ac50cf91031ca92253e7a7 = $this->env->getExtension("native_profiler");
        $__internal_9c7ea007dd8b1d6b46f254b0c987a612f8b342cc47ac50cf91031ca92253e7a7->enter($__internal_9c7ea007dd8b1d6b46f254b0c987a612f8b342cc47ac50cf91031ca92253e7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9c7ea007dd8b1d6b46f254b0c987a612f8b342cc47ac50cf91031ca92253e7a7->leave($__internal_9c7ea007dd8b1d6b46f254b0c987a612f8b342cc47ac50cf91031ca92253e7a7_prof);

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
