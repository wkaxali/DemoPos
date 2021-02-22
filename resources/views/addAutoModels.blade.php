<html>
<head>
</head>
<body>
    <h2>Add a Auto Model
    </h2>

<div class="container">
    <p>Company</p>
    <input type="text" id="Company" required>
    <p>Model Name</p>
    <input type="text" id="ModelName" required>
    <p>Product category</p>
    <input type="text" id="ProductCategory" required>
    <p>Price</p>
    <input type="text" id="Price" required>
    <br>
    <button id="addUsers" onclick="addAutoModels()">Add AutoModel</button>
</div>
<script>
    function addAutoModels() {

    var comp = document.getElementById("Company").value; 
    var model = document.getElementById("ModelName").value;
    var product = document.getElementById("ProductCategory").value;
    var price = document.getElementById("Price").value;
    var add = [ comp, model, product, price];

    var AA = JSON.stringify(add);
    alert(AA);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("AutoModel " + this.responseText + " is Added");
 

                }
            };
            
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./addAutoModels/" + AA, true);
            xhttp.send();
            
        }
            
        
</script>
</body>
</html>