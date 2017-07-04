<html>
 <head>
  <title>Send Email</title>
 </head>
 <body>
 <h1>Email Sent! Thank You</h1>
 <?php 
$name = $_POST['contact_name']; 
$email = $_POST['contact_email']; 
$message = $_POST['contact_message']; 

$message .= "Name: \n"; 
$message .= $name; 
$message .= "\n";  
$message .= "Message: \n"; 
$message .= $message; 

mail("dhir.abhimanyu@gmail.com", "Subject: subject", $message, "From: $email"); 
Header("Location: index.html"); 
?>
 </body>
</html>