<?php
//
// �������� ������ � ��
//
class M_MSQL
{


	public function __construct(){
		// ��������� ����������� � ��.
		$hostname = 'localhost'; 
		$username = 'root'; 
		$password = '';
		$dbName = 'blog2';
		
		// �������� ���������.
		setlocale(LC_ALL, 'ru_RU.CP1251');	
		date_default_timezone_set('Europe/Kiev');
		// ����������� � ��.
		mysql_connect($hostname, $username, $password) or die('No connect with data base'); 
		mysql_query('SET NAMES cp1251');
		mysql_select_db($dbName) or die('No data base');

		// �������� ������.
		session_start();
	}
	//
	// ������� �����
	// $query    	- ������ ����� SQL �������
	// ���������	- ������ ��������� ��������
	//
	public function Select($query)
	{
		$result = mysql_query($query);
		
		if (!$result)
			die(mysql_error());
		
		$n = mysql_num_rows($result);
		$arr = array();
	
		for($i = 0; $i < $n; $i++)
		{
			$row = mysql_fetch_assoc($result);		
			$arr[] = $row;
		}

		return $arr;				
	}
	
	//
	// ������� ������
	// $table 		- ��� �������
	// $object 		- ������������� ������ � ������ ���� "��� ������� - ��������"
	// ���������	- ������������� ����� ������
	//
	public function Insert($table, $object)
	{			
		$columns = array();
		$values = array();
	
		foreach ($object as $key => $value)
		{
			$key = mysql_real_escape_string($key . '');
			$columns[] = $key;
			
			if ($value === null)
			{
				$values[] = 'NULL';
			}
			else
			{
				$value = mysql_real_escape_string($value . '');							
				$values[] = "'$value'";
			}
		}
		
		$columns_s = implode(',', $columns);
		$values_s = implode(',', $values);
			
		$query = "INSERT INTO $table ($columns_s) VALUES ($values_s)";
		$result = mysql_query($query);
								
		if (!$result)
			die(mysql_error());
			
		return mysql_insert_id();
	}
	
	//
	// ��������� �����
	// $table 		- ��� �������
	// $object 		- ������������� ������ � ������ ���� "��� ������� - ��������"
	// $where		- ������� (����� SQL �������)
	// ���������	- ����� ���������� �����
	//	
	public function Update($table, $object, $where)
	{
		$sets = array();
	
		foreach ($object as $key => $value)
		{
			$key = mysql_real_escape_string($key . '');
			
			if ($value === null)
			{
				$sets[] = "$key=NULL";			
			}
			else
			{
				$value = mysql_real_escape_string($value . '');					
				$sets[] = "$key='$value'";			
			}			
		}
		
		$sets_s = implode(',', $sets);			
		$query = "UPDATE $table SET $sets_s WHERE $where";
		$result = mysql_query($query);
		
		if (!$result)
			die(mysql_error());

		return mysql_affected_rows();	
	}
	
	//
	// �������� �����
	// $table 		- ��� �������
	// $where		- ������� (����� SQL �������)	
	// ���������	- ����� ��������� �����
	//		
	public function Delete($table, $where)
	{
		$query = "DELETE FROM $table WHERE $where";		
		$result = mysql_query($query);
						
		if (!$result)
			die(mysql_error());

		return mysql_affected_rows();	
	}
}
