<?php  
// ��� ������������, ����� �� ���� ������� �������.
defined('_JEXEC') or die('Restricted access');
//������� �����
class ModMytitleHelper
{
//����������� ������� getList ��� �������� ������� � ��
    public static function getList(&$params)
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
	//������ � �� (������� ���������)
        $query->select('title');
	// ��������� �������� ������� (content)
        $query->from('#__content');
	//������ �������(���������=1, �.�. �������������� ��������)
        $query->where('state = 1');
	//�������� ��������� �������
        $query->order('RAND()');
        $db->setQuery($query, 0, 3); //�� 0 �� 3-� �������
         //����������, ���������� � ���������� ������� ������ � ���������� $list
        $list = $db->loadObjectList();
        return $list;
    }
}
