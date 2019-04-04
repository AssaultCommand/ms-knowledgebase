<?php
  function SessionCheck()
  {
    if(!isset($_SESSION['logged']))
    {
      ClearSession();
      $_SESSION['logged'] = 'false';
    }
  }

  function ClearState()
  {
    $_SESSION['state'] = '';
    $_SESSION['status'] = '';
  }

  function ClearSession()
  {
    session_destroy();
    session_start();
  }

  function LoggedIn()
  {
    if($_SESSION['logged'] == 'true')
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  function PermissionCheck($ranks)
  {
    Connect();
    $uid = mysqli_real_escape_string($GLOBALS['connection'], $_SESSION['uid']);
    $sql = 'SELECT * FROM users WHERE id = "'.$uid.'"';
    $result = mysqli_query($GLOBALS['connection'], $sql);
    $db_field = mysqli_fetch_assoc($result);

    if(in_array($db_field['rank'], $ranks))
    {
      return true;
    }
    else
    {
      return false;
    }
    Disconnect();
  }
?>
