<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.79896300 1353528935";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"/home/weby/blog/sandbox/app/templates/Clanky/default.latte";i:2;i:1353528932;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: /home/weby/blog/sandbox/app/templates/Clanky/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '41ijjedf34')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
$iterations = 0; foreach ($articles as $article): ?>
    <?php echo Nette\Templating\Helpers::escapeHtml($article->title, ENT_NOQUOTES) ?>
 <?php if (isset($article->author)): ?>[<?php echo Nette\Templating\Helpers::escapeHtml($article->author->name, ENT_NOQUOTES) ?>
]<?php endif ?> <a href="<?php echo htmlSpecialChars($_control->link("updateArticle!", array('id'=>$article->id))) ?>">Aktualizovať</a><br />
<?php $iterations++; endforeach ?>

<?php for ($i=0; $i<10; $i++): ?><a href="<?php echo htmlSpecialChars($_control->link("this", array('page'=>$i))) ?>
">[<?php echo Nette\Templating\Helpers::escapeHtml($i, ENT_NOQUOTES) ?>]</a> <?php endfor ?>

<a href="<?php echo htmlSpecialChars($_control->link("addArticle!")) ?>">Pridaj nový článok</a>