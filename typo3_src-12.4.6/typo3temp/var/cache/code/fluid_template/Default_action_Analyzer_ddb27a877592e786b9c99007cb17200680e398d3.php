<?php
class Default_action_Analyzer_ddb27a877592e786b9c99007cb17200680e398d3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
'0' => '@typo3/backend/context-menu.js',
'1' => '@typo3/backend/element/immediate-action-element.js',
'2' => '@typo3/tstemplate/template-analyzer.js',
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
'1' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments4 = [
'value' => $array6,
'name' => 'args',
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
return $renderingContext->getVariableProvider()->getByPath('args');
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

    <h1>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array14 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateTitle'),
];

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments13 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression15(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output16 = '';

$output16 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$array19 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateTitle'),
];

$arguments17 = [
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_analyzer.xlf:submodule.titleWithRecord',
'id' => NULL,
'default' => NULL,
'arguments' => $array19,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '
            ';
return $output16;
},
'__else' => function() use ($renderingContext) {
$output20 = '';

$output20 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_analyzer.xlf:submodule.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output20 .= '
            ';
return $output20;
},
];

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, static fn() => '', $renderingContext)
;

$output12 .= '
    </h1>
    <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$arguments23 = [
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_analyzer.xlf:submodule.description',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output12 .= '</p>

    ';

$output12 .= '';

$output12 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$array27 = [
'allTemplatesOnPage' => $renderingContext->getVariableProvider()->getByPath('allTemplatesOnPage'),
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
'selectedTemplateUid' => $renderingContext->getVariableProvider()->getByPath('selectedTemplateUid'),
];

$arguments25 = [
'section' => NULL,
'partial' => 'AnalyzerOptions',
'delegate' => NULL,
'arguments' => $array27,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output12 .= '

    ';

$output12 .= '';

$output12 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array29 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constantIncludeTree.children'),
];

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments28 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output31 = '';

$output31 .= '
        <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_analyzer.xlf:sectionHeadline.constants',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output31 .= '</h2>
        <div class="panel-group">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$array36 = [
'type' => 'constants',
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
'errors' => $renderingContext->getVariableProvider()->getByPath('constantErrors'),
'errorCount' => $renderingContext->getVariableProvider()->getByPath('constantErrorCount'),
];

$arguments34 = [
'section' => NULL,
'partial' => 'AnalyzerSyntaxErrors',
'delegate' => NULL,
'arguments' => $array36,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output31 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$array39 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
'type' => 'constants',
'conditions' => $renderingContext->getVariableProvider()->getByPath('constantConditions'),
'conditionActiveCount' => $renderingContext->getVariableProvider()->getByPath('constantConditionsActiveCount'),
];

$arguments37 = [
'section' => NULL,
'partial' => 'AnalyzerConditions',
'delegate' => NULL,
'arguments' => $array39,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output31 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$array42 = [
'type' => 'constants',
'tree' => $renderingContext->getVariableProvider()->getByPath('constantIncludeTree'),
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments40 = [
'section' => NULL,
'partial' => 'AnalyzerTreePanel',
'delegate' => NULL,
'arguments' => $array42,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output31 .= '
        </div>
    ';
return $output31;
},
];

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, static fn() => '', $renderingContext)
;

$output12 .= '

    ';

$output12 .= '';

$output12 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array44 = [
'0' => $renderingContext->getVariableProvider()->getByPath('setupIncludeTree.children'),
];

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments43 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression45(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output46 = '';

$output46 .= '
        <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$arguments47 = [
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_analyzer.xlf:sectionHeadline.setup',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output46 .= '</h2>
        <div class="panel-group">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return NULL;
};

$array51 = [
'type' => 'setup',
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
'errors' => $renderingContext->getVariableProvider()->getByPath('setupErrors'),
'errorCount' => $renderingContext->getVariableProvider()->getByPath('setupErrorCount'),
];

$arguments49 = [
'section' => NULL,
'partial' => 'AnalyzerSyntaxErrors',
'delegate' => NULL,
'arguments' => $array51,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output46 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};

$array54 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
'type' => 'setup',
'conditions' => $renderingContext->getVariableProvider()->getByPath('setupConditions'),
'conditionActiveCount' => $renderingContext->getVariableProvider()->getByPath('setupConditionsActiveCount'),
];

$arguments52 = [
'section' => NULL,
'partial' => 'AnalyzerConditions',
'delegate' => NULL,
'arguments' => $array54,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output46 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};

$array57 = [
'type' => 'setup',
'tree' => $renderingContext->getVariableProvider()->getByPath('setupIncludeTree'),
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments55 = [
'section' => NULL,
'partial' => 'AnalyzerTreePanel',
'delegate' => NULL,
'arguments' => $array57,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output46 .= '
        </div>
    ';
return $output46;
},
];

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, static fn() => '', $renderingContext)
;

$output12 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array59 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('constantIncludeTree.children'),
'2' => ' && !',
'3' => $renderingContext->getVariableProvider()->getByPath('setupIncludeTree.children'),
];

$expression60 = function($context) {return (!(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"])) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"])));};

$arguments58 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression60(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output61 = '';

$output61 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return NULL;
};

$arguments64 = [
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_analyzer.xlf:infobox.message.noTypoScriptFound',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments62 = [
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]),
'title' => NULL,
'state' => -1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure63 = ($arguments62['message'] !== null) ? function() use ($arguments62) { return $arguments62['message']; } : $renderChildrenClosure63;
$output61 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
    ';
return $output61;
},
];

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, static fn() => '', $renderingContext)
;

$output12 .= '
';

    return $output12;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output66 = '';

$output66 .= '

';

$output66 .= '';

$output66 .= '

';

$output66 .= '';

$output66 .= '

';

$output66 .= '';

$output66 .= '


';

    return $output66;
}

}

#