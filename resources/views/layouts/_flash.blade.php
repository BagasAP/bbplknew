@if (session()->has('flash_notification.message'))
<div class="container">
	<div class="alert alert-{{ session()->get('flash_notification.level') }}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{!! session()->get('flash_notification.message') !!}
	</div>
</div>
@endif

@if (session()->has('flash_message_delete'))

<script type="text/javascript">
  
  swal({   //removed the brackets from session because laracasts doesn't show them 
    title: "session('flash_message_delete.title')",   
    text: "session('flash_message_delete.message')",   
    type: "session('flash_message_delete.level')",   
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Yes, delete it!",   
    cancelButtonText: "No, cancel please!",   
    closeOnConfirm: false,   
    closeOnCancel: false
    },

    function(isConfirm){   
      if (isConfirm) 
        {     
          swal("Deleted!", "Your file has been deleted.", "success");   
        } 

      else
        {     
          swal("Cancelled", "Your file is safe", "error");   
        }
      });

</script>

@endif