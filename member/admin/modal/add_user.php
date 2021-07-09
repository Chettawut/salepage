<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel"><i class="fa fa-cube" aria-hidden="true"></i>
                        เพิ่มผู้ใช้ (Add User)</h2>
                </div>
                <form name="frmAddUser" id="frmAddUser" action="" method="post">
                    <div class="modal-body">

                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="col-form-label">User</label>
                            <input type="text" class="form-control" name="userusername" id="userusername" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Password</label>
                            <input type="password" class="form-control" name="userpassword" id="userpassword" required>
                        </div>
                        <div class="form-group col-md-6">

                            <label for="recipient-name" class="col-form-label">ชื่อจริง</label>
                            <input type="text" class="form-control" name="userfirstname" id="userfirstname" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">ชื่อสกุล</label>
                            <input type="text" class="form-control" name="userlastname" id="userlastname" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="col-form-label">ประเภท</label>
                            <select class="form-control" name="usertype" id="usertype">
                                <option value="01">Member</option>
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
                </form>

            </div>
        </div>
    </div>