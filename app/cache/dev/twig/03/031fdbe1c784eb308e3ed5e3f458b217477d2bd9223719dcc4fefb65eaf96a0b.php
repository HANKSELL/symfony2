<?php

/* Roles/index.html.twig */
class __TwigTemplate_e49710e51c450554cef2c8ef8395f20a1bcee16c255c46374d7bf11bcf107904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Roles/index.html.twig", 1);
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
        $__internal_e435a8b2fa68b167dbae64d4234846d0a750df406e058c1c621b89d944cd96e8 = $this->env->getExtension("native_profiler");
        $__internal_e435a8b2fa68b167dbae64d4234846d0a750df406e058c1c621b89d944cd96e8->enter($__internal_e435a8b2fa68b167dbae64d4234846d0a750df406e058c1c621b89d944cd96e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Roles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e435a8b2fa68b167dbae64d4234846d0a750df406e058c1c621b89d944cd96e8->leave($__internal_e435a8b2fa68b167dbae64d4234846d0a750df406e058c1c621b89d944cd96e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8d3e070c457e5e8fbd743244a19b2afdc45499a7e088987a84922e02fc22ac5 = $this->env->getExtension("native_profiler");
        $__internal_e8d3e070c457e5e8fbd743244a19b2afdc45499a7e088987a84922e02fc22ac5->enter($__internal_e8d3e070c457e5e8fbd743244a19b2afdc45499a7e088987a84922e02fc22ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
<?php //foreach (\$roles as \$row) { var_dump(\$row); } ?>
<h2>Mantenimiento de Roles</h2>

<table border=\"1\" width=\"100%\" class=\"gridtable\">
    <caption>Lista de Roles</caption>
    <colgroup>
        <col width=\"80\"/>
        <col/>
        <col width=\"80\"/>
        <col width=\"80\"/>
    </colgroup>
    <thead>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 24
            echo "        <tr>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "nombre", array()), "html", null, true);
            echo "</td>
            <td><a href=\"editar/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "id", array()), "html", null, true);
            echo "\">Editar</a></td>
            <td><a href=\"eliminar/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "id", array()), "html", null, true);
            echo "\">Eliminar</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "   </tbody>
</table>

<br/>

<a href=\"registrar/\" class=\"btn btn-default\">Nuevo</a>

";
        
        $__internal_e8d3e070c457e5e8fbd743244a19b2afdc45499a7e088987a84922e02fc22ac5->leave($__internal_e8d3e070c457e5e8fbd743244a19b2afdc45499a7e088987a84922e02fc22ac5_prof);

    }

    public function getTemplateName()
    {
        return "Roles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* <?php //foreach ($roles as $row) { var_dump($row); } ?>*/
/* <h2>Mantenimiento de Roles</h2>*/
/* */
/* <table border="1" width="100%" class="gridtable">*/
/*     <caption>Lista de Roles</caption>*/
/*     <colgroup>*/
/*         <col width="80"/>*/
/*         <col/>*/
/*         <col width="80"/>*/
/*         <col width="80"/>*/
/*     </colgroup>*/
/*     <thead>*/
/*         <th>ID</th>*/
/*         <th>NOMBRE</th>*/
/*         <th>&nbsp;</th>*/
/*         <th>&nbsp;</th>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for rol in roles %}*/
/*         <tr>*/
/*             <td>{{ rol.id }}</td>*/
/*             <td>{{ rol.nombre }}</td>*/
/*             <td><a href="editar/{{ rol.id }}">Editar</a></td>*/
/*             <td><a href="eliminar/{{ rol.id }}">Eliminar</a></td>*/
/*         </tr>*/
/*     {% endfor %}*/
/*    </tbody>*/
/* </table>*/
/* */
/* <br/>*/
/* */
/* <a href="registrar/" class="btn btn-default">Nuevo</a>*/
/* */
/* {% endblock %}*/
/* */
