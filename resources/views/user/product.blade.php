@extends('user.layout')

@section('content')


    <section class="product" id="product">

        <h1 class="heading"> new products </h1>

        <div class="box-container">

            @if (!empty($products))
                @foreach ($products as $product)
                    <div class="box col-md-4">
                        <span class="discount">
                            -{{ round((1 - $product->discount_price / $product->original_price) * 100) }}%
                        </span>
                        <div class="icons">
                            @if ($product->favorite == 1)
                                <form action="{{ route('favorite') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="fav" value="0">
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <button type="submit"   > <a class="fas fa-heart bg-success"> </a></button>
                                </form>
                                @else
                                <form action="{{ route('favorite') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="fav" value="1">
                                <button type="submit"   > <a class="fas fa-heart"> </a></button>
                            </form>
                            @endif
                            {{-- <form action="{{route('add_fav')}}" method="POST"> --}}
                            {{-- </form> --}}
                            {{-- <a href="#" class="fas fa-share"></a>
                            <a href="#" class="fas fa-eye"></a> --}}
                        </div>
                        <img src="{{ asset('storage/' . $product->image) }}" alt="">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p> <!-- Added description here -->
                        <div class="stars">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $product->rate)
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                        </div>
                        <div class="quantity">
                            <span>Remaining Quantity : </span>
                            <input type="number" readonly min="1" max="100" value="{{ $product->quantity }}"
                                name="quantity[{{ $product->id }}]">
                        </div>
                        <div class="price">{{ $product->original_price }}<span>{{ $product->price }}</span></div>

                        <a href="{{ url('add_cart') }}/{{ $product->id }}" class="btn">add to cart</a>
                    </div>
                @endforeach
            @else
                <div class="row mt-4  bg-danger w-100">
                    <h1 class="text-lg text-center text-white">No Products Found</h1>
                </div>
            @endif

            {{-- <div class="box">
            <span class="discount">-25%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product2.jpg" alt="">
            <h3>latest plants</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="quantity">
                <span> quantity : </span>
                <input type="number" min="1" max="100" value="1">
            </div>
            <div class="price">$14.70 <span>$18.20</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-7%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product3.jpg" alt="">
            <h3>latest plants</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="quantity">
                <span> quantity : </span>
                <input type="number" min="1" max="100" value="1">
            </div>
            <div class="price">$14.70 <span>$18.20</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-4%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product4.jpg" alt="">
            <h3>latest plants</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="quantity">
                <span> quantity : </span>
                <input type="number" min="1" max="100" value="1">
            </div>
            <div class="price">$14.70 <span>$18.20</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-13%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product5.jpg" alt="">
            <h3>latest plants</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="quantity">
                <span> quantity : </span>
                <input type="number" min="1" max="100" value="1">
            </div>
            <div class="price">$14.70 <span>$18.20</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product6.jpg" alt="">
            <h3>latest plants</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="quantity">
                <span> quantity : </span>
                <input type="number" min="1" max="100" value="1">
            </div>
            <div class="price">$14.70 <span>$18.20</span></div>
            <a href="#" class="btn">add to cart</a>
        </div> --}}

        </div>

    </section>













@endsection
