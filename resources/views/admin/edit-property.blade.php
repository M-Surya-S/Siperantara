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
                                            <label for="imageUpload">Click images here</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-details-content">
                                    <div class="form-input-box mb-20">
                                        <div class="form-input-title">
                                            <label for="propertyTitle">Property Title <span>*</span></label>
                                        </div>
                                        <div class="form-input">
                                            <input name="propertyTitle" id="propertyTitle" type="text" value="Penthouse large property">
                                        </div>
                                    </div>
                                    <div class="property-pricing mb-20">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="property-details-price">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="propertyPrice">Property
                                                                Price<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input name="propertyPrice" id="propertyPrice" type="text" value="$14,000">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="propertyDiscount">Discount</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="propertyDiscount" id="propertyDiscount" type="text" value="5.00%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="propertyTag">Property Tag
                                                            <span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="propertyTag" id="propertyTag" type="text" value="For Rent">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-details-content mb-20">
                                        <h4 class="property-details-title-two">Property Content</h4>
                                        <div class="form-input">
                                            <textarea id="tinymce_simple_textarea">Hello, World!</textarea>
                                        </div>
                                    </div>
                                    <div class="property-details-meta mb-20">
                                        <h4 class="property-details-title-two">Property Details</h4>
                                        <div class="row g-5">
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="propertyID">Property ID:
                                                            <span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="propertyID" id="propertyID" type="text" value="PT30">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="lotArea">Lot Area:<span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="lotArea" id="lotArea" type="text" value="PT30">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="homeArea">Home Area:<span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="homeArea" id="homeArea" type="text" value="150 sqft">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="lotDimensions">Lot
                                                            dimensions:<span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="lotDimensions" id="lotDimensions" type="text" value="150 sqft">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="numberOfRoom">Rooms:<span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="numberOfRoom" id="numberOfRoom" type="text" value="08">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="numberOfBeds">Beds:<span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="numberOfBeds" id="numberOfBeds" type="text" value="08">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="numberOfBaths">Baths:<span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="numberOfBaths" id="numberOfBaths" type="text" value="08">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="numberOfVerandaBalcony">Veranda/Balcony:<span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="numberOfVerandaBalcony" id="numberOfVerandaBalcony" type="text" value="05">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="builtYear">Year built:<span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="builtYear" id="builtYear" type="text" value="2024">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="PropertyStatus">Property
                                                            Status:<span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="PropertyStatus" id="PropertyStatus" type="text" value="2024">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-details-features mb-20">
                                        <h4 class="property-details-title-two">Property Features</h4>
                                        <div class="row g-5">
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="livingRoom">Living
                                                            Room<span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="livingRoom" id="livingRoom" type="text" value="20 x 16 sq feet">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="garage">Garage <span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="garage" id="garage" type="text" value="20 x 16 sq feet">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="diningArea">Dining
                                                            Area<span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="diningArea" id="diningArea" type="text" value="20 x 16 sq feet">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="bedroom">Bedroom <span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="bedroom" id="bedroom" type="text" value="20 x 16 sq feet">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="bathroom">Bathroom <span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="bathroom" id="bathroom" type="text" value="20 x 16 sq feet">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="gymArea">Gym Area <span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="gymArea" id="gymArea" type="text" value="20 x 16 sq feet">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="garden">Garden <span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="garden" id="garden" type="text" value="20 x 16 sq feet">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="parking">Parking <span>*</span></label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="parking" id="parking" type="text" value="20 x 16 sq feet">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-details-gallery mb-20">
                                        <h4 class="property-details-title-two">Property Gallery</h4>
                                        <div class="property-gallery-dropzone">
                                            <div class="dropzone dz-clickable dz-started" id="myDropzone">
                                                <div class="dz-default dz-message"><span>Upload your file
                                                        here</span></div>
                                                <div class="dz-preview dz-image-preview">
                                                    <div class="dz-image">
                                                        <img data-dz-thumbnail="" alt="image" src="assets/images/blog/blog-thumb-01.png">
                                                    </div>
                                                    <a class="dz-remove remove-btn" href="javascript:undefined;" data-dz-remove="">Remove file</a>
                                                </div>
                                                <div class="dz-preview dz-image-preview">
                                                    <div class="dz-image">
                                                        <img data-dz-thumbnail="" alt="image" src="assets/images/blog/blog-thumb-02.png">
                                                    </div>
                                                    <a class="dz-remove remove-btn" href="javascript:undefined;" data-dz-remove="">Remove file</a>
                                                </div>
                                                <div class="dz-preview dz-image-preview">
                                                    <div class="dz-image">
                                                        <img data-dz-thumbnail="" alt="image" src="assets/images/blog/blog-thumb-03.png">
                                                    </div>
                                                    <a class="dz-remove remove-btn" href="javascript:undefined;" data-dz-remove="">Remove file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-details-features mb-20">
                                        <h4 class="property-details-title-two">Benefits</h4>
                                        <div class="row gy-5">
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="advantagesList1">Advantages List Item
                                                            1</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="advantagesList" id="advantagesList1" type="text" value="Mosque/Prayer Room">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="advantagesList2">Advantages List Item
                                                            2</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="advantagesList" id="advantagesList2" type="text" value="Square Footage">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="advantagesList3">Advantages List Item
                                                            3</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="advantagesList" id="advantagesList3" type="text" value="Living Spaces">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="advantagesList4">Advantages List Item
                                                            4</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="advantagesList" id="advantagesList4" type="text" value="Flooring">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="advantagesList5">Advantages List Item
                                                            5</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="advantagesList" id="advantagesList5" type="text" value="Energy Efficiency">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="advantagesList6">Advantages List Item
                                                            6</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="advantagesList" id="advantagesList6" type="text" value="Parking">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="advantagesList7">Advantages List Item
                                                            7</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="advantagesList" id="advantagesList7" type="text" value="Security Features">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="advantagesList8">Advantages List Item
                                                            8</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="advantagesList" id="advantagesList8" type="text" value="Landscaping">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="advantagesList9">Advantages List Item
                                                            9</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="advantagesList" id="advantagesList9" type="text" value="Accessibility Features">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="advantagesList10">Advantages List Item
                                                            10</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="advantagesList" id="advantagesList10" type="text" value="HVAC System">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="advantagesList11">Advantages List Item
                                                            11</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="advantagesList" id="advantagesList11" type="text" value="Cylinder Gas">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-input-box">
                                                    <div class="form-input-title">
                                                        <label for="advantagesList12">Advantages List Item
                                                            12</label>
                                                    </div>
                                                    <div class="form-input">
                                                        <input name="advantagesList" id="advantagesList12" type="text" value="Plumbing System">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-12">
                                                <button type="submit" class="bd-half-outline-btn"><span class="text">Add More
                                                        Benefits </span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-details-location mb-20">
                                        <h4 class="property-details-title-two">Location</h4>
                                        <div class="property-details-location-map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89245.36062680863!2d25.596462799999998!3d45.652478099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b35b862aa214f1%3A0x6cf5f2ef54391e0f!2sBra%C8%99ov%2C%20Romania!5e0!3m2!1sen!2sbd!4v1707640089632!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                    <div class="property-details-plans mb-20">
                                        <h4 class="property-details-title-two">Apartment Plans</h4>
                                        <div class="property-gallery-dropzone">
                                            <div class="dropzone dz-clickable dz-started" id="newMyDropzone">
                                                <div class="dz-default dz-message"><span>Upload your file
                                                        here</span></div>
                                                <div class="dz-preview dz-image-preview">
                                                    <div class="dz-image">
                                                        <img data-dz-thumbnail="" alt="image" src="assets/images/apartment/house-plane-1.png">
                                                    </div>
                                                    <a class="dz-remove remove-btn" href="javascript:undefined;" data-dz-remove="">Remove
                                                        file</a>
                                                </div>
                                                <div class="dz-preview dz-image-preview">
                                                    <div class="dz-image">
                                                        <img data-dz-thumbnail="" alt="image" src="assets/images/apartment/house-plane-2.png">
                                                    </div>
                                                    <a class="dz-remove remove-btn" href="javascript:undefined;" data-dz-remove="">Remove file</a>
                                                </div>
                                                <div class="dz-preview dz-image-preview">
                                                    <div class="dz-image">
                                                        <img data-dz-thumbnail="" alt="image" src="assets/images/apartment/house-plane-3.png">
                                                    </div>
                                                    <a class="dz-remove remove-btn" href="javascript:undefined;" data-dz-remove="">Remove file</a>
                                                </div>
                                                <div class="dz-preview dz-image-preview">
                                                    <div class="dz-image">
                                                        <img data-dz-thumbnail="" alt="image" src="assets/images/apartment/house-plane-4.png">
                                                    </div>
                                                    <a class="dz-remove remove-btn" href="javascript:undefined;" data-dz-remove="">Remove file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-details-location mb-20">
                                        <h4 class="property-details-title-two">Apartment Video</h4>
                                        <div class="apartment-video-link">
                                            <div class="form-input-box">
                                                <div class="form-input-title">
                                                    <label for="apartmentVideoLink">Apartment Video
                                                        Link<span>*</span></label>
                                                </div>
                                                <div class="form-input">
                                                    <input name="apartmentVideoLink" id="apartmentVideoLink" type="url" value="https://www.youtube.com/watch?v=go7QYaQR494">
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
