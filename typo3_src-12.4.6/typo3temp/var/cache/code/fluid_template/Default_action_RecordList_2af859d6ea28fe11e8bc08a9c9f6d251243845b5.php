<?php
class Default_action_RecordList_2af859d6ea28fe11e8bc08a9c9f6d251243845b5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Module';
    }
    public function hasLayout() {
        return true;
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
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
    }
    /**
 * section Before
 */
public function section_74f39697ac328c6325ce068b6aaca626abc0bf63(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/backend/recordlist.js',
'1' => '@typo3/backend/record-download-button.js',
'2' => '@typo3/backend/clear-cache.js',
'3' => '@typo3/backend/record-search.js',
'4' => '@typo3/backend/ajax-data-handler.js',
'5' => '@typo3/backend/column-selector-button.js',
'6' => '@typo3/backend/multi-record-selection.js',
'7' => '@typo3/backend/clipboard-panel.js',
'8' => '@typo3/backend/new-content-element-wizard-button.js',
'9' => '@typo3/backend/element/immediate-action-element.js',
'10' => '@typo3/backend/context-menu.js',
'11' => '@typo3/backend/element/editable-page-title.js',
];

$arguments1 = [
'pageTitle' => '',
'includeCssFiles' => NULL,
'includeJsFiles' => NULL,
'addJsInlineLabels' => NULL,
'includeJavaScriptModules' => $array3,
'includeRequireJsModules' => NULL,
'addInlineSettings' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$array6 = [
'0' => 'web',
'1' => $renderingContext->getVariableProvider()->getByPath('pageId'),
];

$arguments4 = [
'value' => $array6,
'name' => 'immediateActionArgs',
];
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '
    <typo3-immediate-action
        action="TYPO3.Backend.Storage.ModuleStateStorage.update"
        args="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('immediateActionArgs');
};

$arguments10 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure11 = ($arguments10['value'] !== null) ? function() use ($arguments10) { return $arguments10['value']; } : $renderChildrenClosure11;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
};

$arguments7 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output0 .= !is_string($value9) && !(is_object($value9) && method_exists($value9, '__toString')) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments7['encoding'], $arguments7['doubleEncode']);

$output0 .= '"
    ></typo3-immediate-action>
';

    return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output12 = '';

$output12 .= '
    <typo3-backend-editable-page-title
        pageTitle="';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageTitle')]);

$output12 .= '"
        pageId="';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageId')]);

$output12 .= '"
        ';
// Rendering TernaryExpression node
$array13 = array (
  0 => '{isPageEditable ? \'editable\' : \'\'}',
  1 => '{isPageEditable ? \'editable\' : \'\'}',
);
$ternaryExpression14 = function($context, $renderingContext) {
    $check = 'isPageEditable';
    $parser = new \TYPO3Fluid\Fluid\Core\Parser\BooleanParser();
    $checkResult = $parser->evaluate($check, $context);
    if ($checkResult) {
        return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\TernaryExpressionNode::getTemplateVariableOrValueItself('\'editable\'', $renderingContext);
    }
    return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\TernaryExpressionNode::getTemplateVariableOrValueItself('\'\'', $renderingContext);
};

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$ternaryExpression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\TernaryExpressionNode::gatherContext($renderingContext, $array13[1]), $renderingContext)]);

$output12 .= '
    >
        ';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageTitle')]);

$output12 .= '
    </typo3-backend-editable-page-title>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('additionalContentTop');
};

$arguments15 = [
'value' => NULL,
];

$output12 .= isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();

$output12 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('languageSelectorHtml');
};

$arguments17 = [
'value' => NULL,
];

$output12 .= isset($arguments17['value']) ? $arguments17['value'] : $renderChildrenClosure18();

$output12 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('searchBoxHtml');
};

$arguments19 = [
'value' => NULL,
];

$output12 .= isset($arguments19['value']) ? $arguments19['value'] : $renderChildrenClosure20();

$output12 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('pageTranslationsHtml');
};

$arguments21 = [
'value' => NULL,
];

$output12 .= isset($arguments21['value']) ? $arguments21['value'] : $renderChildrenClosure22();

$output12 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('tableListHtml');
};

$arguments23 = [
'value' => NULL,
];

$output12 .= isset($arguments23['value']) ? $arguments23['value'] : $renderChildrenClosure24();

$output12 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('clipboardHtml');
};

$arguments25 = [
'value' => NULL,
];

$output12 .= isset($arguments25['value']) ? $arguments25['value'] : $renderChildrenClosure26();

$output12 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('additionalContentBottom');
};

$arguments27 = [
'value' => NULL,
];

$output12 .= isset($arguments27['value']) ? $arguments27['value'] : $renderChildrenClosure28();

$output12 .= '
';

    return $output12;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output29 = '';

$output29 .= '

';

$output29 .= '';

$output29 .= '

';

$output29 .= '';

$output29 .= '

';

$output29 .= '';

$output29 .= '


';

    return $output29;
}

}

#