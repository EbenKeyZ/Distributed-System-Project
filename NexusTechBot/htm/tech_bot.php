<?php #php codes begins here

                   ini_set ('error_reporting', E_ALL);

                   $botToken = "273632610:AAFAJRcJM2N9kwich2c8-swxuyr9WfFrt6M";
                   $website = "https://api.telegram.org/bot".$botToken;

                   $update = file_get_contents($website."/getupdates");
                   $updateArray = json_decode($update, TRUE);

                   $chatId = end($updateArray['result'])["message"]["chat"]["id"];
                   $clientName = end($updateArray['result'])['message']['chat']['first_name'];
	                $message = end($updateArray['result'])['message']['text'];

                   switch ($message) {
                     case "/test":
                       # code...
                       file_get_contents($website."/sendMessage?chat_id=".$chatId."&text=Hi you are in");
                       break;

                       case "/hi":
                         # code...
                         file_get_contents($website."/sendMessage?chat_id=".$chatId."&text=Hi! you are welcome to the Techbot group. Do you want to be abreast with the latest technology around you. /yes to continue");
                         break;
                           
                       case "/yes":
                           file_get_contents($website."/sendMessage?chat_id=".$chatId."&text=Augmented Reality has already gotten into our life in the forms of simulated experiment and
						   education app, but Google is taking it several steps higher with Google Glass. Theoretically, with Google Glass, you are able to view social media feeds, text,
						   Google Maps, as well as navigate with GPS and take photos. You will also get the latest updates while you are on the ground.http://www.hongkiat.com/blog/revolutionary-products/. /next for another news");
                           break;
                           
                       case "/next":
                       # code...
                       file_get_contents($website."/sendMessage?chat_id=".$chatId."&text=hiii");
                       break;

                     default:
                       # code...
                       sendMessage($chatId, "default");
                       break;
                   }

                   function sendMessage ($chatid, $message) {

                     $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
                     file_get_contents($url);

                   }
?>

<h2>Test</h2>