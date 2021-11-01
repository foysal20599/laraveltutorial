<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        {{-- {{ dd($contacts)}} --}}
       <section>
           <div class="container">
            
               @if (session('success'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p class="text-center">{{ session('success')}}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
               @endif
               @if (session('delete'))
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p class="text-center">{{ session('delete')}}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
               @endif
               @if (session('update'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p class="text-center">{{ session('update')}}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
               @endif
               @if (session('inactive'))
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p class="text-center">{{ session('inactive')}}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
               @endif
               @if (session('active'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p class="text-center">{{ session('active')}}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
               @endif
               <div class="card">
                   <div class="card-header">
                    <div class="">
                        <h3 class="text-center">Contact form manage</h3>
                        <a href="{{url('about')}}" class="btn btn-success">Back</a>
                        <a href="{{url('about')}}" class="btn btn-info">Create</a>
                      </div>
                   </div>
                   <div class="card-body">
                    <table class="table table-bordered m-5 table-responsive">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
    
    
                             @forelse ($contacts as $contact)
                             {{-- {{dd($contact) }} --}}
                           <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone_no }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>
                                <a href="{{'contact/edit/' .$contact->id}}" class="btn btn-sm btn-info">Edit</a>

                                @if ($contact->status == 1)
                                <a href="{{'contact/active/' .$contact->id}}" class="btn btn-sm btn-success">Active</a>
                                @else
                                <a href="{{'contact/inactive/' .$contact->id}}" class="btn btn-sm btn-warning">Inactive</a>
                                @endif
                                <a href="{{'contact/delete/' .$contact->id}}" class="btn btn-sm btn-danger">Detete</a>
                            </td>
                            @empty
                            <td colspan="6" class="text-danger"> No result Found! </td>
                            </tr>
                           
                                    
                            @endforelse
    
                        </tbody>
                    </table>
                   </div>
               </div>

              
           </div>
       </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>