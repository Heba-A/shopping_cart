<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ad9e27d76c7172bf6fab0dabd34b8a15ebdd6b06ae5ab52e23cad41e1f12b943 extends Twig_Template
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
        $__internal_2ac6ee3651bcb08d6e8a733d379d08e4a9bf9c6a2eff2c1b519479e3970b9198 = $this->env->getExtension("native_profiler");
        $__internal_2ac6ee3651bcb08d6e8a733d379d08e4a9bf9c6a2eff2c1b519479e3970b9198->enter($__internal_2ac6ee3651bcb08d6e8a733d379d08e4a9bf9c6a2eff2c1b519479e3970b9198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2ac6ee3651bcb08d6e8a733d379d08e4a9bf9c6a2eff2c1b519479e3970b9198->leave($__internal_2ac6ee3651bcb08d6e8a733d379d08e4a9bf9c6a2eff2c1b519479e3970b9198_prof);

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
