<?php
class partial_AnalyzerTreePanel_b2e03b64391a3ead68e257c9e3023a1b968010aa extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'backend' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title" id="template-analyzer-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type')]);

$output0 .= '-tree-heading">
            <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#template-analyzer-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type')]);

$output0 .= '-tree-body" aria-expanded="false" aria-controls="template-analyzer-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type')]);

$output0 .= '-tree-body">
                <span class="caret"></span>
                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_analyzer.xlf:panel.header.configuration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</strong>
            </a>
        </h3>
    </div>
    <div id="template-analyzer-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type')]);

$output0 .= '-tree-body" class="panel-collapse collapse" data-persist-collapse-state="true" aria-labelledby="template-analyzer-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type')]);

$output0 .= '-tree-heading">
        <div class="panel-body panel-body-overflow">
            <ul class="treelist">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$array5 = [
'type' => $renderingContext->getVariableProvider()->getByPath('type'),
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
'tree' => $renderingContext->getVariableProvider()->getByPath('tree'),
];

$arguments3 = [
'section' => NULL,
'partial' => 'AnalyzerTree',
'delegate' => NULL,
'arguments' => $array5,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
            </ul>
        </div>
    </div>
</div>


';

    return $output0;
}

}

#