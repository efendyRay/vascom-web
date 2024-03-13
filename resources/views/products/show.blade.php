<div class="modal fade text-left" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title text-black" id="myModalLabel35" style="margin: 0 auto; display: block;"> Detail Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" id="show_id">
                
                <div class="col-md-12 fv-row">
                    <div class="row fv-row">
                        <div class="col-12">
                            <label class="required fs-6 fw-bold form-label mb-2">Product Name</label>
                            <input name="name" readonly value="" type="text" id="show_name" class="form-control name" required placeholder="Enter Product Name">
                        </div>
                        <div class="col-12 mt-2">
                            <label class="required fs-6 fw-bold form-label mb-2">Code</label>
                            <input name="code" readonly value="" type="text" id="show_code" class="form-control code" required placeholder="Enter Code Number">
                        </div>
                        <div class="col-12 mt-2">
                            <label class="required fs-6 fw-bold form-label mb-2">Price</label>
                            <input name="price" readonly value="" type="number" id="show_price" class="form-control price" required placeholder="Enter Price">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
