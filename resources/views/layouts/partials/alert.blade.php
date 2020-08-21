<div class="row">
    <div class="col-md-12 mt-2">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-2">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $err)
                        <li>{{ $err . '!' }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
