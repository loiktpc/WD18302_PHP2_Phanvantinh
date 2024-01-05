<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Lab 1.3 Get Email </h1>
    <h3>PC05314 Kim Thanh Loi</h3> -->

    
   
    <h1>Lab1.3</h1>
    <ul>
        <li>tìm kiếm thông tin email dưới đây:</li>
        <li>kimloi@gmail.com</li>
        <li>quang@gmail.com</li>
    </ul>
    <form  method="post">
        <?= $user['firstname'] ?? "" ?>  <?= $user['lastname'] ?? "" ?>
        <label for="">tìm kiếm email trong db</label>
        <br>
        <input type="email" name="email" id="email">
        <button type="submit">xác nhận</button>
        <?php if(empty($user['firstname'])){
            echo "ko có thông tin email này" ;
        } ?> 
    </form>
</body>
</html>