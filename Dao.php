<?php class	Dao	{	
	private	$host	=	"us-cdbr-iron-east-01.cleardb.net";	
	private	$db	=	"heroku_837703171d51974";	
	private	$user	=	"bd6f823249df29";	
	private	$pass	=	"8537aaf0";	
	
	public	function	getConnection	()	
	{			return					
	new	PDO("mysql:host={$this->host};
	dbname={$this->db}"	
	}	
	... 
	}
