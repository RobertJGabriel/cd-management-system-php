<?php

/* assessmentOneBundle:view:index.html.twig */
class __TwigTemplate_42ec5cb7c22dfb1c48870580d5e0ad8c4a2892fb380ff9944caf98727504fe0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::viewbase.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::viewbase.html.twig";
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

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>View Cds</h1>
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
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 25
            echo "        <div id=\"views\">
        <img id=\"cover\"src=\"https://cdn2.iconfinder.com/data/icons/metro-ui-dock/128/CD.png\" width=\"200px\" height=\"200px\">
        <ul id=\"info\">

            <li id=\"id\"> Id : ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id"), "html", null, true);
            echo "</li>

            <li id=\"name\"> Name : ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "name"), "html", null, true);
            echo "</li>
            <li id=\"song\">Song : ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "song"), "html", null, true);
            echo "</li>
            <li id=story\"\">Story : ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "story"), "html", null, true);
            echo "</li>

            <li id=\"price\">Price : &#8364; ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "price"), "html", null, true);
            echo "</li>
        </ul>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "assessmentOneBundle:view:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  91 => 33,  87 => 32,  83 => 31,  78 => 29,  72 => 25,  68 => 24,  65 => 23,  62 => 22,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 2,);
    }
}
