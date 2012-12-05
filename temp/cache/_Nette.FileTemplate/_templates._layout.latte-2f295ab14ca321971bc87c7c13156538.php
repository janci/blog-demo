<?php //netteCache[01]000373a:2:{s:4:"time";s:21:"0.64314300 1354735417";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:51:"/home/weby/blog/sandbox/app/templates/@layout.latte";i:2;i:1354735415;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: /home/weby/blog/sandbox/app/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'yz7mj9id16')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb29ff60ba2d_title')) { function _lb29ff60ba2d_title($_l, $_args) { extract($_args)
?>Nette Application Skeleton<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb380c60dd86_head')) { function _lb380c60dd86_head($_l, $_args) { extract($_args)
;
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
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="Nette Framework web application skeleton" />
<?php if (isset($robots)): ?>	<meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>

	<title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->upper($template->striptags(ob_get_clean()))  ?></title>

	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/screen.css" />
	<link rel="stylesheet" media="print" href="<?php echo htmlSpecialChars($basePath) ?>/css/print.css" />
	<link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />

	<script src="http://code.jquery.com/jquery-1.8.1.min.js"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/netteForms.js"></script>
	<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

</head>

<body>
	<script> document.body.className+=' js' </script>

<?php $iterations = 0; foreach ($flashes as $flash): ?>	<div class="flash <?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
    <div id="wrapper">
        <div id="bannerup" class="banner"></div>
        <div id="menuup" class="menu">
            <ul id="menuin">
                <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Úvod</a></li>
                <li><a href="<?php echo htmlSpecialChars($_control->link("Clanky:default")) ?>">Blog</a></li>
                <li><a href="<?php echo htmlSpecialChars($_control->link("Kontakt:default")) ?>">Kontakt</a></li>
            </ul>
        </div>
        <div class="clear"></div>

<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
	</div>
</body>
</html>
