        <?php 
    require_once("config.php");
    if((isset($_POST['domain'])&& $_POST['domain'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
    {
     require_once("contact_mail.php");

    $domain = $conn->real_escape_string($_POST['domain']);
	$currency = $conn->real_escape_string($_POST['currency']);
	$api_provider = $conn->real_escape_string($_POST['api_provider']);
	$api = $conn->real_escape_string($_POST['api']);
    $yourEmail = $conn->real_escape_string($_POST['your_email']);
	$password = $conn->real_escape_string($_POST['password']);
    $yourPhone = $conn->real_escape_string($_POST['your_phone']);
    $sql="INSERT INTO child (domain, currency, api_provider, api, your_email, password, your_phone) VALUES ('".$domain."','".$currency."','".$api_provider."','".$api."','".$yourEmail."', '".$password."', '".$yourPhone."')";
    if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
    echo "";
    }
    }
    else
    {
    echo "";
    }

    ?>
 <html>
<style>
body {
  background-color: #000000;
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
	 <style>


.glow {
  font-size: 50px;
  color:    #ffffff ;
  text-align: center;
  background: red;
  animation: mymove 5s infinite;
}

@keyframes mymove {
  from {background-color: red;}
  to {background-color: blue;}
}
</style>
<body>
<br><br><br><br><br><br><br><br>
	<h1 class="glow">Request Submited Successfully</h1>
	<h1 class="glow">Now Wait For 3 To 12 Hours</h1>
	<h1 class="glow">We will message you when Complete</h1>
	<h1 class="glow">Thank you </h1>
	<h4 style="text-align: center;"><strong>&nbsp;<a href="child" target="_blank">Go Back</a></strong></h4>
	
</body>
	 
</html>
