<?php include 'dbcon.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href=
"bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container" style="margin-top:3%">
        <div class="row" >
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12" style="border: 1px solid #88888869">
            <p style="text-align: center; font-size: 1.5rem; font-weight: bold;">Gửi bài dự thi</p>
                <form method="post" enctype="multipart/form-data">
                    <?php
                      
                        if (isset($_POST['submit']))
                        {
                      
                          $name = $_POST['name'];    
                          $sodienthoai = $_POST['sodienthoai']; 
                          $email = $_POST['email']; 
                          $content = $_POST['content'];                    
 
                          if (isset($_FILES['pdf_file']['name']))
                          {  
                            $accept = ["jpg", "png", "gif", "doc", "docx", "pdf"];
                      
                            $upext = strtolower(pathinfo($_FILES["pdf_file"]["name"], PATHINFO_EXTENSION));


                            $file_name = $_FILES['pdf_file']['name'];
                            $file_tmp = $_FILES['pdf_file']['tmp_name'];
                             
                            if (in_array($upext, $accept)){
                              move_uploaded_file($file_tmp,"./pdf/".$file_name);
                              $insertquery =
                              "INSERT INTO datafile(username,sdt,email, content, filename) VALUES('$name','$sodienthoai', '$email', '$content','$file_name')";
                              $iquery = mysqli_query($con, $insertquery);  
                              if($iquery){
                                ?>
                                <div class=
                                "alert alert-success alert-dismissible fade show text-center">
                                    
                                    <strong>Bài dự thi đã được gửi đi thành công!</strong> 
                                  </div>
                                <?php
                              }
                              else{
                                ?>
                                <div> <strong>Failed!</strong> Try Again!</div>
                                <?php 
                              }
                                
                              }
                              else
                              {
                                ?>
                                  <div class=
                                  "alert alert-danger alert-dismissible fade show text-center">
                                    <strong>Thất bại!</strong> Tệp phải được gửi lên ở định dạng PDF, Word, Image (.pdf,.doc, .docx,.jpg, .png, .gif)
                                  </div>
                                <?php
                            }
                            
                            
    
                           
                            
                            }// end if
                        }// end if
                    ?>
                     
                    <div class="form-input py-2">
                        <div class="form-group">
                     
                            <input type="text" class="form-control"
                                   placeholder="Họ và tên" name="name">
                        </div>   
                        <div class="form-group">
                        
                            <input type="number" class="form-control"
                                   placeholder="Số điện thoại" name="sodienthoai">
                        </div>     
                        <div class="form-group">
                        
                            <input type="text" class="form-control"
                                   placeholder="email" name="email">
                        </div>
                        <div class="form-group">
                        
                        <Textarea class="content" name="content" cols=60 row=15 value="Nhập nội dung"></Textarea>
                           
                        </div>                                    
                        <div class="form-group">
                          
                            <input type="file" name="pdf_file"
                                   class="form-control" accept=" .png, .jpg, .jpeg" multiple />
                        </div>
                        <div class="form-group" style="text-align: center">
                            <input type="submit"
                                  class="btnRegister" name="submit" value="Gửi">
                        </div>
                    </div>
                </form>
            </div>           
             
            
        </div>
    </div>
</body>
</html>