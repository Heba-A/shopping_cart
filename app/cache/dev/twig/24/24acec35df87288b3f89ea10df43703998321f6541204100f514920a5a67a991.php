<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e7dc83551c8bd05367ff9c0904fc295261789f68d29964c93c1027a3028587da extends Twig_Template
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
        $__internal_be40169aee0052d0f34f0bf0a6f8be5897cfdb5be2cb107683ae00286faba839 = $this->env->getExtension("native_profiler");
        $__internal_be40169aee0052d0f34f0bf0a6f8be5897cfdb5be2cb107683ae00286faba839->enter($__internal_be40169aee0052d0f34f0bf0a6f8be5897cfdb5be2cb107683ae00286faba839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_be40169aee0052d0f34f0bf0a6f8be5897cfdb5be2cb107683ae00286faba839->leave($__internal_be40169aee0052d0f34f0bf0a6f8be5897cfdb5be2cb107683ae00286faba839_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
