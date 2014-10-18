<?php

/* assessmentOneBundle:main:index.html.twig */
class __TwigTemplate_ea780ff6f261f8c82b955979c6569382c4895f41c1ac71a18bd78e73020e5a1b extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Welcome";
    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        // line 6
        echo "


    <li><img src=\"https://cdn3.iconfinder.com/data/icons/ballicons-free/128/speakers.png\" width=\"50px\" height=\"50px\"></li>
    <li> <a href=\"/update\">update</a></li>
    <li>  <a href=\"/add\">add</a></li>
    <li>  <a href=\"/delete\">delete</a></li>
    <li>  <a href=\"/view\">view</a></li>




";
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        // line 20
        echo "       <h1>Welcome Admin</h1>
   ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "
    <p>Hi , This is the first time you can add delete and update cds to the database.</p>




";
    }

    public function getTemplateName()
    {
        return "assessmentOneBundle:main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  64 => 22,  59 => 20,  56 => 19,  40 => 6,  37 => 5,  31 => 3,);
    }
}
