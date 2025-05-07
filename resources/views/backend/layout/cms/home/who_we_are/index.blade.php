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
                        <h4 class="card-title">
                            {{ isset($who_we_are) ? 'Update' : 'Create' }} Home Who We Are Content
                        </h4>

                        <form 
                            id="my-form" 
                            class="forms-sample" 
                            action="{{ isset($who_we_are) 
                                ? route('admin.cms.home.who-we-are.update', $who_we_are->id) 
                                : route('admin.cms.home.who-we-are.store') 
                            }}" 
                            method="POST" 
                            enctype="multipart/form-data"
                        >
                            @csrf
                            @if(isset($who_we_are))
                                @method('POST')
                            @endif

                            {{-- Title --}}
                            <div class="form-group mb-3">
                                <label>Title</label>
                                <input type="text" 
                                       class="form-control @error('title') is-invalid @enderror" 
                                       name="title" 
                                       value="{{ old('title') ?? $who_we_are->title ?? '' }}" 
                                       placeholder="Title Here...">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Content --}}
                            <div class="form-group mb-3">
                                <label>Content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" 
                                          name="content" id="content" 
                                          placeholder="Content Here...">{{ old('content') ?? $who_we_are->content ?? '' }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Sub Title --}}
                            <div class="form-group mb-3">
                                <label>Sub Title</label>
                                <input type="text" 
                                       class="form-control @error('sub_title') is-invalid @enderror" 
                                       name="sub_title" 
                                       value="{{ old('sub_title') ?? $who_we_are->sub_title ?? '' }}" 
                                       placeholder="Sub Title Here...">
                                @error('sub_title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Highlight & Content Blocks --}}
                            @php
                                $subContent = old('highlight1') ? [
                                    ['highlight' => old('highlight1'), 'content' => old('content1')],
                                    ['highlight' => old('highlight2'), 'content' => old('content2')],
                                    ['highlight' => old('highlight3'), 'content' => old('content3')],
                                ] : (isset($who_we_are) ? json_decode($who_we_are->sub_content, true) : []);
                            @endphp

                            @for($i = 0; $i < 3; $i++)
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Highlight {{ $i + 1 }}</label>
                                            <input type="text" 
                                                   name="highlight{{ $i + 1 }}" 
                                                   class="form-control @error('highlight' . ($i + 1)) is-invalid @enderror" 
                                                   value="{{ old('highlight' . ($i + 1)) ?? $subContent[$i]['highlight'] ?? '' }}">
                                            @error('highlight' . ($i + 1))
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-8">
                                            <label>Content {{ $i + 1 }}</label>
                                            <input type="text" 
                                                   name="content{{ $i + 1 }}" 
                                                   class="form-control @error('content' . ($i + 1)) is-invalid @enderror" 
                                                   value="{{ old('content' . ($i + 1)) ?? $subContent[$i]['content'] ?? '' }}">
                                            @error('content' . ($i + 1))
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            @endfor

                            {{-- Image --}}
                            <div class="form-group mb-3">
                                <label>Image</label>
                                <input type="file" 
                                       class="dropify form-control @error('image') is-invalid @enderror" 
                                       name="image"
                                       data-default-file="{{ isset($who_we_are->image) && file_exists(public_path($who_we_are->image)) ? url($who_we_are->image) : asset('backend/images/image-not.png') }}">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Button Text --}}
                            <div class="form-group mb-3">
                                <label>Button Text</label>
                                <input type="text" 
                                       class="form-control @error('btn_text') is-invalid @enderror" 
                                       name="btn_text" 
                                       value="{{ old('btn_text') ?? $who_we_are->btn_text ?? '' }}" 
                                       placeholder="Button Text Here...">
                                @error('btn_text')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
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
        $('.dropify').dropify();

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
    </script>
@endpush
