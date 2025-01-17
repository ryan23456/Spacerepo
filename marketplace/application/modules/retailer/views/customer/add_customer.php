<link href="<?php echo base_url() ?>css/admin/custom_admin.css" type="text/css" rel="stylesheet" />
<?php echo $this->load->view('upload_image_in_js'); ?>
<section id="main-content">
	<section class="wrapper">
		<!--contant start-->
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumbs-alt animated fadeInLeft">		
					<li class="">
						<a href="<?php echo base_url().$this->session->userdata('userType').'/employee_management'; ?>">
							Customer Management				
						</a>
					</li>
					<li class="">
						<a href="javascript:void(0);" class="current">Add</a>
					</li>
				</ul>
			</div>
		
			<div class="col-lg-12">
				<section class="panel">
					<section class="panel custom-panel">				
					   <div class="col-lg-12 padding_left_zero padding_right_zero">
						  <!--widget start-->
<?php 
echo form_open();
?>
						  <section class="panel">
							<header class="panel-heading panel-heading1">Add Customer</header>
							<div class="panel-body" >   
								<center>
									<div class="details_main">
										<h2>Customer Details</h2>
										<img src="<?php echo base_url(); ?>images/frontend/user_icon.png" class="img-responsive">  <br />         
										<div class="col-sm-12">
											<div class="img_box">
												<div class="right">
													<input type="hidden" name="imageName" id="hideImage" value="<?php echo $result['imageName']; ?>" />
													<div id="uploadImage">
														<span id="imgname">
															<?php
															$image = '<img class="img-circle" src="'.base_url().'img/on-img.png" >';		
															echo $image;
															?>
															<!--Upload your display image-->
														</span>
													</div>
												</div>
											</div>
											<?php echo form_error('imageName');?>
										</div>
										
										<div class="col-lg-12 pd">
                            				<div class="col-lg-6">
												<div class="panel-body" style="line-height:21px;">           
                                                <div class="form-group text-left">
                                                	<label for="FirstName" class="">First Name</label> <span class="error">*</span>
                                                    <div class="iconic-input right">
                                                        
                                                        <input type="text" id="FirstName" placeholder="First Name" name="firstName" class="form-control" value="<?php echo $result['firstName']; ?>">
										</div>
                                        <?php echo form_error('firstName');?>
									</div>
								</div>	
									
                                </div>                                
                           					<div class="col-lg-6">
								<div class="panel-body" style="line-height:21px;">                               
									<div class="form-group text-left">
                                    <label for="LastName" class="">Last Name</label><span class="error">*</span>
									<div class="iconic-input right">
										
										<input type="text" id="LastName" placeholder="Last Name" name="lastName" class="form-control" value="<?php echo $result['lastName']; ?>"> 
										</div>
                                        <?php echo form_error('lastName');?>	
									</div>
								</div>	
														
							</div>
										</div>
									 	<div class="col-lg-12 pd">
											<div class="col-lg-6">
									<div class="panel-body" style="line-height:21px;">                               
										<div class="form-group text-left">
										<label for="email" class="">Phone No</label><span class="error">*</span>
										<div class="iconic-input right">
											
											<input type="text" id="email" placeholder="Phone No" name="phoneNo" class="form-control" value="<?php echo $result['phoneNo'];?>">
											</div>
											<?php echo form_error('phoneNo'); ?>	
										</div>
									</div>	
																	
								</div>
											<div class="col-lg-6">
								<div class="panel-body" style="line-height:21px;">                               
									<div class="form-group text-left">
                                    <label for="email" class="">Notes</label><span class="error">*</span>
									<div class="iconic-input right">
										
										<input type="text" id="email" placeholder="notes" name="notes" class="form-control" value="<?php echo $result['notes'];?>">
										</div>
                                        <?php echo form_error('notes');?>	
									</div>
								</div>	
																
							</div>
										</div>
										<div class="clearfix"></div>
										
										<div class="col-lg-12">
                                        	<h2>Address Details</h2>
											<img src="<?php echo base_url(); ?>images/frontend/location_icon.png" class="img-responsive">      
                                        </div>                                					
										<div class="col-lg-6">
											<div class="panel-body" style="line-height:21px;">                               
												<div class="form-group text-left">
												<label for="State" class="">State</label>
												<div class="iconic-input right">
													
													<select class="form-control selectpicker" data-live-search="true" name="stateId" onchange="city_list(this.value);"><option value="">State</option>
													<?php 
									if(!empty($result['stateList']))
									{
										foreach($result['stateList'] as $row)
										{
									?>
										<option value="<?php echo $row->stateId; ?>" <?php if($result['stateId']==$row->stateId){ ?> selected="selected" <?php } ?>>
											<?php echo $row->stateName; ?>
										</option>
										<?php	
										}
									}
									?></select> 
												</div>
												<?php echo form_error('stateId'); ?>
												</div>
											</div>													
										</div>
										
										<div class="col-lg-6">
											<div class="panel-body" style="line-height:21px;">                               
												<div class="form-group text-left">
												<label for="State" class="">Area</label>
												<div class="iconic-input right">
													<div id="cityList">
													<select class="form-control selectpicker" data-live-search="true" name="cityId"><option>Area</option></select> 
									</div>
												<?php echo form_error('cityId'); ?>
												</div>
											</div>													
										</div>
									<div class="clearfix"></div>
										
										
																			
										</div>
										
										<div class="col-lg-6">
								<div class="panel-body" style="line-height:21px;">                               
									<div class="form-group text-left">
                                    <label for="email" class="">Street</label><span class="error">*</span>
									<div class="iconic-input right">
										
										<input type="text" placeholder="Street" name="street" class="form-control" value="<?php echo $result['street'];?>">
										</div>
                                        <?php echo form_error('street');?>	
									</div>
								</div>	
																
							</div>
							
										
									</div>
						  
						  </center><br /><br />
						  <div class="col-sm-12 ">
							<center>
								<a class="btn btn-danger btn-save" href="<?php echo base_url().$this->session->userdata('userType').'/employee_management'; ?>">
								Cancel
								</a>
								&nbsp;&nbsp;
							<button class="btn btn-success btn-save">Save</button></center>
						</div>
							</form>
				 </div>
			  </section>
		  <!--widget end-->                             
			</div>
		</section>
	</section>
	</div>
	</div>
	<!--contant end-->
</section>
</section>
<script type="text/javascript">
function city_list(stateId)
{	
	$.ajax({
		type: "POST",
		url:'<?php echo base_url().$this->session->userdata('userType').'/location_management/cityStateList'; ?>',
		data:'stateId='+stateId+'&cityId=<?php echo $result['cityId']; ?>&<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>',
		beforeSend: function() {
			$('#cityList').html('<?php echo $this->loader; ?>');
		},
		success:function(result){  
			$('#cityList').html(result);	
		}
	});
}

<?php
if($result['stateId'])
{
?>
	city_list('<?php echo $result['stateId']; ?>');
<?php
}
?>

$(document).ajaxComplete(function() {	
	$('.selectpicker').selectpicker();
});
</script>
<style>
.ajax-upload-dragdrop{/* width:78% !Important;*/ padding:0px !Important; width:100px !important; text-align:center;}

.upload-statusbar{border:0; 
}

.upload-red {font-size:12px; padding:3px 15px;
}

.ajax-upload-dragdrop input{padding-left:0 !important;
	padding-right:0 !important;
	height:100px !important;
}

.ajax-upload-dragdrop  .upload-statusbar{margin-left:-120px !important;
}

.browse-star{ color: #ff6c60;
    font-size: 6px;
    line-height: 18px;
	margin-bottom: -8px;
    margin-right: -80px;
}
input[type=radio] { display:block !Important;}

.bootstrap-select .btn-default{background-color: #fff !important;
    border-color: #e2e2e4 !important;1px solid 
    color: #666 !important;
}

.bootstrap-select .btn-default span{color:#666;
}

.dropdown-menu{max-height:225px !important;
}


</style>