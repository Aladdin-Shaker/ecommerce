@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
            $(document).on('click','.do_search', function() {
                var search = $('.search').val();
                if(search != '' || search !== null){
                    $.ajax({
                        url: '{{ aurl('products/search') }}',
                        dataType: 'json',
                        type: 'post',
                        data: {_token: '{{ csrf_token() }}', search: search, id: {{$product->id}} },
                        beforeSend: function(){
                           $('.loading').removeClass('d-none');
                           $('.search_icon').addClass('d-none');
                        },
                        success: function(data){
                            if(data.status == true){
                                if(data.count > 0){
                                    var items = '';
                                    $.each(data.result, function(index, value) {
                                        items +=  '<li><label><input style="margin-left: 25px;" type="checkbox" name="related[]" value="'+value.id+'" />'+ value.title +'</label></li>';
                                    });
                                    $('.serach_content').html(items);
                                    $('.loading').addClass('d-none');
                                    $('.search_icon').removeClass('d-none');
                                    $('.serach_content').html(items);
                                }
                                else{
                                    $('.loading').addClass('d-none');
                                    $('.search_icon').removeClass('d-none');
                                    $('.serach_content').html('<li>' + data.result + '</li>');
                                }
                            }
                        },
                        error: function(data){
                            $('.loading').addClass('d-none');
                            $('.search_icon').removeClass('d-none');
                            $('.serach_content').val(data);
                        },
                    });
                }
            });
        });
</script>
@endpush

<div class="tab-pane fade" id="product_related" role="tabpanel"
    aria-labelledby="product_related">
    <h4 class="mt-3 mb-3">{{ trans('admin.product_related') }}</h4>
    <nav class="navbar navbar-light bg-light justify-content-start">
        <form class="form-inline ">

            <input class="form-control mr-sm-2 w-50 search" type="search"
                placeholder="Search" aria-label="Search">
            <i class="fa fa-spin fa-2x mr-1 fa-spinner loading d-none"></i>
            <i class="fas fa-search fa-2x mr-1 search_icon do_search"
                aria-hidden="true"></i>

        </form>
    </nav>
    <hr>
    <ul class="serach_content" style="margin-right: 100px;">
    </ul>
    <ul style="margin-right: 100px;">
        @foreach ($product->related()->get() as $id)
        <li>
            <label>
                <input style="margin-left: 25px;" checked type="checkbox"
                    name="related[]" value="{{ $id->related_product }}" />
                {{$id->product()->first()->title}}
            </label>
        </li>
        @endforeach
    </ul>
</div>
