<?php
		$DATABASE_HOST = 'den1.msyql2.gear.host';
		$DATABASE_USER = 'munlinetest';
		$DATABASE_PASS = 'kyr17pan2004lov27fle2016!';
		$DATABASE_NAME = 'munlinetest';
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

		echo "$testresult1";

?>