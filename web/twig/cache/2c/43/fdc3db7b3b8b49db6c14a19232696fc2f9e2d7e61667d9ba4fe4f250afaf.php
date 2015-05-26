<?php

/* layout.twig */
class __TwigTemplate_2c43fdc3db7b3b8b49db6c14a19232696fc2f9e2d7e61667d9ba4fe4f250afaf extends Twig_Template
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
