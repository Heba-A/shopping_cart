<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bea2e7abe553ddbf01a725f38836d3834d8bf115432cca186eb9f3e21267069f extends Twig_Template
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
        $__internal_a45b9982307f33f3dd22866c82af7e03a81719e41e7dc78e8dd0cef9edffd2b5 = $this->env->getExtension("native_profiler");
        $__internal_a45b9982307f33f3dd22866c82af7e03a81719e41e7dc78e8dd0cef9edffd2b5->enter($__internal_a45b9982307f33f3dd22866c82af7e03a81719e41e7dc78e8dd0cef9edffd2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a45b9982307f33f3dd22866c82af7e03a81719e41e7dc78e8dd0cef9edffd2b5->leave($__internal_a45b9982307f33f3dd22866c82af7e03a81719e41e7dc78e8dd0cef9edffd2b5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6507fdf801c1a0ccd4f1b227288b49559182682844f6d4059f55f0206fe8ff41 = $this->env->getExtension("native_profiler");
        $__internal_6507fdf801c1a0ccd4f1b227288b49559182682844f6d4059f55f0206fe8ff41->enter($__internal_6507fdf801c1a0ccd4f1b227288b49559182682844f6d4059f55f0206fe8ff41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6507fdf801c1a0ccd4f1b227288b49559182682844f6d4059f55f0206fe8ff41->leave($__internal_6507fdf801c1a0ccd4f1b227288b49559182682844f6d4059f55f0206fe8ff41_prof);

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
