@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">{{$type_product->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('home')}}">Home</a> / <span>{{$type_product->name}}</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($type_products as $item)
							<li><a href="{{route('product-type',$item->id)}}">{{$item->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($products as $item)
								<div class="col-sm-3">
									<div class="single-item">
										@if($item->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="product.html"><img src="source/image/product/{{$item->image}}" alt="" height="270" width="320"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"  style="font-size: 12px">{{$item->name}}</p>
											<p class="single-item-price" style="font-size: 14px">
												@if($item->promotion_price==0)
												<span class="flash-sale">{{number_format($item->unit_price)}} VND</span>
												@else
												<span class="flash-del">{{number_format($item->unit_price)}} VND</span>
												<span class="flash-sale">{{number_format($item->promotion_price)}} VND</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								<div class="space50">&nbsp;</div>
								</div>

								@endforeach
								
							</div>

						</div> <!-- .beta-products-list -->
						<div class="space50">&nbsp;</div>
						<div class="beta-products-list">
							<h4>Top Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($productss as $item)
								<div class="col-sm-3">
									<div class="single-item" >
										@if($item->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="product.html"><img src="source/image/product/{{$item->image}}" alt="" height="270" width="320"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"style="font-size: 12px">{{$item->name}}</p>
											<p class="single-item-price" style="font-size: 14px">
												@if($item->promotion_price==0)
												<span class="flash-sale">{{number_format($item->unit_price)}} VND</span>
												@else
												<span class="flash-del">{{number_format($item->unit_price)}} VND</span>
												<span class="flash-sale">{{number_format($item->promotion_price)}} VND</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								
								
							</div>
							<center>
							<div class="row" >
								{{$productss->links()}}
							</div>
							</center>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
