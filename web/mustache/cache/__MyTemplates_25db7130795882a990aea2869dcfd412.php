<?php

class __MyTemplates_25db7130795882a990aea2869dcfd412 extends Mustache_Template
{
    protected $strictCallables = true;
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!doctype html>
';
        $buffer .= $indent . '<html>
';
        $buffer .= $indent . '	<head>
';
        $buffer .= $indent . '		<meta charset="utf-8" />
';
        $buffer .= $indent . '		<title>';
        $value = $this->resolveValue($context->find('title'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</title>
';
        $buffer .= $indent . '	</head>
';
        $buffer .= $indent . '	<body>
';
        if ($partial = $this->mustache->loadPartial('homepage')) {
            $buffer .= $partial->renderInternal($context, $indent . '		');
        }
        $buffer .= $indent . '	</body>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }
}
