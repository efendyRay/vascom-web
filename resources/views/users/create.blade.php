<div class="modal fade text-left" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title text-black" id="myModalLabel35" style="margin: 0 auto; display: block;"> Tambah User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form_add">
                <div class="modal-body">
                        <div class="row fv-row">
                            <div class="col-12">
                                <label class="required fs-6 fw-bold form-label mb-2">User Name</label>
                                <input name="name" value="" type="text" id="name" class="form-control name" required placeholder="Enter Product Name">
                            </div>
                            <div class="col-12 mt-2">
                                <label class="required fs-6 fw-bold form-label mb-2">Phone</label>
                                <input name="phone" value="" type="number" id="phone" class="form-control phone" required placeholder="Enter Phone Number">
                            </div>
                            <div class="col-12 mt-2">
                                <label class="required fs-6 fw-bold form-label mb-2">Email</label>
                                <input name="email" value="" type="email" id="email" class="form-control email" required placeholder="Enter Email">
                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-center btn btn-primary">
                    <button type="submit" id="btn_save" class="btn btn-primary">Simpan</button>
                  </div>
            </form>
        </div>
    </div>
</div>