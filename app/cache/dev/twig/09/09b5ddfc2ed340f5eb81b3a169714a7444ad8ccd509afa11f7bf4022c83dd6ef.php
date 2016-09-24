<?php

/* Usuarios/registrar.html.twig */
class __TwigTemplate_8b1a432276b21cf2a4abd1428ee2c04b0095561d03e6ab89c927ef7ef190fe76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Usuarios/registrar.html.twig", 1);
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
        $__internal_f3d7aa886374b3c3278a27c634d9db71ed8f3f2227f5acf6ba6795172718b4df = $this->env->getExtension("native_profiler");
        $__internal_f3d7aa886374b3c3278a27c634d9db71ed8f3f2227f5acf6ba6795172718b4df->enter($__internal_f3d7aa886374b3c3278a27c634d9db71ed8f3f2227f5acf6ba6795172718b4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Usuarios/registrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d7aa886374b3c3278a27c634d9db71ed8f3f2227f5acf6ba6795172718b4df->leave($__internal_f3d7aa886374b3c3278a27c634d9db71ed8f3f2227f5acf6ba6795172718b4df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f1baeb71553530860995934393b67cf0597461438a8ea14454637a7d3f4e7c2 = $this->env->getExtension("native_profiler");
        $__internal_8f1baeb71553530860995934393b67cf0597461438a8ea14454637a7d3f4e7c2->enter($__internal_8f1baeb71553530860995934393b67cf0597461438a8ea14454637a7d3f4e7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("app_usuarios_registrar");
        echo "\" method=\"POST\" class=\"ligthform\">
    <fieldset>
        <legend>Registro de Usuario</legend>
        <label>Username</label><input type=\"text\" name=\"username\" maxlength=\"20\"/><br/>
        <label>Password</label><input type=\"password\" name=\"password\" maxlength=\"40\"/><br/>
        <label>Nombres</label><input type=\"text\" name=\"nombres\" maxlength=\"100\"/><br/>
        <label>Email</label><input type=\"email\" name=\"email\" maxlength=\"100\"/><br/>
        <label>Rol</label><select name=\"roles_id\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 14
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "nombre", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </select><br/>
        <input type=\"submit\" value=\"Guardar\"/>
    </fieldset>
</form>

<br/>

<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("app_usuarios_index");
        echo "\" class=\"btn btn-default\">&lt;&lt; Regresar</a>

";
        
        $__internal_8f1baeb71553530860995934393b67cf0597461438a8ea14454637a7d3f4e7c2->leave($__internal_8f1baeb71553530860995934393b67cf0597461438a8ea14454637a7d3f4e7c2_prof);

    }

    public function getTemplateName()
    {
        return "Usuarios/registrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  69 => 16,  58 => 14,  54 => 13,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* <form action="{{ path('app_usuarios_registrar') }}" method="POST" class="ligthform">*/
/*     <fieldset>*/
/*         <legend>Registro de Usuario</legend>*/
/*         <label>Username</label><input type="text" name="username" maxlength="20"/><br/>*/
/*         <label>Password</label><input type="password" name="password" maxlength="40"/><br/>*/
/*         <label>Nombres</label><input type="text" name="nombres" maxlength="100"/><br/>*/
/*         <label>Email</label><input type="email" name="email" maxlength="100"/><br/>*/
/*         <label>Rol</label><select name="roles_id">*/
/*             {% for rol in roles %}*/
/*                 <option value="{{ rol.id }}">{{ rol.nombre }}</option>*/
/*             {% endfor %}*/
/*         </select><br/>*/
/*         <input type="submit" value="Guardar"/>*/
/*     </fieldset>*/
/* </form>*/
/* */
/* <br/>*/
/* */
/* <a href="{{ path('app_usuarios_index') }}" class="btn btn-default">&lt;&lt; Regresar</a>*/
/* */
/* {% endblock %}*/
/* */
