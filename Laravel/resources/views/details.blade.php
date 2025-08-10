@extends("layouts.app")

@section('title')
    create details user
@endsection

@section("main")
    <main>
        <div class="text-center">
            <div class="bg-dark-subtle py-5 my-2">
                <h1 class="display-3 py-5">{{$message}}</h1>
                <ul>
                    <li>{{$details->country}}</li>
                    <li>{{$details->city}}</li>
                    <li>{{$details->address}}</li>
                </ul>
            </div>
        </div>
    </main>
@endsection
