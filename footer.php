<script src="dist/js/jquery-3.3.1.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
  </script>
<script src="dist/js/popper.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/jquery.dataTables.js"></script>
<script src="dist/js/dataTables.bootstrap.js"></script>
<script src="dist/js/active.js"></script>


<script type="text/javascript">
$(function () {

	// jQuery UI sortable for the todo list
	$('.todo-list').sortable({
    placeholder         : 'sort-highlight',
    handle              : '.handle',
    forcePlaceholderSize: true,
    zIndex              : 999999
  })

	// datatable
   	$('#example').DataTable({
	// 	'fnDrawCallback': function (oSettings) {
	// 	$('.dataTables_length').each(function () {
	// 		$(this).append('<a href="" class="btn btn-success btn-sm" style="margin-left:15px">Add</a>');
	// 	});
	// } 
   	});

})
</script>