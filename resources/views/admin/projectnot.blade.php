@extends('admin.incloud.layout')

@section('content')

<div class="container-fluid">
    <div class="row">

    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">

        <div class="card mt-3">
            @if (Session::has('message'))
            <div class="alert alert-success text-center" id="dangermsg" role="alert" >
               تم انجاز المشروع بنجاح مبروك
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>

            @endif
            <div class="alert alert-danger text-center" id="success_msg" style="display: none;">
                تم الحذف بنجاح
            </div>

            <div class="card-header text-center bg-dark text-white">
           مشاريع قيد الانجاز
            </div>
            <div class="card-body">
                <div class="scroll">

                <table class="table table-hover  border " >

                    <thead>
                      <tr>
                        <th scope="col">التسلسل</th>
                        <th scope="col">العنوان</th>
                        <th scope="col">وصف المشروع</th>
                        <th scope="col">تاريخ الاضافة</th>
                        <th scope="col">تعديلات </th>
                      </tr>
                    </thead >
                    <tbody id="tablebody" style="overflow-y:scroll;height:30px;  " >
                        <?php
                        $i=1;
                      ?>
                        @foreach ( $get as $project )
                        <tr class="offerRow{{ $project->id }}">
                            <th scope="row"> {{ $i++}}</th>
                            <td>{{ $project->title }}</td>
                            <td class="text-justify">{{ $project->desc }}</td>
                            <td class="font-weight-bold">{{ $project->created_at->format('d/m/Y') }}</td>
                            <td  class="w-25">
                                <a href="{{ route('completed.project',$project->id) }}" class="btn btn-success">تم الانجاز</a>
                                <a href="#" offer_id="{{$project->id}}"  class=" delete_btn btn btn-danger">حذف</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).on('click','.delete_btn', function (e) {
        e.preventDefault();
          var offer_id =  $(this).attr('offer_id');
          var x= window.confirm('هل انت متأكد');
          if(x == true)
          {


        $.ajax({
            type: 'post',
             url: "{{route('delete')}}",
            data: {
                '_token': "{{csrf_token()}}",
                'id' :offer_id
            },
            success: function (data) {
                if(data.status == true){
                    $('#success_msg').show();
                    setTimeout(function(){
                          $('#success_msg').hide();
                          },2000)
                }
                $('.offerRow'+data.id).remove();

            }, error: function (reject) {
            }
        });
    }else
    {
        return false;
    }
    });
</script>

@endsection

