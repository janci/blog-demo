<?php //netteCache[01]000381a:2:{s:4:"time";s:21:"0.96537300 1354738072";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"/home/weby/blog/sandbox/app/templates/Kontakt/default.latte";i:2;i:1354738070;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: /home/weby/blog/sandbox/app/templates/Kontakt/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'tadnl5oy0u')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lba7c3b57f99_content')) { function _lba7c3b57f99_content($_l, $_args) { extract($_args)
?><h1>Kontakt</h1>
<div class="breadcrumb">
    <a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Úvod</a> &raquo; <a class="current">Kontakt</a>
</div>

<div class="mycontact">
    <h2>Adresa</h2>
    <div class="data">
        JohnDoe <br />
        Bočková 33 <br />
        Košice <br />
        040 01 <br />
    </div>
    <div class="contact-1">
<?php $_ctrl = $_control->getComponent("contactForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
    </div>
</div>

<div class="gmap-1">
<?php $_ctrl = $_control->getComponent("gMap"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
</div>


<br clear="all" /><?php
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 