<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
		<title>phpSlingo</title>
		<link href="index.css" rel="stylesheet" type="text/css" media="all">
	</head>
	<body name="body">
		<form method="post">
			<img src="./img/background.gif" alt="" name="bg">
			&nbsp;
			<div name="A1" class="cardcell"></div>
			<div name="A2" class="cardcell"></div>
			<div name="A3" class="cardcell"></div>
			<div name="A4" class="cardcell"></div>
			<div name="A5" class="cardcell"></div>
			<div name="B1" class="cardcell"></div>
			<div name="B2" class="cardcell"></div>
			<div name="B3" class="cardcell"></div>
			<div name="B4" class="cardcell"></div>
			<div name="B5" class="cardcell"></div>
			<div name="C1" class="cardcell"></div>
			<div name="C2" class="cardcell"></div>
			<div name="C3" class="cardcell"></div>
			<div name="C4" class="cardcell"></div>
			<div name="C5" class="cardcell"></div>
			<div name="D1" class="cardcell"></div>
			<div name="D2" class="cardcell"></div>
			<div name="D3" class="cardcell"></div>
			<div name="D4" class="cardcell"></div>
			<div name="D5" class="cardcell"></div>
			<div name="E1" class="cardcell"></div>
			<div name="E2" class="cardcell"></div>
			<div name="E3" class="cardcell"></div>
			<div name="E4" class="cardcell"></div>
			<div name="E5" class="cardcell"></div>
			<div name="S1" class="slots"></div>
			<div name="S2" class="slots"></div>
			<div name="S3" class="slots"></div>
			<div name="S4" class="slots"></div>
			<div name="S5" class="slots"></div>
			<div name="startspinbtn"></div>
			<div name="disabledspinbtn"></div>
			<div name="startgamebtn"></div>
			<div name="restartbtn"></div>
			<div name="testbtn"></div>
			<div name="scoredisplay">0</div>
			<div name="spindisplay">0</div>
			<div name="freespindisplay">0</div>
			<div name="bonuspntdisplay">88,888</div>
			<audio name="click" src="./sounds/click.wav" preload="auto"></audio>
			<audio name="spinclick_snd" src="./sounds/spinclick.wav" preload="auto"></audio>
			<audio name="filltile_snd" src="./sounds/filltile.wav" preload="auto"></audio>
			<audio name="slingo_snd" src="./sounds/slingo2.wav" preload="auto"></audio>
			<audio name="invalname_snd" src="./sounds/invalname.wav" preload="auto"></audio>
			<audio name="coin" src="./sounds/goldcoin.wav" preload="auto"></audio>
			<audio name="slot1_snd" src="./sounds/slot1.wav" preload="auto"></audio>
			<audio name="slot2_snd" src="./sounds/slot2.wav" preload="auto"></audio>
			<audio name="slot3_snd" src="./sounds/slot3.wav" preload="auto"></audio>
			<audio name="slot4_snd" src="./sounds/slot4.wav" preload="auto"></audio>
			<audio name="slot5_snd" src="./sounds/slot5.wav" preload="auto"></audio>
			<audio name="dd_snd" src="./sounds/dd.wav" preload="auto"></audio>
			<audio name="csmb_snd" src="./sounds/csmb.wav" preload="auto"></audio>
			<audio name="scorereduce_snd" src="./sounds/scorereduce.wav" preload="auto"></audio>
			<audio name="start_snd" src="./sounds/start.wav" preload="auto"></audio>
			<audio name="gameover_snd" src="./sounds/gameover.wav" preload="auto"></audio>
			<audio name="fc_snd" src="./sounds/fc.wav" preload="auto"></audio>
			<audio name="freespin_snd" src="./sounds/freespin.wav" preload="auto"></audio>
			<div name="slingo1" class="vertslingos"></div>
			<div name="slingo2" class="vertslingos"></div>
			<div name="slingo3" class="vertslingos"></div>
			<div name="slingo4" class="vertslingos"></div>
			<div name="slingo5" class="vertslingos"></div>
			<div name="slingo6" class="horizslingos"></div>
			<div name="slingo7" class="horizslingos"></div>
			<div name="slingo8" class="horizslingos"></div>
			<div name="slingo9" class="horizslingos"></div>
			<div name="slingo10" class="horizslingos"></div>
			<div name="slingo11" class="diagslingos"></div>
			<div name="slingo12" class="diagslingos"></div>
			<img src="./img/devil.gif" alt="" name="devil" class="overlay">
			<img src="./img/csmb.gif" alt="" name="csmb" class="overlay">
			<img src="./img/fc.gif" alt="" name="fullcard" class="overlay">
			<img src="./img/gameover.gif" alt="" name="gameover" class="overlay">
			<img src="./img/finalspins4.gif" alt="" name="finalspins4" class="overlay">
			<img src="./img/finalspins3.gif" alt="" name="finalspins3" class="overlay">
			<img src="./img/finalspins2.gif" alt="" name="finalspins2" class="overlay">
			<img src="./img/finalspins1.gif" alt="" name="finalspins1" class="overlay">
			<img src="./img/freespinq.gif" alt="" name="freespinq" class="questionelements">
			<div name="yesbtn" class="questionelements"></div>
			<div name="nobtn" class="questionelements"></div>
			<div name="bonuspntdisplay"></div>
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
