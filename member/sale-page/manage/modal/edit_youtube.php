<div class="modal" id="modal_edit_youtube" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit" style="color:blue"></i> แก้ไขยูทูป</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="form-group">
                    <label for="exampleFormControlInput1">ลิ้ง</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-link"></i>
                            </div>
                        </div>
                        <input type="text" id="txtedityoutube" name="txtedityoutube" class="form-control">
                    </div>

                </div>
                <label>
                    <input type="checkbox" id="chkeditautoplay" name="chkautoplay"> เล่นอัตโนมัติ
                </label>
                <input type="hidden" name="edityoutubeid" id="edityoutubeid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button id="btnEditYoutube" type="button" class="btn btn-primary" >บันทึก</button>

            </div>
        </div>
    </div>
</div>