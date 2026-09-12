@extends('admin.layouts.app')

@section('content-admin')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Edit Property</h1>
    <p class="text-gray-500 text-sm mt-1">Update the details for {{ $property->property_title }}.</p>
</div>

    <form action="{{ route('update-property.update', $property->property_id) }}" method="POST" enctype="multipart/form-data" class="flex flex-col xl:flex-row gap-6 items-start">
        @csrf
        
        <!-- Left Column (Main Content) -->
        <div class="flex-1 space-y-6 w-full">
            
            <!-- Basic Information -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Basic Information</h3>
                <div class="grid grid-cols-1 gap-6">
                    
                    <div>
                        <label for="propertyTitle" class="block text-sm font-medium text-gray-700 mb-1">Property Title <span class="text-red-500">*</span></label>
                        <input type="text" id="propertyTitle" name="property_title" value="{{ $property->property_title }}" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
                        <div class="lg:col-span-1">
                            <label for="propertyPriceDisplay" class="block text-sm font-medium text-gray-700 mb-1">Price (Rp) <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm font-medium">Rp</span>
                                </div>
                                <input type="text" id="propertyPriceDisplay" placeholder="e.g. 500.000.000" required class="w-full pl-9 rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                                <input type="hidden" id="propertyPrice" name="property_price" value="{{ $property->property_price ?? '' }}">
                            </div>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const priceDisplay = document.getElementById('propertyPriceDisplay');
                                    const priceHidden = document.getElementById('propertyPrice');
                                    
                                    if (priceDisplay && priceHidden) {
                                        if (priceHidden.value) {
                                            priceDisplay.value = parseInt(priceHidden.value, 10).toLocaleString('id-ID');
                                        }

                                        priceDisplay.addEventListener('input', function(e) {
                                            let rawValue = this.value.replace(/\D/g, '');
                                            priceHidden.value = rawValue;
                                            this.value = rawValue ? parseInt(rawValue, 10).toLocaleString('id-ID') : '';
                                        });
                                    }
                                });
                            </script>
                        </div>
                        <div class="lg:col-span-1">
                            <label for="propertyDiscount" class="block text-sm font-medium text-gray-700 mb-1">Discount (%)</label>
                            <input type="number" id="propertyDiscount" name="discount" value="{{ $property->discount }}" class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                        </div>
                        <div class="lg:col-span-1">
                            <label for="propertyCategory" class="block text-sm font-medium text-gray-700 mb-1">Category <span class="text-red-500">*</span></label>
                            <select id="propertyCategory" name="property_category" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none bg-white">
                                <option value="Houses" {{ $property->property_category == 'Houses' ? 'selected' : '' }}>Houses</option>
                                <option value="Apartments" {{ $property->property_category == 'Apartments' ? 'selected' : '' }}>Apartments</option>
                                <option value="Land" {{ $property->property_category == 'Land' ? 'selected' : '' }}>Land</option>
                                <option value="Shophouse" {{ $property->property_category == 'Shophouse' ? 'selected' : '' }}>Shophouse</option>
                                <option value="Warehouse" {{ $property->property_category == 'Warehouse' ? 'selected' : '' }}>Warehouse</option>
                            </select>
                        </div>
                        <div class="lg:col-span-1">
                            <label for="propertyTag" class="block text-sm font-medium text-gray-700 mb-1">Tag <span class="text-red-500">*</span></label>
                            <select id="propertyTag" name="property_tag" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none bg-white">
                                <option value="Residental" {{ $property->property_tag == 'Residental' ? 'selected' : '' }}>Residental</option>
                                <option value="Comercial" {{ $property->property_tag == 'Comercial' ? 'selected' : '' }}>Comercial</option>
                                <option value="Industrial" {{ $property->property_tag == 'Industrial' ? 'selected' : '' }}>Industrial</option>
                                <option value="Land" {{ $property->property_tag == 'Land' ? 'selected' : '' }}>Land</option>
                            </select>
                        </div>
                        <div class="lg:col-span-1">
                            <label for="featured" class="block text-sm font-medium text-gray-700 mb-1">Featured?</label>
                            <select id="featured" name="featured" class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none bg-white">
                                <option value="No" {{ $property->featured == 'No' ? 'selected' : '' }}>No</option>
                                <option value="Yes" {{ $property->featured == 'Yes' ? 'selected' : '' }}>Yes</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Full Address <span class="text-red-500">*</span></label>
                        <input type="text" id="address" name="address" value="{{ $property->address }}" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>

                    <div>
                        <label for="tinymce_simple_textarea" class="block text-sm font-medium text-gray-700 mb-1">Description <span class="text-red-500">*</span></label>
                        <div class="border border-gray-300 rounded-lg overflow-hidden">
                            <textarea id="tinymce_simple_textarea" name="description" required>{{ $property->description }}</textarea>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Property Details -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Property Details</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <div>
                        <label for="lotArea" class="block text-sm font-medium text-gray-700 mb-1">Lot Area (m²) <span class="text-red-500">*</span></label>
                        <input type="text" id="lotArea" name="lot_area" value="{{ $property->lot_area }}" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>
                    <div>
                        <label for="homeArea" class="block text-sm font-medium text-gray-700 mb-1">Home Area (m²) <span class="text-red-500">*</span></label>
                        <input type="text" id="homeArea" name="home_area" value="{{ $property->home_area }}" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>
                    <div>
                        <label for="lotDimensions" class="block text-sm font-medium text-gray-700 mb-1">Lot Dimensions</label>
                        <input type="text" id="lotDimensions" name="lot_dimensions" value="{{ $property->lot_dimensions }}" class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>
                    <div>
                        <label for="rooms" class="block text-sm font-medium text-gray-700 mb-1">Total Rooms <span class="text-red-500">*</span></label>
                        <input type="number" id="rooms" name="rooms" value="{{ $property->rooms }}" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>
                    
                    <div>
                        <label for="beds" class="block text-sm font-medium text-gray-700 mb-1">Bedrooms <span class="text-red-500">*</span></label>
                        <input type="number" id="beds" name="beds" value="{{ $property->beds }}" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>
                    <div>
                        <label for="baths" class="block text-sm font-medium text-gray-700 mb-1">Bathrooms <span class="text-red-500">*</span></label>
                        <input type="number" id="baths" name="baths" value="{{ $property->baths }}" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>
                    <div>
                        <label for="floors" class="block text-sm font-medium text-gray-700 mb-1">Floors <span class="text-red-500">*</span></label>
                        <input type="number" id="floors" name="floors" value="{{ $property->floors }}" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>
                    <div>
                        <label for="builtYear" class="block text-sm font-medium text-gray-700 mb-1">Year Built <span class="text-red-500">*</span></label>
                        <input type="number" id="builtYear" name="year_built" value="{{ $property->year_built }}" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="certificate" class="block text-sm font-medium text-gray-700 mb-1">Certificate Type <span class="text-red-500">*</span></label>
                        <select id="certificate" name="certificate" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none bg-white">
                            <option value="" disabled {{ empty($property->certificate) ? 'selected' : '' }}>Select Certificate</option>
                            <option value="SHM - Sertifikat Hak Milik" {{ $property->certificate == 'SHM - Sertifikat Hak Milik' ? 'selected' : '' }}>SHM - Sertifikat Hak Milik</option>
                            <option value="HGB - Hak Guna Bangunan" {{ $property->certificate == 'HGB - Hak Guna Bangunan' ? 'selected' : '' }}>HGB - Hak Guna Bangunan</option>
                            <option value="Strata Title" {{ $property->certificate == 'Strata Title' ? 'selected' : '' }}>Strata Title</option>
                            <option value="Hak Pakai" {{ $property->certificate == 'Hak Pakai' ? 'selected' : '' }}>Hak Pakai</option>
                            <option value="Girik / Petok D" {{ $property->certificate == 'Girik / Petok D' ? 'selected' : '' }}>Girik / Petok D</option>
                            <option value="{{ $property->certificate }}" {{ !in_array($property->certificate, ['SHM - Sertifikat Hak Milik', 'HGB - Hak Guna Bangunan', 'Strata Title', 'Hak Pakai', 'Girik / Petok D']) && !empty($property->certificate) ? 'selected' : 'hidden' }}>{{ $property->certificate }}</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="propertyStatus" class="block text-sm font-medium text-gray-700 mb-1">Property Status <span class="text-red-500">*</span></label>
                        <select id="propertyStatus" name="property_status" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none bg-white">
                            <option value="For Sale" {{ $property->property_status == 'For Sale' ? 'selected' : '' }}>For Sale</option>
                            <option value="For Rent" {{ $property->property_status == 'For Rent' ? 'selected' : '' }}>For Rent</option>
                            <option value="New Develop" {{ $property->property_status == 'New Develop' ? 'selected' : '' }}>New Develop</option>
                            <option value="Sold Out" {{ $property->property_status == 'Sold Out' ? 'selected' : '' }}>Sold Out</option>
                            <option value="Rented Out" {{ $property->property_status == 'Rented Out' ? 'selected' : '' }}>Rented Out</option>
                        </select>
                    </div>
                    
                </div>
            </div>

            <!-- Property Features (Optional dimensions) -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 border-b border-gray-100 pb-2 gap-2">
                    <h3 class="text-lg font-semibold text-gray-900">Specific Room Dimensions (Optional)</h3>
                    <button type="button" onclick="document.getElementById('roomDimensionsGrid').classList.toggle('hidden'); this.querySelector('i').classList.toggle('fa-chevron-down'); this.querySelector('i').classList.toggle('fa-chevron-up');" class="text-sm font-medium text-blue-600 hover:text-blue-700 flex items-center gap-2 bg-blue-50 px-3 py-1.5 rounded-lg transition-colors">
                        <i class="fa-regular fa-ruler-combined"></i> Add Room Dimensions <i class="fa-solid fa-chevron-down text-xs ml-1"></i>
                    </button>
                </div>
                
                <div id="roomDimensionsGrid" class="hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                    
                    @php
                        $features = [
                            ['id' => 'livingRoom', 'name' => 'living_room', 'label' => 'Living Room', 'value' => $property->living_room],
                            ['id' => 'garage', 'name' => 'garage', 'label' => 'Garage', 'value' => $property->garage],
                            ['id' => 'diningArea', 'name' => 'dining_area', 'label' => 'Dining Area', 'value' => $property->dining_area],
                            ['id' => 'bedroomFeature', 'name' => 'bedroom', 'label' => 'Bedroom', 'value' => $property->bedroom],
                            ['id' => 'bathroomFeature', 'name' => 'bathroom', 'label' => 'Bathroom', 'value' => $property->bathroom],
                            ['id' => 'gymArea', 'name' => 'gym_area', 'label' => 'Gym Area', 'value' => $property->gym_area],
                            ['id' => 'garden', 'name' => 'garden', 'label' => 'Garden', 'value' => $property->garden],
                            ['id' => 'parking', 'name' => 'parking', 'label' => 'Parking', 'value' => $property->parking],
                        ];
                    @endphp

                    @foreach($features as $feature)
                    <div>
                        <label for="{{ $feature['id'] }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $feature['label'] }}</label>
                        <input type="text" id="{{ $feature['id'] }}" name="{{ $feature['name'] }}" value="{{ $feature['value'] }}" class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>
                    @endforeach
                    
                </div>
            </div>

            <!-- Benefits -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Property Benefits / Amenities (Optional)</h3>
                    @php
                        $availableBenefits = [
                            'Cash Keras/KPR',
                            'Bisa KPR',
                            'Cicilan Bertahap',
                            'Dekat Akses Bandara',
                            'Dekat Universitas',
                            'Dekat Fasilitas Kesehatan',
                            'Dekat Pusat Perbelanjaan',
                            'Dekat Jalan Tol',
                            'Keamanan 24 Jam',
                            'Bebas Banjir',
                            'Lingkungan Asri',
                            'Akses Jalan Lebar',
                            'Dekat Pusat Kota',
                            'Dekat Sekolah',
                            'Dekat Rumah Sakit',
                            'Dekat Pasar Tradisional',
                            'Dekat Stasiun',
                            'Transportasi Umum',
                            'Kawasan Berkembang'
                        ];
                        
                        $savedBenefits = json_decode($property->benefits, true);
                        if (!is_array($savedBenefits)) {
                            if (!empty($property->benefits)) {
                                preg_match_all('/<li>(.*?)<\/li>/', $property->benefits, $matches);
                                $savedBenefits = !empty($matches[1]) ? $matches[1] : [];
                            } else {
                                $savedBenefits = [];
                            }
                        }
                    @endphp
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach($availableBenefits as $index => $benefit)
                            <label class="flex items-center p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors {{ in_array($benefit, $savedBenefits) ? 'bg-blue-50 border-blue-200' : '' }}">
                                <input type="checkbox" name="benefits[]" value="{{ $benefit }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" {{ in_array($benefit, $savedBenefits) ? 'checked' : '' }}>
                                <span class="ml-2 text-sm text-gray-700">{{ $benefit }}</span>
                            </label>
                        @endforeach
                    </div>
            </div>

            <!-- Google Maps -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Google Maps Link (Optional)</h3>
                <div>
                    <label for="linkLocation" class="block text-sm font-medium text-gray-700 mb-1">Location URL</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-regular fa-map-location-dot text-gray-400"></i>
                        </div>
                        <input type="text" id="linkLocation" name="link_location" value="{{ $property->link_location }}" class="w-full pl-10 rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Column (Sidebar) -->
        <div class="w-full xl:w-[400px] shrink-0 space-y-6 xl:sticky xl:top-6">
            
            <!-- Image Upload Section -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Property Images</h3>
                <div class="space-y-4">
                    <div id="imagePreviewContainer" class="flex gap-4 overflow-x-auto p-4 border-2 border-dashed border-gray-200 rounded-xl min-h-[160px] bg-gray-50">
                        @php
                            $filePaths = is_string($property->image) ? json_decode($property->image, true) : $property->image;
                        @endphp
                        @if($filePaths && count($filePaths) > 0)
                            @foreach ($filePaths as $filePath)
                                <div class="w-32 h-32 rounded-lg bg-cover bg-center shrink-0 shadow-sm border border-gray-200" style="background-image: url('{{ Storage::url($filePath) }}');"></div>
                            @endforeach
                        @else
                            <div class="w-32 h-32 rounded-lg bg-gray-200 bg-cover bg-center shrink-0 border border-gray-300" style="background-image: url('{{ asset('assets/images/blog/image-mockup.png') }}');"></div>
                        @endif
                    </div>
                    
                    <div class="flex items-center justify-center w-full">
                        <label for="imageUpload" class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-xl cursor-pointer bg-gray-50 hover:bg-gray-100 hover:border-blue-400 transition-colors">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 text-center px-4">
                                <i class="fa-light fa-cloud-arrow-up text-3xl text-gray-400 mb-2"></i>
                                <p class="mb-1 text-sm text-gray-500"><span class="font-semibold text-blue-600">Click to update images</span> or drag and drop</p>
                                <p class="text-xs text-gray-400">PNG, JPG or JPEG (Max 5MB)</p>
                            </div>
                            <input id="imageUpload" type="file" class="hidden" accept=".png, .jpg, .jpeg" name="image[]" multiple>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Actions</h3>
                <div class="flex flex-col gap-3">
                    <button type="submit" class="w-full px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-sm transition-colors flex items-center justify-center gap-2">
                        <i class="fa-regular fa-check"></i>
                        Update Property
                    </button>
                    <a href="{{ url('dashboard/my-property') }}" class="w-full px-8 py-3 bg-white hover:bg-gray-50 text-gray-700 font-medium rounded-lg shadow-sm border border-gray-200 transition-colors flex items-center justify-center gap-2">
                        Cancel
                    </a>
                </div>
            </div>

        </div>

    </form>

@endsection

@push('scripts')
<!-- Image Preview Script -->
<script>
    const imageUpload = document.getElementById('imageUpload');
    const dropZone = imageUpload.closest('label');
    const previewContainer = document.getElementById('imagePreviewContainer');
    
    let accumulatedFiles = new DataTransfer();

    if (dropZone) {
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, () => {
                dropZone.classList.add('border-blue-500', 'bg-blue-50');
            }, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, () => {
                dropZone.classList.remove('border-blue-500', 'bg-blue-50');
            }, false);
        });

        dropZone.addEventListener('drop', (e) => {
            if (e.dataTransfer.files.length) {
                handleNewFiles(e.dataTransfer.files);
            }
        });
    }

    imageUpload.addEventListener('change', function(e) {
        if (e.target.files.length > 0) {
            handleNewFiles(e.target.files);
        }
    });

    function handleNewFiles(newFiles) {
        Array.from(newFiles).forEach(file => {
            if (file.type.match('image.*')) {
                accumulatedFiles.items.add(file);
            }
        });
        
        imageUpload.files = accumulatedFiles.files;
        renderPreview();
    }

    function renderPreview() {
        previewContainer.innerHTML = '';
        
        const files = accumulatedFiles.files;
        if (files.length === 0) {
            previewContainer.innerHTML = `<div class="w-40 h-40 rounded-lg bg-gray-200 bg-cover bg-center shrink-0 border border-gray-300" style="background-image: url('{{ asset('assets/images/blog/image-mockup.png') }}');"></div>`;
            return;
        }

        Array.from(files).forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgDiv = document.createElement('div');
                imgDiv.className = 'w-40 h-40 rounded-lg bg-cover bg-center shrink-0 shadow-sm border border-gray-200 relative group';
                imgDiv.style.backgroundImage = `url('${e.target.result}')`;
                
                const deleteBtn = document.createElement('button');
                deleteBtn.type = 'button';
                deleteBtn.className = 'absolute top-2 right-2 w-7 h-7 bg-white/80 hover:bg-white text-gray-700 hover:text-red-600 rounded-full flex items-center justify-center shadow-sm backdrop-blur-sm transition-colors focus:outline-none';
                deleteBtn.innerHTML = '<i class="fa-solid fa-xmark text-sm"></i>';
                deleteBtn.onclick = function() {
                    removeFile(index);
                };
                
                imgDiv.appendChild(deleteBtn);
                previewContainer.appendChild(imgDiv);
            }
            reader.readAsDataURL(file);
        });
    }

    function removeFile(indexToRemove) {
        const dt = new DataTransfer();
        const files = accumulatedFiles.files;
        
        for (let i = 0; i < files.length; i++) {
            if (i !== indexToRemove) {
                dt.items.add(files[i]);
            }
        }
        
        accumulatedFiles = dt;
        imageUpload.files = accumulatedFiles.files;
        
        renderPreview();
    }

    // Initialize TinyMCE for text editors
    if (typeof tinymce !== 'undefined') {
        tinymce.init({
            selector: '#tinymce_simple_textarea, #tinymce_benefits',
            height: 300,
            menubar: false,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | blocks | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
            content_style: 'body { font-family:Inter,Helvetica,Arial,sans-serif; font-size:14px }',
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save(); // Sync content back to textarea automatically
                });
            }
        });
    }
</script>
@endpush
