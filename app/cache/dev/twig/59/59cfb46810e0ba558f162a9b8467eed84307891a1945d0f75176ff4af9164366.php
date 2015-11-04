<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_4e8a58f5375db6cdeaec142569f883447c4f1f674d5349045fa9ae843408e48f extends Twig_Template
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
        $__internal_47f9cf33b1e217dfe10d647d9527ec39676230700b3d8b827a02bc68d3f37278 = $this->env->getExtension("native_profiler");
        $__internal_47f9cf33b1e217dfe10d647d9527ec39676230700b3d8b827a02bc68d3f37278->enter($__internal_47f9cf33b1e217dfe10d647d9527ec39676230700b3d8b827a02bc68d3f37278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47f9cf33b1e217dfe10d647d9527ec39676230700b3d8b827a02bc68d3f37278->leave($__internal_47f9cf33b1e217dfe10d647d9527ec39676230700b3d8b827a02bc68d3f37278_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7c3223e2d1926bbca23b7749f44396a71aa39ae11307a9c40fdbe875848f11c = $this->env->getExtension("native_profiler");
        $__internal_e7c3223e2d1926bbca23b7749f44396a71aa39ae11307a9c40fdbe875848f11c->enter($__internal_e7c3223e2d1926bbca23b7749f44396a71aa39ae11307a9c40fdbe875848f11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e7c3223e2d1926bbca23b7749f44396a71aa39ae11307a9c40fdbe875848f11c->leave($__internal_e7c3223e2d1926bbca23b7749f44396a71aa39ae11307a9c40fdbe875848f11c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_377ba9b2782a7ddcd1f8d1174b29550888f9ec67a0cb757c0f5204c854b9a495 = $this->env->getExtension("native_profiler");
        $__internal_377ba9b2782a7ddcd1f8d1174b29550888f9ec67a0cb757c0f5204c854b9a495->enter($__internal_377ba9b2782a7ddcd1f8d1174b29550888f9ec67a0cb757c0f5204c854b9a495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_377ba9b2782a7ddcd1f8d1174b29550888f9ec67a0cb757c0f5204c854b9a495->leave($__internal_377ba9b2782a7ddcd1f8d1174b29550888f9ec67a0cb757c0f5204c854b9a495_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_beb68ab711221fffe53e61e59b8df6f0300a0206c69d6574a1c3683302d6e82a = $this->env->getExtension("native_profiler");
        $__internal_beb68ab711221fffe53e61e59b8df6f0300a0206c69d6574a1c3683302d6e82a->enter($__internal_beb68ab711221fffe53e61e59b8df6f0300a0206c69d6574a1c3683302d6e82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_beb68ab711221fffe53e61e59b8df6f0300a0206c69d6574a1c3683302d6e82a->leave($__internal_beb68ab711221fffe53e61e59b8df6f0300a0206c69d6574a1c3683302d6e82a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad39aac07467ae040b51fa15dcf9d4064676d00aea9c247620ff9436e86d4f5c = $this->env->getExtension("native_profiler");
        $__internal_ad39aac07467ae040b51fa15dcf9d4064676d00aea9c247620ff9436e86d4f5c->enter($__internal_ad39aac07467ae040b51fa15dcf9d4064676d00aea9c247620ff9436e86d4f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ad39aac07467ae040b51fa15dcf9d4064676d00aea9c247620ff9436e86d4f5c->leave($__internal_ad39aac07467ae040b51fa15dcf9d4064676d00aea9c247620ff9436e86d4f5c_prof);

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
