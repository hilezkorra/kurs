<?php

class Standard_action_index_59550cec98df0d6348263f08d3f29ecad27ec889 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
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
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
	<h3>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$output9 = '';
$array10 = array (
);
$output9 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array10);

$output9 .= 'currentTemplate';
$arguments7['key'] = $output9;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
	</h3>
	<div>
		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['table'] = NULL;
$arguments11['row'] = NULL;
$arguments11['size'] = 'small';
$arguments11['alternativeMarkupIdentifier'] = NULL;
$arguments11['table'] = 'sys_template';
$array13 = array (
);$arguments11['row'] = $renderingContext->getVariableProvider()->getByPath('templateRecord', $array13);

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output6 .= '
		<strong>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$array16 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkWrapTemplateTitle', $array16);
};
$arguments14 = array();
$arguments14['value'] = NULL;

$output6 .= isset($arguments14['value']) ? $arguments14['value'] : $renderChildrenClosure15();

$output6 .= '
		</strong>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
			(';
$array23 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('templateRecord.sitetitle', $array23)]);

$output22 .= ')
		';
return $output22;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('templateRecord.sitetitle', $array20);
$array19['1'] = ' != \'\'';

$expression21 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
	</div>
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
		';
$array33 = array (
);
$output32 .= $renderingContext->getVariableProvider()->getByPath('manyTemplatesMenu', $array33);

$output32 .= '
	';
return $output32;
};
$arguments30 = array();
$arguments30['value'] = NULL;

$output29 .= isset($arguments30['value']) ? $arguments30['value'] : $renderChildrenClosure31();

$output29 .= '
';
return $output29;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('manyTemplatesMenu', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = $renderChildrenClosure25;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output514 = '';

$output514 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
$output517 = '';

$output517 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
$output651 = '';

$output651 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
$output654 = '';

$output654 .= '
				<div style="padding-top: 10px;">
					<div class="form-group">
						<h3>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure656 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments655 = array();
$arguments655['key'] = NULL;
$arguments655['id'] = NULL;
$arguments655['default'] = NULL;
$arguments655['arguments'] = NULL;
$arguments655['extensionName'] = NULL;
$arguments655['languageKey'] = NULL;
$arguments655['alternativeLanguageKeys'] = NULL;
$output657 = '';
$array658 = array (
);
$output657 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array658);

$output657 .= 'editProperty';
$arguments655['key'] = $output657;

$output654 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments655, $renderChildrenClosure656, $renderingContext)]);

$output654 .= '
						</h3>
						<label>';
$array659 = array (
);
$output654 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array659)]);

$output654 .= ' =</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments660 = array();
$arguments660['additionalAttributes'] = NULL;
$arguments660['data'] = NULL;
$arguments660['name'] = NULL;
$arguments660['value'] = NULL;
$arguments660['property'] = NULL;
$arguments660['autofocus'] = NULL;
$arguments660['disabled'] = NULL;
$arguments660['maxlength'] = NULL;
$arguments660['readonly'] = NULL;
$arguments660['size'] = NULL;
$arguments660['placeholder'] = NULL;
$arguments660['pattern'] = NULL;
$arguments660['errorClass'] = 'f3-form-error';
$arguments660['class'] = NULL;
$arguments660['dir'] = NULL;
$arguments660['id'] = NULL;
$arguments660['lang'] = NULL;
$arguments660['style'] = NULL;
$arguments660['title'] = NULL;
$arguments660['accesskey'] = NULL;
$arguments660['tabindex'] = NULL;
$arguments660['onclick'] = NULL;
$arguments660['required'] = false;
$arguments660['type'] = 'text';
$arguments660['class'] = 'form-control';
$output662 = '';

$output662 .= 'data[';
$array663 = array (
);
$output662 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array663);

$output662 .= '][value]';
$arguments660['name'] = $output662;
$array664 = array (
);$arguments660['value'] = $renderingContext->getVariableProvider()->getByPath('theSetupValue', $array664);

$output654 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);

$output654 .= '
					</div>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure666 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments665 = array();
$arguments665['additionalAttributes'] = NULL;
$arguments665['data'] = NULL;
$arguments665['name'] = NULL;
$arguments665['value'] = NULL;
$arguments665['property'] = NULL;
$arguments665['disabled'] = NULL;
$arguments665['class'] = NULL;
$arguments665['dir'] = NULL;
$arguments665['id'] = NULL;
$arguments665['lang'] = NULL;
$arguments665['style'] = NULL;
$arguments665['title'] = NULL;
$arguments665['accesskey'] = NULL;
$arguments665['tabindex'] = NULL;
$arguments665['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure668 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments667 = array();
$arguments667['key'] = NULL;
$arguments667['id'] = NULL;
$arguments667['default'] = NULL;
$arguments667['arguments'] = NULL;
$arguments667['extensionName'] = NULL;
$arguments667['languageKey'] = NULL;
$arguments667['alternativeLanguageKeys'] = NULL;
$output669 = '';
$array670 = array (
);
$output669 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array670);

$output669 .= 'updateButton';
$arguments667['key'] = $output669;
$arguments665['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments667, $renderChildrenClosure668, $renderingContext);
$arguments665['class'] = 'btn btn-default';
$arguments665['name'] = 'update_value';

$output654 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments665, $renderChildrenClosure666, $renderingContext);

$output654 .= '
				</div>
				<div style="padding-top: 20px">
					<div class="form-group">
						<h3>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments671 = array();
$arguments671['key'] = NULL;
$arguments671['id'] = NULL;
$arguments671['default'] = NULL;
$arguments671['arguments'] = NULL;
$arguments671['extensionName'] = NULL;
$arguments671['languageKey'] = NULL;
$arguments671['alternativeLanguageKeys'] = NULL;
$output673 = '';
$array674 = array (
);
$output673 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array674);

$output673 .= 'addProperty';
$arguments671['key'] = $output673;

$output654 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext)]);

$output654 .= '
						</h3>
					</div>
					<div class="form-inline form-inline-spaced">
						<div class="form-group">
							<label class="sr-only">';
$array675 = array (
);
$output654 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array675)]);

$output654 .= '.</label>
							<div class="input-group">
								<div class="input-group-addon">';
$array676 = array (
);
$output654 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array676)]);

$output654 .= '.</div>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure678 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments677 = array();
$arguments677['additionalAttributes'] = NULL;
$arguments677['data'] = NULL;
$arguments677['name'] = NULL;
$arguments677['value'] = NULL;
$arguments677['property'] = NULL;
$arguments677['autofocus'] = NULL;
$arguments677['disabled'] = NULL;
$arguments677['maxlength'] = NULL;
$arguments677['readonly'] = NULL;
$arguments677['size'] = NULL;
$arguments677['placeholder'] = NULL;
$arguments677['pattern'] = NULL;
$arguments677['errorClass'] = 'f3-form-error';
$arguments677['class'] = NULL;
$arguments677['dir'] = NULL;
$arguments677['id'] = NULL;
$arguments677['lang'] = NULL;
$arguments677['style'] = NULL;
$arguments677['title'] = NULL;
$arguments677['accesskey'] = NULL;
$arguments677['tabindex'] = NULL;
$arguments677['onclick'] = NULL;
$arguments677['required'] = false;
$arguments677['type'] = 'text';
$arguments677['class'] = 'form-control';
$output679 = '';

$output679 .= 'data[';
$array680 = array (
);
$output679 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array680);

$output679 .= '][name]';
$arguments677['name'] = $output679;

$output654 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments677, $renderChildrenClosure678, $renderingContext);

$output654 .= '
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>=</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure682 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments681 = array();
$arguments681['additionalAttributes'] = NULL;
$arguments681['data'] = NULL;
$arguments681['name'] = NULL;
$arguments681['value'] = NULL;
$arguments681['property'] = NULL;
$arguments681['autofocus'] = NULL;
$arguments681['disabled'] = NULL;
$arguments681['maxlength'] = NULL;
$arguments681['readonly'] = NULL;
$arguments681['size'] = NULL;
$arguments681['placeholder'] = NULL;
$arguments681['pattern'] = NULL;
$arguments681['errorClass'] = 'f3-form-error';
$arguments681['class'] = NULL;
$arguments681['dir'] = NULL;
$arguments681['id'] = NULL;
$arguments681['lang'] = NULL;
$arguments681['style'] = NULL;
$arguments681['title'] = NULL;
$arguments681['accesskey'] = NULL;
$arguments681['tabindex'] = NULL;
$arguments681['onclick'] = NULL;
$arguments681['required'] = false;
$arguments681['type'] = 'text';
$arguments681['class'] = 'form-control';
$output683 = '';

$output683 .= 'data[';
$array684 = array (
);
$output683 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array684);

$output683 .= '][propertyValue]';
$arguments681['name'] = $output683;

$output654 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments681, $renderChildrenClosure682, $renderingContext);

$output654 .= '
					</div>
					<div class="form-group">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure686 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments685 = array();
$arguments685['additionalAttributes'] = NULL;
$arguments685['data'] = NULL;
$arguments685['name'] = NULL;
$arguments685['value'] = NULL;
$arguments685['property'] = NULL;
$arguments685['disabled'] = NULL;
$arguments685['class'] = NULL;
$arguments685['dir'] = NULL;
$arguments685['id'] = NULL;
$arguments685['lang'] = NULL;
$arguments685['style'] = NULL;
$arguments685['title'] = NULL;
$arguments685['accesskey'] = NULL;
$arguments685['tabindex'] = NULL;
$arguments685['onclick'] = NULL;
$arguments685['class'] = 'btn btn-default';
$arguments685['name'] = 'add_property';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments687 = array();
$arguments687['key'] = NULL;
$arguments687['id'] = NULL;
$arguments687['default'] = NULL;
$arguments687['arguments'] = NULL;
$arguments687['extensionName'] = NULL;
$arguments687['languageKey'] = NULL;
$arguments687['alternativeLanguageKeys'] = NULL;
$output689 = '';
$array690 = array (
);
$output689 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array690);

$output689 .= 'addButton';
$arguments687['key'] = $output689;
$arguments685['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments687, $renderChildrenClosure688, $renderingContext);

$output654 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments685, $renderChildrenClosure686, $renderingContext);

$output654 .= '
					</div>
				</div>
				<div style="padding-top: 20px;">
					<div class="form-group">
						<h3>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure692 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments691 = array();
$arguments691['key'] = NULL;
$arguments691['id'] = NULL;
$arguments691['default'] = NULL;
$arguments691['arguments'] = NULL;
$arguments691['extensionName'] = NULL;
$arguments691['languageKey'] = NULL;
$arguments691['alternativeLanguageKeys'] = NULL;
$output693 = '';
$array694 = array (
);
$output693 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array694);

$output693 .= 'clearObject';
$arguments691['key'] = $output693;

$output654 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments691, $renderChildrenClosure692, $renderingContext)]);

$output654 .= '
						</h3>
					</div>
					<div class="form-inline form-inline-spaced">
						<div class="form-group">
							<div class="checkbox">
								<label>
									';
$array695 = array (
);
$output654 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array695)]);

$output654 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure697 = function() use ($renderingContext, $self) {
$output698 = '';

$output698 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure700 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments699 = array();
$arguments699['key'] = NULL;
$arguments699['id'] = NULL;
$arguments699['default'] = NULL;
$arguments699['arguments'] = NULL;
$arguments699['extensionName'] = NULL;
$arguments699['languageKey'] = NULL;
$arguments699['alternativeLanguageKeys'] = NULL;
$output701 = '';
$array702 = array (
);
$output701 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array702);

$output701 .= 'clear';
$arguments699['key'] = $output701;

$output698 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments699, $renderChildrenClosure700, $renderingContext);

$output698 .= '
									';
return $output698;
};
$arguments696 = array();
$arguments696['value'] = NULL;
$arguments696['mode'] = 'upper';
$arguments696['mode'] = 'upper';

$output654 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments696, $renderChildrenClosure697, $renderingContext)]);

$output654 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure704 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments703 = array();
$arguments703['additionalAttributes'] = NULL;
$arguments703['data'] = NULL;
$arguments703['name'] = NULL;
$arguments703['value'] = NULL;
$arguments703['property'] = NULL;
$arguments703['disabled'] = NULL;
$arguments703['errorClass'] = 'f3-form-error';
$arguments703['class'] = NULL;
$arguments703['dir'] = NULL;
$arguments703['id'] = NULL;
$arguments703['lang'] = NULL;
$arguments703['style'] = NULL;
$arguments703['title'] = NULL;
$arguments703['accesskey'] = NULL;
$arguments703['tabindex'] = NULL;
$arguments703['onclick'] = NULL;
$arguments703['checked'] = NULL;
$arguments703['multiple'] = false;
$output705 = '';

$output705 .= 'data[';
$array706 = array (
);
$output705 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array706);

$output705 .= '][clearValue]';
$arguments703['name'] = $output705;
$arguments703['value'] = 1;

$output654 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments703, $renderChildrenClosure704, $renderingContext);

$output654 .= '
								</label>
							</div>
						</div>
						<div class="form-group">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure708 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments707 = array();
$arguments707['additionalAttributes'] = NULL;
$arguments707['data'] = NULL;
$arguments707['name'] = NULL;
$arguments707['value'] = NULL;
$arguments707['property'] = NULL;
$arguments707['disabled'] = NULL;
$arguments707['class'] = NULL;
$arguments707['dir'] = NULL;
$arguments707['id'] = NULL;
$arguments707['lang'] = NULL;
$arguments707['style'] = NULL;
$arguments707['title'] = NULL;
$arguments707['accesskey'] = NULL;
$arguments707['tabindex'] = NULL;
$arguments707['onclick'] = NULL;
$arguments707['class'] = 'btn btn-default';
$arguments707['name'] = 'clear_object';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure710 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments709 = array();
$arguments709['key'] = NULL;
$arguments709['id'] = NULL;
$arguments709['default'] = NULL;
$arguments709['arguments'] = NULL;
$arguments709['extensionName'] = NULL;
$arguments709['languageKey'] = NULL;
$arguments709['alternativeLanguageKeys'] = NULL;
$output711 = '';
$array712 = array (
);
$output711 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array712);

$output711 .= 'clearButton';
$arguments709['key'] = $output711;
$arguments707['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments709, $renderChildrenClosure710, $renderingContext);

$output654 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments707, $renderChildrenClosure708, $renderingContext);

$output654 .= '
						</div>
					</div>
				</div>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
$output746 = '';

$output746 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure748 = function() use ($renderingContext, $self) {
$output749 = '';

$output749 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure751 = function() use ($renderingContext, $self) {
$output755 = '';

$output755 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure757 = function() use ($renderingContext, $self) {
$output759 = '';

$output759 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure761 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments760 = array();
$arguments760['key'] = NULL;
$arguments760['id'] = NULL;
$arguments760['default'] = NULL;
$arguments760['arguments'] = NULL;
$arguments760['extensionName'] = NULL;
$arguments760['languageKey'] = NULL;
$arguments760['alternativeLanguageKeys'] = NULL;
$output762 = '';
$array763 = array (
);
$output762 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array763);

$output762 .= 'addKey';
$arguments760['key'] = $output762;
// Rendering Array
$array764 = array();
$array765 = array (
);$array764['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array765);
$arguments760['arguments'] = $array764;

$output759 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments760, $renderChildrenClosure761, $renderingContext)]);

$output759 .= '
							';
return $output759;
};
$arguments756 = array();
$arguments756['additionalAttributes'] = NULL;
$arguments756['data'] = NULL;
$arguments756['uri'] = NULL;
$arguments756['defaultScheme'] = 'http';
$arguments756['class'] = NULL;
$arguments756['dir'] = NULL;
$arguments756['id'] = NULL;
$arguments756['lang'] = NULL;
$arguments756['style'] = NULL;
$arguments756['title'] = NULL;
$arguments756['accesskey'] = NULL;
$arguments756['tabindex'] = NULL;
$arguments756['onclick'] = NULL;
$arguments756['name'] = NULL;
$arguments756['rel'] = NULL;
$arguments756['rev'] = NULL;
$arguments756['target'] = NULL;
$array758 = array (
);$arguments756['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array758);
$arguments756['defaultScheme'] = '';
$arguments756['class'] = 'btn btn-default';

$output755 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments756, $renderChildrenClosure757, $renderingContext);

$output755 .= '
						';
return $output755;
};
$arguments750 = array();
$arguments750['then'] = NULL;
$arguments750['else'] = NULL;
$arguments750['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array752 = array();
$array753 = array (
);$array752['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array753);

$expression754 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments750['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression754(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array752)
					),
					$renderingContext
				);
$arguments750['__thenClosure'] = $renderChildrenClosure751;

$output749 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments750, $renderChildrenClosure751, $renderingContext);

$output749 .= '
					';
return $output749;
};
$arguments747 = array();

$output746 .= '';

$output746 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure767 = function() use ($renderingContext, $self) {
$output768 = '';

$output768 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure770 = function() use ($renderingContext, $self) {
$output772 = '';

$output772 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure774 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments773 = array();
$arguments773['key'] = NULL;
$arguments773['id'] = NULL;
$arguments773['default'] = NULL;
$arguments773['arguments'] = NULL;
$arguments773['extensionName'] = NULL;
$arguments773['languageKey'] = NULL;
$arguments773['alternativeLanguageKeys'] = NULL;
$output775 = '';
$array776 = array (
);
$output775 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array776);

$output775 .= 'removeKey';
$arguments773['key'] = $output775;
// Rendering Array
$array777 = array();
$array778 = array (
);$array777['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array778);
$arguments773['arguments'] = $array777;

$output772 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments773, $renderChildrenClosure774, $renderingContext)]);

$output772 .= '
						';
return $output772;
};
$arguments769 = array();
$arguments769['additionalAttributes'] = NULL;
$arguments769['data'] = NULL;
$arguments769['uri'] = NULL;
$arguments769['defaultScheme'] = 'http';
$arguments769['class'] = NULL;
$arguments769['dir'] = NULL;
$arguments769['id'] = NULL;
$arguments769['lang'] = NULL;
$arguments769['style'] = NULL;
$arguments769['title'] = NULL;
$arguments769['accesskey'] = NULL;
$arguments769['tabindex'] = NULL;
$arguments769['onclick'] = NULL;
$arguments769['name'] = NULL;
$arguments769['rel'] = NULL;
$arguments769['rev'] = NULL;
$arguments769['target'] = NULL;
$array771 = array (
);$arguments769['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array771);
$arguments769['defaultScheme'] = '';
$arguments769['class'] = 'btn btn-default';

$output768 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments769, $renderChildrenClosure770, $renderingContext);

$output768 .= '
					';
return $output768;
};
$arguments766 = array();
$arguments766['if'] = NULL;

$output746 .= '';

$output746 .= '
				';
return $output746;
};
$arguments713 = array();
$arguments713['then'] = NULL;
$arguments713['else'] = NULL;
$arguments713['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array743 = array();
$array744 = array (
);$array743['0'] = $renderingContext->getVariableProvider()->getByPath('isNotInTopLevelKeyList', $array744);

$expression745 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments713['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression745(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array743)
					),
					$renderingContext
				);
$arguments713['__thenClosure'] = function() use ($renderingContext, $self) {
$output715 = '';

$output715 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure717 = function() use ($renderingContext, $self) {
$output721 = '';

$output721 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
$output725 = '';

$output725 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments726 = array();
$arguments726['key'] = NULL;
$arguments726['id'] = NULL;
$arguments726['default'] = NULL;
$arguments726['arguments'] = NULL;
$arguments726['extensionName'] = NULL;
$arguments726['languageKey'] = NULL;
$arguments726['alternativeLanguageKeys'] = NULL;
$output728 = '';
$array729 = array (
);
$output728 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array729);

$output728 .= 'addKey';
$arguments726['key'] = $output728;
// Rendering Array
$array730 = array();
$array731 = array (
);$array730['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array731);
$arguments726['arguments'] = $array730;

$output725 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments726, $renderChildrenClosure727, $renderingContext)]);

$output725 .= '
							';
return $output725;
};
$arguments722 = array();
$arguments722['additionalAttributes'] = NULL;
$arguments722['data'] = NULL;
$arguments722['uri'] = NULL;
$arguments722['defaultScheme'] = 'http';
$arguments722['class'] = NULL;
$arguments722['dir'] = NULL;
$arguments722['id'] = NULL;
$arguments722['lang'] = NULL;
$arguments722['style'] = NULL;
$arguments722['title'] = NULL;
$arguments722['accesskey'] = NULL;
$arguments722['tabindex'] = NULL;
$arguments722['onclick'] = NULL;
$arguments722['name'] = NULL;
$arguments722['rel'] = NULL;
$arguments722['rev'] = NULL;
$arguments722['target'] = NULL;
$array724 = array (
);$arguments722['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array724);
$arguments722['defaultScheme'] = '';
$arguments722['class'] = 'btn btn-default';

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments722, $renderChildrenClosure723, $renderingContext);

$output721 .= '
						';
return $output721;
};
$arguments716 = array();
$arguments716['then'] = NULL;
$arguments716['else'] = NULL;
$arguments716['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array718 = array();
$array719 = array (
);$array718['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array719);

$expression720 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments716['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression720(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array718)
					),
					$renderingContext
				);
$arguments716['__thenClosure'] = $renderChildrenClosure717;

$output715 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments716, $renderChildrenClosure717, $renderingContext);

$output715 .= '
					';
return $output715;
};
$arguments713['__elseClosures'][] = function() use ($renderingContext, $self) {
$output732 = '';

$output732 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure734 = function() use ($renderingContext, $self) {
$output736 = '';

$output736 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure738 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments737 = array();
$arguments737['key'] = NULL;
$arguments737['id'] = NULL;
$arguments737['default'] = NULL;
$arguments737['arguments'] = NULL;
$arguments737['extensionName'] = NULL;
$arguments737['languageKey'] = NULL;
$arguments737['alternativeLanguageKeys'] = NULL;
$output739 = '';
$array740 = array (
);
$output739 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array740);

$output739 .= 'removeKey';
$arguments737['key'] = $output739;
// Rendering Array
$array741 = array();
$array742 = array (
);$array741['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array742);
$arguments737['arguments'] = $array741;

$output736 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments737, $renderChildrenClosure738, $renderingContext)]);

$output736 .= '
						';
return $output736;
};
$arguments733 = array();
$arguments733['additionalAttributes'] = NULL;
$arguments733['data'] = NULL;
$arguments733['uri'] = NULL;
$arguments733['defaultScheme'] = 'http';
$arguments733['class'] = NULL;
$arguments733['dir'] = NULL;
$arguments733['id'] = NULL;
$arguments733['lang'] = NULL;
$arguments733['style'] = NULL;
$arguments733['title'] = NULL;
$arguments733['accesskey'] = NULL;
$arguments733['tabindex'] = NULL;
$arguments733['onclick'] = NULL;
$arguments733['name'] = NULL;
$arguments733['rel'] = NULL;
$arguments733['rev'] = NULL;
$arguments733['target'] = NULL;
$array735 = array (
);$arguments733['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array735);
$arguments733['defaultScheme'] = '';
$arguments733['class'] = 'btn btn-default';

$output732 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments733, $renderChildrenClosure734, $renderingContext);

$output732 .= '
					';
return $output732;
};

$output654 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments713, $renderChildrenClosure714, $renderingContext);

$output654 .= '
			';
return $output654;
};
$arguments652 = array();

$output651 .= '';

$output651 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure780 = function() use ($renderingContext, $self) {
$output781 = '';

$output781 .= '
				';
$array782 = array (
);
$output781 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array782)]);

$output781 .= ' = <strong>';
$array783 = array (
);
$output781 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theSetupValue', $array783)]);

$output781 .= '</strong>
			';
return $output781;
};
$arguments779 = array();
$arguments779['if'] = NULL;

$output651 .= '';

$output651 .= '
		';
return $output651;
};
$arguments518 = array();
$arguments518['then'] = NULL;
$arguments518['else'] = NULL;
$arguments518['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array648 = array();
$array649 = array (
);$array648['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array649);

$expression650 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments518['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression650(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array648)
					),
					$renderingContext
				);
$arguments518['__thenClosure'] = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
				<div style="padding-top: 10px;">
					<div class="form-group">
						<h3>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments521 = array();
$arguments521['key'] = NULL;
$arguments521['id'] = NULL;
$arguments521['default'] = NULL;
$arguments521['arguments'] = NULL;
$arguments521['extensionName'] = NULL;
$arguments521['languageKey'] = NULL;
$arguments521['alternativeLanguageKeys'] = NULL;
$output523 = '';
$array524 = array (
);
$output523 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array524);

$output523 .= 'editProperty';
$arguments521['key'] = $output523;

$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext)]);

$output520 .= '
						</h3>
						<label>';
$array525 = array (
);
$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array525)]);

$output520 .= ' =</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments526 = array();
$arguments526['additionalAttributes'] = NULL;
$arguments526['data'] = NULL;
$arguments526['name'] = NULL;
$arguments526['value'] = NULL;
$arguments526['property'] = NULL;
$arguments526['autofocus'] = NULL;
$arguments526['disabled'] = NULL;
$arguments526['maxlength'] = NULL;
$arguments526['readonly'] = NULL;
$arguments526['size'] = NULL;
$arguments526['placeholder'] = NULL;
$arguments526['pattern'] = NULL;
$arguments526['errorClass'] = 'f3-form-error';
$arguments526['class'] = NULL;
$arguments526['dir'] = NULL;
$arguments526['id'] = NULL;
$arguments526['lang'] = NULL;
$arguments526['style'] = NULL;
$arguments526['title'] = NULL;
$arguments526['accesskey'] = NULL;
$arguments526['tabindex'] = NULL;
$arguments526['onclick'] = NULL;
$arguments526['required'] = false;
$arguments526['type'] = 'text';
$arguments526['class'] = 'form-control';
$output528 = '';

$output528 .= 'data[';
$array529 = array (
);
$output528 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array529);

$output528 .= '][value]';
$arguments526['name'] = $output528;
$array530 = array (
);$arguments526['value'] = $renderingContext->getVariableProvider()->getByPath('theSetupValue', $array530);

$output520 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output520 .= '
					</div>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments531 = array();
$arguments531['additionalAttributes'] = NULL;
$arguments531['data'] = NULL;
$arguments531['name'] = NULL;
$arguments531['value'] = NULL;
$arguments531['property'] = NULL;
$arguments531['disabled'] = NULL;
$arguments531['class'] = NULL;
$arguments531['dir'] = NULL;
$arguments531['id'] = NULL;
$arguments531['lang'] = NULL;
$arguments531['style'] = NULL;
$arguments531['title'] = NULL;
$arguments531['accesskey'] = NULL;
$arguments531['tabindex'] = NULL;
$arguments531['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments533 = array();
$arguments533['key'] = NULL;
$arguments533['id'] = NULL;
$arguments533['default'] = NULL;
$arguments533['arguments'] = NULL;
$arguments533['extensionName'] = NULL;
$arguments533['languageKey'] = NULL;
$arguments533['alternativeLanguageKeys'] = NULL;
$output535 = '';
$array536 = array (
);
$output535 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array536);

$output535 .= 'updateButton';
$arguments533['key'] = $output535;
$arguments531['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);
$arguments531['class'] = 'btn btn-default';
$arguments531['name'] = 'update_value';

$output520 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments531, $renderChildrenClosure532, $renderingContext);

$output520 .= '
				</div>
				<div style="padding-top: 20px">
					<div class="form-group">
						<h3>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments537 = array();
$arguments537['key'] = NULL;
$arguments537['id'] = NULL;
$arguments537['default'] = NULL;
$arguments537['arguments'] = NULL;
$arguments537['extensionName'] = NULL;
$arguments537['languageKey'] = NULL;
$arguments537['alternativeLanguageKeys'] = NULL;
$output539 = '';
$array540 = array (
);
$output539 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array540);

$output539 .= 'addProperty';
$arguments537['key'] = $output539;

$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments537, $renderChildrenClosure538, $renderingContext)]);

$output520 .= '
						</h3>
					</div>
					<div class="form-inline form-inline-spaced">
						<div class="form-group">
							<label class="sr-only">';
$array541 = array (
);
$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array541)]);

$output520 .= '.</label>
							<div class="input-group">
								<div class="input-group-addon">';
$array542 = array (
);
$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array542)]);

$output520 .= '.</div>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure544 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments543 = array();
$arguments543['additionalAttributes'] = NULL;
$arguments543['data'] = NULL;
$arguments543['name'] = NULL;
$arguments543['value'] = NULL;
$arguments543['property'] = NULL;
$arguments543['autofocus'] = NULL;
$arguments543['disabled'] = NULL;
$arguments543['maxlength'] = NULL;
$arguments543['readonly'] = NULL;
$arguments543['size'] = NULL;
$arguments543['placeholder'] = NULL;
$arguments543['pattern'] = NULL;
$arguments543['errorClass'] = 'f3-form-error';
$arguments543['class'] = NULL;
$arguments543['dir'] = NULL;
$arguments543['id'] = NULL;
$arguments543['lang'] = NULL;
$arguments543['style'] = NULL;
$arguments543['title'] = NULL;
$arguments543['accesskey'] = NULL;
$arguments543['tabindex'] = NULL;
$arguments543['onclick'] = NULL;
$arguments543['required'] = false;
$arguments543['type'] = 'text';
$arguments543['class'] = 'form-control';
$output545 = '';

$output545 .= 'data[';
$array546 = array (
);
$output545 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array546);

$output545 .= '][name]';
$arguments543['name'] = $output545;

$output520 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments543, $renderChildrenClosure544, $renderingContext);

$output520 .= '
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>=</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments547 = array();
$arguments547['additionalAttributes'] = NULL;
$arguments547['data'] = NULL;
$arguments547['name'] = NULL;
$arguments547['value'] = NULL;
$arguments547['property'] = NULL;
$arguments547['autofocus'] = NULL;
$arguments547['disabled'] = NULL;
$arguments547['maxlength'] = NULL;
$arguments547['readonly'] = NULL;
$arguments547['size'] = NULL;
$arguments547['placeholder'] = NULL;
$arguments547['pattern'] = NULL;
$arguments547['errorClass'] = 'f3-form-error';
$arguments547['class'] = NULL;
$arguments547['dir'] = NULL;
$arguments547['id'] = NULL;
$arguments547['lang'] = NULL;
$arguments547['style'] = NULL;
$arguments547['title'] = NULL;
$arguments547['accesskey'] = NULL;
$arguments547['tabindex'] = NULL;
$arguments547['onclick'] = NULL;
$arguments547['required'] = false;
$arguments547['type'] = 'text';
$arguments547['class'] = 'form-control';
$output549 = '';

$output549 .= 'data[';
$array550 = array (
);
$output549 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array550);

$output549 .= '][propertyValue]';
$arguments547['name'] = $output549;

$output520 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext);

$output520 .= '
					</div>
					<div class="form-group">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments551 = array();
$arguments551['additionalAttributes'] = NULL;
$arguments551['data'] = NULL;
$arguments551['name'] = NULL;
$arguments551['value'] = NULL;
$arguments551['property'] = NULL;
$arguments551['disabled'] = NULL;
$arguments551['class'] = NULL;
$arguments551['dir'] = NULL;
$arguments551['id'] = NULL;
$arguments551['lang'] = NULL;
$arguments551['style'] = NULL;
$arguments551['title'] = NULL;
$arguments551['accesskey'] = NULL;
$arguments551['tabindex'] = NULL;
$arguments551['onclick'] = NULL;
$arguments551['class'] = 'btn btn-default';
$arguments551['name'] = 'add_property';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments553 = array();
$arguments553['key'] = NULL;
$arguments553['id'] = NULL;
$arguments553['default'] = NULL;
$arguments553['arguments'] = NULL;
$arguments553['extensionName'] = NULL;
$arguments553['languageKey'] = NULL;
$arguments553['alternativeLanguageKeys'] = NULL;
$output555 = '';
$array556 = array (
);
$output555 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array556);

$output555 .= 'addButton';
$arguments553['key'] = $output555;
$arguments551['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output520 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments551, $renderChildrenClosure552, $renderingContext);

$output520 .= '
					</div>
				</div>
				<div style="padding-top: 20px;">
					<div class="form-group">
						<h3>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure558 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments557 = array();
$arguments557['key'] = NULL;
$arguments557['id'] = NULL;
$arguments557['default'] = NULL;
$arguments557['arguments'] = NULL;
$arguments557['extensionName'] = NULL;
$arguments557['languageKey'] = NULL;
$arguments557['alternativeLanguageKeys'] = NULL;
$output559 = '';
$array560 = array (
);
$output559 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array560);

$output559 .= 'clearObject';
$arguments557['key'] = $output559;

$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments557, $renderChildrenClosure558, $renderingContext)]);

$output520 .= '
						</h3>
					</div>
					<div class="form-inline form-inline-spaced">
						<div class="form-group">
							<div class="checkbox">
								<label>
									';
$array561 = array (
);
$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array561)]);

$output520 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
$output564 = '';

$output564 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments565 = array();
$arguments565['key'] = NULL;
$arguments565['id'] = NULL;
$arguments565['default'] = NULL;
$arguments565['arguments'] = NULL;
$arguments565['extensionName'] = NULL;
$arguments565['languageKey'] = NULL;
$arguments565['alternativeLanguageKeys'] = NULL;
$output567 = '';
$array568 = array (
);
$output567 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array568);

$output567 .= 'clear';
$arguments565['key'] = $output567;

$output564 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);

$output564 .= '
									';
return $output564;
};
$arguments562 = array();
$arguments562['value'] = NULL;
$arguments562['mode'] = 'upper';
$arguments562['mode'] = 'upper';

$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext)]);

$output520 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['additionalAttributes'] = NULL;
$arguments569['data'] = NULL;
$arguments569['name'] = NULL;
$arguments569['value'] = NULL;
$arguments569['property'] = NULL;
$arguments569['disabled'] = NULL;
$arguments569['errorClass'] = 'f3-form-error';
$arguments569['class'] = NULL;
$arguments569['dir'] = NULL;
$arguments569['id'] = NULL;
$arguments569['lang'] = NULL;
$arguments569['style'] = NULL;
$arguments569['title'] = NULL;
$arguments569['accesskey'] = NULL;
$arguments569['tabindex'] = NULL;
$arguments569['onclick'] = NULL;
$arguments569['checked'] = NULL;
$arguments569['multiple'] = false;
$output571 = '';

$output571 .= 'data[';
$array572 = array (
);
$output571 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array572);

$output571 .= '][clearValue]';
$arguments569['name'] = $output571;
$arguments569['value'] = 1;

$output520 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);

$output520 .= '
								</label>
							</div>
						</div>
						<div class="form-group">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure574 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments573 = array();
$arguments573['additionalAttributes'] = NULL;
$arguments573['data'] = NULL;
$arguments573['name'] = NULL;
$arguments573['value'] = NULL;
$arguments573['property'] = NULL;
$arguments573['disabled'] = NULL;
$arguments573['class'] = NULL;
$arguments573['dir'] = NULL;
$arguments573['id'] = NULL;
$arguments573['lang'] = NULL;
$arguments573['style'] = NULL;
$arguments573['title'] = NULL;
$arguments573['accesskey'] = NULL;
$arguments573['tabindex'] = NULL;
$arguments573['onclick'] = NULL;
$arguments573['class'] = 'btn btn-default';
$arguments573['name'] = 'clear_object';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments575 = array();
$arguments575['key'] = NULL;
$arguments575['id'] = NULL;
$arguments575['default'] = NULL;
$arguments575['arguments'] = NULL;
$arguments575['extensionName'] = NULL;
$arguments575['languageKey'] = NULL;
$arguments575['alternativeLanguageKeys'] = NULL;
$output577 = '';
$array578 = array (
);
$output577 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array578);

$output577 .= 'clearButton';
$arguments575['key'] = $output577;
$arguments573['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments575, $renderChildrenClosure576, $renderingContext);

$output520 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments573, $renderChildrenClosure574, $renderingContext);

$output520 .= '
						</div>
					</div>
				</div>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
$output612 = '';

$output612 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure614 = function() use ($renderingContext, $self) {
$output615 = '';

$output615 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure617 = function() use ($renderingContext, $self) {
$output621 = '';

$output621 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
$output625 = '';

$output625 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure627 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments626 = array();
$arguments626['key'] = NULL;
$arguments626['id'] = NULL;
$arguments626['default'] = NULL;
$arguments626['arguments'] = NULL;
$arguments626['extensionName'] = NULL;
$arguments626['languageKey'] = NULL;
$arguments626['alternativeLanguageKeys'] = NULL;
$output628 = '';
$array629 = array (
);
$output628 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array629);

$output628 .= 'addKey';
$arguments626['key'] = $output628;
// Rendering Array
$array630 = array();
$array631 = array (
);$array630['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array631);
$arguments626['arguments'] = $array630;

$output625 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments626, $renderChildrenClosure627, $renderingContext)]);

$output625 .= '
							';
return $output625;
};
$arguments622 = array();
$arguments622['additionalAttributes'] = NULL;
$arguments622['data'] = NULL;
$arguments622['uri'] = NULL;
$arguments622['defaultScheme'] = 'http';
$arguments622['class'] = NULL;
$arguments622['dir'] = NULL;
$arguments622['id'] = NULL;
$arguments622['lang'] = NULL;
$arguments622['style'] = NULL;
$arguments622['title'] = NULL;
$arguments622['accesskey'] = NULL;
$arguments622['tabindex'] = NULL;
$arguments622['onclick'] = NULL;
$arguments622['name'] = NULL;
$arguments622['rel'] = NULL;
$arguments622['rev'] = NULL;
$arguments622['target'] = NULL;
$array624 = array (
);$arguments622['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array624);
$arguments622['defaultScheme'] = '';
$arguments622['class'] = 'btn btn-default';

$output621 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext);

$output621 .= '
						';
return $output621;
};
$arguments616 = array();
$arguments616['then'] = NULL;
$arguments616['else'] = NULL;
$arguments616['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array618 = array();
$array619 = array (
);$array618['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array619);

$expression620 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments616['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression620(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array618)
					),
					$renderingContext
				);
$arguments616['__thenClosure'] = $renderChildrenClosure617;

$output615 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments616, $renderChildrenClosure617, $renderingContext);

$output615 .= '
					';
return $output615;
};
$arguments613 = array();

$output612 .= '';

$output612 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure633 = function() use ($renderingContext, $self) {
$output634 = '';

$output634 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure636 = function() use ($renderingContext, $self) {
$output638 = '';

$output638 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments639 = array();
$arguments639['key'] = NULL;
$arguments639['id'] = NULL;
$arguments639['default'] = NULL;
$arguments639['arguments'] = NULL;
$arguments639['extensionName'] = NULL;
$arguments639['languageKey'] = NULL;
$arguments639['alternativeLanguageKeys'] = NULL;
$output641 = '';
$array642 = array (
);
$output641 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array642);

$output641 .= 'removeKey';
$arguments639['key'] = $output641;
// Rendering Array
$array643 = array();
$array644 = array (
);$array643['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array644);
$arguments639['arguments'] = $array643;

$output638 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext)]);

$output638 .= '
						';
return $output638;
};
$arguments635 = array();
$arguments635['additionalAttributes'] = NULL;
$arguments635['data'] = NULL;
$arguments635['uri'] = NULL;
$arguments635['defaultScheme'] = 'http';
$arguments635['class'] = NULL;
$arguments635['dir'] = NULL;
$arguments635['id'] = NULL;
$arguments635['lang'] = NULL;
$arguments635['style'] = NULL;
$arguments635['title'] = NULL;
$arguments635['accesskey'] = NULL;
$arguments635['tabindex'] = NULL;
$arguments635['onclick'] = NULL;
$arguments635['name'] = NULL;
$arguments635['rel'] = NULL;
$arguments635['rev'] = NULL;
$arguments635['target'] = NULL;
$array637 = array (
);$arguments635['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array637);
$arguments635['defaultScheme'] = '';
$arguments635['class'] = 'btn btn-default';

$output634 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments635, $renderChildrenClosure636, $renderingContext);

$output634 .= '
					';
return $output634;
};
$arguments632 = array();
$arguments632['if'] = NULL;

$output612 .= '';

$output612 .= '
				';
return $output612;
};
$arguments579 = array();
$arguments579['then'] = NULL;
$arguments579['else'] = NULL;
$arguments579['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array609 = array();
$array610 = array (
);$array609['0'] = $renderingContext->getVariableProvider()->getByPath('isNotInTopLevelKeyList', $array610);

$expression611 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments579['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression611(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array609)
					),
					$renderingContext
				);
$arguments579['__thenClosure'] = function() use ($renderingContext, $self) {
$output581 = '';

$output581 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
$output587 = '';

$output587 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure589 = function() use ($renderingContext, $self) {
$output591 = '';

$output591 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['key'] = NULL;
$arguments592['id'] = NULL;
$arguments592['default'] = NULL;
$arguments592['arguments'] = NULL;
$arguments592['extensionName'] = NULL;
$arguments592['languageKey'] = NULL;
$arguments592['alternativeLanguageKeys'] = NULL;
$output594 = '';
$array595 = array (
);
$output594 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array595);

$output594 .= 'addKey';
$arguments592['key'] = $output594;
// Rendering Array
$array596 = array();
$array597 = array (
);$array596['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array597);
$arguments592['arguments'] = $array596;

$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext)]);

$output591 .= '
							';
return $output591;
};
$arguments588 = array();
$arguments588['additionalAttributes'] = NULL;
$arguments588['data'] = NULL;
$arguments588['uri'] = NULL;
$arguments588['defaultScheme'] = 'http';
$arguments588['class'] = NULL;
$arguments588['dir'] = NULL;
$arguments588['id'] = NULL;
$arguments588['lang'] = NULL;
$arguments588['style'] = NULL;
$arguments588['title'] = NULL;
$arguments588['accesskey'] = NULL;
$arguments588['tabindex'] = NULL;
$arguments588['onclick'] = NULL;
$arguments588['name'] = NULL;
$arguments588['rel'] = NULL;
$arguments588['rev'] = NULL;
$arguments588['target'] = NULL;
$array590 = array (
);$arguments588['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array590);
$arguments588['defaultScheme'] = '';
$arguments588['class'] = 'btn btn-default';

$output587 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments588, $renderChildrenClosure589, $renderingContext);

$output587 .= '
						';
return $output587;
};
$arguments582 = array();
$arguments582['then'] = NULL;
$arguments582['else'] = NULL;
$arguments582['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array584 = array();
$array585 = array (
);$array584['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array585);

$expression586 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments582['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression586(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array584)
					),
					$renderingContext
				);
$arguments582['__thenClosure'] = $renderChildrenClosure583;

$output581 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext);

$output581 .= '
					';
return $output581;
};
$arguments579['__elseClosures'][] = function() use ($renderingContext, $self) {
$output598 = '';

$output598 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
$output602 = '';

$output602 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments603 = array();
$arguments603['key'] = NULL;
$arguments603['id'] = NULL;
$arguments603['default'] = NULL;
$arguments603['arguments'] = NULL;
$arguments603['extensionName'] = NULL;
$arguments603['languageKey'] = NULL;
$arguments603['alternativeLanguageKeys'] = NULL;
$output605 = '';
$array606 = array (
);
$output605 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array606);

$output605 .= 'removeKey';
$arguments603['key'] = $output605;
// Rendering Array
$array607 = array();
$array608 = array (
);$array607['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array608);
$arguments603['arguments'] = $array607;

$output602 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments603, $renderChildrenClosure604, $renderingContext)]);

$output602 .= '
						';
return $output602;
};
$arguments599 = array();
$arguments599['additionalAttributes'] = NULL;
$arguments599['data'] = NULL;
$arguments599['uri'] = NULL;
$arguments599['defaultScheme'] = 'http';
$arguments599['class'] = NULL;
$arguments599['dir'] = NULL;
$arguments599['id'] = NULL;
$arguments599['lang'] = NULL;
$arguments599['style'] = NULL;
$arguments599['title'] = NULL;
$arguments599['accesskey'] = NULL;
$arguments599['tabindex'] = NULL;
$arguments599['onclick'] = NULL;
$arguments599['name'] = NULL;
$arguments599['rel'] = NULL;
$arguments599['rev'] = NULL;
$arguments599['target'] = NULL;
$array601 = array (
);$arguments599['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array601);
$arguments599['defaultScheme'] = '';
$arguments599['class'] = 'btn btn-default';

$output598 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments599, $renderChildrenClosure600, $renderingContext);

$output598 .= '
					';
return $output598;
};

$output520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments579, $renderChildrenClosure580, $renderingContext);

$output520 .= '
			';
return $output520;
};
$arguments518['__elseClosures'][] = function() use ($renderingContext, $self) {
$output645 = '';

$output645 .= '
				';
$array646 = array (
);
$output645 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array646)]);

$output645 .= ' = <strong>';
$array647 = array (
);
$output645 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theSetupValue', $array647)]);

$output645 .= '</strong>
			';
return $output645;
};

$output517 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext);

$output517 .= '
		<div>
			<hr style="margin-top: 5px; margin-bottom: 5px;"/>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure785 = function() use ($renderingContext, $self) {
$output787 = '';

$output787 .= '
				<strong><i class="fa fa-chevron-left"></i>&nbsp;
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure789 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments788 = array();
$arguments788['key'] = NULL;
$arguments788['id'] = NULL;
$arguments788['default'] = NULL;
$arguments788['arguments'] = NULL;
$arguments788['extensionName'] = NULL;
$arguments788['languageKey'] = NULL;
$arguments788['alternativeLanguageKeys'] = NULL;
$output790 = '';
$array791 = array (
);
$output790 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array791);

$output790 .= 'back';
$arguments788['key'] = $output790;

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments788, $renderChildrenClosure789, $renderingContext)]);

$output787 .= '
				</strong>
			';
return $output787;
};
$arguments784 = array();
$arguments784['additionalAttributes'] = NULL;
$arguments784['data'] = NULL;
$arguments784['uri'] = NULL;
$arguments784['defaultScheme'] = 'http';
$arguments784['class'] = NULL;
$arguments784['dir'] = NULL;
$arguments784['id'] = NULL;
$arguments784['lang'] = NULL;
$arguments784['style'] = NULL;
$arguments784['title'] = NULL;
$arguments784['accesskey'] = NULL;
$arguments784['tabindex'] = NULL;
$arguments784['onclick'] = NULL;
$arguments784['name'] = NULL;
$arguments784['rel'] = NULL;
$arguments784['rev'] = NULL;
$arguments784['target'] = NULL;
$array786 = array (
);$arguments784['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrl', $array786);
$arguments784['defaultScheme'] = '';
$arguments784['class'] = 'btn btn-default';

$output517 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments784, $renderChildrenClosure785, $renderingContext);

$output517 .= '
		</div>
	';
return $output517;
};
$arguments515 = array();

$output514 .= '';

$output514 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure793 = function() use ($renderingContext, $self) {
$output794 = '';

$output794 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure796 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments795 = array();
$arguments795['pageTitle'] = '';
$arguments795['includeCssFiles'] = NULL;
$arguments795['includeJsFiles'] = NULL;
$arguments795['addJsInlineLabels'] = NULL;
$arguments795['includeRequireJsModules'] = NULL;
$arguments795['addInlineSettings'] = NULL;
// Rendering Array
$array797 = array();
$array797['0'] = 'TYPO3/CMS/Tstemplate/TypoScriptObjectBrowser';
$arguments795['includeRequireJsModules'] = $array797;

$output794 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments795, $renderChildrenClosure796, $renderingContext)]);

$output794 .= '
		<div class="tsob-menu">
			<div class="form-inline">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure799 = function() use ($renderingContext, $self) {
$output803 = '';

$output803 .= '
					<div class="form-group">
						<label class="control-label">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure805 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments804 = array();
$arguments804['key'] = NULL;
$arguments804['id'] = NULL;
$arguments804['default'] = NULL;
$arguments804['arguments'] = NULL;
$arguments804['extensionName'] = NULL;
$arguments804['languageKey'] = NULL;
$arguments804['alternativeLanguageKeys'] = NULL;
$output806 = '';
$array807 = array (
);
$output806 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array807);

$output806 .= 'browse';
$arguments804['key'] = $output806;

$output803 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments804, $renderChildrenClosure805, $renderingContext)]);

$output803 .= '
						</label>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure809 = function() use ($renderingContext, $self) {
$array810 = array (
);return $renderingContext->getVariableProvider()->getByPath('browserTypeDropdownMenu', $array810);
};
$arguments808 = array();
$arguments808['value'] = NULL;

$output803 .= isset($arguments808['value']) ? $arguments808['value'] : $renderChildrenClosure809();

$output803 .= '
					</div>
				';
return $output803;
};
$arguments798 = array();
$arguments798['then'] = NULL;
$arguments798['else'] = NULL;
$arguments798['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array800 = array();
$array801 = array (
);$array800['0'] = $renderingContext->getVariableProvider()->getByPath('hasTsBrowserTypes', $array801);

$expression802 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments798['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression802(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array800)
					),
					$renderingContext
				);
$arguments798['__thenClosure'] = $renderChildrenClosure799;

$output794 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments798, $renderChildrenClosure799, $renderingContext);

$output794 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure812 = function() use ($renderingContext, $self) {
$output816 = '';

$output816 .= '
					<div class="form-group">
						<label class="control-label" for="ts_browser_toplevel_';
$array817 = array (
);
$output816 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tsBrowserType', $array817)]);

$output816 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure819 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments818 = array();
$arguments818['key'] = NULL;
$arguments818['id'] = NULL;
$arguments818['default'] = NULL;
$arguments818['arguments'] = NULL;
$arguments818['extensionName'] = NULL;
$arguments818['languageKey'] = NULL;
$arguments818['alternativeLanguageKeys'] = NULL;
$output820 = '';
$array821 = array (
);
$output820 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array821);

$output820 .= 'objectList';
$arguments818['key'] = $output820;

$output816 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments818, $renderChildrenClosure819, $renderingContext)]);

$output816 .= '
						</label>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure823 = function() use ($renderingContext, $self) {
$array824 = array (
);return $renderingContext->getVariableProvider()->getByPath('objectListDropdownMenu', $array824);
};
$arguments822 = array();
$arguments822['value'] = NULL;

$output816 .= isset($arguments822['value']) ? $arguments822['value'] : $renderChildrenClosure823();

$output816 .= '
					</div>
				';
return $output816;
};
$arguments811 = array();
$arguments811['then'] = NULL;
$arguments811['else'] = NULL;
$arguments811['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array813 = array();
$array814 = array (
);$array813['0'] = $renderingContext->getVariableProvider()->getByPath('hasTopLevelInObjectList', $array814);

$expression815 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments811['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression815(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array813)
					),
					$renderingContext
				);
$arguments811['__thenClosure'] = $renderChildrenClosure812;

$output794 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments811, $renderChildrenClosure812, $renderingContext);

$output794 .= '
				<div class="form-group">
					<label class="control-label" for="search_field">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure826 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments825 = array();
$arguments825['key'] = NULL;
$arguments825['id'] = NULL;
$arguments825['default'] = NULL;
$arguments825['arguments'] = NULL;
$arguments825['extensionName'] = NULL;
$arguments825['languageKey'] = NULL;
$arguments825['alternativeLanguageKeys'] = NULL;
$output827 = '';
$array828 = array (
);
$output827 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array828);

$output827 .= 'search';
$arguments825['key'] = $output827;

$output794 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments825, $renderChildrenClosure826, $renderingContext)]);

$output794 .= '
					</label>
					<div class="form-group"><input class="form-control" type="search" name="search_field" id="search_field"
																				 value="';
$array829 = array (
);
$output794 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('postSearchField', $array829)]);

$output794 .= '"/></div>
				</div>
				<input class="btn btn-default tsob-search-submit" type="submit" name="search"
							 value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure831 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments830 = array();
$arguments830['key'] = NULL;
$arguments830['id'] = NULL;
$arguments830['default'] = NULL;
$arguments830['arguments'] = NULL;
$arguments830['extensionName'] = NULL;
$arguments830['languageKey'] = NULL;
$arguments830['alternativeLanguageKeys'] = NULL;
$arguments830['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';

$output794 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments830, $renderChildrenClosure831, $renderingContext)]);

$output794 .= '"/>
			</div>
			<div class="checkbox">
				<label for="checkTs_browser_regexsearch">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure833 = function() use ($renderingContext, $self) {
$array834 = array (
);return $renderingContext->getVariableProvider()->getByPath('regexSearchCheckbox', $array834);
};
$arguments832 = array();
$arguments832['value'] = NULL;

$output794 .= isset($arguments832['value']) ? $arguments832['value'] : $renderChildrenClosure833();

$output794 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure836 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments835 = array();
$arguments835['key'] = NULL;
$arguments835['id'] = NULL;
$arguments835['default'] = NULL;
$arguments835['arguments'] = NULL;
$arguments835['extensionName'] = NULL;
$arguments835['languageKey'] = NULL;
$arguments835['alternativeLanguageKeys'] = NULL;
$output837 = '';
$array838 = array (
);
$output837 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array838);

$output837 .= 'regExp';
$arguments835['key'] = $output837;

$output794 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments835, $renderChildrenClosure836, $renderingContext)]);

$output794 .= '
				</label>
			</div>
		</div>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure840 = function() use ($renderingContext, $self) {
$output844 = '';

$output844 .= '
			<div style="padding-top: 10px;"></div>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure846 = function() use ($renderingContext, $self) {
$output851 = '';

$output851 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure853 = function() use ($renderingContext, $self) {
$output855 = '';

$output855 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure857 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments856 = array();
$arguments856['key'] = NULL;
$arguments856['id'] = NULL;
$arguments856['default'] = NULL;
$arguments856['arguments'] = NULL;
$arguments856['extensionName'] = NULL;
$arguments856['languageKey'] = NULL;
$arguments856['alternativeLanguageKeys'] = NULL;
$output858 = '';
$array859 = array (
);
$output858 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array859);

$output858 .= 'severity.';
$array860 = array (
);
$output858 .= $renderingContext->getVariableProvider()->getByPath('parseError.1', $array860);
$arguments856['key'] = $output858;

$output855 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments856, $renderChildrenClosure857, $renderingContext)]);

$output855 .= '
					: ';
$array861 = array (
);
$output855 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parseError.0', $array861)]);

$output855 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure863 = function() use ($renderingContext, $self) {
$output867 = '';

$output867 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure869 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments868 = array();
$arguments868['key'] = NULL;
$arguments868['id'] = NULL;
$arguments868['default'] = NULL;
$arguments868['arguments'] = NULL;
$arguments868['extensionName'] = NULL;
$arguments868['languageKey'] = NULL;
$arguments868['alternativeLanguageKeys'] = NULL;
$output870 = '';
$array871 = array (
);
$output870 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array871);

$output870 .= 'errorShowDetails';
$arguments868['key'] = $output870;

$output867 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments868, $renderChildrenClosure869, $renderingContext)]);

$output867 .= '
					';
return $output867;
};
$arguments862 = array();
$arguments862['additionalAttributes'] = NULL;
$arguments862['data'] = NULL;
$arguments862['uri'] = NULL;
$arguments862['defaultScheme'] = 'http';
$arguments862['class'] = NULL;
$arguments862['dir'] = NULL;
$arguments862['id'] = NULL;
$arguments862['lang'] = NULL;
$arguments862['style'] = NULL;
$arguments862['title'] = NULL;
$arguments862['accesskey'] = NULL;
$arguments862['tabindex'] = NULL;
$arguments862['onclick'] = NULL;
$arguments862['name'] = NULL;
$arguments862['rel'] = NULL;
$arguments862['rev'] = NULL;
$arguments862['target'] = NULL;
$output864 = '';
$array865 = array (
);
$output864 .= $renderingContext->getVariableProvider()->getByPath('showErrorDetailsUri', $array865);
$array866 = array (
);
$output864 .= $renderingContext->getVariableProvider()->getByPath('parseError.2', $array866);
$arguments862['uri'] = $output864;
$arguments862['defaultScheme'] = '';
$arguments862['class'] = 'text-warning';

$output855 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments862, $renderChildrenClosure863, $renderingContext);

$output855 .= '
					<br/>
				';
return $output855;
};
$arguments852 = array();
$arguments852['each'] = NULL;
$arguments852['as'] = NULL;
$arguments852['key'] = NULL;
$arguments852['reverse'] = false;
$arguments852['iteration'] = NULL;
$array854 = array (
);$arguments852['each'] = $renderingContext->getVariableProvider()->getByPath('parseErrors', $array854);
$arguments852['as'] = 'parseError';

$output851 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments852, $renderChildrenClosure853, $renderingContext);

$output851 .= '
			';
return $output851;
};
$arguments845 = array();
$arguments845['message'] = NULL;
$arguments845['title'] = NULL;
$arguments845['state'] = -2;
$arguments845['iconName'] = NULL;
$arguments845['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure848 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments847 = array();
$arguments847['key'] = NULL;
$arguments847['id'] = NULL;
$arguments847['default'] = NULL;
$arguments847['arguments'] = NULL;
$arguments847['extensionName'] = NULL;
$arguments847['languageKey'] = NULL;
$arguments847['alternativeLanguageKeys'] = NULL;
$output849 = '';
$array850 = array (
);
$output849 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array850);

$output849 .= 'errorsWarnings';
$arguments847['key'] = $output849;
$arguments845['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments847, $renderChildrenClosure848, $renderingContext);
$arguments845['state'] = 1;
$renderChildrenClosure846 = ($arguments845['message'] !== null) ? function() use ($arguments845) { return $arguments845['message']; } : $renderChildrenClosure846;
$output844 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments845, $renderChildrenClosure846, $renderingContext);

$output844 .= '
		';
return $output844;
};
$arguments839 = array();
$arguments839['then'] = NULL;
$arguments839['else'] = NULL;
$arguments839['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array841 = array();
$array842 = array (
);$array841['0'] = $renderingContext->getVariableProvider()->getByPath('hasParseErrors', $array842);

$expression843 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments839['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression843(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array841)
					),
					$renderingContext
				);
$arguments839['__thenClosure'] = $renderChildrenClosure840;

$output794 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments839, $renderChildrenClosure840, $renderingContext);

$output794 .= '
		<div class="panel panel-space panel-default">
			<div class="panel-heading">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure873 = function() use ($renderingContext, $self) {
$output888 = '';

$output888 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure890 = function() use ($renderingContext, $self) {
$output891 = '';

$output891 .= '
						<strong>';
$array892 = array (
);
$output891 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('treeLabel', $array892)]);

$output891 .= '</strong>
					';
return $output891;
};
$arguments889 = array();

$output888 .= '';

$output888 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure894 = function() use ($renderingContext, $self) {
$output895 = '';

$output895 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure897 = function() use ($renderingContext, $self) {
$output898 = '';

$output898 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure900 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments899 = array();
$arguments899['key'] = NULL;
$arguments899['id'] = NULL;
$arguments899['default'] = NULL;
$arguments899['arguments'] = NULL;
$arguments899['extensionName'] = NULL;
$arguments899['languageKey'] = NULL;
$arguments899['alternativeLanguageKeys'] = NULL;
$output901 = '';
$array902 = array (
);
$output901 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array902);
$array903 = array (
);
$output901 .= $renderingContext->getVariableProvider()->getByPath('rootLLKey', $array903);
$arguments899['key'] = $output901;

$output898 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments899, $renderChildrenClosure900, $renderingContext);

$output898 .= '
						';
return $output898;
};
$arguments896 = array();
$arguments896['value'] = NULL;
$arguments896['mode'] = 'upper';
$arguments896['mode'] = 'upper';

$output895 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments896, $renderChildrenClosure897, $renderingContext)]);

$output895 .= '
					';
return $output895;
};
$arguments893 = array();
$arguments893['if'] = NULL;

$output888 .= '';

$output888 .= '
				';
return $output888;
};
$arguments872 = array();
$arguments872['then'] = NULL;
$arguments872['else'] = NULL;
$arguments872['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array885 = array();
$array886 = array (
);$array885['0'] = $renderingContext->getVariableProvider()->getByPath('hasKeySelected', $array886);

$expression887 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments872['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression887(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array885)
					),
					$renderingContext
				);
$arguments872['__thenClosure'] = function() use ($renderingContext, $self) {
$output874 = '';

$output874 .= '
						<strong>';
$array875 = array (
);
$output874 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('treeLabel', $array875)]);

$output874 .= '</strong>
					';
return $output874;
};
$arguments872['__elseClosures'][] = function() use ($renderingContext, $self) {
$output876 = '';

$output876 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure878 = function() use ($renderingContext, $self) {
$output879 = '';

$output879 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure881 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments880 = array();
$arguments880['key'] = NULL;
$arguments880['id'] = NULL;
$arguments880['default'] = NULL;
$arguments880['arguments'] = NULL;
$arguments880['extensionName'] = NULL;
$arguments880['languageKey'] = NULL;
$arguments880['alternativeLanguageKeys'] = NULL;
$output882 = '';
$array883 = array (
);
$output882 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array883);
$array884 = array (
);
$output882 .= $renderingContext->getVariableProvider()->getByPath('rootLLKey', $array884);
$arguments880['key'] = $output882;

$output879 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments880, $renderChildrenClosure881, $renderingContext);

$output879 .= '
						';
return $output879;
};
$arguments877 = array();
$arguments877['value'] = NULL;
$arguments877['mode'] = 'upper';
$arguments877['mode'] = 'upper';

$output876 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments877, $renderChildrenClosure878, $renderingContext)]);

$output876 .= '
					';
return $output876;
};

$output794 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments872, $renderChildrenClosure873, $renderingContext);

$output794 .= '
				<strong>';
$array904 = array (
);
$output794 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedKey', $array904)]);

$output794 .= '</strong>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure906 = function() use ($renderingContext, $self) {
$output910 = '';

$output910 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure912 = function() use ($renderingContext, $self) {
$output914 = '';

$output914 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure916 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments915 = array();
$arguments915['key'] = NULL;
$arguments915['id'] = NULL;
$arguments915['default'] = NULL;
$arguments915['arguments'] = NULL;
$arguments915['extensionName'] = NULL;
$arguments915['languageKey'] = NULL;
$arguments915['alternativeLanguageKeys'] = NULL;
$output917 = '';
$array918 = array (
);
$output917 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array918);

$output917 .= 'removeKey';
$arguments915['key'] = $output917;

$output914 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments915, $renderChildrenClosure916, $renderingContext)]);

$output914 .= '
					';
return $output914;
};
$arguments911 = array();
$arguments911['additionalAttributes'] = NULL;
$arguments911['data'] = NULL;
$arguments911['uri'] = NULL;
$arguments911['defaultScheme'] = 'http';
$arguments911['class'] = NULL;
$arguments911['dir'] = NULL;
$arguments911['id'] = NULL;
$arguments911['lang'] = NULL;
$arguments911['style'] = NULL;
$arguments911['title'] = NULL;
$arguments911['accesskey'] = NULL;
$arguments911['tabindex'] = NULL;
$arguments911['onclick'] = NULL;
$arguments911['name'] = NULL;
$arguments911['rel'] = NULL;
$arguments911['rev'] = NULL;
$arguments911['target'] = NULL;
$array913 = array (
);$arguments911['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlRemoveFromObjectList', $array913);
$arguments911['defaultScheme'] = '';
$arguments911['class'] = 'btn btn-default';

$output910 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments911, $renderChildrenClosure912, $renderingContext);

$output910 .= '
				';
return $output910;
};
$arguments905 = array();
$arguments905['then'] = NULL;
$arguments905['else'] = NULL;
$arguments905['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array907 = array();
$array908 = array (
);$array907['0'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlRemoveFromObjectList', $array908);

$expression909 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments905['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression909(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array907)
					),
					$renderingContext
				);
$arguments905['__thenClosure'] = $renderChildrenClosure906;

$output794 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments905, $renderChildrenClosure906, $renderingContext);

$output794 .= '
			</div>
			<div class="panel-body">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure920 = function() use ($renderingContext, $self) {
$array921 = array (
);return $renderingContext->getVariableProvider()->getByPath('tsTree', $array921);
};
$arguments919 = array();
$arguments919['value'] = NULL;

$output794 .= isset($arguments919['value']) ? $arguments919['value'] : $renderChildrenClosure920();

$output794 .= '</div>
		</div>
		<div>
			<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure923 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments922 = array();
$arguments922['key'] = NULL;
$arguments922['id'] = NULL;
$arguments922['default'] = NULL;
$arguments922['arguments'] = NULL;
$arguments922['extensionName'] = NULL;
$arguments922['languageKey'] = NULL;
$arguments922['alternativeLanguageKeys'] = NULL;
$output924 = '';
$array925 = array (
);
$output924 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array925);

$output924 .= 'displayOptions';
$arguments922['key'] = $output924;

$output794 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments922, $renderChildrenClosure923, $renderingContext)]);

$output794 .= '</h2>
			<div class="typo3-listOptions">
				<div class="checkbox">
					<label for="checkTs_browser_showComments">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure927 = function() use ($renderingContext, $self) {
$array928 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxShowComments', $array928);
};
$arguments926 = array();
$arguments926['value'] = NULL;

$output794 .= isset($arguments926['value']) ? $arguments926['value'] : $renderChildrenClosure927();

$output794 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure930 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments929 = array();
$arguments929['key'] = NULL;
$arguments929['id'] = NULL;
$arguments929['default'] = NULL;
$arguments929['arguments'] = NULL;
$arguments929['extensionName'] = NULL;
$arguments929['languageKey'] = NULL;
$arguments929['alternativeLanguageKeys'] = NULL;
$output931 = '';
$array932 = array (
);
$output931 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array932);

$output931 .= 'displayComments';
$arguments929['key'] = $output931;

$output794 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments929, $renderChildrenClosure930, $renderingContext)]);

$output794 .= '
					</label>
				</div>
				<div class="checkbox">
					<label for="checkTs_browser_alphaSort">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure934 = function() use ($renderingContext, $self) {
$array935 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxAlphaSort', $array935);
};
$arguments933 = array();
$arguments933['value'] = NULL;

$output794 .= isset($arguments933['value']) ? $arguments933['value'] : $renderChildrenClosure934();

$output794 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure937 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments936 = array();
$arguments936['key'] = NULL;
$arguments936['id'] = NULL;
$arguments936['default'] = NULL;
$arguments936['arguments'] = NULL;
$arguments936['extensionName'] = NULL;
$arguments936['languageKey'] = NULL;
$arguments936['alternativeLanguageKeys'] = NULL;
$output938 = '';
$array939 = array (
);
$output938 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array939);

$output938 .= 'sortAlphabetically';
$arguments936['key'] = $output938;

$output794 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments936, $renderChildrenClosure937, $renderingContext)]);

$output794 .= '
					</label>
				</div>
				<div class="checkbox">
					<label for="checkTs_browser_fixedLgd">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure941 = function() use ($renderingContext, $self) {
$array942 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxCropLines', $array942);
};
$arguments940 = array();
$arguments940['value'] = NULL;

$output794 .= isset($arguments940['value']) ? $arguments940['value'] : $renderChildrenClosure941();

$output794 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure944 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments943 = array();
$arguments943['key'] = NULL;
$arguments943['id'] = NULL;
$arguments943['default'] = NULL;
$arguments943['arguments'] = NULL;
$arguments943['extensionName'] = NULL;
$arguments943['languageKey'] = NULL;
$arguments943['alternativeLanguageKeys'] = NULL;
$output945 = '';
$array946 = array (
);
$output945 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array946);

$output945 .= 'cropLines';
$arguments943['key'] = $output945;

$output794 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments943, $renderChildrenClosure944, $renderingContext)]);

$output794 .= '
					</label>
				</div>
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure948 = function() use ($renderingContext, $self) {
$output952 = '';

$output952 .= '
				<div class="form">
					<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure954 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments953 = array();
$arguments953['key'] = NULL;
$arguments953['id'] = NULL;
$arguments953['default'] = NULL;
$arguments953['arguments'] = NULL;
$arguments953['extensionName'] = NULL;
$arguments953['languageKey'] = NULL;
$arguments953['alternativeLanguageKeys'] = NULL;
$output955 = '';
$array956 = array (
);
$output955 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array956);

$output955 .= 'displayConstants';
$arguments953['key'] = $output955;

$output952 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments953, $renderChildrenClosure954, $renderingContext)]);

$output952 .= '</label>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure958 = function() use ($renderingContext, $self) {
$array959 = array (
);return $renderingContext->getVariableProvider()->getByPath('dropdownDisplayConstants', $array959);
};
$arguments957 = array();
$arguments957['value'] = NULL;

$output952 .= isset($arguments957['value']) ? $arguments957['value'] : $renderChildrenClosure958();

$output952 .= '
				</div>
			';
return $output952;
};
$arguments947 = array();
$arguments947['then'] = NULL;
$arguments947['else'] = NULL;
$arguments947['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array949 = array();
$array950 = array (
);$array949['0'] = $renderingContext->getVariableProvider()->getByPath('isSetupAndCropLinesDisabled', $array950);

$expression951 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments947['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression951(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array949)
					),
					$renderingContext
				);
$arguments947['__thenClosure'] = $renderChildrenClosure948;

$output794 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments947, $renderChildrenClosure948, $renderingContext);

$output794 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure961 = function() use ($renderingContext, $self) {
$output965 = '';

$output965 .= '
				<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure967 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments966 = array();
$arguments966['key'] = NULL;
$arguments966['id'] = NULL;
$arguments966['default'] = NULL;
$arguments966['arguments'] = NULL;
$arguments966['extensionName'] = NULL;
$arguments966['languageKey'] = NULL;
$arguments966['alternativeLanguageKeys'] = NULL;
$output968 = '';
$array969 = array (
);
$output968 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array969);

$output968 .= 'conditions';
$arguments966['key'] = $output968;

$output965 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments966, $renderChildrenClosure967, $renderingContext)]);

$output965 .= '</h2>
				<div class="typo3-listOptions">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure971 = function() use ($renderingContext, $self) {
$output973 = '';

$output973 .= '
						<div class="checkbox">
							<label for="check';
$array974 = array (
);
$output973 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.key', $array974)]);

$output973 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure976 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments975 = array();
$arguments975['additionalAttributes'] = NULL;
$arguments975['data'] = NULL;
$arguments975['name'] = NULL;
$arguments975['value'] = NULL;
$arguments975['property'] = NULL;
$arguments975['disabled'] = NULL;
$arguments975['errorClass'] = 'f3-form-error';
$arguments975['class'] = NULL;
$arguments975['dir'] = NULL;
$arguments975['id'] = NULL;
$arguments975['lang'] = NULL;
$arguments975['style'] = NULL;
$arguments975['title'] = NULL;
$arguments975['accesskey'] = NULL;
$arguments975['tabindex'] = NULL;
$arguments975['onclick'] = NULL;
$arguments975['checked'] = NULL;
$arguments975['multiple'] = false;
$arguments975['class'] = 'checkbox';
$output977 = '';

$output977 .= 'conditions[';
$array978 = array (
);
$output977 .= $renderingContext->getVariableProvider()->getByPath('condition.key', $array978);

$output977 .= ']';
$arguments975['name'] = $output977;
$output979 = '';

$output979 .= 'check';
$array980 = array (
);
$output979 .= $renderingContext->getVariableProvider()->getByPath('condition.key', $array980);
$arguments975['id'] = $output979;
$array981 = array (
);$arguments975['value'] = $renderingContext->getVariableProvider()->getByPath('condition.value', $array981);
// Rendering Boolean node
// Rendering Array
$array982 = array();
$array983 = array (
);$array982['0'] = $renderingContext->getVariableProvider()->getByPath('condition.isSet', $array983);

$expression984 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments975['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression984(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array982)
					),
					$renderingContext
				);

$output973 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments975, $renderChildrenClosure976, $renderingContext);

$output973 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure986 = function() use ($renderingContext, $self) {
$array987 = array (
);return $renderingContext->getVariableProvider()->getByPath('condition.label', $array987);
};
$arguments985 = array();
$arguments985['value'] = NULL;

$output973 .= isset($arguments985['value']) ? $arguments985['value'] : $renderChildrenClosure986();

$output973 .= '
							</label>
						</div>
					';
return $output973;
};
$arguments970 = array();
$arguments970['each'] = NULL;
$arguments970['as'] = NULL;
$arguments970['key'] = NULL;
$arguments970['reverse'] = false;
$arguments970['iteration'] = NULL;
$array972 = array (
);$arguments970['each'] = $renderingContext->getVariableProvider()->getByPath('tsConditions', $array972);
$arguments970['as'] = 'condition';

$output965 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments970, $renderChildrenClosure971, $renderingContext);

$output965 .= '
				</div>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure989 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments988 = array();
$arguments988['additionalAttributes'] = NULL;
$arguments988['data'] = NULL;
$arguments988['name'] = NULL;
$arguments988['value'] = NULL;
$arguments988['property'] = NULL;
$arguments988['disabled'] = NULL;
$arguments988['class'] = NULL;
$arguments988['dir'] = NULL;
$arguments988['id'] = NULL;
$arguments988['lang'] = NULL;
$arguments988['style'] = NULL;
$arguments988['title'] = NULL;
$arguments988['accesskey'] = NULL;
$arguments988['tabindex'] = NULL;
$arguments988['onclick'] = NULL;
$arguments988['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure991 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments990 = array();
$arguments990['key'] = NULL;
$arguments990['id'] = NULL;
$arguments990['default'] = NULL;
$arguments990['arguments'] = NULL;
$arguments990['extensionName'] = NULL;
$arguments990['languageKey'] = NULL;
$arguments990['alternativeLanguageKeys'] = NULL;
$output992 = '';
$array993 = array (
);
$output992 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array993);

$output992 .= 'setConditions';
$arguments990['key'] = $output992;
$arguments988['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments990, $renderChildrenClosure991, $renderingContext);
$arguments988['name'] = 'Submit';

$output965 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments988, $renderChildrenClosure989, $renderingContext);

$output965 .= '
			';
return $output965;
};
$arguments960 = array();
$arguments960['then'] = NULL;
$arguments960['else'] = NULL;
$arguments960['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array962 = array();
$array963 = array (
);$array962['0'] = $renderingContext->getVariableProvider()->getByPath('hasConditions', $array963);

$expression964 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments960['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression964(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array962)
					),
					$renderingContext
				);
$arguments960['__thenClosure'] = $renderChildrenClosure961;

$output794 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments960, $renderChildrenClosure961, $renderingContext);

$output794 .= '
		</div>
	';
return $output794;
};
$arguments792 = array();
$arguments792['if'] = NULL;

$output514 .= '';

$output514 .= '
';
return $output514;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array511 = array();
$array512 = array (
);$array511['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array512);

$expression513 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression513(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array511)
					),
					$renderingContext
				);
$arguments34['__thenClosure'] = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
				<div style="padding-top: 10px;">
					<div class="form-group">
						<h3>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['key'] = NULL;
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$arguments174['languageKey'] = NULL;
$arguments174['alternativeLanguageKeys'] = NULL;
$output176 = '';
$array177 = array (
);
$output176 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array177);

$output176 .= 'editProperty';
$arguments174['key'] = $output176;

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output173 .= '
						</h3>
						<label>';
$array178 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array178)]);

$output173 .= ' =</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['name'] = NULL;
$arguments179['value'] = NULL;
$arguments179['property'] = NULL;
$arguments179['autofocus'] = NULL;
$arguments179['disabled'] = NULL;
$arguments179['maxlength'] = NULL;
$arguments179['readonly'] = NULL;
$arguments179['size'] = NULL;
$arguments179['placeholder'] = NULL;
$arguments179['pattern'] = NULL;
$arguments179['errorClass'] = 'f3-form-error';
$arguments179['class'] = NULL;
$arguments179['dir'] = NULL;
$arguments179['id'] = NULL;
$arguments179['lang'] = NULL;
$arguments179['style'] = NULL;
$arguments179['title'] = NULL;
$arguments179['accesskey'] = NULL;
$arguments179['tabindex'] = NULL;
$arguments179['onclick'] = NULL;
$arguments179['required'] = false;
$arguments179['type'] = 'text';
$arguments179['class'] = 'form-control';
$output181 = '';

$output181 .= 'data[';
$array182 = array (
);
$output181 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array182);

$output181 .= '][value]';
$arguments179['name'] = $output181;
$array183 = array (
);$arguments179['value'] = $renderingContext->getVariableProvider()->getByPath('theSetupValue', $array183);

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output173 .= '
					</div>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['additionalAttributes'] = NULL;
$arguments184['data'] = NULL;
$arguments184['name'] = NULL;
$arguments184['value'] = NULL;
$arguments184['property'] = NULL;
$arguments184['disabled'] = NULL;
$arguments184['class'] = NULL;
$arguments184['dir'] = NULL;
$arguments184['id'] = NULL;
$arguments184['lang'] = NULL;
$arguments184['style'] = NULL;
$arguments184['title'] = NULL;
$arguments184['accesskey'] = NULL;
$arguments184['tabindex'] = NULL;
$arguments184['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['key'] = NULL;
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$arguments186['languageKey'] = NULL;
$arguments186['alternativeLanguageKeys'] = NULL;
$output188 = '';
$array189 = array (
);
$output188 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array189);

$output188 .= 'updateButton';
$arguments186['key'] = $output188;
$arguments184['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);
$arguments184['class'] = 'btn btn-default';
$arguments184['name'] = 'update_value';

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output173 .= '
				</div>
				<div style="padding-top: 20px">
					<div class="form-group">
						<h3>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['key'] = NULL;
$arguments190['id'] = NULL;
$arguments190['default'] = NULL;
$arguments190['arguments'] = NULL;
$arguments190['extensionName'] = NULL;
$arguments190['languageKey'] = NULL;
$arguments190['alternativeLanguageKeys'] = NULL;
$output192 = '';
$array193 = array (
);
$output192 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array193);

$output192 .= 'addProperty';
$arguments190['key'] = $output192;

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext)]);

$output173 .= '
						</h3>
					</div>
					<div class="form-inline form-inline-spaced">
						<div class="form-group">
							<label class="sr-only">';
$array194 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array194)]);

$output173 .= '.</label>
							<div class="input-group">
								<div class="input-group-addon">';
$array195 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array195)]);

$output173 .= '.</div>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['additionalAttributes'] = NULL;
$arguments196['data'] = NULL;
$arguments196['name'] = NULL;
$arguments196['value'] = NULL;
$arguments196['property'] = NULL;
$arguments196['autofocus'] = NULL;
$arguments196['disabled'] = NULL;
$arguments196['maxlength'] = NULL;
$arguments196['readonly'] = NULL;
$arguments196['size'] = NULL;
$arguments196['placeholder'] = NULL;
$arguments196['pattern'] = NULL;
$arguments196['errorClass'] = 'f3-form-error';
$arguments196['class'] = NULL;
$arguments196['dir'] = NULL;
$arguments196['id'] = NULL;
$arguments196['lang'] = NULL;
$arguments196['style'] = NULL;
$arguments196['title'] = NULL;
$arguments196['accesskey'] = NULL;
$arguments196['tabindex'] = NULL;
$arguments196['onclick'] = NULL;
$arguments196['required'] = false;
$arguments196['type'] = 'text';
$arguments196['class'] = 'form-control';
$output198 = '';

$output198 .= 'data[';
$array199 = array (
);
$output198 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array199);

$output198 .= '][name]';
$arguments196['name'] = $output198;

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output173 .= '
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>=</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['additionalAttributes'] = NULL;
$arguments200['data'] = NULL;
$arguments200['name'] = NULL;
$arguments200['value'] = NULL;
$arguments200['property'] = NULL;
$arguments200['autofocus'] = NULL;
$arguments200['disabled'] = NULL;
$arguments200['maxlength'] = NULL;
$arguments200['readonly'] = NULL;
$arguments200['size'] = NULL;
$arguments200['placeholder'] = NULL;
$arguments200['pattern'] = NULL;
$arguments200['errorClass'] = 'f3-form-error';
$arguments200['class'] = NULL;
$arguments200['dir'] = NULL;
$arguments200['id'] = NULL;
$arguments200['lang'] = NULL;
$arguments200['style'] = NULL;
$arguments200['title'] = NULL;
$arguments200['accesskey'] = NULL;
$arguments200['tabindex'] = NULL;
$arguments200['onclick'] = NULL;
$arguments200['required'] = false;
$arguments200['type'] = 'text';
$arguments200['class'] = 'form-control';
$output202 = '';

$output202 .= 'data[';
$array203 = array (
);
$output202 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array203);

$output202 .= '][propertyValue]';
$arguments200['name'] = $output202;

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output173 .= '
					</div>
					<div class="form-group">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['additionalAttributes'] = NULL;
$arguments204['data'] = NULL;
$arguments204['name'] = NULL;
$arguments204['value'] = NULL;
$arguments204['property'] = NULL;
$arguments204['disabled'] = NULL;
$arguments204['class'] = NULL;
$arguments204['dir'] = NULL;
$arguments204['id'] = NULL;
$arguments204['lang'] = NULL;
$arguments204['style'] = NULL;
$arguments204['title'] = NULL;
$arguments204['accesskey'] = NULL;
$arguments204['tabindex'] = NULL;
$arguments204['onclick'] = NULL;
$arguments204['class'] = 'btn btn-default';
$arguments204['name'] = 'add_property';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['key'] = NULL;
$arguments206['id'] = NULL;
$arguments206['default'] = NULL;
$arguments206['arguments'] = NULL;
$arguments206['extensionName'] = NULL;
$arguments206['languageKey'] = NULL;
$arguments206['alternativeLanguageKeys'] = NULL;
$output208 = '';
$array209 = array (
);
$output208 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array209);

$output208 .= 'addButton';
$arguments206['key'] = $output208;
$arguments204['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output173 .= '
					</div>
				</div>
				<div style="padding-top: 20px;">
					<div class="form-group">
						<h3>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['key'] = NULL;
$arguments210['id'] = NULL;
$arguments210['default'] = NULL;
$arguments210['arguments'] = NULL;
$arguments210['extensionName'] = NULL;
$arguments210['languageKey'] = NULL;
$arguments210['alternativeLanguageKeys'] = NULL;
$output212 = '';
$array213 = array (
);
$output212 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array213);

$output212 .= 'clearObject';
$arguments210['key'] = $output212;

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext)]);

$output173 .= '
						</h3>
					</div>
					<div class="form-inline form-inline-spaced">
						<div class="form-group">
							<div class="checkbox">
								<label>
									';
$array214 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array214)]);

$output173 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['key'] = NULL;
$arguments218['id'] = NULL;
$arguments218['default'] = NULL;
$arguments218['arguments'] = NULL;
$arguments218['extensionName'] = NULL;
$arguments218['languageKey'] = NULL;
$arguments218['alternativeLanguageKeys'] = NULL;
$output220 = '';
$array221 = array (
);
$output220 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array221);

$output220 .= 'clear';
$arguments218['key'] = $output220;

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
									';
return $output217;
};
$arguments215 = array();
$arguments215['value'] = NULL;
$arguments215['mode'] = 'upper';
$arguments215['mode'] = 'upper';

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext)]);

$output173 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['additionalAttributes'] = NULL;
$arguments222['data'] = NULL;
$arguments222['name'] = NULL;
$arguments222['value'] = NULL;
$arguments222['property'] = NULL;
$arguments222['disabled'] = NULL;
$arguments222['errorClass'] = 'f3-form-error';
$arguments222['class'] = NULL;
$arguments222['dir'] = NULL;
$arguments222['id'] = NULL;
$arguments222['lang'] = NULL;
$arguments222['style'] = NULL;
$arguments222['title'] = NULL;
$arguments222['accesskey'] = NULL;
$arguments222['tabindex'] = NULL;
$arguments222['onclick'] = NULL;
$arguments222['checked'] = NULL;
$arguments222['multiple'] = false;
$output224 = '';

$output224 .= 'data[';
$array225 = array (
);
$output224 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array225);

$output224 .= '][clearValue]';
$arguments222['name'] = $output224;
$arguments222['value'] = 1;

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output173 .= '
								</label>
							</div>
						</div>
						<div class="form-group">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['additionalAttributes'] = NULL;
$arguments226['data'] = NULL;
$arguments226['name'] = NULL;
$arguments226['value'] = NULL;
$arguments226['property'] = NULL;
$arguments226['disabled'] = NULL;
$arguments226['class'] = NULL;
$arguments226['dir'] = NULL;
$arguments226['id'] = NULL;
$arguments226['lang'] = NULL;
$arguments226['style'] = NULL;
$arguments226['title'] = NULL;
$arguments226['accesskey'] = NULL;
$arguments226['tabindex'] = NULL;
$arguments226['onclick'] = NULL;
$arguments226['class'] = 'btn btn-default';
$arguments226['name'] = 'clear_object';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['key'] = NULL;
$arguments228['id'] = NULL;
$arguments228['default'] = NULL;
$arguments228['arguments'] = NULL;
$arguments228['extensionName'] = NULL;
$arguments228['languageKey'] = NULL;
$arguments228['alternativeLanguageKeys'] = NULL;
$output230 = '';
$array231 = array (
);
$output230 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array231);

$output230 .= 'clearButton';
$arguments228['key'] = $output230;
$arguments226['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output173 .= '
						</div>
					</div>
				</div>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['key'] = NULL;
$arguments279['id'] = NULL;
$arguments279['default'] = NULL;
$arguments279['arguments'] = NULL;
$arguments279['extensionName'] = NULL;
$arguments279['languageKey'] = NULL;
$arguments279['alternativeLanguageKeys'] = NULL;
$output281 = '';
$array282 = array (
);
$output281 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array282);

$output281 .= 'addKey';
$arguments279['key'] = $output281;
// Rendering Array
$array283 = array();
$array284 = array (
);$array283['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array284);
$arguments279['arguments'] = $array283;

$output278 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext)]);

$output278 .= '
							';
return $output278;
};
$arguments275 = array();
$arguments275['additionalAttributes'] = NULL;
$arguments275['data'] = NULL;
$arguments275['uri'] = NULL;
$arguments275['defaultScheme'] = 'http';
$arguments275['class'] = NULL;
$arguments275['dir'] = NULL;
$arguments275['id'] = NULL;
$arguments275['lang'] = NULL;
$arguments275['style'] = NULL;
$arguments275['title'] = NULL;
$arguments275['accesskey'] = NULL;
$arguments275['tabindex'] = NULL;
$arguments275['onclick'] = NULL;
$arguments275['name'] = NULL;
$arguments275['rel'] = NULL;
$arguments275['rev'] = NULL;
$arguments275['target'] = NULL;
$array277 = array (
);$arguments275['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array277);
$arguments275['defaultScheme'] = '';
$arguments275['class'] = 'btn btn-default';

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output274 .= '
						';
return $output274;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array272);

$expression273 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array271)
					),
					$renderingContext
				);
$arguments269['__thenClosure'] = $renderChildrenClosure270;

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output268 .= '
					';
return $output268;
};
$arguments266 = array();

$output265 .= '';

$output265 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['key'] = NULL;
$arguments292['id'] = NULL;
$arguments292['default'] = NULL;
$arguments292['arguments'] = NULL;
$arguments292['extensionName'] = NULL;
$arguments292['languageKey'] = NULL;
$arguments292['alternativeLanguageKeys'] = NULL;
$output294 = '';
$array295 = array (
);
$output294 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array295);

$output294 .= 'removeKey';
$arguments292['key'] = $output294;
// Rendering Array
$array296 = array();
$array297 = array (
);$array296['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array297);
$arguments292['arguments'] = $array296;

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext)]);

$output291 .= '
						';
return $output291;
};
$arguments288 = array();
$arguments288['additionalAttributes'] = NULL;
$arguments288['data'] = NULL;
$arguments288['uri'] = NULL;
$arguments288['defaultScheme'] = 'http';
$arguments288['class'] = NULL;
$arguments288['dir'] = NULL;
$arguments288['id'] = NULL;
$arguments288['lang'] = NULL;
$arguments288['style'] = NULL;
$arguments288['title'] = NULL;
$arguments288['accesskey'] = NULL;
$arguments288['tabindex'] = NULL;
$arguments288['onclick'] = NULL;
$arguments288['name'] = NULL;
$arguments288['rel'] = NULL;
$arguments288['rev'] = NULL;
$arguments288['target'] = NULL;
$array290 = array (
);$arguments288['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array290);
$arguments288['defaultScheme'] = '';
$arguments288['class'] = 'btn btn-default';

$output287 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
					';
return $output287;
};
$arguments285 = array();
$arguments285['if'] = NULL;

$output265 .= '';

$output265 .= '
				';
return $output265;
};
$arguments232 = array();
$arguments232['then'] = NULL;
$arguments232['else'] = NULL;
$arguments232['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['0'] = $renderingContext->getVariableProvider()->getByPath('isNotInTopLevelKeyList', $array263);

$expression264 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments232['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments232['__thenClosure'] = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['key'] = NULL;
$arguments245['id'] = NULL;
$arguments245['default'] = NULL;
$arguments245['arguments'] = NULL;
$arguments245['extensionName'] = NULL;
$arguments245['languageKey'] = NULL;
$arguments245['alternativeLanguageKeys'] = NULL;
$output247 = '';
$array248 = array (
);
$output247 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array248);

$output247 .= 'addKey';
$arguments245['key'] = $output247;
// Rendering Array
$array249 = array();
$array250 = array (
);$array249['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array250);
$arguments245['arguments'] = $array249;

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext)]);

$output244 .= '
							';
return $output244;
};
$arguments241 = array();
$arguments241['additionalAttributes'] = NULL;
$arguments241['data'] = NULL;
$arguments241['uri'] = NULL;
$arguments241['defaultScheme'] = 'http';
$arguments241['class'] = NULL;
$arguments241['dir'] = NULL;
$arguments241['id'] = NULL;
$arguments241['lang'] = NULL;
$arguments241['style'] = NULL;
$arguments241['title'] = NULL;
$arguments241['accesskey'] = NULL;
$arguments241['tabindex'] = NULL;
$arguments241['onclick'] = NULL;
$arguments241['name'] = NULL;
$arguments241['rel'] = NULL;
$arguments241['rev'] = NULL;
$arguments241['target'] = NULL;
$array243 = array (
);$arguments241['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array243);
$arguments241['defaultScheme'] = '';
$arguments241['class'] = 'btn btn-default';

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
						';
return $output240;
};
$arguments235 = array();
$arguments235['then'] = NULL;
$arguments235['else'] = NULL;
$arguments235['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array237 = array();
$array238 = array (
);$array237['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array238);

$expression239 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments235['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);
$arguments235['__thenClosure'] = $renderChildrenClosure236;

$output234 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output234 .= '
					';
return $output234;
};
$arguments232['__elseClosures'][] = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['key'] = NULL;
$arguments256['id'] = NULL;
$arguments256['default'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['extensionName'] = NULL;
$arguments256['languageKey'] = NULL;
$arguments256['alternativeLanguageKeys'] = NULL;
$output258 = '';
$array259 = array (
);
$output258 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array259);

$output258 .= 'removeKey';
$arguments256['key'] = $output258;
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array261);
$arguments256['arguments'] = $array260;

$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext)]);

$output255 .= '
						';
return $output255;
};
$arguments252 = array();
$arguments252['additionalAttributes'] = NULL;
$arguments252['data'] = NULL;
$arguments252['uri'] = NULL;
$arguments252['defaultScheme'] = 'http';
$arguments252['class'] = NULL;
$arguments252['dir'] = NULL;
$arguments252['id'] = NULL;
$arguments252['lang'] = NULL;
$arguments252['style'] = NULL;
$arguments252['title'] = NULL;
$arguments252['accesskey'] = NULL;
$arguments252['tabindex'] = NULL;
$arguments252['onclick'] = NULL;
$arguments252['name'] = NULL;
$arguments252['rel'] = NULL;
$arguments252['rev'] = NULL;
$arguments252['target'] = NULL;
$array254 = array (
);$arguments252['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array254);
$arguments252['defaultScheme'] = '';
$arguments252['class'] = 'btn btn-default';

$output251 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
					';
return $output251;
};

$output173 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output173 .= '
			';
return $output173;
};
$arguments171 = array();

$output170 .= '';

$output170 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
				';
$array301 = array (
);
$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array301)]);

$output300 .= ' = <strong>';
$array302 = array (
);
$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theSetupValue', $array302)]);

$output300 .= '</strong>
			';
return $output300;
};
$arguments298 = array();
$arguments298['if'] = NULL;

$output170 .= '';

$output170 .= '
		';
return $output170;
};
$arguments37 = array();
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array167 = array();
$array168 = array (
);$array167['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array168);

$expression169 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)
					),
					$renderingContext
				);
$arguments37['__thenClosure'] = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
				<div style="padding-top: 10px;">
					<div class="form-group">
						<h3>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$output42 = '';
$array43 = array (
);
$output42 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array43);

$output42 .= 'editProperty';
$arguments40['key'] = $output42;

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output39 .= '
						</h3>
						<label>';
$array44 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array44)]);

$output39 .= ' =</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['name'] = NULL;
$arguments45['value'] = NULL;
$arguments45['property'] = NULL;
$arguments45['autofocus'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['maxlength'] = NULL;
$arguments45['readonly'] = NULL;
$arguments45['size'] = NULL;
$arguments45['placeholder'] = NULL;
$arguments45['pattern'] = NULL;
$arguments45['errorClass'] = 'f3-form-error';
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['required'] = false;
$arguments45['type'] = 'text';
$arguments45['class'] = 'form-control';
$output47 = '';

$output47 .= 'data[';
$array48 = array (
);
$output47 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array48);

$output47 .= '][value]';
$arguments45['name'] = $output47;
$array49 = array (
);$arguments45['value'] = $renderingContext->getVariableProvider()->getByPath('theSetupValue', $array49);

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output39 .= '
					</div>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['name'] = NULL;
$arguments50['value'] = NULL;
$arguments50['property'] = NULL;
$arguments50['disabled'] = NULL;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['languageKey'] = NULL;
$arguments52['alternativeLanguageKeys'] = NULL;
$output54 = '';
$array55 = array (
);
$output54 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array55);

$output54 .= 'updateButton';
$arguments52['key'] = $output54;
$arguments50['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);
$arguments50['class'] = 'btn btn-default';
$arguments50['name'] = 'update_value';

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output39 .= '
				</div>
				<div style="padding-top: 20px">
					<div class="form-group">
						<h3>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['languageKey'] = NULL;
$arguments56['alternativeLanguageKeys'] = NULL;
$output58 = '';
$array59 = array (
);
$output58 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array59);

$output58 .= 'addProperty';
$arguments56['key'] = $output58;

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output39 .= '
						</h3>
					</div>
					<div class="form-inline form-inline-spaced">
						<div class="form-group">
							<label class="sr-only">';
$array60 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array60)]);

$output39 .= '.</label>
							<div class="input-group">
								<div class="input-group-addon">';
$array61 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array61)]);

$output39 .= '.</div>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['name'] = NULL;
$arguments62['value'] = NULL;
$arguments62['property'] = NULL;
$arguments62['autofocus'] = NULL;
$arguments62['disabled'] = NULL;
$arguments62['maxlength'] = NULL;
$arguments62['readonly'] = NULL;
$arguments62['size'] = NULL;
$arguments62['placeholder'] = NULL;
$arguments62['pattern'] = NULL;
$arguments62['errorClass'] = 'f3-form-error';
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['required'] = false;
$arguments62['type'] = 'text';
$arguments62['class'] = 'form-control';
$output64 = '';

$output64 .= 'data[';
$array65 = array (
);
$output64 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array65);

$output64 .= '][name]';
$arguments62['name'] = $output64;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output39 .= '
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>=</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['name'] = NULL;
$arguments66['value'] = NULL;
$arguments66['property'] = NULL;
$arguments66['autofocus'] = NULL;
$arguments66['disabled'] = NULL;
$arguments66['maxlength'] = NULL;
$arguments66['readonly'] = NULL;
$arguments66['size'] = NULL;
$arguments66['placeholder'] = NULL;
$arguments66['pattern'] = NULL;
$arguments66['errorClass'] = 'f3-form-error';
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['required'] = false;
$arguments66['type'] = 'text';
$arguments66['class'] = 'form-control';
$output68 = '';

$output68 .= 'data[';
$array69 = array (
);
$output68 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array69);

$output68 .= '][propertyValue]';
$arguments66['name'] = $output68;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output39 .= '
					</div>
					<div class="form-group">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['additionalAttributes'] = NULL;
$arguments70['data'] = NULL;
$arguments70['name'] = NULL;
$arguments70['value'] = NULL;
$arguments70['property'] = NULL;
$arguments70['disabled'] = NULL;
$arguments70['class'] = NULL;
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$arguments70['class'] = 'btn btn-default';
$arguments70['name'] = 'add_property';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['languageKey'] = NULL;
$arguments72['alternativeLanguageKeys'] = NULL;
$output74 = '';
$array75 = array (
);
$output74 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array75);

$output74 .= 'addButton';
$arguments72['key'] = $output74;
$arguments70['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output39 .= '
					</div>
				</div>
				<div style="padding-top: 20px;">
					<div class="form-group">
						<h3>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['key'] = NULL;
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['languageKey'] = NULL;
$arguments76['alternativeLanguageKeys'] = NULL;
$output78 = '';
$array79 = array (
);
$output78 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array79);

$output78 .= 'clearObject';
$arguments76['key'] = $output78;

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output39 .= '
						</h3>
					</div>
					<div class="form-inline form-inline-spaced">
						<div class="form-group">
							<div class="checkbox">
								<label>
									';
$array80 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array80)]);

$output39 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['languageKey'] = NULL;
$arguments84['alternativeLanguageKeys'] = NULL;
$output86 = '';
$array87 = array (
);
$output86 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array87);

$output86 .= 'clear';
$arguments84['key'] = $output86;

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
									';
return $output83;
};
$arguments81 = array();
$arguments81['value'] = NULL;
$arguments81['mode'] = 'upper';
$arguments81['mode'] = 'upper';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output39 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['name'] = NULL;
$arguments88['value'] = NULL;
$arguments88['property'] = NULL;
$arguments88['disabled'] = NULL;
$arguments88['errorClass'] = 'f3-form-error';
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['checked'] = NULL;
$arguments88['multiple'] = false;
$output90 = '';

$output90 .= 'data[';
$array91 = array (
);
$output90 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array91);

$output90 .= '][clearValue]';
$arguments88['name'] = $output90;
$arguments88['value'] = 1;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output39 .= '
								</label>
							</div>
						</div>
						<div class="form-group">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['additionalAttributes'] = NULL;
$arguments92['data'] = NULL;
$arguments92['name'] = NULL;
$arguments92['value'] = NULL;
$arguments92['property'] = NULL;
$arguments92['disabled'] = NULL;
$arguments92['class'] = NULL;
$arguments92['dir'] = NULL;
$arguments92['id'] = NULL;
$arguments92['lang'] = NULL;
$arguments92['style'] = NULL;
$arguments92['title'] = NULL;
$arguments92['accesskey'] = NULL;
$arguments92['tabindex'] = NULL;
$arguments92['onclick'] = NULL;
$arguments92['class'] = 'btn btn-default';
$arguments92['name'] = 'clear_object';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['key'] = NULL;
$arguments94['id'] = NULL;
$arguments94['default'] = NULL;
$arguments94['arguments'] = NULL;
$arguments94['extensionName'] = NULL;
$arguments94['languageKey'] = NULL;
$arguments94['alternativeLanguageKeys'] = NULL;
$output96 = '';
$array97 = array (
);
$output96 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array97);

$output96 .= 'clearButton';
$arguments94['key'] = $output96;
$arguments92['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output39 .= '
						</div>
					</div>
				</div>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['key'] = NULL;
$arguments145['id'] = NULL;
$arguments145['default'] = NULL;
$arguments145['arguments'] = NULL;
$arguments145['extensionName'] = NULL;
$arguments145['languageKey'] = NULL;
$arguments145['alternativeLanguageKeys'] = NULL;
$output147 = '';
$array148 = array (
);
$output147 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array148);

$output147 .= 'addKey';
$arguments145['key'] = $output147;
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array150);
$arguments145['arguments'] = $array149;

$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext)]);

$output144 .= '
							';
return $output144;
};
$arguments141 = array();
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['uri'] = NULL;
$arguments141['defaultScheme'] = 'http';
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['name'] = NULL;
$arguments141['rel'] = NULL;
$arguments141['rev'] = NULL;
$arguments141['target'] = NULL;
$array143 = array (
);$arguments141['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array143);
$arguments141['defaultScheme'] = '';
$arguments141['class'] = 'btn btn-default';

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
						';
return $output140;
};
$arguments135 = array();
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$arguments135['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array137 = array();
$array138 = array (
);$array137['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array138);

$expression139 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments135['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression139(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)
					),
					$renderingContext
				);
$arguments135['__thenClosure'] = $renderChildrenClosure136;

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
					';
return $output134;
};
$arguments132 = array();

$output131 .= '';

$output131 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$output160 = '';
$array161 = array (
);
$output160 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array161);

$output160 .= 'removeKey';
$arguments158['key'] = $output160;
// Rendering Array
$array162 = array();
$array163 = array (
);$array162['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array163);
$arguments158['arguments'] = $array162;

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext)]);

$output157 .= '
						';
return $output157;
};
$arguments154 = array();
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['uri'] = NULL;
$arguments154['defaultScheme'] = 'http';
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['name'] = NULL;
$arguments154['rel'] = NULL;
$arguments154['rev'] = NULL;
$arguments154['target'] = NULL;
$array156 = array (
);$arguments154['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array156);
$arguments154['defaultScheme'] = '';
$arguments154['class'] = 'btn btn-default';

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
					';
return $output153;
};
$arguments151 = array();
$arguments151['if'] = NULL;

$output131 .= '';

$output131 .= '
				';
return $output131;
};
$arguments98 = array();
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['0'] = $renderingContext->getVariableProvider()->getByPath('isNotInTopLevelKeyList', $array129);

$expression130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)
					),
					$renderingContext
				);
$arguments98['__thenClosure'] = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['key'] = NULL;
$arguments111['id'] = NULL;
$arguments111['default'] = NULL;
$arguments111['arguments'] = NULL;
$arguments111['extensionName'] = NULL;
$arguments111['languageKey'] = NULL;
$arguments111['alternativeLanguageKeys'] = NULL;
$output113 = '';
$array114 = array (
);
$output113 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array114);

$output113 .= 'addKey';
$arguments111['key'] = $output113;
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array116);
$arguments111['arguments'] = $array115;

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output110 .= '
							';
return $output110;
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['uri'] = NULL;
$arguments107['defaultScheme'] = 'http';
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['name'] = NULL;
$arguments107['rel'] = NULL;
$arguments107['rev'] = NULL;
$arguments107['target'] = NULL;
$array109 = array (
);$arguments107['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array109);
$arguments107['defaultScheme'] = '';
$arguments107['class'] = 'btn btn-default';

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
						';
return $output106;
};
$arguments101 = array();
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$arguments101['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array104);

$expression105 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments101['__thenClosure'] = $renderChildrenClosure102;

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
					';
return $output100;
};
$arguments98['__elseClosures'][] = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['key'] = NULL;
$arguments122['id'] = NULL;
$arguments122['default'] = NULL;
$arguments122['arguments'] = NULL;
$arguments122['extensionName'] = NULL;
$arguments122['languageKey'] = NULL;
$arguments122['alternativeLanguageKeys'] = NULL;
$output124 = '';
$array125 = array (
);
$output124 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array125);

$output124 .= 'removeKey';
$arguments122['key'] = $output124;
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array127);
$arguments122['arguments'] = $array126;

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext)]);

$output121 .= '
						';
return $output121;
};
$arguments118 = array();
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['uri'] = NULL;
$arguments118['defaultScheme'] = 'http';
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['name'] = NULL;
$arguments118['rel'] = NULL;
$arguments118['rev'] = NULL;
$arguments118['target'] = NULL;
$array120 = array (
);$arguments118['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array120);
$arguments118['defaultScheme'] = '';
$arguments118['class'] = 'btn btn-default';

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
					';
return $output117;
};

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output39 .= '
			';
return $output39;
};
$arguments37['__elseClosures'][] = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
				';
$array165 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array165)]);

$output164 .= ' = <strong>';
$array166 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theSetupValue', $array166)]);

$output164 .= '</strong>
			';
return $output164;
};

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
		<div>
			<hr style="margin-top: 5px; margin-bottom: 5px;"/>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output306 = '';

$output306 .= '
				<strong><i class="fa fa-chevron-left"></i>&nbsp;
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['key'] = NULL;
$arguments307['id'] = NULL;
$arguments307['default'] = NULL;
$arguments307['arguments'] = NULL;
$arguments307['extensionName'] = NULL;
$arguments307['languageKey'] = NULL;
$arguments307['alternativeLanguageKeys'] = NULL;
$output309 = '';
$array310 = array (
);
$output309 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array310);

$output309 .= 'back';
$arguments307['key'] = $output309;

$output306 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext)]);

$output306 .= '
				</strong>
			';
return $output306;
};
$arguments303 = array();
$arguments303['additionalAttributes'] = NULL;
$arguments303['data'] = NULL;
$arguments303['uri'] = NULL;
$arguments303['defaultScheme'] = 'http';
$arguments303['class'] = NULL;
$arguments303['dir'] = NULL;
$arguments303['id'] = NULL;
$arguments303['lang'] = NULL;
$arguments303['style'] = NULL;
$arguments303['title'] = NULL;
$arguments303['accesskey'] = NULL;
$arguments303['tabindex'] = NULL;
$arguments303['onclick'] = NULL;
$arguments303['name'] = NULL;
$arguments303['rel'] = NULL;
$arguments303['rev'] = NULL;
$arguments303['target'] = NULL;
$array305 = array (
);$arguments303['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrl', $array305);
$arguments303['defaultScheme'] = '';
$arguments303['class'] = 'btn btn-default';

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output36 .= '
		</div>
	';
return $output36;
};
$arguments34['__elseClosures'][] = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['pageTitle'] = '';
$arguments312['includeCssFiles'] = NULL;
$arguments312['includeJsFiles'] = NULL;
$arguments312['addJsInlineLabels'] = NULL;
$arguments312['includeRequireJsModules'] = NULL;
$arguments312['addInlineSettings'] = NULL;
// Rendering Array
$array314 = array();
$array314['0'] = 'TYPO3/CMS/Tstemplate/TypoScriptObjectBrowser';
$arguments312['includeRequireJsModules'] = $array314;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext)]);

$output311 .= '
		<div class="tsob-menu">
			<div class="form-inline">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
					<div class="form-group">
						<label class="control-label">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['key'] = NULL;
$arguments321['id'] = NULL;
$arguments321['default'] = NULL;
$arguments321['arguments'] = NULL;
$arguments321['extensionName'] = NULL;
$arguments321['languageKey'] = NULL;
$arguments321['alternativeLanguageKeys'] = NULL;
$output323 = '';
$array324 = array (
);
$output323 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array324);

$output323 .= 'browse';
$arguments321['key'] = $output323;

$output320 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext)]);

$output320 .= '
						</label>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$array327 = array (
);return $renderingContext->getVariableProvider()->getByPath('browserTypeDropdownMenu', $array327);
};
$arguments325 = array();
$arguments325['value'] = NULL;

$output320 .= isset($arguments325['value']) ? $arguments325['value'] : $renderChildrenClosure326();

$output320 .= '
					</div>
				';
return $output320;
};
$arguments315 = array();
$arguments315['then'] = NULL;
$arguments315['else'] = NULL;
$arguments315['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array317 = array();
$array318 = array (
);$array317['0'] = $renderingContext->getVariableProvider()->getByPath('hasTsBrowserTypes', $array318);

$expression319 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments315['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression319(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array317)
					),
					$renderingContext
				);
$arguments315['__thenClosure'] = $renderChildrenClosure316;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output311 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
					<div class="form-group">
						<label class="control-label" for="ts_browser_toplevel_';
$array334 = array (
);
$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tsBrowserType', $array334)]);

$output333 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments335 = array();
$arguments335['key'] = NULL;
$arguments335['id'] = NULL;
$arguments335['default'] = NULL;
$arguments335['arguments'] = NULL;
$arguments335['extensionName'] = NULL;
$arguments335['languageKey'] = NULL;
$arguments335['alternativeLanguageKeys'] = NULL;
$output337 = '';
$array338 = array (
);
$output337 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array338);

$output337 .= 'objectList';
$arguments335['key'] = $output337;

$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext)]);

$output333 .= '
						</label>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$array341 = array (
);return $renderingContext->getVariableProvider()->getByPath('objectListDropdownMenu', $array341);
};
$arguments339 = array();
$arguments339['value'] = NULL;

$output333 .= isset($arguments339['value']) ? $arguments339['value'] : $renderChildrenClosure340();

$output333 .= '
					</div>
				';
return $output333;
};
$arguments328 = array();
$arguments328['then'] = NULL;
$arguments328['else'] = NULL;
$arguments328['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array330 = array();
$array331 = array (
);$array330['0'] = $renderingContext->getVariableProvider()->getByPath('hasTopLevelInObjectList', $array331);

$expression332 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments328['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression332(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array330)
					),
					$renderingContext
				);
$arguments328['__thenClosure'] = $renderChildrenClosure329;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output311 .= '
				<div class="form-group">
					<label class="control-label" for="search_field">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments342 = array();
$arguments342['key'] = NULL;
$arguments342['id'] = NULL;
$arguments342['default'] = NULL;
$arguments342['arguments'] = NULL;
$arguments342['extensionName'] = NULL;
$arguments342['languageKey'] = NULL;
$arguments342['alternativeLanguageKeys'] = NULL;
$output344 = '';
$array345 = array (
);
$output344 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array345);

$output344 .= 'search';
$arguments342['key'] = $output344;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext)]);

$output311 .= '
					</label>
					<div class="form-group"><input class="form-control" type="search" name="search_field" id="search_field"
																				 value="';
$array346 = array (
);
$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('postSearchField', $array346)]);

$output311 .= '"/></div>
				</div>
				<input class="btn btn-default tsob-search-submit" type="submit" name="search"
							 value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments347 = array();
$arguments347['key'] = NULL;
$arguments347['id'] = NULL;
$arguments347['default'] = NULL;
$arguments347['arguments'] = NULL;
$arguments347['extensionName'] = NULL;
$arguments347['languageKey'] = NULL;
$arguments347['alternativeLanguageKeys'] = NULL;
$arguments347['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext)]);

$output311 .= '"/>
			</div>
			<div class="checkbox">
				<label for="checkTs_browser_regexsearch">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$array351 = array (
);return $renderingContext->getVariableProvider()->getByPath('regexSearchCheckbox', $array351);
};
$arguments349 = array();
$arguments349['value'] = NULL;

$output311 .= isset($arguments349['value']) ? $arguments349['value'] : $renderChildrenClosure350();

$output311 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments352 = array();
$arguments352['key'] = NULL;
$arguments352['id'] = NULL;
$arguments352['default'] = NULL;
$arguments352['arguments'] = NULL;
$arguments352['extensionName'] = NULL;
$arguments352['languageKey'] = NULL;
$arguments352['alternativeLanguageKeys'] = NULL;
$output354 = '';
$array355 = array (
);
$output354 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array355);

$output354 .= 'regExp';
$arguments352['key'] = $output354;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext)]);

$output311 .= '
				</label>
			</div>
		</div>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
			<div style="padding-top: 10px;"></div>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['key'] = NULL;
$arguments373['id'] = NULL;
$arguments373['default'] = NULL;
$arguments373['arguments'] = NULL;
$arguments373['extensionName'] = NULL;
$arguments373['languageKey'] = NULL;
$arguments373['alternativeLanguageKeys'] = NULL;
$output375 = '';
$array376 = array (
);
$output375 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array376);

$output375 .= 'severity.';
$array377 = array (
);
$output375 .= $renderingContext->getVariableProvider()->getByPath('parseError.1', $array377);
$arguments373['key'] = $output375;

$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext)]);

$output372 .= '
					: ';
$array378 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parseError.0', $array378)]);

$output372 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output384 = '';

$output384 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments385 = array();
$arguments385['key'] = NULL;
$arguments385['id'] = NULL;
$arguments385['default'] = NULL;
$arguments385['arguments'] = NULL;
$arguments385['extensionName'] = NULL;
$arguments385['languageKey'] = NULL;
$arguments385['alternativeLanguageKeys'] = NULL;
$output387 = '';
$array388 = array (
);
$output387 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array388);

$output387 .= 'errorShowDetails';
$arguments385['key'] = $output387;

$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext)]);

$output384 .= '
					';
return $output384;
};
$arguments379 = array();
$arguments379['additionalAttributes'] = NULL;
$arguments379['data'] = NULL;
$arguments379['uri'] = NULL;
$arguments379['defaultScheme'] = 'http';
$arguments379['class'] = NULL;
$arguments379['dir'] = NULL;
$arguments379['id'] = NULL;
$arguments379['lang'] = NULL;
$arguments379['style'] = NULL;
$arguments379['title'] = NULL;
$arguments379['accesskey'] = NULL;
$arguments379['tabindex'] = NULL;
$arguments379['onclick'] = NULL;
$arguments379['name'] = NULL;
$arguments379['rel'] = NULL;
$arguments379['rev'] = NULL;
$arguments379['target'] = NULL;
$output381 = '';
$array382 = array (
);
$output381 .= $renderingContext->getVariableProvider()->getByPath('showErrorDetailsUri', $array382);
$array383 = array (
);
$output381 .= $renderingContext->getVariableProvider()->getByPath('parseError.2', $array383);
$arguments379['uri'] = $output381;
$arguments379['defaultScheme'] = '';
$arguments379['class'] = 'text-warning';

$output372 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output372 .= '
					<br/>
				';
return $output372;
};
$arguments369 = array();
$arguments369['each'] = NULL;
$arguments369['as'] = NULL;
$arguments369['key'] = NULL;
$arguments369['reverse'] = false;
$arguments369['iteration'] = NULL;
$array371 = array (
);$arguments369['each'] = $renderingContext->getVariableProvider()->getByPath('parseErrors', $array371);
$arguments369['as'] = 'parseError';

$output368 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output368 .= '
			';
return $output368;
};
$arguments362 = array();
$arguments362['message'] = NULL;
$arguments362['title'] = NULL;
$arguments362['state'] = -2;
$arguments362['iconName'] = NULL;
$arguments362['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['key'] = NULL;
$arguments364['id'] = NULL;
$arguments364['default'] = NULL;
$arguments364['arguments'] = NULL;
$arguments364['extensionName'] = NULL;
$arguments364['languageKey'] = NULL;
$arguments364['alternativeLanguageKeys'] = NULL;
$output366 = '';
$array367 = array (
);
$output366 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array367);

$output366 .= 'errorsWarnings';
$arguments364['key'] = $output366;
$arguments362['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);
$arguments362['state'] = 1;
$renderChildrenClosure363 = ($arguments362['message'] !== null) ? function() use ($arguments362) { return $arguments362['message']; } : $renderChildrenClosure363;
$output361 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output361 .= '
		';
return $output361;
};
$arguments356 = array();
$arguments356['then'] = NULL;
$arguments356['else'] = NULL;
$arguments356['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array358 = array();
$array359 = array (
);$array358['0'] = $renderingContext->getVariableProvider()->getByPath('hasParseErrors', $array359);

$expression360 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments356['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression360(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array358)
					),
					$renderingContext
				);
$arguments356['__thenClosure'] = $renderChildrenClosure357;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output311 .= '
		<div class="panel panel-space panel-default">
			<div class="panel-heading">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
						<strong>';
$array409 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('treeLabel', $array409)]);

$output408 .= '</strong>
					';
return $output408;
};
$arguments406 = array();

$output405 .= '';

$output405 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$output415 = '';

$output415 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments416 = array();
$arguments416['key'] = NULL;
$arguments416['id'] = NULL;
$arguments416['default'] = NULL;
$arguments416['arguments'] = NULL;
$arguments416['extensionName'] = NULL;
$arguments416['languageKey'] = NULL;
$arguments416['alternativeLanguageKeys'] = NULL;
$output418 = '';
$array419 = array (
);
$output418 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array419);
$array420 = array (
);
$output418 .= $renderingContext->getVariableProvider()->getByPath('rootLLKey', $array420);
$arguments416['key'] = $output418;

$output415 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);

$output415 .= '
						';
return $output415;
};
$arguments413 = array();
$arguments413['value'] = NULL;
$arguments413['mode'] = 'upper';
$arguments413['mode'] = 'upper';

$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext)]);

$output412 .= '
					';
return $output412;
};
$arguments410 = array();
$arguments410['if'] = NULL;

$output405 .= '';

$output405 .= '
				';
return $output405;
};
$arguments389 = array();
$arguments389['then'] = NULL;
$arguments389['else'] = NULL;
$arguments389['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array402 = array();
$array403 = array (
);$array402['0'] = $renderingContext->getVariableProvider()->getByPath('hasKeySelected', $array403);

$expression404 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments389['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression404(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array402)
					),
					$renderingContext
				);
$arguments389['__thenClosure'] = function() use ($renderingContext, $self) {
$output391 = '';

$output391 .= '
						<strong>';
$array392 = array (
);
$output391 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('treeLabel', $array392)]);

$output391 .= '</strong>
					';
return $output391;
};
$arguments389['__elseClosures'][] = function() use ($renderingContext, $self) {
$output393 = '';

$output393 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$output396 = '';

$output396 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments397 = array();
$arguments397['key'] = NULL;
$arguments397['id'] = NULL;
$arguments397['default'] = NULL;
$arguments397['arguments'] = NULL;
$arguments397['extensionName'] = NULL;
$arguments397['languageKey'] = NULL;
$arguments397['alternativeLanguageKeys'] = NULL;
$output399 = '';
$array400 = array (
);
$output399 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array400);
$array401 = array (
);
$output399 .= $renderingContext->getVariableProvider()->getByPath('rootLLKey', $array401);
$arguments397['key'] = $output399;

$output396 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output396 .= '
						';
return $output396;
};
$arguments394 = array();
$arguments394['value'] = NULL;
$arguments394['mode'] = 'upper';
$arguments394['mode'] = 'upper';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext)]);

$output393 .= '
					';
return $output393;
};

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output311 .= '
				<strong>';
$array421 = array (
);
$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedKey', $array421)]);

$output311 .= '</strong>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
$output431 = '';

$output431 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['key'] = NULL;
$arguments432['id'] = NULL;
$arguments432['default'] = NULL;
$arguments432['arguments'] = NULL;
$arguments432['extensionName'] = NULL;
$arguments432['languageKey'] = NULL;
$arguments432['alternativeLanguageKeys'] = NULL;
$output434 = '';
$array435 = array (
);
$output434 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array435);

$output434 .= 'removeKey';
$arguments432['key'] = $output434;

$output431 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext)]);

$output431 .= '
					';
return $output431;
};
$arguments428 = array();
$arguments428['additionalAttributes'] = NULL;
$arguments428['data'] = NULL;
$arguments428['uri'] = NULL;
$arguments428['defaultScheme'] = 'http';
$arguments428['class'] = NULL;
$arguments428['dir'] = NULL;
$arguments428['id'] = NULL;
$arguments428['lang'] = NULL;
$arguments428['style'] = NULL;
$arguments428['title'] = NULL;
$arguments428['accesskey'] = NULL;
$arguments428['tabindex'] = NULL;
$arguments428['onclick'] = NULL;
$arguments428['name'] = NULL;
$arguments428['rel'] = NULL;
$arguments428['rev'] = NULL;
$arguments428['target'] = NULL;
$array430 = array (
);$arguments428['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlRemoveFromObjectList', $array430);
$arguments428['defaultScheme'] = '';
$arguments428['class'] = 'btn btn-default';

$output427 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext);

$output427 .= '
				';
return $output427;
};
$arguments422 = array();
$arguments422['then'] = NULL;
$arguments422['else'] = NULL;
$arguments422['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array424 = array();
$array425 = array (
);$array424['0'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlRemoveFromObjectList', $array425);

$expression426 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments422['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression426(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array424)
					),
					$renderingContext
				);
$arguments422['__thenClosure'] = $renderChildrenClosure423;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext);

$output311 .= '
			</div>
			<div class="panel-body">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$array438 = array (
);return $renderingContext->getVariableProvider()->getByPath('tsTree', $array438);
};
$arguments436 = array();
$arguments436['value'] = NULL;

$output311 .= isset($arguments436['value']) ? $arguments436['value'] : $renderChildrenClosure437();

$output311 .= '</div>
		</div>
		<div>
			<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['key'] = NULL;
$arguments439['id'] = NULL;
$arguments439['default'] = NULL;
$arguments439['arguments'] = NULL;
$arguments439['extensionName'] = NULL;
$arguments439['languageKey'] = NULL;
$arguments439['alternativeLanguageKeys'] = NULL;
$output441 = '';
$array442 = array (
);
$output441 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array442);

$output441 .= 'displayOptions';
$arguments439['key'] = $output441;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext)]);

$output311 .= '</h2>
			<div class="typo3-listOptions">
				<div class="checkbox">
					<label for="checkTs_browser_showComments">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
$array445 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxShowComments', $array445);
};
$arguments443 = array();
$arguments443['value'] = NULL;

$output311 .= isset($arguments443['value']) ? $arguments443['value'] : $renderChildrenClosure444();

$output311 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments446 = array();
$arguments446['key'] = NULL;
$arguments446['id'] = NULL;
$arguments446['default'] = NULL;
$arguments446['arguments'] = NULL;
$arguments446['extensionName'] = NULL;
$arguments446['languageKey'] = NULL;
$arguments446['alternativeLanguageKeys'] = NULL;
$output448 = '';
$array449 = array (
);
$output448 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array449);

$output448 .= 'displayComments';
$arguments446['key'] = $output448;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext)]);

$output311 .= '
					</label>
				</div>
				<div class="checkbox">
					<label for="checkTs_browser_alphaSort">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$array452 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxAlphaSort', $array452);
};
$arguments450 = array();
$arguments450['value'] = NULL;

$output311 .= isset($arguments450['value']) ? $arguments450['value'] : $renderChildrenClosure451();

$output311 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments453 = array();
$arguments453['key'] = NULL;
$arguments453['id'] = NULL;
$arguments453['default'] = NULL;
$arguments453['arguments'] = NULL;
$arguments453['extensionName'] = NULL;
$arguments453['languageKey'] = NULL;
$arguments453['alternativeLanguageKeys'] = NULL;
$output455 = '';
$array456 = array (
);
$output455 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array456);

$output455 .= 'sortAlphabetically';
$arguments453['key'] = $output455;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext)]);

$output311 .= '
					</label>
				</div>
				<div class="checkbox">
					<label for="checkTs_browser_fixedLgd">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$array459 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxCropLines', $array459);
};
$arguments457 = array();
$arguments457['value'] = NULL;

$output311 .= isset($arguments457['value']) ? $arguments457['value'] : $renderChildrenClosure458();

$output311 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['key'] = NULL;
$arguments460['id'] = NULL;
$arguments460['default'] = NULL;
$arguments460['arguments'] = NULL;
$arguments460['extensionName'] = NULL;
$arguments460['languageKey'] = NULL;
$arguments460['alternativeLanguageKeys'] = NULL;
$output462 = '';
$array463 = array (
);
$output462 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array463);

$output462 .= 'cropLines';
$arguments460['key'] = $output462;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext)]);

$output311 .= '
					</label>
				</div>
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
				<div class="form">
					<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['key'] = NULL;
$arguments470['id'] = NULL;
$arguments470['default'] = NULL;
$arguments470['arguments'] = NULL;
$arguments470['extensionName'] = NULL;
$arguments470['languageKey'] = NULL;
$arguments470['alternativeLanguageKeys'] = NULL;
$output472 = '';
$array473 = array (
);
$output472 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array473);

$output472 .= 'displayConstants';
$arguments470['key'] = $output472;

$output469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext)]);

$output469 .= '</label>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
$array476 = array (
);return $renderingContext->getVariableProvider()->getByPath('dropdownDisplayConstants', $array476);
};
$arguments474 = array();
$arguments474['value'] = NULL;

$output469 .= isset($arguments474['value']) ? $arguments474['value'] : $renderChildrenClosure475();

$output469 .= '
				</div>
			';
return $output469;
};
$arguments464 = array();
$arguments464['then'] = NULL;
$arguments464['else'] = NULL;
$arguments464['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array466 = array();
$array467 = array (
);$array466['0'] = $renderingContext->getVariableProvider()->getByPath('isSetupAndCropLinesDisabled', $array467);

$expression468 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments464['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression468(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array466)
					),
					$renderingContext
				);
$arguments464['__thenClosure'] = $renderChildrenClosure465;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);

$output311 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
$output482 = '';

$output482 .= '
				<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments483 = array();
$arguments483['key'] = NULL;
$arguments483['id'] = NULL;
$arguments483['default'] = NULL;
$arguments483['arguments'] = NULL;
$arguments483['extensionName'] = NULL;
$arguments483['languageKey'] = NULL;
$arguments483['alternativeLanguageKeys'] = NULL;
$output485 = '';
$array486 = array (
);
$output485 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array486);

$output485 .= 'conditions';
$arguments483['key'] = $output485;

$output482 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext)]);

$output482 .= '</h2>
				<div class="typo3-listOptions">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$output490 = '';

$output490 .= '
						<div class="checkbox">
							<label for="check';
$array491 = array (
);
$output490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.key', $array491)]);

$output490 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments492 = array();
$arguments492['additionalAttributes'] = NULL;
$arguments492['data'] = NULL;
$arguments492['name'] = NULL;
$arguments492['value'] = NULL;
$arguments492['property'] = NULL;
$arguments492['disabled'] = NULL;
$arguments492['errorClass'] = 'f3-form-error';
$arguments492['class'] = NULL;
$arguments492['dir'] = NULL;
$arguments492['id'] = NULL;
$arguments492['lang'] = NULL;
$arguments492['style'] = NULL;
$arguments492['title'] = NULL;
$arguments492['accesskey'] = NULL;
$arguments492['tabindex'] = NULL;
$arguments492['onclick'] = NULL;
$arguments492['checked'] = NULL;
$arguments492['multiple'] = false;
$arguments492['class'] = 'checkbox';
$output494 = '';

$output494 .= 'conditions[';
$array495 = array (
);
$output494 .= $renderingContext->getVariableProvider()->getByPath('condition.key', $array495);

$output494 .= ']';
$arguments492['name'] = $output494;
$output496 = '';

$output496 .= 'check';
$array497 = array (
);
$output496 .= $renderingContext->getVariableProvider()->getByPath('condition.key', $array497);
$arguments492['id'] = $output496;
$array498 = array (
);$arguments492['value'] = $renderingContext->getVariableProvider()->getByPath('condition.value', $array498);
// Rendering Boolean node
// Rendering Array
$array499 = array();
$array500 = array (
);$array499['0'] = $renderingContext->getVariableProvider()->getByPath('condition.isSet', $array500);

$expression501 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments492['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression501(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array499)
					),
					$renderingContext
				);

$output490 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output490 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
$array504 = array (
);return $renderingContext->getVariableProvider()->getByPath('condition.label', $array504);
};
$arguments502 = array();
$arguments502['value'] = NULL;

$output490 .= isset($arguments502['value']) ? $arguments502['value'] : $renderChildrenClosure503();

$output490 .= '
							</label>
						</div>
					';
return $output490;
};
$arguments487 = array();
$arguments487['each'] = NULL;
$arguments487['as'] = NULL;
$arguments487['key'] = NULL;
$arguments487['reverse'] = false;
$arguments487['iteration'] = NULL;
$array489 = array (
);$arguments487['each'] = $renderingContext->getVariableProvider()->getByPath('tsConditions', $array489);
$arguments487['as'] = 'condition';

$output482 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output482 .= '
				</div>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['additionalAttributes'] = NULL;
$arguments505['data'] = NULL;
$arguments505['name'] = NULL;
$arguments505['value'] = NULL;
$arguments505['property'] = NULL;
$arguments505['disabled'] = NULL;
$arguments505['class'] = NULL;
$arguments505['dir'] = NULL;
$arguments505['id'] = NULL;
$arguments505['lang'] = NULL;
$arguments505['style'] = NULL;
$arguments505['title'] = NULL;
$arguments505['accesskey'] = NULL;
$arguments505['tabindex'] = NULL;
$arguments505['onclick'] = NULL;
$arguments505['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments507 = array();
$arguments507['key'] = NULL;
$arguments507['id'] = NULL;
$arguments507['default'] = NULL;
$arguments507['arguments'] = NULL;
$arguments507['extensionName'] = NULL;
$arguments507['languageKey'] = NULL;
$arguments507['alternativeLanguageKeys'] = NULL;
$output509 = '';
$array510 = array (
);
$output509 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array510);

$output509 .= 'setConditions';
$arguments507['key'] = $output509;
$arguments505['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext);
$arguments505['name'] = 'Submit';

$output482 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);

$output482 .= '
			';
return $output482;
};
$arguments477 = array();
$arguments477['then'] = NULL;
$arguments477['else'] = NULL;
$arguments477['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array479 = array();
$array480 = array (
);$array479['0'] = $renderingContext->getVariableProvider()->getByPath('hasConditions', $array480);

$expression481 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments477['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression481(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array479)
					),
					$renderingContext
				);
$arguments477['__thenClosure'] = $renderChildrenClosure478;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments477, $renderChildrenClosure478, $renderingContext);

$output311 .= '
		</div>
	';
return $output311;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#