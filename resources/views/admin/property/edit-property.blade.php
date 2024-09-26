@extends('admin.layouts.app')

@section('content-admin')
    <div class="app-content-wrapper">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-md-10">
                <div class="card-wrapper">
                    <div class="card-body">
                        <form action="{{ route('update-property.update', $property->property_id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="property-details-wrapper">
                                <div class="property-details mb-25">
                                    <div class="property-details-content">
                                        <div class="form-input-box mb-40">
                                            <h1 class="property-details-title ">EDIT PROPERTY</h1>
                                        </div>
                                        <div class="form-input-box mb-20">
                                            <div class="form-input-title">
                                                <label for="propertyTitle">Property Title <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input id="propertyTitle" type="text" name="property_title"
                                                    value="{{ $property->property_title }}" required>
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
                                                                <input id="propertyPrice" type="text"
                                                                    name="property_price"
                                                                    value="{{ $property->property_price }}" required>
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
                                                            <input id="propertyDiscount" type="text" name="discount"
                                                                value="{{ $property->discount }}">
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
                                                            <input id="propertyTag" type="text" name="property_tag"
                                                                value="{{ $property->property_tag }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mt-20">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="propertyTag">Address
                                                                <span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="propertyTag" type="text" name="address"
                                                                value="{{ $property->address }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mt-20">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="propertyDiscount">Featured</label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="propertyDiscount" type="text" name="featured" 
                                                                value="{{ $property->featured }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mt-20">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="propertyTag">Property Category
                                                                <span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="propertyTag" type="text" name="property_category"
                                                                value="{{ $property->property_category }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-details-content mb-20">
                                            <h4 class="property-details-title-two">Description</h4>
                                            <div class="form-input">
                                                <textarea id="tinymce_simple_textarea" name="description" required>{{ $property->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="property-details-meta mb-20">
                                            <h4 class="property-details-title-two">Property Details</h4>
                                            <div class="row g-5">
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="lotArea">Lot Area:<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="lotArea" type="text" name="lot_area"
                                                                value="{{ $property->lot_area }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="homeArea">Home Area:<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="homeArea" type="text" name="home_area"
                                                                value="{{ $property->home_area }}" required>
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
                                                            <input id="lotDimensions" type="text" name="lot_dimensions"
                                                                value="{{ $property->lot_dimensions }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="numberOfRoom">Rooms:<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="numberOfRoom" type="text" name="rooms"
                                                                value="{{ $property->rooms }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="numberOfBeds">Beds:<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="numberOfBeds" type="text" name="beds"
                                                                value="{{ $property->beds }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="numberOfBaths">Baths:<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="numberOfBaths" type="text" name="baths"
                                                                value="{{ $property->baths }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="PropertyStatus">floors:<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="PropertyStatus" type="text" name="floors"
                                                                value="{{ $property->floors }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label
                                                                for="numberOfVerandaBalcony">Veranda/Balcony:<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="numberOfVerandaBalcony" type="text"
                                                                name="veranda_balcony"
                                                                value="{{ $property->veranda_balcony }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="builtYear">Year built:<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="builtYear" type="text" name="year_built"
                                                                value="{{ $property->year_built }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="PropertyStatus">Certificate:<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="PropertyStatus" type="text" name="certificate"
                                                                value="{{ $property->certificate }}" required>
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
                                                            <input id="PropertyStatus" type="text"
                                                                name="property_status"
                                                                value="{{ $property->property_status }}" required>
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
                                                            <input id="livingRoom" type="text" name="living_room"
                                                                value="{{ $property->living_room }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="garage">Garage <span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="garage" type="text" name="garage"
                                                                value="{{ $property->garage }}" required>
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
                                                            <input id="diningArea" type="text" name="dining_area"
                                                                value="{{ $property->dining_area }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="bedroom">Bedroom <span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="bedroom" type="text" name="bedroom"
                                                                value="{{ $property->bedroom }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="bathroom">Bathroom <span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="bathroom" type="text" name="bathroom"
                                                                value="{{ $property->bathroom }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="gymArea">Gym Area <span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="gymArea" type="text" name="gym_area"
                                                                value="{{ $property->gym_area }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="garden">Garden <span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="garden" type="text" name="garden"
                                                                value="{{ $property->garden }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="parking">Parking <span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="parking" type="text" name="parking"
                                                                value="{{ $property->parking }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-details-gallery mb-20">
                                            <h4 class="property-details-title-two">Property Gallery</h4>
                                            <div class="property-gallery-dropzone">
                                                <div class="dropzone dz-clickable dz-started text-center" id="myDropzone">
                                                    <div class="property-thumb-chnage">
                                                        @php
                                                            $filePaths = json_decode($property->image);
                                                        @endphp
                                                        @foreach ($filePaths as $filePath)
                                                            <div class="dz-preview dz-image-preview">
                                                                <div class="dz-image">
                                                                    <img data-dz-thumbnail="" alt="image"
                                                                        src="{{ Storage::url($filePath) }}">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <div class="property-thumb-edit">
                                                            <input type='file' id="imageUpload"
                                                                accept=".png, .jpg, .jpeg" name="image[]" multiple>
                                                            <label for="imageUpload">Update images here</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-details-features mb-20">
                                            <h4 class="property-details-title-two">Benefits</h4>
                                            <div class="row gy-5">
                                                @php
                                                    $benefits = json_decode($property->benefits);
                                                @endphp
                                                <div class="col-xl-4 col-lg-6 col-md-12">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="advantagesList1">Advantages List Item
                                                                1</label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="advantagesList1" type="text" name="benefit_1"
                                                                value="{{ $benefits[0] }}">
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
                                                            <input id="advantagesList1" type="text" name="benefit_5"
                                                                value="{{ $benefits[4] }}">
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
                                                            <input id="advantagesList1" type="text" name="benefit_9"
                                                                value="{{ $benefits[8] }}">
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
                                                            <input id="advantagesList1" type="text" name="benefit_2"
                                                                value="{{ $benefits[1] }}">
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
                                                            <input id="advantagesList1" type="text" name="benefit_6"
                                                                value="{{ $benefits[5] }}">
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
                                                            <input id="advantagesList1" type="text" name="benefit_10"
                                                                value="{{ $benefits[9] }}">
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
                                                            <input id="advantagesList1" type="text" name="benefit_3"
                                                                value="{{ $benefits[2] }}">
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
                                                            <input id="advantagesList1" type="text" name="benefit_7"
                                                                value="{{ $benefits[6] }}">
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
                                                            <input id="advantagesList1" type="text" name="benefit_11"
                                                                value="{{ $benefits[10] }}">
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
                                                            <input id="advantagesList1" type="text" name="benefit_4"
                                                                value="{{ $benefits[3] }}">
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
                                                            <input id="advantagesList1" type="text" name="benefit_8"
                                                                value="{{ $benefits[7] }}">
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
                                                            <input id="advantagesList1" type="text" name="benefit_12"
                                                                value="{{ $benefits[11] }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-details-location mb-20">
                                            <h4 class="property-details-title-two">Link G-Maps Location</h4>
                                            <div class="form-input">
                                                <input id="apartmentLocationLink" type="url" name="link_location"
                                                    value="{{ $property->link_location }}" required>
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
