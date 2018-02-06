  <?php
if(!isset($_POST['submit']))
{
    echo "error; you need to submit the form!";
}
$name = $_POST['name'] ;
$email = $_POST['email'] ;
$subject = $_POST['subject'] ;
$message = $_POST['message'] ;

if(empty($name)||empty($email))
{
   echo "Name and email are mandatory!";
   exit;
}
if(IsInjected($Email))
{
   echo "Bad email value!";
   exit;
}
$email_from = 'dmcoley948562@gmail.com';
$email_subject = "Portfolio Message";
$email_body = "You have received a new message from the user $name.\n".
   "Here is the message:\n Name: $name \n Email: $email \n Subject: $subject \n Message: $message".  
   
$to = "dmcoley948562@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $Email \r\n";
mail($to,$email_subject,$email_body,$headers);
header('Location: index.html');
function IsInjected($str)
{
 $injections = array('(\n+)',
             '(\r+)',
             '(\t+)',
             '(%0A+)',
             '(%0D+)',
             '(%08+)',
             '(%09+)'
             );
 $inject = join('|', $injections);
 $inject = "/$inject/i";
 if(preg_match($inject,$str))
   {
   return true;
 }
 else
   {
   return false;
 }
}
 
?>