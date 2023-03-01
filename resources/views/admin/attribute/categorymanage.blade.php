@extends('admin.layout.master')
@section('main_section')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">All Products Categories</h1>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex  gap-3">
                                        <!-- <li>
                                                                                                                                                                                                                                                    <a href="#" class="btn btn-md d-md-none btn-primary"
                                                                                                                                                                                                                                                        data-bs-toggle="modal" data-bs-target="#addUserModal">
                                                                                                                                                                                                                                                        <em class="icon ni ni-plus"></em>
                                                                                                                                                                                                                                                        <span>Add</span>
                                                                                                                                                                                                                                                    </a>
                                                                                                                                                                                                                                                </li> -->
                                        <li>
                                            <a href="#" class="btn btn-primary d-none d-md-inline-flex"
                                                data-bs-toggle="modal" data-bs-target="#addUserModal">

                                                <span>Add New category</span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="addUserModalLabel">Add New Category</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div><!-- .modal-header -->
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('category.store') }}"
                                                    name="category_form" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-3">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="category" class="form-label">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" id="category" name="categoryName"
                                                                        class="form-control" placeholder="Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="slug" class="form-label">Slug</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" id="slug" name="slug"
                                                                        class="form-control" placeholder="Slug">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="description"
                                                                    class="form-label">Description</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="description"
                                                                        id="description" class="form-control"
                                                                        placeholder="Description">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Thumbnail</label>
                                                                <div class="form-control-wrap">
                                                                    <div
                                                                        class="image-upload-wrap d-flex flex-column align-items-center">
                                                                        <div class="media media-huge border">
                                                                            <img id="image-result" class="w-100 h-100"
                                                                                src="{{ asset('images/avatar-placeholder.jpg') }}"
                                                                                alt="avatar">
                                                                        </div>
                                                                        <div class="pt-3">
                                                                            <input class="upload-image"
                                                                                data-target="image-result"
                                                                                id="change-avatar" name='image'
                                                                                type="file" max="1" hidden>
                                                                            <label for="change-avatar"
                                                                                class="btn btn-md btn-primary">Change</label>
                                                                        </div>
                                                                    </div><!-- end image-upload-wrap -->
                                                                </div>
                                                                <div class="form-note mt-3">Set the category thumbnail
                                                                    image. Only *.png, *.jpg and *.jpeg image files are
                                                                    accepted.</div>
                                                            </div><!-- .form-group -->
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="exampleFormSelect1"
                                                                    class="form-label">Status</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select" name="status"
                                                                        id="exampleFormSelect1"
                                                                        aria-label="Default select example">
                                                                        <option selected>Active</option>
                                                                        <option value="1">Inactive</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="d-flex gap g-2">
                                                                <div class="gap-col">
                                                                    <button class="btn btn-primary" type="submit">Save
                                                                        New Category</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!-- .modal-body -->
                                        </div>
                                    </div>
                                </div><!-- .modal -->


                            </div><!-- .nk-block-head-between -->
                            <div class="d-flex mt-5">
                                <div class="form-group me-3">
                                    <div class="form-control-wrap">
                                        <select class="form-select" id="exampleFormSelect1"
                                            aria-label="Default select example">
                                            <option selected>Bulk Action</option>
                                            <option value="1">Delete</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Apply</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table class="datatable-init table" data-nk-container="table-responsive table-border">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="overline-title">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault">
                                                    </div>
                                                </span>
                                            </th>
                                            <th><span class="overline-title">ID</span></th>
                                            <th><span class="overline-title">Name</span></th>
                                            <th><span class="overline-title">Image</span></th>


                                            <th><span class="overline-title">Status</span></th>
                                            <th><span class="overline-title">Action</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($data as $key => $val)
                                            <tr style="vertical-align: middle">
                                                <td><input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault"></td>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $val->categoryName }}</td>
                                                <td style="width:100px">
                                                    <a href="#"><img
                                                            src="{{ asset('upload_images/category/' . $val->image) }}"
                                                            alt="" style="width: 100%;"></a>
                                                </td>
                                                <td>{{ $val->status }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-icon btn-zoom me-n1"
                                                            data-bs-toggle="dropdown">
                                                            <em class="icon ni ni-more-v"></em>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                            <div class="dropdown-content py-1">
                                                                <ul
                                                                    class="link-list link-list-hover-bg-primary link-list-md">
                                                                    <li>
                                                                        <a href="./html/user-manage/user-edit.html"><em
                                                                                class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="./html/user-manage/user-edit.html"><em
                                                                                class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="./html/user-manage/user-profile.html"><em
                                                                                class="icon ni ni-eye"></em><span>View
                                                                                Details</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        {{-- <tr>
                                            <td><input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault"></td>
                                            <td>1</td>
                                            <td>Clothing</td>
                                            <td> <a href="#"><img src="./images/lahenga/img_2.png" alt=""
                                                        style="width: 15%;"></a>
                                            </td>
                                            <td><span class="badge text-bg-success-soft">Active</span>
                                            </td>
                                            <td class="tb-col tb-col-end">
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-sm btn-icon btn-zoom me-n1"
                                                        data-bs-toggle="dropdown">
                                                        <em class="icon ni ni-more-v"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <div class="dropdown-content py-1">
                                                            <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                                <li>
                                                                    <a href="./html/user-manage/user-edit.html"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="./html/user-manage/user-edit.html"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="./html/user-manage/user-profile.html"><em
                                                                            class="icon ni ni-eye"></em><span>View
                                                                            Details</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- dropdown -->
                                            </td>
                                        </tr> --}}

                                    </tbody>
                                </table>
                                <div class="form-note mt-3"> Use <code>.datatable-init</code> class to
                                    <code>table</code> to enable data-tables mode. <br> <strong
                                        class="text-black">Note:</strong> If you want to use datatable
                                    another page then you must have to load datatables's js file. then you
                                    can use datatable to your project.
                                </div>
                            </div><!-- .card-body -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
