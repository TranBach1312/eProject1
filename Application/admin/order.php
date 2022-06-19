<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="../style/style-order.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2> Order Management <span><i class="fa fa-home" aria-hidden="true"><a href="#">Home</a></i></span></h2>
            <hr>
        </div>
        <div class="rows">
        <div class="rows-left">
            <div class="header-2">
            <h3>Sell</h3>
            <hr>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th colspan="2">Manipulation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                        <td>lamborghini</td>
                        <td><img class="image" src="https://vcdn1-dulich.vnecdn.net/2021/07/16/8-1626444967.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=GfgGn4dNuKZexy1BGkAUNA" alt=""></td>
                        <td>34</td>         
                        <td>1.000.000$</td>
                        <td class="edit"><a href="">Edit</a></td>
                        <td class="delete"><a href="">Delete</a></td>
                    </tr>
                    <tr>
                    <td>1</td>
                        <td>lamborghini</td>
                        <td><img class="image" src="https://vcdn1-dulich.vnecdn.net/2021/07/16/8-1626444967.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=GfgGn4dNuKZexy1BGkAUNA" alt=""></td>
                        <td>34</td>         
                        <td>1.000.000$</td>
                        <td class="edit"><a href="">Edit</a></td>
                        <td class="delete"><a href="">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="rows-right">
            <div class="header-3">
                <h3>Customer Information</h3>
            <hr>
            </div>
            <div class="custom">
                <label for="">Search By Customer Name:</label>
                <input type="text" name="" id="" placeholder="Customer Name ...">
            </div>
            <div class="custom">
                <label for="">Note:</label>
                <textarea name="" id="" cols="30" rows="8" style="width:100%;" placeholder="Note ..."></textarea>
            </div>
            <div class="custom">
                <label for="">Payments:</label>
                <select name="" id="">
                    <option value="">Payment Methods</option>
                    <option value="Telegraphic Transfer Remittance">TT: Telegraphic Transfer Remittance</option>
                    <option value="Mail Transfer Remittance">MTR: Mail Transfer Remittance</option>
                    <option value=" Cash Against Document">C.A.D: Cash Against Document</option>
                    <option value="Collection">Collection</option>
                </select>
            </div>
            <div class="custom">
                <label for="">Total Money:</label>
                <input type="text" name="" id="">
            </div>
            <div class="custom">
                <label for="">Discount(%):</label>
                <input type="text" name="" id="">
            </div>
            <div class="custom">
                <label for="">The Total Amount Payable:</label>
                <input type="text" name="" id="">
            </div>
            <div class="custom">
                <label for="">Money Paid By The Customer:</label>
                <input type="text" name="" id="">
            </div>
            <div class="footer">
                <button class="footer-1"><i class="fas fa-save"></i> Save Your Order</button>
                <button class="footer-2"><i class="fas fa-sign-out-alt    "></i> Exit</button>
            </div>
        </div>
        </div>
    </div>
</body>

</html>