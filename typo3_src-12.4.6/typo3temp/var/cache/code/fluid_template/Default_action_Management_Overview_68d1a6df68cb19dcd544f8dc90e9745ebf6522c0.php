<?php
class Default_action_Management_Overview_68d1a6df68cb19dcd544f8dc90e9745ebf6522c0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'rd' => 
  array (
    0 => 'TYPO3\\CMS\\Redirects\\ViewHelpers',
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
'1' => '@typo3/redirects/redirects-module.js',
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
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:heading_text',
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$array10 = [
'action' => 'overview',
'page' => $renderingContext->getVariableProvider()->getByPath('pagination.current'),
'demand' => $renderingContext->getVariableProvider()->getByPath('demand.parameters'),
'orderField' => $renderingContext->getVariableProvider()->getByPath('demand.orderField'),
'orderDirection' => $renderingContext->getVariableProvider()->getByPath('demand.orderDirection'),
];

$arguments8 = [
'route' => 'site_redirects',
'parameters' => $array10,
'referenceType' => 'absolute',
];

$arguments6 = [
'value' => TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext),
'name' => 'returnUrl',
];
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('redirects');
};

$arguments13 = [
'subject' => NULL,
];
$renderChildrenClosure14 = ($arguments13['subject'] !== null) ? function() use ($arguments13) { return $arguments13['subject']; } : $renderChildrenClosure14;
$array12 = [
'0' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext),
];

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments11 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression15(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output16 = '';

$output16 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'section' => 'filter',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$arguments19 = [
'section' => 'table',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output16 .= '
        ';
return $output16;
},
'__else' => function() use ($renderingContext) {
$output21 = '';

$output21 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array23 = [
'0' => $renderingContext->getVariableProvider()->getByPath('demand.constraints'),
];

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments22 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression24(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output25 = '';

$output25 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'section' => 'filter',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output32 = '';

$output32 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$arguments33 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$array37 = [
'action' => 'overview',
];

$arguments35 = [
'route' => 'site_redirects',
'parameters' => $array37,
'referenceType' => 'absolute',
];

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output32 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output32 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
$output42 = '';

$output42 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '
                        ';
return $output42;
};

$arguments40 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-primary',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => NULL,
'pid' => NULL,
'table' => 'sys_redirect',
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
'defaultValues' => [],
];

$output32 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output32 .= '
                    ';
return $output32;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments28 = [
'message' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext),
'state' => -2,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure29 = ($arguments28['message'] !== null) ? function() use ($arguments28) { return $arguments28['message']; } : $renderChildrenClosure29;
$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output25 .= '

                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$array49 = [
'action' => 'overview',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand.parameters'),
'page' => 987654322,
];

$arguments47 = [
'route' => 'site_redirects',
'parameters' => $array49,
'referenceType' => 'absolute',
];
return TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);
};

$arguments45 = [
'value' => NULL,
'name' => 'gotToPageUrl',
];
$renderChildrenClosure46 = ($arguments45['value'] !== null) ? function() use ($arguments45) { return $arguments45['value']; } : $renderChildrenClosure46;
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output25 .= '
                    <form data-on-submit="processNavigate">
                        <input type="hidden" value="1" name="paginator-target-page" data-number-of-pages="1" data-url="';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('gotToPageUrl')]);

$output25 .= '"/>
                    </form>
                ';
return $output25;
},
'__else' => function() use ($renderingContext) {
$output50 = '';

$output50 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
$output55 = '';

$output55 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
return NULL;
};

$arguments56 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
$output60 = '';

$output60 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return NULL;
};

$arguments61 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output60 .= '
                        ';
return $output60;
};

$arguments58 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-primary',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => NULL,
'pid' => NULL,
'table' => 'sys_redirect',
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
'defaultValues' => [],
];

$output55 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output55 .= '
                    ';
return $output55;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments51 = [
'message' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext),
'state' => -1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure52 = ($arguments51['message'] !== null) ? function() use ($arguments51) { return $arguments51['message']; } : $renderChildrenClosure52;
$output50 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                ';
return $output50;
},
];

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, static fn() => '', $renderingContext)
;

$output21 .= '
        ';
return $output21;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * section table
 */
public function section_c3ee137d4f22eb06ed1351d644f3674592c90836(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output63 = '';

$output63 .= '
    <div class="table-fit">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return NULL;
};

$array66 = [
'field' => 'source_host',
'label' => 'sys_redirect.source_host',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand'),
];

$arguments64 = [
'section' => 'listHeaderSorting',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array66,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
                    </th>
                    <th>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};

$array69 = [
'field' => 'source_path',
'label' => 'sys_redirect.source_path',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand'),
];

$arguments67 = [
'section' => 'listHeaderSorting',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array69,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output63 .= '
                    </th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
return NULL;
};

$arguments70 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output63 .= '</th>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array73 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showHitCounter'),
];

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments72 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression74(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output75 = '';

$output75 .= '
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return NULL;
};

$array78 = [
'field' => 'hitcount',
'label' => 'sys_redirect.hitcount',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand'),
];

$arguments76 = [
'section' => 'listHeaderSorting',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array78,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
return NULL;
};

$array81 = [
'field' => 'lasthiton',
'label' => 'sys_redirect.lasthiton',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand'),
];

$arguments79 = [
'section' => 'listHeaderSorting',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array81,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output75 .= '</th>
                    ';
return $output75;
},
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, static fn() => '', $renderingContext)
;

$output63 .= '
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
$output84 = '';

$output84 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Redirects\ViewHelpers\TargetPageIdViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
return NULL;
};

$arguments87 = [
'target' => $renderingContext->getVariableProvider()->getByPath('redirect.target'),
];

$arguments85 = [
'value' => TYPO3\CMS\Redirects\ViewHelpers\TargetPageIdViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext),
'name' => 'pageId',
];
$renderChildrenClosure86 = ($arguments85['value'] !== null) ? function() use ($arguments85) { return $arguments85['value']; } : $renderChildrenClosure86;
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output84 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
return NULL;
};

$arguments91 = [
'parameter' => $renderingContext->getVariableProvider()->getByPath('redirect.target'),
'additionalParams' => '',
'language' => NULL,
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
];

$arguments89 = [
'value' => TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext),
'name' => 'targetUri',
];
$renderChildrenClosure90 = ($arguments89['value'] !== null) ? function() use ($arguments89) { return $arguments89['value']; } : $renderChildrenClosure90;
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output84 .= '
                    <tr>
                        <td>';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.source_host')]);

$output84 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
$output117 = '';

$output117 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array119 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.disabled'),
];

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments118 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression120(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output121 = '';

$output121 .= '<span title="';

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disable')]);

$output121 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure123 = function() use ($renderingContext) {
return NULL;
};

$arguments122 = [
'table' => 'sys_redirect',
'row' => $renderingContext->getVariableProvider()->getByPath('redirect'),
'size' => 'small',
'alternativeMarkupIdentifier' => NULL,
];

$output121 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '</span>';
return $output121;
},
'__else' => function() use ($renderingContext) {
$output139 = '';

$output139 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure141 = function() use ($renderingContext) {
return NULL;
};

$arguments140 = [
'table' => 'sys_redirect',
'row' => $renderingContext->getVariableProvider()->getByPath('redirect'),
'size' => 'small',
'alternativeMarkupIdentifier' => NULL,
];

$output139 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '</span>';
return $output139;
},
'__elseIf' => [
    0 => [
        'condition' => function() use ($renderingContext) {

$array124 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.starttime'),
'1' => ' && !',
'2' => $renderingContext->getVariableProvider()->getByPath('redirect.endtime'),
];

$expression125 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression125(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output126 = '';

$output126 .= '<span title="';

$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlystart')]);

$output126 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
return NULL;
};

$arguments127 = [
'table' => 'sys_redirect',
'row' => $renderingContext->getVariableProvider()->getByPath('redirect'),
'size' => 'small',
'alternativeMarkupIdentifier' => NULL,
];

$output126 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '</span>';
return $output126;
}
    ],
    1 => [
        'condition' => function() use ($renderingContext) {

$array129 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('redirect.starttime'),
'2' => ' && ',
'3' => $renderingContext->getVariableProvider()->getByPath('redirect.endtime'),
];

$expression130 = function($context) {return (!(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression130(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output131 = '';

$output131 .= '<span title="';

$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlyend')]);

$output131 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure133 = function() use ($renderingContext) {
return NULL;
};

$arguments132 = [
'table' => 'sys_redirect',
'row' => $renderingContext->getVariableProvider()->getByPath('redirect'),
'size' => 'small',
'alternativeMarkupIdentifier' => NULL,
];

$output131 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '</span>';
return $output131;
}
    ],
    2 => [
        'condition' => function() use ($renderingContext) {

$array134 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.starttime'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('redirect.endtime'),
];

$expression135 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression135(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output136 = '';

$output136 .= '<span title="';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('startend')]);

$output136 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure138 = function() use ($renderingContext) {
return NULL;
};

$arguments137 = [
'table' => 'sys_redirect',
'row' => $renderingContext->getVariableProvider()->getByPath('redirect'),
'size' => 'small',
'alternativeMarkupIdentifier' => NULL,
];

$output136 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '</span>';
return $output136;
}
    ],
],
];

$output117 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, static fn() => '', $renderingContext)
;

$output117 .= '
                            ';
return $output117;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure97 = function() use ($renderingContext) {
return NULL;
};

$arguments96 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:record_disabled',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
$output98 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return NULL;
};

$arguments99 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:start',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return NULL;
};

$arguments101 = [
'date' => $renderingContext->getVariableProvider()->getByPath('redirect.starttime'),
'format' => 'd.m.Y H:i:s',
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
];
$renderChildrenClosure102 = ($arguments101['date'] !== null) ? function() use ($arguments101) { return $arguments101['date']; } : $renderChildrenClosure102;
$output98 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);
$output103 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure105 = function() use ($renderingContext) {
return NULL;
};

$arguments104 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure107 = function() use ($renderingContext) {
return NULL;
};

$arguments106 = [
'date' => $renderingContext->getVariableProvider()->getByPath('redirect.endtime'),
'format' => 'd.m.Y H:i:s',
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
];
$renderChildrenClosure107 = ($arguments106['date'] !== null) ? function() use ($arguments106) { return $arguments106['date']; } : $renderChildrenClosure107;
$output103 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);
$output108 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};

$arguments109 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:start',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return NULL;
};

$arguments111 = [
'date' => $renderingContext->getVariableProvider()->getByPath('redirect.starttime'),
'format' => 'd.m.Y H:i:s',
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
];
$renderChildrenClosure112 = ($arguments111['date'] !== null) ? function() use ($arguments111) { return $arguments111['date']; } : $renderChildrenClosure112;
$output108 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output108 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return NULL;
};

$arguments113 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output108 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext) {
return NULL;
};

$arguments115 = [
'date' => $renderingContext->getVariableProvider()->getByPath('redirect.endtime'),
'format' => 'd.m.Y H:i:s',
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
];
$renderChildrenClosure116 = ($arguments115['date'] !== null) ? function() use ($arguments115) { return $arguments115['date']; } : $renderChildrenClosure116;
$output108 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$array95 = [
'disable' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext),
'onlystart' => $output98,
'onlyend' => $output103,
'startend' => $output108,
];

$arguments93 = [
'map' => $array95,
];

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output84 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure143 = function() use ($renderingContext) {
$output147 = '';

$output147 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure149 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.source_path')]);
};

$arguments148 = [
'maxCharacters' => 100,
'append' => '&hellip;',
'respectWordBoundaries' => true,
'respectHtml' => true,
];

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
                            ';
return $output147;
};
$output144 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure146 = function() use ($renderingContext) {
return NULL;
};

$arguments145 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output144 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= ': ';

$output144 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path');

$arguments142 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => $output144,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => $renderingContext->getVariableProvider()->getByPath('redirect.uid'),
'table' => 'sys_redirect',
'fields' => NULL,
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];

$output84 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output84 .= '
                        </td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure151 = function() use ($renderingContext) {
$output158 = '';

$output158 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array160 = [
'0' => $renderingContext->getVariableProvider()->getByPath('targetUri'),
];

$expression161 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments159 = [
'then' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('targetUri')]),
'else' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.target')]),
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression161(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array160)),
    $renderingContext
),
];

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, static fn() => '', $renderingContext)
;

$output158 .= '
                            ';
return $output158;
};
$output152 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure154 = function() use ($renderingContext) {
return NULL;
};

$arguments153 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:visit_destination',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array156 = [
'0' => $renderingContext->getVariableProvider()->getByPath('targetUri'),
];

$expression157 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments155 = [
'then' => $renderingContext->getVariableProvider()->getByPath('targetUri'),
'else' => $renderingContext->getVariableProvider()->getByPath('redirect.target'),
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression157(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)),
    $renderingContext
),
];

$output152 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments155, static fn() => '', $renderingContext)
;

$arguments150 = [
'parameter' => $renderingContext->getVariableProvider()->getByPath('redirect.target'),
'target' => '_blank',
'class' => '',
'title' => $output152,
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
];

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output84 .= '
                            (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array163 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageId'),
];

$expression164 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments162 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression164(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output165 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext) {
return NULL;
};

$arguments166 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:pageID',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext)]);

$output165 .= ': ';

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageId')]);

$output165 .= ',
                            ';
return $output165;
},
];

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure169 = function() use ($renderingContext) {
return NULL;
};

$arguments168 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:destination_status_code',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext)]);

$output84 .= ': ';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.target_statuscode')]);

$output84 .= ')
                        </td>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array171 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showHitCounter'),
];

$expression172 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments170 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression172(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array171)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output173 = '';

$output173 .= '
                            <td>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array175 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('redirect.disable_hitcount'),
];

$expression176 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments174 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression176(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output177 = '';

$output177 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure179 = function() use ($renderingContext) {
return NULL;
};
$output180 = '';

$output180 .= 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array182 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.hitcount'),
'1' => ' > 1',
];

$expression183 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments181 = [
'then' => 's',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression183(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)),
    $renderingContext
),
];

$output180 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, static fn() => '', $renderingContext)
;

$output180 .= '_text';

$array184 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.hitcount'),
];

$arguments178 = [
'key' => $output180,
'id' => NULL,
'default' => NULL,
'arguments' => $array184,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext)]);

$output177 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array186 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.hitcount'),
'1' => ' != 0',
];

$expression187 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 0);};

$arguments185 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression187(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output188 = '';

$output188 .= '
                                        <a class="t3js-modal-trigger"
                                            href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure190 = function() use ($renderingContext) {
return NULL;
};

$array191 = [
'redirect' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];
$output192 = '';

$output192 .= 'data[sys_redirect][';

$output192 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid');

$output192 .= '][hitcount]=0';

$arguments189 = [
'route' => 'tce_db',
'arguments' => $array191,
'query' => $output192,
'currentUrlParameterName' => NULL,
];

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext)]);

$output188 .= '"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext) {
return NULL;
};

$arguments193 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output188 .= '"
                                            data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure196 = function() use ($renderingContext) {
return NULL;
};

$arguments195 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset.confirm.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext)]);

$output188 .= '"
                                            data-bs-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure198 = function() use ($renderingContext) {
return NULL;
};

$arguments197 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset.confirm.content',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);

$output188 .= '"
                                            data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure200 = function() use ($renderingContext) {
return NULL;
};

$arguments199 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.no',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext)]);

$output188 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure202 = function() use ($renderingContext) {
return NULL;
};

$arguments201 = [
'identifier' => 'actions-edit-restore',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output188 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output188 .= '
                                        </a>
                                    ';
return $output188;
},
];

$output177 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, static fn() => '', $renderingContext)
;

$output177 .= '
                                ';
return $output177;
},
];

$output173 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments174, static fn() => '', $renderingContext)
;

$output173 .= '
                            <td>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array204 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton'),
];

$expression205 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments203 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression205(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure207 = function() use ($renderingContext) {
$output208 = '';

$output208 .= '@';

$output208 .= $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton');
return $output208;
};

$arguments206 = [
'date' => NULL,
'format' => 'd.m.Y H:i:s',
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
];
$renderChildrenClosure207 = ($arguments206['date'] !== null) ? function() use ($arguments206) { return $arguments206['date']; } : $renderChildrenClosure207;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext)]);
},
'__else' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure210 = function() use ($renderingContext) {
return NULL;
};

$arguments209 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last_never',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext)]);
},
];

$output173 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments203, static fn() => '', $renderingContext)
;

$output173 .= '
                            </td>
                        ';
return $output173;
},
];

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, static fn() => '', $renderingContext)
;

$output84 .= '
                        <td class="col-control">
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array212 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.is_regexp'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('redirect.source_host'),
'3' => ' === \'*\'',
];

$expression213 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) === '*'));};

$arguments211 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression213(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output214 = '';

$output214 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure216 = function() use ($renderingContext) {
return NULL;
};

$arguments215 = [
'identifier' => 'empty-empty',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output214 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output214 .= '</span>
                                    ';
return $output214;
},
'__else' => function() use ($renderingContext) {
$output217 = '';

$output217 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure219 = function() use ($renderingContext) {
$output223 = '';

$output223 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure225 = function() use ($renderingContext) {
return NULL;
};

$arguments224 = [
'identifier' => 'actions-view-page',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output223 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '
                                        ';
return $output223;
};
$output220 = '';

$output220 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_host');

$output220 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure222 = function() use ($renderingContext) {
return NULL;
};

$arguments221 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:view_redirect',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments218 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'uri' => $output220,
'defaultScheme' => 'https',
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => '_blank',
];

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
                                    ';
return $output217;
},
];

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments211, static fn() => '', $renderingContext)
;

$output84 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure227 = function() use ($renderingContext) {
$output230 = '';

$output230 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure232 = function() use ($renderingContext) {
return NULL;
};

$arguments231 = [
'identifier' => 'actions-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output230 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= '
                                ';
return $output230;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure229 = function() use ($renderingContext) {
return NULL;
};

$arguments228 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments226 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => $renderingContext->getVariableProvider()->getByPath('redirect.uid'),
'table' => 'sys_redirect',
'fields' => NULL,
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];

$output84 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output84 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array234 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.disabled'),
'1' => ' == 1',
];

$expression235 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments233 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression235(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array234)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output236 = '';

$output236 .= '
                                        <a
                                            class="btn btn-default"
                                            href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure238 = function() use ($renderingContext) {
return NULL;
};

$array239 = [
'redirect' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];
$output240 = '';

$output240 .= 'data[sys_redirect][';

$output240 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid');

$output240 .= '][disabled]=0';

$arguments237 = [
'route' => 'tce_db',
'arguments' => $array239,
'query' => $output240,
'currentUrlParameterName' => NULL,
];

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output236 .= '"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure242 = function() use ($renderingContext) {
return NULL;
};

$arguments241 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:unHide',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext)]);

$output236 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure244 = function() use ($renderingContext) {
return NULL;
};

$arguments243 = [
'identifier' => 'actions-edit-unhide',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output236 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output236 .= '
                                        </a>
                                    ';
return $output236;
},
'__else' => function() use ($renderingContext) {
$output245 = '';

$output245 .= '
                                        <a
                                            class="btn btn-default"
                                            href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure247 = function() use ($renderingContext) {
return NULL;
};

$array248 = [
'redirect' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];
$output249 = '';

$output249 .= 'data[sys_redirect][';

$output249 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid');

$output249 .= '][disabled]=1';

$arguments246 = [
'route' => 'tce_db',
'arguments' => $array248,
'query' => $output249,
'currentUrlParameterName' => NULL,
];

$output245 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext)]);

$output245 .= '"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure251 = function() use ($renderingContext) {
return NULL;
};

$arguments250 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:hide',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output245 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext)]);

$output245 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure253 = function() use ($renderingContext) {
return NULL;
};

$arguments252 = [
'identifier' => 'actions-edit-hide',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output245 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output245 .= '
                                        </a>
                                    ';
return $output245;
},
];

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments233, static fn() => '', $renderingContext)
;

$output84 .= '
                                <a class="btn btn-default t3js-modal-trigger"
                                    href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure255 = function() use ($renderingContext) {
return NULL;
};

$array256 = [
'redirect' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];
$output257 = '';

$output257 .= 'cmd[sys_redirect][';

$output257 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid');

$output257 .= '][delete]=1';

$arguments254 = [
'route' => 'tce_db',
'arguments' => $array256,
'query' => $output257,
'currentUrlParameterName' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext)]);

$output84 .= '"
                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext) {
return NULL;
};

$arguments258 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:delete',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext)]);

$output84 .= '"
                                    data-severity="warning"
                                    data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure261 = function() use ($renderingContext) {
return NULL;
};

$arguments260 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext)]);

$output84 .= '"
                                    data-bs-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure263 = function() use ($renderingContext) {
return NULL;
};

$arguments262 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:deleteWarning',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext)]);

$output84 .= '"
                                    data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure265 = function() use ($renderingContext) {
return NULL;
};

$arguments264 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.no',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext)]);

$output84 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure267 = function() use ($renderingContext) {
return NULL;
};

$arguments266 = [
'identifier' => 'actions-delete',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output84 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output84 .= '
                                </a>
                            </div>
                        </td>
                    </tr>
                ';
return $output84;
};

$arguments82 = [
'each' => $renderingContext->getVariableProvider()->getByPath('redirects'),
'as' => 'redirect',
'key' => 'domainName',
'reverse' => false,
'iteration' => NULL,
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output63 .= '
            </tbody>
        </table>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure269 = function() use ($renderingContext) {
return NULL;
};

$arguments268 = [
'section' => NULL,
'partial' => 'Pagination',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output63 .= '
';

    return $output63;
}
/**
 * section listHeaderSorting
 */
public function section_a6c6dbfd3738d0e601cc31fa18ada6281fd92109(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output270 = '';

$output270 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array272 = [
'0' => $renderingContext->getVariableProvider()->getByPath('demand.orderField'),
'1' => ' === ',
'2' => $renderingContext->getVariableProvider()->getByPath('field'),
];

$expression273 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments271 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression273(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array272)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output274 = '';

$output274 .= '
            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure276 = function() use ($renderingContext) {
return NULL;
};

$array277 = [
'action' => 'overview',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand.parameters'),
'orderField' => $renderingContext->getVariableProvider()->getByPath('field'),
'orderDirection' => $renderingContext->getVariableProvider()->getByPath('demand.reverseOrderDirection'),
];

$arguments275 = [
'route' => 'site_redirects',
'parameters' => $array277,
'referenceType' => 'absolute',
];

$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext)]);

$output274 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure279 = function() use ($renderingContext) {
return NULL;
};
$output280 = '';

$output280 .= 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:';

$output280 .= $renderingContext->getVariableProvider()->getByPath('label');

$arguments278 = [
'key' => $output280,
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext)]);

$output274 .= '
            </a>
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure282 = function() use ($renderingContext) {
return NULL;
};
$output283 = '';

$output283 .= 'status-status-sorting-';

$output283 .= $renderingContext->getVariableProvider()->getByPath('demand.orderDirection');

$arguments281 = [
'identifier' => $output283,
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output274 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output274 .= '
        ';
return $output274;
},
'__else' => function() use ($renderingContext) {
$output284 = '';

$output284 .= '
            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure286 = function() use ($renderingContext) {
return NULL;
};

$array287 = [
'action' => 'overview',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand.parameters'),
'orderField' => $renderingContext->getVariableProvider()->getByPath('field'),
'orderDirection' => $renderingContext->getVariableProvider()->getByPath('demand.defaultOrderDirection'),
];

$arguments285 = [
'route' => 'site_redirects',
'parameters' => $array287,
'referenceType' => 'absolute',
];

$output284 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext)]);

$output284 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure289 = function() use ($renderingContext) {
return NULL;
};
$output290 = '';

$output290 .= 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:';

$output290 .= $renderingContext->getVariableProvider()->getByPath('label');

$arguments288 = [
'key' => $output290,
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output284 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext)]);

$output284 .= '
            </a>
        ';
return $output284;
},
];

$output270 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments271, static fn() => '', $renderingContext)
;

$output270 .= '
';

    return $output270;
}
/**
 * section filter
 */
public function section_4bb4ca75941b7bbc5bc6a12be44b22fc9c8d234e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output291 = '';

$output291 .= '
    <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure293 = function() use ($renderingContext) {
return NULL;
};

$array294 = [
'action' => 'overview',
];

$arguments292 = [
'route' => 'site_redirects',
'parameters' => $array294,
'referenceType' => 'absolute',
];

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext)]);

$output291 .= '" method="post" enctype="multipart/form-data" name="demand">
        <input type="hidden" name="orderField" value="';

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.orderField')]);

$output291 .= '">
        <input type="hidden" name="orderDirection" value="';

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.orderDirection')]);

$output291 .= '">
        <div class="form-row">
            <div class="form-group">
                <label for="demand-source-host" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure296 = function() use ($renderingContext) {
return NULL;
};

$arguments295 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_host',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext)]);

$output291 .= '</label>
                <select id="demand-source-host" class="form-select" name="demand[source_host]" data-on-change="submit">
                    <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure298 = function() use ($renderingContext) {
return NULL;
};

$arguments297 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.source_host.showAll',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext)]);

$output291 .= '</option>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure300 = function() use ($renderingContext) {
$output301 = '';

$output301 .= '
                        <option value="';

$output301 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('host.name')]);

$output301 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array303 = [
'0' => $renderingContext->getVariableProvider()->getByPath('host.name'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('demand.firstSourceHost'),
];

$expression304 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments302 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression304(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array303)),
    $renderingContext
),
];

$output301 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, static fn() => '', $renderingContext)
;

$output301 .= '>';

$output301 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('host.name')]);

$output301 .= '</option>
                    ';
return $output301;
};

$arguments299 = [
'each' => $renderingContext->getVariableProvider()->getByPath('hosts'),
'as' => 'host',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output291 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output291 .= '
                </select>
            </div>
            <div class="form-group">
                <label for="demand-source-path" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure306 = function() use ($renderingContext) {
return NULL;
};

$arguments305 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_path',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext)]);

$output291 .= '</label>
                <input type="text" id="demand-source-path" class="form-control" name="demand[source_path]" value="';

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.sourcePath')]);

$output291 .= '"/>
            </div>
            <div class="form-group">
                <label for="demand-target" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure308 = function() use ($renderingContext) {
return NULL;
};

$arguments307 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext)]);

$output291 .= '</label>
                <input type="text" id="demand-target" class="form-control" name="demand[target]" value="';

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.target')]);

$output291 .= '"/>
            </div>
            <div class="form-group">
                <label for="demand-target-status-code" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure310 = function() use ($renderingContext) {
return NULL;
};

$arguments309 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.targetStatusCode',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext)]);

$output291 .= '</label>
                <select id="demand-target-status-code" class="form-select" name="demand[target_statuscode]" data-on-change="submit">
                    <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure312 = function() use ($renderingContext) {
return NULL;
};

$arguments311 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.source_host.showAll',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext)]);

$output291 .= '</option>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure314 = function() use ($renderingContext) {
$output315 = '';

$output315 .= '
                        <option value="';

$output315 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('statusCode.code')]);

$output315 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array317 = [
'0' => $renderingContext->getVariableProvider()->getByPath('statusCode.code'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('demand.firstStatusCode'),
];

$expression318 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments316 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression318(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array317)),
    $renderingContext
),
];

$output315 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments316, static fn() => '', $renderingContext)
;

$output315 .= '>';

$output315 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('statusCode.code')]);

$output315 .= '</option>
                    ';
return $output315;
};

$arguments313 = [
'each' => $renderingContext->getVariableProvider()->getByPath('statusCodes'),
'as' => 'statusCode',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output291 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output291 .= '
                </select>
            </div>
            <div class="form-group">
                <label for="demand-target-automatically-created" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure320 = function() use ($renderingContext) {
return NULL;
};

$arguments319 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.creationType',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext)]);

$output291 .= '</label>
                <select id="demand-target-automatically-created" class="form-select" name="demand[creation_type]" data-on-change="submit">
                    <option value="-1">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure322 = function() use ($renderingContext) {
return NULL;
};

$arguments321 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.creationType.showAll',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext)]);

$output291 .= '</option>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure324 = function() use ($renderingContext) {
$output325 = '';

$output325 .= '
                        <option value="';

$output325 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('creationType')]);

$output325 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array327 = [
'0' => $renderingContext->getVariableProvider()->getByPath('demand.creationType'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('creationType'),
];

$expression328 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments326 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression328(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array327)),
    $renderingContext
),
];

$output325 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments326, static fn() => '', $renderingContext)
;

$output325 .= '>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure330 = function() use ($renderingContext) {
return NULL;
};

$arguments329 = [
'key' => $renderingContext->getVariableProvider()->getByPath('label'),
'id' => NULL,
'default' => $renderingContext->getVariableProvider()->getByPath('label'),
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output325 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext)]);

$output325 .= '</option>
                    ';
return $output325;
};

$arguments323 = [
'each' => $renderingContext->getVariableProvider()->getByPath('creationTypes'),
'as' => 'label',
'key' => 'creationType',
'reverse' => false,
'iteration' => NULL,
];

$output291 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output291 .= '
                </select>
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array332 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showHitCounter'),
];

$expression333 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments331 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression333(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array332)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output334 = '';

$output334 .= '
                <div class="form-group align-self-end">
                    <div class="form-check form-switch form-check-size-input">
                        <input type="checkbox" class="form-check-input" name="demand[max_hits]" id="demand-never-hit" value="1" data-on-change="submit" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array336 = [
'0' => $renderingContext->getVariableProvider()->getByPath('demand.maxHits'),
];

$expression337 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments335 = [
'then' => 'checked="checked"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression337(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array336)),
    $renderingContext
),
];

$output334 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments335, static fn() => '', $renderingContext)
;

$output334 .= '>
                        <label class="form-check-label" for="demand-never-hit">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure339 = function() use ($renderingContext) {
return NULL;
};

$arguments338 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.neverHit',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output334 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext)]);

$output334 .= '
                        </label>
                    </div>
                </div>
            ';
return $output334;
},
];

$output291 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments331, static fn() => '', $renderingContext)
;

$output291 .= '
            <div class="form-group align-self-end">
                <input type="submit" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure341 = function() use ($renderingContext) {
return NULL;
};

$arguments340 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.sendButton',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext)]);

$output291 .= '" class="btn btn-default" />
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure343 = function() use ($renderingContext) {
return NULL;
};

$arguments342 = [
'route' => 'site_redirects',
'parameters' => [],
'referenceType' => 'absolute',
];

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext)]);

$output291 .= '" class="btn btn-link">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure345 = function() use ($renderingContext) {
return NULL;
};

$arguments344 = [
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.resetButton',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext)]);

$output291 .= '</a>
            </div>
        </div>
    </form>
';

    return $output291;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output346 = '';

$output346 .= '

';

$output346 .= '';

$output346 .= '

';

$output346 .= '';

$output346 .= '

';

$output346 .= '';

$output346 .= '

';

$output346 .= '';

$output346 .= '

';

$output346 .= '';

$output346 .= '

';

    return $output346;
}

}

#