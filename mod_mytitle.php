<?php
defined('_JEXEC') or die('Restricted access');
// ���������� ���� ���������
require_once dirname(__FILE__).'/helper.php';
// ��������� getList ����� �� ���������
$list = modMyModuleHelper::getList($params);
require JModuleHelper::getLayoutPath('mod_myModule', $params->get('layout', 'default'));
