<?php

/* assessmentOneBundle:update:index.html.twig */
class __TwigTemplate_1586e4994a27ebca3fbf8eb55db5653725d74c30b77857e5a9fe8ba8c6a0dc60 extends Twig_Template
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
        echo "Update Cd";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo "  <h1>Update Cd</h1>  ";
    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        // line 6
        echo "
    <li> <a href=\"/update\">update</a></li>
    <li>  <a href=\"/add\">add</a></li>
    <li>  <a href=\"/delete\">delete</a></li>
    <li>  <a href=\"/view\">view</a></li>

";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "

    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row', array("value" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name")));
            echo "
        ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "song"), 'row', array("value" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "song")));
            echo "
        ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "story"), 'row', array("value" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "story")));
            echo "
        ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'row', array("value" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price")));
            echo "
        ";
            // line 23
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
        return array (  88 => 23,  84 => 22,  80 => 21,  76 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 15,  56 => 14,  46 => 6,  43 => 5,  37 => 3,  31 => 2,);
    }
}
