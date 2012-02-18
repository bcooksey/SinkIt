<?php

/* SinkItBundle::layout.html.twig */
class __TwigTemplate_429f3c98cc5fc87489562f1d1affc74e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sinkit/css/sink_it.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <header>
            Sink It
            <div id=\"sub-heading\">A new take on the classic Battle Ship</div>
        </header>
        <div id=\"wrapper\">
            ";
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method")) {
            // line 15
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('content_header', $context, $blocks);
        // line 29
        echo "
            <div id=\"content\" class=\"content\">
                ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "            </div> <!-- End Content -->
        </div> <!-- End Wrapper -->
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Sink It";
    }

    // line 23
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 24
        echo "                            <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">Home</a></li>
                        ";
    }

    // line 20
    public function block_content_header($context, array $blocks = array())
    {
        // line 21
        echo "                <nav id=\"nav-menu\">
                    <ul>
                        ";
        // line 23
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 26
        echo "                    </ul>
                </nav>
            ";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "                ";
    }

    public function getTemplateName()
    {
        return "SinkItBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
