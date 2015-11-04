<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5610644f12f9b1f01178f6144924bcacd10a525a1897e22c3057e1b612bb03fe extends Twig_Template
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
        $__internal_48e48ac2df093b49632007b6a579824d7f9f42d2bac862fc19753c8ce59b8b5b = $this->env->getExtension("native_profiler");
        $__internal_48e48ac2df093b49632007b6a579824d7f9f42d2bac862fc19753c8ce59b8b5b->enter($__internal_48e48ac2df093b49632007b6a579824d7f9f42d2bac862fc19753c8ce59b8b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_48e48ac2df093b49632007b6a579824d7f9f42d2bac862fc19753c8ce59b8b5b->leave($__internal_48e48ac2df093b49632007b6a579824d7f9f42d2bac862fc19753c8ce59b8b5b_prof);

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
