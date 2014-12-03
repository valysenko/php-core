<?php


class M_Article{
	
	private static $instance; //ссылка на экземпляр класса
	private  $m_msql; //драйвер БД
	
	public function __construct(){
		$this->m_msql = new M_MSQL();
	}

	// Получение единственного экземпляра (одиночка)
	public static function Instance()
	{
		if(self::$instance==null)
			self::$instance = new M_Article();
			
		return self::$instance;
	}

	//список всех статей
	public function all()
	{
		// Запрос.
		$query = "SELECT * FROM articles ORDER BY id_article DESC";
		return $this->m_msql->Select($query);
	}

	
	// Конкретная статья
	function get($id_article)
	{
		//запрос
		$t = "SELECT * 
			  FROM articles 
			  WHERE id_article = '%d'";
			  
		$query = sprintf($t, $id_article);
		$result = $this->m_msql->Select($query);
		return $result[0];
	}

	//
	// Добавить статью
	//
	function create_new($title, $content)
	{
		// Подготовка.
		$title = trim($title);
		$content = trim($content);

		// Проверка.
		if ($title == '')
			return false;
		
		// Запрос.
		$obj = array();
		$obj['title'] = $title;
		$obj['content'] = $content;
		
		$this->m_msql->Insert('articles', $obj);
		return true;
	}

	//
	// Изменить статью
	//
	function edit($id_article, $title, $content)
	{
		// Подготовка.
		$title = trim($title);
		$content = trim($content);

		// Проверка.
		if ($title == '')
			return false;
		
		// Запрос.
		$obj = array();
		$obj['title'] = $title;
		$obj['content'] = $content;
		
		$t = "id_article = '%d'";		
		$where = sprintf($t, $id_article);		
		$this->m_msql->Update('articles', $obj, $where);
		return true;
	}

	//
	// Удалить статью
	//
	function delete($id_article)
	{
		// Запрос.
		$t = "id_article = '%d'";		
		$where = sprintf($t, $id_article);		
		$this->m_msql->Delete('articles', $where);
		return true;
	}

	//
	// Короткое описание статьи
	//
	function intro($article)
	{
		$arr = $this->get($article['id_article']);
		$arr['content'] = substr($arr['content'],0,400);
		return $arr;
	}

	}
