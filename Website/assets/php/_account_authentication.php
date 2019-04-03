<?php
/*  Login($username, $password)
*   Logs the user in provided they use the right password.
*/
  function Login($username = "", $password = "")
  {
    if($_SESSION['logged'] == 'false')
    {
      if($username != "" && $password != "")
      {
        $username = mysqli_real_escape_string($GLOBALS['connection'], $username);
        $sql = 'SELECT * FROM users WHERE username LIKE "'.$username.'"';
        $result = mysqli_query($GLOBALS['connection'], $sql);
        if(mysqli_num_rows($result) != 0)
        {
          $db_field = mysqli_fetch_assoc($result);
          if( PasswordValidate($password, $db_field['password']) )
          {
            if( $db_field['rank'] != '0' )
            {
                $_SESSION['username'] = $username;
                $_SESSION['uid'] = $db_field['uid'];
                $_SESSION['avatar'] = 'uploads/profiles/avatar/'.$db_field['uid'].'.png';
                $_SESSION['rank'] = $db_field['rank'];
                $_SESSION['logged'] = 'true';
                $_SESSION['ip'] = getenv('REMOTE_ADDR');
                $_SESSION['state'] = 'success';
                $_SESSION['status'] = '<b>Login succesful:</b> Thank you for logging in, '.$_SESSION['username'].'!';
                if(strpos($_SERVER["REQUEST_URI"], 'login') !== FALSE)
                {
                  $_SESSION['status'] .= '<script>$(document).ready(function(){setTimeout(function(){window.location = "home";}, 5000);});</script>';
                }
                return true;
            }
            else
            {
              ClearSession();
              $_SESSION['logged'] = 'false';
              $_SESSION['state'] = 'error';
              $_SESSION['status'] = '<b>Bad Login:</b> Insufficient permissions.';
            }
          }
          else
          {
            ClearSession();
            $_SESSION['logged'] = 'false';
            $_SESSION['state'] = 'error';
            $_SESSION['status'] = '<b>Bad Login:</b> Username or password is invalid.';
          }
        }
        else
        {
          ClearSession();
          $_SESSION['logged'] = 'false';
          $_SESSION['state'] = 'error';
          $_SESSION['status'] = '<b>Bad Login:</b> Username or password is invalid.';
        }
      }
      else
      {
        ClearSession();
        $_SESSION['logged'] = 'false';
        $_SESSION['state'] = 'error';
        $_SESSION['status'] = '<b>Bad Login:</b> Both fields need to be filled in!';
      }
    }
    else
    {
      $_SESSION['state'] = 'error';
      $_SESSION['status'] = '<b>Bad Login:</b> You need to be signed out before you can log back in!';
    }
  }

/*  Logout()
*   Logs the user out.
*/
  function Logout()
  {
    ClearSession();
    $_SESSION['logged'] = 'false';
    $_SESSION['state'] = 'success';
    $_SESSION['status'] = '<b>Logout succesful:</b> You have been logged out.';
  }

/*  Register($username, $password, $passwordconfirm, $email)
*   Registers a new user account with the given input.
*
*     $username (STRING) - The user's chosen screenname
*     $password (STRING) - The user's chosen password
*     $paddwordconfirm (STRING) - To verify the user entered the password right the first time
*     $email (STRING) - Used to contact the user at and to recover the account.
*/

  function Register($username = "", $password = "", $passwordconfirm = "", $email = "")
  {
    if($username != "" && $email != "" && $securitya != "" && $password != "" && $passwordconfirm != "")
    {
      $username = mysqli_real_escape_string($GLOBALS['connection'], $username);
      $email = mysqli_real_escape_string($GLOBALS['connection'], $email);
      $sql = 'SELECT * FROM users WHERE username LIKE "'.$username.'" OR email LIKE "'.$email.'"';
      $result = mysqli_query($GLOBALS['connection'], $sql);
      $userexists = mysqli_num_rows($result);
      $db_field = mysqli_fetch_assoc($result);
      if($password == $passwordconfirm && strlen($password) >= 6 && strlen($password) <= 20 )
      {
        if($userexists == 0 )
        {
          if(strlen($username) >= 4 && strlen($username) <= 20)
          {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
              $password = PasswordNew($password);
              $securityq = mysqli_real_escape_string($GLOBALS['connection'], $securityq);
              $securitya = RecoveryNew(mysqli_real_escape_string($GLOBALS['connection'], $securitya));
              $randomcode = ConfirmCode(10);
              $sql = 'INSERT INTO users (username, password, email, securityq, securitya, verification) VALUES ("'.$username.'", "'.$password.'","'.$email.'", '.$securityq.', "'.$securitya.'", "'.$randomcode.'")';
              mysqli_query($GLOBALS['connection'], $sql);

              $sql = 'SELECT * FROM users WHERE username = "'.$username.'"';
              $result = mysqli_query($GLOBALS['connection'],$sql);
              $db_field = mysqli_fetch_assoc($result);

              EmailConfirmSender($email, $username, $db_field['uid'], $randomcode);

              ClearSession();
              $_SESSION['logged'] = 'false';
              $_SESSION['state'] = 'success';
              $_SESSION['status'] .= '<b>Registration succesful:</b> Please check your email to verify your account. <br />It could be in your spam folder, so please check that too.';
            }
            else
            {
              ClearSession();
              $_SESSION['logged'] = 'false';
              $_SESSION['state'] = 'error';
              $_SESSION['status'] = '<b>Registration failed:</b> Not a valid email!';
            }
          }
          else
          {
            ClearSession();
            $_SESSION['logged'] = 'false';
            $_SESSION['state'] = 'error';
            $_SESSION['status'] = '<b>Registration failed:</b> Bad username, it needs to be between 4 and 20 characters.';
          }
        }
        else
        {
          if($username == $db_field['username'])
          {
            ClearSession();
            $_SESSION['logged'] = 'false';
            $_SESSION['state'] = 'error';
            $_SESSION['status'] = '<b>Registration failed:</b> This username already exists!';
          }
          else if($email == $db_field['email'])
          {
            ClearSession();
            $_SESSION['logged'] = 'false';
            $_SESSION['state'] = 'error';
            $_SESSION['status'] = '<b>Registration failed:</b> An account with that email already exists!';
          }
        }
      }
      else
      {
        ClearSession();
        $_SESSION['logged'] = 'false';
        $_SESSION['state'] = 'error';
        $_SESSION['status'] = '<b>Registration failed:</b> Passwords do not match or are too long or too short, it needs to be between 6 and 20 characters.';
      }
    }
    else
    {
      ClearSession();
      $_SESSION['logged'] = 'false';
      $_SESSION['state'] = 'error';
      $_SESSION['status'] = '<b>Registration failed:</b> One or more fields were not filled in!';
    }
  }

  function EmailConfirm($uid, $verificationcode)
  {
    $uid = mysqli_real_escape_string($GLOBALS['connection'], $uid);
    $sql = 'SELECT * FROM users WHERE uid = '.$uid;
    $result = mysqli_query($GLOBALS['connection'], $sql);
    $userexists = mysqli_num_rows($result);

    if($userexists != 0)
    {
      $db_field = mysqli_fetch_assoc($result);
      if($verificationcode == $db_field['verification'])
      {
        $randomcode = ConfirmCode(10);
        $sql = 'UPDATE users SET activated = 1, verification = "'.$randomcode.'" WHERE uid = '.$uid;
        if (mysqli_query($GLOBALS['connection'],$sql))
        {
          $_SESSION['state'] = 'success';
          $_SESSION['status'] = '<b>Verification succesful:</b> Your email has been verified, you can now log in with this account.';
        }
        else
        {
          $_SESSION['state'] = 'error';
          $_SESSION['status'] = '<b>Verification failed:</b> Couldn\'t update user permissions... please contact the site administrator!';
        }
      }
      else
      {
        $_SESSION['state'] = 'error';
        $_SESSION['status'] = '<b>Verification failed:</b> Incorrect verification string!';
      }
    }
    else
    {
      $_SESSION['state'] = 'error';
      $_SESSION['status'] = '<b>Verification failed:</b> The specified user does not appear to exist.';
    }
  }
?>
