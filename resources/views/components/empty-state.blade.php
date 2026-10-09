<div style="display: flex; flex-direction: column; justify-content: center; align-items: center; margin: 10px 100px 0 100px;">
    <h3 class="empty-state-message">You don't have any {{ Str::plural($item) }} yet.</h3>

    <a class="empty-state-link" style="text-decoration: none;" href="{{ route( Str::plural($item) . '.create')  }}">
        Create your first {{ $item }}
    </a>
</div>
