<h1>hello world</h1>
<button onclick="myFunction()">
    Load
</button>
<div id="g"> 





</div>
<script>
function myFunction () {

    var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {

         document.getElementById("g").innerHTML = this.response;
        //alert(this.response);
    }
};
//alert("ljd");
xhttp.open("GET", "./getOrderId/", true);

xhttp.send();


}
</script>