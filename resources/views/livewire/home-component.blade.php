@auth

@else
    @include('auth.login_body')
@endif

@push('scripts')
    <script type="text/javascript">
        var path="{{route('autocomplete')}}";
        $('input.typeahead').typeahead({                
            source:function(query,process){
                return $.get(path,{query:query},function(data){
                    return process(data);
                });
            },
        });
    </script>
@endpush