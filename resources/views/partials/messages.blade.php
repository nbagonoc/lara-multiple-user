@if(count($errors) >0 )
    <ul class="list-group mb-3">
        @foreach($errors->all() as $error)
        <li class="list-group-item list-group-item-danger">
            {{$error}}
        </li>
        @endforeach
    </ul>
@endif

@if(session('success'))
    <ul class="list-group mb-3">
        <li class="list-group-item list-group-item-success">
            {{session('success')}}
        </li>
    </ul>
@endif

@if(session('warning'))
    <ul class="list-group mb-3">
        <li class="list-group-item list-group-item-warning">
            {{session('warning')}}
        </li>
    </ul>
@endif

@if(session('error'))
    <ul class="list-group mb-3">
        <li class="list-group-item list-group-item-danger">
            {{session('error')}}
        </li>
    </ul>
@endif