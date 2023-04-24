
<?php
		echo($first_name = $_POST['first_name']);
		echo($last_name = $_POST['last_name']);
		echo($gender = $_POST['email']);
		echo($address = $_POST['phone']);
		echo($email = $_POST['meassage']);

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "request");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)_REQUEST
		// echo($first_name = $_POST['first_name']);
		
		// $last_name = $POST['last_name'];
		// $gender = $_REQUEST['gender'];
		// $address = $_REQUEST['address'];
		// $email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO collage VALUES ('$first_name',
			'$last_name','$email','$phone','$message')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$email\n $phone\n $message");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>

