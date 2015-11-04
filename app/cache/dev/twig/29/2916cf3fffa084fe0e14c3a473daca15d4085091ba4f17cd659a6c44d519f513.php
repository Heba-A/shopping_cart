<?php

/* base.html.twig */
class __TwigTemplate_ac89c4ca07ca141f0f2648a1edfc15d22ee40f5890552bf24a4ab64f0aa2cce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4e5f56395db4bdbfa70fcdb918f0870119a5159ea2bb3e1d08bf91f01885ec4 = $this->env->getExtension("native_profiler");
        $__internal_d4e5f56395db4bdbfa70fcdb918f0870119a5159ea2bb3e1d08bf91f01885ec4->enter($__internal_d4e5f56395db4bdbfa70fcdb918f0870119a5159ea2bb3e1d08bf91f01885ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
   
    
    
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_d4e5f56395db4bdbfa70fcdb918f0870119a5159ea2bb3e1d08bf91f01885ec4->leave($__internal_d4e5f56395db4bdbfa70fcdb918f0870119a5159ea2bb3e1d08bf91f01885ec4_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f8530a2c343d8c1d5f5a2a53afdd9c89201d60f4864e8a8cf8b714842b3d1df = $this->env->getExtension("native_profiler");
        $__internal_0f8530a2c343d8c1d5f5a2a53afdd9c89201d60f4864e8a8cf8b714842b3d1df->enter($__internal_0f8530a2c343d8c1d5f5a2a53afdd9c89201d60f4864e8a8cf8b714842b3d1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Shopping cart";
        
        $__internal_0f8530a2c343d8c1d5f5a2a53afdd9c89201d60f4864e8a8cf8b714842b3d1df->leave($__internal_0f8530a2c343d8c1d5f5a2a53afdd9c89201d60f4864e8a8cf8b714842b3d1df_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_203a33222e98851e374ee83dcf93d7e24b282e4c7dba21d49695186c1790b7ff = $this->env->getExtension("native_profiler");
        $__internal_203a33222e98851e374ee83dcf93d7e24b282e4c7dba21d49695186c1790b7ff->enter($__internal_203a33222e98851e374ee83dcf93d7e24b282e4c7dba21d49695186c1790b7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" />
        ";
        
        $__internal_203a33222e98851e374ee83dcf93d7e24b282e4c7dba21d49695186c1790b7ff->leave($__internal_203a33222e98851e374ee83dcf93d7e24b282e4c7dba21d49695186c1790b7ff_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fb4b4367c5092c786fc2b8db1d12016a7fb4f09031ad5e65b0bbf5aa1c1a728 = $this->env->getExtension("native_profiler");
        $__internal_5fb4b4367c5092c786fc2b8db1d12016a7fb4f09031ad5e65b0bbf5aa1c1a728->enter($__internal_5fb4b4367c5092c786fc2b8db1d12016a7fb4f09031ad5e65b0bbf5aa1c1a728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5fb4b4367c5092c786fc2b8db1d12016a7fb4f09031ad5e65b0bbf5aa1c1a728->leave($__internal_5fb4b4367c5092c786fc2b8db1d12016a7fb4f09031ad5e65b0bbf5aa1c1a728_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb73af4ac3c440bf3be620f5eced597dbe7dfc25613505a42ed62e34f3242894 = $this->env->getExtension("native_profiler");
        $__internal_cb73af4ac3c440bf3be620f5eced597dbe7dfc25613505a42ed62e34f3242894->enter($__internal_cb73af4ac3c440bf3be620f5eced597dbe7dfc25613505a42ed62e34f3242894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "        ";
        
        $__internal_cb73af4ac3c440bf3be620f5eced597dbe7dfc25613505a42ed62e34f3242894->leave($__internal_cb73af4ac3c440bf3be620f5eced597dbe7dfc25613505a42ed62e34f3242894_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 21,  109 => 20,  98 => 19,  88 => 11,  82 => 10,  70 => 8,  61 => 22,  58 => 20,  56 => 19,  49 => 15,  45 => 14,  42 => 13,  40 => 10,  35 => 8,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*    */
/*     */
/*     */
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Shopping cart{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/* 			<link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endblock %}*/
/*         */
/*             <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     */
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
