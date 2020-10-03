<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
    							<div class="modal-content">
									<div class="modal-header my-Header">
    									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="exampleModalLabel">Add New Product</h3>
									</div>
									<form action="{{url('/FarmerAddProduct')}}" method="post" enctype="multipart/form-data">
                                    <div class="table-responsive bs-example ">
                                        <table class="table">
                                        {{ csrf_field() }}
                                                <tr> 
                                                    <th>Product Name</th> 
                                                    <th>:</th> 
                                                    <th><input type="text" class="form-control1" placeholder="" name="txtProductName" required ></th> 
                                                </tr> 
                                                <tr> 
                                                    <th>Actual Rate</th> 
                                                    <th>:</th> 
                                                    <th><input type="text" class="form-control1" placeholder="" name="txtActRate" required ></th>  
                                                </tr> 
                                                <tr> 
                                                    <th>Discount Rate</th> 
                                                    <th>:</th> 
                                                    <th><input type="text" class="form-control1" placeholder="" name="txtDisRate" required ></th> 
                                                </tr> 
                                                <tr> 
                                                    <th>Warranty Years</th> 
                                                    <th>:</th> 
                                                    <th><input type="text" class="form-control1" placeholder="" name="txtWarranty" required ></th> 
                                                </tr> 
                                                <input type="hidden" name="UserId" value="{{$test->id}}" />
                                                <tr> 
                                                    <th>Product Description(If Any)</th> 
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