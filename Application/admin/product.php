<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../style/style-product.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2> Product Management <span><i class="fa fa-home" aria-hidden="true"><a href="#">Home</a></i></span></h2>
            <span>
                <h4 id="time"></h4>
            </span>
             <hr>
        </div>
        <div class="content">
        <div class="buttons">
            <button class="buttons-1"><a href="create-product.php"><i class="fa fa-plus" aria-hidden="true"></i> Create New Product</a></button>
            <button class="buttons-2"><i class="fa fa-download" aria-hidden="true"></i> Dowload List</button>
            <button class="buttons-3"><i class="fa fa-print" aria-hidden="true"></i> Print List</button>
            <button class="buttons-4"><i class="fas fa-trash-alt    "></i> Delete All</button>
            <span class="search">
                <input type="text" name="" id=""><button class="buttons-5" >Search</button>
            </span>
        </div>
        <hr>
        <div class="list">
            <table>
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th colspan="2">Manipulation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>1</td>
                        <td>lamborghini</td>
                        <td><img class="image" src="https://vcdn1-dulich.vnecdn.net/2021/07/16/8-1626444967.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=GfgGn4dNuKZexy1BGkAUNA" alt=""></td>
                        <td>34</td>
                        <td>còn hàng</td>
                        <td>1.000.000$</td>
                        <td>SỊn</td>
                        <td class="edit"><a href="">Edit</a></td>
                        <td class="delete"><a href="">Delete</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>1</td>
                        <td>lamborghini</td>
                        <td><img class="image" src="https://vcdn1-dulich.vnecdn.net/2021/07/16/8-1626444967.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=GfgGn4dNuKZexy1BGkAUNA" alt=""></td>
                        <td>34</td>
                        <td>còn hàng</td>
                        <td>1.000.000$</td>
                        <td>SỊn</td>
                        <td class="edit"><a href="">Edit</a></td>
                        <td class="delete"><a href="">Delete</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>1</td>
                        <td>lamborghini</td>
                        <td><img class="image" src="https://vcdn1-dulich.vnecdn.net/2021/07/16/8-1626444967.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=GfgGn4dNuKZexy1BGkAUNA" alt=""></td>
                        <td>34</td>
                        <td>còn hàng</td>
                        <td>1.000.000$</td>
                        <td>SỊn</td>
                        <td class="edit"><a href="">Edit</a></td>
                        <td class="delete"><a href="">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <script>
        var today = new Date();
        var date = today.getMonth() + 1 + '/' + today.getDate() + '/' + today.getFullYear();
        var time = today.getHours() + ":" + today.getMinutes();
        var dateTime = date + ' ' + time;
        document.getElementById("time").innerHTML = dateTime;
    </script>
</body>

</html>