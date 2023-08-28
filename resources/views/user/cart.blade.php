@extends('user.layout')

@section('content')



        <section class="h-100 container-fluid" style="background-color: #eee; width:100% !important">
            <div class="h-100 py-3">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-11 ">

                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    <div>
                    </div>
                  </div>

                  @if (!empty($products))

                  @foreach ($products as $product )


                  <div class="card rounded-3 mb-4 p-3">
                    <div class="card-body p-2">
                      <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img
                            src="{{ asset('storage/' . $product->image) }}" style=""
                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <p class="lead fw-normal mb-2">{{$product->name}}</p>
                          <p><span class="text-muted">Category: </span> {{$product->category}}</p>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>

                          <input id="form1" min="0" name="quantity" value="2" type="number"
                            class="form-control form-control-sm" />

                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h4 class="mb-0">${{$product->price}}</h4>
                          <h5 class="small text-secondary text-decoration-line-through" style=" text-decoration: line-through;">${{$product->discount_price}}</h5>


                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="{{url('/delete_cart')}}/{{$product->id}}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  @endforeach


                  @endif





                  <div class="card mb-4">
                    <div class="card-body p-4 d-flex flex-row">
                      <div class="form-outline flex-fill w-100">
                        <input type="text" id="form1" class="form-control form-control-lg" />
                        <label class="form-label" for="form1">Discound code</label>
                      </div>
                      <button type="button" class="btn btn-outline-warning mt-0">Apply</button>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </section>















@endsection
