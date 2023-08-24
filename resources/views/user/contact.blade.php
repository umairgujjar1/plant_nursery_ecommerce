@extends('user.layout')


@section('content')


<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">get in touch</h1>

<div class="row">
     {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54738.63573140693!2d70.91514156097094!3d30.965884778265796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3925a6e2d5d4c95b%3A0x48ffaa61e5673b00!2sLayyah%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1677676705430!5m2!1sen!2s"   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54737.3996956213!2d71.18288380491083!3d30.968040825521598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39245567b852ad5f%3A0xee33506c2f255e29!2sChowk%20Azam%2C%20Layyah%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1677677910884!5m2!1sen!2s"   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13647.348412368008!2d70.94560847464145!3d31.22524215281069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3925b8fffeb25a95%3A0x5677eff67369b82b!2sKaror%20Lal%20Esan%2C%20Layyah%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1677677970413!5m2!1sen!2s"   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27396.64271709344!2d70.91641420840293!3d30.8704224076026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39250909f3358519%3A0x4604824a85132fa6!2sJaman%20Shah%2C%20Layyah%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1677678041074!5m2!1sen!2s"   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
     --}}
    
    <form action="{{URL::to('/contact-form')}}" method="post">
        @csrf
        <div class="inputBox">
            <input type="text" name="name" required>
            <label>name</label>
        </div>
        <div class="inputBox">
            <input type="email" name="email" required>
            <label>email</label>
        </div>
        <div class="inputBox">
            <input type="number" name="number" required>
            <label>number</label>
        </div>
        <div class="inputBox">
            <textarea required name="message" id="" cols="30" rows="10"></textarea>
            <label>message</label>
        </div>

        <input type="submit" value="send message" name="submit" class="btn">

    </form>

</div>

</section>

<!-- contact section ends -->


@endsection


<!-- footer///////// -->



