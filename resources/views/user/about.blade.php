@extends('user.layout')
<style>
    .carousel-item img{
height: 500px;
    }
    p{
        font-size: 14px;
        /* line-height: 2px; */
        justify-content: center;
        font-display: arial;
    }
</style>

@section('content')


<div class="container mt-5">
    <div class="row">
      <!-- Image Slider Section -->
      <div class="col-md-6">
        <div id="imageSlider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('images/cat1.jpg')}}" class="d-block w-100 " alt="Image 1">
            </div>
            <div class="carousel-item">
              <img src="{{asset('images/cat2.jpg')}}" class="d-block w-100 " alt="Image 2">
            </div>
            <div class="carousel-item">
              <img src="{{asset('images/cat3.jpg')}}" class="d-block w-100 " alt="Image 3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
      <!-- About Section -->
      <div class="col-md-6">
        <div class="about-content">
          <h2>About Us</h2>
          <p>Prepare to be captivated by a living tapestry that celebrates the rich diversity of plant life. As you wander through our meticulously designed displays, you'll encounter a breathtaking array of botanical treasures from every corner of the globe. The air is filled with the intoxicating aroma of blooming flowers, and each step unveils a new chapter in the story of nature's beauty. From the resplendent charm of vibrant tropicals to the elegance of native species, our collection is a testament to the wonder and splendor of the plant kingdom.
            Enhance the aesthetic allure of your living spaces with our exquisite range of planters, pots, and garden décor. Every piece is meticulously selected to complement a variety of styles – from sleek and modern to charmingly rustic. Transform your home into a haven of natural elegance, where every room breathes with the vibrancy of lush greenery and the delicate dance of petals.
          </p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Add Bootstrap JS scripts here -->
  
@endsection