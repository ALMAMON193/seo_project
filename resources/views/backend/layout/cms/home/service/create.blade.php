@extends('backend.app')

@section('title', 'Create Service Lists')

@push('style')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Service List</h4>
                        <form id="my-form" class="forms-sample" action="{{ route('admin.cms.home.service.store') }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            {{-- title why chose list start --}}
                            <div class="form-group mb-3">
                                <label class="form-lable">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                       id="title"
                                       name="title"
                                       placeholder="Title Here..."
                                       value="{{ old('title') ?? '' }}">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- title why chose list end  --}}
                            <!-- Description -->
                            <div class="form-group">
                                <label for="content" class="form-label">Content <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content"
                                          placeholder="Enter Description here....">{{ old('content') ?? '' }}</textarea>
                                @error('content')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Image How It Works list start --}}
                            <div class="form-group mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="dropify form-control @error('image') is-invalid @enderror" name="image" id="image"
                                       data-default-file="{{ url('backend/images/image-not.png') }}">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Image How It Works list end --}}
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
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

 <script>
     $('#content').summernote({
         placeholder: 'Enter description...',
         tabsize: 2,
         height: 100
     });
 </script>
@endpush
