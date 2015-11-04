<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_745bc8cb9eaa8110e9cf38deefade7405e2cee11939d7d8e0864c52dfbad8e3b extends Twig_Template
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
        $__internal_f18ba99b82473c43888f96ffa2f599a0e740cca6df3e01ecc6a717111d6a7418 = $this->env->getExtension("native_profiler");
        $__internal_f18ba99b82473c43888f96ffa2f599a0e740cca6df3e01ecc6a717111d6a7418->enter($__internal_f18ba99b82473c43888f96ffa2f599a0e740cca6df3e01ecc6a717111d6a7418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f18ba99b82473c43888f96ffa2f599a0e740cca6df3e01ecc6a717111d6a7418->leave($__internal_f18ba99b82473c43888f96ffa2f599a0e740cca6df3e01ecc6a717111d6a7418_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
