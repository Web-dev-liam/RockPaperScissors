<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	ini_set('display_errors' ,0);
	error_reporting(E_ALL);

	echo ' Your score is currently: '.$_SESSION['Score']. ' ';
			if($_POST['user_choice']){

			} 	elseif(!$_POST['user_choice']) {
				echo '<form action="index.php" method="post" />';
			}

			$user_choice = $_POST['user_choice'];

			$Choosefrom = array('Rock', 'Paper', 'Scissors');
			$Choice = rand(0,2);
			$Computer = $Choosefrom[$Choice];

			echo 'you picked : ' . $user_choice. ' ';
			echo '<br /> & <br />';
			echo 'the computer picked : ' . $Computer . ' ';

			if($user_choice === $Computer){
				echo 'Result : Draw +0';
				$_SESSION['Score']=(int)$_SESSION['Score']+0;
			}
				elseif($user_choice == 'Rock' && $Computer == 'Scissors'){
					echo 'Result : Win +1';
					$_SESSION['Score']=(int)$_SESSION['Score']+1;
				}
				elseif($user_choice == 'Rock' && $Computer == 'Paper'){
					echo 'Result : Lose -1';
					$_SESSION['Score']=(int)$_SESSION['Score']-1;
				}
				elseif ($user_choice == 'Scissors' && $Computer == 'Rock') {
					echo 'Result : Lose -1';
					$_SESSION['Score']=(int)$_SESSION['Score']-1;
				}
				elseif ($user_choice == 'Scissors' && $Computer == 'Paper') {
					echo 'Result : win +1';
					$_SESSION['Score']=(int)$_SESSION['Score']+1;
				}
				elseif($user_choice == 'Paper' && $Computer == 'Scissors'){
					echo 'Result : Lose -1';
					$_SESSION['Score']=(int)$_SESSION
					['Score'] -1;
				}
				elseif($user_choice == 'Paper' && $Computer == 'Rock'){
					echo 'Result : win +1';
					$_SESSION['Score']=(int)$_SESSION
					['Score'] +1;
				}
			

	?>
	<form action="index.php" method="post" >
	<input type="image" src="rock.jpg" name="user_choice" value="Rock" title="Rock" /> <br />

	<input type="image" src="paper.jpg" name="user_choice" value="Paper" title="Paper" /> <br />

	<input type="image" src="scissors.jpg" name="user_choice" value="Scissors" title="Scissors" /> <br />

	</form>

	

</body>
</html>