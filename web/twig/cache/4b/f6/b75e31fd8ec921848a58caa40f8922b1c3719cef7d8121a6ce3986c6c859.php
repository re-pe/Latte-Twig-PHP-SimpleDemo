<?php

/* homepage.twig */
class __TwigTemplate_4bf6b75e31fd8ec921848a58caa40f8922b1c3719cef7d8121a6ce3986c6c859 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h2>";
        echo twig_escape_filter($this->env, (isset($context["engine"]) ? $context["engine"] : null), "html", null, true);
        echo "</h2>
    ";
        // line 7
        if ((isset($context["pages"]) ? $context["pages"] : null)) {
            // line 8
            echo "        <ul>
            ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 10
                echo "                    <li ";
                if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["currentPage"]) ? $context["currentPage"] : null))) {
                    echo "class=\"current\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
    ";
        } else {
            // line 14
            echo "            <p>empty</p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "homepage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  65 => 12,  52 => 10,  48 => 9,  45 => 8,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
