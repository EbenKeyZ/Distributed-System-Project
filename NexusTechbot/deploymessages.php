<?php
  $page = $_SERVER['http://localhost/nexus/deploymessages.php'];
$sec = "20"; 
     //accepting variables from the text box on our site
  //this feature is also used for manually sending messages to the intended user 

 //saving the bot token into the variable $botToken
$botToken = "285559897:AAGO_xAze-YW_0rdd2eOquC8R36lUokd0g4";
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
            $botChat="Just a some few days old";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botChat);
        break;
           case "How old are you?":
            $botChat="Just a some few days old";
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

            case "HEY":
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
            case "/codeAliance":
            $botChat="Code_Alliance is a Tech company that seeks to solve social problems via digitization";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
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
   <link rel="stylesheet" type="text/css" href="formValidators/vendor/bootstrap/css/bootstrap-theme.css"
/>
    <link rel="stylesheet" type="text/css" href="formValidators/vendor/bootstrap/css/bootstrap.css"/>
    <script type="text/javascript" href="formValidators/vendor/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" href="formValidators/vendor/jquery/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="api.css" type="text/css">
</head>
<body>
    <header>
     <nav id="nbar" class="navbar navbar-defaullt navbar-inverse navbar-fixed-top" role="navigation">
    
    <div class="container">
    <div class="navbar-header">
    <nav class="navbar navbar-inverse">
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
    </div>
    </div>
        </nav>
    </header>
        <div class="container" style="float:center;padding-top:200px;" >
        <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Send Message to Bot</h3>
  </div>
  <div class="panel-body" id="load_tweets">

     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('record_count.php').fadeIn("slow");
}, 10000); // refresh every 10000 milliseconds

</script>
      <form method="post"  action="#">
          <div class="form-group">
              <input class="form-control" name="message" type="text">
              
            <button class="btn btn-success" name="submit" type="submit" ><span class="glyphicon glyphicon-envelope"></span>send</button>
              </div>
          
          </form>
      
      
  </div>
</div>
</div>
</body>  

</html>
    