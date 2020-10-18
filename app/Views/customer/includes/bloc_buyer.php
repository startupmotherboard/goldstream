	<?php $id_bloc= time();?>
	<div class="row" id="<?php echo $id_bloc?>">
									<div class="col-lg-12">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title"><?php echo lang('app.title_section_home_add_buyer')?></h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<button type="button" class="btn btn-info mr-2 add_buyer"><?php echo lang('app.btn_add_buyer')?></button>
													</div>
												</div>
											</div>
											<!--begin::Form-->
											<?php $input = [
												'type'  => 'hidden',
												'name'  => 'buyer_info_def[]',
												'value' =>'no',
												'class' => 'form-control'
												];
										echo form_input($input);?>
												<div class="card-body">
												
													<div class="form-group row">
														<div class="col-lg-6">
															<label><?php echo lang('app.field_first_name')?></label>
															
															<?php 
															$input = [
																	'type'  => 'text',
																	'name'  => 'buyer_info_first_name[]',
																	'required' =>true,
																	'value'=>$inf_profile['first_name'],
																	'class' => 'form-control'
															];

															echo form_input($input);
															?>	
														</div>
														<div class="col-lg-6">
															<label><?php echo lang('app.field_last_name')?></label>
															
															<?php 
															$input = [
																	'type'  => 'text',
																	'name'  => 'buyer_info_last_name[]',
																	'required' =>true,
																	'value'=>$inf_profile['last_name'],
																	'class' => 'form-control'
															];

															echo form_input($input);
															?>	
														</div>
													</div>
													<div class="form-group row">
														<div class="col-lg-6">
															<label><?php echo lang('app.field_email')?></label>
															
															<?php 
															$input = [
																	'type'  => 'text',
																	'name'  => 'buyer_info_email[]',
																	'required' =>true,
																	'value'=>$inf_profile['email'],
																	'class' => 'form-control'
															];

															echo form_input($input);
															?>	
														</div>
														<div class="col-lg-3">
															<label><?php echo lang('app.field_phone')?></label>
															
															<?php 
															$input = [
																	'type'  => 'text',
																	'name'  => 'buyer_info_phone[]',
																	'required' =>true,
																	'value'=>$inf_profile['phone'],
																	'class' => 'form-control'
															];

															echo form_input($input);
															?>	
														</div>
														<div class="col-lg-3">
															<label><?php echo lang('app.field_birthdate')?></label>
															
															<?php 
															$input = [
																	'type'  => 'text',
																	'name'  => 'buyer_info_birthdate[]',
																	'required' =>true,
																	'value'=>$inf_profile['birthdate'],
																	'class' => 'form-control'
															];

															echo form_input($input);
															?>	
														</div>
													</div>
													
												</div>
												<div class="card-footer">
													<div class="row">
														
														<div class="col-lg-12 text-lg-right">
															<button type="reset" class="btn btn-danger" onclick="$('#<?php echo $id_bloc?>').remove();">Delete</button>
														</div>
													</div>
												</div>
										</div>
									</div>
							</div> <!-- end row default buyer details -->