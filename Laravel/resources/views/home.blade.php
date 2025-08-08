@extends("layouts.app")

@section('title')
    HOME
@endsection

@section('main')
    @include("parts.header")
    <main>
        <div class="text-center d-flex justify-content-evenly h-50" style="box-sizing: border-box">
            <div class="col-3 pe-1" style="box-sizing: border-box">
                <div class="bg-dark-subtle py-5">
                    <h1 class="display-3 py-5">sidebar</h1>
                </div>
            </div>
            <section class="col-9 ps-1" style="box-sizing: border-box" >
                <div class="bg-dark-subtle py-5">
                    <h1 class="display-3 py-5">content</h1>
                </div>
            </section>
        </div>
    </main>
@endsection

