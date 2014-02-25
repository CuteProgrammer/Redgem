<?
	class Router {
		
		private $routes;
		private $environments;
		private $env_path;
		
		function __construct ($environment){
		
				require '../includes/root/environments.r';
			$this->environments=$env;
				require '../includes/root/routes.r';
			$this->routes=$rou;
			
			if(in_array($environment,$this->environments)){
				$this->env_path=$this->routes[$environment]['path'];
			}else{
				die("Not a valid environment.");
			}
		
		}
		
		//contrary to some belief of this function, all it does is simply re-route (redirect) the request to a page that another function using
		// this specifies
		function sdirect ($key){
			header("Location:".ROOT."/". $this->routes[$key]['path'] .");
		}
	
	
	}

?>