@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style=""></div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"> Select Exam</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div></br>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Type Question</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div></br>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"> Select Category</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Aptitude</option>
                                        <option>Technical</option>
                                        <option>Logical</option>
                                        <option>Other</option>
                                    </select>
                                </div></br>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"> Select Option</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>

                                    </select></div></br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
