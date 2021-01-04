<h1>hello world</h1>
<button onclick="getOrderID()">
    Load
</button>
<div id="g"> 





</div>
<script>


    function getOrderID () {

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {

        document.getElementById("g").innerHTML = this.response;
    }
};
//alert("ljd");
xhttp.open("GET", "./abc", true);

xhttp.send();


}
     
    </script>