<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* test.html */
class __TwigTemplate_805c4d0a51ffe20f9bb49a985b1e8258184a6d3152baa2852b344f2eea64e95e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head lang=\"en\">
    <meta charset=\"UTF-8\">
    <title>Test</title>
</head>
<body>
<h1>Результаты запросов:</h1>
<ul>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 11
            echo "   ";
            if (twig_test_iterable($context["value"])) {
                // line 12
                echo "    ";
                if (($context["key"] == "firstQuery")) {
                    echo "</li>
        <h1>Первый запрос:</h1>
        ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["k"] => $context["val"]) {
                        // line 15
                        echo "            ";
                        if (twig_test_iterable($context["val"])) {
                            // line 16
                            echo "                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["val"]);
                            foreach ($context['_seq'] as $context["ind"] => $context["v"]) {
                                // line 17
                                echo "                    <li>";
                                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                                echo "</li>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['ind'], $context['v'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 19
                            echo "            ";
                        }
                        // line 20
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "    ";
                }
                // line 22
                echo "
    ";
                // line 23
                if (($context["key"] == "secondQuery")) {
                    echo "</li>
        <h1>Второй запрос:</h1>
        ";
                    // line 25
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["k"] => $context["val"]) {
                        // line 26
                        echo "            ";
                        if (twig_test_iterable($context["val"])) {
                            // line 27
                            echo "                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["val"]);
                            foreach ($context['_seq'] as $context["ind"] => $context["v"]) {
                                // line 28
                                echo "                    <li>";
                                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                                echo "</li>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['ind'], $context['v'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 30
                            echo "            ";
                        }
                        // line 31
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "    ";
                }
                // line 33
                echo "
    ";
                // line 34
                if (($context["key"] == "thirdQuery")) {
                    echo "</li>
        <h1>Третий запрос:</h1>
        ";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["k"] => $context["val"]) {
                        // line 37
                        echo "            ";
                        if (twig_test_iterable($context["val"])) {
                            // line 38
                            echo "                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["val"]);
                            foreach ($context['_seq'] as $context["ind"] => $context["v"]) {
                                // line 39
                                echo "                    <li>";
                                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                                echo "</li>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['ind'], $context['v'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 41
                            echo "            ";
                        }
                        // line 42
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "    ";
                }
                // line 44
                echo "    
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</ul>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 47,  169 => 44,  166 => 43,  160 => 42,  157 => 41,  148 => 39,  143 => 38,  140 => 37,  136 => 36,  131 => 34,  128 => 33,  125 => 32,  119 => 31,  116 => 30,  107 => 28,  102 => 27,  99 => 26,  95 => 25,  90 => 23,  87 => 22,  84 => 21,  78 => 20,  75 => 19,  66 => 17,  61 => 16,  58 => 15,  54 => 14,  48 => 12,  45 => 11,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "test.html", "D:\\OpenServer\\OSPanel\\domains\\test.local\\app\\views\\templates\\test.html");
    }
}
