@extends('main')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('.') }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ url('post/list') }}">{{__('Post')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{__('List')}}</li>
        </ol>       
        
            <a class="nav-link active"  href="/sesi/logout">{{ __('logout') }}</a>
        
    </nav>
@endsection

@section('content')
    @livewire('post.post-list')
@endsection