<?php

/* layout.twig */
class __TwigTemplate_471ff56c29a3def381cd7893472589c3aeea266ea76083b355c6d1b62df270d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t</head>

\t<body>
\t\t";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "\t</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  42 => 5,  36 => 10,  34 => 9,  27 => 5,  21 => 1,  69 => 14,  65 => 12,  52 => 10,  48 => 9,  45 => 8,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
