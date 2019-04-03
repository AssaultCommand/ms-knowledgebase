<?php
/* - Connectivity Functions - */

	function database_connect() {
		$GLOBALS['database']['connection'] = mysqli_connect($GLOBALS['database']['ip'], $GLOBALS['database']['user'], $GLOBALS['database']['password'], $GLOBALS['database']['database']);
		if (mysqli_connect_errno($GLOBALS['connection']))
		{
			return "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else
		{
			return true;
		}
	}

	function database_disconnect() {
		@mysqli_close($GLOBALS['database']['connection']);
	}

/* - Misc Functions - */

	function SQL_array_to_JSON($query) {
		$results = mysqli_query($GLOBALS['database']['connection'], $query);

		$json = "{\n\"data\": [";

		while($result = mysqli_fetch_assoc($results)) {
			$json .= "\n" . json_encode($result) . ",";
		}

		$json = rtrim($json, ',') . "\n]\n}";

		return $json;
	}

	function SQL_to_JSON($query) {
		$results = mysqli_query($GLOBALS['database']['connection'], $query);
		$result = mysqli_fetch_assoc($results);

		$json = "{\n\"data\": [\n";
		$json .= json_encode($result);
		$json .= "\n]\n}";

		return $json;
	}

	function SQL_assoc_JSON($query) {
		$results = mysqli_query($GLOBALS['database']['connection'], $query);

		$json = "{\n\"data\": [";

		while($result = mysqli_fetch_assoc($results)) {
			$result['list'] = json_decode($result['list']);
			$json .= "\n" . json_encode($result) . ",";
		}

		$json = rtrim($json, ',') . "\n]\n}";

		return $json;
	}


?>
