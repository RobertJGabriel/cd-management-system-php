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
<li><img src=\"https://cdn3.iconfinder.com/data/icons/ballicons-free/128/speakers.png\" width=\"50px\" height=\"50px\"></li>
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
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 26
            echo "        <tr>

            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id"), "html", null, true);
            echo "</td>

            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "song"), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "story"), "html", null, true);
            echo "</td>

            <td>&#8364; ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "price"), "html", null, true);
            echo "</td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "

";
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
        return array (  105 => 38,  95 => 34,  90 => 32,  86 => 31,  82 => 30,  77 => 28,  73 => 26,  69 => 25,  65 => 23,  62 => 22,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 2,);
    }
}
