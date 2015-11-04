<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_715a19d11151c2f645e7987e3f196cf4514fe9335056b7e843312799d02b150a extends Twig_Template
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
        $__internal_1e41eaf0ea18e2c55a8ee1d7ed5c04b052e50de9b12de7f490f11db09d10bde3 = $this->env->getExtension("native_profiler");
        $__internal_1e41eaf0ea18e2c55a8ee1d7ed5c04b052e50de9b12de7f490f11db09d10bde3->enter($__internal_1e41eaf0ea18e2c55a8ee1d7ed5c04b052e50de9b12de7f490f11db09d10bde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1e41eaf0ea18e2c55a8ee1d7ed5c04b052e50de9b12de7f490f11db09d10bde3->leave($__internal_1e41eaf0ea18e2c55a8ee1d7ed5c04b052e50de9b12de7f490f11db09d10bde3_prof);

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
