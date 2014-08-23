<?

	class Session {
	
		public $data;
		
		function Session ($session_data) {
			$this->data = $session_data;
		}
		
		public static function restrict ($checkfor) {
			require_once('library/class.Router.php');
			$router=new Router();
			session_start();
			
			if(isset($checkfor)){

				 if($checkfor=='open') { 

					if(isset($_SESSION[DEFAULT_SESSION_ID_INDEX])) { 
						$user_id=$_SESSION[DEFAULT_SESSION_ID_INDICE]; //The main session id pulled by the user
						$session_started=True;
					}

				 }

				 if($checkfor=='restrict') { 

					if(isset($_SESSION[DEFAULT_SESSION_ID_INDEX])) {
						$user_id=$_SESSION['user_id'];
						$session_started=True;

					}else{
						$router->sdirect('forcelogin');
					}
	
				}elseif($checkfor=='notforloggedin') { 


					if(isset($_SESSION[DEFAULT_SESSION_ID_INDEX])) { 

						$router->sdirect('loggedin');
					}
		
				}elseif($checkfor=="none"){
					continue;
				}
			}

		}	
	
		public function start ($session_data=null) {
			session_start();
			if(!empty($session_data)){ $this->data = $session_data; }
				foreach($this->data AS $key=>$value) {
					$_SESSION[$key] = $value;
				}
		}
		
		public function stop () {
			session_destroy();
		}
	
	}

?>