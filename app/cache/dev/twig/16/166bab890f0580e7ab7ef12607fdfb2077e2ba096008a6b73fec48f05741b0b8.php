<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_eaf28315056656baab7c9fd53661fb5d8738134346055d0158cb1ebd5d817776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_787bf6511628253a55fa6142043e5fadd949adda01cb7159aa31e89af156b025 = $this->env->getExtension("native_profiler");
        $__internal_787bf6511628253a55fa6142043e5fadd949adda01cb7159aa31e89af156b025->enter($__internal_787bf6511628253a55fa6142043e5fadd949adda01cb7159aa31e89af156b025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_787bf6511628253a55fa6142043e5fadd949adda01cb7159aa31e89af156b025->leave($__internal_787bf6511628253a55fa6142043e5fadd949adda01cb7159aa31e89af156b025_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_35e1dc28df5b357bb3d5ff2e7ba6e904430f7fd697e208fb15915a1d48bad0f2 = $this->env->getExtension("native_profiler");
        $__internal_35e1dc28df5b357bb3d5ff2e7ba6e904430f7fd697e208fb15915a1d48bad0f2->enter($__internal_35e1dc28df5b357bb3d5ff2e7ba6e904430f7fd697e208fb15915a1d48bad0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_35e1dc28df5b357bb3d5ff2e7ba6e904430f7fd697e208fb15915a1d48bad0f2->leave($__internal_35e1dc28df5b357bb3d5ff2e7ba6e904430f7fd697e208fb15915a1d48bad0f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
