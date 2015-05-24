<?php

class __MyTemplates_bd4e4d90238043a74f3116f998c26b24 extends Mustache_Template
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
        $buffer .= $this->section8df9183f027fceb5861a1f837458b44e($context, $indent, $value);
        $value = $this->resolveValue($context->find('current'), $context, $indent);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';

        return $buffer;
    }

    private function section8df9183f027fceb5861a1f837458b44e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<?php $page = ?>{{ . }}<?php; if($page == $currentPage){
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
                
                $buffer .= $indent . '<?php $page = ?>';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
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
