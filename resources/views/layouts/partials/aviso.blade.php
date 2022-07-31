@if (session('aviso') !== null && session('aviso') !== '')
<div class="alert alert-info mt-3">
    <h2>
        {{ session('aviso') }}
        {{ session(['aviso' => '']) }}
    </h2>
</div>
@endif