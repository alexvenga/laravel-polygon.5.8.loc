@if ($errors->any())
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach($errors->all() as $errorText)
                        <li>{{ $errorText }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
@if (session()->has('success'))
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif