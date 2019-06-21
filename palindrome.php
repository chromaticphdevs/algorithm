<?php
	
	//sample abcba = 4
	function hasPalindrome($str){
		//store the last chracter index of looped str 
		$last_character_index = 0;
		//storage of found palindrome
		$palindromeList = [];
		//get the length of the string 
		for($i = 0 ; $i < strlen($str) ; $i++) 
		{	
			//
			for($y = $last_character_index ; $y <= strlen($str) ; $y++)
			{
				//store the generated text
				$testStr = substr($str, $last_character_index, $y);
				//check the generated text alteast 3
				if(strlen($testStr) >= 3) {
					//check if the str is palindrome
					if(isPalindrome($testStr)){	
						array_push($palindromeList,$testStr);
					}
				}
				
			}
			$last_character_index++;
		}

		return $palindromeList;
	}


	function isPalindrome($str) {

		//get the length of the string
		$length = strlen($str);

		$lowlevel = 0;

		$highLevel = $length - 1;


		$is_palindrome = true;

		for($i = 0 ; $i < $length ; $i++) {

			//get 3 consecutive characters then test if palindrome
			if($str[$lowlevel++] == $str[$highLevel--]){

			}

			else{
				$is_palindrome = false;

				break;
			}
		}

		return $is_palindrome;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		$palindromeList = hasPalindrome('repaper');

		foreach($palindromeList as $palindrome) : ?>

			<div>
				<h3><?php echo $palindrome;?></h3>
			</div>
		<?php endforeach;
	?>
</body>
</html>