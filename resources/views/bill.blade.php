@extends('layout.app')
@section('tittle','Cart')
@section('main')

<div class="container">
	<h2>bill</h2>
<table class="table table-bordered table-striped">
	<tr>
		<th>product</th>
		<th>quantity</th>
		<th>size</th>
		<th>price</th>
		
	</tr>
	@foreach($data as $row)
	<tr>
	
		<td>{{$row['product']}}</td>
		<td>{{$row['quantity']}}</td>
		<td>{{$row['size']}}</td>
		<td>{{$row['price']}}</td>
	
	</tr>
	<tr>
		Toltal price: {{$row->tprice}}Rs
	</tr>
	@endforeach
</table>
</div>
@endsection