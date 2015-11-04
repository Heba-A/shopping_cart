<?php

/* default/index.html.twig */
class __TwigTemplate_32a801c9d07f599486b8e1c7f7eb78c6849edc96952a4f91d75be5857d0d3792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_6e640aef5d97d8063558dcf517dbddd9c1dafae1c188f5c62d11b8ec64fba1a5 = $this->env->getExtension("native_profiler");
        $__internal_6e640aef5d97d8063558dcf517dbddd9c1dafae1c188f5c62d11b8ec64fba1a5->enter($__internal_6e640aef5d97d8063558dcf517dbddd9c1dafae1c188f5c62d11b8ec64fba1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e640aef5d97d8063558dcf517dbddd9c1dafae1c188f5c62d11b8ec64fba1a5->leave($__internal_6e640aef5d97d8063558dcf517dbddd9c1dafae1c188f5c62d11b8ec64fba1a5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f3b743e8445e0932bc9f0984b570134829438c45ae82510857b7110b712767a = $this->env->getExtension("native_profiler");
        $__internal_3f3b743e8445e0932bc9f0984b570134829438c45ae82510857b7110b712767a->enter($__internal_3f3b743e8445e0932bc9f0984b570134829438c45ae82510857b7110b712767a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">
            <div>

                &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;
                <span><b> Cart  &nbsp; </b></span>
                <button onclick=\"window.location.href='/cart_list/1'\">
                    <a >
                    <i class=\"fa fa-shopping-cart fa-3x\"></i>
                    <i style=\"color:red\" class=\"fa fa-1x\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["cart_count"]) ? $context["cart_count"] : $this->getContext($context, "cart_count")), "html", null, true);
        echo "</i>
                        </a>
                </button>

                <span><b> Wish-list cart  &nbsp; </b></span>
                <button>
                    <a href=\"/cart_list/1\">
                        <i class=\"fa fa-shopping-cart fa-3x\"></i>
                    </a>
                    <i style=\"color:red\" class=\"fa fa-1x\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["wish_count"]) ? $context["wish_count"] : $this->getContext($context, "wish_count")), "html", null, true);
        echo "</i>
                </button>

            </div>

            <div id=\"welcome\">
                <h1><span>Items List</span> <!-- Symfony  ";
        // line 30
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo " !--> </h1>

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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items_list"]) ? $context["items_list"] : $this->getContext($context, "items_list")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t<td> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td> <a href=\"/add_to_cart/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\"> <i class=\"fa fa-cart-plus fa-lg\"></i>
                                    </a>
                                <a href=\"/add_to_wish_list/";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-heart-o fa-lg\"></i></a>
                                </td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"4\" align=\"center\"> nooo </td>
\t\t\t\t\t\t\t   </tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>         
\t\t\t\t</form>
\t\t\t</div>

        </div>
    </div>
";
        
        $__internal_3f3b743e8445e0932bc9f0984b570134829438c45ae82510857b7110b712767a->leave($__internal_3f3b743e8445e0932bc9f0984b570134829438c45ae82510857b7110b712767a_prof);

    }

    // line 65
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c1adecaa813de81470610c3a83703de0fcdc98030199cd891520e60b85d3426 = $this->env->getExtension("native_profiler");
        $__internal_8c1adecaa813de81470610c3a83703de0fcdc98030199cd891520e60b85d3426->enter($__internal_8c1adecaa813de81470610c3a83703de0fcdc98030199cd891520e60b85d3426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 66
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
        
        $__internal_8c1adecaa813de81470610c3a83703de0fcdc98030199cd891520e60b85d3426->leave($__internal_8c1adecaa813de81470610c3a83703de0fcdc98030199cd891520e60b85d3426_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 66,  142 => 65,  128 => 56,  119 => 52,  110 => 48,  105 => 46,  101 => 45,  97 => 44,  94 => 43,  89 => 42,  74 => 30,  65 => 24,  53 => 15,  41 => 5,  35 => 4,  11 => 1,);
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
/*                 <button onclick="window.location.href='/cart_list/1'">*/
/*                     <a >*/
/*                     <i class="fa fa-shopping-cart fa-3x"></i>*/
/*                     <i style="color:red" class="fa fa-1x">{{ cart_count }}</i>*/
/*                         </a>*/
/*                 </button>*/
/* */
/*                 <span><b> Wish-list cart  &nbsp; </b></span>*/
/*                 <button>*/
/*                     <a href="/cart_list/1">*/
/*                         <i class="fa fa-shopping-cart fa-3x"></i>*/
/*                     </a>*/
/*                     <i style="color:red" class="fa fa-1x">{{ wish_count }}</i>*/
/*                 </button>*/
/* */
/*             </div>*/
/* */
/*             <div id="welcome">*/
/*                 <h1><span>Items List</span> <!-- Symfony  {{ constant('Symfony\\Component\\HttpKernel\\Kernel::VERSION') }} !--> </h1>*/
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
/* 						<tbody>*/
/* 							 {% for item in items_list %}*/
/* 							<tr>*/
/* 								<td> {{ item.name }} </td>*/
/* 								<td> {{ item.price }}</td>*/
/* 								<td> <a href="/add_to_cart/{{ item.id }}"> <i class="fa fa-cart-plus fa-lg"></i>*/
/*                                     </a>*/
/*                                 <a href="/add_to_wish_list/{{ item.id }}"><i class="fa fa-heart-o fa-lg"></i></a>*/
/*                                 </td>*/
/* 							</tr>*/
/* 							{% else %}*/
/* 								<tr>*/
/* 									<td colspan="4" align="center"> nooo </td>*/
/* 							   </tr>*/
/* 							{% endfor %}*/
/* 						</tbody>*/
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
