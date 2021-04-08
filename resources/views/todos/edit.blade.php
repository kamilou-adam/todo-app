@extends('layouts.app')

@section('content')

    <div class="container"> 
            <h1 class="text-center my-5">Update Todos</h1>

                <div class="row justify-content-center">
                    <div class="col-md-8">
                            <div class="card card-default ">

                            



                                <div class="card-header text-center">
                                Update ToDo
                                </div>


                                <div class="card-body">
                                        <form action="/todos/{{ $todo->id }}/update-todos" method="post">
                                                    <input type="hidden" name="todo_id" value="">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $todo->name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $todo->description }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-success" type="submit">Update Todo</button>
                                                    </div>
                                    
                                        </form>
                                </div>
                    
                            </div>   
                    </div> 
                </div>
    </div>

@endsection