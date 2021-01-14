<?php

class partial_Table_Columns_ba5ac06587702f7122fdc59413dcc265f2f637f1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return '
				<th>
			';
};
$arguments159 = array();

$output158 .= '';

$output158 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments190 = array();

$output189 .= '';

$output189 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return '
								<td>
							';
};
$arguments192 = array();
$arguments192['if'] = NULL;

$output189 .= '';

$output189 .= '
						';
return $output189;
};
$arguments184 = array();
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$arguments184['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array186 = array();
$array187 = array (
);$array186['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array187);
$array186['1'] = ' == 2';

$expression188 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments184['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)
					),
					$renderingContext
				);
$arguments184['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments184['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								<td>
							';
};

$output183 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '
					';
return $output183;
};
$arguments181 = array();

$output180 .= '';

$output180 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return '
						<td>
					';
};
$arguments194 = array();
$arguments194['if'] = NULL;

$output180 .= '';

$output180 .= '
				';
return $output180;
};
$arguments164 = array();
$arguments164['then'] = NULL;
$arguments164['else'] = NULL;
$arguments164['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array178 = array (
);$array177['0'] = $renderingContext->getVariableProvider()->getByPath('columnIterator.isFirst', $array178);

$expression179 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments164['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);
$arguments164['__thenClosure'] = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments173 = array();

$output172 .= '';

$output172 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return '
								<td>
							';
};
$arguments175 = array();
$arguments175['if'] = NULL;

$output172 .= '';

$output172 .= '
						';
return $output172;
};
$arguments167 = array();
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$arguments167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array170 = array (
);$array169['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array170);
$array169['1'] = ' == 2';

$expression171 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression171(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);
$arguments167['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments167['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								<td>
							';
};

$output166 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '
					';
return $output166;
};
$arguments164['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						<td>
					';
};

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
			';
return $output163;
};
$arguments161 = array();
$arguments161['if'] = NULL;

$output158 .= '';

$output158 .= '
		';
return $output158;
};
$arguments120 = array();
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$arguments120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array156);
$array155['1'] = ' == 1';

$expression157 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$arguments120['__thenClosure'] = function() use ($renderingContext, $self) {
return '
				<th>
			';
};
$arguments120['__elseClosures'][] = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments149 = array();

$output148 .= '';

$output148 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return '
								<td>
							';
};
$arguments151 = array();
$arguments151['if'] = NULL;

$output148 .= '';

$output148 .= '
						';
return $output148;
};
$arguments143 = array();
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$arguments143['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array145 = array();
$array146 = array (
);$array145['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array146);
$array145['1'] = ' == 2';

$expression147 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments143['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression147(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);
$arguments143['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments143['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								<td>
							';
};

$output142 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output142 .= '
					';
return $output142;
};
$arguments140 = array();

$output139 .= '';

$output139 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return '
						<td>
					';
};
$arguments153 = array();
$arguments153['if'] = NULL;

$output139 .= '';

$output139 .= '
				';
return $output139;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['0'] = $renderingContext->getVariableProvider()->getByPath('columnIterator.isFirst', $array137);

$expression138 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array136)
					),
					$renderingContext
				);
$arguments123['__thenClosure'] = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments132 = array();

$output131 .= '';

$output131 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return '
								<td>
							';
};
$arguments134 = array();
$arguments134['if'] = NULL;

$output131 .= '';

$output131 .= '
						';
return $output131;
};
$arguments126 = array();
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$arguments126['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array129);
$array128['1'] = ' == 2';

$expression130 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments126['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)
					),
					$renderingContext
				);
$arguments126['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments126['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								<td>
							';
};

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
					';
return $output125;
};
$arguments123['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						<td>
					';
};

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '
			';
return $output122;
};

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
	';
return $output119;
};
$arguments117 = array();

$output116 .= '';

$output116 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return '
						<th>
					';
};
$arguments225 = array();

$output224 .= '';

$output224 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return '
						<td>
					';
};
$arguments227 = array();
$arguments227['if'] = NULL;

$output224 .= '';

$output224 .= '
				';
return $output224;
};
$arguments219 = array();
$arguments219['then'] = NULL;
$arguments219['else'] = NULL;
$arguments219['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array221 = array();
$array222 = array (
);$array221['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array222);
$array221['1'] = ' == 2';

$expression223 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments219['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression223(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array221)
					),
					$renderingContext
				);
$arguments219['__thenClosure'] = function() use ($renderingContext, $self) {
return '
						<th>
					';
};
$arguments219['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						<td>
					';
};

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output218 .= '
			';
return $output218;
};
$arguments216 = array();

$output215 .= '';

$output215 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return '
				<td>
			';
};
$arguments229 = array();
$arguments229['if'] = NULL;

$output215 .= '';

$output215 .= '
		';
return $output215;
};
$arguments199 = array();
$arguments199['then'] = NULL;
$arguments199['else'] = NULL;
$arguments199['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array213 = array (
);$array212['0'] = $renderingContext->getVariableProvider()->getByPath('columnIterator.isFirst', $array213);

$expression214 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments199['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments199['__thenClosure'] = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return '
						<th>
					';
};
$arguments208 = array();

$output207 .= '';

$output207 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return '
						<td>
					';
};
$arguments210 = array();
$arguments210['if'] = NULL;

$output207 .= '';

$output207 .= '
				';
return $output207;
};
$arguments202 = array();
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$arguments202['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = array();
$array205 = array (
);$array204['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array205);
$array204['1'] = ' == 2';

$expression206 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = function() use ($renderingContext, $self) {
return '
						<th>
					';
};
$arguments202['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						<td>
					';
};

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
			';
return $output201;
};
$arguments199['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
				<td>
			';
};

$output198 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
	';
return $output198;
};
$arguments196 = array();
$arguments196['if'] = NULL;

$output116 .= '';

$output116 .= '
';
return $output116;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['0'] = $renderingContext->getVariableProvider()->getByPath('rowIterator.isFirst', $array114);

$expression115 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return '
				<th>
			';
};
$arguments43 = array();

$output42 .= '';

$output42 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments74 = array();

$output73 .= '';

$output73 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return '
								<td>
							';
};
$arguments76 = array();
$arguments76['if'] = NULL;

$output73 .= '';

$output73 .= '
						';
return $output73;
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = array();
$array71 = array (
);$array70['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array71);
$array70['1'] = ' == 2';

$expression72 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments68['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments68['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								<td>
							';
};

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
					';
return $output67;
};
$arguments65 = array();

$output64 .= '';

$output64 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return '
						<td>
					';
};
$arguments78 = array();
$arguments78['if'] = NULL;

$output64 .= '';

$output64 .= '
				';
return $output64;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['0'] = $renderingContext->getVariableProvider()->getByPath('columnIterator.isFirst', $array62);

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments57 = array();

$output56 .= '';

$output56 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return '
								<td>
							';
};
$arguments59 = array();
$arguments59['if'] = NULL;

$output56 .= '';

$output56 .= '
						';
return $output56;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array54);
$array53['1'] = ' == 2';

$expression55 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments51['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								<td>
							';
};

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
					';
return $output50;
};
$arguments48['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						<td>
					';
};

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
			';
return $output47;
};
$arguments45 = array();
$arguments45['if'] = NULL;

$output42 .= '';

$output42 .= '
		';
return $output42;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array40);
$array39['1'] = ' == 1';

$expression41 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
return '
				<th>
			';
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments33 = array();

$output32 .= '';

$output32 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return '
								<td>
							';
};
$arguments35 = array();
$arguments35['if'] = NULL;

$output32 .= '';

$output32 .= '
						';
return $output32;
};
$arguments27 = array();
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array30);
$array29['1'] = ' == 2';

$expression31 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments27['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments27['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								<td>
							';
};

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
					';
return $output26;
};
$arguments24 = array();

$output23 .= '';

$output23 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return '
						<td>
					';
};
$arguments37 = array();
$arguments37['if'] = NULL;

$output23 .= '';

$output23 .= '
				';
return $output23;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('columnIterator.isFirst', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments16 = array();

$output15 .= '';

$output15 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return '
								<td>
							';
};
$arguments18 = array();
$arguments18['if'] = NULL;

$output15 .= '';

$output15 .= '
						';
return $output15;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array13);
$array12['1'] = ' == 2';

$expression14 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								<th>
							';
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								<td>
							';
};

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
					';
return $output9;
};
$arguments7['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						<td>
					';
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
			';
return $output6;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return '
						<th>
					';
};
$arguments107 = array();

$output106 .= '';

$output106 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return '
						<td>
					';
};
$arguments109 = array();
$arguments109['if'] = NULL;

$output106 .= '';

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
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array104);
$array103['1'] = ' == 2';

$expression105 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments101['__thenClosure'] = function() use ($renderingContext, $self) {
return '
						<th>
					';
};
$arguments101['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						<td>
					';
};

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
			';
return $output100;
};
$arguments98 = array();

$output97 .= '';

$output97 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return '
				<td>
			';
};
$arguments111 = array();
$arguments111['if'] = NULL;

$output97 .= '';

$output97 .= '
		';
return $output97;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['0'] = $renderingContext->getVariableProvider()->getByPath('columnIterator.isFirst', $array95);

$expression96 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return '
						<th>
					';
};
$arguments90 = array();

$output89 .= '';

$output89 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return '
						<td>
					';
};
$arguments92 = array();
$arguments92['if'] = NULL;

$output89 .= '';

$output89 .= '
				';
return $output89;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array87);
$array86['1'] = ' == 2';

$expression88 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
$arguments84['__thenClosure'] = function() use ($renderingContext, $self) {
return '
						<th>
					';
};
$arguments84['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						<td>
					';
};

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
			';
return $output83;
};
$arguments81['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
				<td>
			';
};

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
	';
return $output80;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$array246 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cell', $array246)]);
};
$arguments244 = array();
$arguments244['value'] = NULL;
$renderChildrenClosure245 = ($arguments244['value'] !== null) ? function() use ($arguments244) { return $arguments244['value']; } : $renderChildrenClosure245;
$output243 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output243 .= '
	';
return $output243;
};
$arguments241 = array();

$output240 .= '';

$output240 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return '
		&nbsp;
	';
};
$arguments247 = array();
$arguments247['if'] = NULL;

$output240 .= '';

$output240 .= '
';
return $output240;
};
$arguments231 = array();
$arguments231['then'] = NULL;
$arguments231['else'] = NULL;
$arguments231['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array237 = array();
$array238 = array (
);$array237['0'] = $renderingContext->getVariableProvider()->getByPath('cell', $array238);
$array237['1'] = ' != \'\'';

$expression239 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments231['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);
$arguments231['__thenClosure'] = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$array236 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cell', $array236)]);
};
$arguments234 = array();
$arguments234['value'] = NULL;
$renderChildrenClosure235 = ($arguments234['value'] !== null) ? function() use ($arguments234) { return $arguments234['value']; } : $renderChildrenClosure235;
$output233 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output233 .= '
	';
return $output233;
};
$arguments231['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
		&nbsp;
	';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output406 = '';

$output406 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
return '
				</th>
			';
};
$arguments407 = array();

$output406 .= '';

$output406 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
$output428 = '';

$output428 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
$output431 = '';

$output431 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$output437 = '';

$output437 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments438 = array();

$output437 .= '';

$output437 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
return '
								</td>
							';
};
$arguments440 = array();
$arguments440['if'] = NULL;

$output437 .= '';

$output437 .= '
						';
return $output437;
};
$arguments432 = array();
$arguments432['then'] = NULL;
$arguments432['else'] = NULL;
$arguments432['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array434 = array();
$array435 = array (
);$array434['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array435);
$array434['1'] = ' == 2';

$expression436 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments432['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression436(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array434)
					),
					$renderingContext
				);
$arguments432['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments432['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								</td>
							';
};

$output431 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output431 .= '
					';
return $output431;
};
$arguments429 = array();

$output428 .= '';

$output428 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
return '
						</td>
					';
};
$arguments442 = array();
$arguments442['if'] = NULL;

$output428 .= '';

$output428 .= '
				';
return $output428;
};
$arguments412 = array();
$arguments412['then'] = NULL;
$arguments412['else'] = NULL;
$arguments412['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array425 = array();
$array426 = array (
);$array425['0'] = $renderingContext->getVariableProvider()->getByPath('columnIterator.isFirst', $array426);

$expression427 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments412['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression427(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array425)
					),
					$renderingContext
				);
$arguments412['__thenClosure'] = function() use ($renderingContext, $self) {
$output414 = '';

$output414 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments421 = array();

$output420 .= '';

$output420 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
return '
								</td>
							';
};
$arguments423 = array();
$arguments423['if'] = NULL;

$output420 .= '';

$output420 .= '
						';
return $output420;
};
$arguments415 = array();
$arguments415['then'] = NULL;
$arguments415['else'] = NULL;
$arguments415['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array417 = array();
$array418 = array (
);$array417['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array418);
$array417['1'] = ' == 2';

$expression419 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments415['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression419(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array417)
					),
					$renderingContext
				);
$arguments415['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments415['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								</td>
							';
};

$output414 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output414 .= '
					';
return $output414;
};
$arguments412['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						</td>
					';
};

$output411 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output411 .= '
			';
return $output411;
};
$arguments409 = array();
$arguments409['if'] = NULL;

$output406 .= '';

$output406 .= '
		';
return $output406;
};
$arguments368 = array();
$arguments368['then'] = NULL;
$arguments368['else'] = NULL;
$arguments368['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array403 = array();
$array404 = array (
);$array403['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array404);
$array403['1'] = ' == 1';

$expression405 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments368['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression405(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array403)
					),
					$renderingContext
				);
$arguments368['__thenClosure'] = function() use ($renderingContext, $self) {
return '
				</th>
			';
};
$arguments368['__elseClosures'][] = function() use ($renderingContext, $self) {
$output370 = '';

$output370 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$output390 = '';

$output390 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
$output396 = '';

$output396 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments397 = array();

$output396 .= '';

$output396 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
return '
								</td>
							';
};
$arguments399 = array();
$arguments399['if'] = NULL;

$output396 .= '';

$output396 .= '
						';
return $output396;
};
$arguments391 = array();
$arguments391['then'] = NULL;
$arguments391['else'] = NULL;
$arguments391['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array393 = array();
$array394 = array (
);$array393['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array394);
$array393['1'] = ' == 2';

$expression395 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments391['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression395(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array393)
					),
					$renderingContext
				);
$arguments391['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments391['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								</td>
							';
};

$output390 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext);

$output390 .= '
					';
return $output390;
};
$arguments388 = array();

$output387 .= '';

$output387 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return '
						</td>
					';
};
$arguments401 = array();
$arguments401['if'] = NULL;

$output387 .= '';

$output387 .= '
				';
return $output387;
};
$arguments371 = array();
$arguments371['then'] = NULL;
$arguments371['else'] = NULL;
$arguments371['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array384 = array();
$array385 = array (
);$array384['0'] = $renderingContext->getVariableProvider()->getByPath('columnIterator.isFirst', $array385);

$expression386 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments371['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression386(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array384)
					),
					$renderingContext
				);
$arguments371['__thenClosure'] = function() use ($renderingContext, $self) {
$output373 = '';

$output373 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
$output379 = '';

$output379 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments380 = array();

$output379 .= '';

$output379 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return '
								</td>
							';
};
$arguments382 = array();
$arguments382['if'] = NULL;

$output379 .= '';

$output379 .= '
						';
return $output379;
};
$arguments374 = array();
$arguments374['then'] = NULL;
$arguments374['else'] = NULL;
$arguments374['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array376 = array();
$array377 = array (
);$array376['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array377);
$array376['1'] = ' == 2';

$expression378 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments374['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression378(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array376)
					),
					$renderingContext
				);
$arguments374['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments374['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								</td>
							';
};

$output373 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext);

$output373 .= '
					';
return $output373;
};
$arguments371['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						</td>
					';
};

$output370 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output370 .= '
			';
return $output370;
};

$output367 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output367 .= '
	';
return $output367;
};
$arguments365 = array();

$output364 .= '';

$output364 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$output463 = '';

$output463 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
$output466 = '';

$output466 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$output472 = '';

$output472 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
return '
						</th>
					';
};
$arguments473 = array();

$output472 .= '';

$output472 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
return '
						</td>
					';
};
$arguments475 = array();
$arguments475['if'] = NULL;

$output472 .= '';

$output472 .= '
				';
return $output472;
};
$arguments467 = array();
$arguments467['then'] = NULL;
$arguments467['else'] = NULL;
$arguments467['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array469 = array();
$array470 = array (
);$array469['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array470);
$array469['1'] = ' == 2';

$expression471 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments467['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression471(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array469)
					),
					$renderingContext
				);
$arguments467['__thenClosure'] = function() use ($renderingContext, $self) {
return '
						</th>
					';
};
$arguments467['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						</td>
					';
};

$output466 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments467, $renderChildrenClosure468, $renderingContext);

$output466 .= '
			';
return $output466;
};
$arguments464 = array();

$output463 .= '';

$output463 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
return '
				</td>
			';
};
$arguments477 = array();
$arguments477['if'] = NULL;

$output463 .= '';

$output463 .= '
		';
return $output463;
};
$arguments447 = array();
$arguments447['then'] = NULL;
$arguments447['else'] = NULL;
$arguments447['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array460 = array();
$array461 = array (
);$array460['0'] = $renderingContext->getVariableProvider()->getByPath('columnIterator.isFirst', $array461);

$expression462 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments447['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression462(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array460)
					),
					$renderingContext
				);
$arguments447['__thenClosure'] = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return '
						</th>
					';
};
$arguments456 = array();

$output455 .= '';

$output455 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
return '
						</td>
					';
};
$arguments458 = array();
$arguments458['if'] = NULL;

$output455 .= '';

$output455 .= '
				';
return $output455;
};
$arguments450 = array();
$arguments450['then'] = NULL;
$arguments450['else'] = NULL;
$arguments450['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array452 = array();
$array453 = array (
);$array452['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array453);
$array452['1'] = ' == 2';

$expression454 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments450['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression454(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array452)
					),
					$renderingContext
				);
$arguments450['__thenClosure'] = function() use ($renderingContext, $self) {
return '
						</th>
					';
};
$arguments450['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						</td>
					';
};

$output449 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
			';
return $output449;
};
$arguments447['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
				</td>
			';
};

$output446 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output446 .= '
	';
return $output446;
};
$arguments444 = array();
$arguments444['if'] = NULL;

$output364 .= '';

$output364 .= '
';
return $output364;
};
$arguments249 = array();
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$arguments249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array361 = array();
$array362 = array (
);$array361['0'] = $renderingContext->getVariableProvider()->getByPath('rowIterator.isFirst', $array362);

$expression363 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression363(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array361)
					),
					$renderingContext
				);
$arguments249['__thenClosure'] = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return '
				</th>
			';
};
$arguments291 = array();

$output290 .= '';

$output290 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$output321 = '';

$output321 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments322 = array();

$output321 .= '';

$output321 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return '
								</td>
							';
};
$arguments324 = array();
$arguments324['if'] = NULL;

$output321 .= '';

$output321 .= '
						';
return $output321;
};
$arguments316 = array();
$arguments316['then'] = NULL;
$arguments316['else'] = NULL;
$arguments316['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array318 = array();
$array319 = array (
);$array318['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array319);
$array318['1'] = ' == 2';

$expression320 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments316['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression320(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array318)
					),
					$renderingContext
				);
$arguments316['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments316['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								</td>
							';
};

$output315 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '
					';
return $output315;
};
$arguments313 = array();

$output312 .= '';

$output312 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return '
						</td>
					';
};
$arguments326 = array();
$arguments326['if'] = NULL;

$output312 .= '';

$output312 .= '
				';
return $output312;
};
$arguments296 = array();
$arguments296['then'] = NULL;
$arguments296['else'] = NULL;
$arguments296['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array309 = array();
$array310 = array (
);$array309['0'] = $renderingContext->getVariableProvider()->getByPath('columnIterator.isFirst', $array310);

$expression311 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments296['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression311(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array309)
					),
					$renderingContext
				);
$arguments296['__thenClosure'] = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments305 = array();

$output304 .= '';

$output304 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return '
								</td>
							';
};
$arguments307 = array();
$arguments307['if'] = NULL;

$output304 .= '';

$output304 .= '
						';
return $output304;
};
$arguments299 = array();
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$arguments299['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array302);
$array301['1'] = ' == 2';

$expression303 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments299['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression303(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)
					),
					$renderingContext
				);
$arguments299['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments299['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								</td>
							';
};

$output298 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '
					';
return $output298;
};
$arguments296['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						</td>
					';
};

$output295 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output295 .= '
			';
return $output295;
};
$arguments293 = array();
$arguments293['if'] = NULL;

$output290 .= '';

$output290 .= '
		';
return $output290;
};
$arguments252 = array();
$arguments252['then'] = NULL;
$arguments252['else'] = NULL;
$arguments252['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array287 = array();
$array288 = array (
);$array287['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array288);
$array287['1'] = ' == 1';

$expression289 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments252['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression289(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array287)
					),
					$renderingContext
				);
$arguments252['__thenClosure'] = function() use ($renderingContext, $self) {
return '
				</th>
			';
};
$arguments252['__elseClosures'][] = function() use ($renderingContext, $self) {
$output254 = '';

$output254 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments281 = array();

$output280 .= '';

$output280 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return '
								</td>
							';
};
$arguments283 = array();
$arguments283['if'] = NULL;

$output280 .= '';

$output280 .= '
						';
return $output280;
};
$arguments275 = array();
$arguments275['then'] = NULL;
$arguments275['else'] = NULL;
$arguments275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array278);
$array277['1'] = ' == 2';

$expression279 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments275['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments275['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								</td>
							';
};

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output274 .= '
					';
return $output274;
};
$arguments272 = array();

$output271 .= '';

$output271 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return '
						</td>
					';
};
$arguments285 = array();
$arguments285['if'] = NULL;

$output271 .= '';

$output271 .= '
				';
return $output271;
};
$arguments255 = array();
$arguments255['then'] = NULL;
$arguments255['else'] = NULL;
$arguments255['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array268 = array();
$array269 = array (
);$array268['0'] = $renderingContext->getVariableProvider()->getByPath('columnIterator.isFirst', $array269);

$expression270 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments255['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression270(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array268)
					),
					$renderingContext
				);
$arguments255['__thenClosure'] = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments264 = array();

$output263 .= '';

$output263 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return '
								</td>
							';
};
$arguments266 = array();
$arguments266['if'] = NULL;

$output263 .= '';

$output263 .= '
						';
return $output263;
};
$arguments258 = array();
$arguments258['then'] = NULL;
$arguments258['else'] = NULL;
$arguments258['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array261);
$array260['1'] = ' == 2';

$expression262 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments258['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments258['__thenClosure'] = function() use ($renderingContext, $self) {
return '
								</th>
							';
};
$arguments258['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								</td>
							';
};

$output257 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output257 .= '
					';
return $output257;
};
$arguments255['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						</td>
					';
};

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output254 .= '
			';
return $output254;
};

$output251 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
	';
return $output251;
};
$arguments249['__elseClosures'][] = function() use ($renderingContext, $self) {
$output328 = '';

$output328 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$output354 = '';

$output354 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return '
						</th>
					';
};
$arguments355 = array();

$output354 .= '';

$output354 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
return '
						</td>
					';
};
$arguments357 = array();
$arguments357['if'] = NULL;

$output354 .= '';

$output354 .= '
				';
return $output354;
};
$arguments349 = array();
$arguments349['then'] = NULL;
$arguments349['else'] = NULL;
$arguments349['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array351 = array();
$array352 = array (
);$array351['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array352);
$array351['1'] = ' == 2';

$expression353 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments349['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression353(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array351)
					),
					$renderingContext
				);
$arguments349['__thenClosure'] = function() use ($renderingContext, $self) {
return '
						</th>
					';
};
$arguments349['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						</td>
					';
};

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '
			';
return $output348;
};
$arguments346 = array();

$output345 .= '';

$output345 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
return '
				</td>
			';
};
$arguments359 = array();
$arguments359['if'] = NULL;

$output345 .= '';

$output345 .= '
		';
return $output345;
};
$arguments329 = array();
$arguments329['then'] = NULL;
$arguments329['else'] = NULL;
$arguments329['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array342 = array();
$array343 = array (
);$array342['0'] = $renderingContext->getVariableProvider()->getByPath('columnIterator.isFirst', $array343);

$expression344 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments329['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression344(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array342)
					),
					$renderingContext
				);
$arguments329['__thenClosure'] = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return '
						</th>
					';
};
$arguments338 = array();

$output337 .= '';

$output337 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
return '
						</td>
					';
};
$arguments340 = array();
$arguments340['if'] = NULL;

$output337 .= '';

$output337 .= '
				';
return $output337;
};
$arguments332 = array();
$arguments332['then'] = NULL;
$arguments332['else'] = NULL;
$arguments332['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array334 = array();
$array335 = array (
);$array334['0'] = $renderingContext->getVariableProvider()->getByPath('data.table_header_position', $array335);
$array334['1'] = ' == 2';

$expression336 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments332['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array334)
					),
					$renderingContext
				);
$arguments332['__thenClosure'] = function() use ($renderingContext, $self) {
return '
						</th>
					';
};
$arguments332['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						</td>
					';
};

$output331 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output331 .= '
			';
return $output331;
};
$arguments329['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
				</td>
			';
};

$output328 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output328 .= '
	';
return $output328;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#