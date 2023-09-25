<?php
class Download_action_installFromTer_89ad804af7031dab9270b46649bbed30d0835b1a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
    // Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure1 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure3 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'subject' => $renderingContext->getVariableProvider()->getByPath('unresolvedDependencies'),
];
$renderChildrenClosure6 = ($arguments5['subject'] !== null) ? function() use ($arguments5) { return $arguments5['subject']; } : $renderChildrenClosure6;// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'key' => 'downloadExtension.dependencies.errorTitle',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'section' => NULL,
'partial' => 'List/UnresolvedDependencies',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$array13 = [
'extension' => $renderingContext->getVariableProvider()->getByPath('extension'),
];

$arguments11 = [
'action' => 'installExtensionWithoutSystemDependencyCheck',
'arguments' => $array13,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => 0,
'noCache' => NULL,
'language' => NULL,
'section' => '',
'format' => 'json',
'linkAccessRestrictedPages' => false,
'additionalParams' => [],
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
];

$array4 = [
'result' => $renderingContext->getVariableProvider()->getByPath('result'),
'extension' => $renderingContext->getVariableProvider()->getByPath('extension.extensionKey'),
'installationTypeLanguageKey' => $renderingContext->getVariableProvider()->getByPath('installationTypeLanguageKey'),
'errorCount' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext),
'errorTitle' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext),
'errorMessage' => TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext),
'skipDependencyUri' => TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext),
];

$arguments2 = [
'value' => $array4,
'forceObject' => false,
];
$renderChildrenClosure3 = ($arguments2['value'] !== null) ? function() use ($arguments2) { return $arguments2['value']; } : $renderChildrenClosure3;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
};

$arguments0 = [
'value' => NULL,
];

    return isset($arguments0['value']) ? $arguments0['value'] : $renderChildrenClosure1();
}

}

#