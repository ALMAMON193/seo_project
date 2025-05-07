@extends('backend.app')

@section('title', 'Update Home Who We Are Content')

@push('style')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 150px;
        }

        .dropify-wrapper .dropify-message p {
            font-size: 35px !important;
        }

        #qb-toolbar-container {
            display: none !important;
        }
    </style>
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update What Trust</h4>
                        <form id="my-form" class="forms-sample"
                            action="{{ isset($why_trust)
                                ? route('admin.cms.what-trust.update', $why_trust->id)
                                : route('admin.cms.what-trust.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (isset($why_trust))
                                @method('PUT')
                            @endif

                            <div class="row">
                                <div class="col-md-12 col-12">

                                    {{-- Title --}}
                                    <div class="form-group mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            name="title" placeholder="Title Here..."
                                            value="{{ old('title') ?? ($why_trust->title ?? '') }}">
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Content --}}
                                    <div class="form-group mb-3">
                                        <label class="form-label">Content</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" placeholder="Content Here...">{{ old('content') ?? ($why_trust->content ?? '') }}</textarea>
                                        @error('content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Button Text --}}
                                    <div class="form-group mb-3">
                                        <label class="form-label">Button Text</label>
                                        <input type="text" class="form-control @error('btn_text') is-invalid @enderror"
                                            name="btn_text" placeholder="Button Text Here..."
                                            value="{{ old('btn_text') ?? ($why_trust->btn_text ?? '') }}">
                                        @error('btn_text')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/41.3.1/ckeditor.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script src="{{ asset('backend/vendors/datatable/js/datatables.min.js') }}"></script>
    {{-- sweet alart --}}
    <script src="{{ asset('backend/vendors/sweetalert/sweetalert2@11.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const editors = ['#content', '#sub_content'];
        editors.forEach(selector => {
            ClassicEditor
                .create(document.querySelector(selector))
                .then(editor => {
                    console.log(`Editor for ${selector} was initialized`, editor);
                })
                .catch(error => {
                    console.error(error.stack);
                });
        });

        $('.dropify').dropify();

        $(document).ready(function() {
            var searchable = [];
            var selectable = [];
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                }
            });

            if (!$.fn.DataTable.isDataTable('#data-table')) {
                let dTable = $('#data-table').DataTable({
                    order: [],
                    lengthMenu: [
                        [10, 25, 50, 100, 200, 500, -1],
                        ["10", "25", "50", "100", "200", "500", "All"]
                    ],

                    pageLength: 10,
                    processing: true,
                    responsive: true,
                    serverSide: true,

                    language: {
                        processing: `<div class="text-center">
                            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                            </div>`,
                        lengthMenu: '_MENU_',
                        search: '',
                        searchPlaceholder: 'Search..'
                    },


                    scroller: {
                        loadingIndicator: false
                    },
                    pagingType: "full_numbers",
                    dom: "<'row justify-content-between table-topbar'<'col-md-2 col-sm-4 px-0'l><'col-md-2 col-sm-4 px-0'f>>tipr",
                    ajax: {
                        url: "{{ route('admin.cms.home.about.index') }}",
                        type: "get",
                    },

                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'title',
                            name: 'title',
                            orderable: true,
                            searchable: true
                        },

                        {
                            data: 'image',
                            name: 'image',
                            orderable: true,
                            searchable: true
                        },

                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],
                });

                new DataTable('#example', {
                    responsive: true
                });
            }
        });

        // Sweet alert Delete confirm
        const deleteAlert = (id) => {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteAuction(id);
                }
            });
        }
        // deleting an auction
        const deleteAuction = (id) => {
            try {
                let url = '{{ route('admin.cms.home.about.destroy', ':id') }}';
                let csrfToken = `{{ csrf_token() }}`;
                $.ajax({
                    type: "DELETE",
                    url: url.replace(':id', id),
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: (response) => {
                        $('#data-table').DataTable().ajax.reload();
                        if (response.success === true) {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Data has been deleted.",
                                icon: "success"
                            });
                        } else if (response.errors) {
                            console.log(response.errors[0]);
                            errorAlert();
                        } else {
                            toastr.success(response.message);
                        }
                    },
                    error: (error) => {
                        console.log(error.message);
                        errorAlert()
                    }
                })
            } catch (e) {
                console.log(e)
            }
        }
    </script>
@endpush
