<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
<div class="container p-4 ">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="text-center">
                <h1 class="">Add New Career</h1>
            </div>
            <form action="{{url('/admin/job/post')}}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col">
                        <label for="">Company</label>
                        <input type="text" name="bank" class="form-control" placeholder="Input Company" aria-label="Company">
                    </div>
                    <div class="col">
                        <label for="">Position</label>
                        <input type="text" name="position" class="form-control" placeholder="Name Position" aria-label="Position">
                    </div>
                    <div class="col">
                        <label for="">Post</label>
                        <input type="number" name="post" class="form-control" placeholder="Enter amount of post" aria-label="post">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="inputState" class="form-label">Categories</label>
                        <select  class="form-select form-select-lg mb-3" aria-label="Large select example">
                            <option selected>Open this select menu</option>
                           @foreach($category as $categories)
                                <option name="{{$categories->name}}" value="{{$categories->id}}">{{$categories->name}}</option>
                           @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Salary</label>
                        <input type="text" name="salary" class="form-control">
                    </div>
                </div>
                <div class="mt-4 row">
                    <div class="col">
                        <label for="formFile" class="form-label">Thumbnail</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>
                    <div class="col">
                        <label for="">Location</label>
                        <input type="text" name="location" class="form-control" placeholder="Location" aria-label="Location">
                    </div>
                </div>
               <div class="mt-4">
                   <label for="">Description:</label>
                   <textarea name="description" id="description" cols="30" rows="10"></textarea>
               </div>
                <button type="submit" class="btn btn-lg btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>
<script>
    $('#description').summernote({
        placeholder: 'description...',
        tabsize:2,
        height:300
    });
</script>
</body>
</html>
