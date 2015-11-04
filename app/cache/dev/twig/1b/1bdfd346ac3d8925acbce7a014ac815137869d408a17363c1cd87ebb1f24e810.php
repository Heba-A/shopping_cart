<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_72f3318dc58bb36f49e97866bb797cdf821feb853f6641315f2f22e1b62c7c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b99db89edacd4b7d4cde1e068750c49348c93d25f7257c2ec74c218b04c0dd67 = $this->env->getExtension("native_profiler");
        $__internal_b99db89edacd4b7d4cde1e068750c49348c93d25f7257c2ec74c218b04c0dd67->enter($__internal_b99db89edacd4b7d4cde1e068750c49348c93d25f7257c2ec74c218b04c0dd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b99db89edacd4b7d4cde1e068750c49348c93d25f7257c2ec74c218b04c0dd67->leave($__internal_b99db89edacd4b7d4cde1e068750c49348c93d25f7257c2ec74c218b04c0dd67_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eafd5800d46994570f82def2d9ef742984b629ec16cc0fa49f0f29662dbb8fd8 = $this->env->getExtension("native_profiler");
        $__internal_eafd5800d46994570f82def2d9ef742984b629ec16cc0fa49f0f29662dbb8fd8->enter($__internal_eafd5800d46994570f82def2d9ef742984b629ec16cc0fa49f0f29662dbb8fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eafd5800d46994570f82def2d9ef742984b629ec16cc0fa49f0f29662dbb8fd8->leave($__internal_eafd5800d46994570f82def2d9ef742984b629ec16cc0fa49f0f29662dbb8fd8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a750fe0b13a70e78e32e83c52982976d51cd32dac9fa46bf43c94b64b85f992f = $this->env->getExtension("native_profiler");
        $__internal_a750fe0b13a70e78e32e83c52982976d51cd32dac9fa46bf43c94b64b85f992f->enter($__internal_a750fe0b13a70e78e32e83c52982976d51cd32dac9fa46bf43c94b64b85f992f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a750fe0b13a70e78e32e83c52982976d51cd32dac9fa46bf43c94b64b85f992f->leave($__internal_a750fe0b13a70e78e32e83c52982976d51cd32dac9fa46bf43c94b64b85f992f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7822045065b8e292e503a7e857e78acc6d95cef0f07af81551e970795b252c7 = $this->env->getExtension("native_profiler");
        $__internal_d7822045065b8e292e503a7e857e78acc6d95cef0f07af81551e970795b252c7->enter($__internal_d7822045065b8e292e503a7e857e78acc6d95cef0f07af81551e970795b252c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d7822045065b8e292e503a7e857e78acc6d95cef0f07af81551e970795b252c7->leave($__internal_d7822045065b8e292e503a7e857e78acc6d95cef0f07af81551e970795b252c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
