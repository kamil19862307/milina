@if($session = session()->pull('alert'))
    @php
        $status = session()->pull('status')
    @endphp
    <div class="alert alert-{{$status}} mb-0 rounded-0 text-center py-2" role="alert">
        {{$session}}
    </div>

@endif
