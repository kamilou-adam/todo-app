@extends('layouts.app')

@section('content')

    <div class="container">
            <h1 class="text-center my-5">Create Todos</h1>
                 @if ($errors->any())

                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Oh snap!</strong> 
                    @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                    @endforeach
                </div>


                @endif   
                <div class="row justify-content-center">
                    <div class="col-md-8">
                            <div class="card card-default ">
                                <div class="card-header text-center">
                                Create ToDo
                                </div>
                           

                                <div class="card-body">

                                        <form action="/store-todos" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-success" type="submit">Create Todo</button>
                                                    </div>
                                    
                                        </form>
                                </div>
                    
                            </div>   
                    </div> 
                </div>
    </div>

@endsection