<?php include 'dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href=
"css/bootstrap.min.css">
 
</head>
<body>
<div class="container" style="margin-top:30px">
        <div class="row">          
             
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="card">
                <div class="card-header text-center">
                  <h4>Thông tin thí sinh dự thi</h4>
                </div>
                <div class="card-body">
                   <div class="table-responsive">
                      <table>
                        <thead>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Nội dung</th>
                            <th>Bài dự thi</th>
                        </thead>
                        <tbody>
                          <?php
                              $selectQuery = "select * from datafile";
                              $squery = mysqli_query($con, $selectQuery);
 
                              while (($result = mysqli_fetch_assoc($squery))) {
                          ?>
                          <tr >
                            <td><?php echo $result['id']; ?></td>
                            <td style="text-align: left"> <?php echo $result['username']; ?></td>
                            <td style="text-align: left"><?php echo $result['sdt']; ?></td>
                            <td style="text-align: left"><?php echo $result['email']; ?></td>
                            <td style="text-align: left"><?php echo $result['content']; ?></td>
                            <td style="text-align: left" >

                            <a href="<?php echo  './pdf/'.$result['filename']; ?>" target="_blank"> Xem bài dự thi</a>
                        
                          </td>
                          </tr>
                          <?php
                               }
                          ?>
                        </tbody>
                      </table>               
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>