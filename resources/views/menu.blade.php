

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">
                    @foreach($programmes as $programme)
					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="img/welcome/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">{{$programme->name}}</h2>
								@if($programme->application_status == 1)
								<a href="{{route('programme.application.create',[$programme->id])}}" class="hero_box_link"><button class="btn">Apply Now</button></a>
								@endif
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
	</div>