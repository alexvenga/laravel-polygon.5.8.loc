@extends('layouts.app')

@section('content')
    @php /** @var \App\Models\BlogPost $item */ @endphp

        @csrf
        <div class="container">
            @php /** @var \Illuminate\Support\ViewErrorBag $errors */ @endphp

            @include('blog.admin.posts.includes.result_messages')



            @if ($item->exists)
                <form method="POST" action="{{ route('blog.admin.posts.update', $item->id) }}">
                    @method('PATCH')
                @else
                <form method="POST" action="{{ route('blog.admin.posts.store') }}">
            @endif
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            @include('blog.admin.posts.includes.item_edit_main_col')
                        </div>
                        <div class="col-md-3">
                            @include('blog.admin.posts.includes.item_edit_add_col')
                        </div>
                    </div>
                </form>

                @if ($item->exists)
                    <br>
                    <form method="POST" action="{{ route('blog.admin.posts.destroy', $item->id) }}">
                        @method('DELETE')
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body ml-auto">
                                        <button class="btn btn-link" type="submit">Удалить</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </form>
                @endif
        </div>
@endsection

