<?php class	Dao	{	
	private	$host = "us-cdbr-iron-east-01.cleardb.net";	
	private	$db	= "heroku_7cdbe1bf81924d3";	
	private	$user =	"b26424bae95fee";	
	private	$pass =	"e5cc47ad";	
	private $log;
	
	
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
		$q=$conn->prepare("SELECT username FROM user WHERE username=:username and userpassword=:userpassword");
		$q->bindParam(":username", $username);
		$q->bindParam(":userpassword", $userpassword);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
	}
	
	
	public function addUserPurchase($username, $dog, $cost){
		$conn=$this->getConnection();
		$saveQuery = $conn->prepare(
			"INSERT INTO UserPurchase (username, dog, cost) VALUES (:username, :dog, :cost)");
		$saveQuery->bindParam(":username", $username);
		$saveQuery->bindParam(":dog", $dog);
		$saveQuery->bindParam(":cost",$cost);
		$saveQuery->execute();
  }
	
	//purchasing dog
	public function getUserPurchase(){
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
	public function getComments($username, $userComment, $commentsDate) {
		$conn=$this->getConnection();
		$q=$conn->prepare("SELECT * FROM comments WHERE username=:username and userComment=:userComment and commentsDate=:commentDate and userID=:userID");
		$q->bindParam (":username", $username);
		$q->bindParam (":userComment", $userComment);
		$q->bindParam (":commentsDate", $commentsDate);
		$q->bindParam (":userID", $userID);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
	}

/*	
	public function getComments () {
    $this->log->LogDebug("Getting comments");
    $conn = $this->getConnection();
    return $conn->query("select userID, username, userComment, commentsDate from comments order by commentsDate desc", PDO::FETCH_ASSOC);
  }
*/	
	  public function saveComment ($username, $userComment) {
    $this->log->LogInfo("Save comments [{$username}] [{$userComment}]");
    $conn = $this->getConnection();
    $saveQuery =
        "INSERT INTO comments
        (username, userComment)
        VALUES
        (:username, :userComment)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":username", $username);
    $q->bindParam(":userComment", $userComment);
    $q->execute();
  }
  
  public function deleteComment ($userID) {
    $conn = $this->getConnection();
    $saveQuery = "DELETE FROM comments WHERE userID = :userID";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":userID", $userID);
    $q->execute();
  }

	

		
}
?>