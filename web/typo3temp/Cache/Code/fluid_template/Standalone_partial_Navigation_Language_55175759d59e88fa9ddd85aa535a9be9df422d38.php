<?php
class FluidCache_Standalone_partial_Navigation_Language_55175759d59e88fa9ddd85aa535a9be9df422d38 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('languagenavigation'));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
    <ul id="language_menu" class="language-menu">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments4 = array();
$arguments4['each'] = $currentVariableContainer->getOrNull('languagenavigation');
$arguments4['as'] = 'item';
$arguments4['key'] = '';
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'active', $renderingContext));
$arguments7['then'] = 'active';
$arguments7['else'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments9 = array();
// Rendering Boolean node
$arguments9['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'available', $renderingContext));
$arguments9['else'] = 'text-muted';
$arguments9['then'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments11 = array();
$arguments11['expression'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'languageUid', $renderingContext);
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments14 = array();
$arguments14['value'] = '2';
$arguments14['default'] = false;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments17 = array();
$arguments17['name'] = 'languageTitle';
$arguments17['value'] = 'Dansk';
$renderChildrenClosure18 = function() {return NULL;};

$output16 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments19 = array();
$arguments19['name'] = 'hreflang';
$arguments19['value'] = 'da-DK';
$renderChildrenClosure20 = function() {return NULL;};

$output16 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output16 .= '
                    ';
return $output16;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments21 = array();
$arguments21['value'] = '1';
$arguments21['default'] = false;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments24 = array();
$arguments24['name'] = 'languageTitle';
$arguments24['value'] = 'Deutsch';
$renderChildrenClosure25 = function() {return NULL;};

$output23 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments26 = array();
$arguments26['name'] = 'hreflang';
$arguments26['value'] = 'de-DE';
$renderChildrenClosure27 = function() {return NULL;};

$output23 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output23 .= '
                    ';
return $output23;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output13 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments28 = array();
// Rendering Boolean node
$arguments28['default'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments28['value'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments31 = array();
$arguments31['name'] = 'languageTitle';
$arguments31['value'] = 'English';
$renderChildrenClosure32 = function() {return NULL;};

$output30 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments33 = array();
$arguments33['name'] = 'hreflang';
$arguments33['value'] = 'en-GB';
$renderChildrenClosure34 = function() {return NULL;};

$output30 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output30 .= '
                    ';
return $output30;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output13 .= '
                ';
return $output13;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output6 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments35 = array();
// Rendering Boolean node
$arguments35['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'available', $renderingContext));
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments38 = array();
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments41 = array();
$arguments41['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.uid', $renderingContext);
// Rendering Array
$array42 = array();
$array42['hreflang'] = $currentVariableContainer->getOrNull('hreflang');
$arguments41['additionalAttributes'] = $array42;
// Rendering Boolean node
$arguments41['addQueryString'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments41['addQueryStringMethod'] = 'GET';
// Rendering Array
$array43 = array();
$array43['0'] = 'L';
$array43['1'] = 'id';
$array43['2'] = 'cHash';
$array43['3'] = 'no_cache';
$arguments41['argumentsToBeExcludedFromQueryString'] = $array43;
// Rendering Array
$array44 = array();
$array44['L'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'languageUid', $renderingContext);
$arguments41['additionalParams'] = $array44;
$arguments41['data'] = NULL;
$arguments41['pageType'] = 0;
$arguments41['noCache'] = false;
$arguments41['noCacheHash'] = false;
$arguments41['section'] = '';
$arguments41['linkAccessRestrictedPages'] = false;
$arguments41['absolute'] = false;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['target'] = NULL;
$arguments41['rel'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output46 = '';

$output46 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = $currentVariableContainer->getOrNull('languageTitle');
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = NULL;
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() {return NULL;};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());

$output46 .= (!is_string($value49) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments47['encoding'] !== NULL ? $arguments47['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments47['doubleEncode']));

$output46 .= '
                        ';
return $output46;
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper50->setArguments($arguments41);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output40 .= $viewHelper50->initializeArgumentsAndRender();

$output40 .= '
                    ';
return $output40;
};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments51 = array();
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = $currentVariableContainer->getOrNull('languageTitle');
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() {return NULL;};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());

$output53 .= (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));

$output53 .= '
                    ';
return $output53;
};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output37 .= '
                ';
return $output37;
};
$arguments35['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments58 = array();
$arguments58['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.uid', $renderingContext);
// Rendering Array
$array59 = array();
$array59['hreflang'] = $currentVariableContainer->getOrNull('hreflang');
$arguments58['additionalAttributes'] = $array59;
// Rendering Boolean node
$arguments58['addQueryString'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments58['addQueryStringMethod'] = 'GET';
// Rendering Array
$array60 = array();
$array60['0'] = 'L';
$array60['1'] = 'id';
$array60['2'] = 'cHash';
$array60['3'] = 'no_cache';
$arguments58['argumentsToBeExcludedFromQueryString'] = $array60;
// Rendering Array
$array61 = array();
$array61['L'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'languageUid', $renderingContext);
$arguments58['additionalParams'] = $array61;
$arguments58['data'] = NULL;
$arguments58['pageType'] = 0;
$arguments58['noCache'] = false;
$arguments58['noCacheHash'] = false;
$arguments58['section'] = '';
$arguments58['linkAccessRestrictedPages'] = false;
$arguments58['absolute'] = false;
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['target'] = NULL;
$arguments58['rel'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = $currentVariableContainer->getOrNull('languageTitle');
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());

$output63 .= (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));

$output63 .= '
                        ';
return $output63;
};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper67->setArguments($arguments58);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output57 .= $viewHelper67->initializeArgumentsAndRender();

$output57 .= '
                    ';
return $output57;
};
$arguments35['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output68 = '';

$output68 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments69 = array();
$arguments69['value'] = $currentVariableContainer->getOrNull('languageTitle');
$arguments69['keepQuotes'] = false;
$arguments69['encoding'] = NULL;
$arguments69['doubleEncode'] = true;
$renderChildrenClosure70 = function() {return NULL;};
$value71 = ($arguments69['value'] !== NULL ? $arguments69['value'] : $renderChildrenClosure70());

$output68 .= (!is_string($value71) ? $value71 : htmlspecialchars($value71, ($arguments69['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments69['encoding'] !== NULL ? $arguments69['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments69['doubleEncode']));

$output68 .= '
                    ';
return $output68;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output6 .= '
            </li>
        ';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    </ul>
';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1481646609    18497     