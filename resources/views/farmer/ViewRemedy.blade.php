<div class="modal fade" id="ViewRemedy-{{ $object->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
    							<div class="modal-content">
									<div class="modal-header my-Header">
    									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="exampleModalLabel">View Remedy</h3>
									</div>
									<form action="" method="post" enctype="multipart/form-data">
                                    
									<div class="modal-body newModelHt" style=" padding:1.5em">
										{{ csrf_field() }}
                                        	<div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Issue</label>
                                                       <input type="text" class="form-control1" placeholder="" name="txtIssue" value="{{ $object->Issue }}" readonly >
														
													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        	
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Solution</label>
                                                         <textarea class="form-control1" placeholder="" name="txtSolution" readonly>{{ $object->Solution }}</textarea>
													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Doctor Description</label>
                                                        <textarea class="form-control1" placeholder="" name="txtDoctorDescription" readonly>{{ $object->DoctorDescription }}</textarea>

													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Images (If Any)</label>
                                                        <img src="doc_remedy/{{ $object->image }}" width="100" height="100" alt="image" />

													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                           
									<div class="modal-footer">
									</div>
									</form>
								</div>
    						</div>
					</div>
                    </div>