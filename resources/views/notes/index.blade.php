@extends('layouts.app')

@section('content')
<div class="container task-wrap">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                @if ((count($tasks)!=0))
                
                <div class="task-container">
                    <ul class="list-group">
                        @foreach($notes as $note)
                            <li class="list-group-item"><a href="/notes/{{$note->id}}"> 
                                {{ $note->header  }} 
                            </a></li>                            
                        @endforeach
                    </ul>
                </div>
                @else
                <h1>Заметок нет!</h1>
                @endif
            </div>
        </div>
        
    </div>
</div>
@endsection
