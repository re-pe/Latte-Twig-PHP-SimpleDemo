<?php

class __MyTemplates_ebe78dc56f8753d64f997341a9e1d219 extends Mustache_Template
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
        $buffer .= $this->section7dd1053860aaee1dc1644073cbc09a70($context, $indent, $value);
        $value = $this->resolveValue($context->find('current'), $context, $indent);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';

        return $buffer;
    }

    private function section7dd1053860aaee1dc1644073cbc09a70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<?php $page = "?>{{ . }}<?php"; echo $page; ?>
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
                
                $buffer .= $indent . '<?php $page = "?>';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<?php"; echo $page; ?>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
