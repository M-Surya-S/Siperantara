@extends('admin.layouts.app')

@section('content-admin')
    <div class="app-content-wrapper">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-md-10">
                <div class="card-wrapper">
                    <div class="card-body">
                        <form action="{{ route('add-property.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="property-details-wrapper">
                                <div class="property-details mb-25">
                                    <div class="property-details-thumb details-slide-full mb-30">
                                        <div class="property-thumb-chnage">
                                            <div class="property-thumb-preview">
                                                <div class="property-thumb-preview-box" id="imagePreview"
                                                    style="background-image: url('{{ asset('assets/images/blog/image-mockup.png') }}');">
                                                </div>
                                            </div>
                                            <div class="property-thumb-edit">
                                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg"
                                                    name='image[]' multiple required>
                                                <label for="imageUpload">Upload images here</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-details-content">
                                        <div class="form-input-box mb-20">
                                            <div class="form-input-title">
                                                <label for="propertyTitle">Property Title <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input id="propertyTitle" type="text" name="property_title" required>
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
                                                                <input id="propertyPrice" type="number"
                                                                    name="property_price" placeholder="Masukkan angka saja"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="propertyDiscount">Discount</label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="propertyDiscount" type="text"
                                                                placeholder="Contoh: 20" name="discount">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="propertyTag">Property Tag
                                                                <span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="propertyTag" type="text" name="property_tag"
                                                                placeholder="Residental, Comercial, Industrial, Land"
                                                                required>
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
                                                                placeholder="Masukkan alamat lengkap" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 mt-20">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="propertyDiscount">Featured</label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="propertyDiscount" type="text" name="featured" 
                                                                placeholder="Yes or No (default No)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 mt-20">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="propertyTag">Property Category
                                                                <span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="propertyTag" type="text" name="property_category"
                                                                placeholder="Houses, Apartments, Land, Shophouse, Warehouse"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-details-content mb-20">
                                            <h4 class="property-details-title-two">Description</h4>
                                            <div class="form-input">
                                                <textarea id="tinymce_simple_textarea" name="description" placeholder="Deskripsi dari properti" required></textarea>
                                            </div>
                                        </div>
                                        <div class="property-details-meta mb-20">
                                            <h4 class="property-details-title-two">Property Details</h4>
                                            <div class="row g-5">
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="lotArea">Lot Area (m²):<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="lotArea" type="text" name="lot_area"
                                                                placeholder="Contoh: 10 m²" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="homeArea">Home Area (m²):<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="homeArea" type="text" name="home_area"
                                                                placeholder="Contoh: 10 m²" required>
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
                                                            <input id="lotDimensions" type="text"
                                                                name="lot_dimensions" placeholder="Contoh: 10m x 10m"
                                                                required>
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
                                                                placeholder="Jumlah Ruangan" required>
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
                                                                placeholder="Jumlah Kamar Tidur" required>
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
                                                                placeholder="Jumlah Kamar Mandi" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="PropertyStatus">Floors:<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="PropertyStatus" type="text" name="floors"
                                                                placeholder="Jumlah Lantai"equired>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="numberOfVerandaBalcony">Veranda/Balcony:</label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="numberOfVerandaBalcony" type="text"
                                                                name="veranda_balcony"
                                                                placeholder="Jumlah Veranda/Balcony" required>
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
                                                                placeholder="Contoh: 2010" required>
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
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-4 col-md-6">
                                                    <div class="form-input-box">
                                                        <div class="form-input-title">
                                                            <label for="PropertyStatus">Property
                                                                Status:<span>*</span></label>
                                                        </div>
                                                        <div class="form-input">
                                                            <input id="PropertyStatus" type="text"
                                                                name="property_status"
                                                                placeholder="New Develop, For Sale, For Rent, Sold Out, Rented Out"
                                                                required>
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
                                                                placeholder="Contoh: 5m x 3m" required>
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
                                                                placeholder="Contoh: 5m x 3m" required>
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
                                                                placeholder="Contoh: 5m x 3m" required>
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
                                                                placeholder="Contoh: 5m x 3m" required>
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
                                                                placeholder="Contoh: 5m x 3m" required>
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
                                                                placeholder="Contoh: 5m x 3m" required>
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
                                                                placeholder="Contoh: 5m x 3m" required>
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
                                                                placeholder="Contoh: 5m x 3m" required>
                                                        </div>
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
                                                            <input id="advantagesList1" type="text" name="benefit_1">
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
                                                            <input id="advantagesList2" type="text" name="benefit_5">
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
                                                            <input id="advantagesList3" type="text" name="benefit_9">
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
                                                            <input id="advantagesList4" type="text" name="benefit_2">
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
                                                            <input id="advantagesList5" type="text" name="benefit_6">
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
                                                            <input id="advantagesList6" type="text" name="benefit_10">
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
                                                            <input id="advantagesList7" type="text" name="benefit_3">
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
                                                            <input id="advantagesList8" type="text" name="benefit_7">
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
                                                            <input id="advantagesList9" type="text" name="benefit_11">
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
                                                            <input id="advantagesList10" type="text"
                                                                name="benefit_4">
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
                                                            <input id="advantagesList11" type="text"
                                                                name="benefit_8">
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
                                                            <input id="advantagesList12" type="text"
                                                                name="benefit_12">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-details-location mb-20">
                                            <h4 class="property-details-title-two mb-5">Link G-Maps Location (Optional)</h4>
                                            <div class="form-input">
                                                <input id="apartmentLocationLink" type="url" name="link_location">
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
