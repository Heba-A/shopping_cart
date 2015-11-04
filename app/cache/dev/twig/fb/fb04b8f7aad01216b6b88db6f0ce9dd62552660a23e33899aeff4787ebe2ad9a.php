<?php

/* :default:view_wish_cart.html.twig */
class __TwigTemplate_3331114d2b145f4c8945c854bdcc9f95f2feb9857370bd117de27a631734fa7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:view_wish_cart.html.twig", 1);
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
        $__internal_16ce9c84293e76d3ed6281cbcd1ae94be5b0774fa93580da78ef21c558e4d837 = $this->env->getExtension("native_profiler");
        $__internal_16ce9c84293e76d3ed6281cbcd1ae94be5b0774fa93580da78ef21c558e4d837->enter($__internal_16ce9c84293e76d3ed6281cbcd1ae94be5b0774fa93580da78ef21c558e4d837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:view_wish_cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16ce9c84293e76d3ed6281cbcd1ae94be5b0774fa93580da78ef21c558e4d837->leave($__internal_16ce9c84293e76d3ed6281cbcd1ae94be5b0774fa93580da78ef21c558e4d837_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5be3f51aca7202c140110ee26bb6638c58b64548cd839c94afa32e34d00d1c75 = $this->env->getExtension("native_profiler");
        $__internal_5be3f51aca7202c140110ee26bb6638c58b64548cd839c94afa32e34d00d1c75->enter($__internal_5be3f51aca7202c140110ee26bb6638c58b64548cd839c94afa32e34d00d1c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">


            <div id=\"welcome\">
                <button  onclick=\"window.location.href='/'\"><i class=\"fa fa-list fa-2x \"></i>View wish list </button>
                <h1><span>Cart Items List</span> </h1>

                <form>
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th><i class=\"fa fa-tag\"></i> Item Name </th>
                            <th><i class=\"fa fa-usd\"></i> Price </th>
                            <th><i class=\"fa fa-cogs\"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart_items"]) ? $context["cart_items"] : $this->getContext($context, "cart_items")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cartItem"]) {
            // line 25
            echo "                            <tr>
                                <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "itemId", array()), "name", array()), "html", null, true);
            echo "  </td>
                                <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "itemId", array()), "price", array()), "html", null, true);
            echo " </td>
                                <td> <a href=\"\"> <i style=\"color:red\" class=\"fa fa fa-times fa-lg\"></i></a></td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "                            <tr>
                                <td colspan=\"4\" align=\"center\"> No items found </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                        </tbody>
                    </table>
                </form>

            </div>

        </div>
    </div>
";
        
        $__internal_5be3f51aca7202c140110ee26bb6638c58b64548cd839c94afa32e34d00d1c75->leave($__internal_5be3f51aca7202c140110ee26bb6638c58b64548cd839c94afa32e34d00d1c75_prof);

    }

    // line 45
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63e8fdd013b0f613b3f8a08312c7a11959fcb74f761feccd14b25ef4d1adfe9d = $this->env->getExtension("native_profiler");
        $__internal_63e8fdd013b0f613b3f8a08312c7a11959fcb74f761feccd14b25ef4d1adfe9d->enter($__internal_63e8fdd013b0f613b3f8a08312c7a11959fcb74f761feccd14b25ef4d1adfe9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 46
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
        
        $__internal_63e8fdd013b0f613b3f8a08312c7a11959fcb74f761feccd14b25ef4d1adfe9d->leave($__internal_63e8fdd013b0f613b3f8a08312c7a11959fcb74f761feccd14b25ef4d1adfe9d_prof);

    }

    public function getTemplateName()
    {
        return ":default:view_wish_cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 46,  107 => 45,  92 => 35,  83 => 31,  74 => 27,  70 => 26,  67 => 25,  62 => 24,  41 => 5,  35 => 4,  11 => 1,);
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
/*                 <button  onclick="window.location.href='/'"><i class="fa fa-list fa-2x "></i>View wish list </button>*/
/*                 <h1><span>Cart Items List</span> </h1>*/
/* */
/*                 <form>*/
/*                     <table class="table table-striped">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th><i class="fa fa-tag"></i> Item Name </th>*/
/*                             <th><i class="fa fa-usd"></i> Price </th>*/
/*                             <th><i class="fa fa-cogs"></i></th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for cartItem in cart_items %}*/
/*                             <tr>*/
/*                                 <td> {{ cartItem.itemId.name  }}  </td>*/
/*                                 <td> {{ cartItem.itemId.price }} </td>*/
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
