<?php

class __MyTemplates_0204e3f100a7f61847d2802943a89ceb extends Mustache_Template
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
        $buffer .= $this->sectionAcf8344da461f5301aa8e301faa5c0d5($context, $indent, $value);
        $value = $this->resolveValue($context->find('current'), $context, $indent);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';

        return $buffer;
    }

    private function sectionAcf8344da461f5301aa8e301faa5c0d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<?php $page = "?>{{ . }}<?php"; ?>
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
                $buffer .= '<?php"; ?>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
