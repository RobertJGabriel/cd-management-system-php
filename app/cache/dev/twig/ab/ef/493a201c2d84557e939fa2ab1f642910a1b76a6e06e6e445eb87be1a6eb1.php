<?php

/* assessmentOneBundle:add:index.html.twig */
class __TwigTemplate_abef493a201c2d84557e939fa2ab1f642910a1b76a6e06e6e445eb87be1a6eb1 extends Twig_Template
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
        echo "Add A Cd";
    }

    // line 6
    public function block_nav($context, array $blocks = array())
    {
        // line 7
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
        echo "    <h1>Add Cd</h1>
";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row', array("attr" => array("placeholder" => "Artist Name")));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "song"), 'row', array("attr" => array("placeholder" => "Song Name")));
        echo "
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "story"), 'row', array("attr" => array("placeholder" => " Song Description")));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'row', array("attr" => array("placeholder" => " Cd Cost")));
        echo "

    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "assessmentOneBundle:add:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  83 => 28,  79 => 27,  75 => 26,  71 => 25,  66 => 24,  63 => 23,  58 => 20,  55 => 19,  40 => 7,  37 => 6,  31 => 2,);
    }
}
