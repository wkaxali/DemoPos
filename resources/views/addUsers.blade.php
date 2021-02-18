<html>
<head>
</head>
<body>
    <h2>Add a user
    </h2>

<div class="container">
    <p>Username</p>
    <input type="text" id="UserName" required>
    <p>Password</p>
    <input type="password" id="Password" required>
    <p>Designation (admin/guest)</p>
    <input type="text" id="designation" required>
    <br>
    <button id="addUsers" onclick="addUsers()">Add User</button>

</div>
<script>
    function addUsers() {

    
    var Username = document.getElementById("UserName").value; 
    var password = document.getElementById("Password").value;
    var designation = document.getElementById("designation").value;
  
    var addUsers = [ Username, password, designation];

    var AU = JSON.stringify(addUsers);
    alert(AU);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("User " + this.responseText + " is Added");


                }
            };
            
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./addUsers/" + AU, true);
            xhttp.send();
            
        }
            
        
</script>
</body>
</html>