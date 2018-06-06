@include('inc.header')
	<div class="container">
		<div class="row">
			<div ></div>
			
      <form class="form-horizontal" method="post" action="{{ url('/insert')}}">
          {{csrf_field()}}
          <fieldset>
          <legend>Add New Order</legend>
          @if(count($errors) >0 )
              @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
              @endforeach
          @endif
          <div class="form-group">
            <label for="order_id" class="col-lg-2 control-label">Order Id *</label>
            <div class="col-lg-5">
              <input type="text" name="order_id" class="form-control" id="order_id" required>
            </div>
          </div>
          <div class="form-group">
            <label for="service_number" class="col-lg-2 control-label">Service Number *</label>
            <div class="col-lg-2">
              <input type="text" name="service_number" class="form-control" id="service_number" required>
            </div>
          </div>
          <div class="form-group">
            <label for="segment_group" class="col-lg-2 control-label">Segment Group</label>
            <div class="col-lg-2">
              <input type="text" name="segment_group" class="form-control" id="segment_group">
            </div>
          </div>
          <div class="form-group">
            <label for="product_name" class="col-lg-2 control-label">Product Name</label>
            <div class="col-lg-2">
              <input type="text" name="product_name" class="form-control" id="product_name">
            </div>
          </div>
          <div class="form-group">
            <label for="remark" class="col-lg-2 control-label">Remark *</label>
            <div class="col-lg-5">
              <textarea name="remark" class="form-control" id="remark" required=""></textarea>
              
            </div>
          </div>
          <div class="form-group">
            <label for="order_status" class="col-lg-2 control-label">Order Status *</label>
            <div class="col-lg-2">
              <input type="radio" name="order_status"  value="Processing" required="" checked="">Processing              
            </div>
            <div class="col-lg-2">
              <input type="radio" name="order_status"  value="Completed">Completed              
            </div>
          </div>
          <div class="form-group">
            <label for="state" class="col-lg-2 control-label">State</label>
            <div class="col-lg-5">
              <select name="state" class="form-control" id="state" required="">
                <option value="" selected="" disabled="">Please Select</option>
                <option value="Perlis">Perlis</option>
                <option value="Kedah">Kedah</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Terengganu">Terengganu</option>
                <option value="Pahang">Pahang</option>
                <option value="Perak">Perak</option>
                <option value="Selangor">Selangor</option>
                <option value="Melaka">Melaka</option>
                <option value="Johor">Johor</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
              </select>
              
            </div>
          </div>
           <div class="form-group">
            <div class="col-lg-5 col-lg-offset-2" style="text-align: right">
              <button type="submit" class="btn btn-primary">Add</button>

              
            </div>
          </div>
        </fieldset>
      </form>


		</div>
	</div>
@include('inc.footer')