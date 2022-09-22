<?php



$title .= $languageArray["child.title"];

$smmapi   = new SMMApi();
$fapi     = new socialsmedia_api();

if( $_SESSION["msmbilisim_userlogin"] != 1  || $user["client_type"] == 1  ){
  Header("Location:".site_url('logout'));
}

?>