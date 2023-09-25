<?php
class partial_List_UnresolvedDependencies_html_ddbb2a2fa5e82debb354dc94d5a9c589c92e1ddb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.extensionKey'),
];

$arguments1 = [
'key' => 'dependencyCheck.headline',
'id' => NULL,
'default' => NULL,
'arguments' => $array3,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= ':</p>
<ul>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output6 = '';

$output6 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array8 = [
'0' => $renderingContext->getVariableProvider()->getByPath('key'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('extension.extensionKey'),
];

$expression9 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments7 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output10 = '';

$output10 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                <li>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('message.message');
};

$arguments14 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());

$output13 .= !is_string($value16) && !(is_object($value16) && method_exists($value16, '__toString')) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments14['encoding'], $arguments14['doubleEncode']);

$output13 .= '</li>
            ';
return $output13;
};

$arguments11 = [
'each' => $renderingContext->getVariableProvider()->getByPath('messages'),
'as' => 'message',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
        ';
return $output10;
},
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, static fn() => '', $renderingContext)
;

$output6 .= '
    ';
return $output6;
};

$arguments4 = [
'each' => $renderingContext->getVariableProvider()->getByPath('unresolvedDependencies'),
'as' => 'messages',
'key' => 'key',
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
$output19 = '';

$output19 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array21 = [
'0' => $renderingContext->getVariableProvider()->getByPath('key'),
'1' => ' != ',
'2' => $renderingContext->getVariableProvider()->getByPath('extension.extensionKey'),
];

$expression22 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments20 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression22(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output23 = '';

$output23 .= '
            <li>
                <strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};

$array29 = [
'key' => $renderingContext->getVariableProvider()->getByPath('key'),
];

$arguments27 = [
'key' => 'dependencyCheck.requiredExtension',
'id' => NULL,
'default' => NULL,
'arguments' => $array29,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
};

$arguments24 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value26 = ($arguments24['value'] !== NULL ? $arguments24['value'] : $renderChildrenClosure25());

$output23 .= !is_string($value26) && !(is_object($value26) && method_exists($value26, '__toString')) ? $value26 : htmlspecialchars($value26, ($arguments24['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments24['encoding'], $arguments24['doubleEncode']);

$output23 .= '</strong>
                <ul>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
$output32 = '';

$output32 .= '
                        <li>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('message.message');
};

$arguments33 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output32 .= !is_string($value35) && !(is_object($value35) && method_exists($value35, '__toString')) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments33['encoding'], $arguments33['doubleEncode']);

$output32 .= '</li>
                    ';
return $output32;
};

$arguments30 = [
'each' => $renderingContext->getVariableProvider()->getByPath('messages'),
'as' => 'message',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output23 .= '
                </ul>
            </li>
        ';
return $output23;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, static fn() => '', $renderingContext)
;

$output19 .= '
    ';
return $output19;
};

$arguments17 = [
'each' => $renderingContext->getVariableProvider()->getByPath('unresolvedDependencies'),
'as' => 'messages',
'key' => 'key',
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
</ul>
';

    return $output0;
}

}

#