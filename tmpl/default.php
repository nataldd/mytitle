<?php
defined('_JEXEC') or die('Restricted access');
?>
<ul>
<?php
//������� foreach ��� ������ ���������� ������
foreach ($list as $item) {
    echo '<li>'.$item->title.'</li>';
}
?>
</ul>
