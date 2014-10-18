<?php

/* assessmentOneBundle:search:index.html.twig */
class __TwigTemplate_eeb5b1eadf0be4b7373f9d86489aed8ddfaad5aa2741f41e15c3d0450d0b59cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("assessmentOneBundle:base:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "assessmentOneBundle:base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Search Cd";
    }

    // line 6
    public function block_nav($context, array $blocks = array())
    {
        // line 7
        echo "


    <li><img src=\"https://cdn3.iconfinder.com/data/icons/ballicons-free/128/speakers.png\" width=\"50px\" height=\"50px\"></li>
    <li> <a href=\"/update\">update</a></li>
    <li>  <a href=\"/add\">add</a></li>
    <li>  <a href=\"/delete\">delete</a></li>
    <li>  <a href=\"/view\">view</a></li>





";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        // line 22
        echo "    <h1>Search Cd</h1>
";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "


    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Id"), 'row', array("attr" => array("placeholder" => "Search By Id")));
        echo "
    ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "assessmentOneBundle:search:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  78 => 31,  73 => 29,  68 => 26,  65 => 25,  60 => 22,  57 => 21,  40 => 7,  37 => 6,  31 => 2,);
    }
}
