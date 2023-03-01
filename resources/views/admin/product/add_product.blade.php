@extends('admin.layout.master')
@section('main_section')
    <div class="container">
        <!-----arunisha bera work start here-->
        <div class="nk-block-head">
            <div class="nk-block-head-between flex-wrap gap g-2">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title">Add Products</h1>
                </div>
                <div class="nk-block-head-content">
                    <ul class="d-flex  gap-3">
                        <li>
                            <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal"
                                data-bs-target="#addUserModal">

                                <span>Back</span>
                            </a>
                        </li>
                    </ul>
                </div>


            </div><!-- .nk-block-head-between -->

        </div>
        <div class="row align-items-start g-gs bg-white mt-4">
            <div class="form-button text-end">
                <button class="btn-sm btn btn-success">Create Product</button>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="nav flex-column nav-pills">
                    <button class="nav-link text-start active" data-bs-toggle="pill" data-bs-target="#v-pills-General"
                        type="button">General Info</button>
                    <button class="nav-link text-start" data-bs-toggle="pill" data-bs-target="#v-pills-Price"
                        type="button">Price</button>
                    <button class="nav-link text-start" data-bs-toggle="pill" data-bs-target="#v-pills-Images"
                        type="button">Images</button>
                    <button class="nav-link text-start" data-bs-toggle="pill" data-bs-target="#v-pills-Iventory"
                        type="button">Iventory</button>
                    <button class="nav-link text-start" data-bs-toggle="pill" data-bs-target="#v-pills-Tags"
                        type="button">Tags & Label</button>
                    <button class="nav-link text-start" data-bs-toggle="pill" data-bs-target="#v-pills-Attributes"
                        type="button">Attributes</button>
                    <button class="nav-link text-start" data-bs-toggle="pill" data-bs-target="#v-pills-Categories"
                        type="button">Categories</button>
                    <button class="nav-link text-start" data-bs-toggle="pill" data-bs-target="#v-pills-Delivery"
                        type="button">Delivery option</button>
                    <button class="nav-link text-start" data-bs-toggle="pill" data-bs-target="#v-pills-Meta"
                        type="button">Product Meta</button>
                    <button class="nav-link text-start" data-bs-toggle="pill" data-bs-target="#v-pills-Settings"
                        type="button">Product Settings</button>
                    <button class="nav-link text-start" data-bs-toggle="pill" data-bs-target="#v-pills-Shipping"
                        type="button">Shipping & Return Policy</button>

                </div>
            </div>
            <div class="col-lg-9 col-xl-10">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="v-pills-General">
                        <h2>General Information</h2>
                        <div class="form-group mb-3 mt-3">
                            <label for="exampleFormControlInputText1" class="form-label">Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="exampleFormControlInputText1"
                                    placeholder="Write product name">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInputText1" class="form-label">Slug</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="exampleFormControlInputText1"
                                    placeholder="Write product slug">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea8" class="form-label">Summary</label>
                            <div class="form-control-wrap">
                                <textarea placeholder="write product summery" class="form-control" id="exampleFormControlTextarea8" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="nk-block">
                            <!-- <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <small>Description</small>
                                                    </div>
                                                </div> -->
                            <div class=" mb-3">
                                <label for="exampleFormControlTextarea8" class="form-label">Description</label>
                                <div class="card-body">
                                    <div class="js-tinymce" id="tinymceNoMenubar" data-menubar="false"> Hello tinymce </div>
                                    <!-- <div class="form-note mt-3"> Use <code>data-menubar="false"</code> attribute to <code>.js-tinymce</code> to hide menubar. </div> -->
                                </div><!-- .card-body -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->


                        <div class="form-group mb-3">
                            <label for="exampleFormControlInputText5" class="form-label">Brand</label>
                            <div class="form-control-wrap">
                                <select class="form-select" id="exampleFormControlInputText5"
                                    aria-label="Default select example">
                                    <option selected>Select Brand</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Price">
                        <h2>Price Manage</h2>
                        <div class="form-group mb-3 mt-5">
                            <label for="exampleFormControlInputText1" class="form-label">Base Cost</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="exampleFormControlInputText1"
                                    placeholder="Base cost...">
                                <p>Purchase price of this product.</p>
                            </div>
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="exampleFormControlInputText1" class="form-label">Regular Price</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="exampleFormControlInputText1"
                                    placeholder="Enter regular price">
                                <p>This price will display like this ( $ 10)</p>
                            </div>
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="exampleFormControlInputText1" class="form-label">Sale Price</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="exampleFormControlInputText1"
                                    placeholder="Enter sale price">
                                <p>This will be your product selling price</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Images">
                        <div class="form-group mb-3 mt-3">
                            <label class="form-label">Feature Image</label>
                            <div class="form-control-wrap">
                                <div class="image-upload-wrap d-flex flex-column align-items-center">
                                    <div class="media media-huge border">
                                        <img id="image-result" class="w-100 h-100"
                                            src="./images/avatar/avatar-placeholder.jpg" alt="avatar">
                                    </div>
                                    <div class="form-note mt-3">recommended image size is 200x200.</div>
                                    <div class="pt-3">
                                        <input class="upload-image" data-target="image-result" id="change-avatar"
                                            type="file" max="1" hidden="">
                                        <label for="change-avatar" class="btn btn-md btn-primary">Upload</label>
                                    </div>
                                </div><!-- end image-upload-wrap -->
                            </div>
                        </div>

                        <div class="form-group mb-3 mt-3">
                            <label class="form-label">Image Gallery</label>
                            <div class="form-control-wrap">
                                <div class="image-upload-wrap d-flex flex-column align-items-center">
                                    <div class="media media-huge border">
                                        <img id="image-result" class="w-100 h-100"
                                            src="./images/avatar/avatar-placeholder.jpg" alt="avatar">
                                    </div>
                                    <div class="form-note mt-3"> Only *.png, *.jpg and *.jpeg image files are accepted.
                                        <br>allowed image size :1920x1280
                                    </div>
                                    <div class="pt-3">
                                        <input class="upload-image" data-target="image-result" id="change-avatar"
                                            type="file" max="1" hidden="">
                                        <label for="change-avatar" class="btn btn-md btn-primary">Upload</label>
                                    </div>
                                </div><!-- end image-upload-wrap -->
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-Iventory">
                        <h2>Product Inventory</h2>
                        <div class="form-group mb-4 mt-3">
                            <label for="exampleFormControlInputText1" class="form-label">sku</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="exampleFormControlInputText1">
                            </div>
                            <small>Custom Unique Code for this product.</small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInputText1" class="form-label">Quantity</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="exampleFormControlInputText1">
                            </div>
                            <small>This will be replaced with the sum of inventory items. if any inventory item is
                                registered..</small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleFormSelect1" class="form-label">Unit</label>
                            <div class="form-control-wrap">
                                <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                    <option selected>Select unit</option>
                                    <option value="1">One</option>
                                </select>
                            </div>
                            <small>Select Unit</small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInputText1" class="form-label">Unit Of Measurement</label>
                            <div class="form-control-wrap">
                                <input type="number" placeholder="Enter unit of measurement" class="form-control"
                                    id="exampleFormControlInputText1">
                            </div>
                            <small>Enter the number here</small>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Tags">
                        <h2>Product Tags and Badge</h2>
                        <div class="form-group mb-3 mt-3">
                            <label for="exampleFormControlInputText1" class="form-label">Tags</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="exampleFormControlInputText1">
                            </div>
                        </div>

                        <small>Labels</small>
                        <div class="d-flex gap-3 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="fs-5">100 Sales</h3>
                                    <a href="#" class="btn btn-warning">Temporary</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="fs-5">New Arrival</h3>
                                    <a href="#" class="btn btn-warning">Temporary</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Attributes">
                        <h2>Custom Inventory variant</h2>
                        <p>Inventory will be variant of this product.
                            All inventory stock count will be merged and replace to main stock of this product.
                            Stock count filed is required.
                        </p>
                        <div class="card">
                            <div class="d-flex gap-3 mt-5">
                                <div class="col mx-2">
                                    <div class="form-group">
                                        <label for="exampleFormSelect1" class="form-label">Item size</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" id="exampleFormSelect1"
                                                aria-label="Default select example">
                                                <option selected>Select size</option>
                                                <option value="1">Large</option>
                                                <option value="2">Small</option>
                                                <option value="3">Medium</option>
                                                <option value="3">Very small</option>
                                                <option value="3">Very large</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mx-2">
                                    <div class="form-group">
                                        <label for="exampleFormSelect1" class="form-label">Item Color</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" id="exampleFormSelect1"
                                                aria-label="Default select example">
                                                <option selected>Select size</option>
                                                <option value="1">Red</option>
                                                <option value="2">Black</option>
                                                <option value="3">White</option>
                                                <option value="2">Blue</option>
                                                <option value="2">Green</option>
                                                <option value="2">Magenta</option>
                                                <option value="2">Pink</option>
                                                <option value="2">Purple</option>
                                                <option value="2">Sku Blue</option>
                                                <option value="2">Olive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mx-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlInputText1" class="form-label">Additional
                                            Price</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" id="exampleFormControlInputText1"
                                                placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col mx-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlInputText1" class="form-label">Extra cost</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" id="exampleFormControlInputText1"
                                                placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col mx-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlInputText1" class="form-label">Stock count</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" id="exampleFormControlInputText1"
                                                placeholder="0">
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2">
                                    <div class="form-group">
                                        <label for="dropzoneFile1" class="form-label">Attribute Image</label>
                                        <div class="form-control-wrap">
                                            <div class="js-upload" id="dropzoneFile1">
                                                <div class="dz-message" data-dz-message>
                                                    <div class="dz-message-icon"></div>
                                                    <button class="btn btn-md btn-primary">Upload</button>
                                                    <small> <span class="dz-message-text">recommended image size is
                                                            200x200</span></small>
                                                    <div class="dz-message-btn mt-2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mx-2">
                                    <button type="button" class="btn btn-primary"><em
                                            class="icon ni ni-plus"></em></button>
                                </div>
                            </div>

                            <div class="d-flex mt-5 mb-3">
                                <div class="col mx-2">
                                    <div class="form-group">
                                        <label for="exampleFormSelect1" class="form-label">Attribute Name</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" id="exampleFormSelect1"
                                                aria-label="Default select example">
                                                <option selected>Select attribute</option>
                                                <option value="1">Fabric</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mx-2">
                                    <div class="form-group">
                                        <label for="exampleFormSelect1" class="form-label">Attribute Value</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" id="exampleFormSelect1"
                                                aria-label="Default select example">
                                                <option selected>Select attribute Value</option>
                                                <option value="1">Large</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mx-2">
                                    <button type="button" class="btn btn-primary"><em
                                            class="icon ni ni-upword-ios"></em></button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Categories">
                        <h2>Categories</h2>
                        <div class="form-group mt-3 mb-3">
                            <label for="exampleFormSelect1" class="form-label">Category</label>
                            <div class="form-control-wrap">
                                <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    <option value="1">Clothing</option>
                                    <option value="1">Beauty</option>
                                    <option value="1">Shoes</option>
                                    <option value="1">Bag & Laggage</option>
                                    <option value="1">Man</option>
                                    <option value="1">Woman</option>
                                    <option value="1">Baby</option>
                                    <option value="1">Restaurant</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormSelect1" class="form-label">Sub Category</label>
                            <div class="form-control-wrap">
                                <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                    <option selected>Select sub category</option>
                                    <option value="1">One</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-group">
                                <label class="form-label">Multiple select input</label>
                                <div class="form-control-wrap">
                                    <select class="js-select" multiple data-search="true" data-sort="false">
                                        <option value="">Select Payment Method</option>
                                        <option value="1">PayPal</option>
                                        <option value="2">Bank Transfer</option>
                                        <option value="3">Skrill</option>
                                        <option value="4">Moneygram</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Delivery">
                        <h2>Delivery Options</h2>
                        <div class="d-flex gap-3 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            fill="#ff805d" class="bi bi-gift" viewBox="0 0 16 16">
                                            <path
                                                d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                                        </svg>
                                        <p><span class="fs-5 fw-bolder"> Estimated Delivery</span><br> with 4days</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            fill="#ff805d" class="bi bi-gift" viewBox="0 0 16 16">
                                            <path
                                                d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                                        </svg>
                                        <p><span class="fs-5 fw-bolder">Free Shipping</span><br> Order over 100$</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            fill="#ff805d" class="bi bi-gift" viewBox="0 0 16 16">
                                            <path
                                                d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                                        </svg>
                                        <p><span class="fs-5 fw-bolder"> 7 days Return</span><br> Without any damage</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Meta">
                        <h2>Meta SEO</h2>
                        <ul class="nav nav-pills mb-3 mt-5">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-general"
                                    type="button">General Meta Info</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-facebook"
                                    type="button">Facebook Meta</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-twitter"
                                    type="button">Twitter Meta</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-general">
                                <h2>General Info</h2>

                                <div class="form-group mt-3">
                                    <label for="exampleFormControlInputText1" class="form-label">Title</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="exampleFormControlInputText1"
                                            placeholder="General info Title">
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="exampleFormControlTextarea8" class="form-label">Description</label>
                                    <div class="form-control-wrap">
                                        <textarea placeholder="General info description" class="form-control" id="exampleFormControlTextarea8"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-facebook">
                                <h2>Facebook Info</h2>

                                <div class="form-group mt-3">
                                    <label for="exampleFormControlInputText1" class="form-label">Title</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="exampleFormControlInputText1"
                                            placeholder="General info Title">
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="exampleFormControlTextarea8" class="form-label">Description</label>
                                    <div class="form-control-wrap">
                                        <textarea placeholder="General info description" class="form-control" id="exampleFormControlTextarea8"
                                            rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="form-group mt-3 mb-3">
                                    <label for="dropzoneFile1" class="form-label">General Info Meta Image</label>
                                    <div class="form-control-wrap">
                                        <div class="js-upload dropzone dz-clickable" id="dropzoneFile1">
                                            <div class="dz-message" data-dz-message="">
                                                <div class="dz-message-icon"><em class="icon icon-lg ni ni-files"></em>
                                                </div>
                                                <span class="dz-message-text">Drag and drop file</span><br>
                                                <small> <span class="dz-message-text">recommended image size is
                                                        200x200</span></small>
                                                <div class="dz-message-btn mt-2">
                                                    <button class="btn btn-md btn-primary">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-twitter">
                                <h2>Twitter Info</h2>

                                <div class="form-group mt-3">
                                    <label for="exampleFormControlInputText1" class="form-label">Title</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="exampleFormControlInputText1"
                                            placeholder="General info Title">
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="exampleFormControlTextarea8" class="form-label">Description</label>
                                    <div class="form-control-wrap">
                                        <textarea placeholder="General info description" class="form-control" id="exampleFormControlTextarea8"
                                            rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="form-group mt-3 mb-3">
                                    <label for="dropzoneFile1" class="form-label">General Info Meta Image</label>
                                    <div class="form-control-wrap">
                                        <div class="js-upload dropzone dz-clickable" id="dropzoneFile1">
                                            <div class="dz-message" data-dz-message="">
                                                <div class="dz-message-icon"><em class="icon icon-lg ni ni-files"></em>
                                                </div>
                                                <span class="dz-message-text">Drag and drop file</span><br>
                                                <small> <span class="dz-message-text">recommended image size is
                                                        200x200</span></small>
                                                <div class="dz-message-btn mt-2">
                                                    <button class="btn btn-md btn-primary">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-Settings">
                        <h2>Product Settings</h2>
                        <div class="form-group mt-3">
                            <label for="exampleFormControlInputText1" class="form-label">Minimum quantity of
                                Purchase</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="exampleFormControlInputText1"
                                    placeholder="Minimum quantity of Purchase">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleFormControlInputText1" class="form-label">Maximum quantity of
                                Purchase</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="exampleFormControlInputText1"
                                    placeholder="Maximum quantity of Purchase">
                            </div>
                        </div>

                        <div class="form-check form-switch mt-3">
                            <label class="form-check-label me-2" for="flexSwitchDefault">
                                Inventory Warning
                            </label>
                            <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Shipping">
                        <h2>Product Shipping and Return Policy</h2>

                        <div class="nk-block mt-5">
                            <!-- <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <small>Description</small>
                                                    </div>
                                                </div> -->
                            <div class=" mb-3">
                                <label for="exampleFormControlTextarea8" class="form-label">Policy Description</label>
                                <div class="card-body">
                                    <div class="js-tinymce" id="tinymceNoMenubar" data-menubar="false"> Hello tinymce
                                    </div>
                                    <!-- <div class="form-note mt-3"> Use <code>data-menubar="false"</code> attribute to <code>.js-tinymce</code> to hide menubar. </div> -->
                                </div><!-- .card-body -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
        <!-----arunisha bera work end here-->
    </div>
@endsection
