<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="shortcut icon" href="img/logo3.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php


if (isset($_POST['btn'])){
    saveinfoData($_POST);
}
function saveinfoData($data){
    $link=mysqli_connect('localhost','root','','regi');
if($link){
     
}else{
     echo 'database is not connect';
}
    $sql="INSERT INTO registi(fname,lname,email,phone,password,cpassword)VALUES
     ('$data[fname]','$data[lname]','$data[email]','$data[phone]','$data[password]','$data[cpassword]')";
     mysqli_query($link,$sql);

}

    ?>


<section id="body">
    <div class="form">
            <h1>Student registration form</h1>
            <lavel class="logo"><img src="img/logo3.png" height="130px"></lavel>
            <form action="" method='post' enctype="multipart/form-data">
            <div class="input">
                <p>Fast Name :<br><input type="text" name='fname' placeholder="Fast Name"></p>
                <p>Last Name :<br><input type="text" name='lname' placeholder="Fast Name"></p>
                <p>E-mail:<br><input type="email" name='email' placeholder="nazmul1234@gmail.com"></p>
                <p>Phone Number :<br><input type="number" name='phone' placeholder="phone number"></p>
                <p>New Password:<br><input type="password" name='password' placeholder="New password"></p>
                <p>Confrom Password :<br><input type="password" name='cpassword' placeholder="Confrom password"></p>
                
            </div>
            <p><input type="submit" class="save" value="SAVE" name='btn'></p>
        </form>
    </div>
</section>



    
</body>
</html>