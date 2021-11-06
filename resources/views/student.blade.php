<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Information </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @toastr_css
</head>
<body>
    

<div class="header">

</div>




<main>  
    <section>


        <section>
            <div class="container">
             <div class="card">
                 <div class="card-header">
                     <h3 class="text-center"> Student Information </h3>
                     <button class="btn btn-info" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add</button>
                 </div>
                 <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Roll</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach($students as $student)
                             
                      
                         <tr>
                            <th scope="row">{{ $loop->index + 1}}</th>
                            <td>{{$student->name}}</td>
                            <td>{{ $student->class }}</td>
                            <td>{{ $student->roll }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>
                                <img class="img-fluid rounded" style="width: 20%;" src="{{asset('images/student')}}/{{$student->image}}" alt="Student">
                            </td>
                            <td>
                                <button class="btn btn-info" type="submit" data-bs-toggle="modal" data-bs-target="#editModal{{$student->id}}"> Edit</button>
                                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal{{$student->id}}"> Delete</button>
                            </td>
                          </tr>
                                     
                {{-- student delete modal --}}                                         
                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{$student->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('student.destroy', $student->id)}}" method="POST">
                            @csrf

                            @method('DELETE')

                            <div class="modal-body">
                                <input type="hidden" value="{{$student->id}}">
                                <p class="text-danger text-center">Are you sure to delete??</p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>

                {{-- student delete modal end--}}
                         
                {{-- student edit modal --}}
                  
                <div class="modal fade" id="editModal{{$student->id}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Student information Edit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('student.update', $student->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            @method('PUT')
                            <input type="hidden" value="{{$student->id}}">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="recipient-name" name="name" value="{{$student->name}}">
                                @error('name')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Class:</label>
                                <input type="text" class="form-control @error('class') is-invalid  @enderror" id="recipient-name" name="class" value="{{ $student->class}}">
                                @error('class')
                                <small class="text-danger"> {{ $message }}</small>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Roll:</label>
                                <input type="text" class="form-control @error('roll') is-invalid @enderror" id="recipient-name" name="roll" value="{{ $student->roll}}"> 
                                @error('roll')
                                <small class="text-danger"> {{ $message }}</small>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Phone:</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="recipient-name" name="phone" value="{{ $student->phone}}">
                                @error('phone')
                                <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Image:</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="recipient-name" name="image">
                                @error('image')
                                <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Old Image:</label>
                                <img class="img-fluid rounded" style="width: 20%;" src="{{asset('images/student')}}/{{$student->image}}" alt="Student">
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                        </div>
                    </div>
                    </div>
                

                {{-- student edit modal end--}}







                          @endforeach 
                        
                        </tbody>
                      </table>
                 </div>
             </div>
            </div>
        </section>


{{-- student create modal --}}
        <div class="container">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Student information add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="recipient-name" name="name">
                        @error('name')
                            <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Class:</label>
                        <input type="text" class="form-control @error('class') is-invalid  @enderror" id="recipient-name" name="class">
                        @error('class')
                        <small class="text-danger"> {{ $message }}</small>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Roll:</label>
                        <input type="text" class="form-control @error('roll') is-invalid @enderror" id="recipient-name" name="roll">
                        @error('roll')
                        <small class="text-danger"> {{ $message }}</small>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Phone:</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror" id="recipient-name" name="phone">
                        @error('phone')
                        <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Image:</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="recipient-name" name="image">
                        @error('image')
                        <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
                </div>
            </div>
            </div>
        </div>

        {{-- student create modal end--}}
    </section>
</main>




<footer>

</footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    @jquery
    @toastr_js
    @toastr_render
</body>
</html>    