<?php
defined('_JEXEC') or die('Restricted access');
?>
<ul>
<?php
//функция foreach для вывода полученных данных
foreach ($list as $item) {
    echo '<li>'.$item->title.'</li>';
}
?>
</ul>
