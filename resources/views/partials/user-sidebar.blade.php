<div class="list-group">
    <a href="/dashboard" class="list-group-item list-group-item-action">Dashboard</a>
    @if(Auth::user()->role=="admin")
        <a href="/admin" class="list-group-item list-group-item-action">Admin</a>
    @endif
    <a href="/dashboard" class="list-group-item list-group-item-action">Action 1</a>
    <a href="/dashboard" class="list-group-item list-group-item-action">Action 2</a>
    <a href="/dashboard" class="list-group-item list-group-item-action">Action 3</a>
</div>