@extends('layouts.app')

@section('title', 'User List')
@section('content')

    @push('css')
        <style>
          
        </style>
    @endpush

    <div class="container flex-row-fluid mb-2 mt-7">
        <div class="card card-docs mb-2">
            <!--begin::Card Body-->

            <div class="card-body fs-6 text-gray-700">
                <!--begin::Section-->

                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container-xxl">
                        <!--begin::users-->
                        <h2>Manajemen Users</h2>
                        <div class="card card-p-0 card-flush">
                            <div class="card-header d-flex justify-content-between">
                            <div class="card-title">
                                
                            </div>
                            <div id="button_datatable" class="d-none d-lg-block"></div>
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                        </div>
                            <div class="card-body">
                                <table class="table table-striped fs-6 g-5" id="dt_datatable">
                                    <thead class="text-gray-400">
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7">
                                            <th class="min-w-100px text-black">No</th>
                                            <th class="min-w-100px text-black">User Name</th>
                                            <th class="min-w-100px text-black">Phone</th>
                                            <th class="min-w-100px text-black">Email</th>
                                            <th class="min-w-100px text-black">Status</th>
                                            <th class="min-w-100px text-black">Dibuat Pada</th>
                                            <th class="min-w-100px text-black">Action</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <tbody class="">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>Data Kosong</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::users-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Card Body-->
        </div>
    </div>

    @include('users.create')
    @include('users.edit')
    @include('users.show')

    <form id="form_delete" class="d-none">
        <input type="hidden" name="id" id="delete_id">
        @csrf
        @method('DELETE')
    </form>

    @push('js')
    <script>

        var selector_id = '#dt_datatable'
        var button_edit = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="rgba(172,5,5,1)"><path d="M5 18.89H6.41421L15.7279 9.57627L14.3137 8.16206L5 17.4758V18.89ZM21 20.89H3V16.6473L16.435 3.21231C16.8256 2.82179 17.4587 2.82179 17.8492 3.21231L20.6777 6.04074C21.0682 6.43126 21.0682 7.06443 20.6777 7.45495L9.24264 18.89H21V20.89ZM15.7279 6.74785L17.1421 8.16206L18.5563 6.74785L17.1421 5.33363L15.7279 6.74785Z"></path></svg>'
        var button_detail = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="rgba(211,8,8,1)"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>'
        var button_delete = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="rgba(183,6,6,1)"><path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z"></path></svg>'

        function fetchData() {
            $.ajax({
                url: "/users",
                type: "GET",
                dataType: "JSON",
                beforeSend: function () {
                    $("#dt_datatable tbody").html(
                    `<tr>
                        <td colspan="5" class="text-center">
                        <div class="loader-wrapper">
                                <div class="loader-container">
                                    <div class="line-scale-pulse-out loader-deep-orange">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>`
                    );
                },
                success: function (res) {
                    if (res.data.length === 0) {
                        $("#dt_datatable tbody").html(
                        `<tr>
                            <td colspan="5" class="text-center">
                                <h4 class="text-black">Data Kosong!!</h4>
                            </td>
                        </tr>`
                        );
                    } else {
                    let data = res.data.map((v, i) => {
                        return `
                        <tr>
                            <td>${i+1}</td>
                            <td>${v.name}</td>
                            <td>${v.phone}</td>
                            <td>${v.email}</td>
                            <td>${v.status}</td>
                            <td>${v.created_at}</td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-xs btn-icon btn-rounded btn-outline-info btn_show" data-id="${v.id}">${button_detail}</button>
                                    <button type="button" class="btn btn-xs btn-icon btn-rounded btn-outline-info btn_edit" data-id="${v.id}">${button_edit}</button>
                                    <button type="button" class="btn btn-icon btn-outline-info btn-sm btn_hapus" data-id="${v.id}">${button_delete}</button>
                                </div>
                            </td>
                        </tr>
                        `;
                        }).join("");
                        $("#dt_datatable tbody").html(data);
                    }
                },
                    error: function (err) {
                        $("#dt_datatable tbody").html(
                        `<tr>
                            <td colspan="5" class="text-danger">
                                <h4 class="text-white">Internal Server Error!!</h4>
                            </td>
                        </tr>`
                        );
                    },
                });
        }

        function addTableButtons(messageTop) {
                var table = $(selector_id).DataTable();
                new $.fn.dataTable.Buttons(table, {
                    buttons: [
                        {
                            text: 'Tambah User',
                            className: "add-data",
                            action: function (e, dt, node, config) {
                                $('#modal_add').modal('show')
                            },
                        }
                    ]
                });
                table.buttons(0, null).containers().appendTo('#button_datatable');
            }
            
        $(document).ready(function(){

            addTableButtons('User');
            
            fetchData()

            $(selector_id).on('click', '.btn_edit', function () {
                let id = $(this).data('id')
                let button = $(this)
                $.ajax({
                url: `/users/show/${id}`,
                type: 'GET',
                dataType: 'JSON',
                beforeSend: function () {
                    button.html('<i class="la la-spinner spinner"></i>')
                },
                success: function (res) {
                    $('#modal_edit').modal('show')
                    $('#edit_id').val(res.data.id)
                    $('#edit_name').val(res.data.name)
                    $('#edit_phone').val(res.data.phone)
                    $('#edit_email').val(res.data.email)
                },
                complete: function () {
                    button.html(button_edit).prop('disabled', false)
                },
                error: function (err) {
                    console.log(err)
                }
                })
            })
            
            $(selector_id).on('click', '.btn_show', function () {
                let id = $(this).data('id')
                let button = $(this)
                $.ajax({
                url: `/users/show/${id}`,
                type: 'GET',
                dataType: 'JSON',
                beforeSend: function () {
                    button.html('<i class="la la-spinner spinner"></i>')
                },
                success: function (res) {
                    $('#modal_detail').modal('show')
                    $('#show_id').val(res.data.id)
                    $('#show_name').val(res.data.name)
                    $('#show_phone').val(res.data.phone)
                    $('#show_email').val(res.data.email)
                },
                complete: function () {
                    button.html(button_detail).prop('disabled', false)
                },
                error: function (err) {
                    console.log(err)
                }
                })
            })
            $(selector_id).on('click', '.btn_hapus', function () {
                let id = $(this).data('id')
                let button = $(this)
                $.ajax({
                url: `/users/show/${id}`,
                type: 'GET',
                dataType: 'JSON',
                beforeSend: function () {
                    button.html('<i class="la la-spinner spinner"></i>')
                },
                success: function (res) {
                $('#delete_id').val(res.data.id)
                Swal.fire({
                    title: 'Apakah Anda Menghapus Ini?',
                    text: "Anda tidak akan dapat mengembalikan ini",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya!',
                    cancelButtonText: 'Tidak'
                }).then((result) => {
                    if (result.value) {
                        event.preventDefault();
                        $("#form_delete").submit()
                        Swal.fire(
                        'Berhasil Hapus!',
                        'Data Anda Telah Terhapus.',
                        'success'
                        )
                    }
                })
                },
                complete: function () {
                    button.html(button_delete).prop('disabled', false)
                },
                error: function (err) {
                    console.log(err)
                }
                })
            })

            $('#form_add').validate({
                submitHandler: function (form) {
                    $.ajax({
                    url: '/users/store',
                    type: 'POST',
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    
                    success: function (res) {
                        $('#modal_add').modal('hide');
                        Swal.fire({
                            title: "Good job!",
                            text: res.message,
                            type: 'success',
                            confirmButtonClass: 'btn btn-primary',
                            buttonsStyling: false,
                            showConfirmButton: false,
                            timer: 2000
                        });
                        fetchData();
                    },
                    error: function(err) {
                        Swal.fire({
                            title: "Failed!",
                            text: err.message,
                            type: 'error',
                            confirmButtonClass: 'btn btn-primary',
                            buttonsStyling: false,
                            showConfirmButton: false,
                            timer: 2000
                        });
                    },
                    complete: function() {
                            $('#form_add').trigger("reset")
                            $('#btn_save').prop('disabled', false).html('Simpan')
                        }
                    })
                }
            })
            $('#form_edit').validate({
                submitHandler: function (form) {
                    let id = $('#edit_id').val()
                    $.ajax({
                        url: "/users/update/"+id,
                        type: 'POST',
                        data: new FormData(form),
                        contentType: false,
                        processData: false,
                        beforeSend: function () {
                            $('#btn_update').prop('disabled', true).html('Update <i class="la la-spinner spinner"></i>')
                        },
                        success: function (res) {
                        
                        Swal.fire({
                            title: "Good job!",
                            text: res.message,
                            type: 'success',
                            confirmButtonClass: 'btn btn-primary',
                            buttonsStyling: false,
                            showConfirmButton: false,
                            timer: 2000
                        });
                            $('#modal_edit').modal('hide');
                            fetchData();
                        },
                        error: function(err) {
                            console.log(err);
                            Swal.fire({
                            title: "Failed!",
                            text: err.message,
                            type: 'error',
                            confirmButtonClass: 'btn btn-primary',
                            buttonsStyling: false,
                            showConfirmButton: false,
                            timer: 2000
                            });
                        },
                        complete: function() {
                            $('#form_edit').trigger("reset")
                            $('#btn_update').prop('disabled', false).html('Update')
                        }
                    })
                }
            })

            })
            $('#form_delete').validate({
                submitHandler: function (form) {
                let id = $('#delete_id').val()
                $.ajax({
                    url: `/users/delete/${id}`,
                    type: 'POST',
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    success: function (res) {
                        fetchData();
                    },
                    error: function(err) {
                    console.log(err)
                    },
                })
                }
            })
        </script>
    @endpush
@endsection

