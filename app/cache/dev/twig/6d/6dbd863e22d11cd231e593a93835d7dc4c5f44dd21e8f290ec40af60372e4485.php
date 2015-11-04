<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cb38c4980e12287ce7087dbba71a136e17e8773fe830bb94f1ffc103edf748fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_f1facc8cf218e746c75cd5bbc5440b6896ff630886602613e2af4c162e6cbe54 = $this->env->getExtension("native_profiler");
        $__internal_f1facc8cf218e746c75cd5bbc5440b6896ff630886602613e2af4c162e6cbe54->enter($__internal_f1facc8cf218e746c75cd5bbc5440b6896ff630886602613e2af4c162e6cbe54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1facc8cf218e746c75cd5bbc5440b6896ff630886602613e2af4c162e6cbe54->leave($__internal_f1facc8cf218e746c75cd5bbc5440b6896ff630886602613e2af4c162e6cbe54_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3a274086487915f78f05b4627616c8d33a0c9696688ba322ac4bc0a368a7732 = $this->env->getExtension("native_profiler");
        $__internal_a3a274086487915f78f05b4627616c8d33a0c9696688ba322ac4bc0a368a7732->enter($__internal_a3a274086487915f78f05b4627616c8d33a0c9696688ba322ac4bc0a368a7732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a3a274086487915f78f05b4627616c8d33a0c9696688ba322ac4bc0a368a7732->leave($__internal_a3a274086487915f78f05b4627616c8d33a0c9696688ba322ac4bc0a368a7732_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9bda0bac31e435bbe784aa3851027bfa3c828a0c84b7bb2e28847ec62eca3ae = $this->env->getExtension("native_profiler");
        $__internal_f9bda0bac31e435bbe784aa3851027bfa3c828a0c84b7bb2e28847ec62eca3ae->enter($__internal_f9bda0bac31e435bbe784aa3851027bfa3c828a0c84b7bb2e28847ec62eca3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f9bda0bac31e435bbe784aa3851027bfa3c828a0c84b7bb2e28847ec62eca3ae->leave($__internal_f9bda0bac31e435bbe784aa3851027bfa3c828a0c84b7bb2e28847ec62eca3ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
