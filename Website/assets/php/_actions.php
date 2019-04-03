<?php 
/* --- Action Switch --- */

    $action = '';

    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    } else if(isset($_POST['action'])) {
        $action = $_POST['action'];
    }

    switch($action) {
		case 'login':
			Connect();
			Login($_POST['user'], $_POST['pass']);
			Disconnect();
			break;
		case 'logout':
			Logout();
			break;
		case 'register':
			Connect();
			Register($_POST['username'], $_POST['password'], $_POST['passwordconfirm'], $_POST['email']);
			Disconnect();
			break;
		case 'changepassword':
			Connect();
			ChangePassword($_POST['newpassword'], $_POST['newpasswordconfirm'], $_POST['oldpassword']);
			Disconnect();
			break;
		case 'changeemail':
			Connect();
			ChangeEmail($_POST['newemail'], $_POST['newemailconfirm'], $_POST['passwordemail']);
			Disconnect();
			break;
		default:
			ClearState();
	}
?>