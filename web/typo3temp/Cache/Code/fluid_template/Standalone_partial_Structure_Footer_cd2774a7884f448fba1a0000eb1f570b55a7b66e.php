<?php
class FluidCache_Standalone_partial_Structure_Footer_cd2774a7884f448fba1a0000eb1f570b55a7b66e extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<footer>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('showFooter'));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments4 = array();
$arguments4['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array5 = array();
$array5['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array5['colPos'] = '10';
$arguments4['data'] = $array5;
$arguments4['currentValueKey'] = NULL;
$arguments4['table'] = '';
$renderChildrenClosure6 = function() {return NULL;};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper7->setArguments($arguments4);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output3 .= $viewHelper7->initializeArgumentsAndRender();

$output3 .= '
            </div>
            <div class="col-sm-4">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments8 = array();
$arguments8['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array9 = array();
$array9['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array9['colPos'] = '11';
$arguments8['data'] = $array9;
$arguments8['currentValueKey'] = NULL;
$arguments8['table'] = '';
$renderChildrenClosure10 = function() {return NULL;};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper11->setArguments($arguments8);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output3 .= $viewHelper11->initializeArgumentsAndRender();

$output3 .= '
            </div>
            <div class="col-sm-4">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments12 = array();
$arguments12['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array13 = array();
$array13['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array13['colPos'] = '12';
$arguments12['data'] = $array13;
$arguments12['currentValueKey'] = NULL;
$arguments12['table'] = '';
$renderChildrenClosure14 = function() {return NULL;};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper15->setArguments($arguments12);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output3 .= $viewHelper15->initializeArgumentsAndRender();

$output3 .= '
            </div>
        </div>
    </div>
</section>
';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments16 = array();
// Rendering Boolean node
$arguments16['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('showMeta'));
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
<section class="meta-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 language">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments19 = array();
$arguments19['partial'] = 'Navigation/Language';
$arguments19['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments19['section'] = NULL;
$arguments19['optional'] = false;
$renderChildrenClosure20 = function() {return NULL;};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments21 = array();
// Rendering Boolean node
$arguments21['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'copyright.enable', $renderingContext));
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
                <div class="col-md-8 copyright" role="contentinfo">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments24 = array();
$arguments24['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'copyright.text', $renderingContext);
};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                </div>
            ';
return $output23;
};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output18 .= '
        </div>
    </div>
</section>
';
return $output18;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
</footer>
';


return $output0;
}


}
#1481646609    7715      