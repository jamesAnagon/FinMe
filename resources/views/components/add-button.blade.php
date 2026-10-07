<div style="display: flex; justify-content: center; align-items:center; gap: 10px; border: 1px solid black; margin: 10px 100px 0 100px;">
    <p>{{ $label }}</p>
    <a href="{{ route($page.'.create') }}">
        <img 
        style="width: 30px; height: 30px;" 
        src="{{ asset('assets/addButton.png') }}" alt="Add">
    </a>
</div>