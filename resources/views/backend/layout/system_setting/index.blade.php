@extends('backend.app')

@section('title', 'System Setting')

@push('style')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 150px;
        }

        .dropify-wrapper .dropify-message span.file-icon {
            font-size: 30px !important;
        }
    </style>
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">System Setting</h4>
                        <p class="card-description">Setup your system, please <code>provide your valid
                                data</code>.</p>
                        <div class="mt-4">
                            <form class="forms-sample" method="POST" action="{{ route('admin.system-settings.update') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3 form-group row">
                                    <div class="col">
                                        <label>Logo:</label>
                                        <input type="file"
                                            class="form-control form-control-md border-left-0 dropify @error('logo') is-invalid @enderror"
                                            name="logo"
                                            data-default-file="@isset($setting){{ asset($setting->logo) }}@endisset">
                                        @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Favicon:</label>
                                        <input type="file"
                                            class="form-control form-control-md border-left-0 dropify @error('favicon') is-invalid @enderror"
                                            name="favicon"
                                            data-default-file="@isset($setting){{ asset($setting->favicon) }}@endisset">
                                        @error('favicon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 form-group row">
                                    <div class="col-sm-4">
                                        <label>Phone:</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone" placeholder="Phone"
                                            value="{{ old('phone') ?? ($setting->phone ?? '') }}">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Email:</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email" placeholder="Email"
                                            value="{{ old('email') ?? ($setting->email ?? '') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Office Address:</label>
                                        <input type="text"
                                            class="form-control @error('office_address') is-invalid @enderror"
                                            name="office_address" placeholder="Office Address"
                                            value="{{ old('office_address') ?? ($setting->office_address ?? '') }}">
                                        @error('office_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- compy right  --}}
                                    <div class="col-sm-12">
                                        <label>Copyright:</label>
                                        <input type="text" class="form-control @error('copyright') is-invalid @enderror"
                                            name="copyright" placeholder="Company Copyright"
                                            value="{{ old('copyright') ?? ($setting->copyright ?? '') }}">
                                        @error('copyright')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- facebook  --}}
                                    <div class="col-sm-12">
                                        <label>Facebook:</label>
                                        <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                                            name="facebook" placeholder="Facebook Link"
                                            value="{{ old('facebook') ?? ($setting->facebook ?? '') }}">
                                        @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- instagram  --}}
                                    <div class="col-sm-12">
                                        <label>instagram:</label>
                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror"
                                            name="instagram" placeholder="instagram Link"
                                            value="{{ old('instagram') ?? ($setting->instagram ?? '') }}">
                                        @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- youtube  --}}
                                    <div class="col-sm-12">
                                        <label>Youtube:</label>
                                        <input type="text" class="form-control @error('youtube') is-invalid @enderror"
                                            name="youtube" placeholder="Youtube Link"
                                            value="{{ old('youtube') ?? ($setting->youtube ?? '') }}">
                                        @error('youtube')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </form>
                        </div>
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
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error(error.stack);
            });

        $('.dropify').dropify();
    </script>
@endpush
