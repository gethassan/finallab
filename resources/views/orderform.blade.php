@extends('layout.app')
@section('tittle','Cart')
@section('style')
<style type="text/css">
	
   

</style>
@endsection
@section('main')

      <?php
           $product="";
           $quantity="";
           $price="";
           $size="";
           $tprice=0;
      ?>
    <div class="container ">
       <form action="placeorder" method="post">
    	<div class="row">
    		
    		@foreach($data as $row)
    		@php
    		 $product=$product.$row->name." | ";
    		 $quantity=$quantity.$row->quantity." | ";
    		  $price=$price.$row->price." | ";
    		  $size=$size.$row->size." | ";
    		  $tprice=$tprice+$row->price*$row->quantity;
    		  @endphp
    		@endforeach
    		
    		<div class="col-xs-12 col-sm-3">
    			<label>Products</label>
    			<input class="form-control" type="text" name="product" value="{{$product}}">
    		</div>
    		<div class="col-xs-12 col-sm-3">
    			<label>Quantities</label>
    			<input class="form-control" type="text" name="quantity" value="{{$quantity}}">
    		</div>
    		<div class="col-xs-12 col-sm-2">
    			<label>Size</label>
    			<input class="form-control" type="text" name="size" value="{{$size}}">
    		</div>
    		<div class="col-xs-12 col-sm-2">
    			<label>Price</label>
    			<input class="form-control" type="text" name="price" value="{{$price}}in Rs.">
    		</div>
    		<div class="col-xs-12 col-sm-2">
    			<label>T.Price</label>
    			<input class="form-control" type="text" name="tprice" value="{{$tprice}}">
    		</div>

    	</div>

      <div class="row">
        <div class="col-12">
          <h1>Please fill the Order Form</h1>
          <span>to place your order</span>
          <hr class="mt-1">
        </div>
        <div class="col-12">

          <div class="row">
            <div class="col-xs-12 ">
              <label >Name</label>
            </div>
            <div class="col-xs-10 col-sm-6">
              <input class="form-control" name="fname" type="text" placeholder="First">
            </div>
            <div class="col-xs-10 col-sm-6 ">
              <input class="form-control" type="text" name="lname" placeholder="Last">
            </div>
          </div>

          


          <div class="row mt-3 ">
            <div class="col-xs-12 ">
              <label  >Date</label>
            </div>
            <div class="col-12">
              <input class="form-control" placeholder="Selected date" name="date" type="Date"
                id="date-picker-example">
            </div>
          </div>

          <div class="row ">
            <div class="col-xs-12 ">
              <label class="order-form-label">Adress</label>
            </div>
            <div class="col-12">
              <input class="form-control" type="text" name="staddress" placeholder="Street Address"><br>
            </div>
            <div class="col-12">
              <input class="form-control" name="st2address" placeholder="Street Address Line 2"><br>
            </div>
            <div class="col-12 col-sm-6 ">
              <input class="form-control" name="city" placeholder="City"><br>
            </div>
            <div class="col-12 col-sm-6 ">
              <input class="form-control" name="region" placeholder="Region"><br>
            </div>
            <div class="col-12 col-sm-6 ">
              <input class="form-control" name="postalcode" placeholder="Postal / Zip Code"><br>
            </div>
            <div class="col-12 col-sm-6 ">
              <input class="form-control" name="country" placeholder="Country"><br>
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
          </div>

          <div class="row mt-3 ">
            <div class="col-xs-12 ">
              <div class="form-check">
                <input type="radio" class="form-check-input"  name="validation" id="validation" value="1">
                <label for="validation" class="form-check-label">Cash on delivery</label>
              </div>
            </div>
          </div>
          
          <div class="row ">
            <div class="col-xs-12 ">

              <button type="submit" id="btnSubmit" class="btn btn-primary d-block mx-auto btn-submit">Submit</button>
            </div>
          </div>

        </div>
      </div>
      </form>
    </div>

@endsection