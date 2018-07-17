<div class="list-group">
    <a href="/dashboard" class="list-group-item list-group-item-action">Dashboard</a>
    <a href="/profile" class="list-group-item list-group-item-action">Profile</a>
    @if(Auth::user()->role=="admin")
        <a href="/users" class="list-group-item list-group-item-action">Manage Users</a>
    @endif
</div>