<div class="modal" id="modal_edit_button" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-plus-circle" style="color:green"></i> แก้ไขปุ่ม</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1">LINE ID</label>
                    <input type="text" name="txteditbtnline" id="txteditbtnline" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Facebook</label>
                    <input type="text" name="txteditbtnfb" id="txteditbtnfb" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">เบอร์โทรศัพท์</label>
                    <input type="text" name="txteditbtntel" id="txteditbtntel" class="form-control">
                </div>
                <input type="hidden" name="editbuttonid" id="editbuttonid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button id="btnEditBtn" type="button" class="btn btn-primary" >บันทึก</button>

            </div>
        </div>
    </div>
</div>