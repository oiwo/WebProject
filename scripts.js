
  function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    else{
        alert("Good!");	}
  }



function showCD(str) {
            if (str == ""){
               document.getElementById("txtHint").innerHTML = "";
               return;
            }
            if (window.XMLHttpRequest) {
               xmlhttp = new XMLHttpRequest();
            }else {
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
               }
            }
            xmlhttp.open("GET","getcourse.php?q="+str,true);
            xmlhttp.send();
         }
