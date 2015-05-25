<?php
namespace Leita\Resl;

    function htmlElement($tagname, $args){
        $result = ['tagname' => $tagname];
        return array_merge($result, $args);
    }

    function tags(...$args){
        return array_merge(['tagname' => "tags"], $args);
    };

    //Root
    function doctype($arg){
        return htmlElement("!doctype", ['doctype' => $arg]);
    }
    function html(...$args){
        return htmlElement("html", $args);
    }

    //Document metadata
    function head(...$args){
        return htmlElement("head", $args);
    }
    function title(...$args){
        return htmlElement("title", $args);
    }
    function base(...$args){
        return htmlElement("base", $args);
    }
    function link(...$args){
        return htmlElement("link", $args);
    }
    function meta(...$args){
        return htmlElement("meta", $args);
    }
    function style(...$args){
        return htmlElement("style", $args);
    }

    //Scripting
    function script(...$args){
        return htmlElement("script", $args);
    }
    function noscript(...$args){
        return htmlElement("noscript", $args);
    }

    //Sections
    function body(...$args){
        return htmlElement("body", $args);
    }
    function section(...$args){
        return htmlElement("section", $args);
    }
    function nav(...$args){
        return htmlElement("nav", $args);
    }
    function article(...$args){
        return htmlElement("article", $args);
    }
    function aside(...$args){
        return htmlElement("aside", $args);
    }
    function heading($level, ...$args){
        return htmlElement("h" . $level, $args);
    }
    function hgroup(...$args){
        return htmlElement("hgroup", $args);
    }
    function header(...$args){
        return htmlElement("header", $args);
    }
    function footer(...$args){
        return htmlElement("footer", $args);
    }
    function address(...$args){
        return htmlElement("address", $args);
    }

    //Grouping content
    function p(...$args){
        return htmlElement("p", $args);
    }
    function hr(...$args){
        return htmlElement("hr", $args);
    }
    function br(...$args){
        return htmlElement("br", $args);
    }
    function pre(...$args){
        return htmlElement("pre", $args);
    }
    function blockquote(...$args){
        return htmlElement("blockquote", $args);
    }
    function ol(...$args){
        return htmlElement("ol", $args);
    }
    function ul(...$args){
        return htmlElement("ul", $args);
    }
    function li(...$args){
        return htmlElement("li", $args);
    }
    function dl(...$args){
        return htmlElement("dl", $args);
    }
    function dt(...$args){
        return htmlElement("dt", $args);
    }
    function dd(...$args){
        return htmlElement("dd", $args);
    }
    function figure(...$args){
        return htmlElement("figure", $args);
    }
    function figcaption(...$args){
        return htmlElement("figcaption", $args);
    }

    //Text level semantics
    function div(...$args){
        return htmlElement("div", $args);
    }
    function a(...$args){
        return htmlElement("a", $args);
    }
    function em(...$args){
        return htmlElement("em", $args);
    }
    function strong(...$args){
        return htmlElement("strong", $args);
    }
    function small(...$args){
        return htmlElement("small", $args);
    }
    function s(...$args){
        return htmlElement("s", $args);
    }
    function cite(...$args){
        return htmlElement("cite", $args);
    }
    function q(...$args){
        return htmlElement("q", $args);
    }
    function dfn(...$args){
        return htmlElement("dfn", $args);
    }
    function abbr(...$args){
        return htmlElement("abbr", $args);
    }
    function time(...$args){
        return htmlElement("time", $args);
    }
    function code(...$args){
        return htmlElement("code", $args);
    }
    function variable(...$args){
        return htmlElement("var", $args);
    }
    function samp(...$args){
        return htmlElement("samp", $args);
    }
    function kbd(...$args){
        return htmlElement("kbd", $args);
    }
    function sub(...$args){
        return htmlElement("sub", $args);
    }
    function sup(...$args){
        return htmlElement("sup", $args);
    }
    function i(...$args){
        return htmlElement("i", $args);
    }
    function b(...$args){
        return htmlElement("b", $args);
    }
    function u(...$args){
        return htmlElement("u", $args);
    }
    function mark(...$args){
        return htmlElement("mark", $args);
    }
    function ruby(...$args){
        return htmlElement("ruby", $args);
    }
    function rt(...$args){
        return htmlElement("rt", $args);
    }
    function rp(...$args){
        return htmlElement("rp", $args);
    }
    function bdi(...$args){
        return htmlElement("bdi", $args);
    }
    function bdo(...$args){
        return htmlElement("bdo", $args);
    }
    function span(...$args){
        return htmlElement("span", $args);
    }

    //Edits
    function ins(...$args){
        return htmlElement("ins", $args);
    }
    function del(...$args){
        return htmlElement("del", $args);
    }

    //Embedded content
    function img(...$args){
        return htmlElement("img", $args);
    }
    function iframe(...$args){
        return htmlElement("iframe", $args);
    }
    function embed(...$args){
        return htmlElement("embed", $args);
    }
    function object(...$args){
        return htmlElement("object", $args);
    }
    function param(...$args){
        return htmlElement("param", $args);
    }
    function video(...$args){
        return htmlElement("video", $args);
    }
    function audio(...$args){
        return htmlElement("audio", $args);
    }
    function source(...$args){
        return htmlElement("source", $args);
    }
    function track(...$args){
        return htmlElement("track", $args);
    }
    function canvas(...$args){
        return htmlElement("canvas", $args);
    }
    function map(...$args){
        return htmlElement("map", $args);
    }
    function area(...$args){
        return htmlElement("area", $args);
    }

    //Tables
    function table(...$args){
        return htmlElement("table", $args);
    }
    function caption(...$args){
        return htmlElement("caption", $args);
    }
    function colgroup(...$args){
        return htmlElement("colgroup", $args);
    }
    function col(...$args){
        return htmlElement("col", $args);
    }
    function tbody(...$args){
        return htmlElement("tbody", $args);
    }
    function thead(...$args){
        return htmlElement("thead", $args);
    }
    function tfoot(...$args){
        return htmlElement("tfoot", $args);
    }
    function tr(...$args){
        return htmlElement("tr", $args);
    }
    function td(...$args){
        return htmlElement("td", $args);
    }
    function th(...$args){
        return htmlElement("th", $args);
    }

    //Forms
    function form(...$args){
        return htmlElement("form", $args);
    }
    function fieldset(...$args){
        return htmlElement("fieldset", $args);
    }
    function legend(...$args){
        return htmlElement("legend", $args);
    }
    function label(...$args){
        return htmlElement("label", $args);
    }
    function input(...$args){
        return htmlElement("input", $args);
    }
    function button(...$args){
        return htmlElement("button", $args);
    }
    function select(...$args){
        return htmlElement("select", $args);
    }
    function datalist(...$args){
        return htmlElement("datalist", $args);
    }
    function optgroup(...$args){
        return htmlElement("optgroup", $args);
    }
    function option(...$args){
        return htmlElement("option", $args);
    }
    function textarea(...$args){
        return htmlElement("textarea", $args);
    }
    function keygen(...$args){
        return htmlElement("keygen", $args);
    }
    function output(...$args){
        return htmlElement("output", $args);
    }
    function progress(...$args){
        return htmlElement("progress", $args);
    }
    function meter(...$args){
        return htmlElement("meter", $args);
    }

    //Interactive elements
    function details(...$args){
        return htmlElement("details", $args);
    }
    function summary(...$args){
        return htmlElement("summary", $args);
    }
    function command(...$args){
        return htmlElement("command", $args);
    }
    function menu(...$args){
        return htmlElement("menu", $args);
    }

    function toHtml(array &$array){
        $tagname = NULL;
        $attr = []; 
        $style = []; 
        $kids = [];
        $result = '';
        foreach ($array as $key => &$value){
            switch(gettype($key)){
            case 'integer':
                if (is_array($value)){
                    $kids[] = toHTML($value);
                } else {
                    $kids[] = (string)$value;
                }
                break;
            case 'string':
                if ($key == 'doctype'){
                    $attr[] = $value;
                } else if ($key == 'tagname'){
                    $tagname .= $value;
                } else if (mb_substr($key, 0, 1) == '_'){
                    $style[] = "$key:$value"; 
                } else {
                    $attr[] = "$key=$value";
                }
                break;
            default:
                exit();
                break;
            }
        }
        $result .= $tagname ? '<' . $tagname : '';
        $result .= count($attr) > 0 ? ' ' . implode(' ', $attr) : '';
        $result .= count($style) > 0 ? ' style="' . implode('; ', $attr) . '"': '';
        $result .= '>';
        if ($tagname !== '!doctype'){
            $result .= count($kids) > 0 ? implode('', $attr) : '';
            $result .= '</' . $tagname . '>';
        }
        return $result;
    }