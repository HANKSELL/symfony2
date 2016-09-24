<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2016452ebf451d175f24781ada48b995e89e59f126fb08bfad690a824d962031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7330447abca9348d92c762a5d56e68ddc603007e2856e49a46b1bcabe903e06c = $this->env->getExtension("native_profiler");
        $__internal_7330447abca9348d92c762a5d56e68ddc603007e2856e49a46b1bcabe903e06c->enter($__internal_7330447abca9348d92c762a5d56e68ddc603007e2856e49a46b1bcabe903e06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7330447abca9348d92c762a5d56e68ddc603007e2856e49a46b1bcabe903e06c->leave($__internal_7330447abca9348d92c762a5d56e68ddc603007e2856e49a46b1bcabe903e06c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_726b970990bb971922beff470e6a42e9ddcbcec6346b5b4411df9816bd87f458 = $this->env->getExtension("native_profiler");
        $__internal_726b970990bb971922beff470e6a42e9ddcbcec6346b5b4411df9816bd87f458->enter($__internal_726b970990bb971922beff470e6a42e9ddcbcec6346b5b4411df9816bd87f458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_726b970990bb971922beff470e6a42e9ddcbcec6346b5b4411df9816bd87f458->leave($__internal_726b970990bb971922beff470e6a42e9ddcbcec6346b5b4411df9816bd87f458_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ddc927f3224fe9e62e330f0e25c5526efced211af2ae0c10194198f62d26e6c6 = $this->env->getExtension("native_profiler");
        $__internal_ddc927f3224fe9e62e330f0e25c5526efced211af2ae0c10194198f62d26e6c6->enter($__internal_ddc927f3224fe9e62e330f0e25c5526efced211af2ae0c10194198f62d26e6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ddc927f3224fe9e62e330f0e25c5526efced211af2ae0c10194198f62d26e6c6->leave($__internal_ddc927f3224fe9e62e330f0e25c5526efced211af2ae0c10194198f62d26e6c6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2ae7d8b7cc923ff56e79f7b8ce277a2370caecfbf6e24e0f60e20573c47bd49 = $this->env->getExtension("native_profiler");
        $__internal_f2ae7d8b7cc923ff56e79f7b8ce277a2370caecfbf6e24e0f60e20573c47bd49->enter($__internal_f2ae7d8b7cc923ff56e79f7b8ce277a2370caecfbf6e24e0f60e20573c47bd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2ae7d8b7cc923ff56e79f7b8ce277a2370caecfbf6e24e0f60e20573c47bd49->leave($__internal_f2ae7d8b7cc923ff56e79f7b8ce277a2370caecfbf6e24e0f60e20573c47bd49_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
