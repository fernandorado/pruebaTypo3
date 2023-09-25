<?php
class partial_ConstantEditorFields_247841fb0628709225db64ede3f1884bba92fd5d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

<form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments1 = [
'route' => 'web_typoscript_constanteditor',
'parameters' => $array3,
'referenceType' => 'absolute',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '" method="post" id="TypoScriptConstantEditorController">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output6 = '';

$output6 .= '
        <h2>';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainCategory.label')]);

$output6 .= '</h2>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '
            <fieldset class="form-section">
                <div class="form-group">
                    <label class="form-label t3js-formengine-label">
                        <span>';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.label')]);

$output9 .= '</span>
                        <code>[';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output9 .= ']</code>
                    </label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.description'),
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output13 = '';

$output13 .= '<p>';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.description')]);

$output13 .= '</p>';
return $output13;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, static fn() => '', $renderingContext)
;

$output9 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array15 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.typeHint'),
];

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments14 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '<span class="text-body-secondary">';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.typeHint')]);

$output17 .= '</span>';
return $output17;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, static fn() => '', $renderingContext)
;

$output9 .= '
                    <input
                        type="hidden"
                        name="check[';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output9 .= ']"
                        id="check-';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output9 .= '"
                        value="checked"
                        checked
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array19 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('constantItem.isInCurrentTemplate'),
];

$expression20 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments18 = [
'then' => 'disabled',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression20(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)),
    $renderingContext
),
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, static fn() => '', $renderingContext)
;

$output9 .= '
                    >
                    <div class="input-group userTS" id="userTS-';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output9 .= '" style="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.isInCurrentTemplate'),
];

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments21 = [
'then' => NULL,
'else' => 'display:none;',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return NULL;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, static fn() => '', $renderingContext)
;

$output9 .= '">
                        <button
                            type="button"
                            class="btn btn-default t3js-toggle"
                            data-bs-toggle="undo"
                            rel="';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output9 .= '"
                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.deleteTitle',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output9 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'identifier' => 'actions-edit-undo',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output9 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output9 .= '
                        </button>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output73 = '';

$output73 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
$output76 = '';

$output76 .= '
                                <input
                                    class="form-control"
                                    id="';

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output76 .= '"
                                    type="number"
                                    name="data[';

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output76 .= ']"
                                    value="';

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.value')]);

$output76 .= '"
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output78 = '';

$output78 .= 'min="';

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.typeIntPlusMin')]);

$output78 .= '"';

$array79 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.typeIntPlusMin'),
'1' => ' || ',
'2' => '{constantItem.typeIntPlusMin == 0}',
];

$expression80 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || ("{constantItem.typeIntPlusMin" == "0}"));};

$arguments77 = [
'then' => $output78,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression80(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)),
    $renderingContext
),
];

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, static fn() => '', $renderingContext)
;

$output76 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output82 = '';

$output82 .= 'max="';

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.typeIntPlusMax')]);

$output82 .= '"';

$array83 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.typeIntPlusMax'),
];

$expression84 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments81 = [
'then' => $output82,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression84(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)),
    $renderingContext
),
];

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, static fn() => '', $renderingContext)
;

$output76 .= '
                                >
                            ';
return $output76;
};

$arguments74 = [
'value' => 'int+',
];

$output73 .= '';

$output73 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
$output87 = '';

$output87 .= '
                                <input
                                    class="form-control"
                                    id="';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output87 .= '"
                                    type="number"
                                    name="data[';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output87 .= ']"
                                    value="';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.value')]);

$output87 .= '"
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output89 = '';

$output89 .= 'min="';

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.typeIntMin')]);

$output89 .= '"';

$array90 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.typeIntMin'),
'1' => ' || ',
'2' => '{constantItem.typeIntMin == 0}',
];

$expression91 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || ("{constantItem.typeIntMin" == "0}"));};

$arguments88 = [
'then' => $output89,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression91(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)),
    $renderingContext
),
];

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, static fn() => '', $renderingContext)
;

$output87 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output93 = '';

$output93 .= 'max="';

$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.typeIntMax')]);

$output93 .= '"';

$array94 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.typeIntMax'),
'1' => ' || ',
'2' => '{constantItem.typeIntMax == 0}',
];

$expression95 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || ("{constantItem.typeIntMax" == "0}"));};

$arguments92 = [
'then' => $output93,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression95(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)),
    $renderingContext
),
];

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, static fn() => '', $renderingContext)
;

$output87 .= '
                                >
                            ';
return $output87;
};

$arguments85 = [
'value' => 'int',
];

$output73 .= '';

$output73 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure97 = function() use ($renderingContext) {
$output98 = '';

$output98 .= '
                                <input
                                    class="form-control"
                                    id="';

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output98 .= '"
                                    type="text"
                                    name="data[';

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output98 .= ']"
                                    value="';

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.value')]);

$output98 .= '"
                                />
                            ';
return $output98;
};

$arguments96 = [
'value' => 'string',
];

$output73 .= '';

$output73 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
$output101 = '';

$output101 .= '
                                <input
                                    class="form-control t3js-color-input"
                                    type="text"
                                    id="';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output101 .= '"
                                    rel="';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output101 .= '"
                                    name="data[';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output101 .= ']"
                                    value="';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.value')]);

$output101 .= '"
                                />
                            ';
return $output101;
};

$arguments99 = [
'value' => 'color',
];

$output73 .= '';

$output73 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure103 = function() use ($renderingContext) {
$output104 = '';

$output104 .= '
                                <input
                                    class="form-control form-control-adapt"
                                    type="text"
                                    id="';

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output104 .= '"
                                    name="data[';

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output104 .= '][left]"
                                    value="';

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.wrapStart')]);

$output104 .= '"
                                />
                                <span class="input-group-addon input-group-icon">|</span>
                                <input
                                    class="form-control form-control-adapt"
                                    type="text"
                                    name="data[';

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output104 .= '][right]"
                                    value="';

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.wrapEnd')]);

$output104 .= '"
                                />
                            ';
return $output104;
};

$arguments102 = [
'value' => 'wrap',
];

$output73 .= '';

$output73 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
$output107 = '';

$output107 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure109 = function() use ($renderingContext) {
$output110 = '';

$output110 .= '
                                    <span class="input-group-addon input-group-icon">';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('labelAndValue.label')]);

$output110 .= '</span>
                                    <input
                                        type="text"
                                        class="form-control form-control-adapt"
                                        name="data[';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output110 .= '][';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.index')]);

$output110 .= ']"
                                        value="';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('labelAndValue.value')]);

$output110 .= '"
                                    />
                                ';
return $output110;
};

$arguments108 = [
'each' => $renderingContext->getVariableProvider()->getByPath('constantItem.labelValueArray'),
'as' => 'labelAndValue',
'key' => NULL,
'reverse' => false,
'iteration' => 'iterator',
];

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
                            ';
return $output107;
};

$arguments105 = [
'value' => 'offset',
];

$output73 .= '';

$output73 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
$output113 = '';

$output113 .= '
                                <select
                                    class="form-select"
                                    id="';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output113 .= '"
                                    name="data[';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output113 .= ']"
                                >
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure115 = function() use ($renderingContext) {
$output116 = '';

$output116 .= '
                                        <option value="';

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('labelAndValue.value')]);

$output116 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array118 = [
'0' => $renderingContext->getVariableProvider()->getByPath('labelAndValue.selected'),
];

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments117 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression119(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)),
    $renderingContext
),
];

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, static fn() => '', $renderingContext)
;

$output116 .= '>
                                        ';

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('labelAndValue.label')]);

$output116 .= '
                                        </option>
                                    ';
return $output116;
};

$arguments114 = [
'each' => $renderingContext->getVariableProvider()->getByPath('constantItem.labelValueArray'),
'as' => 'labelAndValue',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output113 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
                                </select>
                            ';
return $output113;
};

$arguments111 = [
'value' => 'options',
];

$output73 .= '';

$output73 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure121 = function() use ($renderingContext) {
$output122 = '';

$output122 .= '
                                <input
                                    type="hidden"
                                    name="data[';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output122 .= ']"
                                    value="0"
                                />
                                <div class="input-group-text">
                                    <div class="form-check form-check-type-toggle">
                                        <input
                                            type="checkbox"
                                            name="data[';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output122 .= ']"
                                            id="';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output122 .= '"
                                            class="form-check-input"
                                            value="';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.trueValue')]);

$output122 .= '"
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array124 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.value'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('constantItem.trueValue'),
];

$expression125 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments123 = [
'then' => 'checked',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression125(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)),
    $renderingContext
),
];

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, static fn() => '', $renderingContext)
;

$output122 .= '
                                        />
                                    </div>
                                </div>
                            ';
return $output122;
};

$arguments120 = [
'value' => 'boolean',
];

$output73 .= '';

$output73 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure127 = function() use ($renderingContext) {
$output128 = '';

$output128 .= '
                                <input
                                    type="hidden"
                                    name="data[';

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output128 .= ']"
                                    value="0"
                                />
                                <div class="input-group-text">
                                    <div class="form-check form-check-type-toggle">
                                        <input
                                            type="checkbox"
                                            name="data[';

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output128 .= ']"
                                            id="';

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output128 .= '"
                                            class="form-check-input mt-0"
                                            value="1"
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array130 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('constantItem.value'),
];

$expression131 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments129 = [
'then' => 'checked',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression131(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)),
    $renderingContext
),
];

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, static fn() => '', $renderingContext)
;

$output128 .= '
                                        />
                                    </div>
                                </div>
                            ';
return $output128;
};

$arguments126 = [
'value' => 'comment',
];

$output73 .= '';

$output73 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure133 = function() use ($renderingContext) {
$output134 = '';

$output134 .= '
                                <input
                                    type="hidden"
                                    name="data[';

$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output134 .= ']"
                                    value="0"
                                />
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure136 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('constantItem.html');
};

$arguments135 = [
'value' => NULL,
];

$output134 .= isset($arguments135['value']) ? $arguments135['value'] : $renderChildrenClosure136();

$output134 .= '
                            ';
return $output134;
};

$arguments132 = [
'value' => 'user',
];

$output73 .= '';

$output73 .= '
                        ';
return $output73;
};

$arguments28 = [
'expression' => $renderingContext->getVariableProvider()->getByPath('constantItem.type'),
];

$output9 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 'int+';
}): return call_user_func(function() use ($renderingContext) {
$output30 = '';

$output30 .= '
                                <input
                                    class="form-control"
                                    id="';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output30 .= '"
                                    type="number"
                                    name="data[';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output30 .= ']"
                                    value="';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.value')]);

$output30 .= '"
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output32 = '';

$output32 .= 'min="';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.typeIntPlusMin')]);

$output32 .= '"';

$array33 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.typeIntPlusMin'),
'1' => ' || ',
'2' => '{constantItem.typeIntPlusMin == 0}',
];

$expression34 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || ("{constantItem.typeIntPlusMin" == "0}"));};

$arguments31 = [
'then' => $output32,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression34(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)),
    $renderingContext
),
];

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, static fn() => '', $renderingContext)
;

$output30 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output36 = '';

$output36 .= 'max="';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.typeIntPlusMax')]);

$output36 .= '"';

$array37 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.typeIntPlusMax'),
];

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments35 = [
'then' => $output36,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression38(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)),
    $renderingContext
),
];

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, static fn() => '', $renderingContext)
;

$output30 .= '
                                >
                            ';
return $output30;
});
case call_user_func(function() use ($renderingContext) {

return 'int';
}): return call_user_func(function() use ($renderingContext) {
$output39 = '';

$output39 .= '
                                <input
                                    class="form-control"
                                    id="';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output39 .= '"
                                    type="number"
                                    name="data[';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output39 .= ']"
                                    value="';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.value')]);

$output39 .= '"
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output41 = '';

$output41 .= 'min="';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.typeIntMin')]);

$output41 .= '"';

$array42 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.typeIntMin'),
'1' => ' || ',
'2' => '{constantItem.typeIntMin == 0}',
];

$expression43 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || ("{constantItem.typeIntMin" == "0}"));};

$arguments40 = [
'then' => $output41,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression43(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)),
    $renderingContext
),
];

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, static fn() => '', $renderingContext)
;

$output39 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output45 = '';

$output45 .= 'max="';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.typeIntMax')]);

$output45 .= '"';

$array46 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.typeIntMax'),
'1' => ' || ',
'2' => '{constantItem.typeIntMax == 0}',
];

$expression47 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || ("{constantItem.typeIntMax" == "0}"));};

$arguments44 = [
'then' => $output45,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression47(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)),
    $renderingContext
),
];

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, static fn() => '', $renderingContext)
;

$output39 .= '
                                >
                            ';
return $output39;
});
case call_user_func(function() use ($renderingContext) {

return 'string';
}): return call_user_func(function() use ($renderingContext) {
$output48 = '';

$output48 .= '
                                <input
                                    class="form-control"
                                    id="';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output48 .= '"
                                    type="text"
                                    name="data[';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output48 .= ']"
                                    value="';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.value')]);

$output48 .= '"
                                />
                            ';
return $output48;
});
case call_user_func(function() use ($renderingContext) {

return 'color';
}): return call_user_func(function() use ($renderingContext) {
$output49 = '';

$output49 .= '
                                <input
                                    class="form-control t3js-color-input"
                                    type="text"
                                    id="';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output49 .= '"
                                    rel="';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output49 .= '"
                                    name="data[';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output49 .= ']"
                                    value="';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.value')]);

$output49 .= '"
                                />
                            ';
return $output49;
});
case call_user_func(function() use ($renderingContext) {

return 'wrap';
}): return call_user_func(function() use ($renderingContext) {
$output50 = '';

$output50 .= '
                                <input
                                    class="form-control form-control-adapt"
                                    type="text"
                                    id="';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output50 .= '"
                                    name="data[';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output50 .= '][left]"
                                    value="';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.wrapStart')]);

$output50 .= '"
                                />
                                <span class="input-group-addon input-group-icon">|</span>
                                <input
                                    class="form-control form-control-adapt"
                                    type="text"
                                    name="data[';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output50 .= '][right]"
                                    value="';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.wrapEnd')]);

$output50 .= '"
                                />
                            ';
return $output50;
});
case call_user_func(function() use ($renderingContext) {

return 'offset';
}): return call_user_func(function() use ($renderingContext) {
$output51 = '';

$output51 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
$output54 = '';

$output54 .= '
                                    <span class="input-group-addon input-group-icon">';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('labelAndValue.label')]);

$output54 .= '</span>
                                    <input
                                        type="text"
                                        class="form-control form-control-adapt"
                                        name="data[';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output54 .= '][';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.index')]);

$output54 .= ']"
                                        value="';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('labelAndValue.value')]);

$output54 .= '"
                                    />
                                ';
return $output54;
};

$arguments52 = [
'each' => $renderingContext->getVariableProvider()->getByPath('constantItem.labelValueArray'),
'as' => 'labelAndValue',
'key' => NULL,
'reverse' => false,
'iteration' => 'iterator',
];

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
                            ';
return $output51;
});
case call_user_func(function() use ($renderingContext) {

return 'options';
}): return call_user_func(function() use ($renderingContext) {
$output55 = '';

$output55 .= '
                                <select
                                    class="form-select"
                                    id="';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output55 .= '"
                                    name="data[';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output55 .= ']"
                                >
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
$output58 = '';

$output58 .= '
                                        <option value="';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('labelAndValue.value')]);

$output58 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array60 = [
'0' => $renderingContext->getVariableProvider()->getByPath('labelAndValue.selected'),
];

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments59 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression61(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)),
    $renderingContext
),
];

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, static fn() => '', $renderingContext)
;

$output58 .= '>
                                        ';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('labelAndValue.label')]);

$output58 .= '
                                        </option>
                                    ';
return $output58;
};

$arguments56 = [
'each' => $renderingContext->getVariableProvider()->getByPath('constantItem.labelValueArray'),
'as' => 'labelAndValue',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                                </select>
                            ';
return $output55;
});
case call_user_func(function() use ($renderingContext) {

return 'boolean';
}): return call_user_func(function() use ($renderingContext) {
$output62 = '';

$output62 .= '
                                <input
                                    type="hidden"
                                    name="data[';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output62 .= ']"
                                    value="0"
                                />
                                <div class="input-group-text">
                                    <div class="form-check form-check-type-toggle">
                                        <input
                                            type="checkbox"
                                            name="data[';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output62 .= ']"
                                            id="';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output62 .= '"
                                            class="form-check-input"
                                            value="';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.trueValue')]);

$output62 .= '"
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array64 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.value'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('constantItem.trueValue'),
];

$expression65 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments63 = [
'then' => 'checked',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression65(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)),
    $renderingContext
),
];

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, static fn() => '', $renderingContext)
;

$output62 .= '
                                        />
                                    </div>
                                </div>
                            ';
return $output62;
});
case call_user_func(function() use ($renderingContext) {

return 'comment';
}): return call_user_func(function() use ($renderingContext) {
$output66 = '';

$output66 .= '
                                <input
                                    type="hidden"
                                    name="data[';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output66 .= ']"
                                    value="0"
                                />
                                <div class="input-group-text">
                                    <div class="form-check form-check-type-toggle">
                                        <input
                                            type="checkbox"
                                            name="data[';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output66 .= ']"
                                            id="';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output66 .= '"
                                            class="form-check-input mt-0"
                                            value="1"
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array68 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('constantItem.value'),
];

$expression69 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments67 = [
'then' => 'checked',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression69(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)),
    $renderingContext
),
];

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, static fn() => '', $renderingContext)
;

$output66 .= '
                                        />
                                    </div>
                                </div>
                            ';
return $output66;
});
case call_user_func(function() use ($renderingContext) {

return 'user';
}): return call_user_func(function() use ($renderingContext) {
$output70 = '';

$output70 .= '
                                <input
                                    type="hidden"
                                    name="data[';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.name')]);

$output70 .= ']"
                                    value="0"
                                />
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('constantItem.html');
};

$arguments71 = [
'value' => NULL,
];

$output70 .= isset($arguments71['value']) ? $arguments71['value'] : $renderChildrenClosure72();

$output70 .= '
                            ';
return $output70;
});
default:
return '';
}
}, array($arguments28));

$output9 .= '
                    </div>
                    <div class="input-group defaultTS" id="defaultTS-';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output9 .= '" style="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array138 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantItem.isInCurrentTemplate'),
];

$expression139 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments137 = [
'then' => 'display:none;',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression139(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)),
    $renderingContext
),
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments137, static fn() => '', $renderingContext)
;

$output9 .= '">
                        <button type="button" class="btn btn-default t3js-toggle" data-bs-toggle="edit" rel="';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.idName')]);

$output9 .= '">
                            <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure141 = function() use ($renderingContext) {
return NULL;
};

$arguments140 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.editTitle',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext)]);

$output9 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure143 = function() use ($renderingContext) {
return NULL;
};

$arguments142 = [
'identifier' => 'actions-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output9 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output9 .= '
                            </span>
                        </button>
                        <input class="form-control" type="number" placeholder="';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constantItem.default_value')]);

$output9 .= '" disabled readonly>
                    </div>
                </div>
            </fieldset>
        ';
return $output9;
};

$arguments7 = [
'each' => $renderingContext->getVariableProvider()->getByPath('mainCategory.items'),
'as' => 'constantItem',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
    ';
return $output6;
};

$arguments4 = [
'each' => $renderingContext->getVariableProvider()->getByPath('displayConstants'),
'as' => 'mainCategory',
'key' => 'mainCategoryKey',
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
</form>


';

    return $output0;
}

}

#