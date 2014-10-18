<?php

/* ::viewbase.html.twig */
class __TwigTemplate_977e29226aa307681edbb054fe9e8708ae2d0e908f793bfd46f9bc078de6db5d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
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
        // line 17
        $this->displayBlock('header', $context, $blocks);
        echo " </div>
    <div id=\"wrapper2\">
        <table style=\"width:100%\">
            <tr>
                <th>ID</th>
                <th>Artist</th>
                <th>Song</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "</table>
    </div>

";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "










        ";
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::viewbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  103 => 28,  100 => 27,  94 => 17,  88 => 15,  82 => 5,  76 => 44,  74 => 43,  69 => 40,  67 => 27,  54 => 17,  49 => 15,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
