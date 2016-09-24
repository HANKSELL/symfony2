<?php

/* Roles/editar.html.twig */
class __TwigTemplate_740efb6715c3968f1092ef4ecb8ae334f536f4ac158a8f32bc1293be2bbea226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Roles/editar.html.twig", 1);
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
        $__internal_30f06dcf0791cb5251f62d97a60a0c260535fc23a5f873212bbb648017a59664 = $this->env->getExtension("native_profiler");
        $__internal_30f06dcf0791cb5251f62d97a60a0c260535fc23a5f873212bbb648017a59664->enter($__internal_30f06dcf0791cb5251f62d97a60a0c260535fc23a5f873212bbb648017a59664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Roles/editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30f06dcf0791cb5251f62d97a60a0c260535fc23a5f873212bbb648017a59664->leave($__internal_30f06dcf0791cb5251f62d97a60a0c260535fc23a5f873212bbb648017a59664_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_672d4f98874bf7f86a06e44f6436ea424d9c2dff6fc50d1353a510ff1c509a88 = $this->env->getExtension("native_profiler");
        $__internal_672d4f98874bf7f86a06e44f6436ea424d9c2dff6fc50d1353a510ff1c509a88->enter($__internal_672d4f98874bf7f86a06e44f6436ea424d9c2dff6fc50d1353a510ff1c509a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
<form action=\"../../editar/";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "id", array()), "html", null, true);
        echo "/\" method=\"POST\" class=\"ligthform\">
    <fieldset>
        <legend>Actualizar de Rol</legend>
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "id", array()), "html", null, true);
        echo "\"/>
        <label>Nombre</label><input type=\"text\" name=\"nombre\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "nombre", array()), "html", null, true);
        echo "\" maxlength=\"20\"/>
        <input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary\"/>
    </fieldset>
</form>

<br/>

<a href=\"../../\" class=\"btn btn-default\">&lt;&lt; Regresar</a>

";
        
        $__internal_672d4f98874bf7f86a06e44f6436ea424d9c2dff6fc50d1353a510ff1c509a88->leave($__internal_672d4f98874bf7f86a06e44f6436ea424d9c2dff6fc50d1353a510ff1c509a88_prof);

    }

    public function getTemplateName()
    {
        return "Roles/editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  49 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* <form action="../../editar/{{ rol.id }}/" method="POST" class="ligthform">*/
/*     <fieldset>*/
/*         <legend>Actualizar de Rol</legend>*/
/*         <input type="hidden" name="id" value="{{ rol.id }}"/>*/
/*         <label>Nombre</label><input type="text" name="nombre" value="{{ rol.nombre }}" maxlength="20"/>*/
/*         <input type="submit" value="Guardar" class="btn btn-primary"/>*/
/*     </fieldset>*/
/* </form>*/
/* */
/* <br/>*/
/* */
/* <a href="../../" class="btn btn-default">&lt;&lt; Regresar</a>*/
/* */
/* {% endblock %}*/
/* */
