@push('styles')

@endpush

<x-app-layout xmlns="http://www.w3.org/1999/html">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Make post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form class="bootstrap relative"
                          action="{{route('storePost')}}"
                          method="post">
                        @csrf
                        {{$errors}}

                        <div class="w-full">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="post">Write your post</label>
                            <textarea name="post" id="post" class="w-full">

                            </textarea>
                            <span class="text-red-500" role="alert">
                                <strong>{{ $errors->first('post') }}</strong>
                            </span>
                        </div>


                        <div class="form-group pt-2">
                            <input class="bg-blue-500 cursor-pointer w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.tiny.cloud/1/x9nujdbhmhwx8f9b8w6h7dnpf5a74ntb1zqumfvrdtjf74gg/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: '#post',
                plugins: "quickbars image link autolink autoresize " +
                    "autosave lists emoticons fullscreen help hr link media paste " +
                    "preview print searchreplace table toc wordcount",
                menubar: 'file edit view insert table',
                toolbar: 'restoredraft | undo redo paste pastetext | styleselect | ' +
                    ' bold italic | alignleft aligncenter alignright alignjustify | ' +
                    'numlist bullist image media link emoticons hr | searchreplace print preview fullscreen |' +
                    'outdent indent | table tabledelete | tableprops ' +
                    'tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter ' +
                    'tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol ' +
                    '| toc wordcount help',
                content_css: [

                ],
                file_picker_types: 'image',
                automatic_uploads: true,
                images_file_types: 'jpg,jpeg,svg,png,gif',
                block_unsupported_drop: false,
                images_upload_credentials: true,
                images_upload_url: '{{route('storeFile')}}',
                relative_urls : false,
                convert_urls : true,
                remove_script_host : false,
                images_upload_handler:own_image_upload_handler
            });

            function own_image_upload_handler(blobInfo, success, failure, progress) {
                var xhr, formData;
                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', '{{route('storeFileTinyMCE')}}');
                xhr.upload.onprogress = function (e) {
                    progress(e.loaded / e.total * 100);
                };

                var token = '{{ csrf_token() }}';
                xhr.setRequestHeader("X-CSRF-Token", token);

                xhr.onload = function() {
                    var json;
                    if (xhr.status === 403) {
                        failure('HTTP Error: ' + xhr.status, { remove: true });
                        return;
                    }
                    if (xhr.status < 200 || xhr.status >= 300) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }

                    json = JSON.parse(xhr.responseText);
                    console.log(json);
                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }

                    if (!json.success && !json.exception) {
                        failure("Couldn't process: " + json.errors );
                        return;
                    }
                    else if(!json.success && json.exception){
                        failure("Error: " + json.exceptionMessage);
                        return;
                    }

                    success(json.location);
                };
                xhr.onerror = function () {
                    failure('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
                };

                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                xhr.send(formData);
            }
        </script>
    @endpush
</x-app-layout>
