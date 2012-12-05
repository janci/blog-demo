<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.02653200 1354741431";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"/home/weby/blog/sandbox/app/templates/Clanky/default.latte";i:2;i:1354741428;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: /home/weby/blog/sandbox/app/templates/Clanky/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '5fa9culone')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbb398d1c4c8_content')) { function _lbb398d1c4c8_content($_l, $_args) { extract($_args)
;$iterations = 0; foreach ($articles as $article): $author = $article->author ?>
    <?php echo Nette\Templating\Helpers::escapeHtml($article->title, ENT_NOQUOTES) ?>
 <?php if ($author): ?>[<?php echo Nette\Templating\Helpers::escapeHtml($author->name, ENT_NOQUOTES) ?>
]<?php endif ?> <a href="<?php echo htmlSpecialChars($_control->link("updateArticle!", array('id'=>$article->id))) ?>">Aktualizovať</a><br />
<?php $iterations++; endforeach ;
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


<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ?>
                