@extends('user.layout')


@section('user.content')



    <section class="category" id="category">
        <h1 class="heading"> shopp by category </h1>

        <div class="box-container">
            @if (!empty($categories))
                @foreach ($categories as $value)
                    <div class="box">
                        <img src="{{ asset('storage/' . $value->image) }} " alt="">
                        <div class="content">
                            <h3>{{ $value->categories }}</h3>
                            <a href="#" class="btn">shop now</a>
                        </div>
                    </div>
                @endforeach
            @endif
            {{-- <div class="box">
            <img src="images/cat2.jpg" alt="">
            <div class="content">
                <h3>plants for house</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/cat3.jpg" alt="">
            <div class="content">
                <h3>plants for office</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/cat4.jpg" alt="">
            <div class="content">
                <h3>gift plants</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div> --}}

        </div>

    </section>
@endsection
