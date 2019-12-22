@extends('layout.app')
@section('tittle','Cart')
@section('style')
@endsection
@section('main')
                    @php
					$tprice=0;
					
					
					@endphp
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<a type="button" href="index" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					@foreach($users as $row)
					@php
					$sump=$row->price;
					  $sump=$sump*$row->quantity;
					$tprice=$tprice+$sump;
					@endphp
					
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="/shirts/{{$row->image}}">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>{{$row->name}}</strong></h4><h4><small>
								{{$row->description}}
							</small><br><small>Price:{{$row->price}}Rs</small></h4>
						</div>
						<div class="col-xs-6">
							<form action="updatecart{{$row->id}}" method="post">
							<div class="col-xs-1 text-right">
								<h6><strong>Size:</strong></h6>
							</div>
							
								<input type="text" name="size" id="size" class="form-control" value="{{$row->size}}">
							


							<div class="col-xs-1 text-right">
								<h6><strong>Quantity:</strong></h6>
							</div>
							
								<input type="number" name="quantity" id="qunatity" class="form-control" min="1" max="6" value="{{$row->quantity}}">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
							
							<div class="col-xs-1 col-sm-2">
								<a type="button" href="deletecart{{$row->id}}" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</a>
								<button type="submit"  class="btn btn-link btn-xs" value="">
									<span class="glyphicon glyphicon-refresh"> </span>
								</button>

							</div>
							</form>
						</div>
					</div>
					<hr>
					
					@endforeach
					<hr>
					
					
					
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-2 col-md-9">
							<h4 class="text-right">Total <strong>{{$tprice}}Rs</strong></h4>
						</div>
						<div class="col-xs-12 col-md-3">
							<a type="button" href="orderform" class="btn btn-success btn-block">
								Checkout
							</a>
						</div>
					</div>
				</div>
@endsection