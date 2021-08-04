<div class="modal" id="modal_edit_text" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit" style="color:blue"></i> แก้ไขข้อความ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <textarea class="textarea" id="edittext" style="width: 100%; height: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    <span name="txteditarea_text" id="txteditarea_text"></span>
                    </textarea>
                <input type="hidden" name="edittextid" id="edittextid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button id="btnEditText" type="button" class="btn btn-primary">บันทึก</button>

            </div>
        </div>
    </div>
</div>