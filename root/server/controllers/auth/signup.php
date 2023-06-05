<?php
session_start();

include '../../configs/connect_users.php';
include '../../mail/send_mail.php';
include '../../configs/recaptcha.php';
include 'input_validation.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $recaptcha_response = validateRecaptcha();
  validateInputs();

  if (isset($recaptcha_response['error'])) {
    $response = $recaptcha_response;
  } else {
      $email = trim($_POST['email'] ?? '');
      $password = $_POST['password'] ?? '';

      $query = "SELECT id FROM accounts WHERE email=:email";
      $stmt = $pdo->prepare($query);
      $stmt->execute(['email' => $email]);
      $user = $stmt->fetch();

      if($user){
        $response = array(
          'error' => 'Provided email is already in use'
        );
      } else {
        if (isset($_SERVER['HTTP_CLIENT_IP']))
          $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
          $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
          $ip_address = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
          $ip_address = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
          $ip_address = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
          $ip_address = $_SERVER['REMOTE_ADDR'];
        else
          $ip_address = 'UNKNOWN';
      
        $hashed_pass = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12,]);
        $confirmation_token = bin2hex(random_bytes(40));
        $query = "INSERT INTO `accounts` (`id`, `email`, `pass`, `created_at`, `ip`, `level`, `verified`, `confirmation_token`) VALUES (NULL, :email, :pass, NOW(), :ip, 'free', 'N', :confirmation_token)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['email' => $email, 'pass' => $hashed_pass, 'ip' => $ip_address, 'confirmation_token' => $confirmation_token]);
      
        $msg = "<!doctypehtml><html style=\"font-family:arial,'helvetica neue',helvetica,sans-serif\"xmlns=http://www.w3.org/1999/xhtml xmlns:o=urn:schemas-microsoft-com:office:office><meta charset=UTF-8><meta content=\"width=device-width,initial-scale=1\"name=viewport><meta name=x-apple-disable-message-reformatting><meta content=\"IE=edge\"http-equiv=X-UA-Compatible><meta content=\"telephone=no\"name=format-detection><title>New message</title><!--[if (mso 16)]><style>a{text-decoration:none}</style><![endif]--><!--[if gte mso 9]><style>sup{font-size:100%!important}</style><![endif]--><!--[if gte mso 9]><xml><o:officedocumentsettings><o:allowpng></o:allowpng><o:pixelsperinch>96</o:pixelsperinch></o:officedocumentsettings></xml><![endif]--><!--[if !mso]><!-- --><link href=\"https://fonts.googleapis.com/css?family=Merriweather:700\"rel=stylesheet><!--<![endif]--><style>#outlook a{padding:0}.es-button{mso-style-priority:100!important;text-decoration:none!important}a[x-apple-data-detectors]{color:inherit!important;text-decoration:none!important;font-size:inherit!important;font-family:inherit!important;font-weight:inherit!important;line-height:inherit!important}.es-desk-hidden{display:none;float:left;overflow:hidden;width:0;max-height:0;line-height:0;mso-hide:all}.es-button-border:hover a.es-button,.es-button-border:hover button.es-button{background:#6e46ff!important}.es-button-border:hover{background:#6e46ff!important}td .es-button-border:hover a.es-button-1{background:#6e46ff!important}td .es-button-border-2:hover{background:#6e46ff!important;border-style:solid solid solid solid!important}[data-ogsb] .es-button.es-button-3{padding:10px!important}@media only screen and (max-width:600px){[class=gmail-fix]{display:none!important}.es-adaptive table,.es-left,.es-right{width:100%!important}.es-content,.es-content table,.es-footer,.es-footer table,.es-header,.es-header table{width:100%!important;max-width:600px!important}.es-adapt-td{display:block!important;width:100%!important}.adapt-img{width:100%!important;height:auto!important}table.es-desk-hidden,td.es-desk-hidden,tr.es-desk-hidden{width:auto!important;overflow:visible!important;float:none!important;max-height:inherit!important;line-height:inherit!important}tr.es-desk-hidden{display:table-row!important}table.es-desk-hidden{display:table!important}td.es-desk-menu-hidden{display:table-cell!important}.es-menu td{width:1%!important}.esd-block-html table,table.es-table-not-adapt{width:auto!important}table.es-social{display:inline-block!important}table.es-social td{display:inline-block!important}.es-desk-hidden{display:table-row!important;width:auto!important;overflow:visible!important;max-height:inherit!important}.h-auto{height:auto!important}}</style><body style=\"width:100%;font-family:arial,'helvetica neue',helvetica,sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0\"><div class=es-wrapper-color style=background-color:#f6f6f6><!--[if gte mso 9]><v:background xmlns:v=urn:schemas-microsoft-com:vml fill=t><v:fill type=tile color=#f6f6f6></v:fill></v:background><![endif]--><table cellpadding=0 cellspacing=0 style=\"mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#f6f6f6\"width=100% class=es-wrapper><tr><td style=padding:0;Margin:0 valign=top><table cellpadding=0 cellspacing=0 style=mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0;table-layout:fixed!important;width:100% class=es-content align=center><tr><td style=padding:0;Margin:0 align=center><table cellpadding=0 cellspacing=0 style=mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0;background-color:#fff;width:450px class=es-content-body align=center bgcolor=#ffffff><tr><td style=padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px align=left><table cellpadding=0 cellspacing=0 style=mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0 width=100%><tr><td style=padding:0;Margin:0;width:410px align=center valign=top><table cellpadding=0 cellspacing=0 style=mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0 width=100% role=presentation><tr><td style=padding:0;Margin:0 align=left><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:merriweather,georgia,'times new roman',serif;line-height:36px;color:#333;font-size:24px\"><strong>Linesty</strong></table></table><tr><td style=padding:0;Margin:0;padding-top:15px;padding-left:20px;padding-right:20px align=left><table cellpadding=0 cellspacing=0 style=mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0 width=100%><tr><td style=padding:0;Margin:0;width:410px align=center valign=top><table cellpadding=0 cellspacing=0 style=mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0 width=100% role=presentation><tr><td style=padding:0;Margin:0 align=left><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial,'helvetica neue',helvetica,sans-serif;line-height:21px;color:#333;font-size:14px\">Dear account,<p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial,'helvetica neue',helvetica,sans-serif;line-height:21px;color:#333;font-size:14px\"><br><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial,'helvetica neue',helvetica,sans-serif;line-height:21px;color:#333;font-size:14px\">Please verify your email address by clicking the button below to access your account on our website. If you did not register on our website, you can disregard this message.  </table></table></table></table><table cellpadding=0 cellspacing=0 style=\"mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0;table-layout:fixed!important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top\"class=es-footer align=center><tr><td style=padding:0;Margin:0 align=center><table cellpadding=0 cellspacing=0 style=mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0;background-color:#fff;width:450px class=es-footer-body align=center bgcolor=#ffffff><tr><td style=padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px align=left><table cellpadding=0 cellspacing=0 style=mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0 width=100%><tr><td style=padding:0;Margin:0;width:410px align=center valign=top><table cellpadding=0 cellspacing=0 style=mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0 width=100% role=presentation><tr><td style=padding:0;Margin:0 align=left class=es-m-txt-l><!--[if mso]><a href=\"{$_SERVER['SERVER_NAME']}/account/?confirmation_token=" . $confirmation_token . "\" target=_blank hidden><v:roundrect xmlns:v=urn:schemas-microsoft-com:vml xmlns:w=urn:schemas-microsoft-com:office:word esdevvmlbutton href=\"\"style=height:36px;v-text-anchor:middle;width:180px arcsize=17% stroke=f fillcolor=#7c5cff><w:anchorlock></w:anchorlock><center style='color:#fff;font-family:arial,\"helvetica neue\",helvetica,sans-serif;font-size:12px;font-weight:400;line-height:12px;mso-text-raise:1px'>Verify your email address</center></v:roundrect></a><![endif]--><!--[if !mso]><!-- --> <span class=\"es-button-border es-button-border-2 msohide\"style=border-style:solid;border-color:#2cb543;background:#7c5cff;border-width:0;display:inline-block;border-radius:6px;width:auto;mso-border-alt:10px;mso-hide:all><a class=\"es-button es-button-1\"href=\"{$_SERVER['SERVER_NAME']}/account/?confirmation_token=" . $confirmation_token . "\"style=\"mso-style-priority:100!important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#fff;font-size:14px;display:inline-block;background:#7c5cff;border-radius:6px;font-family:arial,'helvetica neue',helvetica,sans-serif;font-weight:400;font-style:normal;line-height:17px;width:auto;text-align:center;padding:10px;border-color:#7c5cff\"target=_blank>Verify your email address</a> </span><!--<![endif]--></table></table><tr><td style=padding:20px;Margin:0 align=left><table cellpadding=0 cellspacing=0 style=mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0 width=100%><tr><td style=padding:0;Margin:0;width:410px align=center valign=top><table cellpadding=0 cellspacing=0 style=mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse;border-spacing:0 width=100% role=presentation><tr><td style=padding:0;Margin:0 align=left><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial,'helvetica neue',helvetica,sans-serif;line-height:21px;color:#333;font-size:14px\">This account will automatically deleted if not confirmed. <br>Thank you for your cooperation.<p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial,'helvetica neue',helvetica,sans-serif;line-height:21px;color:#333;font-size:14px\">Best regards, Linesty Team<tr><td style=padding:0;Margin:0;padding-top:30px align=center><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial,'helvetica neue',helvetica,sans-serif;line-height:21px;color:#333;font-size:14px\">&#169; Copyright 2023 Linesty</table></table></table></table></table></div>";
        $subject = 'Verify your email address';

        sendMail($email, $subject, $msg);
        
        $response = array(
          'success' => 'Verify sign-up via email link to complete the process'
        );
    }
  }

  sleep(1);
  header('Content-Type: application/json');
  echo json_encode($response);
}