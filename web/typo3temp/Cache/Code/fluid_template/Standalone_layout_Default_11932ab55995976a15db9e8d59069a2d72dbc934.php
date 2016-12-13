<?php
class FluidCache_Standalone_layout_Default_11932ab55995976a15db9e8d59069a2d72dbc934 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '<div class="body-bg';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'navigation.type', $renderingContext));
$output2 = '';

$output2 .= ' body-bg-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments3 = array();
$arguments3['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'navigation.type', $renderingContext);
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = NULL;
$arguments3['doubleEncode'] = true;
$renderChildrenClosure4 = function() {return NULL;};
$value5 = ($arguments3['value'] !== NULL ? $arguments3['value'] : $renderChildrenClosure4());

$output2 .= (!is_string($value5) ? $value5 : htmlspecialchars($value5, ($arguments3['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments3['encoding'] !== NULL ? $arguments3['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments3['doubleEncode']));
$arguments1['then'] = $output2;
$arguments1['else'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure6, $renderingContext);

$output0 .= '">

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments7 = array();
$arguments7['class'] = 'sr-only sr-only-focusable';
$arguments7['section'] = 'content';
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['pageUid'] = NULL;
$arguments7['additionalParams'] = array (
);
$arguments7['pageType'] = 0;
$arguments7['noCache'] = false;
$arguments7['noCacheHash'] = false;
$arguments7['linkAccessRestrictedPages'] = false;
$arguments7['absolute'] = false;
$arguments7['addQueryString'] = false;
$arguments7['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments7['addQueryStringMethod'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['target'] = NULL;
$arguments7['rel'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments10 = array();
$arguments10['key'] = 'skiptomaincontent';
$arguments10['extensionName'] = 'bootstrap_package';
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['arguments'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
    ';
return $output9;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper12->setArguments($arguments7);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments13 = array();
$arguments13['partial'] = 'Navigation/Main';
$arguments13['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments13['section'] = NULL;
$arguments13['optional'] = false;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments15 = array();
$arguments15['partial'] = 'Navigation/Breadcrumb';
$arguments15['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments15['section'] = NULL;
$arguments15['optional'] = false;
$renderChildrenClosure16 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '

    <div id="content" class="main-section">
        <!--TYPO3SEARCH_begin-->
        <section id="p';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments17 = array();
$arguments17['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments17['keepQuotes'] = false;
$arguments17['encoding'] = NULL;
$arguments17['doubleEncode'] = true;
$renderChildrenClosure18 = function() {return NULL;};
$value19 = ($arguments17['value'] !== NULL ? $arguments17['value'] : $renderChildrenClosure18());

$output0 .= (!is_string($value19) ? $value19 : htmlspecialchars($value19, ($arguments17['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments17['encoding'] !== NULL ? $arguments17['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments17['doubleEncode']));

$output0 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments20 = array();
$arguments20['value'] = $currentVariableContainer->getOrNull('pageClass');
$arguments20['keepQuotes'] = false;
$arguments20['encoding'] = NULL;
$arguments20['doubleEncode'] = true;
$renderChildrenClosure21 = function() {return NULL;};
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());

$output0 .= (!is_string($value22) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments20['encoding'] !== NULL ? $arguments20['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments20['doubleEncode']));

$output0 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments23 = array();
$arguments23['section'] = 'Main';
$arguments23['partial'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['optional'] = false;
$renderChildrenClosure24 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
        </section>
        <!--TYPO3SEARCH_end-->
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments25 = array();
$arguments25['partial'] = 'Structure/Footer';
$arguments25['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments25['section'] = NULL;
$arguments25['optional'] = false;
$renderChildrenClosure26 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output0 .= '

</div>
';


return $output0;
}


}
#1481646609    8256      