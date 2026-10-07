<div style="display: flex; flex-direction: column; justify-content: center; align-items: center; margin: 10px 100px 0 100px;">
    <h3 style="color: red;">You don't have any {{ Str::plural($item) }} yet.</h3>

    <a style="text-decoration: none;" href="{{ route( Str::plural($item) . '.create')  }}">
        Create your first {{ $item }}
    </a>
</div>