@extends('admin.incloud.layout')

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
   
<div class="container-fluid">
    <div class="row">

    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">

        <div class="card mt-3">
            @if (Session::has('errors'))
            <div class="alert alert-danger text-center" id="dangermsg" role="alert" >
                يوجد خطأ في ادخال التأريخ
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>

            @endif

            <div class="alert alert-success text-center" id="success_msg" style="display: none;">
                تم الحذف بنجاح
            </div>
            <div class="card-header text-center bg-dark text-white">
            المشاريع المنجزة
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
                                <a type="button"  data-title="{{$project->title}}" data-desc="{{$project->desc}}" data-created_at="{{$project->created_at}}" data-id={{$project->id}} class="btn btn-success" data-toggle="modal"  data-target="#edit">تعديل</a>
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


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="formedit" method="POST"  action="{{ route('update.project') }}" >
                @csrf
                {{method_field('PUT')}}
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                  <label for="exampleInputEmail1">عنوان المشروع</label>
                  <input type="text" name="title" id="title" class="form-control"  aria-describedby="emailHelp" placeholder="عنوان المشروع">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">وصف عن المشروع </label>
                  <textarea type="text" name="desc" id="desc" class="form-control" id="exampleInputPassword1" placeholder="وصف"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">تاريخ الاضافة </label>
                    <input type="date" name="created_at" id="created_at" class="form-control" id="exampleInputPassword1" placeholder="وصف">
                  </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">غلق</button>
          <button type="submit" class="btn btn-primary">حفظ التعديلات </button>
        </div>
    </form>
      </div>
    </div>
  </div>




@section('script')
<script>
    $('#edit').on('show.bs.modal',function(event){
        var button = $(event.relatedTarget)
        var title=button.data('title');
        var desc=button.data('desc');
        var id=button.data('id');

        var modal=$(this)
        modal.find('.modal-body  #title').val(title)
        modal.find('.modal-body  #desc').val(desc)
        modal.find('.modal-body  #id').val(id)
    })
</script>





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

