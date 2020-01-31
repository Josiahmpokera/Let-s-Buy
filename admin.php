<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="main-container-dashboard">
        <div class="side-bar-dashboard">
            <h2 style="text-align: center; padding: 10px;">Logo</h2>
            <div class="listing-dashboard">
                <ul>
                    <li><img src="assets/dashboard.png" height="30px" alt=""><a onclick="showDashboard()" id="dashboard" href="#">Dashboard</a></li>
                    <li><img src="assets/product.png" height="30px" alt=""><a onclick="showProduct()" id="product" href="#">Products</a></li>
                    <li><img src="assets/order.png" height="30px" alt=""><a id="order" href="#">Order</a></li>
                    <li> <img src="assets/setting.png"  height="30px" alt=""><a id="setting" href="#">Setting</a></li>
                </ul>
            </div>
        </div>
        <div class="main-bar" id="homeDashboard" style="display: none;">
            <div class="mm" id="main-bar" >
                <div class="top-dashboard">
                    <h2>Add product</h2>
                    <img style="margin-top: 18px; margin-right: 10px;" src="assets/cart.png" height="44px" alt="">
                </div>
    
                <!---Design the Form for Admin Panel-->
                <div class="form-dashboard">
                    <?php require_once 'connectAdmin.php'  ?>
                    <form name="adminForm" action="connectAdmin.php" method="POST">
                <p>Product Name</p><input placeholder="eg. " name="pname" required type="text"> <br>
                <p>Price:</p><input placeholder="eg. 32,00" name="price" required type="text"> <br>
                <p>Product Category</p><select required name="category" id="">
                    <option value="Clothers">Clothers</option>
                    <option value="Shoes">Shoes</option>
                    <option value="Watches">Watches</option>
                    <option value="Accesories">Accesories</option>
                </select> <br>
                <p>Images</p><input name="photo"  required type="file" value="Upload Image"> <br>
                <p>Product Description</p>
                <textarea name="description" placeholder="Description"  required name="description" id="" cols="68" rows="05"></textarea> <br>
                <input type="submit" onclick="show()"  name="submit" value="Add Product">
                </form>
                </div>
            </div>
        </div>

        <!---The Overview-->
        <div class="main-bar" id="overview">
            <div class="mm" id="main-bar" >
                <div class="top-dashboard">
                    <h2>Over View</h2>
                    <img style="margin-top: 18px; margin-right: 10px;" src="assets/cart.png" height="44px" alt="">
                </div>
    <!---Design Overview Container of Data-->
                <div class="data-container">
                    <div class="product">
                        <h2 style="background-color: rgb(207, 35, 93);;">Products</h2>
                        <h1 style="padding: 30px; font-size: 50px">89.03%</h1>
                    </div>
                    <div class="sales">
                        <h2 style="background-color: rgb(11, 146, 83);">Sales</h2>
                        <h1 style="padding: 30px; font-size: 50px">90.4%</h1>
                    </div>
                </div>
        </div>
    </div>
    <script>

    function show(){
        alert("The Item Added");
    }

    var dashboard = document.getElementById('dashboard');
    var product = document.getElementById('product');
    var order = document.getElementById('order');
    var setting = document.getElementById('setting');

        var productDashboard = document.getElementById('homeDashboard');
        var homeDash = document.getElementById('overview');
    //Initialize Clicked Button
     function showDashboard(){
        productDashboard.style.display = 'none';
        homeDash.style.display = 'inline-block';
     }

     function showProduct(){
         homeDash.style.display = 'none';
         productDashboard.style.display = 'inline-block';
     }
    
    </script>
</body>
</html>