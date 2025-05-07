@extends('backend.app')

@section('title', 'Update About SEO ESP content')

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
                        <h4 class="card-title">Update About SEO ESP content</h4>
                        <form id="my-form" class="forms-sample" action="{{ route('admin.cms.about-us.seo-esp.update.content') }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- Title start --}}
                            <div class="form-group mb-3">
                                <label class="form-lable">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                       id="title" name="title" placeholder="Title Here"
                                       value="{{ old('title') ?? ($data->title ?? '') }}">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- Title End --}}
                            {{-- Sub Title start --}}
                            <div class="form-group mb-3">
                                <label class="form-lable">Sub title</label>
                                <input type="text" class="form-control @error('sub_title') is-invalid @enderror"
                                       id="sub_title" name="sub_title" placeholder=" Sub Title Here"
                                       value="{{ old('sub_title') ?? ($data->sub_title ?? '') }}">
                                @error('sub_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- Sub Title End --}}

                            {{-- Content Start --}}
                            <div class="form-group mb-3">
                                <label class="form-lable">Content</label>
                                <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content"
                                          placeholder="Content Here...">{{ old('content') ?? ($data->content ?? '') }}</textarea>
                                @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- Content End --}}


                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file"
                                           data-default-file="{{ !empty($data->image) && file_exists(public_path($data->image)) ? url($data->image) : url('backend/images/image-not.png') }}"
                                           class="dropify form-control @error('image') is-invalid @enderror"
                                           name="image" id="image">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Number of Member</label>
                                    <input type="number" class="form-control @error('btn_text') is-invalid @enderror"
                                           id="btn_text" name="btn_text" placeholder="Please Enter The Number"
                                           value="{{ old('btn_text') ?? ($data->btn_text ?? '') }}">
                                    @error('btn_text')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- background Image --}}
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary" onclick="resetForm()">Cancel
                            </button>
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

    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error(error.stack);
            });

        $('.dropify').dropify();
    </script>
@endpush
