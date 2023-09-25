<?php
class partial_List_UnresolvedDependencies_5b0a733ccdc271376d2b05d68e58f5e4682e8723 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'section' => NULL,
'partial' => 'List/UnresolvedDependencies.html',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'section' => NULL,
'partial' => 'List/UnresolvedDependenciesMessage.html',
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
	<p><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'key' => 'dependencyCheck.unresolvedDependencies.question',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output7 .= '</strong></p>
';
return $output7;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'key' => 'dependencyCheck.unresolvedDependencies.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments3 = [
'message' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext),
'state' => 1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure4 = ($arguments3['message'] !== null) ? function() use ($arguments3) { return $arguments3['message']; } : $renderChildrenClosure4;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

    return $output0;
}

}

#