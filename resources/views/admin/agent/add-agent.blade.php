@extends('admin.layouts.app')
@section('content-admin')
<div class="app-content-wrapper">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-md-10">
            <div class="card-wrapper">
                <div class="card-body">
                    <form action="#">
                        <div class="property-details-wrapper">
                            <div class="property-details mb-25">
                                <div class="property-details-thumb details-slide-full mb-30">
                                    <div class="property-thumb-chnage">
                                        <div class="property-thumb-preview">
                                            <div class="property-thumb-preview-box" id="imagePreview" style="background-image: url('assets/images/blog/blog-thumb-01.png');">
                                            </div>
                                        </div>
                                        <div class="property-thumb-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg">
                                            <label for="imageUpload">Upload Images</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-details-content">
                                    <div class="form-input-box mb-20">
                                        <div class="form-input-title">
                                            <label for="propertyTitle">Name<span>*</span></label>
                                        </div>
                                        <div class="form-input">
                                            <input name="propertyTitle" id="propertyTitle" type="text">
                                        </div>
                                    </div>
                                    <div class="property-pricing mb-20">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="property-details-price">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="propertyPrice">Address<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input name="propertyPrice" id="propertyPrice" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="propertyDiscount">Email<span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="propertyDiscount" id="propertyDiscount" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="propertyTag">Phone Number
                                                            <span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="propertyTag" id="propertyTag" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-details-location mb-20">
                                        <h4 class="property-details-title-two">Social Media</h4>
                                        <div class="apartment-video-link">
                                            <div class="form-input-box mb-10">
                                                <div class="form-input-title">
                                                    <label for="apartmentVideoLink">Instagram Link<span>*</span></label>
                                                </div>
                                                <div class="form-input">
                                                    <input name="apartmentVideoLink" id="apartmentVideoLink" type="url">
                                                </div>
                                            </div>
                                            <div class="form-input-box mb-10">
                                                <div class="form-input-title">
                                                    <label for="apartmentVideoLink">LinkedIn Link<span>*</span></label>
                                                </div>
                                                <div class="form-input">
                                                    <input name="apartmentVideoLink" id="apartmentVideoLink" type="url">
                                                </div>
                                            </div>
                                            <div class="form-input-box mb-10">
                                                <div class="form-input-title">
                                                    <label for="apartmentVideoLink">Facebook Link<span>*</span></label>
                                                </div>
                                                <div class="form-input">
                                                    <input name="apartmentVideoLink" id="apartmentVideoLink" type="url">
                                                </div>
                                            </div>
                                            <div class="form-input-box">
                                                <div class="form-input-title">
                                                    <label for="apartmentVideoLink">Twitter Link<span>*</span></label>
                                                </div>
                                                <div class="form-input">
                                                    <input name="apartmentVideoLink" id="apartmentVideoLink" type="url">
                                                </div>
                                            </div>
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
