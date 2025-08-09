@extends("layouts.app")

@section('title')
    COMMENT
@endsection

@section('main')
    <main>
        <div class="text-center">
            <div class="bg-dark-subtle py-5 my-2">
                <h1 class="display-3 py-5">{{$message}}</h1>
                <ul>
                    <li>{{$comment->comment}}</li>
                    <li>{{$comment->name_user}}</li>
                    <li>{{$comment->email_user}}</li>

                </ul>
            </div>
        </div>
    </main>
@endsection

