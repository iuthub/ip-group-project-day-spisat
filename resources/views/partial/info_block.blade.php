@if(Session::has('info'))
    @component('additional.info')
        {{ Session::get('info') }}
    @endcomponent
@endif
