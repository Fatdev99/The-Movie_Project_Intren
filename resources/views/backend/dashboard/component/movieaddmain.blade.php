<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h2>UPDATE MOVIE FORM</h2>
        </div>
        <div class="ibox-content">
            <form method="POST" class="form-horizontal" action="{{ route('movie.movie.store') }}">
            @csrf

                <div class="form-group"><label class="col-sm-2 control-label">ID</label>

                    <div class="col-sm-10"><input type="text" class="form-control" name="id" value="" disabled></div>
                </div>
                <div class="hr-line-dashed" style="margin: 17px 0"></div>

                <div class="form-group"><label class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10"><input type="text" class="form-control" name="name" placeholder="Name of movie" value=""></div>
                </div>
                <div class="hr-line-dashed" style="margin: 17px 0"></div>

                <div class="form-group"><label class="col-sm-2 control-label">Release Date</label>

                    <div class="col-sm-10"><input type="text" class="form-control" name="release_date" placeholder="Release date. ex: 15-11-2011" value=""></div>
                </div>
                <div class="hr-line-dashed" style="margin: 17px 0"></div>

                <div class="form-group"><label class="col-sm-2 control-label">Runtime</label>

                    <div class="col-sm-10"><input type="text" class="form-control" name="runtime" placeholder="Run time" value=""></div>
                </div>
                <div class="hr-line-dashed" style="margin: 17px 0"></div>

                <div class="form-group"><label class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10"><textarea class="form-control" placeholder="Description" name="description" id="" cols="20" rows="5">{{ old('description', "" ?? null) }}</textarea></div>
                </div>
                <div class="hr-line-dashed" style="margin: 17px 0"></div>

                <div class="form-group"><label class="col-sm-2 control-label">Category</label>

                    <div class="col-sm-10">
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="Movie" name="category" >
                            <label for="inlineRadio1" style="padding-left: 10px"> Movie </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio2" value="tvShow" name="category" >
                            <label for="inlineRadio2" style="padding-left: 10px"> tvShow </label>
                        </div>
                    </div>
                </div>
                <div class="hr-line-dashed" style="margin: 17px 0"></div>

                <div class="form-group"><label class="col-sm-2 control-label">Picture</label>

                    <div class="col-sm-10"><input type="text" class="form-control" name="picture" placeholder="Avatar" value=""></div>
                </div>
                <div class="hr-line-dashed" style="margin: 17px 0"></div>

                {{-- <div class="form-group"><label class="col-sm-2 control-label">Picture</label>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span>
                        <span class="fileinput-exists">Change</span><input type="file" name="..."/></span>
                        <span class="fileinput-filename"></span>
                        <a href="" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                    </div>
                </div>
                <div class="hr-line-dashed" style="margin: 17px 0"></div> --}}

                <div class="form-group"><label class="col-sm-2 control-label">Source</label>

                    <div class="col-sm-10"><input type="text" class="form-control" name="source" placeholder="Source" value=""></div>
                </div>
                <div class="hr-line-dashed" style="margin: 17px 0"></div>

                {{-- <div class="form-group"><label class="col-sm-2 control-label">Source</label>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span>
                        <span class="fileinput-exists">Change</span><input type="file" name="..."/></span>
                        <span class="fileinput-filename"></span>
                        <a href="" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                    </div>
                </div>
                <div class="hr-line-dashed" style="margin: 17px 0"></div> --}}

                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <a href="{{ route('movie.dashboard.movie') }}" class="btn btn-white">Cancel</a>
                        <button class="btn btn-primary" type="submit">Add movie</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>