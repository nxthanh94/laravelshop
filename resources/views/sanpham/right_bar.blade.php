<div class="col-md-3 prdt-right">
	<div class="w_sidebar">
		<section  class="sky-form">
			<h4>Loại sản phẩm</h4>
			<div class="row1 scroll-pane">
				<div class="col col-4">	
				@foreach($arCat1 as $key => $LSP)
					<?php
						$id = $LSP['id'];
						$tenloai = $LSP['tenloai'];
					?>							
					<label class="checkbox">
						<input class="timkiem1" type="radio"  name="checkbox" id={{$id}}><i></i>{{ $tenloai}}
					</label>
				@endforeach			
				</div>
			</div>
		</section>
		<section  class="sky-form">
			<h4>Hãng sản xuất</h4>
			<div class="row1 row2 scroll-pane">
				<div class="col col-4">
				@foreach($arCat as $key => $HSX)
					<?php
						$id = $HSX['id'];
						$tenhsx = $HSX['tenhsx'];
					?>		
					<label class="checkbox">
						<input class="tkhsx" id={{$id}} type="radio" name="checkbox"><i></i>{{ $tenhsx }}
					</label>
				@endforeach								
				</div>
			</div>
		</section>
		<section class="sky-form">
			<h4>Colour</h4>
				<ul class="w_nav2">
					<li><a class="color1" href="#"></a></li>
					<li><a class="color2" href="#"></a></li>
					<li><a class="color3" href="#"></a></li>
					<li><a class="color4" href="#"></a></li>
					<li><a class="color5" href="#"></a></li>
					<li><a class="color6" href="#"></a></li>
					<li><a class="color7" href="#"></a></li>
					<li><a class="color8" href="#"></a></li>
					<li><a class="color9" href="#"></a></li>
					<li><a class="color10" href="#"></a></li>
					<li><a class="color12" href="#"></a></li>
					<li><a class="color13" href="#"></a></li>
					<li><a class="color14" href="#"></a></li>
					<li><a class="color15" href="#"></a></li>
					<li><a class="color5" href="#"></a></li>
					<li><a class="color6" href="#"></a></li>
					<li><a class="color7" href="#"></a></li>
					<li><a class="color8" href="#"></a></li>
					<li><a class="color9" href="#"></a></li>
					<li><a class="color10" href="#"></a></li>
				</ul>
		</section>
		
	</div>
</div>