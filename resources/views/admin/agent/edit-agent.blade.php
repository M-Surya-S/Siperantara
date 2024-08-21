@extends('admin.layouts.app')
@section('content-admin')
<div class="app-content-wrapper">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-md-10">
            <div class="card-wrapper">
                <div class="card-body">
                    <form action="{{ route('update-agent.update', $agent->id) }}" method="POST", enctype="multipart/form-data">
                        @csrf
                        <div class="property-details-wrapper">
                            <div class="property-details mb-25">
                                <div class="property-details-thumb details-slide-full mb-30">
                                    <div class="property-thumb-chnage">
                                        <div class="property-thumb-preview">
                                            <div class="property-thumb-preview-box" id="imagePreview" style="background-image: url('{{ Storage::url($agent->image) }}');">
                                            </div>
                                        </div>
                                        <div class="property-thumb-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="image">
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
                                            <input id="propertyTitle" type="text" name="name" value="{{ $agent->name }}" required>
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
                                                            <input id="propertyPrice" type="text" name="address" value="{{ $agent->address }}" required>
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
                                                        <input id="propertyDiscount" type="text" name="email" value="{{ $agent->email }}" required>
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
                                                        <input id="propertyTag" type="text" name="phone_number" value="{{ $agent->phone_number }}" required>
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
                                                    <label for="apartmentVideoLink">Instagram Link</label>
                                                </div>
                                                <div class="form-input">
                                                    <input id="apartmentVideoLink" type="url" name="instagram_link" value="{{ $agent->instagram_link }}">
                                                </div>
                                            </div>
                                            <div class="form-input-box mb-10">
                                                <div class="form-input-title">
                                                    <label for="apartmentVideoLink">LinkedIn Link</label>
                                                </div>
                                                <div class="form-input">
                                                    <input id="apartmentVideoLink" type="url" name="linkedin_link" value="{{ $agent->linkedin_link }}">
                                                </div>
                                            </div>
                                            <div class="form-input-box mb-10">
                                                <div class="form-input-title">
                                                    <label for="apartmentVideoLink">Facebook Link</label>
                                                </div>
                                                <div class="form-input">
                                                    <input id="apartmentVideoLink" type="url" name="facebook_link" value="{{ $agent->facebook_link }}">
                                                </div>
                                            </div>
                                            <div class="form-input-box">
                                                <div class="form-input-title">
                                                    <label for="apartmentVideoLink">Twitter Link</label>
                                                </div>
                                                <div class="form-input">
                                                    <input id="apartmentVideoLink" type="url" name="twitter_link" value="{{ $agent->twitter_link }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="bd-btn btn-style btn-hover-x hover-white">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
