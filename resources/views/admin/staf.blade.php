@extends('admin.incloud.layout')

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->

<div class="container-fluid">
    <div class="row">

    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ml-5">

        <div class="card mt-3 ml-5">
            <div class="alert alert-success text-center" id="success_msg" style="display: none;">
                تم الحذف بنجاح
            </div>
            <div class="card-header text-center bg-dark text-white">
           الكادر
            </div>
            <div class="card-body">
                <div class="scroll ">

                <table  class="table table-hover  border  " style="height: 200px;">

                    <thead>
                      <tr>
                        <th scope="col">التسلسل</th>
                        <th scope="col">الوضيفة</th>
                        <th scope="col">العدد</th>
                        <th scope="col">تعديلات</th>
                      </tr>
                    </thead >
                    <tbody id="tablebody" style="overflow-y:scroll;height:30px;  " >
                        <?php
                        $i=1;
                      ?>
                        @foreach ( $stafs as $staf )
                        <tr class="offerRow{{ $staf->id }}">
                            <th scope="row"> {{ $i++}}</th>
                            <td>{{ $staf->name }}</td>
                            <td class="text-justify">{{ $staf->count }}</td>
                            <td  class="w-25">
                                <a type="button"  data-name="{{$staf->name}}" data-count="{{$staf->count}}"  data-id={{$staf->id}} class="btn btn-success" data-toggle="modal"  data-target="#edit">تعديل</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>




    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ml-5">

        <div class="card mt-3 ml-5">
            <div class="alert alert-success text-center" id="success_msg" style="display: none;">
                تم الحذف بنجاح
            </div>
            <div class="card-header text-center bg-dark text-white">
         الاليات
            </div>
            <div class="card-body">
                <div class="scroll ">

                <table  class="table table-hover  border  " style="height: 200px;">

                    <thead>
                      <tr>
                        <th scope="col">التسلسل</th>
                        <th scope="col">الوضيفة</th>
                        <th scope="col">العدد</th>
                        <th scope="col">تعديلات</th>
                      </tr>
                    </thead >
                    <tbody id="tablebody" style="overflow-y:scroll;height:30px;  " >
                        <?php
                        $i=1;
                      ?>
                        @foreach ( $mechanisms as $mechanism )
                        <tr class="offerRow{{ $mechanism->id }}">
                            <th scope="row"> {{ $i++}}</th>
                            <td>{{ $mechanism->name }}</td>
                            <td class="text-justify">{{ $mechanism->count }}</td>
                            <td  class="w-25">
                                <a type="button"  data-namemechanism="{{$mechanism->name}}" data-countmechanism="{{$mechanism->count}}"  data-idmechanism={{$mechanism->id}} class="btn btn-success" data-toggle="modal"  data-target="#machen">تعديل</a>
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
          <h5 class="modal-title" id="exampleModalLongTitle">تعديل الكادر</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="formedit" method="POST"  action="{{ route('edit.staf') }}" >
                @csrf
                {{method_field('PUT')}}
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                  <label for="exampleInputEmail1">الوضيفة</label>
                  <input type="text" name="name" id="name" class="form-control"  aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">العدد </label>
                  <textarea type="text" name="count" id="count" class="form-control" id="exampleInputPassword1" ></textarea>
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





<div class="modal fade" id="machen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">تعديل اليات</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="formmachen" method="POST"  action="{{ route('edit.machin') }}" >
                @csrf
                {{method_field('PUT')}}
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                  <label for="exampleInputEmail1">الوضيفة</label>
                  <input type="text" name="name" id="name" class="form-control"  aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">العدد </label>
                  <textarea type="text" name="count" id="count" class="form-control" id="exampleInputPassword1" ></textarea>
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
        var name=button.data('name');
        var count=button.data('count');
        var id=button.data('id');

        var modal=$(this)
        modal.find('.modal-body  #name').val(name)
        modal.find('.modal-body  #count').val(count)
        modal.find('.modal-body  #id').val(id)
    })
</script>


<script>
    $('#machen').on('show.bs.modal',function(event){
        var button = $(event.relatedTarget)
        var namemechanism=button.data('namemechanism');
        var countmechanism=button.data('countmechanism');
        var idmechanism=button.data('idmechanism');

        var modal=$(this)
        modal.find('.modal-body  #name').val(namemechanism)
        modal.find('.modal-body  #count').val(countmechanism)
        modal.find('.modal-body  #id').val(idmechanism)
    })
</script>
@endsection

