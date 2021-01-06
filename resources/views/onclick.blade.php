<h1>My world</h1>
<button onclick="myfunction()">load</button>
<div id ="quark">
</div>
<script>



function myfunction () {

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {

        document.getElementById("quark").innerHTML = this.response;
    }
};
//alert("ljd");
xhttp.open("GET", "./osama/", true);

xhttp.send();


}






</script>