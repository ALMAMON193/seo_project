@extends('backend.app')

@section('title', 'Edit About Lists')

@push('style')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 150px;
        }
    </style>
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit service List</h4>
                        <form id="my-form" class="forms-sample" action="{{ route('admin.cms.home.service.update.list', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Title Field -->
                            <div class="form-group mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title Here..." value="{{ old('title') ?? $data->title }}">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Description -->
                            <div class="form-group">
                                <label for="content" class="form-label">Content <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content"
                                          placeholder="Enter Description here....">{{ old('content') ?? $data->content }}</textarea>
                                @error('content')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Image How It Works list start --}}
                            <div class="form-group mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" data-default-file="{{ !empty($data->image) && file_exists(public_path($data->image)) ? url($data->image) : url('backend/images/image-not.png') }}" class="dropify form-control @error('image') is-invalid @enderror" name="image" id="image">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Image How It Works list end --}}

                            <!-- Submit Button -->
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
        $('#content').summernote({
            placeholder: 'Enter description...',
            tabsize: 2,
            height: 100
        });

    </script>
@endpush
