@extends('admin.layouts.app')

@section('content-admin')
<div class="app-content-wrapper">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-md-10">
            <div class="card-wrapper">
                <div class="card-body">
                    <form action="{{ route('add-blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="property-details-wrapper">
                            <div class="property-details mb-25">
                                <div class="property-details-thumb details-slide-full mb-30">
                                    <div class="property-thumb-chnage">
                                        <div class="property-thumb-preview">
                                            <div class="property-thumb-preview-box" id="imagePreview" style="background-image: url('{{ asset('assets/images/blog/image-mockup.png') }}');">
                                            </div>
                                        </div>
                                        <div class="property-thumb-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="image">
                                            <label for="imageUpload">Click images here</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-details-content">
                                    <div class="form-input-box mb-20">
                                        <div class="form-input-title">
                                            <label for="propertyTitle">Blog Title <span>*</span></label>
                                        </div>
                                        <div class="form-input">
                                            <input id="propertyTitle" type="text" name="blog_title" required>
                                        </div>
                                    </div>
                                    <div class="form-input-box mb-20">
                                        <div class="form-input-title">
                                            <label for="propertyTitle">Writter <span>*</span></label>
                                        </div>
                                        <div class="form-input">
                                            <input id="propertyTitle" type="text" name="writter" required>
                                        </div>
                                    </div>
                                    <div class="property-details-content mb-20">
                                        <h4 class="property-details-title-two">Blog Content</h4>
                                        <div class="form-input">
                                            <textarea id="tinymce_simple_textarea" name="blog_content"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="bd-btn btn-style btn-hover-x hover-white">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
