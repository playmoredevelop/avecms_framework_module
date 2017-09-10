<?php 
	$url = [
		'allow' => ['do','action','mod','moduleaction','cp']
	];
	$actives = [
		'index' => '',
		'settings' => '',
		'docs' => '',
	];
	foreach($actives as $section => $class){
		if($this->action == $section){
			$actives[$section] = 'activeTab';
		}
	}
?>
<link href="/modules/<?=FW_MODULE_ALIAS?>/assets/styles.css" rel="stylesheet" type="text/css" media="screen">
<div class="fw-header">Фреймворк</div>
<div class="fw-container">
	<ul class="tabs">
		<li class="<?=$actives['index']?>"><a href="<?= snippets()->url->getQueryStringReplace(['moduleaction' => '1'], $url['allow'])?>">Администрирование</a></li>
		<li class="<?=$actives['settings']?>"><a href="<?= snippets()->url->getQueryStringReplace(['moduleaction' => 'settings'], $url['allow'])?>">Настройки</a></li>
		<li class="<?=$actives['docs']?>"><a href="<?= snippets()->url->getQueryStringReplace(['moduleaction' => 'docs'], $url['allow'])?>">Справочник</a></li>
	</ul>
	<div class="tab_container">
		<div class="tab_content" id="<?=$this->action?>">
			<?=$this->test?>
			<?=$this->content?>
		</div>
	</div>
</div>