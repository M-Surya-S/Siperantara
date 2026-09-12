@extends('admin.layouts.app')

@section('content-admin')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Add New Agent</h1>
    <p class="text-gray-500 text-sm mt-1">Fill in the details below to add a new property agent.</p>
</div>

    @if ($errors->any())
        <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fa-solid fa-circle-exclamation text-red-500"></i>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">Terdapat kesalahan pada input Anda:</h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <form action="{{ route('add-agent.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col xl:flex-row gap-6 items-start">
        @csrf
        
        <!-- Left Column (Main Content) -->
        <div class="flex-1 space-y-6 w-full">
            
            <!-- Basic Information -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Basic Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="md:col-span-2">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" placeholder="e.g. John Doe" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email" placeholder="e.g. john@example.com" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>

                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number <span class="text-red-500">*</span></label>
                        <input type="text" id="phone_number" name="phone_number" placeholder="e.g. +628123456789" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>

                </div>
            </div>

            <!-- Social Media -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Social Media (Optional)</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div>
                        <label for="instagram_link" class="block text-sm font-medium text-gray-700 mb-1">Instagram Link</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-brands fa-instagram text-gray-400"></i>
                            </div>
                            <input type="url" id="instagram_link" name="instagram_link" placeholder="https://instagram.com/..." class="w-full pl-10 rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                        </div>
                    </div>

                    <div>
                        <label for="linkedin_link" class="block text-sm font-medium text-gray-700 mb-1">LinkedIn Link</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-brands fa-linkedin text-gray-400"></i>
                            </div>
                            <input type="url" id="linkedin_link" name="linkedin_link" placeholder="https://linkedin.com/in/..." class="w-full pl-10 rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                        </div>
                    </div>

                    <div>
                        <label for="facebook_link" class="block text-sm font-medium text-gray-700 mb-1">Facebook Link</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-brands fa-facebook text-gray-400"></i>
                            </div>
                            <input type="url" id="facebook_link" name="facebook_link" placeholder="https://facebook.com/..." class="w-full pl-10 rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                        </div>
                    </div>

                    <div>
                        <label for="twitter_link" class="block text-sm font-medium text-gray-700 mb-1">Twitter/X Link</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-brands fa-twitter text-gray-400"></i>
                            </div>
                            <input type="url" id="twitter_link" name="twitter_link" placeholder="https://twitter.com/..." class="w-full pl-10 rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Right Column (Sidebar) -->
        <div class="w-full xl:w-[400px] shrink-0 space-y-6 xl:sticky xl:top-6">
            
            <!-- Image Upload Section -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Profile Photo</h3>
                <div class="flex flex-col items-center gap-4">
                    <div id="imagePreview" class="w-32 h-32 rounded-full bg-gray-200 bg-cover bg-center shrink-0 border-4 border-white shadow-md mx-auto" style="background-image: url('{{ asset('assets/images/blog/image-mockup.png') }}');"></div>
                    
                    <div class="w-full">
                        <label for="imageUpload" class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-xl cursor-pointer bg-gray-50 hover:bg-gray-100 hover:border-blue-400 transition-colors">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 text-center px-4">
                                <i class="fa-light fa-cloud-arrow-up text-3xl text-gray-400 mb-2"></i>
                                <p class="mb-1 text-sm text-gray-500"><span class="font-semibold text-blue-600">Click to upload</span></p>
                                <p class="text-xs text-gray-400">PNG, JPG or JPEG (Max 2MB)</p>
                            </div>
                            <input id="imageUpload" type="file" class="hidden" accept=".png, .jpg, .jpeg" name="image">
                        </label>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Actions</h3>
                <div class="flex flex-col gap-3">
                    <button type="submit" class="w-full px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-sm transition-colors flex items-center justify-center gap-2">
                        <i class="fa-regular fa-paper-plane"></i>
                        Save Agent
                    </button>
                    <a href="{{ url('dashboard/my-agent') }}" class="w-full px-8 py-3 bg-white hover:bg-gray-50 text-gray-700 font-medium rounded-lg shadow-sm border border-gray-200 transition-colors flex items-center justify-center gap-2">
                        Cancel
                    </a>
                </div>
            </div>
            
        </div>

    </form>

<!-- Image Preview Script -->
<script>
    const imageUpload = document.getElementById('imageUpload');
    const dropZone = imageUpload.closest('label');

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
                imageUpload.files = e.dataTransfer.files;
                const event = new Event('change');
                imageUpload.dispatchEvent(event);
            }
        });
    }

    imageUpload.addEventListener('change', function(e) {
        const preview = document.getElementById('imagePreview');
        const file = e.target.files[0];
        
        const existingBtn = preview.querySelector('.delete-btn');
        if (existingBtn) {
            existingBtn.remove();
        }
        
        if (file) {
            if (!file.type.match('image.*')) return;
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.style.backgroundImage = `url('${e.target.result}')`;
                preview.classList.add('relative', 'group');
                
                const deleteBtn = document.createElement('button');
                deleteBtn.type = 'button';
                deleteBtn.className = 'delete-btn absolute top-0 right-0 w-7 h-7 bg-white/80 hover:bg-white text-gray-700 hover:text-red-600 rounded-full flex items-center justify-center shadow-sm backdrop-blur-sm transition-colors focus:outline-none';
                deleteBtn.innerHTML = '<i class="fa-solid fa-xmark text-sm"></i>';
                deleteBtn.onclick = function(e) {
                    e.preventDefault();
                    imageUpload.value = '';
                    preview.style.backgroundImage = `url('{{ asset('assets/images/blog/image-mockup.png') }}')`;
                    deleteBtn.remove();
                };
                
                preview.appendChild(deleteBtn);
            }
            reader.readAsDataURL(file);
        } else {
            preview.style.backgroundImage = `url('{{ asset('assets/images/blog/image-mockup.png') }}')`;
        }
    });
</script>
@endsection
