<div>
    @if(session()->has('message'))
    {{$slot}}
    <div class="py-4 px-2 bg-green-300">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
    {{$slot}}
    <div class="py-4 px-2 bg-red-300">{{session()->get('error')}}</div>
    @endif

    @if ($errors->any())
        <div class="py-4 px-2 bg-red-300">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>