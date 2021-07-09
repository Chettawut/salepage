<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    form {
        border: 3px solid #f1f1f1;
    }

    .loginform input[type=text],
    .loginform input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .registerbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #0099ff;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #cc0099;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
        border-radius: 50%;
    }

    .container {
        padding: 10px;
    }


    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
    </style>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php
    if(isset($_GET['log']))
        {
            if($_GET['log']=='username')
            $message = "Username ไม่ถูกต้อง";
            else if($_GET['log']=='password')
            $message = "Password ไม่ถูกต้อง";
            else if($_GET['log']=='disable')
            $message = "คุณถูกยกเลิกการใช้งาน กรุณาติดต่อ Admin!";
            echo "<script type='text/javascript'>alert('$message');</script>";            
            echo "<script type='text/javascript'>window.location.replace('..');</script>";
        }
    ?>

    <form action="login_result.php" class="loginform" method="post">
        <div class="imgcontainer">
            <img src="img/img_avatar2.png" height="200px" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <!-- <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label> -->
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" id="btnregister" class="registerbtn">สมัครสมาชิก</button>
            <!-- <button type="button" id="btnregister" data-toggle="modal" data-target="#exampleModal"
                class="registerbtn">สมัครสมาชิก</button> -->

            <span class="psw" id="btnrepassword" style="float:right;padding-top: 16px;"><a
                    href="#">ลืมรหัสผ่าน</a></span>
        </div>
    </form>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-cube" aria-hidden="true"></i>
                        ลงทะเบียน (Register)</h3>
                </div>
                <form name="frmAddUser" id="frmAddUser" action="" method="post">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">Username</label>
                                <input type="text" class="form-control" name="userusername" id="userusername" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="col-form-label">Password</label>
                                <input type="password" class="form-control" name="userpassword" id="userpassword"
                                    required>
                            </div>
                            <div class="form-group col-md-6">

                                <label for="recipient-name" class="col-form-label">ชื่อจริง</label>
                                <input type="text" class="form-control" name="userfirstname" id="userfirstname"
                                    required>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="col-form-label">นามสกุล</label>
                                <input type="text" class="form-control" name="userlastname" id="userlastname" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="col-form-label">ประเภท</label>
                                <select class="form-control" name="usertype" id="usertype">
                                    <option value="01">Store</option>
                                    <option value="02">Sales Leader</option>
                                    <option value="03">Accounting</option>
                                    <option value="04">Manager</option>
                                    <option value="05">Sales</option>
                                    <option value="99">Admin</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" name="usertel" id="usertel">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="recipient-name" class="col-form-label">email</label>
                                <input type="email" class="form-control" name="useremail" id="useremail">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

</body>

</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script>
$(document).ready(function() {
    $("#btnregister").click(function() {
        alert('ระบบสมัครสมาชิกยังไม่เปิดใช้งาน');
    });
    $("#btnrepassword").click(function() {
        alert('ระบบลืมพาสเวิร์ดยังไม่เปิดใช้งาน');
    });
});
</script>