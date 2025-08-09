@extends("layouts.app")

@section('title')
    POST
@endsection

@section('main')
    <main>
        <div class="text-center">
                <div class="bg-dark-subtle py-5 my-2">
                    <h1 class="display-3 py-5">{{$message}} post successfully</h1>
                    <ul>
                        <li>{{$post->title}}</li>
                        <li>{{$post->content}}</li>
                        <li>{{$post->views}}</li>
                        <li>{{$post->status}}</li>
                    </ul>
                </div>
        </div>
    </main>
@endsection


