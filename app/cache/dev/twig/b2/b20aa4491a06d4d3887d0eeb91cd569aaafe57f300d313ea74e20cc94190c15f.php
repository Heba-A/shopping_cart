<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_92cec87a88126d2064985d34b9878054e7a649a86d8da0cf6a980ab044b455bf extends Twig_Template
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
        $__internal_0e99b73aabb5f36fbf4c4ea8c8d5c733044202c67cc95915181030e53ba1b78d = $this->env->getExtension("native_profiler");
        $__internal_0e99b73aabb5f36fbf4c4ea8c8d5c733044202c67cc95915181030e53ba1b78d->enter($__internal_0e99b73aabb5f36fbf4c4ea8c8d5c733044202c67cc95915181030e53ba1b78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_0e99b73aabb5f36fbf4c4ea8c8d5c733044202c67cc95915181030e53ba1b78d->leave($__internal_0e99b73aabb5f36fbf4c4ea8c8d5c733044202c67cc95915181030e53ba1b78d_prof);

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
