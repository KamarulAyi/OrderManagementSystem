@include('inc.header')
	<div class="container">
		<div class="row">
			<div ></div>
			
      <form class="form-horizontal" method="post" action="{{ url('/edit', array($orders->order_id))}}">
          {{csrf_field()}}
          <fieldset>
          <legend>Order Details</legend>
          @if(count($errors) >0 )
              @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
              @endforeach
          @endif
          <div class="form-group">
            <label for="order_id" class="col-lg-2 control-label">Order Id *</label>
            <div class="col-lg-5">
              <input type="text" name="order_id" class="form-control" id="order_id" required value="<?php echo $orders->order_id; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="service_number" class="col-lg-2 control-label">Service Number *</label>
            <div class="col-lg-2">
              <input type="text" name="service_number" class="form-control" id="service_number" required value="<?php echo $orders->service_number; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="segment_group" class="col-lg-2 control-label">Segment Group</label>
            <div class="col-lg-2">
              <input type="text" name="segment_group" class="form-control" id="segment_group" value="<?php echo $orders->segment_group; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="product_name" class="col-lg-2 control-label">Product Name</label>
            <div class="col-lg-2">
              <input type="text" name="product_name" class="form-control" id="product_name" value="<?php echo $orders->product_name; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="remark" class="col-lg-2 control-label">Remark *</label>
            <div class="col-lg-5">
              <textarea name="remark" class="form-control" id="remark" required=""><?php echo $orders->remark; ?></textarea>
              
            </div>
          </div>
          <div class="form-group">
            <label for="order_status" class="col-lg-2 control-label">Order Status *</label>
        	<?php if($orders->order_status == "Processing"){ ?>
            <div class="col-lg-2">
              <input type="radio" name="order_status"  value="Processing" required="" checked="">Processing              
            </div>
            <div class="col-lg-2">
              <input type="radio" name="order_status"  value="Completed">Completed              
            </div>
            <?php }else{ ?>
            <div class="col-lg-2">
              <input type="radio" name="order_status"  value="Processing" required="" >Processing              
            </div>
            <div class="col-lg-2">
              <input type="radio" name="order_status"  value="Completed" checked="">Completed              
            </div>
        	<?php } ?>
          </div>
          <div class="form-group">
            <label for="state" class="col-lg-2 control-label">State</label>
            <div class="col-lg-5">
              <select name="state" class="form-control" id="state" required="">
                <option value="<?php echo $orders->state; ?>" selected=""><?php echo $orders->state; ?></option>
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
              <a href="{{ url('/')}}" class="btn btn-default">Back</a>  
              <button type="submit" class="btn btn-primary">Save</button> 
              <a  href='{{ url("/delete/{$orders->order_id}") }}' class="btn btn-danger">Delete</a>          
            </div>
          </div>
        </fieldset>
      </form>


		</div>
	</div>
@include('inc.footer')