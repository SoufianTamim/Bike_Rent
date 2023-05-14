@php
use Illuminate\Support\Facades\Route;
$routeName = Route::currentRouteName();
@endphp
	
	<!-- ================ HEADER-TITLE ================ -->
	<section class="s-header-title">
		<div class="container">
			<h1>{{ $routeName  }}</h1>
			<ul class="breadcrambs">
				<li><a href="{{ route('index') }}">Home</a></li>
				<li>{{ $routeName  }}</li>
			</ul>
		</div>
	</section>
	<!-- ============== HEADER-TITLE END ============== -->
