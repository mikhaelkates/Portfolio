<?php

$myName = "Mikhael Kates";
$myPhone = "405-780-0538";
$myEmail = "mikhaelkates@yahoo.com";
$br = "<br />";
$languageSkills = ["HTML5", "CSS3", "Javascript", "JQuery", "PHP", "MySQL", "C#"];
$techinicalSkills = ["Sublime Text", "Visual Studio", "MySQL Workbench", "Adobe Creative"];
$codeExperience = "1 year";
$hobbies = ["Code-a-thons", "Star Wars", "Tabletop Games", "Magic: The Gathering"];
	
function greeting($br){
	echo "Hello, InterWorks!";
	echo $br.$br;
	echo "I'm a dedicated nerd who is looking for the right company to join. I've heard great things about you, 
and I hope you will take the time to get to know me.";
	echo $br;
}
function showIFit($br, $hobbies, $languageSkills){
	
	echo "If my nerd credentials were not already obvious from my cover letter, I hold ".$hobbies[0]." at my house";
	echo $br;
	echo "a few times a month. We mostly focus on ".$languageSkills[2].", ".$languageSkills[4].", and other front end development, but we have been";
	echo $br;
	echo "branching off into other areas such as ".$languageSkills[6].". ";
	echo $br.$br;	
	echo "When I am not working, I enjoy ".$hobbies[2]." with my family and friends. I have an extensive board";
	echo $br;
	echo "game collection, and I am known to be a great (or frightening) DM, depending on how you roll.";
	echo $br.$br;
}
function contactMe($codeExperience, $br, $myPhone, $myEmail, $myName){
	echo "At the present time I have ".$codeExperience." of experience working as a developer, and I hope future years can be gained with you.";
	echo $br.$br;
	echo "I look forward to hearing from you.";
	echo $br.$br;
	echo $myName;
	echo $br;
	echo $myPhone;
	echo $br;
	echo $myEmail;

}
function buildCoverLetter($codeExperience, $br, $myPhone, $myEmail, $hobbies, $myName, $languageSkills){
	greeting($br);
	showIFit($br, $hobbies, $languageSkills);
	contactMe($codeExperience, $br, $myPhone, $myEmail, $myName);
}
buildCoverLetter($codeExperience, $br, $myPhone, $myEmail, $hobbies, $languageSkills, $myName);

?>