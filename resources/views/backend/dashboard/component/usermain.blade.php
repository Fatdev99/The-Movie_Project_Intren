<div class="wrapper wrapper-content animated fadeInRight ecommerce">

    <div class="row">

        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title text-right">
                    <div class="ibox-content row">
                        <form method="GET" role="form" class="form-inline col-md-11" action="{{ route('movie.user.search') }}">
                            <div class="form-group">
                                <input type="text" name="searchname" placeholder="Enter the name" class="form-control">
                            </div>
                            <a href="">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                            </a>
                        </form>
                        <a href="{{ route('movie.dashboard.user') }}" class="col-md-1">
                            <button class="btn btn-warning"><i class="fa fa-undo"></i></button>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="padding-bottom: 0">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if (isset($search))
                                @foreach($search as $u)
                                    <tr>
                                        <td>{{$u->user_id}}</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->phone}}</td>
                                        <td>{{$u->email}}</td>
                                        <td class="text-right">
                                            <a href="{{ route('movie.user.edit', ['id' => $u->user_id ])}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')"  href="{{ route('movie.user.delete', ['id' => $u->user_id ])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                @foreach($users as $u)
                                    <tr>
                                        <td>{{$u->user_id}}</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->phone}}</td>
                                        <td>{{$u->email}}</td>
                                        <td class="text-right">
                                            <a href="{{ route('movie.user.edit', ['id' => $u->user_id ])}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')"  href="{{ route('movie.user.delete', ['id' => $u->user_id ])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach    
                                {{ $users->links('pagination::bootstrap-4') }}
                            @endif
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
