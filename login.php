<?php
include "dbcon.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
   
    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: admin.php');
        }else{
            echo "<script>alert('Tên người dùng hoặc mật khẩu không hợp lệ!');</script>";

            
        }

    }

}
?>
<html>
    <head>
        <title>Create simple login page with PHP and MySQL</title>
     
    </head>
    <style>
      
/* Container */
.container{
    width:40%;
    margin:0 auto;
    margin-top: 10%;
}

/* Login */
#div_login{
    border: 1px solid gray;
    border-radius: 3px;
    width: 470px;
    height: 270px;
    box-shadow: 0px 2px 2px 0px  gray;
    margin: 0 auto;
    text-align: center;

}

#div_login h1{
    margin-top: 0px;
    font-weight: normal;
    padding: 10px;
    background-color: #2a5194;
    color: white;
    font-family: sans-serif;
}

#div_login div{
    clear: both;
    margin-top: 10px;
    padding: 5px;
}

#div_login .textbox{
    width: 96%;
    padding: 7px;
}

#div_login input[type=submit]{
    padding: 7px;
    width: 100px;
    background-color: #2a5194;
    border: 0px;
    color: white;
}

/* media */
@media screen and (max-width:720px){
    .container{
        width: 100%;
    }
    #div_login{
        width: 99%;
    }
}

    </style>
    <body>
        <div class="container">
            <form method="post" action="">
                <div id="div_login">
                    <h1>Đăng nhập</h1>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="Đăng nhập" name="but_submit" id="but_submit" />
                    </div>
                   
                </div>
            </form>
        </div>
    </body>
</html>

