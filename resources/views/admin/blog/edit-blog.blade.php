@extends('admin.layouts.app')

@section('content-admin')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Edit Blog Post</h1>
    <p class="text-gray-500 text-sm mt-1">Update your blog article.</p>
</div>

    <form action="{{ route('update-blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="flex flex-col xl:flex-row gap-6 items-start">
        @csrf
        
        <!-- Left Column (Main Content) -->
        <div class="flex-1 space-y-6 w-full">
            
            <!-- Basic Information -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Blog Details</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="md:col-span-2">
                        <label for="blogTitle" class="block text-sm font-medium text-gray-700 mb-1">Blog Title <span class="text-red-500">*</span></label>
                        <input type="text" id="blogTitle" name="blog_title" value="{{ $blog->blog_title }}" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none font-medium">
                    </div>

                    <div class="md:col-span-2">
                        <label for="writter" class="block text-sm font-medium text-gray-700 mb-1">Author / Writer <span class="text-red-500">*</span></label>
                        <input type="text" id="writter" name="writter" value="{{ $blog->writter }}" required class="w-full rounded-lg border-gray-300 border px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 sm:text-sm transition-colors outline-none">
                    </div>
                </div>
            </div>

            <!-- Blog Content -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Blog Content <span class="text-red-500">*</span></h3>
                <div class="border border-gray-300 rounded-lg overflow-hidden">
                    <textarea id="tinymce_simple_textarea" name="blog_content" required>{{ $blog->blog_content }}</textarea>
                </div>
            </div>

        </div>

        <!-- Right Column (Sidebar) -->
        <div class="w-full xl:w-[400px] shrink-0 space-y-6 xl:sticky xl:top-6">
            
            <!-- Image Upload Section -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-2">Cover Image</h3>
                <div class="space-y-4">
                    <div id="imagePreviewContainer" class="flex justify-center">
                        <div id="imagePreview" class="w-full h-48 rounded-xl bg-gray-200 bg-cover bg-center shrink-0 border border-gray-300 shadow-sm" style="background-image: url('{{ Storage::url($blog->image) }}');"></div>
                    </div>
                    
                    <div class="flex items-center justify-center w-full">
                        <label for="imageUpload" class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-xl cursor-pointer bg-gray-50 hover:bg-gray-100 hover:border-blue-400 transition-colors">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 text-center px-4">
                                <i class="fa-light fa-cloud-arrow-up text-3xl text-gray-400 mb-2"></i>
                                <p class="mb-1 text-sm text-gray-500"><span class="font-semibold text-blue-600">Click to update image</span> or drag and drop</p>
                                <p class="text-xs text-gray-400">PNG, JPG or JPEG (Max 5MB)</p>
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
                        <i class="fa-regular fa-check"></i>
                        Update Blog
                    </button>
                    <a href="{{ url('dashboard/my-blog') }}" class="w-full px-8 py-3 bg-white hover:bg-gray-50 text-gray-700 font-medium rounded-lg shadow-sm border border-gray-200 transition-colors flex items-center justify-center gap-2">
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
                deleteBtn.className = 'delete-btn absolute top-2 right-2 w-7 h-7 bg-white/80 hover:bg-white text-gray-700 hover:text-red-600 rounded-full flex items-center justify-center shadow-sm backdrop-blur-sm transition-colors focus:outline-none';
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

    // Initialize TinyMCE for text editors
    if (typeof tinymce !== 'undefined') {
        tinymce.init({
            selector: '#tinymce_simple_textarea',
            height: 400,
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
