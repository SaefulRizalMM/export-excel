<!DOCTYPE html>
<html lang="en">
<head>
  <title>Export Excel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#table').change(function(){
            var tableId = $(this).val();
            let field = "";
                $( ".row" ).empty();
                // alert(tableId);
                // $( "#field" ).append("<Label>List Field :</label>");
                // $( "#field" ).append("<div class='row'>");

                $.get('{{ url('/get-field-table') }}?table_id='+tableId, function(data){
                    i = 0;
                    var dataField = data.data;   
                    $.each(dataField, function(index, ttObj){
                        field += "<div class='col col-lg-4'>";
                        field += "<div class='form-group'>";
                        field += "<div class='form-check'>";
                        field += "<input class='form-check-input' type='checkbox' id='field' name='field[]' value='"+ttObj+"' checked>";
                        field += "&nbsp<label class='form-check-label' for='field'>"+ttObj+"</label>";
                        field += "</div>";
                        field += "</div>";
                        field += "</div>";
                        $( ".row" ).append(field);
                        field = "";
                        i++;
                    });
                });
                // $( "#field" ).append("</div></div>");
            });
        });
  </script>
</head>
<body>
<div class="container">
	<h3>Export Excel</h3>
	<form action="#" method="POST" name="importform"
	  enctype="multipart/form-data">
		@csrf		
		<div class="form-group">
			<a class="btn btn-info" href="{{ route('export.excel') }}">Export Excel IBPR</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exportModal">
                Dynamic Export Excell
            </button>
            <!-- <a class="btn btn-info" href="#">Dynamic Export Excel</a> -->
		</div> 
	</form>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="exportModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exportModalTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ route('export.dynamic') }}" method="POST" name="modalForm" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <Label>List Table :</label>
                <select class="form-control" id="table" name="table">
                    <option selected>-- List Table --</option>
                    @foreach($tables as $table)
                        <option value="{{ $table }}">{{ $table }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <Label>List Field :</label>
                <div class="row">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-success" value="Export">
        </div>
        </form>
        </div>
    </div>
    </div>
</div>
</body>
</html>