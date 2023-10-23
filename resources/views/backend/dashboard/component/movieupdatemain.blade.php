<div class="wrapper wrapper-content animated fadeInRight ecommerce">

    <div class="row">
        
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h3>UPDATE MOVIE FORM</h3>
                </div>
                <div class="ibox-content">
                    <form method="POST" class="form-horizontal" action="{{ route('movie.movie.update', $movies->movie_id) }}">
                    @csrf

                        <div class="form-group"><label class="col-sm-2 control-label">ID</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="id" value="{{ $movies->movie_id }}" disabled>
                            </div>
                        </div>
                        <div class="hr-line-dashed" style="margin: 17px 0"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Name of movie" value="{{ $movies->name }}">
                                @if ($errors->has('name'))
                                    <span class="error-message">* {{$errors->first('name')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed" style="margin: 17px 0"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Release Year</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="releaseyear" placeholder="Release date. ex: 15-11-2011" value="{{ $movies->release_date }}">
                                @if ($errors->has('release_date'))
                                    <span class="error-message">* {{$errors->first('release_date')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed" style="margin: 17px 0"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Duration</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{ $movies->duration }}">
                                @if ($errors->has('duration'))
                                    <span class="error-message">* {{$errors->first('duration')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed" style="margin: 17px 0"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Description</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" placeholder="Description" name="description" id="" cols="20" rows="5">{{ old('description', $movies->description ?? null) }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="error-message">* {{$errors->first('description')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed" style="margin: 17px 0"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Category</label>

                            <div class="col-sm-10">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio1" value="Movie" name="category" {{ ($movies->category == "movie")? "checked" : ""}} >
                                    <label for="inlineRadio1" style="padding-left: 10px"> Movie </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio2" value="tvShow" name="category" {{ ($movies->category == "tvShow")? "checked" : ""}} >
                                    <label for="inlineRadio2" style="padding-left: 10px"> tvShow </label>
                                </div>
                                @if ($errors->has('category'))
                                <span class="error-message">* {{$errors->first('category')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed" style="margin: 17px 0"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Picture</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="picture" placeholder="Avatar" value="{{ $movies->picture }}">
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
                                <input type="text" class="form-control" name="source" placeholder="Source" value="{{ $movies->source }}">
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
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>