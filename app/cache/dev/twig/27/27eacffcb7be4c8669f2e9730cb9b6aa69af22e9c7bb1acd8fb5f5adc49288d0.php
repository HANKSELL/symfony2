<?php

/* Usuarios/index.html.twig */
class __TwigTemplate_89f6ebaac103fcffd5d31cb0a51b56f3e2b8b7e03a4ad7bc1b7a538f164e58c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Usuarios/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41388380ceebf75bd2afb2eee8229e5461320ccba0dc2f85ec4af309054e3e57 = $this->env->getExtension("native_profiler");
        $__internal_41388380ceebf75bd2afb2eee8229e5461320ccba0dc2f85ec4af309054e3e57->enter($__internal_41388380ceebf75bd2afb2eee8229e5461320ccba0dc2f85ec4af309054e3e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Usuarios/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41388380ceebf75bd2afb2eee8229e5461320ccba0dc2f85ec4af309054e3e57->leave($__internal_41388380ceebf75bd2afb2eee8229e5461320ccba0dc2f85ec4af309054e3e57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_383af2924b3c7fae42608332d49c65c007ab85e58454f49a2831428f2225b8b5 = $this->env->getExtension("native_profiler");
        $__internal_383af2924b3c7fae42608332d49c65c007ab85e58454f49a2831428f2225b8b5->enter($__internal_383af2924b3c7fae42608332d49c65c007ab85e58454f49a2831428f2225b8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
<?php //var_dump(\$usuarios) ?>
<table border=\"1\" width=\"100%\" class=\"gridtable\">
    <caption>Mantenimiento de Usuarios</caption>
    <colgroup>
        <col width=\"80\"/>
        <col/>
        <col/>
        <col/>
        <col/>
        <col width=\"80\"/>
        <col width=\"80\"/>
    </colgroup>
    <thead>
        <th>ID</th>
        <th>USUARIO</th>
        <th>ROL</th>
        <th>NOMBRES</th>
        <th>EMAIL</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 28
            echo "        <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 32
            if (($this->getAttribute($context["usuario"], "rol", array()) != null)) {
                // line 33
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "rol", array()), "nombre", array()), "html", null, true);
                echo "
                ";
            }
            // line 35
            echo "            </td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombres", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_usuarios_editar", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">Editar</a></td>
            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_usuarios_eliminar", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "   </tbody>
</table>

<br/>

<a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("app_usuarios_registrar");
        echo "\" class=\"btn btn-default\">Nuevo</a>

";
        
        $__internal_383af2924b3c7fae42608332d49c65c007ab85e58454f49a2831428f2225b8b5->leave($__internal_383af2924b3c7fae42608332d49c65c007ab85e58454f49a2831428f2225b8b5_prof);

    }

    public function getTemplateName()
    {
        return "Usuarios/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  113 => 42,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  89 => 35,  83 => 33,  81 => 32,  76 => 30,  72 => 29,  69 => 28,  65 => 27,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* <?php //var_dump($usuarios) ?>*/
/* <table border="1" width="100%" class="gridtable">*/
/*     <caption>Mantenimiento de Usuarios</caption>*/
/*     <colgroup>*/
/*         <col width="80"/>*/
/*         <col/>*/
/*         <col/>*/
/*         <col/>*/
/*         <col/>*/
/*         <col width="80"/>*/
/*         <col width="80"/>*/
/*     </colgroup>*/
/*     <thead>*/
/*         <th>ID</th>*/
/*         <th>USUARIO</th>*/
/*         <th>ROL</th>*/
/*         <th>NOMBRES</th>*/
/*         <th>EMAIL</th>*/
/*         <th>&nbsp;</th>*/
/*         <th>&nbsp;</th>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for usuario in usuarios %}*/
/*         <tr>*/
/*             <td>{{ usuario.id }}</td>*/
/*             <td>{{ usuario.username }}</td>*/
/*             <td>*/
/*                 {% if usuario.rol != null %}*/
/*                 {{ usuario.rol.nombre }}*/
/*                 {% endif %}*/
/*             </td>*/
/*             <td>{{ usuario.nombres }}</td>*/
/*             <td>{{ usuario.email }}</td>*/
/*             <td><a href="{{ path('app_usuarios_editar', { 'id' : usuario.id }) }}">Editar</a></td>*/
/*             <td><a href="{{ path('app_usuarios_eliminar', { 'id' : usuario.id }) }}">Eliminar</a></td>*/
/*         </tr>*/
/*     {% endfor %}*/
/*    </tbody>*/
/* </table>*/
/* */
/* <br/>*/
/* */
/* <a href="{{ path('app_usuarios_registrar') }}" class="btn btn-default">Nuevo</a>*/
/* */
/* {% endblock %}*/
/* */
