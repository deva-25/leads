<div class="modal fade" id="ProductDelete-{{ $object->id }}" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
    		<div class="modal-header my-Header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title" id="exampleModalLabel">Delete Product</h3>
			</div>
         	<form action="{{url('/FarmerProductDelete')}}" method="post" enctype="multipart/form-data">
				<div class="modal-body">
				{{ csrf_field() }}
					<div class="form-group">
						<div class="row">
							<div class="col-md-9 grid_box1">
    							<input type="hidden" name="hid_Del_id" value="{{ $object->id }}">
                                <label for="recipient-name" class="control-label">Are you sure to delete this Proiduct Details </label>
							</div>
						</div>		
					</div> 
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="submit" class="btn btn-default" name="btnSubmit" value="Confirm" >
					</div>
				</div>
           	</form>
		</div>
	</div>
</div>