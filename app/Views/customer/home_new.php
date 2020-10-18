
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="<?php echo base_url('template')?>">
		<meta charset="utf-8" />
		<title><?php echo lang('app.title_page_home_new')?> | <?php echo $settings['meta_title']?></title>
		<meta name="description" content="Multi column form examples" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url('template')?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('template')?>/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('template')?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?php echo base_url('template')?>/assets/media/logos/favicon.ico" />
		<style>
		.checkbox-inline .checkbox {
  
    margin-bottom: 0.9rem;
}
.form-group label {
    font-size: 1.1rem;
}
</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="<?php echo base_url('template')?>/assets/media/logos/logo-letter-2.png" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left d-flex aside-fixed" id="kt_aside">
					<?php echo view('customer/includes/aside_primary.php',array('menu'=>'home_new'));?>
						
						<?php echo view('customer/includes/aside_secondary.php');?>
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3"><?php echo lang('app.title_page_home_new')?></h2>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
											<li class="breadcrumb-item">
												<a href="<?php echo base_url('customer/dashboard')?>" class="text-muted"><?php echo lang('app.menu_app');?></a>
											</li>
											<li class="breadcrumb-item">
												<a href="#" class="text-muted"><?php echo lang('app.menu_home_new');?></a>
											</li>
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<?php echo view('customer/includes/tool_bar.php');?>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							<?php $attributes = ['class' => '', 'id' => 'home_new_form','method'=>'post', 'novalidate'=>"novalidate"];
												echo form_open_multipart( base_url('customer/home/new'), $attributes);
												$input = [
												'type'  => 'hidden',
												'name'  => 'action',
												'id'    => 'action',
												'value' =>'add_home',
												
												'class' => 'form-control'
												
												];
										echo form_input($input);
												?>
												<div class="row">
													<div class="alert alert-danger m-t-20" role="alert" id="error_alert" style="display:none"></div>
												</div>
												<?php if(isset($success)){?>
												<div class="row">
													<div class="alert alert-success m-t-20" role="alert" id="error_alert" ><?php echo $success?></div>
												</div>
												<?php } ?>
								<div class="row">
									<div class="col-lg-12">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title"><?php echo lang('app.title_section_home_detail')?>:</h3>
												
											</div>
											<!--begin::Form-->
											
												<div class="card-body">
												
													<div class="form-group row">
														<div class="col-lg-6">
															<label><?php echo lang('app.home_field_city')?> <?php echo lang('app.help_home_input2');?></label>
															<div class="input-group">
															<?php 
															$input = [
																	'type'  => 'text',
																	'name'  => 'city',
																	'id'    => 'city',
																	'required' =>true,
																	
																	'class' => 'form-control'
															];

															echo form_input($input);
															?>
															<div class="input-group-append">
																	<span class="input-group-text">
																		<i class="la la-map-marker"></i>
																	</span>
																</div>
															</div>
															
														</div>
														<div class="col-lg-6">
															<label><?php echo lang('app.home_field_bedrooms')?> <?php echo lang('app.help_home_input');?></label>
															<div class="checkbox-inline">
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_bedrooms[]" value="1-2" />
																<span></span>1-2</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_bedrooms[]" value="3-4" />
																<span></span>3-4</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_bedrooms[]" value="5-6" />
																<span></span>5-6</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_bedrooms[]" value="7+" />
																<span></span>7+</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox" checked="checked" id="home_field_bedrooms_no_preference" name="home_field_bedrooms[]" value="no_preferences" />
																<span></span><?php echo lang('app.no_preferences')?> </label>
															</div>
														</div>
													</div>
													<div class="form-group row">
														<div class="col-lg-6">
															<label><?php echo lang('app.home_field_price_range')?></label>
															<div class="row">
															<div class="col-lg-6">
															
															
													
												
																<?php 
																$input = [
																		'type'  => 'text',
																		'name'  => 'price_min',
																		'id'    => 'price_min',
																		'required' =>true,
																		
																		'class' => 'form-control'
																];

																echo form_input($input);
																?>
																<span class="form-text text-muted"><?php echo lang('app.home_field_price_min')?></span>
															</div>
															<div class="col-lg-6">
																<?php 
																$input = [
																		'type'  => 'text',
																		'name'  => 'price_max',
																		'id'    => 'price_max',
																		'required' =>true,
																		
																		'class' => 'form-control'
																];

																echo form_input($input);
																?>
																<span class="form-text text-muted"><?php echo lang('app.home_field_price_max')?></span>
															</div>
														</div>
													</div>
														<div class="col-lg-6">
															<label><?php echo lang('app.home_field_square')?> <?php echo lang('app.help_home_input');?></label>
															<div class="checkbox-inline">
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_square[]" value="-500" />
																<span></span>-500</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_square[]" value="501-1000" />
																<span></span>501-1000</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_square[]" value="1001-1999" />
																<span></span>1001-1999</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_square[]" value="2000-3000" />
																<span></span>2000-3000</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_square[]" value="3000-4000" />
																<span></span>3000-4000</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_square[]" value="4000+" />
																<span></span>4000+</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox" checked="checked" name="home_field_square[]" id="home_field_square_no_preferences" value="no_preferences" />
																<span></span><?php echo lang('app.no_preferences')?> </label>
															</div>
														</div>
												</div>
												<div class="form-group row">
													<div class="col-lg-6">
														<label><?php echo lang('app.home_field_property_type')?> <?php echo lang('app.help_home_input');?></label>
														<div class="checkbox-inline">
															<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_property_type[]" value="Single-Family" />
															<span></span>Single-Family</label>
															<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_property_type[]" value="Multi-Family" />
															<span></span>Multi-Family</label>
															<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_property_type[]" value="Seasonal" />
															<span></span>Seasonal</label>
															<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_property_type[]" value="Land" />
															<span></span>Land</label>
															
														</div>
													</div>
													<div class="col-lg-6">
															<label><?php echo lang('app.home_field_type_home')?> <?php echo lang('app.help_home_input');?></label>
															<div class="checkbox-inline">
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_type_home[]" value="Townhouse" />
																<span></span>Townhouse</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_type_home[]" value="Detached" />
																<span></span>Detached</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_type_home[]" value="Semi-detached" />
																<span></span>Semi-detached</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox"  name="home_field_type_home[]" value="Condo" />
																<span></span>Condo</label>
																<label class="checkbox checkbox-rounded">
																<input type="checkbox" checked="checked" name="home_field_type_home[]" id="home_field_type_home_no_preferences" value="no_preferences" />
																<span></span><?php echo lang('app.no_preferences')?> </label>
															</div>
														</div>
												</div>
												<div class="form-group row">
													<div class="col-lg-6">
														<label><?php echo lang('app.home_field_preferences')?> <?php echo lang('app.help_home_input');?></label>
														<div class="checkbox-inline">
															<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_preferences[]" value="Single Floor Home" />
															<span></span>Single Floor Home</label>
															<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_preferences[]" value="Near City Centre" />
															<span></span>Near City Centre</label>
															<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_preferences[]" value="Outside City Centre" />
															<span></span>Outside City Centre</label>
															<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_preferences[]" value="Proximity to Public Transit" />
															<span></span>Proximity to Public Transit</label>
															<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_preferences[]" value="Garage/interior parking" />
															<span></span>Garage/interior parking</label>
																<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_preferences[]" value="Private parking/exterior parking" />
															<span></span>Private parking/exterior parking</label>
																<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_preferences[]" value="Pool" />
															<span></span>Pool</label>
																<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_preferences[]" value="New construction" />
															<span></span>New construction</label>
																<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_preferences[]" value="Recently renovated" />
															<span></span>Recently renovated</label>
																<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_preferences[]" value="Fixer-upper" />
															<span></span>Fixer-upper</label>
																<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_preferences[]" value="Wheelchair accessible" />
															<span></span>Wheelchair accessible</label>
																<label class="checkbox checkbox-rounded">
															<input type="checkbox"  name="home_field_preferences[]" value="In-law suite" />
															<span></span>In-law suite</label>
																
														</div>
													</div>
													<div class="col-lg-6">
														<label><?php echo lang('app.home_field_details')?></label>
															
															<?php 
															$input = [
																	
																	'name'  => 'details',
																	'id'    => 'details',
																	'required' =>true,
																	
																	'class' => 'form-control'
															];

															echo form_textarea($input);
															?>
															
													</div>
												</div>
												<?php /*<div class="card-footer">
													<div class="row">
														<div class="col-lg-6">
															<button type="submit" class="btn btn-primary mr-2"><?php echo lang('app.btn_save')?></button>
															<!--button type="reset" class="btn btn-secondary">Cancel</button-->
														</div>
														<!--div class="col-lg-6 text-lg-right">
															<button type="reset" class="btn btn-danger">Delete</button>
														</div-->
													</div>
												</div>*/?>
											
											
										</div>
										<!--end::Card-->
								
									
									</div>
								</div>
							</div> <!-- end row home details -->
							
							<div class="row" id="default_bloc_buyer">
									<div class="col-lg-12">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title"><?php echo lang('app.title_section_home_default_buyer')?></h3>
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
												'value' =>'yes',
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
												
										</div>
									</div>
							</div> <!-- end row default buyer details -->
							<section id="new_bloc_buyer"></section>
							<div class="row" id="default_bloc_buyer">
								<div class="col-lg-12">
									<!--begin::Card-->
									<div class="card card-custom gutter-b example example-compact">
												
										<div class="card-body">
											<div class="row">
														
														<div class="col-lg-12 text-lg-right">
															<button type="button" class="btn btn-primary mr-2 btn_submit"><?php echo lang('app.btn_save')?></button>
														</div>
													</div>
											
										</div>
									</div>
								</div>
							</div>
						</form><!--end::Form-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
						<?php echo view('customer/includes/footer.php')?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		
		<!--end::Quick Actions Panel-->
		<!-- begin::User Panel-->
	<?php echo view('customer/includes/quick.php')?>
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:<?php echo base_url('template')?>/assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo base_url('template')?>/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url('template')?>/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?php echo base_url('template')?>/assets/js/scripts.bundle.js"></script>
		<script src="<?php echo base_url('template')?>/assets/js/pages/crud/forms/widgets/input-mask.js"></script>
		<!--end::Global Theme Bundle-->
		<script>
		"use strict";
		
			 $("input[name='buyer_info_birthdate[]']").inputmask("99/99/9999", {
				"placeholder": "dd/mm/yyyy",
				autoUnmask: true
			});
		
			$("#price_min").inputmask('$ 999.999.999', {
         numericInput: true,
		 
        }); //123456  =&gt;  € ___.__1.234,56
		$("#price_max").inputmask('$ 999.999.999', {
         numericInput: true
        }); //123456  =&gt;  € ___.__1.234,56
			$("input[name='home_field_bedrooms[]']").click(function(){ 
				var ck=$("#home_field_bedrooms_no_preference").is(":checked");
				var v=$(this).val();
				if(v=='no_preferences'){
					if(ck==true){
						$("input[name='home_field_bedrooms[]']").prop('checked',false);
						$("#home_field_bedrooms_no_preference").prop('checked',true);
					}
					
				}
				else{
					if(ck==true){
						
						$("#home_field_bedrooms_no_preference").prop('checked',false);
					}
					
				}
			});
			
			
			$("input[name='home_field_square[]']").click(function(){ 
				var ck=$("#home_field_square_no_preferences").is(":checked");
				var v=$(this).val();
				if(v=='no_preferences'){
					if(ck==true){
						$("input[name='home_field_square[]']").prop('checked',false);
						$("#home_field_square_no_preferences").prop('checked',true);
					}
					
				}
				else{
					if(ck==true){
						
						$("#home_field_square_no_preferences").prop('checked',false);
					}
					
				}
			});
			
			$("input[name='home_field_type_home[]']").click(function(){ 
				var ck=$("#home_field_type_home_no_preferences").is(":checked");
				var v=$(this).val();
				if(v=='no_preferences'){
					if(ck==true){
						$("input[name='home_field_type_home[]']").prop('checked',false);
						$("#home_field_type_home_no_preferences").prop('checked',true);
					}
					
				}
				else{
					if(ck==true){
						
						$("#home_field_type_home_no_preferences").prop('checked',false);
					}
					
				}
			});
		$(document).on("click", '.add_buyer', function(event) { 
			
					$.ajax({
						  url:"<?php echo base_url('Ajax/add_bloc_buyer')?>",
						  method:"POST",
						 
						  
					}).done(function(data){
						$("#new_bloc_buyer").append(data);
					});
			});	
			$(".btn_submit").on('click',function(){
				
				var fields=$("#home_new_form").serializeArray();
				$.ajax({
						  url:"<?php echo base_url('Ajax/validation_add_home')?>",
						  method:"POST",
						 data:fields,
						  
					}).done(function(data){
						console.log(data);
						var obj=JSON.parse(data);
						if(obj.error==true){
								$("#error_alert").html(obj.validation);
								$("#error_alert").show('slow');
								Swal.fire({
									text: "<?php echo lang('app.error_form')?>",
									icon: "error",
									buttonsStyling: false,
									confirmButtonText: "<?php echo lang('app.error_form_btn')?>",
									customClass: {
										confirmButton: "btn font-weight-bold btn-light"
									}
								}).then(function () {
									KTUtil.scrollTop();
								});
							
							}
							else{
								
								$("#error_alert").hide(0);
								$("#home_new_form").submit();
							}
					});
				
					/*Swal.fire({
						text: "<?php echo lang('app.alert_form_new_home')?>",
						icon: "warning",
						showCancelButton: true,
						buttonsStyling: false,
						confirmButtonText: "<?php echo lang('app.btn_submit')?>",
						cancelButtonText: "<?php echo lang('app.btn_cancel')?>",
						customClass: {
							confirmButton: "btn font-weight-bold btn-primary",
							cancelButton: "btn font-weight-bold btn-default"
						}
					}).then(function () {
						
						if (result.value) { alert("");
										//$("#home_new_form").submit();
									} else if (result.dismiss === 'cancel') {
										KTUtil.scrollTop();
									}
					});*/
			});			
		</script>
	</body>
	<!--end::Body-->
</html>