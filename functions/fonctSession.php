<?php
function verfiSession()
{
	if(isset($_SESSION['info']))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function addSession($id,$username,$email)
{

	if(!verfiSession())
	{
		$_SESSION['info']=Array();
		$_SESSION['info']['id']=$id;
		$_SESSION['info']['username']=$username;
		$_SESSION['info']['email']=$email;
	}
}

function delSession()
{
	if(verfiSession())
	{
		unset($_SESSION['info']);
		session_destroy();
	}
}

?>