var mainApp = {}
var firebase = app_firebase;
var uid = null;
	firebase.auth().onAuthStateChanged(function(user){
		if(user){
			uid = user.uid;
			console.log(uid);
		}
		else{
			uid = null;
			location.replace("../login_firebase.php");
		}
	});

	function logOut(){
		firebase.auth().signOut();
	}

mainApp.logOut = logOut;
