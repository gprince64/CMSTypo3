<?php
class FluidCache_Standalone_template_file_BootstrapPackageCarousel_80e7062f617c449c2f3fc154e6dd9bfebfd371fc extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Header
 */
public function section_31341c6f0c7af677ffb8fadcb92038e8ac2b6193(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'Header/All';
$arguments1['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments1['section'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';


return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output3 = '';

$output3 .= '

    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\DataRelationViewHelper
$arguments4 = array();
$arguments4['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments4['table'] = 'tx_bootstrappackage_carousel_item';
$arguments4['foreignField'] = 'tt_content';
$arguments4['selectFields'] = '*';
$arguments4['as'] = 'items';
$arguments4['sortby'] = 'sorting ASC';
$arguments4['additionalWhere'] = '';
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('items'));
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
            <div id="carousel-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output9 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output9 .= '"
                 class="carousel slide';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments13 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments14 = array();
$arguments14['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'layout', $renderingContext);
$arguments14['keepQuotes'] = false;
$arguments14['encoding'] = NULL;
$arguments14['doubleEncode'] = true;
$renderChildrenClosure15 = function() {return NULL;};
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());
$arguments13['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value16) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments14['encoding'] !== NULL ? $arguments14['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments14['doubleEncode'])), 110);
$arguments13['then'] = ' carousel-small';
$arguments13['else'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure17, $renderingContext);

$output9 .= '"
                 data-interval="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.interval', $renderingContext);
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() {return NULL;};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());

$output9 .= (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));

$output9 .= '"
                 data-wrap="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.wrap', $renderingContext);
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output9 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));

$output9 .= '"
                 data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments24 = array();
$arguments24['each'] = $currentVariableContainer->getOrNull('items');
$arguments24['as'] = 'item';
$arguments24['iteration'] = 'iteration';
$arguments24['key'] = '';
$arguments24['reverse'] = false;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments27 = array();
$arguments27['name'] = 'itemStyleImage';
$arguments27['value'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\FalViewHelper
$arguments30 = array();
$arguments30['data'] = $currentVariableContainer->getOrNull('item');
$arguments30['as'] = 'images';
$arguments30['field'] = 'background_image';
$arguments30['table'] = 'tx_bootstrappackage_carousel_item';
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments33 = array();
// Rendering Boolean node
$arguments33['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('images'));
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
                                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments36 = array();
$arguments36['name'] = 'backgroundImagePath';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments37 = array();
$arguments37['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('images'), '0.uid', $renderingContext);
// Rendering Boolean node
$arguments37['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments37['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.background_image_maxwidth', $renderingContext);
$arguments37['image'] = NULL;
$arguments37['width'] = NULL;
$arguments37['height'] = NULL;
$arguments37['minWidth'] = NULL;
$arguments37['minHeight'] = NULL;
$arguments37['maxHeight'] = NULL;
$arguments37['crop'] = NULL;
$arguments37['absolute'] = false;
$renderChildrenClosure38 = function() {return NULL;};
$arguments36['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);
$renderChildrenClosure39 = function() {return NULL;};

$output35 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments36, $renderChildrenClosure39, $renderingContext);

$output35 .= '
                                    background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = $currentVariableContainer->getOrNull('backgroundImagePath');
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output35 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output35 .= '\');
                                    filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = $currentVariableContainer->getOrNull('backgroundImagePath');
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = NULL;
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() {return NULL;};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());

$output35 .= (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments43['encoding'] !== NULL ? $arguments43['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments43['doubleEncode']));

$output35 .= '\',
                                    sizingMethod=\'scale\');
                                    -ms-filter:
                                    "progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments46 = array();
$arguments46['value'] = $currentVariableContainer->getOrNull('backgroundImagePath');
$arguments46['keepQuotes'] = false;
$arguments46['encoding'] = NULL;
$arguments46['doubleEncode'] = true;
$renderChildrenClosure47 = function() {return NULL;};
$value48 = ($arguments46['value'] !== NULL ? $arguments46['value'] : $renderChildrenClosure47());

$output35 .= (!is_string($value48) ? $value48 : htmlspecialchars($value48, ($arguments46['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments46['encoding'] !== NULL ? $arguments46['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments46['doubleEncode']));

$output35 .= '\',
                                    sizingMethod=\'scale\')";
                                ';
return $output35;
};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
                            ';
return $output32;
};

$output29 .= BK2K\BootstrapPackage\ViewHelpers\FalViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
                        ';
return $output29;
};

$output26 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments49 = array();
$arguments49['name'] = 'itemStyleColor';
$arguments49['value'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments52 = array();
// Rendering Boolean node
$arguments52['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'background_color', $renderingContext));
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= 'background-color: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments55 = array();
$arguments55['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'background_color', $renderingContext);
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = NULL;
$arguments55['doubleEncode'] = true;
$renderChildrenClosure56 = function() {return NULL;};
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());

$output54 .= (!is_string($value57) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments55['encoding'] !== NULL ? $arguments55['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments55['doubleEncode']));

$output54 .= ';';
return $output54;
};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
                        ';
return $output51;
};

$output26 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output26 .= '
                        <div
                            class="item';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments58 = array();
// Rendering Boolean node
$arguments58['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'isFirst', $renderingContext));
$arguments58['then'] = ' active';
$arguments58['else'] = NULL;
$renderChildrenClosure59 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output26 .= ' carousel-item-type carousel-item-type-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
$arguments60['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'item_type', $renderingContext);
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = NULL;
$arguments60['doubleEncode'] = true;
$renderChildrenClosure61 = function() {return NULL;};
$value62 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure61());

$output26 .= (!is_string($value62) ? $value62 : htmlspecialchars($value62, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments60['encoding'] !== NULL ? $arguments60['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments60['doubleEncode']));

$output26 .= '"
                            data-itemno="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments63 = array();
$arguments63['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'index', $renderingContext);
$arguments63['keepQuotes'] = false;
$arguments63['encoding'] = NULL;
$arguments63['doubleEncode'] = true;
$renderChildrenClosure64 = function() {return NULL;};
$value65 = ($arguments63['value'] !== NULL ? $arguments63['value'] : $renderChildrenClosure64());

$output26 .= (!is_string($value65) ? $value65 : htmlspecialchars($value65, ($arguments63['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments63['encoding'] !== NULL ? $arguments63['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments63['doubleEncode']));

$output26 .= '" style="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments66 = array();
$arguments66['value'] = $currentVariableContainer->getOrNull('itemStyleImage');
$arguments66['keepQuotes'] = false;
$arguments66['encoding'] = NULL;
$arguments66['doubleEncode'] = true;
$renderChildrenClosure67 = function() {return NULL;};
$value68 = ($arguments66['value'] !== NULL ? $arguments66['value'] : $renderChildrenClosure67());

$output26 .= (!is_string($value68) ? $value68 : htmlspecialchars($value68, ($arguments66['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments66['encoding'] !== NULL ? $arguments66['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments66['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments69 = array();
$arguments69['value'] = $currentVariableContainer->getOrNull('itemStyleColor');
$arguments69['keepQuotes'] = false;
$arguments69['encoding'] = NULL;
$arguments69['doubleEncode'] = true;
$renderChildrenClosure70 = function() {return NULL;};
$value71 = ($arguments69['value'] !== NULL ? $arguments69['value'] : $renderChildrenClosure70());

$output26 .= (!is_string($value71) ? $value71 : htmlspecialchars($value71, ($arguments69['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments69['encoding'] !== NULL ? $arguments69['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments69['doubleEncode']));

$output26 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments72 = array();
$arguments72['expression'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'item_type', $renderingContext);
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments75 = array();
$arguments75['value'] = 'header';
$arguments75['default'] = false;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments78 = array();
$arguments78['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'link', $renderingContext);
// Rendering Array
$array79 = array();
$array79['draggable'] = 'false';
$arguments78['additionalAttributes'] = $array79;
$arguments78['data'] = NULL;
$arguments78['additionalParams'] = array (
);
$arguments78['pageType'] = 0;
$arguments78['noCache'] = false;
$arguments78['noCacheHash'] = false;
$arguments78['section'] = '';
$arguments78['linkAccessRestrictedPages'] = false;
$arguments78['absolute'] = false;
$arguments78['addQueryString'] = false;
$arguments78['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments78['addQueryStringMethod'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['target'] = NULL;
$arguments78['rel'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments82 = array();
$arguments82['partial'] = 'Carousel/Item/Header';
$arguments82['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments82['section'] = NULL;
$arguments82['optional'] = false;
$renderChildrenClosure83 = function() {return NULL;};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                                    ';
return $output81;
};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper84->setArguments($arguments78);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output77 .= $viewHelper84->initializeArgumentsAndRender();

$output77 .= '
                                ';
return $output77;
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments85 = array();
$arguments85['value'] = 'textandimage';
$arguments85['default'] = false;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments88 = array();
$arguments88['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'link', $renderingContext);
// Rendering Array
$array89 = array();
$array89['draggable'] = 'false';
$arguments88['additionalAttributes'] = $array89;
$arguments88['data'] = NULL;
$arguments88['additionalParams'] = array (
);
$arguments88['pageType'] = 0;
$arguments88['noCache'] = false;
$arguments88['noCacheHash'] = false;
$arguments88['section'] = '';
$arguments88['linkAccessRestrictedPages'] = false;
$arguments88['absolute'] = false;
$arguments88['addQueryString'] = false;
$arguments88['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments88['addQueryStringMethod'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['target'] = NULL;
$arguments88['rel'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output91 = '';

$output91 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments92 = array();
$arguments92['partial'] = 'Carousel/Item/TextAndImage';
$arguments92['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments92['section'] = NULL;
$arguments92['optional'] = false;
$renderChildrenClosure93 = function() {return NULL;};

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
                                    ';
return $output91;
};
$viewHelper94 = $self->getViewHelper('$viewHelper94', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper94->setArguments($arguments88);
$viewHelper94->setRenderingContext($renderingContext);
$viewHelper94->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output87 .= $viewHelper94->initializeArgumentsAndRender();

$output87 .= '
                                ';
return $output87;
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output74 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments95 = array();
$arguments95['value'] = 'html';
$arguments95['default'] = false;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments97 = array();
$arguments97['value'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'bodytext', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output74 .= '
                            ';
return $output74;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output26 .= '
                        </div>
                    ';
return $output26;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output9 .= '
                </div>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments99 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments100 = array();
$arguments100['subject'] = NULL;
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('items');
};
$arguments99['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext), 1);
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output103 = '';

$output103 .= '
                    <ol class="carousel-indicators">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments104 = array();
$arguments104['each'] = $currentVariableContainer->getOrNull('items');
$arguments104['as'] = 'item';
$arguments104['iteration'] = 'iteration';
$arguments104['key'] = '';
$arguments104['reverse'] = false;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output106 = '';

$output106 .= '
                            <li data-target="#carousel-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments107 = array();
$arguments107['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments107['keepQuotes'] = false;
$arguments107['encoding'] = NULL;
$arguments107['doubleEncode'] = true;
$renderChildrenClosure108 = function() {return NULL;};
$value109 = ($arguments107['value'] !== NULL ? $arguments107['value'] : $renderChildrenClosure108());

$output106 .= (!is_string($value109) ? $value109 : htmlspecialchars($value109, ($arguments107['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments107['encoding'] !== NULL ? $arguments107['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments107['doubleEncode']));

$output106 .= '" data-slide-to="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments110 = array();
$arguments110['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'index', $renderingContext);
$arguments110['keepQuotes'] = false;
$arguments110['encoding'] = NULL;
$arguments110['doubleEncode'] = true;
$renderChildrenClosure111 = function() {return NULL;};
$value112 = ($arguments110['value'] !== NULL ? $arguments110['value'] : $renderChildrenClosure111());

$output106 .= (!is_string($value112) ? $value112 : htmlspecialchars($value112, ($arguments110['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments110['encoding'] !== NULL ? $arguments110['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments110['doubleEncode']));

$output106 .= '"
                                class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments113 = array();
// Rendering Boolean node
$arguments113['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'isFirst', $renderingContext));
$arguments113['then'] = 'active';
$arguments113['else'] = NULL;
$renderChildrenClosure114 = function() {return NULL;};

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output106 .= '"></li>
                        ';
return $output106;
};

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '
                    </ol>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments115 = array();
$arguments115['class'] = 'left carousel-control';
// Rendering Array
$array116 = array();
$array116['data-slide'] = 'prev';
$array116['role'] = 'button';
$arguments115['additionalAttributes'] = $array116;
$output117 = '';

$output117 .= 'carousel-';

$output117 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments115['section'] = $output117;
$arguments115['data'] = NULL;
$arguments115['pageUid'] = NULL;
$arguments115['additionalParams'] = array (
);
$arguments115['pageType'] = 0;
$arguments115['noCache'] = false;
$arguments115['noCacheHash'] = false;
$arguments115['linkAccessRestrictedPages'] = false;
$arguments115['absolute'] = false;
$arguments115['addQueryString'] = false;
$arguments115['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments115['addQueryStringMethod'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['target'] = NULL;
$arguments115['rel'] = NULL;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output119 = '';

$output119 .= '
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments120 = array();
$arguments120['key'] = 'previous';
$arguments120['extensionName'] = 'bootstrap_package';
$arguments120['id'] = NULL;
$arguments120['default'] = NULL;
$arguments120['htmlEscape'] = NULL;
$arguments120['arguments'] = NULL;
$renderChildrenClosure121 = function() {return NULL;};

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '</span>
                    ';
return $output119;
};
$viewHelper122 = $self->getViewHelper('$viewHelper122', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper122->setArguments($arguments115);
$viewHelper122->setRenderingContext($renderingContext);
$viewHelper122->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output103 .= $viewHelper122->initializeArgumentsAndRender();

$output103 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments123 = array();
$arguments123['class'] = 'right carousel-control';
// Rendering Array
$array124 = array();
$array124['data-slide'] = 'next';
$array124['role'] = 'button';
$arguments123['additionalAttributes'] = $array124;
$output125 = '';

$output125 .= 'carousel-';

$output125 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments123['section'] = $output125;
$arguments123['data'] = NULL;
$arguments123['pageUid'] = NULL;
$arguments123['additionalParams'] = array (
);
$arguments123['pageType'] = 0;
$arguments123['noCache'] = false;
$arguments123['noCacheHash'] = false;
$arguments123['linkAccessRestrictedPages'] = false;
$arguments123['absolute'] = false;
$arguments123['addQueryString'] = false;
$arguments123['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments123['addQueryStringMethod'] = NULL;
$arguments123['dir'] = NULL;
$arguments123['id'] = NULL;
$arguments123['lang'] = NULL;
$arguments123['style'] = NULL;
$arguments123['title'] = NULL;
$arguments123['accesskey'] = NULL;
$arguments123['tabindex'] = NULL;
$arguments123['onclick'] = NULL;
$arguments123['target'] = NULL;
$arguments123['rel'] = NULL;
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output127 = '';

$output127 .= '
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments128 = array();
$arguments128['key'] = 'next';
$arguments128['extensionName'] = 'bootstrap_package';
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['htmlEscape'] = NULL;
$arguments128['arguments'] = NULL;
$renderChildrenClosure129 = function() {return NULL;};

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '</span>
                    ';
return $output127;
};
$viewHelper130 = $self->getViewHelper('$viewHelper130', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper130->setArguments($arguments123);
$viewHelper130->setRenderingContext($renderingContext);
$viewHelper130->setRenderChildrenClosure($renderChildrenClosure126);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output103 .= $viewHelper130->initializeArgumentsAndRender();

$output103 .= '
                ';
return $output103;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure102, $renderingContext);

$output9 .= '
            </div>
        ';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
    ';
return $output6;
};

$output3 .= BK2K\BootstrapPackage\ViewHelpers\DataRelationViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

';


return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output131 = '';

$output131 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments132 = array();
$arguments132['name'] = 'Default';
$renderChildrenClosure133 = function() {return NULL;};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper134->setArguments($arguments132);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure133);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output131 .= $viewHelper134->initializeArgumentsAndRender();

$output131 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments135 = array();
$arguments135['name'] = 'Header';
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output137 = '';

$output137 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments138 = array();
$arguments138['partial'] = 'Header/All';
$arguments138['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments138['section'] = NULL;
$arguments138['optional'] = false;
$renderChildrenClosure139 = function() {return NULL;};

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '

';
return $output137;
};

$output131 .= '';

$output131 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments140 = array();
$arguments140['name'] = 'Main';
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output142 = '';

$output142 .= '

    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\DataRelationViewHelper
$arguments143 = array();
$arguments143['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments143['table'] = 'tx_bootstrappackage_carousel_item';
$arguments143['foreignField'] = 'tt_content';
$arguments143['selectFields'] = '*';
$arguments143['as'] = 'items';
$arguments143['sortby'] = 'sorting ASC';
$arguments143['additionalWhere'] = '';
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output145 = '';

$output145 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments146 = array();
// Rendering Boolean node
$arguments146['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('items'));
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output148 = '';

$output148 .= '
            <div id="carousel-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments149 = array();
$arguments149['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments149['keepQuotes'] = false;
$arguments149['encoding'] = NULL;
$arguments149['doubleEncode'] = true;
$renderChildrenClosure150 = function() {return NULL;};
$value151 = ($arguments149['value'] !== NULL ? $arguments149['value'] : $renderChildrenClosure150());

$output148 .= (!is_string($value151) ? $value151 : htmlspecialchars($value151, ($arguments149['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments149['encoding'] !== NULL ? $arguments149['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments149['doubleEncode']));

$output148 .= '"
                 class="carousel slide';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments152 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments153 = array();
$arguments153['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'layout', $renderingContext);
$arguments153['keepQuotes'] = false;
$arguments153['encoding'] = NULL;
$arguments153['doubleEncode'] = true;
$renderChildrenClosure154 = function() {return NULL;};
$value155 = ($arguments153['value'] !== NULL ? $arguments153['value'] : $renderChildrenClosure154());
$arguments152['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value155) ? $value155 : htmlspecialchars($value155, ($arguments153['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments153['encoding'] !== NULL ? $arguments153['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments153['doubleEncode'])), 110);
$arguments152['then'] = ' carousel-small';
$arguments152['else'] = NULL;
$renderChildrenClosure156 = function() {return NULL;};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure156, $renderingContext);

$output148 .= '"
                 data-interval="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments157 = array();
$arguments157['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.interval', $renderingContext);
$arguments157['keepQuotes'] = false;
$arguments157['encoding'] = NULL;
$arguments157['doubleEncode'] = true;
$renderChildrenClosure158 = function() {return NULL;};
$value159 = ($arguments157['value'] !== NULL ? $arguments157['value'] : $renderChildrenClosure158());

$output148 .= (!is_string($value159) ? $value159 : htmlspecialchars($value159, ($arguments157['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments157['encoding'] !== NULL ? $arguments157['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments157['doubleEncode']));

$output148 .= '"
                 data-wrap="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments160 = array();
$arguments160['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.wrap', $renderingContext);
$arguments160['keepQuotes'] = false;
$arguments160['encoding'] = NULL;
$arguments160['doubleEncode'] = true;
$renderChildrenClosure161 = function() {return NULL;};
$value162 = ($arguments160['value'] !== NULL ? $arguments160['value'] : $renderChildrenClosure161());

$output148 .= (!is_string($value162) ? $value162 : htmlspecialchars($value162, ($arguments160['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments160['encoding'] !== NULL ? $arguments160['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments160['doubleEncode']));

$output148 .= '"
                 data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments163 = array();
$arguments163['each'] = $currentVariableContainer->getOrNull('items');
$arguments163['as'] = 'item';
$arguments163['iteration'] = 'iteration';
$arguments163['key'] = '';
$arguments163['reverse'] = false;
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output165 = '';

$output165 .= '
                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments166 = array();
$arguments166['name'] = 'itemStyleImage';
$arguments166['value'] = NULL;
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output168 = '';

$output168 .= '
                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\FalViewHelper
$arguments169 = array();
$arguments169['data'] = $currentVariableContainer->getOrNull('item');
$arguments169['as'] = 'images';
$arguments169['field'] = 'background_image';
$arguments169['table'] = 'tx_bootstrappackage_carousel_item';
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output171 = '';

$output171 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments172 = array();
// Rendering Boolean node
$arguments172['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('images'));
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output174 = '';

$output174 .= '
                                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments175 = array();
$arguments175['name'] = 'backgroundImagePath';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments176 = array();
$arguments176['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('images'), '0.uid', $renderingContext);
// Rendering Boolean node
$arguments176['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments176['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.background_image_maxwidth', $renderingContext);
$arguments176['image'] = NULL;
$arguments176['width'] = NULL;
$arguments176['height'] = NULL;
$arguments176['minWidth'] = NULL;
$arguments176['minHeight'] = NULL;
$arguments176['maxHeight'] = NULL;
$arguments176['crop'] = NULL;
$arguments176['absolute'] = false;
$renderChildrenClosure177 = function() {return NULL;};
$arguments175['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);
$renderChildrenClosure178 = function() {return NULL;};

$output174 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments175, $renderChildrenClosure178, $renderingContext);

$output174 .= '
                                    background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments179 = array();
$arguments179['value'] = $currentVariableContainer->getOrNull('backgroundImagePath');
$arguments179['keepQuotes'] = false;
$arguments179['encoding'] = NULL;
$arguments179['doubleEncode'] = true;
$renderChildrenClosure180 = function() {return NULL;};
$value181 = ($arguments179['value'] !== NULL ? $arguments179['value'] : $renderChildrenClosure180());

$output174 .= (!is_string($value181) ? $value181 : htmlspecialchars($value181, ($arguments179['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments179['encoding'] !== NULL ? $arguments179['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments179['doubleEncode']));

$output174 .= '\');
                                    filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments182 = array();
$arguments182['value'] = $currentVariableContainer->getOrNull('backgroundImagePath');
$arguments182['keepQuotes'] = false;
$arguments182['encoding'] = NULL;
$arguments182['doubleEncode'] = true;
$renderChildrenClosure183 = function() {return NULL;};
$value184 = ($arguments182['value'] !== NULL ? $arguments182['value'] : $renderChildrenClosure183());

$output174 .= (!is_string($value184) ? $value184 : htmlspecialchars($value184, ($arguments182['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments182['encoding'] !== NULL ? $arguments182['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments182['doubleEncode']));

$output174 .= '\',
                                    sizingMethod=\'scale\');
                                    -ms-filter:
                                    "progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments185 = array();
$arguments185['value'] = $currentVariableContainer->getOrNull('backgroundImagePath');
$arguments185['keepQuotes'] = false;
$arguments185['encoding'] = NULL;
$arguments185['doubleEncode'] = true;
$renderChildrenClosure186 = function() {return NULL;};
$value187 = ($arguments185['value'] !== NULL ? $arguments185['value'] : $renderChildrenClosure186());

$output174 .= (!is_string($value187) ? $value187 : htmlspecialchars($value187, ($arguments185['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments185['encoding'] !== NULL ? $arguments185['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments185['doubleEncode']));

$output174 .= '\',
                                    sizingMethod=\'scale\')";
                                ';
return $output174;
};

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
                            ';
return $output171;
};

$output168 .= BK2K\BootstrapPackage\ViewHelpers\FalViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
                        ';
return $output168;
};

$output165 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output165 .= '
                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments188 = array();
$arguments188['name'] = 'itemStyleColor';
$arguments188['value'] = NULL;
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output190 = '';

$output190 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments191 = array();
// Rendering Boolean node
$arguments191['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'background_color', $renderingContext));
$arguments191['then'] = NULL;
$arguments191['else'] = NULL;
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output193 = '';

$output193 .= 'background-color: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments194 = array();
$arguments194['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'background_color', $renderingContext);
$arguments194['keepQuotes'] = false;
$arguments194['encoding'] = NULL;
$arguments194['doubleEncode'] = true;
$renderChildrenClosure195 = function() {return NULL;};
$value196 = ($arguments194['value'] !== NULL ? $arguments194['value'] : $renderChildrenClosure195());

$output193 .= (!is_string($value196) ? $value196 : htmlspecialchars($value196, ($arguments194['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments194['encoding'] !== NULL ? $arguments194['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments194['doubleEncode']));

$output193 .= ';';
return $output193;
};

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output190 .= '
                        ';
return $output190;
};

$output165 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output165 .= '
                        <div
                            class="item';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments197 = array();
// Rendering Boolean node
$arguments197['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'isFirst', $renderingContext));
$arguments197['then'] = ' active';
$arguments197['else'] = NULL;
$renderChildrenClosure198 = function() {return NULL;};

$output165 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output165 .= ' carousel-item-type carousel-item-type-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments199 = array();
$arguments199['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'item_type', $renderingContext);
$arguments199['keepQuotes'] = false;
$arguments199['encoding'] = NULL;
$arguments199['doubleEncode'] = true;
$renderChildrenClosure200 = function() {return NULL;};
$value201 = ($arguments199['value'] !== NULL ? $arguments199['value'] : $renderChildrenClosure200());

$output165 .= (!is_string($value201) ? $value201 : htmlspecialchars($value201, ($arguments199['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments199['encoding'] !== NULL ? $arguments199['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments199['doubleEncode']));

$output165 .= '"
                            data-itemno="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments202 = array();
$arguments202['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'index', $renderingContext);
$arguments202['keepQuotes'] = false;
$arguments202['encoding'] = NULL;
$arguments202['doubleEncode'] = true;
$renderChildrenClosure203 = function() {return NULL;};
$value204 = ($arguments202['value'] !== NULL ? $arguments202['value'] : $renderChildrenClosure203());

$output165 .= (!is_string($value204) ? $value204 : htmlspecialchars($value204, ($arguments202['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments202['encoding'] !== NULL ? $arguments202['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments202['doubleEncode']));

$output165 .= '" style="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments205 = array();
$arguments205['value'] = $currentVariableContainer->getOrNull('itemStyleImage');
$arguments205['keepQuotes'] = false;
$arguments205['encoding'] = NULL;
$arguments205['doubleEncode'] = true;
$renderChildrenClosure206 = function() {return NULL;};
$value207 = ($arguments205['value'] !== NULL ? $arguments205['value'] : $renderChildrenClosure206());

$output165 .= (!is_string($value207) ? $value207 : htmlspecialchars($value207, ($arguments205['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments205['encoding'] !== NULL ? $arguments205['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments205['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments208 = array();
$arguments208['value'] = $currentVariableContainer->getOrNull('itemStyleColor');
$arguments208['keepQuotes'] = false;
$arguments208['encoding'] = NULL;
$arguments208['doubleEncode'] = true;
$renderChildrenClosure209 = function() {return NULL;};
$value210 = ($arguments208['value'] !== NULL ? $arguments208['value'] : $renderChildrenClosure209());

$output165 .= (!is_string($value210) ? $value210 : htmlspecialchars($value210, ($arguments208['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments208['encoding'] !== NULL ? $arguments208['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments208['doubleEncode']));

$output165 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments211 = array();
$arguments211['expression'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'item_type', $renderingContext);
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output213 = '';

$output213 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments214 = array();
$arguments214['value'] = 'header';
$arguments214['default'] = false;
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output216 = '';

$output216 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments217 = array();
$arguments217['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'link', $renderingContext);
// Rendering Array
$array218 = array();
$array218['draggable'] = 'false';
$arguments217['additionalAttributes'] = $array218;
$arguments217['data'] = NULL;
$arguments217['additionalParams'] = array (
);
$arguments217['pageType'] = 0;
$arguments217['noCache'] = false;
$arguments217['noCacheHash'] = false;
$arguments217['section'] = '';
$arguments217['linkAccessRestrictedPages'] = false;
$arguments217['absolute'] = false;
$arguments217['addQueryString'] = false;
$arguments217['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments217['addQueryStringMethod'] = NULL;
$arguments217['class'] = NULL;
$arguments217['dir'] = NULL;
$arguments217['id'] = NULL;
$arguments217['lang'] = NULL;
$arguments217['style'] = NULL;
$arguments217['title'] = NULL;
$arguments217['accesskey'] = NULL;
$arguments217['tabindex'] = NULL;
$arguments217['onclick'] = NULL;
$arguments217['target'] = NULL;
$arguments217['rel'] = NULL;
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output220 = '';

$output220 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments221 = array();
$arguments221['partial'] = 'Carousel/Item/Header';
$arguments221['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments221['section'] = NULL;
$arguments221['optional'] = false;
$renderChildrenClosure222 = function() {return NULL;};

$output220 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output220 .= '
                                    ';
return $output220;
};
$viewHelper223 = $self->getViewHelper('$viewHelper223', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper223->setArguments($arguments217);
$viewHelper223->setRenderingContext($renderingContext);
$viewHelper223->setRenderChildrenClosure($renderChildrenClosure219);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output216 .= $viewHelper223->initializeArgumentsAndRender();

$output216 .= '
                                ';
return $output216;
};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments224 = array();
$arguments224['value'] = 'textandimage';
$arguments224['default'] = false;
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output226 = '';

$output226 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments227 = array();
$arguments227['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'link', $renderingContext);
// Rendering Array
$array228 = array();
$array228['draggable'] = 'false';
$arguments227['additionalAttributes'] = $array228;
$arguments227['data'] = NULL;
$arguments227['additionalParams'] = array (
);
$arguments227['pageType'] = 0;
$arguments227['noCache'] = false;
$arguments227['noCacheHash'] = false;
$arguments227['section'] = '';
$arguments227['linkAccessRestrictedPages'] = false;
$arguments227['absolute'] = false;
$arguments227['addQueryString'] = false;
$arguments227['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments227['addQueryStringMethod'] = NULL;
$arguments227['class'] = NULL;
$arguments227['dir'] = NULL;
$arguments227['id'] = NULL;
$arguments227['lang'] = NULL;
$arguments227['style'] = NULL;
$arguments227['title'] = NULL;
$arguments227['accesskey'] = NULL;
$arguments227['tabindex'] = NULL;
$arguments227['onclick'] = NULL;
$arguments227['target'] = NULL;
$arguments227['rel'] = NULL;
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output230 = '';

$output230 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments231 = array();
$arguments231['partial'] = 'Carousel/Item/TextAndImage';
$arguments231['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments231['section'] = NULL;
$arguments231['optional'] = false;
$renderChildrenClosure232 = function() {return NULL;};

$output230 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= '
                                    ';
return $output230;
};
$viewHelper233 = $self->getViewHelper('$viewHelper233', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper233->setArguments($arguments227);
$viewHelper233->setRenderingContext($renderingContext);
$viewHelper233->setRenderChildrenClosure($renderChildrenClosure229);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output226 .= $viewHelper233->initializeArgumentsAndRender();

$output226 .= '
                                ';
return $output226;
};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output213 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments234 = array();
$arguments234['value'] = 'html';
$arguments234['default'] = false;
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments236 = array();
$arguments236['value'] = NULL;
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'bodytext', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);
};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output213 .= '
                            ';
return $output213;
};

$output165 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output165 .= '
                        </div>
                    ';
return $output165;
};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output148 .= '
                </div>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments238 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments239 = array();
$arguments239['subject'] = NULL;
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('items');
};
$arguments238['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext), 1);
$arguments238['then'] = NULL;
$arguments238['else'] = NULL;
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output242 = '';

$output242 .= '
                    <ol class="carousel-indicators">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments243 = array();
$arguments243['each'] = $currentVariableContainer->getOrNull('items');
$arguments243['as'] = 'item';
$arguments243['iteration'] = 'iteration';
$arguments243['key'] = '';
$arguments243['reverse'] = false;
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output245 = '';

$output245 .= '
                            <li data-target="#carousel-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments246 = array();
$arguments246['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments246['keepQuotes'] = false;
$arguments246['encoding'] = NULL;
$arguments246['doubleEncode'] = true;
$renderChildrenClosure247 = function() {return NULL;};
$value248 = ($arguments246['value'] !== NULL ? $arguments246['value'] : $renderChildrenClosure247());

$output245 .= (!is_string($value248) ? $value248 : htmlspecialchars($value248, ($arguments246['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments246['encoding'] !== NULL ? $arguments246['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments246['doubleEncode']));

$output245 .= '" data-slide-to="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments249 = array();
$arguments249['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'index', $renderingContext);
$arguments249['keepQuotes'] = false;
$arguments249['encoding'] = NULL;
$arguments249['doubleEncode'] = true;
$renderChildrenClosure250 = function() {return NULL;};
$value251 = ($arguments249['value'] !== NULL ? $arguments249['value'] : $renderChildrenClosure250());

$output245 .= (!is_string($value251) ? $value251 : htmlspecialchars($value251, ($arguments249['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments249['encoding'] !== NULL ? $arguments249['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments249['doubleEncode']));

$output245 .= '"
                                class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments252 = array();
// Rendering Boolean node
$arguments252['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'isFirst', $renderingContext));
$arguments252['then'] = 'active';
$arguments252['else'] = NULL;
$renderChildrenClosure253 = function() {return NULL;};

$output245 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output245 .= '"></li>
                        ';
return $output245;
};

$output242 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output242 .= '
                    </ol>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments254 = array();
$arguments254['class'] = 'left carousel-control';
// Rendering Array
$array255 = array();
$array255['data-slide'] = 'prev';
$array255['role'] = 'button';
$arguments254['additionalAttributes'] = $array255;
$output256 = '';

$output256 .= 'carousel-';

$output256 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments254['section'] = $output256;
$arguments254['data'] = NULL;
$arguments254['pageUid'] = NULL;
$arguments254['additionalParams'] = array (
);
$arguments254['pageType'] = 0;
$arguments254['noCache'] = false;
$arguments254['noCacheHash'] = false;
$arguments254['linkAccessRestrictedPages'] = false;
$arguments254['absolute'] = false;
$arguments254['addQueryString'] = false;
$arguments254['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments254['addQueryStringMethod'] = NULL;
$arguments254['dir'] = NULL;
$arguments254['id'] = NULL;
$arguments254['lang'] = NULL;
$arguments254['style'] = NULL;
$arguments254['title'] = NULL;
$arguments254['accesskey'] = NULL;
$arguments254['tabindex'] = NULL;
$arguments254['onclick'] = NULL;
$arguments254['target'] = NULL;
$arguments254['rel'] = NULL;
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output258 = '';

$output258 .= '
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments259 = array();
$arguments259['key'] = 'previous';
$arguments259['extensionName'] = 'bootstrap_package';
$arguments259['id'] = NULL;
$arguments259['default'] = NULL;
$arguments259['htmlEscape'] = NULL;
$arguments259['arguments'] = NULL;
$renderChildrenClosure260 = function() {return NULL;};

$output258 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output258 .= '</span>
                    ';
return $output258;
};
$viewHelper261 = $self->getViewHelper('$viewHelper261', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper261->setArguments($arguments254);
$viewHelper261->setRenderingContext($renderingContext);
$viewHelper261->setRenderChildrenClosure($renderChildrenClosure257);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output242 .= $viewHelper261->initializeArgumentsAndRender();

$output242 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments262 = array();
$arguments262['class'] = 'right carousel-control';
// Rendering Array
$array263 = array();
$array263['data-slide'] = 'next';
$array263['role'] = 'button';
$arguments262['additionalAttributes'] = $array263;
$output264 = '';

$output264 .= 'carousel-';

$output264 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments262['section'] = $output264;
$arguments262['data'] = NULL;
$arguments262['pageUid'] = NULL;
$arguments262['additionalParams'] = array (
);
$arguments262['pageType'] = 0;
$arguments262['noCache'] = false;
$arguments262['noCacheHash'] = false;
$arguments262['linkAccessRestrictedPages'] = false;
$arguments262['absolute'] = false;
$arguments262['addQueryString'] = false;
$arguments262['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments262['addQueryStringMethod'] = NULL;
$arguments262['dir'] = NULL;
$arguments262['id'] = NULL;
$arguments262['lang'] = NULL;
$arguments262['style'] = NULL;
$arguments262['title'] = NULL;
$arguments262['accesskey'] = NULL;
$arguments262['tabindex'] = NULL;
$arguments262['onclick'] = NULL;
$arguments262['target'] = NULL;
$arguments262['rel'] = NULL;
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output266 = '';

$output266 .= '
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments267 = array();
$arguments267['key'] = 'next';
$arguments267['extensionName'] = 'bootstrap_package';
$arguments267['id'] = NULL;
$arguments267['default'] = NULL;
$arguments267['htmlEscape'] = NULL;
$arguments267['arguments'] = NULL;
$renderChildrenClosure268 = function() {return NULL;};

$output266 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output266 .= '</span>
                    ';
return $output266;
};
$viewHelper269 = $self->getViewHelper('$viewHelper269', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper269->setArguments($arguments262);
$viewHelper269->setRenderingContext($renderingContext);
$viewHelper269->setRenderChildrenClosure($renderChildrenClosure265);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output242 .= $viewHelper269->initializeArgumentsAndRender();

$output242 .= '
                ';
return $output242;
};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments238, $renderChildrenClosure241, $renderingContext);

$output148 .= '
            </div>
        ';
return $output148;
};

$output145 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
    ';
return $output145;
};

$output142 .= BK2K\BootstrapPackage\ViewHelpers\DataRelationViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output142 .= '

';
return $output142;
};

$output131 .= '';

$output131 .= '
';


return $output131;
}


}
#1481646609    77990     