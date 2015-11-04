<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2bc4d04acffcdc518e9259ef1354caea367c523b9500d492d3cea274fba85fe6 extends Twig_Template
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
        $__internal_707eeec5aea4209dd905e68fa3646c3dac85e84545c0ba5d5ac91004b2d2e7d1 = $this->env->getExtension("native_profiler");
        $__internal_707eeec5aea4209dd905e68fa3646c3dac85e84545c0ba5d5ac91004b2d2e7d1->enter($__internal_707eeec5aea4209dd905e68fa3646c3dac85e84545c0ba5d5ac91004b2d2e7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_707eeec5aea4209dd905e68fa3646c3dac85e84545c0ba5d5ac91004b2d2e7d1->leave($__internal_707eeec5aea4209dd905e68fa3646c3dac85e84545c0ba5d5ac91004b2d2e7d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
