<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
    							<div class="modal-content">
									<div class="modal-header my-Header">
    									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="exampleModalLabel">Add Gallary</h3>
									</div>
									<form action="{{url('/FarmerAddGallary')}}" method="post" enctype="multipart/form-data">
                                    <div class="table-responsive bs-example ">
                                        <table class="table">
                                        {{ csrf_field() }}
                                                <tr> 
                                                    <th>Caption</th> 
                                                    <th>:</th> 
                                                    <th><input type="text" class="form-control1" placeholder="" name="txtCaption" required ></th> 
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