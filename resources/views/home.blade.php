@include('inc.header')

<div class="container">
	<div class="row">
		<legend>List of Order</legend>
		<div class="row">
			<div class="col-md-4 col-lg-4">
				@if(session('info'))
				<div class="alert alert-success">
					{{session('info')}}
				</div>
				@endif
			</div>
		</div>


		<table class="table table-striped table-hover" id="myTable">
		  <thead>
		    <tr>
		      <th>Order Id</th>
		      <th>Service Number</th>
		      <th>Segment Group</th>
		      <th>Product Name</th>
		      <th>Order Status</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@if(count($orders) > 0)
		  		@foreach($orders->all() as $order)
				    <tr>
				      <td><a href='{{ url("/read/{$order->order_id}") }}'>{{ $order->order_id }}</a></td>
				      <td>{{ $order->service_number }}</td> 
				      <td>{{ $order->segment_group }}</td>
				      <td>{{ $order->product_name }}</td>
				      <td>{{ $order->order_status }}</td>
				    </tr>
		    	@endforeach
		  	@endif
		  </tbody>
		</table> 


		<div style="text-align: right;">
			<a  href="{{ url('/create')}}" class="btn btn-primary">Add New Order</a>
		</div>
	</div>
</div>

@include('inc.footer')