<?php

/* base.html.twig */
class __TwigTemplate_d40974842078dafdb56e4c2068bcc83d1c2a80c4aaec707e0aef775e7efc5550 extends Twig_Template
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
        $__internal_a0223c95ee9a9873875ba282308e04df435887670f2bdfdfbae68978202f750a = $this->env->getExtension("native_profiler");
        $__internal_a0223c95ee9a9873875ba282308e04df435887670f2bdfdfbae68978202f750a->enter($__internal_a0223c95ee9a9873875ba282308e04df435887670f2bdfdfbae68978202f750a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a0223c95ee9a9873875ba282308e04df435887670f2bdfdfbae68978202f750a->leave($__internal_a0223c95ee9a9873875ba282308e04df435887670f2bdfdfbae68978202f750a_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_936945cc010c4b78ba79cfe8a85dc7efcdf84a72bc7df9ffac7148e08c048380 = $this->env->getExtension("native_profiler");
        $__internal_936945cc010c4b78ba79cfe8a85dc7efcdf84a72bc7df9ffac7148e08c048380->enter($__internal_936945cc010c4b78ba79cfe8a85dc7efcdf84a72bc7df9ffac7148e08c048380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Shopping cart";
        
        $__internal_936945cc010c4b78ba79cfe8a85dc7efcdf84a72bc7df9ffac7148e08c048380->leave($__internal_936945cc010c4b78ba79cfe8a85dc7efcdf84a72bc7df9ffac7148e08c048380_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35f3972d61f1d5c83d2c9c8e2a13e6bc38c9b7796fc5c9b00b8d8e39d4129e26 = $this->env->getExtension("native_profiler");
        $__internal_35f3972d61f1d5c83d2c9c8e2a13e6bc38c9b7796fc5c9b00b8d8e39d4129e26->enter($__internal_35f3972d61f1d5c83d2c9c8e2a13e6bc38c9b7796fc5c9b00b8d8e39d4129e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" />
        ";
        
        $__internal_35f3972d61f1d5c83d2c9c8e2a13e6bc38c9b7796fc5c9b00b8d8e39d4129e26->leave($__internal_35f3972d61f1d5c83d2c9c8e2a13e6bc38c9b7796fc5c9b00b8d8e39d4129e26_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_0135370e7ca591e2699bc37c5c8df6a6217cce1006ae64a932245be5535b4aea = $this->env->getExtension("native_profiler");
        $__internal_0135370e7ca591e2699bc37c5c8df6a6217cce1006ae64a932245be5535b4aea->enter($__internal_0135370e7ca591e2699bc37c5c8df6a6217cce1006ae64a932245be5535b4aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0135370e7ca591e2699bc37c5c8df6a6217cce1006ae64a932245be5535b4aea->leave($__internal_0135370e7ca591e2699bc37c5c8df6a6217cce1006ae64a932245be5535b4aea_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78c28be49be59741ddd55b2730e5695360949d790ff1cd8149f2abf2b4aeea21 = $this->env->getExtension("native_profiler");
        $__internal_78c28be49be59741ddd55b2730e5695360949d790ff1cd8149f2abf2b4aeea21->enter($__internal_78c28be49be59741ddd55b2730e5695360949d790ff1cd8149f2abf2b4aeea21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "        ";
        
        $__internal_78c28be49be59741ddd55b2730e5695360949d790ff1cd8149f2abf2b4aeea21->leave($__internal_78c28be49be59741ddd55b2730e5695360949d790ff1cd8149f2abf2b4aeea21_prof);

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
