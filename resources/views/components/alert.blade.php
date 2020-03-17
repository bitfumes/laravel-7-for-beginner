<div>
    @if(session()->has('message'))
    {{$slot}}
    <div class="alert alert-success">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
    {{$slot}}
    <div class="alert alert-danger">{{session()->get('error')}}</div>
    @endif
</div>