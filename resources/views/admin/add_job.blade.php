<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{__('jobs.addheading')}}</title>
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
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
        <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">Arabic</a>
        <h2 class="fw-bold fs-2 mb-5 pb-2">{{__('jobs.addheading')}}</h2>
       
        <form action="{{route('jobs.store')}}" method="post" class="px-md-5" enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('jobs.addtitle')}}</label>
            <div class="col-md-10">
              <input type="text" placeholder="" class="form-control py-2" name="title" value="{{old('title')}}" />
              @error('title')
                  <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
          </div>
          <hr>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('jobs.responsability')}}</label>
            <div class="col-md-10">
              <input type="text" step="0.1" placeholder="" class="form-control py-2"  name="responsability" value="{{old('responsability')}}"/>
              @error('responsability')
              <div class="alert alert-danger">{{$message}}</div>
          @enderror
            </div>
          </div>
          <hr>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('jobs.Description')}}</label>
            <div class="col-md-10">
              <textarea name="description" id="" cols="30" rows="5" class="form-control py-2">{{old('description')}}</textarea>
              @error('description')
              <div class="alert alert-danger">{{$message}}</div>
          @enderror
            </div>
          </div>
          <hr>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('jobs.job nature')}}</label>
            <div class="col-md-10">
                <input type="text" step="0.1" placeholder="" class="form-control py-2"  name="job_nature" value="{{old('job_nature')}}"/>
                @error('job_nature')
               <div class="alert alert-warning">{{$message}}</div>
            @enderror
            </div>
          </div>
          <hr>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('jobs.location')}}</label>
            <div class="col-md-10">
                <input type="text" step="0.1" placeholder="" class="form-control py-2"  name="location" value="{{old('location')}}"/>
                @error('location')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
          </div>

         <hr>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('jobs.salary_from')}}</label>
            <div class="col-md-10">
                <input type="number" step="0.1" placeholder="" class="form-control py-2"  name="salary_from" value="{{old('salary_from')}}"/>
                @error('salary_from')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
          </div>

          <hr>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('jobs.salary_to')}}</label>
            <div class="col-md-10">
                <input type="number" step="0.1" placeholder="" class="form-control py-2"  name="salary_to" value="{{old('salary_to')}}"/>
                @error('salary_to')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
          </div>

          <hr>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('jobs.qualification')}}</label>
            <div class="col-md-10">
                <input type="text" step="0.1" placeholder="" class="form-control py-2"  name="qualification" value="{{old('qualification')}}"/>
                @error('qualification')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
          </div>

          <hr>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('jobs.date_line')}}</label>
            <div class="col-md-10">
                <input type="date" step="0.1" placeholder="" class="form-control py-2"  name="date_line" value="{{old('date_line')}}"/>
                @error('date_line')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
          </div>

          <hr>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('jobs.Category name')}}</label>
           
            <div class="col-md-10">
              <select name="category_id" id="" class="form-control">
                @error('category_id')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
                <option value="">Select Category</option>

               @foreach ($categories as $category)
               <option value="{{$category->id}}"@selected(old('category_id') == $category->id)>{{$category->category_name}}</option>  
               @endforeach
               
                
              </select>
              
            </div>
          </div>
          
          <hr>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">{{__('jobs.Published')}}</label>

            <input type="hidden" name="published" value="0"/>

            <div class="col-md-10">
              <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" name="published"@checked(old('published')) value="1"/>
              @error('published')
              <div class="alert alert-danger">{{$message}}</div>
          @enderror
            </div>
          </div>
          <hr>
          <div class="form-group" style="margin-left: 80px" >
            <label class="control-label col-sm-2" for="image">{{__('jobs.image')}}</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="image"  name="image">
              @error('image')
                  <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          
          <div class="text-md-end">
            <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
              {{__('jobs.button')}} 
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>