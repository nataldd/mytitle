<?php
defined('_JEXEC') or die('Restricted access');
// Подключаем файл помошника
require_once dirname(__FILE__).'/helper.php';
// Выполняем getList метод из помошника
$list = modMyModuleHelper::getList($params);
require JModuleHelper::getLayoutPath('mod_myModule', $params->get('layout', 'default'));
