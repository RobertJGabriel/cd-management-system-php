<?php

/* AcmeDemoBundle:update:index.html.twig */
class __TwigTemplate_f0b74dc4018322295e5bd1c55e068d6320f525bdd96544c080deb5b9de803dc0 extends Twig_Template
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

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " AcmeDemoBundle:Main:index";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>Update Cd</h1>
";
    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        // line 14
        echo "

    <li> <a href=\"/update\">update</a></li>
    <li>  <a href=\"/add\">add</a></li>
    <li>  <a href=\"/delete\">delete</a></li>
    <li>  <a href=\"/view\">view</a></li>




";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "

    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row', array("value" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name")));
            echo "
    ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "song"), 'row', array("value" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "song")));
            echo "
    ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "story"), 'row', array("value" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "story")));
            echo "
    ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'row', array("value" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price")));
            echo "

    ";
            // line 36
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
        return "AcmeDemoBundle:update:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  90 => 34,  86 => 33,  82 => 32,  77 => 31,  73 => 30,  69 => 29,  65 => 27,  62 => 26,  48 => 14,  45 => 13,  40 => 10,  37 => 9,  31 => 6,);
    }
}
