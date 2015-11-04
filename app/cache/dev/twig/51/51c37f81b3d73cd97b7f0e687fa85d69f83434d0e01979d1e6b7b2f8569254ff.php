<?php

/* :default:view_cart.html.twig */
class __TwigTemplate_96886ab36a1a69e25f871b7c0640a99b66cbeca96c7bb328e080e7a093775d87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:view_cart.html.twig", 1);
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
        $__internal_c27d7225b3814c582a5eaa52f19b9688c26ddf923f7024195b3896f26d8e6834 = $this->env->getExtension("native_profiler");
        $__internal_c27d7225b3814c582a5eaa52f19b9688c26ddf923f7024195b3896f26d8e6834->enter($__internal_c27d7225b3814c582a5eaa52f19b9688c26ddf923f7024195b3896f26d8e6834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:view_cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c27d7225b3814c582a5eaa52f19b9688c26ddf923f7024195b3896f26d8e6834->leave($__internal_c27d7225b3814c582a5eaa52f19b9688c26ddf923f7024195b3896f26d8e6834_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_47c7d4435e0984bb2e755f653fae18281f2e6a8c99e99f6b8735a0b95d77d0e6 = $this->env->getExtension("native_profiler");
        $__internal_47c7d4435e0984bb2e755f653fae18281f2e6a8c99e99f6b8735a0b95d77d0e6->enter($__internal_47c7d4435e0984bb2e755f653fae18281f2e6a8c99e99f6b8735a0b95d77d0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">


            <div id=\"welcome\">
                <button  onclick=\"window.location.href='/'\"><i class=\"fa fa-list fa-2x \"></i>View item list </button>
                <h1><span>Cart Items List</span> </h1>

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
        
        $__internal_47c7d4435e0984bb2e755f653fae18281f2e6a8c99e99f6b8735a0b95d77d0e6->leave($__internal_47c7d4435e0984bb2e755f653fae18281f2e6a8c99e99f6b8735a0b95d77d0e6_prof);

    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4257b0de452875b93510440ad0d5439d8bdc2ba04eddbb978cc819f584798de = $this->env->getExtension("native_profiler");
        $__internal_f4257b0de452875b93510440ad0d5439d8bdc2ba04eddbb978cc819f584798de->enter($__internal_f4257b0de452875b93510440ad0d5439d8bdc2ba04eddbb978cc819f584798de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 48
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
        
        $__internal_f4257b0de452875b93510440ad0d5439d8bdc2ba04eddbb978cc819f584798de->leave($__internal_f4257b0de452875b93510440ad0d5439d8bdc2ba04eddbb978cc819f584798de_prof);

    }

    public function getTemplateName()
    {
        return ":default:view_cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 48,  112 => 47,  97 => 37,  88 => 33,  79 => 29,  75 => 28,  71 => 27,  68 => 26,  63 => 25,  41 => 5,  35 => 4,  11 => 1,);
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
/*                 <button  onclick="window.location.href='/'"><i class="fa fa-list fa-2x "></i>View item list </button>*/
/*                 <h1><span>Cart Items List</span> </h1>*/
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
/* */
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
