<div class="card shadow mb-4">

    <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar navbar-dark ">
            <a class="navbar-brand"> ক্যাটাগরি লিস্ট</a>

        </nav>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                <thead class="bg-abasas-dark">

                    <tr>

                        @for( $i = 0 ; $i < sizeof($fieldTitleList) ; $i++) <th>{{$fieldTitleList[$i]}}</th> @endfor
                    </tr>
                </thead>
                <tfoot class="bg-abasas-dark">
                    <tr>
                        @for( $i = 0 ; $i < sizeof($fieldTitleList) ; $i++) <th>{{$fieldTitleList[$i]}}</th> @endfor
                    </tr>

                </tfoot>
                <tbody>

                    <?php $itr = 1; ?>
                    @foreach ($items as $item)
                    <?php $itemId = $item->id; ?>

                    <tr class="data-row">
                        <td class="iteration">{{$itr++}}</td>
                        @foreach( $fieldList as $field)
                       

                            @if( $field['type'] == 'dropDown')
                            @php
                            $name= $field['name'];
                            $id= $field['field'];
                            $databaseName= $field['database_name'];
                            @endphp
                            <td class="  word-break  {{$field['database_name']}} " data-{{$field['database_name']}}-id="{{$item->$databaseName}}"  >

                            {{ $item->$name->$id}} 
                            </td>

                            @else
                            @php
                            $name= $field['name'];
                            @endphp
                            <td class="  word-break  {{$field['database_name']}} ">

                            {{ $item->$name}} 
                            </td>
                            @endif


                        @endforeach







                        <td class="align-middle">
                            <button type="button" class="btn btn-success" id="data-edit-button" data-item-id={{$itemId}}   > <i class="fa fa-edit" aria-hidden="false"> </i></button>


                            <form method="POST" action="{{route($routes['delete']['name'],$itemId)}}" id="delete-form-{{ $item->id }}" style="display:none; ">
                                {{csrf_field() }}
                                {{ method_field("delete") }}
                            </form>




                            <button onclick="if(confirm('are you sure to delete this')){
				document.getElementById('delete-form-{{ $item->id }}').submit();
			}
			else{
				event.preventDefault();
			}
			" class="btn btn-danger btn-sm btn-raised">
                                <i class="fa fa-trash" aria-hidden="false">

                                </i>
                            </button>



                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- Attachment Modal -->
<div class="modal fade" id="data-edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="edit-modal-label ">তথ্য সংশোধন</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="data-edit-form" class="form-horizontal" method="POST" action="">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label class="col-form-label" for="modal-update-hidden-id">আইডি </label>
                        <input type="text" name="id" class="form-control" id="modal-update-hidden-id" required readonly>
                    </div>

                    @php $j=1;@endphp



                    @foreach( $fieldList as $field) <div class="form-group">
                        <label class="col-form-label" for="modal-edit-{{$field['name']}}">{{$fieldTitleList[$j++]}}</label>

                       <input type="text" name="{{$field['database_name']}}" class="form-control" id="modal-edit-{{$field['name']}}" required>
            </div>
            @endforeach


            <div class="form-group">

                <input type="submit" id="submit-button" value=" সাবমিট" class="form-control btn btn-success">
            </div>
            <!-- /description -->




            </form>
        </div>

    </div>
</div>
</div>
</div>
<!-- /Attachment Modal -->


<script>
    /**
     * for showing edit item popup
     */

    $(document).on('click', "#data-edit-button", function() {


        $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

        var options = {
            'backdrop': 'static'
        };
        $('#data-edit-modal').modal(options)
    });

    // on modal show
    $('#data-edit-modal').on('show.bs.modal', function() {
        var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
        var row = el.closest(".data-row");

        // get the data
        var itemId = el.data('item-id');
        var name = row.children(".name").text();
        var description = row.children(".description").text();
        $("#modal-update-hidden-id").val(itemId);


        var home = "{{route('home')}}";
        var link = "{{$routes['update']['link']}}"
        var action = home.trim() + '/' + link.trim() + '/' + itemId;

        $("#data-edit-form").attr('action', action);


        
      
        @foreach($fieldList as $field)
        @if( $field['type'] == 'dropDown')
                            @php
                            $name= $field['name'];
                            $id= $field['field'];
                            @endphp
                            var dataArray = @json($field['data']);
                         console.log(dataArray);

                        //  var tid=el.data({{$field['database_name']}}-id);
                        //  console.log(tid);
                            $.each( dataArray, function( key) {
                                if(dataArray[key].id == itemId){
                                    console.log(dataArray[key].id+"ashjkl");
                                }
                                else{
                                    console.log(dataArray[key].id+"  "+itemId);
                                }
                                
                            });
        $("#modal-edit-{{$field['name']}}").val(text.trim());
                
                            @else
                            @php
                            $name= $field['name'];
                            @endphp
                    
                    
                            var text = row.children(".{{$field['database_name']}}").text();
        $("#modal-edit-{{$field['name']}}").val(text.trim());
                            @endif
   
        @endforeach
       


    });

    // on modal hide
    $('#data-edit-modal').on('hide.bs.modal', function() {
        $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
        $("#edit-form").trigger("reset");
    });
</script>

