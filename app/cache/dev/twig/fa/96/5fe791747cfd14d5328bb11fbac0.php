<?php

/* SinkItBundle:Welcome:index.html.twig */
class __TwigTemplate_fa965fe791747cfd14d5328bb11fbac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SinkItBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"intro-page\">
        <span id=\"new-game\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">Start a new game</a></span>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SinkItBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
