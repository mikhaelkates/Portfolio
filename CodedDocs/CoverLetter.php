<?php

$myName = "Mikhael Kates";
$myPhone = "405-780-0538";
$myEmail = "mikhaelkates@yahoo.com";
$br = "<br />";
$languageSkills = ["HTML5", "CSS3", "Javascript", "Javascript", "PHP", "MySQL", "C#"];
$techinicalSkills = ["Sublime Text", "Visual Studio", "MySQL Workbench", "Adobe Creative"];
$codeExperience = "1 year";
$hobbies = ["In-Home Code-a-thons", "Star Wars", "Tabletop Games", "RPG DMing", "Magic: The Gathering"];
	
function greeting($br){
	echo "Hello, Interworks!";
	echo $br;
	echo "I'm going to show you why you should hire me!";
	echo $br.$br;
}
function showIFit($br, $hobbies){
	echo "By this point, I hope you've looked through my resume. If not, I'll give you a few minutes to peruse it.";
	echo $br.$br;
	echo "All done? Good? Good! Now, I'd like to explain a few of the reasons why I'm your ideal candidate.";
	echo $br.$br;	
	echo "Starting with my ".$hobbies[0].". It's a small gathering, but I get a couple friends together once or twice a month and we code for a few hours at a time.";
		
	echo "We mostly focus on Javascript and Front-End technologies, but we've started braching off into Back-End, and even desktop languages like C#";
	echo $br.$br;
	echo "I also often host ".$hobbies[2]." at my house on weekends. Regardless of my workplace, I always seem to find several people who enjoy playing board and card games, and my collection is extensive.";
		
	echo $br.$br;
}
function contactMe($codeExperience, $br, $myPhone, $myEmail){
	echo "At the present time, I have ".$codeExperience." of experience as a developer, and am looking forward to adding several more with Interworks";
	echo $br;
	echo "You may contact me either by phone, at:".$myPhone."; Or by email, at:".$myEmail.".";
	echo $br;
	echo "I look forward to hearing back from you soon!";
}
function buildCoverLetter($codeExperience, $br, $myPhone, $myEmail, $hobbies){
	greeting($br);
	showIFit($br, $hobbies);
	contactMe($codeExperience, $br, $myPhone, $myEmail);
}
buildCoverLetter($codeExperience, $br, $myPhone, $myEmail, $hobbies);

?>