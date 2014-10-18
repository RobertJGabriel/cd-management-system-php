<?php

/* assessmentOneBundle:conformation:index.html.twig */
class __TwigTemplate_3e4e1bc334eeeba2e733f1ba6bc350c90229ff4cd42ac39a606ad42edae83420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'header' => array($this, 'block_header'),
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
        echo "  assessmentOneBundle:Main:index";
    }

    // line 7
    public function block_nav($context, array $blocks = array())
    {
        // line 8
        echo "

    <li><img src=\"https://cdn3.iconfinder.com/data/icons/ballicons-free/128/speakers.png\" width=\"50px\" height=\"50px\"></li>
    <li> <a href=\"/update\">update</a></li>
    <li>  <a href=\"/add\">add</a></li>
    <li>  <a href=\"/delete\">delete</a></li>
    <li>  <a href=\"/view\">view</a></li>




";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
        echo "    <h1>  ";
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
        echo "</h1>
";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "
<button><a href=\"/view\"> View Cds</a></button>
";
    }

    public function getTemplateName()
    {
        return "assessmentOneBundle:conformation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  65 => 23,  58 => 21,  55 => 20,  40 => 8,  37 => 7,  31 => 2,);
    }
}
