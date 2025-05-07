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
                        <h4 class="card-title">{{ isset($what_make) ? 'Update What Makes' : 'Add What Makes' }}</h4>
                        <form id="my-form" class="forms-sample"
                            action="{{ isset($what_make) ? route('admin.cms.what-make.update', $what_make->id) : route('admin.cms.what-make.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (isset($what_make))
                                @method('PUT')
                            @endif

                            <div class="row">
                                <div class="col-md-12">

                                    {{-- Title --}}
                                    <div class="form-group mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            name="title" placeholder="Title Here..."
                                            value="{{ old('title') ?? ($what_make->title ?? '') }}">
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Main Content --}}
                                    <div class="form-group mb-3">
                                        <label class="form-label">Main Content</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Main content here..." id="content">{{ old('content') ?? ($what_make->content ?? '') }}</textarea>
                                        @error('content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Highlights & Image --}}
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    @php
                                                        $storedHighlights =
                                                            old('highlights') ??
                                                            (isset($what_make)
                                                                ? json_decode($what_make->sub_content, true)
                                                                : []);
                                                    @endphp
                                                    @for ($i = 0; $i < 4; $i++)
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Highlight {{ $i + 1 }}</label>
                                                            <input type="text"
                                                                class="form-control @error('highlights.' . $i) is-invalid @enderror"
                                                                name="highlights[]" placeholder="Enter highlight..."
                                                                value="{{ $storedHighlights[$i]['highlight'] ?? '' }}">
                                                            @error('highlights.' . $i)
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>

                                            {{-- Image --}}
                                            <div class="col-md-4">
                                                <label class="form-label">Upload Image</label>
                                                <input type="file"
                                                    class="dropify form-control @error('image') is-invalid @enderror"
                                                    name="image"
                                                    data-default-file="{{ isset($what_make->image) && file_exists(public_path($what_make->image))
                                                        ? asset($what_make->image)
                                                        : asset('backend/images/image-not.png') }}">
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Sub Contents --}}
                                    @php
                                        $subContentData =
                                            old('sub_contents') ??
                                            (isset($what_make) ? json_decode($what_make->sub_content, true) : []);
                                    @endphp
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Sub Content 1</label>
                                                <textarea class="form-control @error('sub_contents.0') is-invalid @enderror" name="sub_contents[]"
                                                    placeholder="Sub content here..." id="sub_contents1">{{ $subContentData[0]['sub_content'] ?? '' }}</textarea>
                                                @error('sub_contents.0')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Sub Content 2</label>
                                                <textarea class="form-control @error('sub_contents.1') is-invalid @enderror" name="sub_contents[]"
                                                    placeholder="Sub content here..." id="sub_contents2">{{ $subContentData[1]['sub_content'] ?? '' }}</textarea>
                                                @error('sub_contents.1')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
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
        const editors = ['#content', '#sub_contents1', '#sub_contents2'];
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
    </script>
@endpush
