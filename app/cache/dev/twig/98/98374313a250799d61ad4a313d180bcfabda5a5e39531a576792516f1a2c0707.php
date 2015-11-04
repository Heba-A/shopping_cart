<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_8b33e20f87a75f05ea220885aff77358426ba4889ea117d497dd859aa6566f0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38b5422bbd4426cc9d6d91199653ef1a0be0b4d01879aa906c86d8805c4fcb07 = $this->env->getExtension("native_profiler");
        $__internal_38b5422bbd4426cc9d6d91199653ef1a0be0b4d01879aa906c86d8805c4fcb07->enter($__internal_38b5422bbd4426cc9d6d91199653ef1a0be0b4d01879aa906c86d8805c4fcb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b5422bbd4426cc9d6d91199653ef1a0be0b4d01879aa906c86d8805c4fcb07->leave($__internal_38b5422bbd4426cc9d6d91199653ef1a0be0b4d01879aa906c86d8805c4fcb07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b911d7281c1ab3c7c70fd399ea5501ad2780091752ea0d4d63537d07293b6260 = $this->env->getExtension("native_profiler");
        $__internal_b911d7281c1ab3c7c70fd399ea5501ad2780091752ea0d4d63537d07293b6260->enter($__internal_b911d7281c1ab3c7c70fd399ea5501ad2780091752ea0d4d63537d07293b6260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b911d7281c1ab3c7c70fd399ea5501ad2780091752ea0d4d63537d07293b6260->leave($__internal_b911d7281c1ab3c7c70fd399ea5501ad2780091752ea0d4d63537d07293b6260_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f17c112a6410e69e1bddfbafdb953c2748c34f4424c727902e66b9e5ef2bf2b3 = $this->env->getExtension("native_profiler");
        $__internal_f17c112a6410e69e1bddfbafdb953c2748c34f4424c727902e66b9e5ef2bf2b3->enter($__internal_f17c112a6410e69e1bddfbafdb953c2748c34f4424c727902e66b9e5ef2bf2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f17c112a6410e69e1bddfbafdb953c2748c34f4424c727902e66b9e5ef2bf2b3->leave($__internal_f17c112a6410e69e1bddfbafdb953c2748c34f4424c727902e66b9e5ef2bf2b3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e5eb4dad434e39bd3e1bf252f897a306143d8c14b53c8717564e75939aa6d9e = $this->env->getExtension("native_profiler");
        $__internal_9e5eb4dad434e39bd3e1bf252f897a306143d8c14b53c8717564e75939aa6d9e->enter($__internal_9e5eb4dad434e39bd3e1bf252f897a306143d8c14b53c8717564e75939aa6d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_9e5eb4dad434e39bd3e1bf252f897a306143d8c14b53c8717564e75939aa6d9e->leave($__internal_9e5eb4dad434e39bd3e1bf252f897a306143d8c14b53c8717564e75939aa6d9e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_cdd741921f61d50b64c16da8f97c5c802280061a9e3b284db2f86d203e5ccf09 = $this->env->getExtension("native_profiler");
        $__internal_cdd741921f61d50b64c16da8f97c5c802280061a9e3b284db2f86d203e5ccf09->enter($__internal_cdd741921f61d50b64c16da8f97c5c802280061a9e3b284db2f86d203e5ccf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cdd741921f61d50b64c16da8f97c5c802280061a9e3b284db2f86d203e5ccf09->leave($__internal_cdd741921f61d50b64c16da8f97c5c802280061a9e3b284db2f86d203e5ccf09_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
