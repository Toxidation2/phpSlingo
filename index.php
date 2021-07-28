<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>phpSlingo</title>
		<link href="index.css" rel="stylesheet" type="text/css" media="all">
	</head>
	<body>
		<form method="post">
			<?php
				$debug = true;
				$dataArray = ["Toxidation 1", "Toxidation 2", "Toxidation 3", "Toxidation 4", "Toxidation 5"];
				if (!$debug || @!$_POST["restoration"]) {
					if (isset($_COOKIE["data"])) {
						$data = explode(";", substr($_COOKIE["data"], 6));
						$array = [];
						for ($index1 = 0; $index1 < count($dataArray); $index1++) {
							$value1 = str_replace(" ", "-", $dataArray[$index1]);
							if (@!$_POST[$value1]) {
								for ($index2 = 0; $index2 < count($data); $index2++) {
									$value2 = $data[$index2];
									if ($value1 == $value2) {
									$array[] = $value2;
									}
								}
							}
						}
						for ($index1 = 0; $index1 < count($dataArray); $index1++) {
							$value1 = str_replace(" ", "-", $dataArray[$index1]);
							if (@!$_POST[$value1]) {
								$boolean = false;
								for ($index2 = 0; $index2 < count($array); $index2++) {
									$value2 = $array[$index2];
									if ($value1 == $value2) {
										$boolean = true;
										break;
									}
								}
								if (!$boolean) {
									$originalValue1 = $value1;
									$value1 = str_replace("-", " ", $value1);
									echo("<input type=\"submit\" value=\"$value1\" name=\"$originalValue1\">");
								}
							} else {
								$data = $_COOKIE["data"] . $value1 . ";";
								setcookie("data", $data, 0, "/phpSlingo");
								header("Refresh: 0");
							}
						}
					} else {
						setcookie("data", "data: ", 0, "/phpSlingo");
						header("Refresh: 0");
					}
				} else {
					setcookie("data", "", time() - 1, "/phpSlingo");
					header("Refresh: 0");
				}
				if ($debug) {
					echo("<input type=\"submit\" value=\"Data Restoration\" name=\"restoration\">");
				}
			?>
		</form>
	</body>
</html>
