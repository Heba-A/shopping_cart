<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_486668b3bcdc17687c130585e0088effffccfc799bca02de97f282f9a625fdbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_853ef72337aef85ab2f62db9f5698ef81a2dfb2813041fa24e37b2109e4d0064 = $this->env->getExtension("native_profiler");
        $__internal_853ef72337aef85ab2f62db9f5698ef81a2dfb2813041fa24e37b2109e4d0064->enter($__internal_853ef72337aef85ab2f62db9f5698ef81a2dfb2813041fa24e37b2109e4d0064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_853ef72337aef85ab2f62db9f5698ef81a2dfb2813041fa24e37b2109e4d0064->leave($__internal_853ef72337aef85ab2f62db9f5698ef81a2dfb2813041fa24e37b2109e4d0064_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c82596852937a59e4e84d94ddc27af6a879dfc84c5b57b6f49ea1992bccb9bb8 = $this->env->getExtension("native_profiler");
        $__internal_c82596852937a59e4e84d94ddc27af6a879dfc84c5b57b6f49ea1992bccb9bb8->enter($__internal_c82596852937a59e4e84d94ddc27af6a879dfc84c5b57b6f49ea1992bccb9bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c82596852937a59e4e84d94ddc27af6a879dfc84c5b57b6f49ea1992bccb9bb8->leave($__internal_c82596852937a59e4e84d94ddc27af6a879dfc84c5b57b6f49ea1992bccb9bb8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_14a6b87e5b6b9d61ff0a06b0b6d47172329243fb5ef409d632e0ad51e4133073 = $this->env->getExtension("native_profiler");
        $__internal_14a6b87e5b6b9d61ff0a06b0b6d47172329243fb5ef409d632e0ad51e4133073->enter($__internal_14a6b87e5b6b9d61ff0a06b0b6d47172329243fb5ef409d632e0ad51e4133073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_14a6b87e5b6b9d61ff0a06b0b6d47172329243fb5ef409d632e0ad51e4133073->leave($__internal_14a6b87e5b6b9d61ff0a06b0b6d47172329243fb5ef409d632e0ad51e4133073_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_490c9c8f448c6c24d43e1dbbaccbcf1f4260fe5eb283262806e20f5870eb94d2 = $this->env->getExtension("native_profiler");
        $__internal_490c9c8f448c6c24d43e1dbbaccbcf1f4260fe5eb283262806e20f5870eb94d2->enter($__internal_490c9c8f448c6c24d43e1dbbaccbcf1f4260fe5eb283262806e20f5870eb94d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_490c9c8f448c6c24d43e1dbbaccbcf1f4260fe5eb283262806e20f5870eb94d2->leave($__internal_490c9c8f448c6c24d43e1dbbaccbcf1f4260fe5eb283262806e20f5870eb94d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
