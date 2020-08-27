<?php
		$DATABASE_HOST = 'munline-01.cm1jbmjcns14.us-east-2.rds.amazonaws.com';
		$DATABASE_USER = 'admin';
		$DATABASE_PASS = 'm1u2n3l4i5n6e7-data!?';
		$DATABASE_NAME = 'munline01';
		// Try and connect using the info above.
		$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
		if ( mysqli_connect_errno() ) {
		// If there is an error with the connection, stop the script and display the error.
		exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

		$testsql = "SELECT * FROM test WHERE a='test';";
		$testq = $con->query($testsql);
		$testq->setFetchMode(PDO::FETCH_ASSOC);
		$test = $testq->fetch();

		$testresult1 = $test['a'];
		$testresult2 = $test['b'];
		$testresult3 = $test['c'];

		echo "$testresult1 <br> $testresult2 <br> $testresult3";

?>