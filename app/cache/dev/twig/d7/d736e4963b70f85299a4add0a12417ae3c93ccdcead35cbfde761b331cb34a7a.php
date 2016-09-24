<?php

/* base.html.twig */
class __TwigTemplate_cb445fedf54d06991663d5b104ce4c0e79dbb356454c3c7073a9be6fdf27d418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d19e2de12ebd5669364e485df522bcf11bb38b525c434c4ed796de70f6eda577 = $this->env->getExtension("native_profiler");
        $__internal_d19e2de12ebd5669364e485df522bcf11bb38b525c434c4ed796de70f6eda577->enter($__internal_d19e2de12ebd5669364e485df522bcf11bb38b525c434c4ed796de70f6eda577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/simple-sidebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    </head>
    <body>
        
        <div id=\"header\">
            <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoudh.png"), "html", null, true);
        echo "\" height=\"60\"/>
            <div class=\"welcome\">Bienvenido: Jorge Flores</div>
        </div>

               <div id=\"menu\">
            <ul>
                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Inicio</a></li>
                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("app_roles_index");
        echo "\">Roles</a></li>
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("app_usuarios_index");
        echo "\">Usuarios</a></li>
                <li><a href=\"#\">Categorias</a></li>
                <li><a href=\"#\">Productos</a></li>
                <li><a href=\"#\">Salir</a></li>
            </ul>
        </div>


        <div id=\"content\">
        
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 39
            echo "                <div class=\"flash-notice\">
                    ";
            // line 40
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
            ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "            
        </div>
        <div id=\"footer\">
            Todos los Derechos Reservados 2015
        </div>
    </body>
</html>
";
        
        $__internal_d19e2de12ebd5669364e485df522bcf11bb38b525c434c4ed796de70f6eda577->leave($__internal_d19e2de12ebd5669364e485df522bcf11bb38b525c434c4ed796de70f6eda577_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dab48d787efd5a897511b55f0a7190806f8cc307e026a53a3fcf46d7f45a428 = $this->env->getExtension("native_profiler");
        $__internal_5dab48d787efd5a897511b55f0a7190806f8cc307e026a53a3fcf46d7f45a428->enter($__internal_5dab48d787efd5a897511b55f0a7190806f8cc307e026a53a3fcf46d7f45a428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5dab48d787efd5a897511b55f0a7190806f8cc307e026a53a3fcf46d7f45a428->leave($__internal_5dab48d787efd5a897511b55f0a7190806f8cc307e026a53a3fcf46d7f45a428_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a1c767f6f90eaa8b8257141577f7c9a3405528b8cf44b1375b3e6dccc871c37 = $this->env->getExtension("native_profiler");
        $__internal_0a1c767f6f90eaa8b8257141577f7c9a3405528b8cf44b1375b3e6dccc871c37->enter($__internal_0a1c767f6f90eaa8b8257141577f7c9a3405528b8cf44b1375b3e6dccc871c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0a1c767f6f90eaa8b8257141577f7c9a3405528b8cf44b1375b3e6dccc871c37->leave($__internal_0a1c767f6f90eaa8b8257141577f7c9a3405528b8cf44b1375b3e6dccc871c37_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ac46bb556003798bca3aa7e15b72d51d3e284b7e0b5cf0e963ac5262ae9b7c8 = $this->env->getExtension("native_profiler");
        $__internal_2ac46bb556003798bca3aa7e15b72d51d3e284b7e0b5cf0e963ac5262ae9b7c8->enter($__internal_2ac46bb556003798bca3aa7e15b72d51d3e284b7e0b5cf0e963ac5262ae9b7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ac46bb556003798bca3aa7e15b72d51d3e284b7e0b5cf0e963ac5262ae9b7c8->leave($__internal_2ac46bb556003798bca3aa7e15b72d51d3e284b7e0b5cf0e963ac5262ae9b7c8_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c92deb37e05da8bfef4009d2d5e5e23376210ad65dba9a0aac56cfcc6c9feb0f = $this->env->getExtension("native_profiler");
        $__internal_c92deb37e05da8bfef4009d2d5e5e23376210ad65dba9a0aac56cfcc6c9feb0f->enter($__internal_c92deb37e05da8bfef4009d2d5e5e23376210ad65dba9a0aac56cfcc6c9feb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c92deb37e05da8bfef4009d2d5e5e23376210ad65dba9a0aac56cfcc6c9feb0f->leave($__internal_c92deb37e05da8bfef4009d2d5e5e23376210ad65dba9a0aac56cfcc6c9feb0f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 45,  155 => 44,  144 => 6,  132 => 5,  118 => 46,  115 => 45,  113 => 44,  110 => 43,  101 => 40,  98 => 39,  94 => 38,  81 => 28,  77 => 27,  73 => 26,  64 => 20,  55 => 14,  49 => 11,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">*/
/*     */
/*     </head>*/
/*     <body>*/
/*         */
/*         <div id="header">*/
/*             <img src="{{ asset('img/logoudh.png') }}" height="60"/>*/
/*             <div class="welcome">Bienvenido: Jorge Flores</div>*/
/*         </div>*/
/* */
/*                <div id="menu">*/
/*             <ul>*/
/*                 <li><a href="{{ path('homepage') }}">Inicio</a></li>*/
/*                 <li><a href="{{ path('app_roles_index') }}">Roles</a></li>*/
/*                 <li><a href="{{ path('app_usuarios_index') }}">Usuarios</a></li>*/
/*                 <li><a href="#">Categorias</a></li>*/
/*                 <li><a href="#">Productos</a></li>*/
/*                 <li><a href="#">Salir</a></li>*/
/*             </ul>*/
/*         </div>*/
/* */
/* */
/*         <div id="content">*/
/*         */
/*             {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                 <div class="flash-notice">*/
/*                     {{ flashMessage }}*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*             {% block body %}{% endblock %}*/
/*             {% block javascripts %}{% endblock %}*/
/*             */
/*         </div>*/
/*         <div id="footer">*/
/*             Todos los Derechos Reservados 2015*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
