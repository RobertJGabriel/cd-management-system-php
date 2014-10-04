<?php

/* assessmentOneBundle:search:index.html.twig */
class __TwigTemplate_eeb5b1eadf0be4b7373f9d86489aed8ddfaad5aa2741f41e15c3d0450d0b59cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
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

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Search Cd</h1>
";
    }

    // line 9
    public function block_nav($context, array $blocks = array())
    {
        // line 10
        echo "

    <li> <a href=\"/update\">update</a></li>
    <li>  <a href=\"/add\">add</a></li>
    <li>  <a href=\"/delete\">delete</a></li>
    <li>  <a href=\"/view\">view</a></li>




";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "


    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Id"), 'row', array("attr" => array("placeholder" => "Search By Id")));
        echo "
    ";
        // line 29
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
        return array (  79 => 29,  75 => 28,  70 => 26,  65 => 23,  62 => 22,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 2,);
    }
}
