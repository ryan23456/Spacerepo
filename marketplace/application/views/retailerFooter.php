	<!--footer start-->
    <footer class="site-footer">
    	<div class="text-center">
        	<?php echo date('Y'); ?> &copy;  Marketplace.
            <a href="javascript:void(0);" class="go-top">
				<i class="fa fa-angle-up"></i>
            </a>
		</div>
	</footer>
    <!--footer end-->
</section>

<script type="text/javascript" src="<?php echo base_url(); ?>js/confirmbox/sweet-alert.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/confirmbox/sweet-alert.css">
<script type="text/javascript">
function confirm_box(redirect,msg)
{
	swal({   
	title: '',   
	text: msg,   
	//type: "warning",   
	showCancelButton: true,   
	confirmButtonColor: "#DD6B55",   
	confirmButtonText: "Yes",   
	cancelButtonText: "No",   
	closeOnConfirm: false,   
	closeOnCancel: false 
	}, 
	function(isConfirm){   
		if (isConfirm) 
		{     
			if(redirect!='')
			{
				window.location.href = redirect;				
			}
			else
			{
				swal("Success","", "success");
			
			}
		} 
		else 
		{     
			swal("Cancelled","", "error");   
		} 
	});
}
</script>
	<!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/chosen.jquery.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>js/jquery.dcjqaccordion.2.7.js"></script>
   <?php /*?> <script src="<?php echo base_url(); ?>js/jquery.scrollTo.min.js"></script><?php */?>
    <script src="<?php echo base_url(); ?>js/slidebars.min.js"></script>
   <?php /*?> <script src="<?php echo base_url(); ?>js/jquery.nicescroll.js" type="text/javascript"></script><?php */?>
    <script src="<?php echo base_url(); ?>js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>js/common-scripts.js"></script>


	<script type="text/javascript">
		var config = {
		  '.chosen-select'           : {},
		  '.chosen-select-deselect'  : {allow_single_deselect:true},
		  '.chosen-select-no-single' : {disable_search_threshold:10},
		  '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
		  '.chosen-select-width'     : {width:"95%"}
		}
		for (var selector in config) {
		  $(selector).chosen(config[selector]);
		}
   </script>
<?php /*?>   	<link rel="stylesheet" href="<?php echo base_url(); ?>css/lightbox/lightbox.css">
	<script src="<?php echo base_url(); ?>js/lightbox/lightbox.js"></script>
<?php */?>  </body>
</html>