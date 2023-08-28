@extends('user.layout')
<style>

@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800');
body{
	padding: 0;
	margin: 0;
	font-family: "Open Sans";
}
h1{
	text-align: center;
	font-size: 36px;
}
h3{
	text-align: center;
	font-size: 30px;
	padding: 20px;
	font-weight: 400;
	letter-spacing: 1px;

}
input[type=email] {

    padding: 12px 10px;
    margin: 9px 0;
    box-sizing: border-box;
    border-radius: 10px;
    outline: none;
    width: 40%;
    font-size: 14px;
    /* height:20%; */
    boredr:1px solid #7c7b7b;
}
input[type=email]:hover {
	border:1px solid #000;
	transition: 6s;
}
::placeholder {
    color: #000;
    opacity: 1;
    font-weight: 400;
    font-size: 20px;
    text-align: center;


}
button{
	height: 50px;
	padding: 0;
	margin: 0;
	border-radius: 50px;
}
.btn{
	border-radius: 5%;
	width: 14%;
	margin-left: 5px;
	font-size: 20px;

}
/* footer{
	background: #000;
	text-align: center;
	padding: 10px;

}
footer p{
	color: #fff;
	padding: 10px;
	margin: 0;
	font-weight: 700;
	font-size: 20px;
} */
@media(max-width: 992px){
	.btn{
		width: 20%
	}
	input[type=email]{
		width: 50%;
	}
}
@media(max-width: 768px){
	.btn{
		width: 40%
	}
	input[type=email]{
		width: 90%;
	}
}
@media(max-width: 440px){
	.btn{
		width: 50%;
		font-size: 18px;
	}
	input[type=email]{
		width: 100%;
	}
	h3{
		font-size: 22px;
	}
}
@media(max-width: 373px){
	h3{
		font-size: 20px;
		font-weight: 600;
	}
	h1{
		font-size: 28px;
		font-weight: 400;
	}


}
</style>
@section('content')
</section>
<section class="bg-light text-center p-5 mt-4">
<div class="container p-3">
    <h3>SUBSCRIBE NOW</h3>
    <form action="{{URL::to('/subscribe')}}" method="POST">
		@csrf
        <input type="email" name="email" placeholder="Enter Your Email Id">
        <button type="submit" value="subscribe" name="submit" class="btn btn-primary">Subscribe</button>
    </form>
</div>
</section>


@endsection
