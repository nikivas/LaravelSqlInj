@extends('layouts.app')

@section('content')
<div class="container task-wrap">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                
                <div class="task-container">
                    <ul class="list-group">
                        @foreach($notes as $note)
                            <li class="list-group-item"><a href="/notes/{{$note->id}}"> 
                                {{ $note->text  }} 
                            </a></li>                            
                        @endforeach
                    </ul>
                </div>  
            </div>
        </div>
        
    </div>
</div>
@endsection
