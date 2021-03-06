@extends('admin_backend')
@section('content')
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tabel Kandidat<small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Mahasiswa <small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nama Calon Kandidat</th>
                          <th>Jenis Kelamin</th>
                          <th>Partai</th>
                          <th>Fakultas</th>
                          <th>Jurusan</th>
                          <th>Nim</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      @foreach($hasil as $row)
                                <tr>
                                  <td>{{$row->nama_lengkap}}</td>
                                  <td>{{$row->nim}}</td>
                                  <td>{{$row->gender}}</td>
                                  <td>{{$row->jurusan}}</td>
                                  <td>{{$row->fakultas}}</td>
                                  <td>{{$row->status}}</td>
                                  <td>
                                    <a href=""class = "btn btn-primary">edit</a>
                                    <a href="{{url('hasilvote/hapus/'.$row->id)}}"class = "btn btn-danger">delete</a>
                                    <a href=""class = "btn btn-success">detail</td>
                                <tr>
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