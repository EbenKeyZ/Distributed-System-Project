<?php
  $page = $_SERVER['http://localhost/pro/nexuscrop.php'];
$sec = "20"; 
     //accepting variables from the text box on our site
  //this feature is also used for manually sending messages to the intended user 
 //saving the bot token into the variable $botToken
$botToken = "278642642:AAEWYMs0tAYarr1IxPKPuEFAj0USztRWyv8";
//instantiating the url for telegram
$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents($website."/getupdates");
$update = json_decode($update, TRUE);
//getting the last array locaton of the recieved message
$current_update =end($update["result"]);
//getting the chat id of the user
$chatId = $current_update["message"]["chat"]["id"]; 
//recieving input message from the user and saving it in a variable
$newmessage=$current_update["message"]["text"];
$teleuser=$current_update["message"]["from"]["first_name"];  
//file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$messageme); 
  
   //checking the text recieved from the user and giving it an associated message
   switch($newmessage) {
           
           //start and end bot
        case "/start":
            $botChat="Welcome Sir...tap / for help";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
        case "/end":
            $botChat="Good bye Sir...Hope to hear from you again.";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
           
           //hi and hello
           case "hi":
           $botChat="What's up? Want to know the Crop story of Ghana?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "Hi":
           $botChat="What's up? Want to know the Crop story of Ghana?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "HI":
           $botChat="What's up? Want to know the Crop story of Ghana?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
        case "hello":
            $botChat="hi, let's explore";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "Hello":
            $botChat="hi, let's explore";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "HELLO":
            $botChat="hi, let's explore";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "yes":
            $botChat="ok..ask me anything about crops in Ghana ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "Yes":
            $botChat="ok..ask me anything about crops in Ghana ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "YES":
            $botChat="ok..ask me anything about crops in Ghana ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "ok":
            $botChat="..ask me anything about crops in Ghana ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "Ok":
            $botChat="..ask me anything about crops in Ghana ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "OK":
            $botChat="..ask me anything about crops in Ghana ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "no":
            $botChat="anything else you want to know? or let's chat";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "No":
            $botChat="anything else you want to know? or let's chat";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "NO":
            $botChat="Anything else you want to know? or let's chat";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           
           //let's chat
         case "go google":
            $botChat="https://www.google.com";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
           break;
           case "Go google":
            $botChat="https://www.google.com";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
           break;
            case "bye":
            $botChat="Nice chating you";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "Bye":
            $botChat="Nice chating you";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "how old are you?":
            $botChat="Just some few months old";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
        break;
           case "How old are you?":
            $botChat="Just some few days old";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
        break;
case "/help":
             $botChat="check the symbol / near your text box";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
        case "/go":
            $botChat="hello ";
            file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
            
        ///////////////////////////////////////////////////////////////////
            case "Who are you?":
            $botChat="I am a friendly interactive Bot. Erm i like to talk on crops in Ghana.";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "who are you?":
            $botChat="I am a friendly interactive Bot. Erm i like to talk on crops in Ghana.";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "who are you":
            $botChat="I am a friendly interactive Bot. Erm i like to talk on crops in Ghana.";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "WHO ARE YOU?":
            $botChat="I am a friendly interactive Bot. Erm i like to talk on crops in Ghana.";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
////////////////////////////////////////////////////////////////////////////////////
            case "how are you?"  :
            $botChat="Am doing just fine. How about you?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "how are you"  :
            $botChat="Am doing just fine. How about you?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "How are you?"  :
            $botChat="Am doing just fine. How about you?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "HOW ARE YOU?"  :
            $botChat="Am doing just fine. How about you?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
//////////////////////////////////////////////////////////////////////////////////////
            case "What is your name?":
            $botChat="NexusgroupBot";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "What is your name":
            $botChat="NexusgroupBot";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
             case "what is your name?":
            $botChat="NexusgroupBot";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
             case "WHAT IS YOUR NAME?":
            $botChat="NexusgroupBot";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
///////////////////////////////////////////////////////////////////////////////////
            case "Where are you from?":
            $botChat="Valley View University";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
              case "where are you from?":
            $botChat="Valley View University";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "where are you from":
            $botChat="Valley View University";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "WHERE ARE YOU FROM?":
            $botChat="Valley View University";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
//////////////////////////////////////////////////////////////////////////////
            case "What is the name of your father?" :
            $botChat="Nexusgroup built me.";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "what is the name of your father?" :
            $botChat="Nexusgroup built me.";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "what is the name of your father" :
            $botChat="Nexusgroup built me.";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "WHAT IS THE NAME OF YOUR FATHER?" :
            $botChat="Nexusgroup built me.";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
//////////////////////////////////////////////////////////////////////////////
            case "What's up?":
            $botChat="eerrm, nothing much... you?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            
            case "what's up?":
            $botChat="eerrm, nothing much... you?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "what's up":
            $botChat="eerrm, nothing much... you?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            
            case "WHAT'S UP?":
            $botChat="eerrm, nothing much... you?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "am good":
            $botChat="you wanna know about crops?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "cool":
            $botChat="you wanna know about crops?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "fine":
            $botChat="you wanna know about crops?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "am fine":
            $botChat="you wanna know about crops?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
  ////////////////////////////////////////////////////////////////////////////////          
            case "How old are you?":
            $botChat="Just a few months old";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            
            case "how old are you?":
            $botChat="Just a few months old";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "how old are you":
            $botChat="Just a few months old";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "HOW OLD ARE YOU?":
            $botChat="Just a few months old ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
//////////////////////////////////////////////////////////////////////////////////
           //commands start
            ////////////////////////////////////////////////////////////////////////////////          
            case "/newsonline":
            $botChat=urlencode("I can help you out with some links online. 
            \nThe State of the Agriculture Sector in Ghana\n http://developeconomies.com/development-economics/the-state-of-the-agriculture-sector-in-ghana/ \n Mordern Ghana Agriculture https://www.modernghana.com/GhanaHome/ghana/economy.asp?menu_id=4&sub_menu_id=0&menu_id2=0&s=f \n Agriculture in Ghana\n https://en.wikipedia.org/wiki/Agriculture_in_Ghana");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
       case "/getnews":
            $botChat="Farmers are growing fat.. ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            
            case "/regions":
            $botChat= urlencode("Regions in Ghana\n Ashanti \n Brong-Ahafo \n Central \n Eastern \n Greater Accra \n Northern \n Upper East \n Upper West.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "/bestcrops":
            $botChat="erm..let me hook you to a link  http://gipcghana.com/17-investment-projects/agriculture-and-agribusiness/cash-crops/287-investing-in-ghana-s-cash-crops.html";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
//what has been added
case "cocoa":
            $botChat= urlencode("Cocoa is the chief of agricultural export of Ghana and the country's main cash crop. Ghana is the second largest cocoa exporter in the world. Cocoa is normally grown in the forested areas of the country.  Such areas include . Ashanti Region, Brong-Ahafo Region, Eastern Region, Western Region and Volta Region where rainfall is 1000- 1500 millimeters per year .");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
case "Cocoa":
            $botChat= urlencode("Cocoa is the chief of agricultural export of Ghana and the country's main cash crop. Ghana is the second largest cocoa exporter in the world. Cocoa is normally grown in the forested areas of the country.  Such areas include . Ashanti Region, Brong-Ahafo Region, Eastern Region, Western Region and Volta Region where rainfall is 1000- 1500 millimeters per year .");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
case "millet":
            $botChat= urlencode("Millets are small-grained, annual, warm-weather cereals belonging to grass family. They are highly tolerant to extreme weather conditions such as drought and are nutritious compared to the major cereals such as rice and wheat. These crops are normally grown in the Northern Regions of Ghana.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
case "Millet":
            $botChat= urlencode("Millets are small-grained, annual, warm-weather cereals belonging to grass family. They are highly tolerant to extreme weather conditions such as drought and are nutritious compared to the major cereals such as rice and wheat. These crops are normally grown in the Northern Regions of Ghana.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
case "yam":
            $botChat= urlencode("Ghana is the  world's second largest producer of yams after Nigeria. Yams are normally grown in the Northern Region of Ghana. Sometimes they are also grown in the Ashanti and Central Region of Ghana");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
case "Yam":
            $botChat= urlencode("Ghana is the  world's second largest producer of yams after Nigeria. Yams are normally grown in the Northern Region of Ghana. Sometimes they are also grown in the Ashanti and Central Region of Ghana");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
case "sorghum":
            $botChat= urlencode("Sorghum grows well in the Northern part of Ghana. These plants are used for grain fibre and fodder,.This is because they are very condusive in conditions such as drought thus they are cultivated in warmer climates worldwide.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
case "Sorghum":
            $botChat= urlencode("Sorghum grows well in the Northern part of Ghana. These plants are used for grain fibre and fodder,.This is because they are very condusive in conditions such as drought thus they are cultivated in warmer climates worldwide.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
case "maize":
            $botChat= urlencode("Maize is a tropical grass that is well adapted to many climates and hence has wide-ranging maturities from 70 days to 210 days. Maize plants are erect and may grow as tall as 3 m, with little tillering capacity. The scientific name for maize is Zea mays; it is also commonly known as corn. White (or waxy) maize is the dominant type of maize grown in Ghana. Maize is grown in the Upper East Region og Ghana");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
case "Maize":
            $botChat= urlencode("Maize is a tropical grass that is well adapted to many climates and hence has wide-ranging maturities from 70 days to 210 days. Maize plants are erect and may grow as tall as 3 m, with little tillering capacity. The scientific name for maize is Zea mays; it is also commonly known as corn. White (or waxy) maize is the dominant type of maize grown in Ghana. Maize is grown in the Upper East Region og Ghana");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "Beans":
            $botChat= urlencode("Yard long beans can grow on a wide range of soils but prefer a well-drained medium loam with a pH of 6.0-7.5 (slightly acidic to neutral). They require a cool to moderately warm climate for good growth. Temperatures of 18-35oC are required for promoting flowering and fruit set. High humidity, excessive rain and hot weather cause flowers and pods to drop and increase the incidence of diseases. Commercial production is concentrated in the Southern parts of Ghana.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
       case "beans":
            $botChat= urlencode("Yard long beans can grow on a wide range of soils but prefer a well-drained medium loam with a pH of 6.0-7.5 (slightly acidic to neutral). They require a cool to moderately warm climate for good growth. Temperatures of 18-35oC are required for promoting flowering and fruit set. High humidity, excessive rain and hot weather cause flowers and pods to drop and increase the incidence of diseases. Commercial production is concentrated in the Southern parts of Ghana.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
//////////////////////////////////////////////////////////////////////////////////
           //commands end
           
            case "Can we be friends?":
            $botChat="Sure, I'd love that ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
            
            case "can we be friends?":
            $botChat="Sure, I'd love that ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
            case "CAN WE BE FRIENDS?":
            $botChat="Sure, I'd love that ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
  ////////////////////////////////////////////////////////////////////////////////////////          
            case "Can we chat?":
            $botChat="Definitely";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
             case "can we chat?":
            $botChat="Definitely";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
            
             case "CAN WE CHAT?":
            $botChat="Definitely";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
  ///////////////////////////////////////////////////////////////////////////////////////////          
            case "Hey":
            $botChat="Hello";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            
            case "hey":
            $botChat="Hello";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "HEY":-
            $botChat="Hello";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
   /////////////////////////////////////////////////////////////////////////////////         
            case "what is the time?":
            $botChat="The time is ";
            $time=date("h:i:sa");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$time);
            break;
            
             case "What is the time?":
            $botChat="The time is ";
            $time=date("h:i:sa");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$time);
            break;
             case "WHAT IS THE TIME?":
            $botChat="The time is ";
            $time=date("h:i:sa");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$time);
            break;
////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////         
            case "Good morning":
            $botChat="Good morning";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
            case "good morning":
            $botChat="Good morning ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
            case "GOOD MORNING":
            $botChat="Good morning";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
/////////////////////////////////////////////////////////////////////////////////////////
            case "Hi":
            $botChat="hello ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
             
             case "hi":
            $botChat="hello ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
            case "HI":
            $botChat="hello ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
////////////////////////////////////////////////////////////////////////////////////
            case "GOOD AFTERNOON":
            $botChat="Good afternoon";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
                  case "good afternoon":
            $botChat="Good Afternoon";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
            case "Good afternoon":
            $botChat="Good afternoon";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat.$teleuser);
            break;
///////////////////////////////////////////////////////////////////////////////////////
           case "Greater Accra Region":
            $botChat=urlencode("Crops that grow best in Greater Accra Region are maize, cassava, vegetables notably pepper, okro, garden eggs, cabbage, tomatoes, Asian vegetables, fruits such as, pineapple, water melon, pawpaw and tree crops such as mango");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "Upper East Region":
            $botChat=urlencode("Crops that grow well in the Upper East Region are millet, guinea-corn, maize, groundnut, beans, sorghum and dry season tomatoes and onions. Non Traditional Export Crops: Sesame, Paprika, Cashew, Mangoes, Sheanuts.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "Upper West Region":
            $botChat=urlencode("The major economic activity of the Upper West Region is agriculture. Crops that grows best include corn, millet, peanuts, okra, shea tree, and rice.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "Western Region":
            $botChat=urlencode("Crops that grow best in the Western Region are Starchy Crop: Maize, Cassava, plantain, yam, cocoyam and rice. Cash Crops: Cocoa, coconut, rubber, oil palm and coffee. Potentially Crops: Rice and citrus.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "Eastern Region":
            $botChat=urlencode("Crops that grow best in the Eastern Region have large scale production of cash crops such as cocoa, oil palm, cassava.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "Brong Ahafo Region":
            $botChat=urlencode("Crops that grow best in the Brong Ahafo Region includes coffee, rubber and tobacco, grown in the forest area. The main food crops are maize, cassava, plantain, yam, cocoyam, rice and tomatoes. Yam production is very high");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "Central Region":
            $botChat=urlencode("Climbing up the districts in the Central Region, there are extensive stretch of savanna lands that promote the growth of pineapples, maize, yam and other vegetables.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
           case "Ashanti Region":
            $botChat=urlencode("Agriculture is the dominant sector in Ashanti region’s economic activities and it is endowed with abundant arable lands which support the production of cash crops such as cocoa, coffee, oil palm, citrus cashew, mango and food crops like cassava, plantain, rice, yam, cocoyam, maize, and vegetables.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "Volta Region":
            $botChat=urlencode("SO far so good. Volta region is noted for growing various crops; among them are Cocoa, Coffee, Maize, Sorghum, Cassava, Yam, Rice, Yams, Cowpea, Groundnut, Plantain, Cocoyam, Oil Palm, Pineapple, Cashew, Vegetables etc.");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
            case "Northern Region":
            $botChat=urlencode(" In the Northern Region, the target crops for produciton are Rice, Maize and Soybean and sorghum");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
            break;
///////////////////////////////////////////////////////////////////////////////////////
             default:
           $botChat=urlencode("Ooosp, its either I do not have knowledge on that yet or please check your spelling or try Google \n
            i can help you with the link \n https://www.google.com");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat." ".$teleuser);
            break;
      
    } 
    
   
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nexusgroup API</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <script type="text/javascript" href="js/bootstrap.js"></script>
    <script type="text/javascript" href="js/jquery.js"></script>
</head>
<body><!--
    <header>
         <nav id="nbar" class="navbar navbar-defaullt navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">Nexusgroup</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><span  class="glyphicon glyphicon-home">Home </span></a></li>
                    <li class="active"><a href="#"> <span class="glyphicon glyphicon-phone">Contact Us</span></a></li> 
                    <li class="dropdown" ><a href="#" data-toggle="dropdown" class="dropdown-toggle"> <span  class="glyphicon glyphicon-user">AboutUs</span></a>
                    <ul class="dropdown-menu" >
                        <li > <a href="#">Gallery</a> </li>
                        <li > <a href="#">Gallery</a> </li> 
                    </ul> 
                    </li> 
                </ul>
            </div>
        </nav>
    </header>-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
                <script type="text/javascript">
                    var auto_refresh = setInterval(
                    function ()
                    {
                    $('#load_tweets').load('record_count.php').fadeIn("slow");
                    }, 10000); // refresh every 10000 milliseconds
                </script><!--
    <div class="container" style="float:center;padding-top:200px;" >
        <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Send Message to Bot</h3>
              </div>
            <div class="panel-body" id="load_tweets">-->

             
<!--
                <form method="post"  action="#">
                    <div class="form-group">
                      <input class="form-control" name="message" type="text">
                      <button class="btn btn-success" name="submit" type="submit" ><span class="glyphicon glyphicon-envelope"></span>send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>-->
</body>  

</html>