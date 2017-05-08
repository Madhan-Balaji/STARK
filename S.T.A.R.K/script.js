function showAddConnection(){
			document.getElementById('add-btn').style.display = "none";
			document.getElementById('add').style.display = "";
}

function addConnection(){
			var net = document.getElementById("net").value;
			var num = document.getElementById("num").value;
			var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	            	if(this.responseText == "ok"){
	            		loadConnection();	            		
	            	}else{
	            		alert("The number already exist in an account");
	            	}
	            }
	        }
	        xmlhttp.open("GET", "add_connection.php?n="+net+"&q="+num, true);
	        xmlhttp.send();
	   }

function numbers(str){
    		var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("numz").innerHTML = this.responseText;
	            }
	        }
	        xmlhttp.open("GET", "getnumbers.php?q="+str, true);
	        xmlhttp.send();
    	}

    	function savePrime(){
    		var cn = document.getElementById('numz').value;
    		var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                if(this.responseText = "ok"){
	                	loadConnection();
	                	showcnt();
	                }
	            }
	        }
	        xmlhttp.open("GET", "change_prime.php?q="+cn, true);
	        xmlhttp.send();
    	}
    	

    	function loadConnection(){
    		var xmlhttp = new XMLHttpRequest();
    		xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("contents").innerHTML = this.responseText;
	                document.getElementById('add-btn').style.display = "";
	            }
	        }
	        xmlhttp.open("GET", "load_connection.php", true);
	        xmlhttp.send();
    	}

    	loadConnection();
    	
    	document.getElementById('cprim').style.display = "none";
    	
    	function changePrime(){
    		document.getElementById('cprim').style.display = "";
    		document.getElementById('cnts').style.display = "none";
    	}


    	function showcnt(){
    		document.getElementById('cnts').style.display = "";
    		document.getElementById('cprim').style.display = "none";
    	}

function delNum(str){
    		var xmlhttp = new XMLHttpRequest();
    		xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                if (this.responseText = "ok") {
	                	loadConnection();
	                } else {
	                	alert("We can't delet your prime number");
	                }
	            }
	        };
	        xmlhttp.open("GET", "delet_number.php", true);
	        xmlhttp.send();
}