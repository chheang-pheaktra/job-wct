@extends('layout.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@section('contents')
    <section>
        <nav class="navbar ">
            <div class="container-fluid">
                <a class="navbar-brand">Careers</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a href="{{route('admin/job/create')}}">
                    <div type="button" class="btn btn-primary">Add New Career</div>
                </a>
            </div>
        </nav>
    </section>
    <section>
        <table class="table table-sm">
           <thead>
           <tr>
               <th scope="col">ID</th>
               <th scope="col">Company</th>
               <th scope="col">Position</th>
               <th scope="col">Salary</th>
               <th scope="col">Location</th>
               <th scope="col">Post</th>
               <th scope="col">Action</th>
           </tr>
           </thead>
            <tbody>
            @foreach($job as $career )
                <tr>
                    <td>{{$career->id}}</td>
                    <td>{{$career->bank_name}}</td>
                    <td>{{$career->position}}</td>
                    <td>{{$career->salary}}</td>
                    <td>{{$career->location}}</td>
                    <td>{{$career->available_position}}</td>
                    <td>
                        <div class="flex">
                            <a href="{{ url('/admin/job/show/' . $career->id) }}">
                                <button class="btn btn-primary mr-2">view</button>
                            </a>
                           <a href="{{ url('/admin/job/edit/' . $career->id) }}">
                               <button class="btn btn-Secondary mr-2">edit</button>
                           </a>
                            <a href="{{'/admin/destroy/job/'.$career->id}}">
                                <button class="btn btn-danger mr-2">delete</button>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </section>
@endsection
