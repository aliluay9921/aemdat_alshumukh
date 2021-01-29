
@extends('admin.incloud.layout')
@section('content')

          <section class="content">
            <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div  class="info-box-content">
                <a href="" style="text-decoration: none; color:black;">
              <span class="info-box-text">المشاريع المنجزة</span>
              <span id="getdata" class="info-box-number">
                {{ $getproject }}
              </span>
            </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-cog"></i></span>
              <div class="info-box-content">
                  <a href="" style="text-decoration: none; color:black;">
                <span class="info-box-text">مشاريع قيد الانجاز</span>
                <span id="notproject" class="info-box-number">
                  {{ $getprojectnot }}
                </span>
              </a>
              </div>
              <!-- /.info-box-content -->
            </div>

            <!-- /.info-box -->
          </div>
          @foreach ( $stafs as $staf )
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-cog"></i></span>
              <div class="info-box-content">
                  <a href="" style="text-decoration: none; color:black;">
                <span class="info-box-text">{{ $staf->name }}</span>
                <span id="notproject" class="info-box-number">
                    {{ $staf->count }}
                </span>
              </a>
              </div>
              <!-- /.info-box-content -->
            </div>

            <!-- /.info-box -->
          </div>
          @endforeach
          @foreach ( $mechanisms as $mechanism )
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-cog"></i></span>
              <div class="info-box-content">
                  <a href="" style="text-decoration: none; color:black;">
                <span class="info-box-text">{{ $mechanism->name }}</span>
                <span id="notproject" class="info-box-number">
                    {{ $mechanism->count }}
                </span>
              </a>
              </div>
              <!-- /.info-box-content -->
            </div>

            <!-- /.info-box -->
          </div>
          @endforeach

          </div>
          <!-- /.row -->


      <!-- Main row -->

      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>

        <div class="row">
            <!-- Left col -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 mt-5 ml-5 ">
              <!-- MAP & BOX PANE -->
              <div class="alert alert-danger" style="display:none"></div>
              <div class="alert alert-success text-center" id="successmsg" role="alert"  style="display:none">
                  <h3> تم الحفظ بنجاح </h3>
              </div>


              <div class="card ">
                <div class="card-header  border-transparent  bg-dark">
                  <h3 class="card-title">اضافة مشروع </h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>

                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="container">
                      <form  id="formadd" method="POST"  action="{{ route('add.project') }}"  enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">عنوان المشروع</label>
                            <input type="text" name="title" id="title" class="form-control"  aria-describedby="emailHelp" placeholder="عنوان المشروع">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">وصف عن المشروع </label>
                            <input type="text" name="desc" id="desc" class="form-control" id="exampleInputPassword1" placeholder="وصف">
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlFile1">اختر صورة </label>
                              <input type="file" name="image" id="image" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlSelect1">نوع المشروع</label>
                              <select name="select" class="form-control" id="exampleFormControlSelect1">
                                <option value="نوع المشروع">نوع المشروع</option>
                                <option value="1">مشروع منجز</option>
                                <option value="0">مشروع قيد الانجاز</option>
                              </select>
                            </div>
                            <button  class="btn btn-sm btn-info float-left"type="submit" >اضافة مشروع</button>
                        </form>
                  </div>
                </div>
           </div>
            </div>



              </div>





@endsection


@section('script')


<script type="text/javascript">
    $(document).ready(function(){
        $('#formadd').on('submit',function(e){
            e.preventDefault();
            $.ajax({
             url:"{{ route('add.project') }}",
             type:'POST',
             enctype: 'multipart/form-data',
             data:new FormData(this),
             processData: false,
             contentType: false,
             cache: false,
             success: function(response){
                 if(response.errors)
                     {
                         $('.alert-danger').html('');
                         $.each(response.errors, function(key, value){
                             $('.alert-danger').show();
                             $('.alert-danger').append('<li>'+value+'</li>');
                             setTimeout(function(){
                          $('.alert-danger').hide();
                          },2000)
                         });
                     }
                     else
                     {
                         $('.alert-danger').hide();
                         $('#successmsg').show();
                           setTimeout(function(){
                          $('#successmsg').hide();
                          },2000);

                        if($("#exampleFormControlSelect1").val()== 1){
                          var getdata=document.getElementById('getdata').innerHTML;
                           $("#getdata").text(++getdata);
                        }
                        else{
                        var notproject=document.getElementById('notproject').innerHTML;

                           $("#notproject").text(++notproject);
                        }

                            $("#title").val("");
                             $("#desc").val("");
                             $("#image").val("");
                             $("#exampleFormControlSelect1").val('نوع المشروع');
                     }
             },
            });


        });
    });



</script>



@endsection





