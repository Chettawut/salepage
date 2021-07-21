<div class="modal" id="modal_add_salepage" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="frmaddsalepage" action=""  method="post" onkeydown="return event.key != 'Enter';">
                <div class="modal-header">
                    <h2 class="modal-title"><i class="fas fa-plus-circle" style="color:green"></i> เพิ่มเซลเพจที่ 1</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">กรุณาตั้งชื่อ</label>
                        <input type="text" name="txtname" class="form-control" onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)" placeholder="ชื่อเซลเพจ ( ภาษาอังกฤษเท่านั้น )">
                        <input type="hidden" name="txtusername" value="<?php echo $_SESSION["username"];?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">ตกลง</button>
                </div>
            </form>
        </div>
    </div>
</div>