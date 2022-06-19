<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="../style/style-user.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2> User Management <span><i class="fa fa-home" aria-hidden="true"><a href="#">Home</a></i></span></h2>
            <hr>
        </div>
        <div class="decentralization">
            <div class="header-2">
                <select name="" id="">
                    <option value="">Set Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Editor">Editor</option>
                    <option value="User">User</option>
                </select>
                <span><input class="filter-1" type="radio" name="filter" >All</span>
                <span><input class="filter-1" type="radio" name="filter" >Deleted</span><span>
                    <div class="filter-2">
                        <select name="" id="">
                            <option value="#">Filter By Role</option>
                            <option value="Admin">Admin</option>
                            <option value="Editor">Editor</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                </span>
                <span>
                    <div class="search">
                        <input type="text" name="" id="" placeholder="User Name ..."><button>Search</button>
                    </div>
                </span>
            </div>
        </div>
        <div class="list">
            <table>
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Role</th>
                        <th colspan="2">Manipulation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>1</td>
                        <td>Tanwg ba tuan anh</td>
                        <td>anh@gmail.com</td>
                        <td>2342423423423</td>
                        <td>Admin</td>
                        <td class="edit"><a href="">Edit</a></td>
                        <td class="delete"><a href="">Delete</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>1</td>
                        <td>Tanwg ba tuan anh</td>
                        <td>anh@gmail.com</td>
                        <td>2342423423423</td>
                        <td>Admin</td>
                        <td class="edit"><a href="">Edit</a></td>
                        <td class="delete"><a href="">Delete</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>1</td>
                        <td>Tanwg ba tuan anh</td>
                        <td>anh@gmail.com</td>
                        <td>2342423423423</td>
                        <td>Admin</td>
                        <td class="edit"><a href="">Edit</a></td>
                        <td class="delete"><a href="">Delete</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>1</td>
                        <td>Tanwg ba tuan anh</td>
                        <td>anh@gmail.com</td>
                        <td>2342423423423</td>
                        <td>Admin</td>
                        <td class="edit"><a href="">Edit</a></td>
                        <td class="delete"><a href="">Delete</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>1</td>
                        <td>Tanwg ba tuan anh</td>
                        <td>anh@gmail.com</td>
                        <td>2342423423423</td>
                        <td>Admin</td>
                        <td class="edit"><a href="">Edit</a></td>
                        <td class="delete"><a href="">Delete</a></td>
                    </tr>   
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>