<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0cf6a829707d74d71e5dc2c28c99c093c564ca974527e6d5c53ca0c1291fa35d extends Twig_Template
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
        $__internal_d2267c0bedeb3870f69b4a305c050c27cd45e86d548b99b53aece8bc8970dcf6 = $this->env->getExtension("native_profiler");
        $__internal_d2267c0bedeb3870f69b4a305c050c27cd45e86d548b99b53aece8bc8970dcf6->enter($__internal_d2267c0bedeb3870f69b4a305c050c27cd45e86d548b99b53aece8bc8970dcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d2267c0bedeb3870f69b4a305c050c27cd45e86d548b99b53aece8bc8970dcf6->leave($__internal_d2267c0bedeb3870f69b4a305c050c27cd45e86d548b99b53aece8bc8970dcf6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
