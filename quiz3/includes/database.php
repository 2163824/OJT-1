<?php
class database{
	public $host="localhost:3308";
	public $username="root";
	public $pass="root";
	public $db_name="quiz";
	public $conn;
	public $data;
	public $subject;
	public $question;
	public $admindata;
	public $showquiz;
	public $feeds;
	
	public function __construct()
	{
		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if($this->conn->connect_errno){
			die ("database connection failed".$this->conn->connect_errno);
		}
		
	}
	
	public function url($url){
		header("location:".$url);
	}
	
	public function loginsystem($data){
		$this->conn->query($data);
		return true;
	}
	
	public function feedback($feeds){
		$this->conn->query($feeds);
		return true;
	}
	
	public function user_profile($username){
		$query=$this->conn->query("Select * from loginsystem where username='$username'");
		$row=$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows > 0){
			$this->data[]=$row;
		}
		return $this->data;
	}
	
	public function admin($admindata){
		$this->conn->query($admindata);
		return true;
	}
	
	public function admin_profile($facultyID){
		$query=$this->conn->query("Select * from admin where facultyID='$facultyID'");
		$row=$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows > 0){
			$this->admindata[]=$row;
		}
		return $this->admindata;
	}
	
	public function subject_show(){
		$query=$this->conn->query("Select * from subject");
		while($row=$query->fetch_array(MYSQLI_ASSOC)){
			$this->subject[]=$row;
		}
		return $this->subject;
	}
	
	public function question($question){
		//echo $question;
		$query=$this->conn->query("Select * from questions where subject_id = '$question'
		ORDER BY
		rand() ");
		$resultcheck = mysqli_num_rows($query);
		
		if (!$resultcheck > 0){
				header("location:home.php");
		}else{
			while($row=$query->fetch_array(MYSQLI_ASSOC)){
				$this->question[]=$row;
			}
			return $this->question;
		}
	}
	
	public function answer($data){
		$ans=implode("",$data);
		$right=0;
		$wrong=0;
		$no_answer=0;
		$query=$this->conn->query("Select * from questions where subject_id = '".$_SESSION['subject']."'");
		while($qust=$query->fetch_array(MYSQLI_ASSOC)){
			if ($qust['ans']==$_POST[$qust['question_id']]){
				$right++;
			}elseif($_POST[$qust['question_id']]=="no_attempt"){
				$no_answer++;
			}else{
				$wrong++;
			}
		}
		$array=array();
		$array['right']=$right;
		$array['wrong']=$wrong;
		$array['no_answer']=$no_answer;
		return $array;
	}
	
	public function show_quiz(){
		$query=$this->conn->query("Select * from subject");
		while($row=$query->fetch_array(MYSQLI_ASSOC)){
			$this->show_quiz[]=$row;
		}
		return $this->show_quiz;
	}
	
	public function new_subject(){
		$query=$this->conn->query("Select * from subject ORDER BY 1 DESC LIMIT 1");
		while($row=$query->fetch_array(MYSQLI_ASSOC)){
			$this->new_subject[]=$row;
		}
		return $this->new_subject;
	}
	
	public function show_feed(){
		$query=$this->conn->query("Select * from feedback ORDER BY 5 DESC");
		while($row=$query->fetch_array(MYSQLI_ASSOC)){
			$this->show_feed[]=$row;
		}
		return $this->show_feed;
	}
	
	
	
	public function add_quiz($rec){
		$a=$this->conn->query($rec);
		return true;
	}
	
	public function remove(){
		$query=$this->conn->query("DELETE FROM subject where subject_id = $submit");
		return true;
	}
	
	public function addsubject($data){
		$this->conn->query($data);
		return true;
	}
		  
}


