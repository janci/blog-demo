<?php //netteCache[01]000383a:2:{s:4:"time";s:21:"0.18434300 1353524445";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:61:"/home/weby/blog/sandbox/app/controls/GoogleMap/template.latte";i:2;i:1353524439;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: /home/weby/blog/sandbox/app/controls/GoogleMap/template.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'a9q2u8599b')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if (isset($title)): ?><h2><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></h2>
<?php endif ?>
Toto je latte subor