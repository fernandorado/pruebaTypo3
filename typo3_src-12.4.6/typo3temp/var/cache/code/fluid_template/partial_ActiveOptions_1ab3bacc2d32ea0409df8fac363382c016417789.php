<?php
class partial_ActiveOptions_1ab3bacc2d32ea0409df8fac363382c016417789 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

<div class="form-row-md align-items-md-end">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'subject' => $renderingContext->getVariableProvider()->getByPath('allTemplatesOnPage'),
];
$renderChildrenClosure4 = ($arguments3['subject'] !== null) ? function() use ($arguments3) { return $arguments3['subject']; } : $renderChildrenClosure4;
$array2 = [
'0' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext),
'1' => ' > 1',
];

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output6 = '';

$output6 .= '
        <div class="form-group">
            <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$array9 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments7 = [
'route' => 'typoscript_active',
'parameters' => $array9,
'referenceType' => 'absolute',
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '" method="post">
                <label class="form-label" for="selectedTemplate">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_active.xlf:options.selectedRecord',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output6 .= '
                </label>
                <select
                    name="selectedTemplate"
                    id="selectedTemplate"
                    class="form-select"
                    data-global-event="change"
                    data-action-navigate="$data=~s/$value/"
                    data-action-submit="$form"
                >
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output14 = '';

$output14 .= '
                        <option
                            value="';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid')]);

$output14 .= '"
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array16 = [
'0' => $renderingContext->getVariableProvider()->getByPath('selectedTemplateUid'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('template.uid'),
];

$expression17 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments15 = [
'then' => 'selected="selected"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression17(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
),
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, static fn() => '', $renderingContext)
;

$output14 .= '
                        >
                            ';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title')]);

$output14 .= '
                        </option>
                    ';
return $output14;
};

$arguments12 = [
'each' => $renderingContext->getVariableProvider()->getByPath('allTemplatesOnPage'),
'as' => 'template',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
                </select>
            </form>
        </div>
    ';
return $output6;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '
    <div class="form-group">
        <form action="#">
            <div class="input-group">
                <input
                    type="text"
                    class="form-control form-control-clearable t3js-collapse-search-term"
                    name="searchValue"
                    id="searchValue"
                    data-persist-collapse-search-key="collapse-search-term-typoscript-active"
                    value=""
                    minlength="3"
                    placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.enterSearchString',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output0 .= '"
                />
                <button type="submit" class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'identifier' => 'actions-search',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '</button>
            </div>
        </form>
    </div>
    <div class="form-group">
        <div class="form-row-md">
            <div class="form-group">
                <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$array24 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments22 = [
'route' => 'typoscript_active',
'parameters' => $array24,
'referenceType' => 'absolute',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output0 .= '" method="post">
                    <input type="hidden" name="displayConstantSubstitutions" value="0" />
                    <div class="form-check form-switch form-check-size-input">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            name="displayConstantSubstitutions"
                            id="displayConstantSubstitutions"
                            value="1"
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array26 = [
'0' => $renderingContext->getVariableProvider()->getByPath('displayConstantSubstitutions'),
];

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments25 = [
'then' => 'checked="checked"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression27(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)),
    $renderingContext
),
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, static fn() => '', $renderingContext)
;

$output0 .= '
                            data-global-event="change"
                            data-action-submit="$form"
                            data-value-selector="input[name=\'displayConstantSubstitutions\']"
                        />
                        <label class="form-check-label" for="displayConstantSubstitutions">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_active.xlf:options.displayConstantSubstitutions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output0 .= '
                        </label>
                    </div>
                </form>
            </div>
            <div class="form-group">
                <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$array32 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments30 = [
'route' => 'typoscript_active',
'parameters' => $array32,
'referenceType' => 'absolute',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output0 .= '" method="post">
                    <input type="hidden" name="displayComments" value="0" />
                    <div class="form-check form-switch form-check-size-input">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            name="displayComments"
                            id="displayComments"
                            value="1"
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array34 = [
'0' => $renderingContext->getVariableProvider()->getByPath('displayComments'),
];

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments33 = [
'then' => 'checked="checked"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression35(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)),
    $renderingContext
),
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, static fn() => '', $renderingContext)
;

$output0 .= '
                            data-global-event="change"
                            data-action-submit="$form"
                            data-value-selector="input[name=\'displayComments\']"
                        />
                        <label class="form-check-label" for="displayComments">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_active.xlf:options.displayComments',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output0 .= '
                        </label>
                    </div>
                </form>
            </div>
            <div class="form-group">
                <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$array40 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments38 = [
'route' => 'typoscript_active',
'parameters' => $array40,
'referenceType' => 'absolute',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output0 .= '" method="post">
                    <input type="hidden" name="sortAlphabetically" value="0" />
                    <div class="form-check form-switch form-check-size-input">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            name="sortAlphabetically"
                            id="sortAlphabetically"
                            value="1"
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array42 = [
'0' => $renderingContext->getVariableProvider()->getByPath('sortAlphabetically'),
];

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments41 = [
'then' => 'checked="checked"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression43(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)),
    $renderingContext
),
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, static fn() => '', $renderingContext)
;

$output0 .= '
                            data-global-event="change"
                            data-action-submit="$form"
                            data-value-selector="input[name=\'sortAlphabetically\']"
                        />
                        <label class="form-check-label" for="sortAlphabetically">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};

$arguments44 = [
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_active.xlf:options.sortAlphabetically',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output0 .= '
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


';

    return $output0;
}

}

#