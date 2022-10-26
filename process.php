<?php 

	$check = $_POST['check'];

		$data1 = $_POST["mydata1"];
		$data2 = $_POST["mydata2"];
		
		if($check=="add"){
			$result = $data1+$data2;
			 echo $result
			;
		}

		if($check=="subs"){
			$result = $data1-$data2;
			echo $result;
		}
		if($check=="mul"){
			$result = $data1*$data2;
			echo $result;
		}
		if($check=="div"){
			$result = $data1/$data2;
			echo $result;
		}
		
		
 ?>