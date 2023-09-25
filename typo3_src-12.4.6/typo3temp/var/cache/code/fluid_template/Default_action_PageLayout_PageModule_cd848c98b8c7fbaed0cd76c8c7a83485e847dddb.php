<?php
class Default_action_PageLayout_PageModule_cd848c98b8c7fbaed0cd76c8c7a83485e847dddb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
'0' => '@typo3/backend/clear-cache.js',
'1' => '@typo3/backend/new-content-element-wizard-button.js',
'2' => '@typo3/backend/context-menu.js',
'3' => '@typo3/backend/localization.js',
'4' => '@typo3/backend/layout-module/drag-drop.js',
'5' => '@typo3/backend/modal.js',
'6' => '@typo3/backend/element/editable-page-title.js',
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
'2' => 1,
];

$arguments4 = [
'value' => $array6,
'name' => 'immediateActionArgs',
];
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '
    <typo3-immediate-action
        action="TYPO3.Backend.Storage.ModuleStateStorage.updateWithCurrentMount"
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

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('localizedPageTitle')]);

$output12 .= '"
        pageId="';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageId')]);

$output12 .= '"
        localizedPageId="';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('localizedPageId')]);

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

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('localizedPageTitle')]);

$output12 .= '
    </typo3-backend-editable-page-title>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
$output17 = '';

$output17 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
$output20 = '';

$output20 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('infoBox.message');
};

$arguments21 = [
'value' => NULL,
];

$output20 .= isset($arguments21['value']) ? $arguments21['value'] : $renderChildrenClosure22();

$output20 .= '
        ';
return $output20;
};

$arguments18 = [
'message' => NULL,
'title' => NULL,
'state' => $renderingContext->getVariableProvider()->getByPath('infoBox.state'),
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure19 = ($arguments18['message'] !== null) ? function() use ($arguments18) { return $arguments18['message']; } : $renderChildrenClosure19;
$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
    ';
return $output17;
};

$arguments15 = [
'each' => $renderingContext->getVariableProvider()->getByPath('infoBoxes'),
'as' => 'infoBox',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output12 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('eventContentHtmlTop');
};

$arguments23 = [
'value' => NULL,
];

$output12 .= isset($arguments23['value']) ? $arguments23['value'] : $renderChildrenClosure24();

$output12 .= '

    <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$array27 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageId'),
];

$arguments25 = [
'route' => 'web_layout',
'parameters' => $array27,
'referenceType' => 'absolute',
];

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output12 .= '" id="PageLayoutController" method="post">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('mainContentHtml');
};

$arguments28 = [
'value' => NULL,
];

$output12 .= isset($arguments28['value']) ? $arguments28['value'] : $renderChildrenClosure29();

$output12 .= '
    </form>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array31 = [
'0' => $renderingContext->getVariableProvider()->getByPath('hiddenElementsShowToggle'),
];

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments30 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression32(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output33 = '';

$output33 .= '
        <div class="form-check form-switch">
            <input
                type="checkbox"
                id="checkShowHidden"
                class="form-check-input"
                name="showHidden"
                value="1"
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array35 = [
'0' => $renderingContext->getVariableProvider()->getByPath('hiddenElementsState'),
'1' => ' == 1',
];

$expression36 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments34 = [
'then' => 'checked="checked"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression36(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)),
    $renderingContext
),
];

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, static fn() => '', $renderingContext)
;

$output33 .= '
            />
            <label class="form-check-label" for="checkShowHidden">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$arguments37 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:hiddenCE',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output33 .= ' (';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('hiddenElementsCount')]);

$output33 .= ')
            </label>
        </div>
    ';
return $output33;
},
];

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, static fn() => '', $renderingContext)
;

$output12 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('eventContentHtmlBottom');
};

$arguments39 = [
'value' => NULL,
];

$output12 .= isset($arguments39['value']) ? $arguments39['value'] : $renderChildrenClosure40();

$output12 .= '

';

    return $output12;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output41 = '';

$output41 .= '

';

$output41 .= '';

$output41 .= '

';

$output41 .= '';

$output41 .= '

';

$output41 .= '';

$output41 .= '


';

    return $output41;
}

}

#