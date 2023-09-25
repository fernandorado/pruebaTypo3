<?php
class Default_action_ContentElement_ElementInformation_05b0bedb2bdc4da65d743ad1fdfe222503896afe extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('accessAllowed'),
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array6 = [
'0' => $renderingContext->getVariableProvider()->getByPath('hookContent'),
];

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments5 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression7(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output8 = '';

$output8 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('hookContent');
};

$arguments9 = [
'value' => NULL,
];

$output8 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

$output8 .= '
                ';
return $output8;
},
'__else' => function() use ($renderingContext) {
$output11 = '';

$output11 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'section' => 'nativeContent',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
                ';
return $output11;
},
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, static fn() => '', $renderingContext)
;

$output4 .= '
        ';
return $output4;
},
'__else' => function() use ($renderingContext) {
$output14 = '';

$output14 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.noEditPermission',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);
};

$arguments15 = [
'message' => NULL,
'title' => NULL,
'state' => 2,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure16 = ($arguments15['message'] !== null) ? function() use ($arguments15) { return $arguments15['message']; } : $renderChildrenClosure16;
$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
        ';
return $output14;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * section nativeContent
 */
public function section_ee331c99c25f2c1f9a8b670440d8877376d4da35(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output19 = '';

$output19 .= '
    <div class="card-container">
        <div class="card card-size-medium">
            <div class="card-header">
                <div class="card-icon">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('icon');
};

$arguments20 = [
'value' => NULL,
];

$output19 .= isset($arguments20['value']) ? $arguments20['value'] : $renderChildrenClosure21();

$output19 .= '
                </div>

                <div class="card-header-body">
                    <h1 class="card-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title')]);
};

$arguments22 = [
'maxCharacters' => $renderingContext->getVariableProvider()->getByPath('maxTitleLength'),
'append' => '&hellip;',
'respectWordBoundaries' => true,
'respectHtml' => true,
];

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array25 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extraFields.uid.value'),
];

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments24 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression26(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output27 = '';

$output27 .= '<code>[';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.uid.value')]);

$output27 .= ']</code>';
return $output27;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, static fn() => '', $renderingContext)
;

$output19 .= '</h1>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array29 = [
'0' => $renderingContext->getVariableProvider()->getByPath('table'),
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
                        <span class="card-subtitle">';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('table')]);

$output31 .= '</span>
                    ';
return $output31;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, static fn() => '', $renderingContext)
;

$output19 .= '
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
$output34 = '';

$output34 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array36 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extraField.isDatetime'),
];

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments35 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression37(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output38 = '';

$output38 .= '
                            <div class="col-md-6">
                                <strong>';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraField.fieldLabel')]);

$output38 .= '</strong><br>
                                ';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraField.value')]);

$output38 .= '
                            </div>
                        ';
return $output38;
},
];

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, static fn() => '', $renderingContext)
;

$output34 .= '
                    ';
return $output34;
};

$arguments32 = [
'each' => $renderingContext->getVariableProvider()->getByPath('extraFields'),
'as' => 'extraField',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output19 .= '
                </div>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array40 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord'),
];

$expression41 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments39 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression41(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output42 = '';

$output42 .= '
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="media">
                                <div class="media-left">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.icon');
};

$arguments43 = [
'value' => NULL,
];

$output42 .= isset($arguments43['value']) ? $arguments43['value'] : $renderChildrenClosure44();

$output42 .= '
                                </div>
                                <div class="media-body">
                                    <strong>';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.username')]);

$output42 .= '</strong><br>
                                    ';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.realName')]);

$output42 .= '
                                </div>
                            </div>
                        </div>
                    </div>
                ';
return $output42;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, static fn() => '', $renderingContext)
;

$output19 .= '
            </div>
        </div>
    </div>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array46 = [
'0' => $renderingContext->getVariableProvider()->getByPath('missingFile'),
];

$expression47 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments45 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression47(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output48 = '';

$output48 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('missingFile')]);
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};

$arguments51 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:warning.file_missing',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments49 = [
'message' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext),
'state' => 1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure50 = ($arguments49['message'] !== null) ? function() use ($arguments49) { return $arguments49['message']; } : $renderChildrenClosure50;
$output48 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
    ';
return $output48;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, static fn() => '', $renderingContext)
;

$output19 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array54 = [
'0' => $renderingContext->getVariableProvider()->getByPath('fileRenderer'),
];

$expression55 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments53 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression55(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output56 = '';

$output56 .= '
        <p>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('fileRenderer');
};

$arguments57 = [
'value' => NULL,
];

$output56 .= isset($arguments57['value']) ? $arguments57['value'] : $renderChildrenClosure58();

$output56 .= '
        </p>
    ';
return $output56;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, static fn() => '', $renderingContext)
;

$output19 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array60 = [
'0' => $renderingContext->getVariableProvider()->getByPath('fileObject'),
];

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments59 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression61(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output62 = '';

$output62 .= '
        <p>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return NULL;
};

$arguments63 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'alt' => NULL,
'file' => $renderingContext->getVariableProvider()->getByPath('fileObject'),
'additionalConfig' => [],
'width' => $renderingContext->getVariableProvider()->getByPath('width'),
'height' => $renderingContext->getVariableProvider()->getByPath('height'),
'cropVariant' => 'default',
'fileExtension' => NULL,
'loading' => NULL,
'decoding' => NULL,
];

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
        </p>
    ';
return $output62;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, static fn() => '', $renderingContext)
;

$output19 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array66 = [
'0' => $renderingContext->getVariableProvider()->getByPath('url'),
];

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments65 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression67(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output68 = '';

$output68 .= '
        <p>
            <a class="btn btn-default" href="';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url')]);

$output68 .= '" target="_blank" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return NULL;
};

$arguments69 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.show',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output68 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return NULL;
};

$arguments71 = [
'identifier' => 'actions-document-view',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output68 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output68 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return NULL;
};

$arguments73 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.show',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output68 .= '
            </a>
        </p>
    ';
return $output68;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, static fn() => '', $renderingContext)
;

$output19 .= '
    <div class="table-fit table-fit-wrap">
        <table class="table table-striped table-hover">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
$output77 = '';

$output77 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
return NULL;
};

$array80 = [
'row' => $renderingContext->getVariableProvider()->getByPath('field'),
];

$arguments78 = [
'section' => 'fieldRow',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array80,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
            ';
return $output77;
};

$arguments75 = [
'each' => $renderingContext->getVariableProvider()->getByPath('fields'),
'as' => 'field',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output19 .= '
        </table>
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array82 = [
'0' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments81 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression83(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output84 = '';

$output84 .= '
        <a class="btn btn-primary" href="';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('returnUrl')]);

$output84 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return NULL;
};

$arguments85 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:back',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output84 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
return NULL;
};

$arguments87 = [
'identifier' => 'actions-view-go-back',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output84 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output84 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
return NULL;
};

$arguments89 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:back',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output84 .= '
        </a>
    ';
return $output84;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, static fn() => '', $renderingContext)
;

$output19 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array92 = [
'0' => $renderingContext->getVariableProvider()->getByPath('refLines'),
];

$expression93 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments91 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression93(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output94 = '';

$output94 .= '
        <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return NULL;
};

$arguments95 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesToThisItem',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output94 .= '</h3>
        <div class="table-fit">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th class="col-icon"></th>
                    <th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return NULL;
};

$arguments97 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output94 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return NULL;
};

$arguments99 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output94 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return NULL;
};

$arguments101 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output94 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return NULL;
};

$arguments103 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext)]);

$output94 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
return NULL;
};

$arguments105 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext)]);

$output94 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return NULL;
};

$arguments107 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output94 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};

$arguments109 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output94 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return NULL;
};

$arguments111 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output94 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return NULL;
};

$arguments113 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext)]);

$output94 .= '</th>
                    <th class="col-control"></th>
                </tr>
                </thead>
                <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure116 = function() use ($renderingContext) {
$output117 = '';

$output117 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
return NULL;
};

$array120 = [
'line' => $renderingContext->getVariableProvider()->getByPath('refLine'),
'maxTitleLength' => $renderingContext->getVariableProvider()->getByPath('maxTitleLength'),
];

$arguments118 = [
'section' => 'refLineRow',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array120,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
                ';
return $output117;
};

$arguments115 = [
'each' => $renderingContext->getVariableProvider()->getByPath('refLines'),
'as' => 'refLine',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output94 .= '
                </tbody>
            </table>
        </div>
    ';
return $output94;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, static fn() => '', $renderingContext)
;

$output19 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array122 = [
'0' => $renderingContext->getVariableProvider()->getByPath('refFromLines'),
];

$expression123 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments121 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression123(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output124 = '';

$output124 .= '
        <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure126 = function() use ($renderingContext) {
return NULL;
};

$arguments125 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesFromThisItem',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext)]);

$output124 .= '</h3>
        <div class="table-fit">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th class="col-icon"></th>
                    <th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
return NULL;
};

$arguments127 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output124 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
return NULL;
};

$arguments129 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output124 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext) {
return NULL;
};

$arguments131 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output124 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext) {
return NULL;
};

$arguments133 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output124 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure136 = function() use ($renderingContext) {
return NULL;
};

$arguments135 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext)]);

$output124 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext) {
return NULL;
};

$arguments137 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output124 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure140 = function() use ($renderingContext) {
return NULL;
};

$arguments139 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext)]);

$output124 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure142 = function() use ($renderingContext) {
return NULL;
};

$arguments141 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output124 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure144 = function() use ($renderingContext) {
return NULL;
};

$arguments143 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.refString',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext)]);

$output124 .= '</th>
                    <th class="col-control"></th>
                </tr>
                </thead>
                <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure146 = function() use ($renderingContext) {
$output147 = '';

$output147 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure149 = function() use ($renderingContext) {
return NULL;
};

$array150 = [
'line' => $renderingContext->getVariableProvider()->getByPath('refFromLine'),
'maxTitleLength' => $renderingContext->getVariableProvider()->getByPath('maxTitleLength'),
];

$arguments148 = [
'section' => 'refFromLineRow',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array150,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
                ';
return $output147;
};

$arguments145 = [
'each' => $renderingContext->getVariableProvider()->getByPath('refFromLines'),
'as' => 'refFromLine',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output124 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output124 .= '
                </tbody>
            </table>
        </div>
    ';
return $output124;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, static fn() => '', $renderingContext)
;

$output19 .= '
';

    return $output19;
}
/**
 * section fieldRow
 */
public function section_98d2d4b6b7669016b2f2b086cbef3478c9ff911e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output151 = '';

$output151 .= '
    <tr>
        <th class="col-nowrap">';

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldLabel')]);

$output151 .= '</th>
        <td>';

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldValue')]);

$output151 .= '</td>
    </tr>
';

    return $output151;
}
/**
 * section refLineRow
 */
public function section_bf6c41c48a38f988455b8309d12e9080996c546e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output152 = '';

$output152 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array154 = [
'0' => $renderingContext->getVariableProvider()->getByPath('line.record'),
];

$expression155 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments153 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression155(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output156 = '';

$output156 .= '
                <td class="col-icon"><a href="';

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url')]);

$output156 .= '" title="id=';

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid')]);

$output156 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure158 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('line.icon');
};

$arguments157 = [
'value' => NULL,
];

$output156 .= isset($arguments157['value']) ? $arguments157['value'] : $renderChildrenClosure158();

$output156 .= '</a></td>
                <td class="col-title"><a href="';

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url')]);

$output156 .= '" title="[id=';

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid')]);

$output156 .= '] ';

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle')]);

$output156 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure160 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle')]);
};

$arguments159 = [
'maxCharacters' => $renderingContext->getVariableProvider()->getByPath('maxTitleLength'),
'append' => '&hellip;',
'respectWordBoundaries' => true,
'respectHtml' => true,
];

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output156 .= '</a></td>
                <td>';

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title')]);

$output156 .= '</td>
                <td><span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext) {
return NULL;
};

$arguments161 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);

$output156 .= ': ';

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle')]);

$output156 .= ' (uid=';

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid')]);

$output156 .= ')">
                        ';

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid')]);

$output156 .= '
                    </span></td>
            ';
return $output156;
},
'__else' => function() use ($renderingContext) {
$output163 = '';

$output163 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure165 = function() use ($renderingContext) {
return NULL;
};

$arguments164 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext)]);

$output163 .= ' (uid=';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid')]);

$output163 .= ')</td>
                <td>';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title')]);

$output163 .= '</td>
                <td></td>
            ';
return $output163;
},
];

$output152 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, static fn() => '', $renderingContext)
;

$output152 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array167 = [
'0' => $renderingContext->getVariableProvider()->getByPath('line.parentRecord'),
];

$expression168 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments166 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression168(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output169 = '';

$output169 .= '<td title="';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle')]);

$output169 .= ' [ID: ';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecord.uid')]);

$output169 .= ']" class="col-responsive">';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle')]);

$output169 .= '</td>';
return $output169;
},
'__else' => function() use ($renderingContext) {
return '<td></td>';
},
];

$output152 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments166, static fn() => '', $renderingContext)
;

$output152 .= '
        <td title="';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path')]);

$output152 .= '" class="col-responsive">';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path')]);

$output152 .= '</td>
        <td>';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn')]);

$output152 .= '</td>
        <td>';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer')]);

$output152 .= '</td>
        <td>';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key')]);

$output152 .= '</td>
        <td>';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting')]);

$output152 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure171 = function() use ($renderingContext) {
return NULL;
};

$array172 = [
'line' => $renderingContext->getVariableProvider()->getByPath('line.actions'),
];

$arguments170 = [
'section' => 'action',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array172,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output152 .= '
        </td>
    </tr>
';

    return $output152;
}
/**
 * section refFromLineRow
 */
public function section_259ffcb6cbf483b74437a8f396e954e06c115a04(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output173 = '';

$output173 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array175 = [
'0' => $renderingContext->getVariableProvider()->getByPath('line.record'),
];

$expression176 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

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
                <td class="col-icon"><a href="';

$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url')]);

$output177 .= '" title="id=';

$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid')]);

$output177 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure179 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('line.icon');
};

$arguments178 = [
'value' => NULL,
];

$output177 .= isset($arguments178['value']) ? $arguments178['value'] : $renderChildrenClosure179();

$output177 .= '</a></td>
                <td class="col-title"><a href="';

$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url')]);

$output177 .= '" title="[id=';

$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid')]);

$output177 .= '] ';

$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle')]);

$output177 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure181 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle')]);
};

$arguments180 = [
'maxCharacters' => $renderingContext->getVariableProvider()->getByPath('maxTitleLength'),
'append' => '&hellip;',
'respectWordBoundaries' => true,
'respectHtml' => true,
];

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output177 .= '</a></td>
                <td>';

$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title')]);

$output177 .= '</td>
                <td>';

$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid')]);

$output177 .= '</td>
            ';
return $output177;
},
'__else' => function() use ($renderingContext) {
$output182 = '';

$output182 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext) {
return NULL;
};

$arguments183 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);

$output182 .= ' (uid=';

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid')]);

$output182 .= ')</td>
                <td>';

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title')]);

$output182 .= '</td>
                <td></td>
            ';
return $output182;
},
];

$output173 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments174, static fn() => '', $renderingContext)
;

$output173 .= '
        <td title="';

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path')]);

$output173 .= '" class="col-responsive">';

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path')]);

$output173 .= '</td>
        <td>';

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn')]);

$output173 .= '</td>
        <td>';

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer')]);

$output173 .= '</td>
        <td>';

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key')]);

$output173 .= '</td>
        <td>';

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting')]);

$output173 .= '</td>
        <td>';

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_string')]);

$output173 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure186 = function() use ($renderingContext) {
return NULL;
};

$array187 = [
'line' => $renderingContext->getVariableProvider()->getByPath('line.actions'),
];

$arguments185 = [
'section' => 'action',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array187,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output173 .= '
        </td>
    </tr>
';

    return $output173;
}
/**
 * section action
 */
public function section_34eb4c4ef005207e8b8f916b9f1fffacccd6945e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output188 = '';

$output188 .= '
    <div class="btn-group" role="group">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array190 = [
'0' => $renderingContext->getVariableProvider()->getByPath('line.webListUrl'),
];

$expression191 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments189 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression191(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array190)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output192 = '';

$output192 .= '
            <button class="btn btn-default btn-sm" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure195 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('languageColumn.previewUrlAttributes');
};

$arguments194 = [
'value' => NULL,
];

$array196 = [
'0' => $renderingContext->getVariableProvider()->getByPath('languageColumn.previewUrlAttributes'),
];

$expression197 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments193 = [
'then' => isset($arguments194['value']) ? $arguments194['value'] : $renderChildrenClosure195(),
'else' => 'disabled="true"',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression197(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array196)),
    $renderingContext
),
];

$output192 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments193, static fn() => '', $renderingContext)
;

$output192 .= ' title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext) {
return NULL;
};

$arguments198 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showPage',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);

$output192 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure201 = function() use ($renderingContext) {
return NULL;
};

$arguments200 = [
'identifier' => 'actions-document-view',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output192 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output192 .= '
            </button>
        ';
return $output192;
},
];

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, static fn() => '', $renderingContext)
;

$output188 .= '
        <a class="btn btn-default btn-sm" href="';

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordEditUrl')]);

$output188 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure203 = function() use ($renderingContext) {
return NULL;
};

$arguments202 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.edit',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext)]);

$output188 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure205 = function() use ($renderingContext) {
return NULL;
};

$arguments204 = [
'identifier' => 'actions-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output188 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output188 .= '
        </a>
    </div>
    <div class="btn-group" role="group">
        <a class="btn btn-default btn-sm" href="';

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordHistoryUrl')]);

$output188 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure207 = function() use ($renderingContext) {
return NULL;
};

$arguments206 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.history',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext)]);

$output188 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure209 = function() use ($renderingContext) {
return NULL;
};

$arguments208 = [
'identifier' => 'actions-document-history-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output188 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output188 .= '
        </a>
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array211 = [
'0' => $renderingContext->getVariableProvider()->getByPath('line.webListUrl'),
];

$expression212 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments210 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression212(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array211)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output213 = '';

$output213 .= '
        <div class="btn-group" role="group">
            <a class="btn btn-default btn-sm" href="';

$output213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.webListUrl')]);

$output213 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure215 = function() use ($renderingContext) {
return NULL;
};

$arguments214 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showList',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext)]);

$output213 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure217 = function() use ($renderingContext) {
return NULL;
};

$arguments216 = [
'identifier' => 'actions-system-list-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output213 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output213 .= '
            </a>
        </div>
    ';
return $output213;
},
];

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, static fn() => '', $renderingContext)
;

$output188 .= '
';

    return $output188;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output218 = '';

$output218 .= '

';

$output218 .= '';

$output218 .= '

';

$output218 .= '';

$output218 .= '


';

$output218 .= '';

$output218 .= '

';

$output218 .= '';

$output218 .= '

';

$output218 .= '';

$output218 .= '

';

$output218 .= '';

$output218 .= '

';

$output218 .= '';

$output218 .= '


';

    return $output218;
}

}

#