<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bd79626ca6b2cdf6aa51887101740b4222c2e0eedf61f0cc4d9ca959b8b73140 extends Twig_Template
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
        $__internal_3edc73f3522836c80b51c8965094ffe93d3a6ff10f73333892d62c5703b0cfc0 = $this->env->getExtension("native_profiler");
        $__internal_3edc73f3522836c80b51c8965094ffe93d3a6ff10f73333892d62c5703b0cfc0->enter($__internal_3edc73f3522836c80b51c8965094ffe93d3a6ff10f73333892d62c5703b0cfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3edc73f3522836c80b51c8965094ffe93d3a6ff10f73333892d62c5703b0cfc0->leave($__internal_3edc73f3522836c80b51c8965094ffe93d3a6ff10f73333892d62c5703b0cfc0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
