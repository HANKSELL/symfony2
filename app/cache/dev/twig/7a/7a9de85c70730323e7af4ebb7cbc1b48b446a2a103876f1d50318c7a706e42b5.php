<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_23e41a798fdf1861e9d167fd3093ef7e3c38dbc6d7d83d2851b4530e496a75da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb3cd8acc5eab7506bab233e505b05cbb2d1a1579ceb3c5b6bd83fddab9c0070 = $this->env->getExtension("native_profiler");
        $__internal_cb3cd8acc5eab7506bab233e505b05cbb2d1a1579ceb3c5b6bd83fddab9c0070->enter($__internal_cb3cd8acc5eab7506bab233e505b05cbb2d1a1579ceb3c5b6bd83fddab9c0070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb3cd8acc5eab7506bab233e505b05cbb2d1a1579ceb3c5b6bd83fddab9c0070->leave($__internal_cb3cd8acc5eab7506bab233e505b05cbb2d1a1579ceb3c5b6bd83fddab9c0070_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1744ce82fcc5c791197e3542bdef08f39be4d7aec3659e8c4abf08bbd7ae25dc = $this->env->getExtension("native_profiler");
        $__internal_1744ce82fcc5c791197e3542bdef08f39be4d7aec3659e8c4abf08bbd7ae25dc->enter($__internal_1744ce82fcc5c791197e3542bdef08f39be4d7aec3659e8c4abf08bbd7ae25dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1744ce82fcc5c791197e3542bdef08f39be4d7aec3659e8c4abf08bbd7ae25dc->leave($__internal_1744ce82fcc5c791197e3542bdef08f39be4d7aec3659e8c4abf08bbd7ae25dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_014c15c0698be82001ba2b2b4afba5324eaa7308cae91c5601951c50785b11ad = $this->env->getExtension("native_profiler");
        $__internal_014c15c0698be82001ba2b2b4afba5324eaa7308cae91c5601951c50785b11ad->enter($__internal_014c15c0698be82001ba2b2b4afba5324eaa7308cae91c5601951c50785b11ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_014c15c0698be82001ba2b2b4afba5324eaa7308cae91c5601951c50785b11ad->leave($__internal_014c15c0698be82001ba2b2b4afba5324eaa7308cae91c5601951c50785b11ad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1204cd2731dd3502214a95686ff84dc4c3df34582b880b67d7566774b11f5c93 = $this->env->getExtension("native_profiler");
        $__internal_1204cd2731dd3502214a95686ff84dc4c3df34582b880b67d7566774b11f5c93->enter($__internal_1204cd2731dd3502214a95686ff84dc4c3df34582b880b67d7566774b11f5c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1204cd2731dd3502214a95686ff84dc4c3df34582b880b67d7566774b11f5c93->leave($__internal_1204cd2731dd3502214a95686ff84dc4c3df34582b880b67d7566774b11f5c93_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
