<?php

/* assessmentOneBundle:update:index.html.twig */
class __TwigTemplate_1586e4994a27ebca3fbf8eb55db5653725d74c30b77857e5a9fe8ba8c6a0dc60 extends Twig_Template
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
        echo "Update Cd";
    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        // line 5
        echo "

    <li><img src=\"https://cdn3.iconfinder.com/data/icons/ballicons-free/128/speakers.png\" width=\"50px\" height=\"50px\"></li>
    <li> <a href=\"/update\">update</a></li>
    <li>  <a href=\"/add\">add</a></li>
    <li>  <a href=\"/delete\">delete</a></li>
    <li>  <a href=\"/view\">view</a></li>



";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        echo "  <h1>Update Cd</h1>  ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "

    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row', array("value" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name")));
            echo "
        ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "song"), 'row', array("value" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "song")));
            echo "
        ";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "story"), 'row', array("value" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "story")));
            echo "
        ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'row', array("value" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price")));
            echo "
        ";
            // line 27
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "assessmentOneBundle:update:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  88 => 26,  84 => 25,  80 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 19,  60 => 18,  54 => 16,  40 => 5,  37 => 4,  31 => 2,);
    }
}
