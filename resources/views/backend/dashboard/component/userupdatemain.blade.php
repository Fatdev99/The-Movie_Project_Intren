<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h2>UPDATE USER FORM</h2>
        </div>
        <div class="ibox-content">
            <form method="POST" class="form-horizontal" action="{{ route('movie.user.update', $users->id) }}">
                @csrf
                @if (isset($users) && is_object($users))

                            <div class="form-group"><label class="col-lg-2 control-label">ID</label>

                                <div class="col-lg-7">
                                    <input type="text" class="form-control" value="{{$users->id}}" disabled>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label">Name</label>

                                <div class="col-lg-7">
                                    <input type="text" name="name" placeholder="Name" class="form-control" value="{{$users->name}}">
                                    @if ($errors->has('name'))
                                        <span class="error-message">* {{$errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label">Phone</label>
            
                                <div class="col-lg-7">
                                    <input type="text" name="phone" placeholder="Phone" class="form-control" value="{{$users->phone}}">
                                    @if ($errors->has('phone'))
                                        <span class="error-message">* {{$errors->first('phone')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label">Address</label>

                                <div class="col-lg-7">
                                    <input type="text" name="address" placeholder="Address" class="form-control" value="{{$users->address}}"> 
                                    @if ($errors->has('address'))
                                        <span class="error-message">* {{$errors->first('address')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label">Email</label>

                                <div class="col-lg-7">
                                    <input type="text" name="email" placeholder="Email" class="form-control" value="{{$users->email}}"> 
                                    @if ($errors->has('email'))
                                        <span class="error-message">* {{$errors->first('email')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    @if ($users->id == 1)
                                        <a href="{{ route('movie.dashboard.user') }}" class="btn btn-white">Cancel</a>
                                        <button class="btn btn-danger" type="submit" disabled>Save changes</button>
                                        <span style="margin-left: 10px; font-style:italic; color: red">* Đây là tài khoản admin, không thể sửa thông tin</span>
                                    @else
                                        <a href="{{ route('movie.dashboard.user') }}" class="btn btn-white">Cancel</a>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    @endif
                                </div>
                            </div>
                @endif
                
            </form>
        </div>
    </div>
</div>