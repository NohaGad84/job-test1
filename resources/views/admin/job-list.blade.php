<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Car</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <style>
    * {
      font-family: "Lato", sans-serif;
    }
  </style>
</head>

<body>
  <main>
    <div class="container my-5">
      <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">All jobs</h2>
        <table class="table table-hover">
          <thead>
            <tr class="table-dark">
              <th scope="col">Job Title</th>
              <th scope="col">Salary</th>
              <th scope="col">Description</th>
              <th scope="col">Category</th>
              <th scope="col">Published</th>
              <th scope="col">Edit</th>
              <th scope="col">show</th>
              <th scope="col">Delete</th>


            </tr>
          </thead>
          <tbody>
            @foreach($jobs as $job)
            <tr>
              <td scope="row">{{$job['title']}}</td>
              <td>{{$job['price']}}</td>
              <td>{{Str::limit($job['description'],7)}}</td>
              <td>{{$job->category->category_name}}</td>
              <td>{{$job['published'] ? 'Yes':'No'}}</td>
              <!-- <td><a href="{{route('jobs.edit',$job['id'])}}">Edit</a></td> -->
              <td><a href="{{route('jobs.show',$job['id'])}}">Details</a></td>

              <!-- <td>
              <a href="{{ route('jobs.destroy', $job->id) }}" onclick="event.preventDefault(); if (confirm('Are you sure?')) { document.getElementById('delete-form-{{ $job->id }}').submit(); }">Delete</a>
              <form id="delete-form-{{ $job->id }}" action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display: none;">
               @csrf
              @method('DELETE')
              
              </form>
              </td> -->

            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>