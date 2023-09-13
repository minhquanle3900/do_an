@extends('admin.share.master')
@section('noi_dung')
    <div class="row" id="app">
        <div class="col-5">
            <div class="card border-primary border-bottom border-3 border-0">
                <div class="card-header text-center bg-gradient-bloody text-white">
                    <b>Thêm Mới Chuyên Mục</b>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Tên Chuyên Mục</label>
                        <input v-on:blur="checkSlug()" v-on:keyup="createSlug()" v-model="add_chuyen_muc.ten_chuyen_muc" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Slug Chuyên Mục</label>
                        <input v-model="add_chuyen_muc.slug_chuyen_muc" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tình Trạng</label>
                        <select v-model="add_chuyen_muc.tinh_trang" class="form-control">
                            <option value="2">Vui lòng chọn Chuyên Mục</option>
                            <option value="1">Hiển Thị</option>
                            <option value="0">Tạm Tắt</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button id="add" v-on:click="addChuyenMuc()" class="btn btn-inverse-primary">Thêm Mới</button>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="card border-primary border-bottom border-3 border-0">
                <div class="card-header text-center bg-gradient-bloody text-white">
                    <b>Danh Sách Chuyên Mục</b>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="listMonAn">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <button class="btn btn-inverse-danger" v-on:click="Clear()">Xóa</button>
                                    </th>
                                    <th class="text-center">Tên Chuyên Mục</th>
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
                                        <td class="align-middle">@{{value.ten_chuyen_muc}}</td>
                                        <td class="align-middle text-center">
                                            <button v-on:click="changeStatus(value)" v-if="value.tinh_trang == 1" class="btn btn-inverse-success">Hiển Thị</button>
                                            <button v-on:click="changeStatus(value)" v-else class="btn btn-inverse-danger">Tạm Tắt</button>
                                        </td>
                                        <td class="align-middle text-center">
                                            <button v-on:click="edit_chuyen_muc = Object.assign({}, value)" data-bs-toggle="modal" data-bs-target="#updateModal" class="btn btn-inverse-warning" >Cập Nhật</button>
                                            <button v-on:click="del_chuyen_muc = value" class="btn btn-inverse-danger ml-1" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa Bỏ</button>
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Cập Nhật Chuyên Mục</h1>
                                <button type="button" class="btn-inverse-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">Tên Chuyên Mục</label>
                                        <input v-model="edit_chuyen_muc.ten_chuyen_muc" v-on:keyup="updateSlug()" v-on:blur="checkUpdateSlug()" type="text" class="form-control">
                                        <label class="form-label">Slug Chuyên Mục</label>
                                        <input v-model="edit_chuyen_muc.slug_chuyen_muc" type="text" class="form-control">
                                        <label class="form-label">Tình Trạng</label>
                                        <select class="form-control" v-model="edit_chuyen_muc.tinh_trang">
                                            <option value="2">Vui lòng chọn Chuyên Mục</option>
                                            <option value="1">Hiển thị</option>
                                            <option value="0">Tạm Tắt</option>
                                        </select>
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Chuyên Mục</h1>
                                <button type="button" class="btn-inverse-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-primary" role="alert">
                                    Bạn có chắc chắn muốn xóa Chuyên Mục: <b class="text-danger text-uppercase">@{{ del_chuyen_muc.ten_chuyen_muc }}</b> này không?
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
                list            : [],
                add_chuyen_muc  : {'ten_chuyen_muc' : '', 'slug_chuyen_muc' : '', 'tinh_trang' : 2},
                del_chuyen_muc  : '',
                edit_chuyen_muc : '',
            },
            created() {
                this.loadData();
            },
            methods : {
                checkUpdateSlug(){
                    var payload = {
                        'slug_chuyen_muc'  : this.edit_chuyen_muc.slug_chuyen_muc,
                    }
                    axios
                        .post('/admin/chuyen-muc/check-slug', payload)
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
                        'slug_chuyen_muc'  : this.add_chuyen_muc.slug_chuyen_muc,
                    }
                    axios
                        .post('/admin/chuyen-muc/check-slug', payload)
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
                    var slug = this.toSlug(this.edit_chuyen_muc.ten_chuyen_muc);
                    this.edit_chuyen_muc.slug_chuyen_muc = slug;
                },
                createSlug(){
                    var slug = this.toSlug(this.add_chuyen_muc.ten_chuyen_muc);
                    this.add_chuyen_muc.slug_chuyen_muc = slug;
                },
                Clear() {
                    axios
                        .post('/admin/chuyen-muc/delete-all', this.list)
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
                        .post('/admin/chuyen-muc/update', this.edit_chuyen_muc)
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
                        .post('/admin/chuyen-muc/delete', this.del_chuyen_muc)
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
                addChuyenMuc() {
                    $("#add").prop('disabled', true);
                    axios
                        .post('/admin/chuyen-muc/create', this.add_chuyen_muc)
                        .then((res) => {
                            if (res.data.status == 1) {
                                toastr.success(res.data.message, "Success");
                                this.loadData();
                                this.add_chuyen_muc = {'ten_chuyen_muc' : '','hinh_anh' : '' , 'tinh_trang' : 1};
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
                        .get('/admin/chuyen-muc/data')
                        .then((res) => {
                            this.list  =  res.data.list;
                        });
                },
                changeStatus(payload) {
                    axios
                        .post('/admin/chuyen-muc/doi-trang-thai', payload)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message, "Success");
                                this.loadData();
                            } else if (res.data.status == 0) {
                                toastr.error(res.data.message, "Error");
                            }
                        });
                },
            }
        });
    </script>
@endsection

