<h1>Hello World</h1>


<button onclick="myFunction()">Load</button>


    <div id="quark">

    </div>

<script>
function myFunction(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
    
            document.getElementById("quark").innerHTML = this.response;
        }
    };
    //alert("ljd");
    xhttp.open("GET", "./getTransaction/", true);
    
    xhttp.send();
    }
    </script>