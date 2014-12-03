<?php


class M_Article{
	
	private static $instance; //������ �� ��������� ������
	private  $m_msql; //������� ��
	
	public function __construct(){
		$this->m_msql = new M_MSQL();
	}

	// ��������� ������������� ���������� (��������)
	public static function Instance()
	{
		if(self::$instance==null)
			self::$instance = new M_Article();
			
		return self::$instance;
	}

	//������ ���� ������
	public function all()
	{
		// ������.
		$query = "SELECT * FROM articles ORDER BY id_article DESC";
		return $this->m_msql->Select($query);
	}

	
	// ���������� ������
	function get($id_article)
	{
		//������
		$t = "SELECT * 
			  FROM articles 
			  WHERE id_article = '%d'";
			  
		$query = sprintf($t, $id_article);
		$result = $this->m_msql->Select($query);
		return $result[0];
	}

	//
	// �������� ������
	//
	function create_new($title, $content)
	{
		// ����������.
		$title = trim($title);
		$content = trim($content);

		// ��������.
		if ($title == '')
			return false;
		
		// ������.
		$obj = array();
		$obj['title'] = $title;
		$obj['content'] = $content;
		
		$this->m_msql->Insert('articles', $obj);
		return true;
	}

	//
	// �������� ������
	//
	function edit($id_article, $title, $content)
	{
		// ����������.
		$title = trim($title);
		$content = trim($content);

		// ��������.
		if ($title == '')
			return false;
		
		// ������.
		$obj = array();
		$obj['title'] = $title;
		$obj['content'] = $content;
		
		$t = "id_article = '%d'";		
		$where = sprintf($t, $id_article);		
		$this->m_msql->Update('articles', $obj, $where);
		return true;
	}

	//
	// ������� ������
	//
	function delete($id_article)
	{
		// ������.
		$t = "id_article = '%d'";		
		$where = sprintf($t, $id_article);		
		$this->m_msql->Delete('articles', $where);
		return true;
	}

	//
	// �������� �������� ������
	//
	function intro($article)
	{
		$arr = $this->get($article['id_article']);
		$arr['content'] = substr($arr['content'],0,400);
		return $arr;
	}

	}
