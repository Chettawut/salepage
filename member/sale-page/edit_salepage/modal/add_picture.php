<div class="modal" id="modal_add_picture" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-plus-circle" style="color:green"></i> เพิ่มรูปภาพ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formimages">
                    <img id="imgaddpic" src="img/addpic.png" style=" display: block;margin: 0 auto;cursor: cell;"
                        alt="Girl in a jacket" width="350" height="350">
                    <input type="file" id="inputFile" name="inputFile" class="form-control" >
                    <input type="hidden" name="imagespno" id="imagespno">
                    <input type="hidden" name="imagespcode" id="imagespcode">
                    <!-- <button type="submit" id="btnupload">Upload</button> -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="submit" id="btnupload" class="btn btn-primary" >บันทึก</button>
                </form>
            </div>
        </div>
    </div>
</div>