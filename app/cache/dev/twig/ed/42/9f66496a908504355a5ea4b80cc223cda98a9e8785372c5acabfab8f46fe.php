<?php

/* assessmentOneBundle:base:base.html.twig */
class __TwigTemplate_ed429f66496a908504355a5ea4b80cc223cda98a9e8785372c5acabfab8f46fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assessmentOne/css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />



</head>
<body>


<div id=\"nav\"><ul id=\"menu\">";
        // line 15
        $this->displayBlock('nav', $context, $blocks);
        echo "</ul> </div>
<div id=\"header\">   ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        echo " </div>

<div id=\"class\">
    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
</div>

";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome";
    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "










    ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "assessmentOneBundle:base:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  95 => 20,  92 => 19,  86 => 16,  80 => 15,  74 => 5,  68 => 36,  66 => 35,  61 => 32,  59 => 19,  53 => 16,  49 => 15,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
