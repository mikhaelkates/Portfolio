<?php
class CoverLetter {
	 $myName = "Mikhael Kates";
	 $myPhone = "405-780-0538";
	 $myEmail = "mikhaelkates@yahoo.com";
	 $br = "<br />";

	private $languageSkills = ["HTML5", "CSS3", "Javascript", "JQuery", "PHP", "MySQL", "C#"];
	private $techinicalSkills = ["Sublime Text", "Visual Studio", "MySQL Workbench", "Adobe Creative"];
	private $hobbies = ["In-Home Code-a-thons", "Tabletop DMing", "Magic: The Gathering"];
	
	public function greeting(){
		echo "Hello, Interworks!";
		echo $br;
		echo "I'm going to show you why you should hire me!";
		echo $br.$br;
	}
	public function listMySklls() {
		echo " I am well versed in many languages, including, but not limited to:";
		echo $br;
		foreach($languageSkills as $skill){
			echo " - ".$skill;
			echo $br;
		}
		echo $br.$br;
	}
	public function showMyExperience(){
    	echo "In addition, I am acquainted with several software suites, such as:";
    	echo $br;
		foreach($techinicalSkills as $skill){
			echo " - ".$skill;
			echo $br;
		}
		echo $br.$br;
	}
	public function contactMe(){
		echo "I have ".$yearsExperience." of experience as a developer, and am looking forward to adding several more with Interworks";
		echo $br;
		echo "You may contact me either by phone, at:".$myPhone."; or by email, at:".$myEmail.".";
		echo $br;
		echo "I look forward to hearing back from you soon.";
	}
	public function buildCoverLetter(){
		greeting();
		listMySklls();
		showMyExperience();
		contactMe();
	}
}

?>