<div>
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Post List') }}</div>
            
            <div class="card-body">
                <div class="mb-3">
                    <input type="text" placeholder="Seacrh Post" class="form-control " wire:model="keyword">
                </div>
                <table class="table table-hovered ">
                    <thead>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Title')}}</th>
                        <th>{{__('Action')}}</th>
                    </thead>
                    @if (!empty($posts))
                        
                        @foreach ($posts as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->title }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
