@php
    /** @var \App\Models\BlogPost $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>
@if ($item->exists)
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>ID: {{ $item->id }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="created_at">Создано</label>
                        <input type="text"
                               value="{{ $item->created_at }}"
                               class="form-control"
                               disabled>
                    </div>

                    <div class="form-group">
                        <label for="updated_at">Изменено</label>
                        <input type="text"
                               value="{{ $item->updated_at }}"
                               class="form-control"
                               disabled>
                    </div>

                    <div class="form-group">
                        <label for="published_at">Опубликовано</label>
                        <input type="text"
                               value="{{ $item->published_at }}"
                               class="form-control"
                               disabled>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endif
