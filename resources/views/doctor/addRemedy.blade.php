<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
    							<div class="modal-content">
									<div class="modal-header my-Header">
    									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="exampleModalLabel">Add New Remedy</h3>
									</div>
									<form action="{{url('/DoctorAddRemedy')}}" method="post" enctype="multipart/form-data">
                                    
									<div class="modal-body newModelHt" style=" padding:1.5em">
										{{ csrf_field() }}
                                        	<div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Issue</label>
                                                       <input type="text" class="form-control1" placeholder="" name="txtIssue" value="" >
														
													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        	
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Solution</label>
                                                         <textarea class="form-control1" placeholder="" name="txtSolution"></textarea>
													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Doctor Description</label>
                                                        <textarea class="form-control1" placeholder="" name="txtDoctorDescription"></textarea>

													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Images (If Any)</label>
                                                         <input type="file" id="exampleInputFile"  name="image">

													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                           
                                            <input type="hidden" class="form-control1" placeholder="" name="DoctorId" value="{{$test->doc_id}}"  >
                                            <input type="hidden" class="form-control1" placeholder="" name="DoctorName" value="{{$test->doc_name}}"  >
                                            
									<div class="modal-footer">
										<input type="submit" class="btn btn-default" name="btnSubmit" value="Add" >
									</div>
									</form>
								</div>
    						</div>
					</div>
                    </div>