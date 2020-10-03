<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
    							<div class="modal-content">
									<div class="modal-header my-Header">
    									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="exampleModalLabel">Add Complaint</h3>
									</div>
									<form action="{{url('/FarmerAddComplaint')}}" method="post" enctype="multipart/form-data">
                                    <div class="table-responsive bs-example ">
                                        <table class="table">
                                        {{ csrf_field() }}
                                                <tr> 
                                                    <th>Desease</th> 
                                                    <th>:</th> 
                                                    <th><input type="text" class="form-control1" placeholder="" name="txtDesease" required ></th> 
                                                </tr> 
                                                <tr> 
                                                    <th>Affected Area</th> 
                                                    <th>:</th> 
                                                    <th><input type="text" class="form-control1" placeholder="" name="txtAffectedArea" required ></th>  
                                                </tr> 
                                                <tr> 
                                                    <th>Symtopms</th> 
                                                    <th>:</th> 
                                                    <th><input type="text" class="form-control1" placeholder="" name="txtsymtm" required ></th> 
                                                </tr> 
                                                <tr> 
                                                    <th>Req. Doctor</th> 
                                                    <th>:</th> 
                                                    <th><select class="form-control1" name="SelDoctor" required>
                                                        	<option value="">Select One</option>
                                                            @foreach($doctor as $doctor)
															<option value="{{$doctor->doc_id}}">{{$doctor->doc_name}}</option>
															@endforeach
                                                         </select>
                                                    </th> 
                                                </tr> 
                                                <input type="hidden" name="UserId" value="{{$test->id}}" />
                                                <tr> 
                                                    <th>Description(If Any)</th> 
                                                    <th>:</th> 
                                                    <th><textarea class="form-control1" placeholder="" name="txtDescription"></textarea></th> 
                                                </tr>
                                                <tr> 
                                                    <th>Images (If Any)</th> 
                                                    <th>:</th> 
                                                    <th><input type="file" id="exampleInputFile"  name="image"></th> 
                                                </tr>
                                                <tr> 
                                                    <th></th> 
                                                    <th></th> 
                                                    <th><input type="submit" class="btn btn-default" name="btnSubmit" value="Add" ></th> 
                                                </tr>
                                        </table> 	
                                       </div>
								
									</form>
								</div>
    						</div>
					</div>