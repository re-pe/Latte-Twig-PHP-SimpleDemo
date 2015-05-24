<?php

class __MyTemplates_692157902e473c13826a3eb8c06d5c7b extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'pages' section
        $value = $context->find('pages');
        $buffer .= $this->sectionCd020184ac3cea3c43dba082c125bf38($context, $indent, $value);
        $value = $this->resolveValue($context->find('current'), $context, $indent);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';

        return $buffer;
    }

    private function sectionCd020184ac3cea3c43dba082c125bf38(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
{{ . }}<?php; if($page == $currentPage){
    echo \'<li class="current">\' . $page . \'</li>\';
} else {
    echo \'<li>\' . $page . \'</li>\';
}?>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<?php; if($page == $currentPage){
';
                $buffer .= $indent . '    echo \'<li class="current">\' . $page . \'</li>\';
';
                $buffer .= $indent . '} else {
';
                $buffer .= $indent . '    echo \'<li>\' . $page . \'</li>\';
';
                $buffer .= $indent . '}?>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
