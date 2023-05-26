<div>
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Post List') }}</div>
            
            <div class="card-body">
                <div class="mb-3">
                    <input type="text" placeholder="Seacrh Post" class="form-control " wire:model="keyword">
                </div>
                <div class="alert @if(!empty(session('alert'))) alert-{{session('msg')}} @else d-none @endif">
                    @if(!empty(session('msg'))) {{session('msg')}} @endif
                </div>
                <table class="table table-hovered ">
                    <thead>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Title')}}</th>
                        <th>{{__('Content')}}</th>
                        <th>{{__('Action')}}</th>
                    </thead>
                    @if (!empty($posts))
                        
                        @foreach ($posts as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->title }}</td>
                                <td>{{ $d->content }}</td>
                                <td>
                                    <a href="{{url('post/edit/'.$d->id)}}" class="btn btn-sm btn-success">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$d->id}}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('Delete')}}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{__('Yakin Hapus Post ini? dengan title    ')}}  <b>{{$d->title}}</b>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" wire:click="deletePost({{$d->id}})"  class="btn btn-danger">{{__('Delete')}}</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
