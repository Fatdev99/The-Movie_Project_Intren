<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h3>USER LIST</h3>
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
                    @if (isset($users) && is_object($users))
                        @foreach($users as $u)
                            <tr>
                                <td>{{$u->id}}</td>
                                <td>{{$u->name}}</td>
                                <td>{{$u->phone}}</td>
                                <td>{{$u->email}}</td>
                                <td class="text-right">
                                    <a href="{{ route('movie.user.edit', ['id' => $u->id ])}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')"  href="{{ route('movie.user.delete', ['id' => $u->id ])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
