app.service('AuthenticationService', ["$http", "$state", function($http, $state){
	var self = this;
	self.checkToken = function(token){
		var data = {token: token};
		$http.post("endpoints/checkToken.php", data).success(function(response){
			if (response === "unauthorized"){
				console.log("Logged out");
				$state.go("login")
			} else {
				console.log("Logged In");
				return response;
			}
		}).error(function(error){
			$state.go("login")
		})
		
	}

}]);