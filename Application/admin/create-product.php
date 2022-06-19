<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style-create.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2> Create New Product <span><i class="fa fa-home" aria-hidden="true"><a href="#">Home</a></i></span></h2>
            <hr>
        </div>
        <div class="buttons">
            <button><i class="fa fa-plus" aria-hidden="true"></i> Thêm danh mục</button>
            <button><i class="fa fa-plus" aria-hidden="true"></i> Thêm brand</button>
            <button><i class="fa fa-plus" aria-hidden="true"></i> Thêm status</button>
            <button><i class="fa fa-plus" aria-hidden="true"></i> Thêm thể loại</button>
        </div>
        <hr>
        <div class="add">
            <div class="col">
                <div class="add-content-left">
                    <label for="">Product ID:</label>
                    <input type="text" name="" id="">
                </div>
                <div class="add-content-left">
                    <label for="">Product Name:</label>
                    <input type="text" name="" id="">
                </div>
                <div class="add-content-left">
                    <label for="">Amount:</label>
                    <input type="text" name="" id="">
                </div>
                <div class="add-content-left">
                    <label for="">Price:</label>
                    <input type="text" name="" id="">
                </div>
            </div>
            <div class="col">
                <div class="add-content-mid">
                    <label for="">Describe:</label>
                    <textarea name="" id="" cols="30" rows="10" style="width:100%;height:100%;"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="add-content-right">
                    <label for="">Image:</label>
                    <button>File Image</button>
                </div>
                <div class="add-content-right">
                    <label for="">Status:</label>
                    <select name="" id="">
                        <option value="">Status</option>
                        <option value="">Còn Hàng</option>
                        <option value="">Hết Hàng</option>
                    </select>
                </div>
                <div class="add-content-right">
                    <label for="">Category:</label>
                    <select name="" id="">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="add-content-right">
                    <label for="">Brand:</label>
                    <select name="" id="">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="add-footer">
            <button  type="submit">ADD <i class="fa fa-check" aria-hidden="true"></i></button>
            <button type="reset">Cancel <i class="fa fa-times" aria-hidden="true"></i></button>
        </div>
    </div>
</body>
</html>