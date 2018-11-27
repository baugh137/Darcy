<?php class	Dao	{	
	private	$host = "us-cdbr-iron-east-01.cleardb.net";	
	private	$db	= "heroku_7cdbe1bf81924d3";	
	private	$user =	"b26424bae95fee";	
	private	$pass =	"e5cc47ad";	
	
	
	
	public	function getConnection() {			
	return new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
	}
	
	
	/*public function saveLogin($username, $userpassword){
		$conn=$this->getConnection();
		$q = "INSERT INTO user (username, userpassword) VALUES (:username, :userpassword)";
		$q=$conn->prepare($saveQuery);
		$q->bindParam(":username", $username);
		$q->bindParam(":userpassword", $userpassword);
		$q->execute();
	
	}*/
	
	public function addUser($username, $userpassword){
		$conn=$this->getConnection();
		$saveQuery = $conn->prepare(
			"INSERT INTO user (username, userpassword) VALUES (:username, :userpassword)");
		$saveQuery->bindParam(":username", $username);
		$saveQuery->bindParam(":userpassword", $userpassword);
		$saveQuery->execute();
  }
	
	//get username
	public function getUsername($username){
		$conn=$this->getConnection();
		$q=$conn->prepare("SELECT username FROM user WHERE username=:username");
		$q->bindParam(":username", $username);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
	}

	//validation
	public function getUserPassword($username, $userpassword){
		$conn=$this->getConnection();
		$q=$conn->prepare("SELECT username FROM username WHERE username=:username and userpassword=:userpassword");
		$q->bindParam(":username", $username);
		$q->bindParam(":userpassword", $userpassword);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
	}
	
	//purchasing dog
	public function getUserpurchase($dog, $cost){
		$conn=$this->getConnection();
		$q=$conn->prepare("SELECT userpurchasedog, userpurchasecost FROM userpurchase WHERE userpurchasedog=:dog and userpurchasecost=:cost");
		$q->bindParam(":userpurchasedog", $dog);
		$q->bindParam(":userpurchasecost", $cost);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
	}

	//use in user account/FAQ - user purchase review
	public function getComments($userName, $comments, $date) {
		$conn=$this->getConnection();
		$q=$conn->prepare("SELECT * FROM comments WHERE username='$userName' and comments='$comments' and commentsdate='$date' and userID='$userid'");
		$q->bindParam (":username", $userName);
		$q->bindParam (":comments", $comments);
		$q->bindParam (":commentsdate", $date);
		$q->bindParam (":userID", $userid);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
	}
	
	  public function saveComment ($userName, $comment) {
    $this->log->LogInfo("Save comment [{$name}] [{$comment}]");
    $conn = $this->getConnection();
    $saveQuery =
        "INSERT INTO comments
        (username, comments)
        VALUES
        (:username, :comments)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":username", $userName);
    $q->bindParam(":comments", $comment);
    $q->execute();
  }
  
  public function deleteComment ($userid) {
    $conn = $this->getConnection();
    $saveQuery = "DELETE FROM comment WHERE userID = :userID";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":userID", $userid);
    $q->execute();
  }

	

		
}
?>