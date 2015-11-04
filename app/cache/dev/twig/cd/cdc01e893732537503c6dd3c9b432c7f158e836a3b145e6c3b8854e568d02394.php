<?php

/* :default:index.html.twig */
class __TwigTemplate_6ee77d35b5061749bb572979d584a0a54cdcf79c34ed256fa1629ae7697b797b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_a5b769cb88be6efae5d86422976b86e8e4f034a4b40a0c14b9b5506d7dd13982 = $this->env->getExtension("native_profiler");
        $__internal_a5b769cb88be6efae5d86422976b86e8e4f034a4b40a0c14b9b5506d7dd13982->enter($__internal_a5b769cb88be6efae5d86422976b86e8e4f034a4b40a0c14b9b5506d7dd13982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5b769cb88be6efae5d86422976b86e8e4f034a4b40a0c14b9b5506d7dd13982->leave($__internal_a5b769cb88be6efae5d86422976b86e8e4f034a4b40a0c14b9b5506d7dd13982_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_28414727e3bae30d69bc449d13853ae70a80dff4191cf2bf76be01f4c47a8a5e = $this->env->getExtension("native_profiler");
        $__internal_28414727e3bae30d69bc449d13853ae70a80dff4191cf2bf76be01f4c47a8a5e->enter($__internal_28414727e3bae30d69bc449d13853ae70a80dff4191cf2bf76be01f4c47a8a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">
            <div>

                &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;
                <span><b> Cart  &nbsp; </b></span>

                <button onclick=\"window.location.href='/cart_list/1'\">
                    <i class=\"fa fa-shopping-cart fa-3x\"></i>
                    <i style=\"color:red\" class=\"fa fa-1x\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["cart_count"]) ? $context["cart_count"] : $this->getContext($context, "cart_count")), "html", null, true);
        echo "</i>
                </button>

                <span><b> Wish-list cart  &nbsp; </b></span>
                <button onclick=\"window.location.href='/wish_cart_list/2'\">
                    <i class=\"fa fa-shopping-cart fa-3x\"></i>
                    <i style=\"color:red\" class=\"fa fa-1x\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["wish_count"]) ? $context["wish_count"] : $this->getContext($context, "wish_count")), "html", null, true);
        echo "</i>
                </button>
            </div>

            <div id=\"welcome\">
                <h1><span>Items List</span> </h1>

                <form>
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><i class=\"fa fa-user\"></i> Item Name </th>
\t\t\t\t\t\t\t\t<th><i class=\"fa fa-calendar\"></i> Price </th>
\t\t\t\t\t\t\t\t<th><i class=\"fa fa-cogs\"></i></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>

\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items_list"]) ? $context["items_list"] : $this->getContext($context, "items_list")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 40
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t<td> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td> <a href=\"/add_to_cart/";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\"> <i class=\"fa fa-cart-plus fa-lg\"></i></a>

                                    ";
            // line 45
            if ($this->getAttribute($context["item"], "is_wished", array())) {
                // line 46
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_default_add_to_wish_list", array("cartId" => 2, "itemId" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" >
                                            <i class=\"fa fa-heart fa-lg\"></i>
                                        </a>
                                    ";
            } else {
                // line 50
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_default_add_to_wish_list", array("cartId" => 2, "itemId" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" >
                                            <i class=\"fa fa-heart-o fa-lg\"></i>
                                        </a>
                                    ";
            }
            // line 54
            echo "
                                </td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"4\" align=\"center\"> No items found </td>
\t\t\t\t\t\t\t   </tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t\t\t\t</tbody>

\t\t\t\t\t</table>         
\t\t\t\t</form>
\t\t\t</div>

        </div>
    </div>
";
        
        $__internal_28414727e3bae30d69bc449d13853ae70a80dff4191cf2bf76be01f4c47a8a5e->leave($__internal_28414727e3bae30d69bc449d13853ae70a80dff4191cf2bf76be01f4c47a8a5e_prof);

    }

    // line 72
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35f97e35d98076fba2b8943669074059d3c09319f1a52c43bbdd721af98d1ef5 = $this->env->getExtension("native_profiler");
        $__internal_35f97e35d98076fba2b8943669074059d3c09319f1a52c43bbdd721af98d1ef5->enter($__internal_35f97e35d98076fba2b8943669074059d3c09319f1a52c43bbdd721af98d1ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 73
        echo "<style>
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
        
        $__internal_35f97e35d98076fba2b8943669074059d3c09319f1a52c43bbdd721af98d1ef5->leave($__internal_35f97e35d98076fba2b8943669074059d3c09319f1a52c43bbdd721af98d1ef5_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 73,  154 => 72,  139 => 62,  130 => 58,  122 => 54,  114 => 50,  106 => 46,  104 => 45,  99 => 43,  95 => 42,  91 => 41,  88 => 40,  83 => 39,  62 => 21,  53 => 15,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div>*/
/* */
/*                 &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;*/
/*                 <span><b> Cart  &nbsp; </b></span>*/
/* */
/*                 <button onclick="window.location.href='/cart_list/1'">*/
/*                     <i class="fa fa-shopping-cart fa-3x"></i>*/
/*                     <i style="color:red" class="fa fa-1x">{{ cart_count }}</i>*/
/*                 </button>*/
/* */
/*                 <span><b> Wish-list cart  &nbsp; </b></span>*/
/*                 <button onclick="window.location.href='/wish_cart_list/2'">*/
/*                     <i class="fa fa-shopping-cart fa-3x"></i>*/
/*                     <i style="color:red" class="fa fa-1x">{{ wish_count }}</i>*/
/*                 </button>*/
/*             </div>*/
/* */
/*             <div id="welcome">*/
/*                 <h1><span>Items List</span> </h1>*/
/* */
/*                 <form>*/
/* 					<table class="table table-striped">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th><i class="fa fa-user"></i> Item Name </th>*/
/* 								<th><i class="fa fa-calendar"></i> Price </th>*/
/* 								<th><i class="fa fa-cogs"></i></th>*/
/* 							</tr>*/
/* 						</thead>*/
/* */
/* 						<tbody>*/
/* 							 {% for item in items_list %}*/
/* 							<tr>*/
/* 								<td> {{ item.name }} </td>*/
/* 								<td> {{ item.price }}</td>*/
/* 								<td> <a href="/add_to_cart/{{ item.id }}"> <i class="fa fa-cart-plus fa-lg"></i></a>*/
/* */
/*                                     {% if item.is_wished %}*/
/*                                         <a href="{{ path('app_default_add_to_wish_list',{  'cartId': 2 ,'itemId': item.id }) }}" >*/
/*                                             <i class="fa fa-heart fa-lg"></i>*/
/*                                         </a>*/
/*                                     {% else %}*/
/*                                         <a href="{{ path('app_default_add_to_wish_list',{  'cartId': 2 ,'itemId': item.id }) }}" >*/
/*                                             <i class="fa fa-heart-o fa-lg"></i>*/
/*                                         </a>*/
/*                                     {% endif %}*/
/* */
/*                                 </td>*/
/* 							</tr>*/
/* 							{% else %}*/
/* 								<tr>*/
/* 									<td colspan="4" align="center"> No items found </td>*/
/* 							   </tr>*/
/* 							{% endfor %}*/
/* 						</tbody>*/
/* */
/* 					</table>         */
/* 				</form>*/
/* 			</div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: block; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
