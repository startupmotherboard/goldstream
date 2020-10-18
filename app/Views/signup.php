
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="<?php echo base_url('/template/')?>">
		<meta charset="utf-8" />
		<title><?php echo lang('app.title_page_signup');?> | <?php echo $settings['meta_title']?></title>
		<meta name="description" content="Singin page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="<?php echo base_url('/template')?>/assets/css/pages/login/login-3.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url('/template')?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('/template')?>/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('/template')?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?php echo base_url('/template')?>/assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-column flex-row-auto">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column pt-15 px-30">
						<!--begin::Aside header-->
						<a href="<?php echo base_url()?>" class="login-logo text-center pt-lg-25 pb-10">
							<img src="<?php echo base_url('uploads/'.$settings['logo'])?>" class="max-h-70px" alt="" />
						</a>
						<!--end::Aside header-->
						<!--begin: Wizard Nav-->
						<div class="wizard-nav pt-5 pt-lg-30">
							<!--begin::Wizard Steps-->
							<div class="wizard-steps">
								<!--begin::Wizard Step 1 Nav-->
								<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<i class="wizard-check ki ki-check"></i>
											<span class="wizard-number">1</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title"><?php echo lang('app.signup_tabs_account')?></h3>
											<div class="wizard-desc"><?php echo lang('app.signup_tabs_sub_title_account')?></div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 1 Nav-->
								<!--begin::Wizard Step 2 Nav-->
								<div class="wizard-step" data-wizard-type="step">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<i class="wizard-check ki ki-check"></i>
											<span class="wizard-number">2</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title"><?php echo lang('app.signup_tabs_contact')?></h3>
											<div class="wizard-desc"><?php echo lang('app.signup_tabs_sub_title_contact')?></div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 2 Nav-->
								
							
							</div>
							<!--end::Wizard Steps-->
						</div>
						<!--end: Wizard Nav-->
					</div>
					<!--end::Aside Top-->
					<!--begin::Aside Bottom-->
					<div class="aside-img-wizard d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center pt-2 pt-lg-5" style="background-position-y: calc(100% + 3rem); background-image: url(<?php echo base_url('uploads/'.$settings['background'])?>"></div>
					<!--end::Aside Bottom-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="login-content flex-column-fluid d-flex flex-column p-10">
					<!--begin::Top-->
					
					<!--end::Top-->
					<!--begin::Wrapper-->
					<div class="d-flex flex-row-fluid flex-center">
						<!--begin::Signin-->
						<div class="login-form login-form-signup">
							<!--begin::Form-->
							
							 <?php $attributes = ['class' => '', 'id' => 'kt_login_signup_form','method'=>'post', 'novalidate'=>"novalidate"];
					echo form_open( base_url('Ajax/submit_signup_form'), $attributes);?>
								<!--begin: Wizard Step 1-->
								<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
									<!--begin::Title-->
									<div class="pb-10 pb-lg-15">
										<h3 class="font-weight-bolder text-dark display5"><?php echo lang('app.title_page_signup');?></h3>
										<div class="text-muted font-weight-bold font-size-h4"><?php echo lang('app.sub_title_have_account');?>
										<a href="<?php echo base_url('login')?>" class="text-primary font-weight-bolder"><?php echo lang('app.sub_title_go_login');?></a></div>
									</div>
									<!--begin::Title-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark"><?php echo lang('app.field_first_name')?></label>
										<?php 
										$input = [
												'type'  => 'text',
												'name'  => 'first_name',
												'id'    => 'first_name',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6'
										];

										echo form_input($input);
										?>
										
									</div>
									<!--end::Form Group-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark"><?php echo lang('app.field_last_name')?></label>
										<?php 
										$input = [
												'type'  => 'text',
												'name'  => 'last_name',
												'id'    => 'last_name',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6'
										];

										echo form_input($input);
										?>
									</div>
									<!--end::Form Group-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark"><?php echo lang('app.field_email')?></label>
										<?php 
										$input = [
												'type'  => 'text',
												'name'  => 'email',
												'id'    => 'email',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6'
										];

										echo form_input($input);
										?>
									</div>
									
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark"><?php echo lang('app.field_password')?></label>
										<?php 
										$input = [
												'type'  => 'password',
												'name'  => 'password',
												'id'    => 'password',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 rounded-lg border-0'
										];

										echo form_password($input);
										?>
									</div>
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark"><?php echo lang('app.field_confirm_password')?></label>
										<?php 
										$input = [
												'type'  => 'password',
												'name'  => 'confirm_password',
												'id'    => 'confirm_password',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 rounded-lg border-0'
										];

										echo form_password($input);
										?>
									</div>
									<!--end::Form Group-->
								</div>
								<!--end: Wizard Step 1-->
								<!--begin: Wizard Step 2-->
								<div class="pb-5" data-wizard-type="step-content">
									<!--begin::Title-->
									<div class="pt-lg-0 pt-5 pb-15">
										<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg"><?php echo lang('app.signup_tabs_contact')?></h3>
										
									</div>
									<!--begin::Title-->
									<!--begin::Row-->
									<div class="row">
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark"><?php echo lang('app.field_adr1')?></label>
												<?php 
										$input = [
												'type'  => 'text',
												'name'  => 'adr1',
												'id'    => 'adr1',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6'
										];

										echo form_input($input);
										?>
											</div>
											<!--end::Input-->
										</div>
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark"><?php echo lang('app.field_adr2')?></label>
												<?php 
										$input = [
												'type'  => 'text',
												'name'  => 'adr2',
												'id'    => 'adr2',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6'
										];

										echo form_input($input);
										?>
												
											</div>
											<!--end::Input-->
										</div>
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row">
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark"><?php echo lang('app.field_zip')?></label>
												<?php 
										$input = [
												'type'  => 'text',
												'name'  => 'zip',
												'id'    => 'zip',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6'
										];

										echo form_input($input);
										?>
											</div>
											<!--end::Input-->
										</div>
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark"><?php echo lang('app.field_city')?></label>
												<?php 
										$input = [
												'type'  => 'text',
												'name'  => 'city',
												'id'    => 'city',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6'
										];

										echo form_input($input);
										?>
											</div>
											<!--end::Input-->
										</div>
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row">
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark"><?php echo lang('app.field_province')?></label>
												<?php 
										$input = [
												'type'  => 'text',
												'name'  => 'province',
												'id'    => 'province',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6'
										];

										echo form_input($input);
										?>
											</div>
											<!--end::Input-->
										</div>
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark"><?php echo lang('app.field_phone')?></label>
												<?php 
										$input = [
												'type'  => 'text',
												'name'  => 'phone',
												'id'    => 'phone',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6'
										];

										echo form_input($input);
										?>
											</div>
											<!--end::Input-->
										</div>
									</div>
									<!--end::Row-->
								</div>
								<!--end: Wizard Step 2-->
							
								<!--begin: Wizard Actions-->
								<div class="row">
									<div class="alert alert-danger m-t-20" role="alert" id="error_alert" style="display:none"></div>
								</div>
								<div class="d-flex justify-content-between pt-3">
								
									<div class="mr-2">
										<button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 pl-6 pr-8 py-4 my-3 mr-3" data-wizard-type="action-prev">
										<span class="svg-icon svg-icon-md mr-1">
											<!--begin::Svg Icon | path:<?php echo base_url('/template')?>/assets/media/svg/icons/Navigation/Left-2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
													<path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span><?php echo lang('app.btn_previous_step')?></button>
									</div>
									<div>
										<button class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3" data-wizard-type="action-submit" type="submit" id="kt_login_signup_form_submit_button"><?php echo lang('app.btn_sign_up')?>
										<span class="svg-icon svg-icon-md ml-2">
											<!--begin::Svg Icon | path:<?php echo base_url('/template')?>/assets/media/svg/icons/Navigation/Right-2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span></button>
										<button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-next"><?php echo lang('app.btn_next_step')?>
										<span class="svg-icon svg-icon-md ml-1">
											<!--begin::Svg Icon | path:<?php echo base_url('/template')?>/assets/media/svg/icons/Navigation/Right-2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span></button>
									</div>
								</div>
								<!--end: Wizard Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Signin-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo base_url('/template')?>/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url('/template')?>/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?php echo base_url('/template')?>/assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<!--script src="<?php echo base_url('/template')?>/assets/js/pages/custom/login/login-3.js"></script-->
		<script>
		"use strict";

// Class Definition
var KTLogin = function() {
	var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15';

	var _handleFormSignin = function() {
		var form = KTUtil.getById('kt_login_singin_form');
		var formSubmitUrl = KTUtil.attr(form, 'action');
		var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');

		if (!form) {
			return;
		}

		FormValidation
		    .formValidation(
		        form,
		        {
		            fields: {
						username: {
							validators: {
								notEmpty: {
									message: 'Username is required'
								}
							}
						},
						password: {
							validators: {
								notEmpty: {
									message: 'Password is required'
								}
							}
						}
		            },
		            plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
	            		//defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
						bootstrap: new FormValidation.plugins.Bootstrap({
						//	eleInvalidClass: '', // Repace with uncomment to hide bootstrap validation icons
						//	eleValidClass: '',   // Repace with uncomment to hide bootstrap validation icons
						})
		            }
		        }
		    )
		    .on('core.form.valid', function() {
				// Show loading state on button
				KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "Please wait");

				// Simulate Ajax request
				setTimeout(function() {
					KTUtil.btnRelease(formSubmitButton);
				}, 2000);

				// Form Validation & Ajax Submission: https://formvalidation.io/guide/examples/using-ajax-to-submit-the-form
				/**
		        FormValidation.utils.fetch(formSubmitUrl, {
		            method: 'POST',
					dataType: 'json',
		            params: {
		                name: form.querySelector('[name="username"]').value,
		                email: form.querySelector('[name="password"]').value,
		            },
		        }).then(function(response) { // Return valid JSON
					// Release button
					KTUtil.btnRelease(formSubmitButton);

					if (response && typeof response === 'object' && response.status && response.status == 'success') {
						Swal.fire({
			                text: "All is cool! Now you submit this form",
			                icon: "success",
			                buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn font-weight-bold btn-light-primary"
							}
			            }).then(function() {
							KTUtil.scrollTop();
						});
					} else {
						Swal.fire({
			                text: "Sorry, something went wrong, please try again.",
			                icon: "error",
			                buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn font-weight-bold btn-light-primary"
							}
			            }).then(function() {
							KTUtil.scrollTop();
						});
					}
		        });
				**/
		    })
			.on('core.form.invalid', function() {
				Swal.fire({
					text: "Sorry, looks like there are some errors detected, please try again.",
					icon: "error",
					buttonsStyling: false,
					confirmButtonText: "Ok, got it!",
					customClass: {
						confirmButton: "btn font-weight-bold btn-light-primary"
					}
				}).then(function() {
					KTUtil.scrollTop();
				});
		    });
    }

	var _handleFormForgot = function() {
		var form = KTUtil.getById('kt_login_forgot_form');
		var formSubmitUrl = KTUtil.attr(form, 'action');
		var formSubmitButton = KTUtil.getById('kt_login_forgot_form_submit_button');

		if (!form) {
			return;
		}

		FormValidation
		    .formValidation(
		        form,
		        {
		            fields: {
						email: {
							validators: {
								notEmpty: {
									message: 'Email is required'
								},
								emailAddress: {
									message: 'The value is not a valid email address'
								}
							}
						}
		            },
		            plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
	            		//defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
						bootstrap: new FormValidation.plugins.Bootstrap({
						//	eleInvalidClass: '', // Repace with uncomment to hide bootstrap validation icons
						//	eleValidClass: '',   // Repace with uncomment to hide bootstrap validation icons
						})
		            }
		        }
		    )
		    .on('core.form.valid', function() {
				// Show loading state on button
				KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "Please wait");

				// Simulate Ajax request
				setTimeout(function() {
					KTUtil.btnRelease(formSubmitButton);
				}, 2000);
		    })
			.on('core.form.invalid', function() {
				Swal.fire({
					text: "Sorry, looks like there are some errors detected, please try again.",
					icon: "error",
					buttonsStyling: false,
					confirmButtonText: "Ok, got it!",
					customClass: {
						confirmButton: "btn font-weight-bold btn-light-primary"
					}
				}).then(function() {
					KTUtil.scrollTop();
				});
		    });
    }

	var _handleFormSignup = function() {
		// Base elements
		var wizardEl = KTUtil.getById('kt_login');
		var form = KTUtil.getById('kt_login_signup_form');
		
		
		var formSubmitUrl = KTUtil.attr(form, 'action');
		
		var formSubmitButton = KTUtil.getById('kt_login_signup_form_submit_button');
		var wizardObj;
		var validations = [];

		if (!form) {
			return;
		}

		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		// Step 1
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					first_name: {
						validators: {
							notEmpty: {
								message: '<?php echo lang("app.error_required_field")?>'
							}
						}
					},
					last_name: {
						validators: {
							notEmpty: {
								message: '<?php echo lang("app.error_required_field")?>'
							}
						}
					},
					
					email: {
						validators: {
							notEmpty: {
								message: '<?php echo lang("app.error_required_field")?>'
							},
							emailAddress: {
								message: '<?php echo lang("app.error_valid_email")?>'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: '<?php echo lang("app.error_required_field")?>'
							}
						}
					},
					 confirm_password: {
							validators: {
								identical: {
									compare: function() {
										return form.querySelector('[name="password"]').value;
									},
									message: '<?php echo lang("app.error_match_password")?>'
								}
							}
						},
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));

		// Step 2
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					adr1: {
						validators: {
							notEmpty: {
								message: '<?php echo lang("app.error_required_field")?>'
							}
						}
					},
					
					zip: {
						validators: {
							notEmpty: {
								message: '<?php echo lang("app.error_required_field")?>'
							}
						}
					},
					city: {
						validators: {
							notEmpty: {
								message: '<?php echo lang("app.error_required_field")?>'
							}
						}
					},
					province: {
						validators: {
							notEmpty: {
								message: '<?php echo lang("app.error_required_field")?>'
							}
						}
					},
					phone: {
						validators: {
							notEmpty: {
								message: '<?php echo lang("app.error_required_field")?>'
							}
						}
					},
					
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));

		

		// Initialize form wizard
		wizardObj = new KTWizard(wizardEl, {
			startStep: 1, // initial active step number
			clickableSteps: false  // allow step clicking
		});

		// Validation before going to next page
		wizardObj.on('change', function (wizard) {
			if (wizard.getStep() > wizard.getNewStep()) {
				return; // Skip if stepped back
			}

			// Validate form before change wizard step
			var validator = validations[wizard.getStep() - 1]; // get validator for currnt step

			if (validator) {
				validator.validate().then(function (status) {
					if (status == 'Valid') {
						wizard.goTo(wizard.getNewStep());

						KTUtil.scrollTop();
					} else {
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
				});
			}

			return false;  // Do not change wizard step, further action will be handled by he validator
		});

		// Change event
		wizardObj.on('changed', function (wizard) {
			KTUtil.scrollTop();
		});

		// Submit event
		wizardObj.on('submit', function (wizard) {
			
			$("#error_alert").hide(0);
			var validator = validations[wizard.getStep() - 1]; // get validator for currnt step

			if (validator) {
				validator.validate().then(function (status) {
					if (status == 'Valid') {
						//ajax call
						var fields=$("#kt_login_signup_form").serializeArray();
						$.ajax({
							  url:formSubmitUrl,
							  method:"POST",
							  data:fields
							  
						}).done(function(data){
							
							var obj=JSON.parse(data);
							if(obj.error==true){
								$("#error_alert").html(obj.validation);
								$("#error_alert").show('slow');
								if(obj.error_mail==false){
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
									Swal.fire({
										text: "<?php echo lang('app.error_form_email')?>",
										icon: "error",
										buttonsStyling: false,
										showCancelButton: true,
										confirmButtonText: "<?php echo lang('app.btn_login_modal')?>",
										cancelButtonText: "<?php echo lang('app.error_form_btn')?>",
										customClass: {
											confirmButton: "btn font-weight-bold btn-light",
												cancelButton: "btn font-weight-bold btn-default"
										}
									}).then(function (result) {
										if (result.value) {
										document.location.href="<?php echo base_url('login')?>";
										} else if (result.dismiss === 'cancel') {
											KTUtil.scrollTop();
										}
									});

								}
							
							}
							else{
								
								$("#error_alert").hide(0);
								Swal.fire({
									text: "<?php echo lang('app.success_form_signup')?>",
									icon: "success",
									showCancelButton: false,
									buttonsStyling: false,
									confirmButtonText: "<?php echo lang('app.btn_login_modal')?>",
									
									customClass: {
										confirmButton: "btn font-weight-bold btn-primary",
										cancelButton: "btn font-weight-bold btn-default"
									}
								}).then(function (result) {
									if (result.value) {
										document.location.href="<?php echo base_url('login')?>";
									} else if (result.dismiss === 'cancel') {
										Swal.fire({
											text: "Your form has not been submitted!.",
											icon: "error",
											buttonsStyling: false,
											confirmButtonText: "<?php echo lang('app.error_form_btn')?>",
											customClass: {
												confirmButton: "btn font-weight-bold btn-primary",
											}
										});
									}
								});
							}
						});
						
					}
					else{
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
				});
			} 
		});
    }

    // Public Functions
    return {
        init: function() {
            _handleFormSignin();
			_handleFormForgot();
			_handleFormSignup();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});
</script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>