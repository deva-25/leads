<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><div class="modal fade" id="ComplaintDelete-{{ $object->id }}" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
    		<div class="modal-header my-Header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title" id="exampleModalLabel">Delete Item</h3>
			</div>
         	<form action="{{url('/FarmerGallaryDelete')}}" method="post" enctype="multipart/form-data">
				<div class="modal-body">
				{{ csrf_field() }}
					<div class="form-group">
						<div class="row">
							<div class="col-md-9 grid_box1">
    							<input type="hidden" name="hid_Del_id" value="{{ $object->id }}">
                                <label for="recipient-name" class="control-label">Are you sure to delete this Item? </label>
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
</body>
</html>