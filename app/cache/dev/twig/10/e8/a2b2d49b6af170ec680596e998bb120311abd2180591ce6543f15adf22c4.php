<?php

/* AcmeDemoBundle:conformation:conformation.html.twig */
class __TwigTemplate_10e8a2b2d49b6af170ec680596e998bb120311abd2180591ce6543f15adf22c4 extends Twig_Template
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
        echo " AcmeDemoBundle:Main:index";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>  ";
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
        echo "</h1>
";
    }

    // line 9
    public function block_nav($context, array $blocks = array())
    {
        // line 10
        echo "

    <li><a href=\"/update\">update</a></li>
    <li><a href=\"/add\">add</a></li>
    <li><a href=\"/delete\">delete</a></li>
    <li><a href=\"/view\">view</a></li>


";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "

";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:conformation:conformation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  62 => 20,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  31 => 2,);
    }
}