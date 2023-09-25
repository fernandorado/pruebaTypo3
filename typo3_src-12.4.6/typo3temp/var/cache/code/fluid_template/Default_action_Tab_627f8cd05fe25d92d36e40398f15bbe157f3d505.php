<?php
class Default_action_Tab_627f8cd05fe25d92d36e40398f15bbe157f3d505 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Default';
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('records'),
];

$expression3 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output4 = '';

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('records.0.data.uid');
};

$arguments5 = [
'value' => NULL,
'name' => 'activeTab',
];
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array8 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.default_tab'),
];

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments7 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output10 = '';

$output10 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array15 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.default_tab'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('record.data.uid'),
'3' => ' || ',
'4' => $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.default_tab'),
'5' => ' == ',
'6' => $renderingContext->getVariableProvider()->getByPath('record.data._LOCALIZED_UID'),
];

$expression16 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node6"])));};

$arguments14 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('record.data.uid');
};

$arguments18 = [
'value' => NULL,
'name' => 'activeTab',
];
$renderChildrenClosure19 = ($arguments18['value'] !== null) ? function() use ($arguments18) { return $arguments18['value']; } : $renderChildrenClosure19;
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output17 .= '
                ';
return $output17;
},
];

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, static fn() => '', $renderingContext)
;

$output13 .= '
            ';
return $output13;
};

$arguments11 = [
'each' => $renderingContext->getVariableProvider()->getByPath('records'),
'as' => 'record',
'key' => NULL,
'reverse' => false,
'iteration' => 'iteration',
];

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
        ';
return $output10;
},
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, static fn() => '', $renderingContext)
;

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'value' => $renderingContext->getVariableProvider()->getByPath('variants'),
'name' => 'currentVariants',
];
$renderChildrenClosure21 = ($arguments20['value'] !== null) ? function() use ($arguments20) { return $arguments20['value']; } : $renderChildrenClosure21;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output4 .= '
        <div class="tab-navigation">
            <div class="nav nav-tabs" id="tab-';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output4 .= '" role="tablist">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
$output24 = '';

$output24 .= '
                    <button
                        class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array26 = [
'0' => $renderingContext->getVariableProvider()->getByPath('activeTab'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('record.data.uid'),
];

$expression27 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments25 = [
'then' => ' active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression27(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)),
    $renderingContext
),
];

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, static fn() => '', $renderingContext)
;

$output24 .= '"
                        id="tab-';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output24 .= '-';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid')]);

$output24 .= '"
                        data-bs-toggle="tab"
                        data-bs-target="#tabcontent-';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output24 .= '-';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid')]);

$output24 .= '"
                        type="button"
                        role="tab"
                        aria-controls="tabcontent-';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output24 .= '-';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid')]);

$output24 .= '"
                        aria-selected="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array29 = [
'0' => $renderingContext->getVariableProvider()->getByPath('activeTab'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('record.data.uid'),
];

$expression30 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments28 = [
'then' => 'true',
'else' => 'false',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)),
    $renderingContext
),
];

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, static fn() => '', $renderingContext)
;

$output24 .= '"
                        >
                        <span>';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.header')]);

$output24 .= '</span>
                    </button>
                ';
return $output24;
};

$arguments22 = [
'each' => $renderingContext->getVariableProvider()->getByPath('records'),
'as' => 'record',
'key' => NULL,
'reverse' => false,
'iteration' => 'iteration',
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output4 .= '
            </div>
        </div>
        <div class="tab-content" id="tabcontent-';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output4 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
$output33 = '';

$output33 .= '
                <div
                    class="tab-pane fade';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array35 = [
'0' => $renderingContext->getVariableProvider()->getByPath('activeTab'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('record.data.uid'),
];

$expression36 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments34 = [
'then' => ' show active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression36(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)),
    $renderingContext
),
];

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, static fn() => '', $renderingContext)
;

$output33 .= '"
                    id="tabcontent-';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output33 .= '-';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid')]);

$output33 .= '"
                    role="tabpanel"
                    aria-labelledby="tab-';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output33 .= '-';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid')]);

$output33 .= '"
                    >
                    <div class="tab-pane-content tab-pane-content-';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.mediaorient')]);

$output33 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array38 = [
'0' => $renderingContext->getVariableProvider()->getByPath('record.files'),
];

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments37 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression39(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output40 = '';

$output40 .= '
                            <div class="tab-pane-content-item tab-pane-content-media">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.contentelements.tab.{record.data.mediaorient}');
};

$arguments41 = [
'value' => NULL,
'name' => 'imageConfig',
];
$renderChildrenClosure42 = ($arguments41['value'] !== null) ? function() use ($arguments41) { return $arguments41['value']; } : $renderChildrenClosure42;
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output40 .= '
                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'as' => 'variants',
'variants' => $renderingContext->getVariableProvider()->getByPath('currentVariants'),
'multiplier' => $renderingContext->getVariableProvider()->getByPath('imageConfig.multiplier'),
'gutters' => $renderingContext->getVariableProvider()->getByPath('imageConfig.gutters'),
'corrections' => $renderingContext->getVariableProvider()->getByPath('imageConfig.corrections'),
'aspectRatio' => NULL,
];

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output40 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$array47 = [
'files' => $renderingContext->getVariableProvider()->getByPath('record.files'),
'data' => $renderingContext->getVariableProvider()->getByPath('record.data'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
];

$arguments45 = [
'section' => NULL,
'partial' => 'Media/Gallery',
'delegate' => NULL,
'arguments' => $array47,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output40 .= '
                            </div>
                        ';
return $output40;
},
];

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, static fn() => '', $renderingContext)
;

$output33 .= '
                        <div class="tab-pane-content-item tab-pane-content-text">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('record.data.bodytext');
};

$arguments48 = [
'parseFuncTSPath' => 'lib.parseFunc_RTE',
'data' => NULL,
'current' => NULL,
'currentValueKey' => NULL,
'table' => '',
];

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output33 .= '
                        </div>
                    </div>
                </div>
            ';
return $output33;
};

$arguments31 = [
'each' => $renderingContext->getVariableProvider()->getByPath('records'),
'as' => 'record',
'key' => NULL,
'reverse' => false,
'iteration' => 'iteration',
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output4 .= '
        </div>
    ';
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output50 = '';

$output50 .= '
';

$output50 .= '';

$output50 .= '
';

$output50 .= '';

$output50 .= '

';

    return $output50;
}

}

#