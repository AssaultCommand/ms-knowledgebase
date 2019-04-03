<?php

/*  Username($uid)
*   Get the username by User ID
*
*     $uid (INT) - The user's ID
*/
  function Username($uid)
  {
    Connect();
    $uid = mysqli_real_escape_string($GLOBALS['connection'], $uid);
    $sql = 'SELECT * FROM users WHERE uid = "'.$uid.'"';
    $result = mysqli_query($GLOBALS['connection'], $sql);
    $db_field = mysqli_fetch_assoc($result);
    return $db_field['username'];
    Disconnect();
  }

/*  Avatar($uid, $size)
*   Get the user's Avatar from Gravatar by User ID
*
*     $uid (INT) - The user's ID
*     $size (INT) - The avatar size in px
*/
  function Avatar($uid, $size)
  {
    Connect();
    $uid = mysqli_real_escape_string($GLOBALS['connection'], $uid);
    $sql = 'SELECT * FROM users WHERE uid = "'.$uid.'"';
    $result = mysqli_query($GLOBALS['connection'], $sql);
    $db_field = mysqli_fetch_assoc($result);

    $hash = md5( strtolower(trim($db_field['email'])));
    return 'https://www.gravatar.com/avatar/' . $hash . '?d=https%3A%2F%2Farmorwatcher.com%2Fimages%2Favatar%2Fdefaultavatar.png&s=' . $size;
    /*return '<img class="' . $classes . '" src="images/avatar/'.$uid.'.png" width="'.$size.'" height="'.$size.'" />';*/
    Disconnect();
  }

/*  getAge($dob)
*   Get the an age based on a Date Of Birth
*
*     $dob (DATE) - The date of birth.
*/
  function getAge($dob)
  {
    list($y,$m,$d) = explode('-', $dob);

    if (($m = (date('m') - $m)) < 0)
    {
      $y++;
    }
    else if ($m == 0 && date('d') - $d < 0)
    {
      $y++;
    }

    return date('Y') - $y;
  }
?>
