@extends('layouts.panel.app')


@section('content')
    <div class="edit-container">
        <div class="edit-user-container">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">ویرایش پروفایل</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>

                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')

                    <div class="card-body">
                      
                      <div class="form-group">

                            <label for="inputEmail3"  >نام</label>

                            <div class="col-sm-10">
                                <input  class="form-control" id="name" name="name" type="text"
                                value="{{old('name', $user->name)}}" required autofocus autocomplete="name">
                                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3"  >پست الکترونیک</label>

                            <div class="col-sm-10">
                              <input type="email" id="email" name="email" type="email" class="form-control" 
                              value="{{old('email', $user->email)}}" required autocomplete="username" />

                            </div>
                        </div>
                        
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>


        </div>


        <div class="edit-user-container">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">تغییر کلمه عبور</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                  @csrf
                  @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3"  >پسورد فعلی</label>

                            <div class="col-sm-10">
                              <input type="password" id="current_password" name="current_password" type="password"
                              class="form-control" autocomplete="current-password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3"  >پسورد جدید</label>

                            <div class="col-sm-10">
                              <input type="password" id="password" name="password" type="password" class="form-control"
                              autocomplete="new-password" />
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3"  >تایید پسورد جدید</label>

                          <div class="col-sm-10">
                            <input type="password" id="password_confirmation" name="password_confirmation" type="password"
                            class="form-control" autocomplete="new-password" />
                          </div>
                      </div>
                        
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت</button>
                       
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>


        </div>
    </div>
@endsection
