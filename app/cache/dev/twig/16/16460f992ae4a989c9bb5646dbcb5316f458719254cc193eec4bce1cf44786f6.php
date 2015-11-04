<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d5e4259dd176571686d6796f02ebed3284911d1518c3d3e030dca4710a7803ec extends Twig_Template
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
        $__internal_64bff8a92da376707f13624fd3a1586d72c0a001b954f902f526c9f5187353da = $this->env->getExtension("native_profiler");
        $__internal_64bff8a92da376707f13624fd3a1586d72c0a001b954f902f526c9f5187353da->enter($__internal_64bff8a92da376707f13624fd3a1586d72c0a001b954f902f526c9f5187353da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_64bff8a92da376707f13624fd3a1586d72c0a001b954f902f526c9f5187353da->leave($__internal_64bff8a92da376707f13624fd3a1586d72c0a001b954f902f526c9f5187353da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
