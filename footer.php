<script src="dist/js/jquery-3.3.1.js"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="dist/js/popper.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/jquery.dataTables.js"></script>
<script src="dist/js/dataTables.bootstrap.js"></script>
<script src="dist/js/active.js"></script>
<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>

</script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#pdfInp").change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        //showInCanvas(e.target.result);
                        renderPDF(e.target.result, document.getElementById('holder'), { scale: 1.5 });

                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });

        function convertDataURIToBinary(dataURI) {
                var BASE64_MARKER = ';base64,';
                var base64Index = dataURI.indexOf(BASE64_MARKER) + BASE64_MARKER.length;
                var base64 = dataURI.substring(base64Index);
                var raw = window.atob(base64);
                var rawLength = raw.length;
                var array = new Uint8Array(new ArrayBuffer(rawLength));

                for (i = 0; i < rawLength; i++) {
                    array[i] = raw.charCodeAt(i);
                }
                return array;
            }
        function renderPDF(url, canvasContainer, options) {

            var options = options || { scale: 1 };

            function renderPage(page) {
                var viewport = page.getViewport(options.scale);
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
                var renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };

                canvas.height = viewport.height;
                canvas.width = viewport.width;

                canvasContainer.appendChild(canvas);

                page.render(renderContext);
            }

            function renderPages(pdfDoc) {
                for (var num = 1; num <= pdfDoc.numPages; num++)
                    pdfDoc.getPage(num).then(renderPage);
            }
            PDFJS.disableWorker = true;

            PDFJS.getDocument(convertDataURIToBinary(url)).then(renderPages);

        }
    </script>

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
