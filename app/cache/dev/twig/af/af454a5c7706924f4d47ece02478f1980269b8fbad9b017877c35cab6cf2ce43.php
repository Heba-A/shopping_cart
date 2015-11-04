<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4dd051f0eef6dc71aa6615e06df9da490576054a7303aab38bd1d8d6116e3d3a extends Twig_Template
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
        $__internal_673460af7d8df3ca3ada302042000007cbda138b0dcbacd3d712c9866717dd90 = $this->env->getExtension("native_profiler");
        $__internal_673460af7d8df3ca3ada302042000007cbda138b0dcbacd3d712c9866717dd90->enter($__internal_673460af7d8df3ca3ada302042000007cbda138b0dcbacd3d712c9866717dd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_673460af7d8df3ca3ada302042000007cbda138b0dcbacd3d712c9866717dd90->leave($__internal_673460af7d8df3ca3ada302042000007cbda138b0dcbacd3d712c9866717dd90_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
