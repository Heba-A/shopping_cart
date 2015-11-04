<?php

/* default/view_cart.html.twig */
class __TwigTemplate_0afd7a1dff31aa303a6da103137152a919b896ca667911d702481edcb89a2c63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/view_cart.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da169bfa64b314f642af00ee9902d0f766ef290ac2ce2b8163769d8e1fb6f349 = $this->env->getExtension("native_profiler");
        $__internal_da169bfa64b314f642af00ee9902d0f766ef290ac2ce2b8163769d8e1fb6f349->enter($__internal_da169bfa64b314f642af00ee9902d0f766ef290ac2ce2b8163769d8e1fb6f349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/view_cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da169bfa64b314f642af00ee9902d0f766ef290ac2ce2b8163769d8e1fb6f349->leave($__internal_da169bfa64b314f642af00ee9902d0f766ef290ac2ce2b8163769d8e1fb6f349_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_59ea3de3245215c2e96d8fc06a3c7bc16084505299dfceb0a66b8b88f9f0e3a7 = $this->env->getExtension("native_profiler");
        $__internal_59ea3de3245215c2e96d8fc06a3c7bc16084505299dfceb0a66b8b88f9f0e3a7->enter($__internal_59ea3de3245215c2e96d8fc06a3c7bc16084505299dfceb0a66b8b88f9f0e3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">


            <div id=\"welcome\">
                <button  onclick=\"window.location.href='/'\"><i class=\"fa fa-list fa-2x \"></i>return to item list </button>
                <h1><span>Cart Items List</span> <!-- Symfony  ";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo " !--> </h1>

                <form>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th><i class=\"fa fa-tag\"></i> Item Name </th>
                                <th><i class=\"fa fa-usd\"></i> Price </th>
                                <th><i class=\"fa fa-calendar\"></i> Quantity </th>
                                <th><i class=\"fa fa-cogs\"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart_items"]) ? $context["cart_items"] : $this->getContext($context, "cart_items")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cartItem"]) {
            // line 26
            echo "                            <tr>
                                <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "itemId", array()), "name", array()), "html", null, true);
            echo "  </td>
                                <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "itemId", array()), "price", array()), "html", null, true);
            echo " </td>
                                <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["cartItem"], "quantity", array()), "html", null, true);
            echo " </td>
                                <td> <a href=\"\"> <i style=\"color:red\" class=\"fa fa fa-times fa-lg\"></i></a></td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                            <tr>
                                <td colspan=\"4\" align=\"center\"> No items found </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </tbody>
                    </table>
                </form>
            </div>

        </div>
    </div>
";
        
        $__internal_59ea3de3245215c2e96d8fc06a3c7bc16084505299dfceb0a66b8b88f9f0e3a7->leave($__internal_59ea3de3245215c2e96d8fc06a3c7bc16084505299dfceb0a66b8b88f9f0e3a7_prof);

    }

    // line 46
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c682d1cf8cd3ddadb516d8da81686c5167a858c273a277c5e0f4ea201136b740 = $this->env->getExtension("native_profiler");
        $__internal_c682d1cf8cd3ddadb516d8da81686c5167a858c273a277c5e0f4ea201136b740->enter($__internal_c682d1cf8cd3ddadb516d8da81686c5167a858c273a277c5e0f4ea201136b740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 47
        echo "    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #icon-book { display: inline-block; }
            #status a, #next a { display: block; }

            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
";
        
        $__internal_c682d1cf8cd3ddadb516d8da81686c5167a858c273a277c5e0f4ea201136b740->leave($__internal_c682d1cf8cd3ddadb516d8da81686c5167a858c273a277c5e0f4ea201136b740_prof);

    }

    public function getTemplateName()
    {
        return "default/view_cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  114 => 46,  100 => 37,  91 => 33,  82 => 29,  78 => 28,  74 => 27,  71 => 26,  66 => 25,  50 => 12,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     <div id="wrapper">*/
/*         <div id="container">*/
/* */
/* */
/*             <div id="welcome">*/
/*                 <button  onclick="window.location.href='/'"><i class="fa fa-list fa-2x "></i>return to item list </button>*/
/*                 <h1><span>Cart Items List</span> <!-- Symfony  {{ constant('Symfony\\Component\\HttpKernel\\Kernel::VERSION') }} !--> </h1>*/
/* */
/*                 <form>*/
/*                     <table class="table table-striped">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th><i class="fa fa-tag"></i> Item Name </th>*/
/*                                 <th><i class="fa fa-usd"></i> Price </th>*/
/*                                 <th><i class="fa fa-calendar"></i> Quantity </th>*/
/*                                 <th><i class="fa fa-cogs"></i></th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for cartItem in cart_items %}*/
/*                             <tr>*/
/*                                 <td> {{ cartItem.itemId.name  }}  </td>*/
/*                                 <td> {{ cartItem.itemId.price }} </td>*/
/*                                 <td> {{ cartItem.quantity     }} </td>*/
/*                                 <td> <a href=""> <i style="color:red" class="fa fa fa-times fa-lg"></i></a></td>*/
/*                             </tr>*/
/*                         {% else %}*/
/*                             <tr>*/
/*                                 <td colspan="4" align="center"> No items found </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*         h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*         h1 { font-size: 36px; }*/
/*         h2 { font-size: 21px; margin-bottom: 1em; }*/
/*         p { margin: 0 0 1em 0; }*/
/*         a { color: #0000F0; }*/
/*         a:hover { text-decoration: none; }*/
/*         code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*         #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*         #container { padding: 2em; }*/
/*         #welcome, #status { margin-bottom: 2em; }*/
/*         #welcome h1 span { display: block; font-size: 75%; }*/
/*         #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*         #icon-book { display: none; }*/
/* */
/*         @media (min-width: 768px) {*/
/*             #wrapper { width: 80%; margin: 2em auto; }*/
/*             #icon-book { display: inline-block; }*/
/*             #status a, #next a { display: block; }*/
/* */
/*             @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*             @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*             .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
