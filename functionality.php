<?php
$output1 = "";
$output2 = "";
$semesterClasses = array();
$classes = array_fill(0, 8, $semesterClasses);

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$semester = isset($_POST["semester"]) ? $_POST["semester"] : "";
	$class = isset($_POST["classes"]) ? $_POST["classes"] : "";
}

if(isset($_POST["add"])){
	if(empty($_POST["classes"])){
			$output2 = "Select the Class!";
		}
	else{
		if($semester == "Semester1"){
			array_push($classes[0], $class);
			$output1 = "";
		}
		else if($semester == "Semester2"){
			array_push($classes[1], $class);
			$output1 = "";
		}
		else if($semester == "Semester3"){
			array_push($classes[2], $class);
			$output1 = "";
		}
		else if($semester == "Semester4"){
			array_push($classes[3], $class);
			$output1 = "";
		}
		else if($semester == "Semester5"){
			array_push($classes[4], $class);
			$output1 = "";
		}
		else if($semester == "Semester6"){
			array_push($classes[5], $class);
			$output1 = "";
		}
		else if($semester == "Semester7"){
			array_push($classes[6], $class);
			$output1 = "";
		}
		else if($semester == "Semester8"){
			array_push($classes[7], $class);
			$output1 = "";
		}
		else {
			$output1 = "Select the Semester!";
		}
	}
}
?>