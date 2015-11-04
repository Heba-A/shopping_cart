<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8ba10aa4f9d98571dcb40ba4c0afc483398217286810addb1f774bc2f9b3ebf7 extends Twig_Template
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
        $__internal_3503a57c718276574c2131e6bb74937400a65c0a23fb6cd6beb9646287d65c48 = $this->env->getExtension("native_profiler");
        $__internal_3503a57c718276574c2131e6bb74937400a65c0a23fb6cd6beb9646287d65c48->enter($__internal_3503a57c718276574c2131e6bb74937400a65c0a23fb6cd6beb9646287d65c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3503a57c718276574c2131e6bb74937400a65c0a23fb6cd6beb9646287d65c48->leave($__internal_3503a57c718276574c2131e6bb74937400a65c0a23fb6cd6beb9646287d65c48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
