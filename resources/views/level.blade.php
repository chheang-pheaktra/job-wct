@extends('layout.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@section('contents')
    <section>
        <nav class="navbar ">
            <div class="container-fluid">
                <a class="navbar-brand">Careers</a>
                <form class="d-flex" role="search" method="get" action="{{ url('/admin/search/career') }}">
                    <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{request()->input('search')}}">
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
                <th scope="col">Category Name</th>
                <th scope="col">Company</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>entry level</td>
                    <td> information</td>

                    <td>
                        <div class="flex">
                            <a href="">
                                <button class="btn btn-primary mr-2">view</button>
                            </a>
                            <a href="">
                                <button class="btn btn-Secondary mr-2">edit</button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger mr-2">delete</button>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection
