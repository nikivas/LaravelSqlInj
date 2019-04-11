@extends('layouts.app')

@section('content')
<div class="container task-wrap">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                
                @foreach($notes as $note)
           
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $note->header }}</h5>
                            <p class="card-text">{{ $note->text }}</p>
                        </div>
                        </div>
                    
                @endforeach
            </div>
        </div>
        
    </div>
</div>
@endsection
