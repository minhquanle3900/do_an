@extends('admin.share.master')
@section('noi_dung')
    <div class="row" id="app">
        <div class="col-5">
            <div class="card border-primary border-bottom border-3 border-0">
                <div class="card-header text-center bg-gradient-bloody text-white">
                    <b>Thêm Mới Sản Phẩm</b>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Tên Sản Phẩm</label>
                        <input v-on:blur="checkSlug()" v-on:keyup="createSlug()" v-model="add_san_pham.ten_san_pham" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Slug Sản Phẩm</label>
                        <input v-model="add_san_pham.slug_san_pham" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá Bán</label>
                        <input v-model="add_san_pham.gia_ban" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giảm Giá</label>
                        <input v-model="add_san_pham.giam_gia" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô Tả</label>
                        <input v-model="add_san_pham.mo_ta" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô Tả Ngắn</label>
                        <input v-model="add_san_pham.mo_ta_ngan" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hình Ảnh</label>
                        <input ref="file" v-on:change="uploadFile()" type="file" class="form-control" accept="image/png, image/jpeg">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Số Lượng</label>
                        <input v-model="add_san_pham.so_luong" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Danh Mục</label>
                        <select v-model="add_san_pham.id_danh_muc" class="form-control">
                            <option value="0">Vui lòng chọn Danh Mục</option>
                            @foreach ($danhMuc as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->ten_danh_muc }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tình Trạng</label>
                        <select v-model="add_san_pham.tinh_trang" class="form-control">
                            <option value="2">Vui lòng chọn Tình Trạng</option>
                            <option value="1">Hiển Thị</option>
                            <option value="0">Tạm Tắt</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button id="add" v-on:click="addSanPham()" class="btn btn-inverse-primary">Thêm Mới</button>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="card border-primary border-bottom border-3 border-0">
                <div class="card-header text-center bg-gradient-bloody text-white">
                    <b>Danh Sách Sản Phẩm</b>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="listMonAn">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <button class="btn btn-inverse-danger" v-on:click="Clear()">Xóa</button>
                                    </th>
                                    <th class="text-center text-nowrap">Tên Sản Phẩm</th>
                                    <th class="text-center">Giá Bán</th>
                                    <th class="text-center">Giảm Giá</th>
                                    <th class="text-center">Mô Tả</th>
                                    <th class="text-center">Mô Tả Ngắn</th>
                                    <th class="text-center">Hình Ảnh</th>
                                    <th class="text-center">Số Lượng</th>
                                    <th class="text-center">Danh Mục</th>
                                    <th class="text-center">Tình Trạng</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value, key) in list">
                                    <tr>
                                        <th class="text-center align-middle">
                                            <input type="checkbox" v-model="value.check">
                                        </th>
                                        <td class="align-middle">@{{value.ten_san_pham}}</td>
                                        <td class="align-middle text-center">@{{number_format(value.gia_ban)}}</td>
                                        <td class="align-middle text-center">@{{number_format(value.giam_gia)}}</td>
                                        <td class="align-middle text-center">@{{value.mo_ta}}</td>
                                        <td class="align-middle text-center">@{{value.mo_ta_ngan}}</td>
                                        <td class="text-center">
                                            <img v-bind:src="'/hinh-san-pham/' + value.hinh_anh" class="img-thumbnail" alt="...">
                                        </td>
                                        <td class="align-middle text-center">@{{value.so_luong}}</td>
                                        <td class="align-middle text-center">@{{value.ten_danh_muc}}</td>
                                        <td class="align-middle text-center text-nowrap">
                                            <button v-on:click="changeStatus(value)" v-if="value.tinh_trang == 1" class="btn btn-inverse-success">Hiển Thị</button>
                                            <button v-on:click="changeStatus(value)" v-else class="btn btn-inverse-danger">Tạm Tắt</button>
                                        </td>
                                        <td class="align-middle text-center text-nowrap">
                                            <button v-on:click="edit_san_pham = Object.assign({}, value)" data-bs-toggle="modal" data-bs-target="#updateModal" class="btn btn-inverse-warning" >Cập Nhật</button>
                                            <button v-on:click="del_san_pham = value" class="btn btn-inverse-danger ml-1" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa Bỏ</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Cập Nhật Sản Phẩm</h1>
                                <button type="button" class="btn-inverse--close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Tên Sản Phẩm</label>
                                    <input v-on:blur="checkUpdateSlug()" v-on:keyup="updateSlug()" v-model="edit_san_pham.ten_san_pham" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Slug Sản Phẩm</label>
                                    <input v-model="edit_san_pham.slug_san_pham" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Giá Bán</label>
                                    <input v-model="edit_san_pham.gia_ban" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Giảm Giá</label>
                                    <input v-model="edit_san_pham.giam_gia" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mô Tả</label>
                                    <input v-model="edit_san_pham.mo_ta" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mô Tả Ngắn</label>
                                    <input v-model="edit_san_pham.mo_ta_ngan" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Số Lượng</label>
                                    <input v-model="edit_san_pham.so_luong" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Danh Mục</label>
                                    <select v-model="edit_san_pham.id_danh_muc" class="form-control">
                                        <option value="0">Vui lòng chọn Danh mục</option>
                                        @foreach ($danhMuc as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->ten_danh_muc }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tình Trạng</label>
                                    <select v-model="edit_san_pham.tinh_trang" class="form-control">
                                        <option value="">Vui lòng chọn tình trạng</option>
                                        <option value="1">Hiển Thị</option>
                                        <option value="0">Tạm Tắt</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-inverse-secondary" data-bs-dismiss="modal">Close</button>
                                <button v-on:click="accpectUpdate()" type="button" class="btn btn-inverse-warning">Xác Nhận</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Sản Phẩm</h1>
                                <button type="button" class="btn-inverse--close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-primary" role="alert">
                                    Bạn có chắc chắn muốn xóa Sản Phẩm: <b class="text-danger text-uppercase">@{{ del_san_pham.ten_san_pham }}</b> này không?
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-inverse-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-inverse-danger" v-on:click="accpectDel()" data-bs-dismiss="modal">Xác Nhận</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

    <script>
        new Vue({
            el : "#app",
            data : {
                list          : [],
                add_san_pham  : {'ten_san_pham' : '', 'slug_san_pham' : '','id_danh_muc' : 0 , 'tinh_trang' : 2},
                del_san_pham  : '',
                file          : '',
                edit_san_pham : '',
            },
            created() {
                this.loadData();
            },
            methods : {
                checkUpdateSlug(){
                    var payload = {
                        'slug_san_pham'  : this.edit_san_pham.slug_san_pham,
                    }
                    axios
                        .post('/admin/danh-muc/check-slug', payload)
                        .then((res) => {
                            if (res.data.status == 1) {
                                toastr.success(res.data.message, "Success");
                                $("#accpect_update").removeAttr("disabled");
                            } else if (res.data.status == 0) {
                                $("#accpect_update").prop('disabled' ,true);
                                toastr.error(res.data.message, "Error");
                            } else if (res.data.status == 2) {
                                toastr.warning(res.data.message, "Warning");
                            }
                        });
                },
                checkSlug(){
                    var payload = {
                        'slug_san_pham'  : this.edit_san_pham.slug_san_pham,
                    }
                    axios
                        .post('/admin/san-pham/check-slug', payload)
                        .then((res) => {
                            if (res.data.status == 1) {
                                toastr.success(res.data.message, "Success");
                                $("#add").removeAttr("disabled");
                            } else if (res.data.status == 0) {
                                $("#add").prop('disabled' ,true);
                                toastr.error(res.data.message, "Error");
                            } else if (res.data.status == 2) {
                                toastr.warning(res.data.message, "Warning");
                            }
                        });
                },
                uploadFile(){
                    this.file = this.$refs.file.files[0];
                    this.loadData();
                },
                toSlug(str) {
                    // Chuyển hết sang chữ thường
                    str = str.toLowerCase();

                    // xóa dấu
                    str = str
                        .normalize('NFD') // chuyển chuỗi sang unicode tổ hợp
                        .replace(/[\u0300-\u036f]/g, ''); // xóa các ký tự dấu sau khi tách tổ hợp

                    // Thay ký tự đĐ
                    str = str.replace(/[đĐ]/g, 'd');

                    // Xóa ký tự đặc biệt
                    str = str.replace(/([^0-9a-z-\s])/g, '');

                    // Xóa khoảng trắng thay bằng ký tự -
                    str = str.replace(/(\s+)/g, '-');

                    // Xóa ký tự - liên tiếp
                    str = str.replace(/-+/g, '-');

                    // xóa phần dư - ở đầu & cuối
                    str = str.replace(/^-+|-+$/g, '');

                    // return
                    return str;
                },
                updateSlug(){
                    var slug = this.toSlug(this.edit_san_pham.ten_san_pham);
                    this.edit_san_pham.slug_san_pham = slug;
                },
                createSlug(){
                    var slug = this.toSlug(this.add_san_pham.ten_san_pham);
                    this.add_san_pham.slug_san_pham = slug;
                },
                Clear() {
                    axios
                        .post('/admin/san-pham/delete-all', this.list)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.message);
                                this.loadData();
                            } else {
                                toastr.error(res.data.message);
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
                accpectUpdate() {
                    axios
                        .post('/admin/san-pham/update', this.edit_san_pham)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message, "Success");
                                this.loadData();
                                $('#updateModal').modal('hide');
                            } else if (res.data.status == 0) {
                                toastr.error(res.data.message, "Error");
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            })
                            $("#add").removeAttr("disabled");
                        });
                },
                accpectDel() {
                    axios
                        .post('/admin/san-pham/delete', this.del_san_pham)
                        .then((res) => {
                            if (res.data.status == 1) {
                                toastr.success(res.data.message, "Success");
                                this.loadData();
                            } else if (res.data.status == 0) {
                                toastr.error(res.data.message, "Error");
                            } else if (res.data.status == 2) {
                                toastr.warning(res.data.message, "Warning");
                            }
                        });
                },
                addSanPham() {
                    $("#add").prop('disabled', true);
                    var formData    = new FormData();
                    formData.append('hinh_anh', this.file);
                    formData.append('ten_san_pham', this.add_san_pham.ten_san_pham);
                    formData.append('slug_san_pham', this.add_san_pham.slug_san_pham);
                    formData.append('gia_ban', this.add_san_pham.gia_ban);
                    formData.append('giam_gia', this.add_san_pham.giam_gia);
                    formData.append('mo_ta', this.add_san_pham.mo_ta);
                    formData.append('mo_ta_ngan', this.add_san_pham.mo_ta_ngan);
                    formData.append('tinh_trang', this.add_san_pham.tinh_trang);
                    formData.append('id_danh_muc', this.add_san_pham.id_danh_muc);
                    formData.append('so_luong', this.add_san_pham.so_luong);
                    axios
                        .post('/admin/san-pham/create', formData), {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        }
                        .then((res) => {
                            if (res.data.status == 1) {
                                toastr.success(res.data.message, "Success");
                                this.loadData();
                                this.add_san_pham = {'ten_san_pham' : '','id_danh_muc' : 0 , 'gia_ban' : '' , 'giam_gia': '', 'mo_ta': '', 'mo_ta_ngan': '' , 'so_luong' : '' , 'tinh_trang' : 1};
                                $("#add").removeAttr("disabled");
                            } else if (res.data.status == 0) {
                                toastr.error(res.data.message, "Error");
                            } else if (res.data.status == 2) {
                                toastr.warning(res.data.message, "Warning");
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            })
                            $("#add").removeAttr("disabled");
                        });
                },
                loadData() {
                    axios
                        .get('/admin/san-pham/data')
                        .then((res) => {
                            this.list  =  res.data.data;
                        });
                },
                changeStatus(payload) {
                    axios
                        .post('/admin/san-pham/doi-trang-thai', payload)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message, "Success");
                                this.loadData();
                            } else if (res.data.status == 0) {
                                toastr.error(res.data.message, "Error");
                            }
                        });
                },
                number_format(number) {
                    return new Intl.NumberFormat('vi-VI', { style: 'currency', currency: 'VND' }).format(number);
                },
            }
        });
    </script>
@endsection
