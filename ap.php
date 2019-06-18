<?php

error_reporting(0);
$date = new DateTime();
echo $date->format("H:i:s d/m/Y") . "
";
sleep(2);
date_default_timezone_set("Asia/Bangkok");
@system("clear");
sleep(1);
print "
[32m
-------------------- -----------[32m
DAMANG-TOOLS  :[31mPHILIPPINES
[32m            
------------------ -------------[32m
AUTHOR    :[31m DAMANG
[32m
YOUTUBE   :[31mTERMUX TRICKS & TUT
[32m
WARNING   :[31mDONOT SUBSCRIBE[32m
-------------------------- -----[32m
DESCLAIMER:[31mUSE AT YOUR OWN RISK[32m
-------------------------- -----[32m
	";
sleep(1);
echo "\n";
echo $biru."MABUHAY!!! ".$putih."Enter User_ID : ";
$name = trim(fgets(STDIN));
sleep(2);
	echo "\n";
echo "\n";
echo $biru."MABUHAY!!! ".$putih."Enter device_id : ";
$name1 = trim(fgets(STDIN));
sleep(2);
	echo "\n";

sleep(3);
$head = array(
"Host: asapcash.clipsin.in", "Connection: Keep-Alive", "Accept-Encoding: gzip");
$ads = ["1", "5", "8", "20", "10", "25", ];
$login = "http://asapcash.clipsin.in/api_v1/api.php?balance_update&user_id=$name&active_type=Spin&points=25&user_ip=null&device_id=$name1&point_type=1";

$i = 0;
while ($i < 99999) {
$geid = $ads["i"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,  true);
curl_setopt($ch, CURLOPT_ENCODING, ""); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);


$res = curl_exec($ch);
$err = curl_error($ch);
    curl_close($curl);
$js = json_decode($res, true);

$coin = $js["spin"]["0"]["points"];
    if ($ {
        $ {
            "GLOBALS"
        }
        ["$err"]
    }) {
        echo "cURL Error #:" . $ {
            $ {
                "GLOBALS"
            }
            ["$err"]
        };
    } else {
        $ {
            "GLOBALS"
        }
        ["$coin"] = "coin";
        echo "Balance:" . $ {
            $ {
                "GLOBALS"
            }
            ["$coin"]
        } . "
";
        sleep(rand(11, 13));
    }
    $ {
        $ {
            "GLOBALS"
        }
        ["$i"]
    }
    ++;
    if ($ {
        $i
    } == "6") {
        $ {
            $ {
                "GLOBALS"
            }
            ["i"]
        } = 0;
    }
}
?>
