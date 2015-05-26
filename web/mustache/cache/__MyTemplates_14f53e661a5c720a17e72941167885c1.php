<?php

class __MyTemplates_14f53e661a5c720a17e72941167885c1 extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'wrapped' section
        $value = $context->find('wrapped');
        $buffer .= $this->sectionAb043ed448319515d5540e67f1e7473c($context, $indent, $value);
        $value = $this->resolveValue($context->find('current'), $context, $indent);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';

        return $buffer;
    }

    private function sectionF6115143a50ee9a99b9bbb4a7f1fad4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
{{ . }}
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
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb043ed448319515d5540e67f1e7473c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
{{#pages}}
{{ . }}
{{/pages}}
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
                
                // 'pages' section
                $value = $context->find('pages');
                $buffer .= $this->sectionF6115143a50ee9a99b9bbb4a7f1fad4c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
