<?php

class __MyTemplates_4a5575158f0f9f34ffea01a693a6f4ba extends Mustache_Template
{
    protected $strictCallables = true;
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<li>
';
        $value = $this->resolveValue($context->last(), $context, $indent);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '</li>';

        return $buffer;
    }
}
