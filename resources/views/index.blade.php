<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/job-task.css')}}">
    <title>Document</title>
</head>
<body>
    <!-- /* Please ❤ this if you like it! 😊 */ -->

<!-- Portfolio Section Start with dynamic class-->
{{-- <section class="portfolio overflow-hidden">
	<div class="container">
		<div class="row">
			<!-- Portfolio Section Heading -->
			<div class="portfolio__heading text-center col-12">
				<h1 class="portfolio__title fw-bold mb-5">Our Portfolio</h1>
			</div>
			<!-- Portfolio Navigation Buttons List -->
			<div class="col-12">
				<ul class="portfolio__nav nav justify-content-center mb-4">
                    <li class="nav-item">
						<button class="portfolio__nav__btn btn_ajax position-relative bg-transparent border-0 active" data-filter="*">All</button>
					</li>
                    @foreach ($category as $categories)
                        <li class="nav-item">
                            <button class="portfolio__nav__btn position-relative bg-transparent border-0" data-filter=".{{$categories->name}}">{{$categories->name}}</button>
                        </li>
                    @endforeach
				</ul>
			</div>
		</div>
		<!-- Portfolio Cards Container -->
		<div class="row grid ajaxShow">
            @foreach ($image as $images)
                <div class="grid-item col-lg-4 col-sm-6 {{$images->rel_to_category->name}}">
                    <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
                        <img src="/upload/categories/{{$images->image}}" alt="Random Image" class="w-100">
                    </a>
                </div>
            @endforeach
		</div>
	</div>
</section> --}}
<!-- Portfolio Section End with dynamic class-->



<!-- Portfolio Section Start with ajax -->
 <section class="portfolio overflow-hidden">
	<div class="container">
		<div class="row">
			<!-- Portfolio Section Heading -->
			<div class="portfolio__heading text-center col-12">
				<h1 class="portfolio__title fw-bold mb-5">Our Portfolio</h1>
			</div>
			<!-- Portfolio Navigation Buttons List -->
			<div class="col-12">
				<ul class="portfolio__nav nav justify-content-center mb-4">
                    <li class="nav-item">
						<button class="portfolio__nav__btn ajax_btn position-relative bg-transparent border-0 active" data-filter="*">All</button>
					</li>
                    @foreach ($category as $categories)
                        <li class="nav-item">
                            <button class="portfolio__nav__btn ajax_btn position-relative bg-transparent border-0" data-filter="{{$categories->id}}">{{$categories->name}}</button>
                        </li>
                    @endforeach
				</ul>
			</div>
		</div>
		<!-- Portfolio Cards Container -->
		<div class="row grid ajaxShow">
            @foreach ($image as $images)
                <div class="grid-item col-lg-4 col-sm-6">
                    <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
                        <img src="/upload/categories/{{$images->image}}" alt="Random Image" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
	</div>
</section>
<!-- Portfolio Section End with ajax -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="{{asset('js/job-task.js')}}"></script>
</body>
</html>
