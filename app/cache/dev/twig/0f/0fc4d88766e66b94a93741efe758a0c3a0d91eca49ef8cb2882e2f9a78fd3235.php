<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1cb3a218a9cfb466c2df6aaaf10debe08df0bef2fcb6564cb38d222a8ae95def extends Twig_Template
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
        $__internal_9c3858bc7a1aa6550d256ba3a97f84c8393962286a576b33ddc3e0edfd4f7466 = $this->env->getExtension("native_profiler");
        $__internal_9c3858bc7a1aa6550d256ba3a97f84c8393962286a576b33ddc3e0edfd4f7466->enter($__internal_9c3858bc7a1aa6550d256ba3a97f84c8393962286a576b33ddc3e0edfd4f7466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9c3858bc7a1aa6550d256ba3a97f84c8393962286a576b33ddc3e0edfd4f7466->leave($__internal_9c3858bc7a1aa6550d256ba3a97f84c8393962286a576b33ddc3e0edfd4f7466_prof);

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
