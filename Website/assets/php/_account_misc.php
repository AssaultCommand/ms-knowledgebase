<?php
  function PasswordNew($password, $cost=10)
  {
    $salt = substr(base64_encode(openssl_random_pseudo_bytes(17)),0,22);
    $salt = str_replace("+",".",$salt);
    $param = '$'.implode('$',array("2y", str_pad($cost,2,"0",STR_PAD_LEFT), $salt));
    return crypt($password,$param);
  }

  function PasswordValidate($password, $hash)
  {
    return crypt($password, $hash) == $hash;
  }

  function RecoveryNew($recovery, $cost=10)
  {
    return PasswordNew($password, $cost);
  }

  function RecoveryValidate($recovery, $hash)
  {
    $recovery = strtolower($recovery);
    return PasswordValidate($recovery, $hash);
  }

  function ConfirmCode($length = 10)
  {
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $size = strlen($characters);
    for($i = 0;$i < $length;$i++)
    {
      $string .= $characters[rand( 0, $size - 1 )];
    }
    return $string;
  }
?>
