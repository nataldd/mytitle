<?php  
// Для безопасности, чтобы не было прямого доступа.
defined('_JEXEC') or die('Restricted access');
//Создаем класс
class ModMytitleHelper
{
//прописываем функцию getList для создания запроса к БД
    public static function getList(&$params)
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
	//запрос к БД (выбрать заголовки)
        $query->select('title');
	// указываем название таблицы (content)
        $query->from('#__content');
	//ставим условие(состояние=1, т.е. опубликованные матералы)
        $query->where('state = 1');
	//выбираем случайным образом
        $query->order('RAND()');
        $db->setQuery($query, 0, 3); //от 0 до 3-х записей
         //записываем, полученные в результате запроса данные в переменную $list
        $list = $db->loadObjectList();
        return $list;
    }
}
