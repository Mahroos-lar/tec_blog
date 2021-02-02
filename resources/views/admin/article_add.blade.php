@extends('admin.master')
@section('content')





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('articles.store')}}">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">title :</label>
                      <input type="text" class="form-control"  name="title" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">content :</label>
                      <input type="text" class="form-control"  name="content" id="exampleInputEmail1">
                    </div>
             

                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1"  name="is_active" value=1>
                      <label class="form-check-label" for="exampleCheck1">is Active</label>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save </button>
                  </div>
                </form>
              </div>
              <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
                     </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
