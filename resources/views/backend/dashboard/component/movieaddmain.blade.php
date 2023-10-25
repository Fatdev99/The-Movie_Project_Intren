<div class="wrapper wrapper-content animated fadeInRight ecommerce">

    <div class="row">

        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h2>ADD NEW MOVIE FORM</h2>
                </div>
                <div class="ibox-content">
                    <form method="POST" class="form-horizontal" action="{{ route('movie.movie.store') }}">
                    @csrf

                        <div class="form-group"><label class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Name of movie" value="">
                                @if ($errors->has('name'))
                                    <span class="error-message">* {{$errors->first('name')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed" style="margin: 17px 0"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Release Year</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="releaseyear" placeholder="Release year. ex: 2011" value="">
                                @if ($errors->has('releaseyear'))
                                    <span class="error-message">* {{$errors->first('releaseyear')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed" style="margin: 17px 0"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Duration</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="duration" placeholder="duration" value="">
                                @if ($errors->has('duration'))
                                    <span class="error-message">* {{$errors->first('duration')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed" style="margin: 17px 0"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Description</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" placeholder="Description" name="description" id="" cols="20" rows="5">{{ old('description', "" ?? null) }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="error-message">* {{$errors->first('description')}}</span>
                                @endif
                            </div>
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

                        <div class="form-group"><label class="col-sm-2 control-label">Genre</label>

                            <div class="col-sm-10 row">
                                <select class="form-control m-b" name="genre1">
                                    @isset($genre)
                                        @foreach ($genre as $gen)
                                            <option value="{{ $gen->genre_id}}"> {{ $gen->genre_name }} </option>
                                        @endforeach
                                    @endisset
                                </select>
                                <select class="form-control m-b" name="genre2">
                                    @isset($genre)
                                        @foreach ($genre as $gen)
                                            <option value="{{ $gen->genre_id}}"> {{ $gen->genre_name }} </option>
                                        @endforeach
                                    @endisset
                                </select>
                                <select class="form-control m-b" name="genre3">
                                    @isset($genre)
                                        @foreach ($genre as $gen)
                                            <option value="{{ $gen->genre_id}}"> {{ $gen->genre_name }} </option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>
                        </div>
                        <div class="hr-line-dashed" style="margin: 17px 0"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Picture</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="picture" placeholder="Avatar" value="">
                                @if ($errors->has('picture'))
                                    <span class="error-message">* {{$errors->first('picture')}}</span>
                                @endif
                            </div>
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

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="source" placeholder="Source" value="">
                                @if ($errors->has('source'))
                                    <span class="error-message">* {{$errors->first('source')}}</span>
                                @endif
                            </div>
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
    </div>
</div>