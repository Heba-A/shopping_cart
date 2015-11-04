<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b96f2679db9b92ac82be963653775fb686500ac6e77519a3c32d6d8337b0239c extends Twig_Template
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
        $__internal_9f3873aff85f2036e36ff23e697205ea57010df02b0adbf91010f08dc93df995 = $this->env->getExtension("native_profiler");
        $__internal_9f3873aff85f2036e36ff23e697205ea57010df02b0adbf91010f08dc93df995->enter($__internal_9f3873aff85f2036e36ff23e697205ea57010df02b0adbf91010f08dc93df995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f3873aff85f2036e36ff23e697205ea57010df02b0adbf91010f08dc93df995->leave($__internal_9f3873aff85f2036e36ff23e697205ea57010df02b0adbf91010f08dc93df995_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e273baada2c39ab1b91fd1a0980254b83db11ba8e51550ae6a1f4753337d2755 = $this->env->getExtension("native_profiler");
        $__internal_e273baada2c39ab1b91fd1a0980254b83db11ba8e51550ae6a1f4753337d2755->enter($__internal_e273baada2c39ab1b91fd1a0980254b83db11ba8e51550ae6a1f4753337d2755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e273baada2c39ab1b91fd1a0980254b83db11ba8e51550ae6a1f4753337d2755->leave($__internal_e273baada2c39ab1b91fd1a0980254b83db11ba8e51550ae6a1f4753337d2755_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_88148a40a157e0184290418f8a74813bd76c319e8e402d6709ebd1f8075a1ea0 = $this->env->getExtension("native_profiler");
        $__internal_88148a40a157e0184290418f8a74813bd76c319e8e402d6709ebd1f8075a1ea0->enter($__internal_88148a40a157e0184290418f8a74813bd76c319e8e402d6709ebd1f8075a1ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_88148a40a157e0184290418f8a74813bd76c319e8e402d6709ebd1f8075a1ea0->leave($__internal_88148a40a157e0184290418f8a74813bd76c319e8e402d6709ebd1f8075a1ea0_prof);

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
