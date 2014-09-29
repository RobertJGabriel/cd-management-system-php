<?php

/* AcmeDemoBundle:main:index.html.twig */
class __TwigTemplate_86ed7150e842bb1fdeb2d738f0a6b201a2c5b6a26ccb415ff9725631cf45815d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo " AcmeDemoBundle:Main:index";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "       <h1>Welcome Admin</h1>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "

   <a href=\"/update\">update</a>
    <a href=\"/add\">add</a>
    <a href=\"/delete\">delete</a>
    <a href=\"/view\">view</a>




";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  44 => 7,  39 => 5,  36 => 4,  30 => 3,);
    }
}
