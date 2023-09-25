<?php
class Default_action_SiteConfiguration_Overview_b4ac2f162a08493ac72820851ee076515a142edf extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
    }
    /**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/backend/modal.js',
'1' => '@typo3/backend/context-menu.js',
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

    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '</h1>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array7 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pages'),
];

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments6 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression8(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output9 = '';

$output9 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('duplicatedRootPages'),
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

$output13 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '
                    <ul>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
$output21 = '';

$output21 .= '
                            <li>
                                <strong>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$array24 = [
'0' => $renderingContext->getVariableProvider()->getByPath('rootPage'),
];

$arguments22 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedRootPage.message',
'id' => NULL,
'default' => NULL,
'arguments' => $array24,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output21 .= '
                                </strong>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array26 = [
'0' => $renderingContext->getVariableProvider()->getByPath('duplicateSites'),
];

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments25 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression27(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output28 = '';

$output28 .= '
                                    <ul>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
$output31 = '';

$output31 .= '
                                            <li>';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('duplicateSite')]);

$output31 .= '</li>
                                        ';
return $output31;
};

$arguments29 = [
'each' => $renderingContext->getVariableProvider()->getByPath('duplicateSites'),
'as' => 'duplicateSite',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
                                    </ul>
                                ';
return $output28;
},
];

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, static fn() => '', $renderingContext)
;

$output21 .= '
                            </li>
                        ';
return $output21;
};

$arguments19 = [
'each' => $renderingContext->getVariableProvider()->getByPath('duplicatedRootPages'),
'as' => 'duplicateSites',
'key' => 'rootPage',
'reverse' => false,
'iteration' => NULL,
];

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
                    </ul>
                ';
return $output18;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedRootPage',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments14 = [
'message' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext),
'state' => 1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure15 = ($arguments14['message'] !== null) ? function() use ($arguments14) { return $arguments14['message']; } : $renderChildrenClosure15;
$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
            ';
return $output13;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, static fn() => '', $renderingContext)
;

$output9 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array33 = [
'0' => $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints'),
];

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments32 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression34(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output35 = '';

$output35 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
$output40 = '';

$output40 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};

$arguments41 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints.listing',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output40 .= '
                    <ul>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
$output45 = '';

$output45 .= '
                        <li>
                            <strong>';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item')]);

$output45 .= '</strong>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array47 = [
'0' => $renderingContext->getVariableProvider()->getByPath('schemes'),
];

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments46 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression48(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output49 = '';

$output49 .= '
                                <ul>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
$output52 = '';

$output52 .= '
                                        <li>';

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('schema')]);

$output52 .= ' (';

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count')]);

$output52 .= ')</li>
                                    ';
return $output52;
};

$arguments50 = [
'each' => $renderingContext->getVariableProvider()->getByPath('schemes'),
'as' => 'count',
'key' => 'schema',
'reverse' => false,
'iteration' => NULL,
];

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
                                </ul>
                            ';
return $output49;
},
];

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, static fn() => '', $renderingContext)
;

$output45 .= '
                        </li>
                    ';
return $output45;
};

$arguments43 = [
'each' => $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints'),
'as' => 'schemes',
'key' => 'item',
'reverse' => false,
'iteration' => NULL,
];

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output40 .= '
                    </ul>
                ';
return $output40;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments36 = [
'message' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext),
'state' => 1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure37 = ($arguments36['message'] !== null) ? function() use ($arguments36) { return $arguments36['message']; } : $renderChildrenClosure37;
$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
            ';
return $output35;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, static fn() => '', $renderingContext)
;

$output9 .= '

            <div class="table-fit">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th colspan="2" class="nowrap align-top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.site',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output9 .= '</th>
                            <th class="align-top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};

$arguments55 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.siteIdentifier',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output9 .= '</th>
                            <th class="align-top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site_language.language',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output9 .= '</th>
                            <th class="align-top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};

$arguments59 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.baseUrl',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output9 .= '</th>
                            <th class="align-top">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
$output63 = '';

$output63 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return NULL;
};

$arguments64 = [
'value' => $renderingContext->getVariableProvider()->getByPath('page'),
'name' => 'rootPage',
];
$renderChildrenClosure65 = ($arguments64['value'] !== null) ? function() use ($arguments64) { return $arguments64['value']; } : $renderChildrenClosure65;
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output63 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
$output68 = '';

$output68 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array70 = [
'0' => $renderingContext->getVariableProvider()->getByPath('rootLinePage.uid'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('page.uid'),
];

$expression71 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments69 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression71(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output72 = '';

$output72 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return NULL;
};

$arguments73 = [
'value' => $renderingContext->getVariableProvider()->getByPath('rootLinePage'),
'name' => 'rootPage',
];
$renderChildrenClosure74 = ($arguments73['value'] !== null) ? function() use ($arguments73) { return $arguments73['value']; } : $renderChildrenClosure74;
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output72 .= '
                                ';
return $output72;
},
];

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, static fn() => '', $renderingContext)
;

$output68 .= '
                            ';
return $output68;
};

$arguments66 = [
'each' => $renderingContext->getVariableProvider()->getByPath('page.rootline'),
'as' => 'rootLinePage',
'key' => NULL,
'reverse' => false,
'iteration' => 'rootLinePageIterator',
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output63 .= '
                            <tr>
                                <td class="col-icon align-top">
                                    <a href="#"
                                        data-contextmenu-trigger="click"
                                        data-contextmenu-table="pages"
                                        data-contextmenu-uid="';

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootPage.uid')]);

$output63 .= '">
                                        <span style="margin-left: ';

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.margin')]);

$output63 .= 'px">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
return NULL;
};

$arguments75 = [
'table' => 'pages',
'row' => $renderingContext->getVariableProvider()->getByPath('rootPage'),
'size' => 'small',
'alternativeMarkupIdentifier' => NULL,
];

$output63 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output63 .= '
                                        </span>
                                    </a>
                                </td>
                                <td class="align-top">
                                    ';

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootPage.title')]);

$output63 .= '
                                </td>
                                <td class="align-top">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array78 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments77 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression79(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output80 = '';

$output80 .= '
                                            <code>';

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output80 .= '</code>
                                        ';
return $output80;
},
'__else' => function() use ($renderingContext) {
$output81 = '';

$output81 .= '
                                            <div>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
$output85 = '';

$output85 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
return NULL;
};

$arguments86 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output85 .= '
                                                ';
return $output85;
};

$array84 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('page.uid'),
];

$arguments82 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'route' => 'site_configuration.edit',
'parameters' => $array84,
'referenceType' => 'absolute',
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'class' => 'btn btn-primary',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => 'Create configuration',
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                                            </div>
                                        ';
return $output81;
},
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, static fn() => '', $renderingContext)
;

$output63 .= '
                                </td>
                                <td class="align-top">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array89 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration'),
];

$expression90 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments88 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression90(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output91 = '';

$output91 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure93 = function() use ($renderingContext) {
$output94 = '';

$output94 .= '
                                            <div class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array96 = [
'0' => $renderingContext->getVariableProvider()->getByPath('siteLanguageIterator.isLast'),
];

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments95 = [
'then' => '',
'else' => 'mb-2',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression97(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)),
    $renderingContext
),
];

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, static fn() => '', $renderingContext)
;

$output94 .= '">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array99 = [
'0' => $renderingContext->getVariableProvider()->getByPath('siteLanguage.enabled'),
];

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments98 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression100(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output101 = '';

$output101 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure103 = function() use ($renderingContext) {
return NULL;
};

$arguments102 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier'),
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output101 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= ' ';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title')]);

$output101 .= ' <code class="m-0">[';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId')]);

$output101 .= ']</code>
                                                    ';
return $output101;
},
'__else' => function() use ($renderingContext) {
$output104 = '';

$output104 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
return NULL;
};

$arguments105 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier'),
'size' => 'small',
'overlay' => 'overlay-hidden',
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output104 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
                                                        <span class="text-body-secondary">';

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title')]);

$output104 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return 'disabled';
};

$arguments107 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output104 .= ') <code class="m-0">[';

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId')]);

$output104 .= ']</code></span>
                                                    ';
return $output104;
},
];

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, static fn() => '', $renderingContext)
;

$output94 .= '
                                            </div>
                                        ';
return $output94;
};

$arguments92 = [
'each' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.allLanguages'),
'as' => 'siteLanguage',
'key' => NULL,
'reverse' => false,
'iteration' => 'siteLanguageIterator',
];

$output91 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
                                    ';
return $output91;
},
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, static fn() => '', $renderingContext)
;

$output63 .= '
                                </td>
                                <td class="align-top">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array110 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration'),
];

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments109 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression111(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output112 = '';

$output112 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
$output115 = '';

$output115 .= '
                                            <div class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array117 = [
'0' => $renderingContext->getVariableProvider()->getByPath('siteLanguageIterator.isLast'),
];

$expression118 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments116 = [
'then' => '',
'else' => 'mb-2',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression118(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)),
    $renderingContext
),
];

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, static fn() => '', $renderingContext)
;

$output115 .= '">
                                                <a href="';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base')]);

$output115 .= '" target="_blank">';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base')]);

$output115 .= '</a>
                                            </div>
                                        ';
return $output115;
};

$arguments113 = [
'each' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.allLanguages'),
'as' => 'siteLanguage',
'key' => NULL,
'reverse' => false,
'iteration' => 'siteLanguageIterator',
];

$output112 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
                                    ';
return $output112;
},
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, static fn() => '', $renderingContext)
;

$output63 .= '
                                </td>
                                <td class="align-top nowrap col-control">
                                    <div class="btn-group">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array120 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];

$expression121 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments119 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression121(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output122 = '';

$output122 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure124 = function() use ($renderingContext) {
$output128 = '';

$output128 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
return NULL;
};

$arguments129 = [
'identifier' => 'actions-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output128 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
                                            ';
return $output128;
};

$array125 = [
'site' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext) {
return NULL;
};

$arguments126 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments123 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'route' => 'site_configuration.edit',
'parameters' => $array125,
'referenceType' => 'absolute',
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '
                                            <button
                                                type="submit"
                                                class="btn btn-default t3js-modal-trigger"
                                                data-target-form="site_configuration_delete_';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output122 .= '"
                                                title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext) {
return NULL;
};

$arguments131 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output122 .= '"
                                                data-severity="error"
                                                data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext) {
return NULL;
};

$arguments133 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output122 .= '"
                                                data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure136 = function() use ($renderingContext) {
return NULL;
};

$arguments135 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext)]);

$output122 .= '"
                                                data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext) {
return NULL;
};

$arguments137 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output122 .= '"
                                            >
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure140 = function() use ($renderingContext) {
return NULL;
};

$arguments139 = [
'identifier' => 'actions-delete',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output122 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output122 .= '
                                            </button>
                                            <form action="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure142 = function() use ($renderingContext) {
return NULL;
};

$arguments141 = [
'route' => 'site_configuration.delete',
'arguments' => [],
'query' => NULL,
'currentUrlParameterName' => NULL,
];

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output122 .= '" name="site_configuration_delete_';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output122 .= '" id="site_configuration_delete_';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output122 .= '" method="post">
                                                <input name="site" type="hidden" value="';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output122 .= '">
                                            </form>
                                        ';
return $output122;
},
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments119, static fn() => '', $renderingContext)
;

$output63 .= '
                                    </div>
                                </td>
                            </tr>
                        ';
return $output63;
};

$arguments61 = [
'each' => $renderingContext->getVariableProvider()->getByPath('pages'),
'as' => 'page',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output9 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output9;
},
'__else' => function() use ($renderingContext) {
$output143 = '';

$output143 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure145 = function() use ($renderingContext) {
$output148 = '';

$output148 .= '
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure150 = function() use ($renderingContext) {
return NULL;
};

$arguments149 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.message',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext)]);

$output148 .= '</p>
            ';
return $output148;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext) {
return NULL;
};

$arguments146 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments144 = [
'message' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext),
'state' => -1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure145 = ($arguments144['message'] !== null) ? function() use ($arguments144) { return $arguments144['message']; } : $renderChildrenClosure145;
$output143 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output143 .= '
        ';
return $output143;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, static fn() => '', $renderingContext)
;

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array152 = [
'0' => $renderingContext->getVariableProvider()->getByPath('unassignedSites'),
];

$expression153 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments151 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression153(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array152)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output154 = '';

$output154 .= '
        <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext) {
return NULL;
};

$arguments155 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.unassignedSites.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext)]);

$output154 .= '</h2>
        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure158 = function() use ($renderingContext) {
return NULL;
};

$arguments157 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.unassignedSites.description',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output154 .= '</p>

        <div class="table-fit">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure160 = function() use ($renderingContext) {
return NULL;
};

$arguments159 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.siteIdentifier',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output154 .= '</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure162 = function() use ($renderingContext) {
$output163 = '';

$output163 .= '
                        <tr>
                            <td><code>';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output163 .= '</code></td>
                            <td class="col-control">
                                <div class="btn-group">
                                    <button
                                        type="submit"
                                        class="btn btn-default t3js-modal-trigger"
                                        data-target-form="site_configuration_delete_';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output163 .= '"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure165 = function() use ($renderingContext) {
return NULL;
};

$arguments164 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext)]);

$output163 .= '"
                                        data-severity="error"
                                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext) {
return NULL;
};

$arguments166 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext)]);

$output163 .= '"
                                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure169 = function() use ($renderingContext) {
return NULL;
};

$arguments168 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext)]);

$output163 .= '"
                                        data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure171 = function() use ($renderingContext) {
return NULL;
};

$arguments170 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext)]);

$output163 .= '"
                                    >
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure173 = function() use ($renderingContext) {
return NULL;
};

$arguments172 = [
'identifier' => 'actions-delete',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output163 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output163 .= '
                                    </button>
                                    <form action="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure175 = function() use ($renderingContext) {
return NULL;
};

$arguments174 = [
'route' => 'site_configuration.delete',
'arguments' => [],
'query' => NULL,
'currentUrlParameterName' => NULL,
];

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output163 .= '" name="site_configuration_delete_';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output163 .= '" id="site_configuration_delete_';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output163 .= '" method="post">
                                        <input name="site" type="hidden" value="';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output163 .= '">
                                    </form>
                                </div>
                            </td>
                        </tr>
                    ';
return $output163;
};

$arguments161 = [
'each' => $renderingContext->getVariableProvider()->getByPath('unassignedSites'),
'as' => 'unassignedSite',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output154 .= '
                </tbody>
            </table>
        </div>
    ';
return $output154;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments151, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output176 = '';

$output176 .= '

';

$output176 .= '';

$output176 .= '

';

$output176 .= '';

$output176 .= '


';

    return $output176;
}

}

#