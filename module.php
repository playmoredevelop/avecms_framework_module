<?php

if(!defined('BASE_DIR')) exit;

if (defined('ACP'))
{
	$modul =
	[
		'ModuleName'			=> "Framework",
		'ModuleSysName'			=> "framework",
		'ModuleVersion'			=> "1.0",
		'ModuleDescription'		=> "Портирует весь модульный функционал фреймворка в админку, штатным способом.",
		'ModuleAutor'			=> "Playmore",
		'ModuleCopyright'		=> "&copy; Playmore 2017",
		'ModuleStatus'			=> 1,
		'ModuleIsFunction'		=> 0,
		'ModuleTemplate'		=> 0,
		'ModuleAdminEdit'		=> 1,
		'ModuleFunction'		=> 'framework',
		'ModuleTag'				=> null,
		'ModuleTagLink'			=> null,
		'ModuleAveTag'			=> null,
		'ModulePHPTag'			=> null
	];
}

/*
array (
  'do' => 'modules',
  'action' => 'modedit',
  'mod' => 'framework',
  'moduleaction' => '1',
  'cp' => 'i3fdnsaca0p49l1p92hbqafsd6',
) */

$action = snippets()->request->get('moduleaction', '1');
($action === '1') AND $action = 'index';

require 'admin.methods.php';

$result = call_controller('admin.methods', $action);

debug($result);
