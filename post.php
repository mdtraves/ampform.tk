<?php
    if(!empty($_POST))
    {
        

/*//-->MUST BE 'https://';*/
header("Content-type: application/json");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Origin: *.ampproject.org");
header("AMP-Access-Control-Allow-Source-Origin: ".$domain_url);

$redirect_url = 'ampform.tk/ty.php';


/*/--Assuming all validations are good here--*/
header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");   
header("AMP-Redirect-To: ".$redirect_url);

    echo json_encode(array('successmsg'=>$_POST['name'].'My success message. [It will be displayed shortly(!) if with redirect]'));

    die();
}

?>
