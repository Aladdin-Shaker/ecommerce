@push('scripts')

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/min/dropzone.min.css">
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/min/dropzone.min.js">
</script>

<script>
    // Disable auto discover for all elements:
Dropzone.autoDiscover = false;
    $(document).ready(function() {

        // another images upload
        $('#dropzonefileupload').dropzone({
            url: "{{ aurl('upload/image/'. $product->id) }}",
            paramName: 'file', // The name that will be used to transfer the file
            maxFilesize: 2, // 2 MB
            uploadMultiple: false,
            maxFiles: 15,
            acceptedFiles: 'image/*',
            dictxDefaultMessage: '{{trans('admin.dictDefaultMessage')}}',
            dictRemoveFile: '{{ trans('admin.delete') }}',
            params: {
                _token : '{{csrf_token()}}'
            },
            addRemoveLinks: true,
            removedfile: function(file) {
                $.ajax({
                    dataType: 'json',
                    type: 'post',
                    data: {_token: '{{ csrf_token() }}', id: file.fid},
                    url: '{{ aurl('delete/image') }}' // delete another files
                });

                var fmock;
                return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement) : void 0;
            },
            init: function(){
                @foreach($product->files()->get() as $file)
                    var mock = {
                        fid: '{{ $file->id }}',
                        name: '{{ $file->name }}',
                        size: '{{ $file->size }}',
                        type: '{{ $file->mime_type }}'
                    };
                    this.emit('addedfile', mock);
                    this.options.thumbnail.call(this,mock, '{{ url('storage/' . $file->full_file ) }}');
                @endforeach

                this.on('sendding', function(file,xhr,formData){
                    formData.append('fid', '');
                    file.fid = '';
                });

                 this.on('success', function(file,response){
                    file.fid = response.id;
                });
            }
        });

    });

    // main image upload
    Dropzone.autoDiscover = false;
    $(document).ready(function() {
        $('#mainPhoto').dropzone({
            url: "{{ aurl('update/image/'. $product->id) }}",
            paramName: 'file', // The name that will be used to transfer the file
            maxFilesize: 2, // 2 MB
            uploadMultiple: false,
            maxFiles: 1,
            acceptedFiles: 'image/*',
            dictxDefaultMessage: '{{trans('admin.dictDefaultMessage')}}',
            dictRemoveFile: '{{ trans('admin.delete') }}',
            params: {
                _token : '{{csrf_token()}}'
            },
            addRemoveLinks: true,
            removedfile: function(file) {
                $.ajax({
                    dataType: 'json',
                    type: 'post',
                    data: {_token: '{{ csrf_token() }}', id: file.fid},
                    url: '{{ aurl('delete/product/image/' . $product->id) }}' // delete main photo
                });

                var fmock;
                return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement) : void 0;
            },
            init: function(){
                @if(!empty($product->photo))
                    var mock = { name: '{{ $product->title }}', size: '', type: ''};
                    // this.addedfile.call(this,mock);
                    this.emit('addedfile', mock);
                    this.options.thumbnail.call(this,mock, '{{ url('storage/'. $product->photo ) }}');
                @endif

                this.on('sendding', function(file,xhr,formData){
                    formData.append('fid', '');
                    file.fid = '';
                });

                 this.on('success', function(file,response){
                    file.fid = response.id;
                });
            }
        });

    });

</script>

@endpush

<div class="tab-pane fade" id="product_media" role="tabpanel"
    aria-labelledby="product_media">
    <h4>{{ trans('admin.product_media') }}</h4>
    {{-- mainPhoto --}}
    <center>
        <h4>{{ trans('admin.product_main_photo') }}</h4>
    </center>
    <div class="dropzone" id="mainPhoto"></div>
    <hr>
    {{-- dropzonefileupload --}}
    <center>
        <h4>{{ trans('admin.product_photos') }}</h4>
    </center>
    <div class="dropzone" id="dropzonefileupload"></div>
</div>
