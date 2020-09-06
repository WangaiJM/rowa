@if(session('success'))
    <div class="alert alert-dismissible alert-primary">
        <strong>Success!!</strong> {{ session('success') }}
    </div>
@endif