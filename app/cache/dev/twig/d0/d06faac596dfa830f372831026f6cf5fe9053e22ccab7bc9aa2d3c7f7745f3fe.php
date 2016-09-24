<?php

/* Roles/registrar.html.twig */
class __TwigTemplate_0f0686cf91e166360f48095a097615b089b31c3ce29f438a190be99e57194599 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Roles/registrar.html.twig", 1);
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
        $__internal_ae0c59bebf965a55302104c262cba3dcb818b3347a9c399b48a83d01570f7ba9 = $this->env->getExtension("native_profiler");
        $__internal_ae0c59bebf965a55302104c262cba3dcb818b3347a9c399b48a83d01570f7ba9->enter($__internal_ae0c59bebf965a55302104c262cba3dcb818b3347a9c399b48a83d01570f7ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Roles/registrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae0c59bebf965a55302104c262cba3dcb818b3347a9c399b48a83d01570f7ba9->leave($__internal_ae0c59bebf965a55302104c262cba3dcb818b3347a9c399b48a83d01570f7ba9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d81853b544536cd765fa0d12f0f0152807c7b1a1bb2f8f461430c5b8e3ccd9a = $this->env->getExtension("native_profiler");
        $__internal_7d81853b544536cd765fa0d12f0f0152807c7b1a1bb2f8f461430c5b8e3ccd9a->enter($__internal_7d81853b544536cd765fa0d12f0f0152807c7b1a1bb2f8f461430c5b8e3ccd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
<form action=\"../registrar/\" method=\"POST\" class=\"ligthform\">
    <fieldset>
        <legend>Registro de Rol</legend>
        <label>Nombre</label><input type=\"text\" name=\"nombre\" maxlength=\"20\"/>
        <input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary\"/>
    </fieldset>
</form>

<br/>

<a href=\"../\" class=\"btn btn-default\">&lt;&lt; Regresar</a>

";
        
        $__internal_7d81853b544536cd765fa0d12f0f0152807c7b1a1bb2f8f461430c5b8e3ccd9a->leave($__internal_7d81853b544536cd765fa0d12f0f0152807c7b1a1bb2f8f461430c5b8e3ccd9a_prof);

    }

    public function getTemplateName()
    {
        return "Roles/registrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* <form action="../registrar/" method="POST" class="ligthform">*/
/*     <fieldset>*/
/*         <legend>Registro de Rol</legend>*/
/*         <label>Nombre</label><input type="text" name="nombre" maxlength="20"/>*/
/*         <input type="submit" value="Guardar" class="btn btn-primary"/>*/
/*     </fieldset>*/
/* </form>*/
/* */
/* <br/>*/
/* */
/* <a href="../" class="btn btn-default">&lt;&lt; Regresar</a>*/
/* */
/* {% endblock %}*/
/* */
