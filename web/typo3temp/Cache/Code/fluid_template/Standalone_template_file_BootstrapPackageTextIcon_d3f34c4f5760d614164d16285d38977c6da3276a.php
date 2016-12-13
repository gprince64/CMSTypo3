<?php
class FluidCache_Standalone_template_file_BootstrapPackageTextIcon_d3f34c4f5760d614164d16285d38977c6da3276a extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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



return NULL;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

    <div class="texticon texticon-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_position', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '">
        <div class="
             texticon-icon
             texticon-size-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments5 = array();
$arguments5['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_size', $renderingContext);
$arguments5['keepQuotes'] = false;
$arguments5['encoding'] = NULL;
$arguments5['doubleEncode'] = true;
$renderChildrenClosure6 = function() {return NULL;};
$value7 = ($arguments5['value'] !== NULL ? $arguments5['value'] : $renderChildrenClosure6());
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value7) ? $value7 : htmlspecialchars($value7, ($arguments5['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments5['encoding'] !== NULL ? $arguments5['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments5['doubleEncode'])), 0);
$arguments4['then'] = 'default';
$arguments4['else'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure8, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments9 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_size', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());
$arguments9['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode'])), 1);
$arguments9['then'] = 'medium';
$arguments9['else'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure13, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments14 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments15 = array();
$arguments15['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_size', $renderingContext);
$arguments15['keepQuotes'] = false;
$arguments15['encoding'] = NULL;
$arguments15['doubleEncode'] = true;
$renderChildrenClosure16 = function() {return NULL;};
$value17 = ($arguments15['value'] !== NULL ? $arguments15['value'] : $renderChildrenClosure16());
$arguments14['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value17) ? $value17 : htmlspecialchars($value17, ($arguments15['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments15['encoding'] !== NULL ? $arguments15['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments15['doubleEncode'])), 2);
$arguments14['then'] = 'large';
$arguments14['else'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure18, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments19 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments20 = array();
$arguments20['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_size', $renderingContext);
$arguments20['keepQuotes'] = false;
$arguments20['encoding'] = NULL;
$arguments20['doubleEncode'] = true;
$renderChildrenClosure21 = function() {return NULL;};
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());
$arguments19['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value22) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments20['encoding'] !== NULL ? $arguments20['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments20['doubleEncode'])), 3);
$arguments19['then'] = 'awesome';
$arguments19['else'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure23, $renderingContext);

$output0 .= '
             texticon-type-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments24 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_type', $renderingContext);
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = NULL;
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() {return NULL;};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());
$arguments24['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments25['encoding'] !== NULL ? $arguments25['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments25['doubleEncode'])), 1);
$arguments24['then'] = 'square';
$arguments24['else'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure28, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments29 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_type', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());
$arguments29['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode'])), 2);
$arguments29['then'] = 'circle';
$arguments29['else'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure33, $renderingContext);

$output0 .= '
        ">
            <span class="glyphicon glyphicon-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon', $renderingContext);
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = NULL;
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() {return NULL;};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());

$output0 .= (!is_string($value36) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments34['encoding'] !== NULL ? $arguments34['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments34['doubleEncode']));

$output0 .= '" style="
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments37 = array();
// Rendering Boolean node
$arguments37['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_color', $renderingContext));
$output38 = '';

$output38 .= 'color: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_color', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() {return NULL;};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output38 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments39['encoding'] !== NULL ? $arguments39['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments39['doubleEncode']));

$output38 .= ';';
$arguments37['then'] = $output38;
$arguments37['else'] = NULL;
$renderChildrenClosure42 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure42, $renderingContext);

$output0 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments43 = array();
// Rendering Boolean node
$arguments43['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_background', $renderingContext));
$output44 = '';

$output44 .= 'background-color: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_background', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output44 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output44 .= ';';
$arguments43['then'] = $output44;
$arguments43['else'] = NULL;
$renderChildrenClosure48 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure48, $renderingContext);

$output0 .= '
            "></span>
        </div>
        <div class="texticon-content">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments49 = array();
$arguments49['partial'] = 'Header/All';
$arguments49['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments49['section'] = NULL;
$arguments49['optional'] = false;
$renderChildrenClosure50 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments51 = array();
$arguments51['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'bodytext', $renderingContext);
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output0 .= '
        </div>
    </div>

';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output53 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments54 = array();
$arguments54['name'] = 'Default';
$renderChildrenClosure55 = function() {return NULL;};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper56->setArguments($arguments54);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output53 .= $viewHelper56->initializeArgumentsAndRender();

$output53 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments57 = array();
$arguments57['name'] = 'Header';
$renderChildrenClosure58 = function() {return NULL;};

$output53 .= '';

$output53 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments59 = array();
$arguments59['name'] = 'Main';
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '

    <div class="texticon texticon-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_position', $renderingContext);
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = NULL;
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() {return NULL;};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output61 .= (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments62['encoding'] !== NULL ? $arguments62['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments62['doubleEncode']));

$output61 .= '">
        <div class="
             texticon-icon
             texticon-size-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments65 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments66 = array();
$arguments66['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_size', $renderingContext);
$arguments66['keepQuotes'] = false;
$arguments66['encoding'] = NULL;
$arguments66['doubleEncode'] = true;
$renderChildrenClosure67 = function() {return NULL;};
$value68 = ($arguments66['value'] !== NULL ? $arguments66['value'] : $renderChildrenClosure67());
$arguments65['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value68) ? $value68 : htmlspecialchars($value68, ($arguments66['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments66['encoding'] !== NULL ? $arguments66['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments66['doubleEncode'])), 0);
$arguments65['then'] = 'default';
$arguments65['else'] = NULL;
$renderChildrenClosure69 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure69, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments70 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_size', $renderingContext);
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = NULL;
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() {return NULL;};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());
$arguments70['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments71['encoding'] !== NULL ? $arguments71['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments71['doubleEncode'])), 1);
$arguments70['then'] = 'medium';
$arguments70['else'] = NULL;
$renderChildrenClosure74 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure74, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments75 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_size', $renderingContext);
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = NULL;
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() {return NULL;};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());
$arguments75['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value78) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments76['encoding'] !== NULL ? $arguments76['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments76['doubleEncode'])), 2);
$arguments75['then'] = 'large';
$arguments75['else'] = NULL;
$renderChildrenClosure79 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure79, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments80 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments81 = array();
$arguments81['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_size', $renderingContext);
$arguments81['keepQuotes'] = false;
$arguments81['encoding'] = NULL;
$arguments81['doubleEncode'] = true;
$renderChildrenClosure82 = function() {return NULL;};
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());
$arguments80['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value83) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments81['encoding'] !== NULL ? $arguments81['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments81['doubleEncode'])), 3);
$arguments80['then'] = 'awesome';
$arguments80['else'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure84, $renderingContext);

$output61 .= '
             texticon-type-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments85 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments86 = array();
$arguments86['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_type', $renderingContext);
$arguments86['keepQuotes'] = false;
$arguments86['encoding'] = NULL;
$arguments86['doubleEncode'] = true;
$renderChildrenClosure87 = function() {return NULL;};
$value88 = ($arguments86['value'] !== NULL ? $arguments86['value'] : $renderChildrenClosure87());
$arguments85['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value88) ? $value88 : htmlspecialchars($value88, ($arguments86['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments86['encoding'] !== NULL ? $arguments86['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments86['doubleEncode'])), 1);
$arguments85['then'] = 'square';
$arguments85['else'] = NULL;
$renderChildrenClosure89 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure89, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments90 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments91 = array();
$arguments91['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_type', $renderingContext);
$arguments91['keepQuotes'] = false;
$arguments91['encoding'] = NULL;
$arguments91['doubleEncode'] = true;
$renderChildrenClosure92 = function() {return NULL;};
$value93 = ($arguments91['value'] !== NULL ? $arguments91['value'] : $renderChildrenClosure92());
$arguments90['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value93) ? $value93 : htmlspecialchars($value93, ($arguments91['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments91['encoding'] !== NULL ? $arguments91['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments91['doubleEncode'])), 2);
$arguments90['then'] = 'circle';
$arguments90['else'] = NULL;
$renderChildrenClosure94 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure94, $renderingContext);

$output61 .= '
        ">
            <span class="glyphicon glyphicon-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments95 = array();
$arguments95['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon', $renderingContext);
$arguments95['keepQuotes'] = false;
$arguments95['encoding'] = NULL;
$arguments95['doubleEncode'] = true;
$renderChildrenClosure96 = function() {return NULL;};
$value97 = ($arguments95['value'] !== NULL ? $arguments95['value'] : $renderChildrenClosure96());

$output61 .= (!is_string($value97) ? $value97 : htmlspecialchars($value97, ($arguments95['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments95['encoding'] !== NULL ? $arguments95['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments95['doubleEncode']));

$output61 .= '" style="
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments98 = array();
// Rendering Boolean node
$arguments98['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_color', $renderingContext));
$output99 = '';

$output99 .= 'color: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments100 = array();
$arguments100['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_color', $renderingContext);
$arguments100['keepQuotes'] = false;
$arguments100['encoding'] = NULL;
$arguments100['doubleEncode'] = true;
$renderChildrenClosure101 = function() {return NULL;};
$value102 = ($arguments100['value'] !== NULL ? $arguments100['value'] : $renderChildrenClosure101());

$output99 .= (!is_string($value102) ? $value102 : htmlspecialchars($value102, ($arguments100['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments100['encoding'] !== NULL ? $arguments100['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments100['doubleEncode']));

$output99 .= ';';
$arguments98['then'] = $output99;
$arguments98['else'] = NULL;
$renderChildrenClosure103 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure103, $renderingContext);

$output61 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments104 = array();
// Rendering Boolean node
$arguments104['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_background', $renderingContext));
$output105 = '';

$output105 .= 'background-color: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments106 = array();
$arguments106['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'icon_background', $renderingContext);
$arguments106['keepQuotes'] = false;
$arguments106['encoding'] = NULL;
$arguments106['doubleEncode'] = true;
$renderChildrenClosure107 = function() {return NULL;};
$value108 = ($arguments106['value'] !== NULL ? $arguments106['value'] : $renderChildrenClosure107());

$output105 .= (!is_string($value108) ? $value108 : htmlspecialchars($value108, ($arguments106['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments106['encoding'] !== NULL ? $arguments106['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments106['doubleEncode']));

$output105 .= ';';
$arguments104['then'] = $output105;
$arguments104['else'] = NULL;
$renderChildrenClosure109 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure109, $renderingContext);

$output61 .= '
            "></span>
        </div>
        <div class="texticon-content">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments110 = array();
$arguments110['partial'] = 'Header/All';
$arguments110['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments110['section'] = NULL;
$arguments110['optional'] = false;
$renderChildrenClosure111 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output61 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments112 = array();
$arguments112['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'bodytext', $renderingContext);
};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output61 .= '
        </div>
    </div>

';
return $output61;
};

$output53 .= '';

$output53 .= '
';


return $output53;
}


}
#1481646609    31238     