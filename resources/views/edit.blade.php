<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
       <section>
           <div class="container">
               <form action="{{ url('contact/update/' .$contact->id) }}" method="POST">
                   @csrf
                   <div class="col-md-6 offset-md-3">
                    <div class="card m-4">
                        <div class="card-header">
                            Contact form  edit
                        </div>
                           {{-- @if (session('success'))
                           <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p class="text-center">{{ session('success')}}</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                           @endif --}}
                            <div class="card-body">
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                                      <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{$contact->email}}" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                                      @error('email')
                                         <small class="text-danger"> {{$message}}</small>
                                      @enderror
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Phone</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" name="phone_no" aria-describedby="emailHelp"value="{{$contact->phone_no}}">
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Subject</label>
                                      <input type="text" class="form-control" name="subject" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$contact->subject}}">
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Message</label>
                                     <textarea class="form-control" name="message" id="" cols="30" rows="5">
                                           {{$contact->message}}
                                     </textarea>
                                    </div>
                                    <div class="mb-3 form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>

                            </div>
                    </div>
                   </div>
               </form>
               <a href="{{URL::to('manage')}}" class="btn btn-info" style="text-decoration: none;">Manage Page</a>
           </div>

           
       </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>