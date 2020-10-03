<div class="modal fade" id="exampleModal-{{ $object->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
    							<div class="modal-content">
									<div class="modal-header my-Header">
    									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="exampleModalLabel">Verify Complaint</h3>
									</div>
									<form action="{{url('/DoctorFeedback')}}" method="post" enctype="multipart/form-data">
                                    
                                    <input type="hidden" name="hidSetId" id="hidSetId" value="1" />
									<div class="modal-body newModelHt" style=" padding:1.5em">
										{{ csrf_field() }}
                                        	<div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Desease</label>
                                                       <input type="text" class="form-control1" placeholder="" name="txtDesease" readonly="readonly" value="{{ $object->Desease }}" >
														
													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        	<div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Affected Area</label>
                                                        <input type="text" class="form-control1" placeholder="" name="txtAffectedArea" readonly="readonly" value="{{ $object->AffectedArea }}"  >
													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Symtopms</label>
                                                        <input type="text" class="form-control1" placeholder="" name="txtsymtm" readonly="readonly" value="{{ $object->symtm }}"  >
													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Description</label>
                                                         <textarea class="form-control1" placeholder="" name="txtDescription" readonly="readonly">{{ $object->Description }} </textarea>
													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Images (If Any)</label>
                                                         <img src="Far_Deseases/{{ $object->image }}" width="100" height="100" alt="image" />

													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 grid_box1">
                                                    	<label for="recipient-name" class="control-label" style=" width:40%;">Doctor Feedback</label>
                                                        <textarea class="form-control1" placeholder="" name="txtDoctorFeedback">{{ $object->doctorFeedback }} </textarea>

													</div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control1" placeholder="" name="DeseaseId" value="{{ $object->id }}"  >
                                            
									<div class="modal-footer">
										<input type="submit" class="btn btn-default" name="btnSubmit" value="Add" >
									</div>
									</form>
								</div>
    						</div>
					</div>