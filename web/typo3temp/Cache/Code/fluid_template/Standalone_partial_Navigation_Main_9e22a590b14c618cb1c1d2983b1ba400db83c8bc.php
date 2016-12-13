<?php
class FluidCache_Standalone_partial_Navigation_Main_9e22a590b14c618cb1c1d2983b1ba400db83c8bc extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<header
    class="navbar navbar-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'navigation.style', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.file', $renderingContext));
$arguments4['then'] = ' navbar-has-image';
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments6 = array();
// Rendering Boolean node
$arguments6['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'navigation.type', $renderingContext));
$arguments6['else'] = ' navbar-top';
$output7 = '';

$output7 .= ' navbar-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments8 = array();
$arguments8['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'navigation.type', $renderingContext);
$arguments8['keepQuotes'] = false;
$arguments8['encoding'] = NULL;
$arguments8['doubleEncode'] = true;
$renderChildrenClosure9 = function() {return NULL;};
$value10 = ($arguments8['value'] !== NULL ? $arguments8['value'] : $renderChildrenClosure9());

$output7 .= (!is_string($value10) ? $value10 : htmlspecialchars($value10, ($arguments8['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments8['encoding'] !== NULL ? $arguments8['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments8['doubleEncode']));

$output7 .= ' navbar-fixed-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments11 = array();
$arguments11['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'navigation.type', $renderingContext);
$arguments11['keepQuotes'] = false;
$arguments11['encoding'] = NULL;
$arguments11['doubleEncode'] = true;
$renderChildrenClosure12 = function() {return NULL;};
$value13 = ($arguments11['value'] !== NULL ? $arguments11['value'] : $renderChildrenClosure12());

$output7 .= (!is_string($value13) ? $value13 : htmlspecialchars($value13, ($arguments11['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments11['encoding'] !== NULL ? $arguments11['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments11['doubleEncode']));
$arguments6['then'] = $output7;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure14, $renderingContext);

$output0 .= '">
    <div class="container">
        <div class="navbar-header navbar-header-main">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments15 = array();
// Rendering Boolean node
$arguments15['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.file', $renderingContext));
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments18 = array();
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments21 = array();
$arguments21['pageUid'] = $currentVariableContainer->getOrNull('rootPage');
$arguments21['class'] = 'navbar-brand navbar-brand-image';
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['additionalParams'] = array (
);
$arguments21['pageType'] = 0;
$arguments21['noCache'] = false;
$arguments21['noCacheHash'] = false;
$arguments21['section'] = '';
$arguments21['linkAccessRestrictedPages'] = false;
$arguments21['absolute'] = false;
$arguments21['addQueryString'] = false;
$arguments21['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments21['addQueryStringMethod'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['target'] = NULL;
$arguments21['rel'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
                        <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments24 = array();
$arguments24['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.file', $renderingContext);
$arguments24['image'] = NULL;
$arguments24['width'] = NULL;
$arguments24['height'] = NULL;
$arguments24['minWidth'] = NULL;
$arguments24['minHeight'] = NULL;
$arguments24['maxWidth'] = NULL;
$arguments24['maxHeight'] = NULL;
$arguments24['treatIdAsReference'] = false;
$arguments24['crop'] = NULL;
$arguments24['absolute'] = false;
$renderChildrenClosure25 = function() {return NULL;};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments26 = array();
$arguments26['value'] = $currentVariableContainer->getOrNull('logoAlt');
$arguments26['keepQuotes'] = false;
$arguments26['encoding'] = NULL;
$arguments26['doubleEncode'] = true;
$renderChildrenClosure27 = function() {return NULL;};
$value28 = ($arguments26['value'] !== NULL ? $arguments26['value'] : $renderChildrenClosure27());

$output23 .= (!is_string($value28) ? $value28 : htmlspecialchars($value28, ($arguments26['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments26['encoding'] !== NULL ? $arguments26['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments26['doubleEncode']));

$output23 .= '" height="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.height', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output23 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));

$output23 .= '" width="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.width', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() {return NULL;};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output23 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));

$output23 .= '">
                    ';
return $output23;
};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper35->setArguments($arguments21);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output20 .= $viewHelper35->initializeArgumentsAndRender();

$output20 .= '
                ';
return $output20;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments36 = array();
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments39 = array();
$arguments39['pageUid'] = $currentVariableContainer->getOrNull('rootPage');
$arguments39['class'] = 'navbar-brand';
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['additionalParams'] = array (
);
$arguments39['pageType'] = 0;
$arguments39['noCache'] = false;
$arguments39['noCacheHash'] = false;
$arguments39['section'] = '';
$arguments39['linkAccessRestrictedPages'] = false;
$arguments39['absolute'] = false;
$arguments39['addQueryString'] = false;
$arguments39['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments39['addQueryStringMethod'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['target'] = NULL;
$arguments39['rel'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = $currentVariableContainer->getOrNull('siteTitle');
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = NULL;
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() {return NULL;};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());
return (!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments41['encoding'] !== NULL ? $arguments41['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments41['doubleEncode']));
};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper44->setArguments($arguments39);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output38 .= $viewHelper44->initializeArgumentsAndRender();

$output38 .= '
                ';
return $output38;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output17 .= '
            ';
return $output17;
};
$arguments15['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments46 = array();
$arguments46['pageUid'] = $currentVariableContainer->getOrNull('rootPage');
$arguments46['class'] = 'navbar-brand navbar-brand-image';
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['additionalParams'] = array (
);
$arguments46['pageType'] = 0;
$arguments46['noCache'] = false;
$arguments46['noCacheHash'] = false;
$arguments46['section'] = '';
$arguments46['linkAccessRestrictedPages'] = false;
$arguments46['absolute'] = false;
$arguments46['addQueryString'] = false;
$arguments46['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments46['addQueryStringMethod'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['target'] = NULL;
$arguments46['rel'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
                        <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments49 = array();
$arguments49['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.file', $renderingContext);
$arguments49['image'] = NULL;
$arguments49['width'] = NULL;
$arguments49['height'] = NULL;
$arguments49['minWidth'] = NULL;
$arguments49['minHeight'] = NULL;
$arguments49['maxWidth'] = NULL;
$arguments49['maxHeight'] = NULL;
$arguments49['treatIdAsReference'] = false;
$arguments49['crop'] = NULL;
$arguments49['absolute'] = false;
$renderChildrenClosure50 = function() {return NULL;};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = $currentVariableContainer->getOrNull('logoAlt');
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() {return NULL;};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output48 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));

$output48 .= '" height="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.height', $renderingContext);
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() {return NULL;};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());

$output48 .= (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));

$output48 .= '" width="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments57 = array();
$arguments57['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.width', $renderingContext);
$arguments57['keepQuotes'] = false;
$arguments57['encoding'] = NULL;
$arguments57['doubleEncode'] = true;
$renderChildrenClosure58 = function() {return NULL;};
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());

$output48 .= (!is_string($value59) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments57['encoding'] !== NULL ? $arguments57['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments57['doubleEncode']));

$output48 .= '">
                    ';
return $output48;
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper60->setArguments($arguments46);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output45 .= $viewHelper60->initializeArgumentsAndRender();

$output45 .= '
                ';
return $output45;
};
$arguments15['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments62 = array();
$arguments62['pageUid'] = $currentVariableContainer->getOrNull('rootPage');
$arguments62['class'] = 'navbar-brand';
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['additionalParams'] = array (
);
$arguments62['pageType'] = 0;
$arguments62['noCache'] = false;
$arguments62['noCacheHash'] = false;
$arguments62['section'] = '';
$arguments62['linkAccessRestrictedPages'] = false;
$arguments62['absolute'] = false;
$arguments62['addQueryString'] = false;
$arguments62['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments62['addQueryStringMethod'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['target'] = NULL;
$arguments62['rel'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = $currentVariableContainer->getOrNull('siteTitle');
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());
return (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));
};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper67->setArguments($arguments62);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output61 .= $viewHelper67->initializeArgumentsAndRender();

$output61 .= '
                ';
return $output61;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments68 = array();
// Rendering Boolean node
$arguments68['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('mainnavigation'));
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            ';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output0 .= '
            <span class="navbar-header-border-bottom"></span>
        </div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments70 = array();
// Rendering Boolean node
$arguments70['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('mainnavigation'));
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
            <nav class="navbar-collapse collapse" role="navigation">
                <ul class="nav navbar-nav navbar-main">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments73 = array();
$arguments73['each'] = $currentVariableContainer->getOrNull('mainnavigation');
$arguments73['as'] = 'mainnavigationItem';
$arguments73['key'] = '';
$arguments73['reverse'] = false;
$arguments73['iteration'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
                        <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments76 = array();
// Rendering Boolean node
$arguments76['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'active', $renderingContext));
$arguments76['then'] = 'active';
$arguments76['else'] = NULL;
$renderChildrenClosure77 = function() {return NULL;};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments78 = array();
// Rendering Boolean node
$arguments78['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'children', $renderingContext));
$arguments78['then'] = 'dropdown';
$arguments78['else'] = NULL;
$renderChildrenClosure79 = function() {return NULL;};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output75 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments80 = array();
// Rendering Boolean node
$arguments80['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'children', $renderingContext));
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output82 = '';

$output82 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments83 = array();
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output85 = '';

$output85 .= '
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments86 = array();
$arguments86['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments86['keepQuotes'] = false;
$arguments86['encoding'] = NULL;
$arguments86['doubleEncode'] = true;
$renderChildrenClosure87 = function() {return NULL;};
$value88 = ($arguments86['value'] !== NULL ? $arguments86['value'] : $renderChildrenClosure87());

$output85 .= (!is_string($value88) ? $value88 : htmlspecialchars($value88, ($arguments86['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments86['encoding'] !== NULL ? $arguments86['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments86['doubleEncode']));

$output85 .= '
                                        <b class="caret"></b>
                                        <span class="bar"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments89 = array();
$arguments89['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'children', $renderingContext);
$arguments89['as'] = 'child';
$arguments89['key'] = '';
$arguments89['reverse'] = false;
$arguments89['iteration'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output91 = '';

$output91 .= '
                                            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments92 = array();
// Rendering Boolean node
$arguments92['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'active', $renderingContext));
$arguments92['then'] = 'active';
$arguments92['else'] = NULL;
$renderChildrenClosure93 = function() {return NULL;};

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments94 = array();
$arguments94['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'data.uid', $renderingContext);
$arguments94['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['additionalParams'] = array (
);
$arguments94['pageType'] = 0;
$arguments94['noCache'] = false;
$arguments94['noCacheHash'] = false;
$arguments94['section'] = '';
$arguments94['linkAccessRestrictedPages'] = false;
$arguments94['absolute'] = false;
$arguments94['addQueryString'] = false;
$arguments94['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments94['addQueryStringMethod'] = NULL;
$arguments94['class'] = NULL;
$arguments94['dir'] = NULL;
$arguments94['id'] = NULL;
$arguments94['lang'] = NULL;
$arguments94['style'] = NULL;
$arguments94['accesskey'] = NULL;
$arguments94['tabindex'] = NULL;
$arguments94['onclick'] = NULL;
$arguments94['target'] = NULL;
$arguments94['rel'] = NULL;
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output96 = '';

$output96 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = NULL;
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() {return NULL;};
$value99 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());

$output96 .= (!is_string($value99) ? $value99 : htmlspecialchars($value99, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments97['encoding'] !== NULL ? $arguments97['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments97['doubleEncode']));

$output96 .= '
                                                ';
return $output96;
};
$viewHelper100 = $self->getViewHelper('$viewHelper100', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper100->setArguments($arguments94);
$viewHelper100->setRenderingContext($renderingContext);
$viewHelper100->setRenderChildrenClosure($renderChildrenClosure95);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output91 .= $viewHelper100->initializeArgumentsAndRender();

$output91 .= '
                                            </li>
                                        ';
return $output91;
};

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output85 .= '
                                    </ul>
                                ';
return $output85;
};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments101 = array();
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output103 = '';

$output103 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments104 = array();
$arguments104['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'data.uid', $renderingContext);
$arguments104['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['additionalParams'] = array (
);
$arguments104['pageType'] = 0;
$arguments104['noCache'] = false;
$arguments104['noCacheHash'] = false;
$arguments104['section'] = '';
$arguments104['linkAccessRestrictedPages'] = false;
$arguments104['absolute'] = false;
$arguments104['addQueryString'] = false;
$arguments104['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments104['addQueryStringMethod'] = NULL;
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['target'] = NULL;
$arguments104['rel'] = NULL;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output106 = '';

$output106 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments107 = array();
$arguments107['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments107['keepQuotes'] = false;
$arguments107['encoding'] = NULL;
$arguments107['doubleEncode'] = true;
$renderChildrenClosure108 = function() {return NULL;};
$value109 = ($arguments107['value'] !== NULL ? $arguments107['value'] : $renderChildrenClosure108());

$output106 .= (!is_string($value109) ? $value109 : htmlspecialchars($value109, ($arguments107['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments107['encoding'] !== NULL ? $arguments107['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments107['doubleEncode']));

$output106 .= '
                                        <span class="bar"></span>
                                    ';
return $output106;
};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper110->setArguments($arguments104);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure105);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output103 .= $viewHelper110->initializeArgumentsAndRender();

$output103 .= '
                                ';
return $output103;
};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output82 .= '
                            ';
return $output82;
};
$arguments80['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments112 = array();
$arguments112['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments112['keepQuotes'] = false;
$arguments112['encoding'] = NULL;
$arguments112['doubleEncode'] = true;
$renderChildrenClosure113 = function() {return NULL;};
$value114 = ($arguments112['value'] !== NULL ? $arguments112['value'] : $renderChildrenClosure113());

$output111 .= (!is_string($value114) ? $value114 : htmlspecialchars($value114, ($arguments112['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments112['encoding'] !== NULL ? $arguments112['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments112['doubleEncode']));

$output111 .= '
                                        <b class="caret"></b>
                                        <span class="bar"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments115 = array();
$arguments115['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'children', $renderingContext);
$arguments115['as'] = 'child';
$arguments115['key'] = '';
$arguments115['reverse'] = false;
$arguments115['iteration'] = NULL;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output117 = '';

$output117 .= '
                                            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments118 = array();
// Rendering Boolean node
$arguments118['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'active', $renderingContext));
$arguments118['then'] = 'active';
$arguments118['else'] = NULL;
$renderChildrenClosure119 = function() {return NULL;};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments120 = array();
$arguments120['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'data.uid', $renderingContext);
$arguments120['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['additionalParams'] = array (
);
$arguments120['pageType'] = 0;
$arguments120['noCache'] = false;
$arguments120['noCacheHash'] = false;
$arguments120['section'] = '';
$arguments120['linkAccessRestrictedPages'] = false;
$arguments120['absolute'] = false;
$arguments120['addQueryString'] = false;
$arguments120['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments120['addQueryStringMethod'] = NULL;
$arguments120['class'] = NULL;
$arguments120['dir'] = NULL;
$arguments120['id'] = NULL;
$arguments120['lang'] = NULL;
$arguments120['style'] = NULL;
$arguments120['accesskey'] = NULL;
$arguments120['tabindex'] = NULL;
$arguments120['onclick'] = NULL;
$arguments120['target'] = NULL;
$arguments120['rel'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments123 = array();
$arguments123['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments123['keepQuotes'] = false;
$arguments123['encoding'] = NULL;
$arguments123['doubleEncode'] = true;
$renderChildrenClosure124 = function() {return NULL;};
$value125 = ($arguments123['value'] !== NULL ? $arguments123['value'] : $renderChildrenClosure124());

$output122 .= (!is_string($value125) ? $value125 : htmlspecialchars($value125, ($arguments123['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments123['encoding'] !== NULL ? $arguments123['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments123['doubleEncode']));

$output122 .= '
                                                ';
return $output122;
};
$viewHelper126 = $self->getViewHelper('$viewHelper126', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper126->setArguments($arguments120);
$viewHelper126->setRenderingContext($renderingContext);
$viewHelper126->setRenderChildrenClosure($renderChildrenClosure121);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output117 .= $viewHelper126->initializeArgumentsAndRender();

$output117 .= '
                                            </li>
                                        ';
return $output117;
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output111 .= '
                                    </ul>
                                ';
return $output111;
};
$arguments80['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output127 = '';

$output127 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments128 = array();
$arguments128['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'data.uid', $renderingContext);
$arguments128['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments128['additionalAttributes'] = NULL;
$arguments128['data'] = NULL;
$arguments128['additionalParams'] = array (
);
$arguments128['pageType'] = 0;
$arguments128['noCache'] = false;
$arguments128['noCacheHash'] = false;
$arguments128['section'] = '';
$arguments128['linkAccessRestrictedPages'] = false;
$arguments128['absolute'] = false;
$arguments128['addQueryString'] = false;
$arguments128['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments128['addQueryStringMethod'] = NULL;
$arguments128['class'] = NULL;
$arguments128['dir'] = NULL;
$arguments128['id'] = NULL;
$arguments128['lang'] = NULL;
$arguments128['style'] = NULL;
$arguments128['accesskey'] = NULL;
$arguments128['tabindex'] = NULL;
$arguments128['onclick'] = NULL;
$arguments128['target'] = NULL;
$arguments128['rel'] = NULL;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output130 = '';

$output130 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments131 = array();
$arguments131['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments131['keepQuotes'] = false;
$arguments131['encoding'] = NULL;
$arguments131['doubleEncode'] = true;
$renderChildrenClosure132 = function() {return NULL;};
$value133 = ($arguments131['value'] !== NULL ? $arguments131['value'] : $renderChildrenClosure132());

$output130 .= (!is_string($value133) ? $value133 : htmlspecialchars($value133, ($arguments131['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments131['encoding'] !== NULL ? $arguments131['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments131['doubleEncode']));

$output130 .= '
                                        <span class="bar"></span>
                                    ';
return $output130;
};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper134->setArguments($arguments128);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure129);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output127 .= $viewHelper134->initializeArgumentsAndRender();

$output127 .= '
                                ';
return $output127;
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output75 .= '
                        </li>
                    ';
return $output75;
};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
                </ul>
            </nav>
        ';
return $output72;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output0 .= '
    </div>
</header>
';


return $output0;
}


}
#1481646609    46363     