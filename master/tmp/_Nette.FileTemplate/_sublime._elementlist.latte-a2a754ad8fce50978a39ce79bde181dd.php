<?php //netteCache[01]000374a:2:{s:4:"time";s:21:"0.31080300 1467792991";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:60:"F:\CMS\pear\data\ApiGen\templates\sublime\@elementlist.latte";i:2;i:1391390098;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: F:\CMS\pear\data\ApiGen\templates\sublime\@elementlist.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '4gsnrquk9u')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block elements
//
if (!function_exists($_l->blocks['elements'][] = '_lb815506c3c6_elements')) { function _lb815506c3c6_elements($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;$iterations = 0; foreach ($elements as $element) { ?><tr>
	<td class="name"><a href="<?php echo htmlSpecialChars($template->safeurl($template->elementUrl($element))) ?>
"<?php if ($_l->tmp = array_filter(array($element->deprecated ? 'deprecated' : NULL, !$element->valid ? 'invalid' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><?php if ($namespace) { echo Nette\Templating\Helpers::escapeHtml($element->shortName, ENT_NOQUOTES) ;} else { echo Nette\Templating\Helpers::escapeHtml($element->name, ENT_NOQUOTES) ;} ?></a></td>
	<td><?php echo $template->shortDescription($element) ?></td>
</tr>
<?php $iterations++; } 
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); } ?>

<?php if ($classes) { ?><table class="summary" id="classes">
<caption>Classes summary</caption>
<?php call_user_func(reset($_l->blocks['elements']), $_l, array('elements' => $classes) + get_defined_vars()) ?>
</table>
<?php } ?>

<?php if ($interfaces) { ?><table class="summary" id="interfaces">
<caption>Interfaces summary</caption>
<?php call_user_func(reset($_l->blocks['elements']), $_l, array('elements' => $interfaces) + get_defined_vars()) ?>
</table>
<?php } ?>

<?php if ($traits) { ?><table class="summary" id="traits">
<caption>Traits summary</caption>
<?php call_user_func(reset($_l->blocks['elements']), $_l, array('elements' => $traits) + get_defined_vars()) ?>
</table>
<?php } ?>

<?php if ($exceptions) { ?><table class="summary" id="exceptions">
<caption>Exceptions summary</caption>
<?php call_user_func(reset($_l->blocks['elements']), $_l, array('elements' => $exceptions) + get_defined_vars()) ?>
</table>
<?php } ?>

<?php if ($constants) { ?><table class="summary" id="constants">
<caption>Constants summary</caption>
<?php call_user_func(reset($_l->blocks['elements']), $_l, array('elements' => $constants) + get_defined_vars()) ?>
</table>
<?php } ?>

<?php if ($functions) { ?><table class="summary" id="functions">
<caption>Functions summary</caption>
<?php call_user_func(reset($_l->blocks['elements']), $_l, array('elements' => $functions) + get_defined_vars()) ?>
</table>
<?php } 