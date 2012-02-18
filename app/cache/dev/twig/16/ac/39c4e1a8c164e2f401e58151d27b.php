<?php

/* AcmeDemoBundle:Demo:hello.json.twig */
class __TwigTemplate_16ac39c4e1a8c164e2f401e58151d27b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
