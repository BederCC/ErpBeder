<?php namespace Config;

	class Auth
	{
		//nombres,cargo,id_area
		static function start()
		{
			@session_start();
		}

		static function get_session($sesion="sesion")
		{
			return $_SESSION[$sesion];
		}

		static function exist($sesion="sesion")
		{
			if (isset($_SESSION[$sesion]))
				return true;
			return false;
		}	

		static function set_session($obj,$ses="sesion")
		{
			$_SESSION[$ses]=$obj;
		}


		static function getuser($cargo,$ses="sesion")
		{
			if ($_SESSION[$ses][1]==$cargo)
				return true;
			return false;
		}

		static function getusername($ses="sesion")
		{
			return $_SESSION[$ses][0];
				
		}		

		static function getareaId($ses="sesion")
		{
			return $_SESSION[$ses][2];
		}

		static function getuserId($ses="sesion")
		{
			return $_SESSION[$ses][3];
		}

		static function destroy()
		{
			@session_destroy();
		}
	}

?>
