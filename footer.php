<script src="dist/js/jquery-3.3.1.js"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="dist/js/popper.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/jquery.dataTables.js"></script>
<script src="dist/js/dataTables.bootstrap.js"></script>
<script src="dist/js/active.js"></script>
<script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
<script src="dist/js/pdf.js"></script>

<script type="text/javascript">
$(function () {

  //sort todolist
  $( "#sortable" ).sortable();
  $( "#sortable" ).disableSelection();

	// jQuery UI sortable for the todo list
	$('.todo-list').sortable({
    placeholder         : 'sort-highlight',
    handle              : '.handle',
    forcePlaceholderSize: true,
    zIndex              : 999999
  })

	// datatable
   	$('#example').DataTable({
   		"scrollX": true
   	});

  // datepicker
    $('.datepicker').datepicker({
      dateFormat: 'yy-mm-dd'
    });
})
</script>
