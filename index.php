<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
		<title>phpSlingo</title>
		<link href="index.css" rel="stylesheet" type="text/css" media="all">
	</head>
	<body>
		<form method="post">
			<img src="./img/background.gif" alt="" id="bg">
			&nbsp;
			<div id="A1" class="cardcell"></div>
			<div id="A2" class="cardcell"></div>
			<div id="A3" class="cardcell"></div>
			<div id="A4" class="cardcell"></div>
			<div id="A5" class="cardcell"></div>
			<div id="B1" class="cardcell"></div>
			<div id="B2" class="cardcell"></div>
			<div id="B3" class="cardcell"></div>
			<div id="B4" class="cardcell"></div>
			<div id="B5" class="cardcell"></div>
			<div id="C1" class="cardcell"></div>
			<div id="C2" class="cardcell"></div>
			<div id="C3" class="cardcell"></div>
			<div id="C4" class="cardcell"></div>
			<div id="C5" class="cardcell"></div>
			<div id="D1" class="cardcell"></div>
			<div id="D2" class="cardcell"></div>
			<div id="D3" class="cardcell"></div>
			<div id="D4" class="cardcell"></div>
			<div id="D5" class="cardcell"></div>
			<div id="E1" class="cardcell"></div>
			<div id="E2" class="cardcell"></div>
			<div id="E3" class="cardcell"></div>
			<div id="E4" class="cardcell"></div>
			<div id="E5" class="cardcell"></div>
			<div id="S1" class="slots"></div>
			<div id="S2" class="slots"></div>
			<div id="S3" class="slots"></div>
			<div id="S4" class="slots"></div>
			<div id="S5" class="slots"></div>
			<div id="startspinbtn"></div>
			<div id="disabledspinbtn"></div>
			<div id="startgamebtn"></div>
			<div id="restartbtn"></div>
			<div id="testbtn"></div>
			<div id="scoredisplay">0</div>
			<div id="spindisplay">0</div>
			<div id="freespindisplay">0</div>
			<div class="bonuspntdisplay">88,888</div>
			<audio id="click" src="./sounds/click.wav" preload="auto"></audio>
			<audio id="spinclick_snd" src="./sounds/spinclick.wav" preload="auto"></audio>
			<audio id="filltile_snd" src="./sounds/filltile.wav" preload="auto"></audio>
			<audio id="slingo_snd" src="./sounds/slingo2.wav" preload="auto"></audio>
			<audio id="invalname_snd" src="./sounds/invalname.wav" preload="auto"></audio>
			<audio id="coin" src="./sounds/goldcoin.wav" preload="auto"></audio>
			<audio id="slot1_snd" src="./sounds/slot1.wav" preload="auto"></audio>
			<audio id="slot2_snd" src="./sounds/slot2.wav" preload="auto"></audio>
			<audio id="slot3_snd" src="./sounds/slot3.wav" preload="auto"></audio>
			<audio id="slot4_snd" src="./sounds/slot4.wav" preload="auto"></audio>
			<audio id="slot5_snd" src="./sounds/slot5.wav" preload="auto"></audio>
			<audio id="dd_snd" src="./sounds/dd.wav" preload="auto"></audio>
			<audio id="csmb_snd" src="./sounds/csmb.wav" preload="auto"></audio>
			<audio id="scorereduce_snd" src="./sounds/scorereduce.wav" preload="auto"></audio>
			<audio id="start_snd" src="./sounds/start.wav" preload="auto"></audio>
			<audio id="gameover_snd" src="./sounds/gameover.wav" preload="auto"></audio>
			<audio id="fc_snd" src="./sounds/fc.wav" preload="auto"></audio>
			<audio id="freespin_snd" src="./sounds/freespin.wav" preload="auto"></audio>
			<div id="slingo1" class="vertslingos"></div>
			<div id="slingo2" class="vertslingos"></div>
			<div id="slingo3" class="vertslingos"></div>
			<div id="slingo4" class="vertslingos"></div>
			<div id="slingo5" class="vertslingos"></div>
			<div id="slingo6" class="horizslingos"></div>
			<div id="slingo7" class="horizslingos"></div>
			<div id="slingo8" class="horizslingos"></div>
			<div id="slingo9" class="horizslingos"></div>
			<div id="slingo10" class="horizslingos"></div>
			<div id="slingo11" class="diagslingos"></div>
			<div id="slingo12" class="diagslingos"></div>
			<img src="./img/devil.gif" alt="" id="devil" class="overlay">
			<img src="./img/csmb.gif" alt="" id="csmb" class="overlay">
			<img src="./img/fc.gif" alt="" id="fullcard" class="overlay">
			<img src="./img/gameover.gif" alt="" id="gameover" class="overlay">
			<img src="./img/finalspins4.gif" alt="" id="finalspins4" class="overlay">
			<img src="./img/finalspins3.gif" alt="" id="finalspins3" class="overlay">
			<img src="./img/finalspins2.gif" alt="" id="finalspins2" class="overlay">
			<img src="./img/finalspins1.gif" alt="" id="finalspins1" class="overlay">
			<img src="./img/freespinq.gif" alt="" id="freespinq" class="questionelements">
			<div id="yesbtn" class="questionelements"></div>
			<div id="nobtn" class="questionelements"></div>
			<div class="bonuspntdisplay"></div>
			<?php
				$debug = true;
				$dataArray = ["Toxnameation 1", "Toxnameation 2", "Toxnameation 3", "Toxnameation 4", "Toxnameation 5"];
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
