<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <title>Employee Details</title>
</head>
<body class="bg-secondary">
<div class="contanier">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card mt-5 shadow">
                <div class="card-header">
                  @if (Session::has('msg'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <h3>{{Session::get('msg')}}</h3>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                     </div>
                  @endif

                    <h3 class="text-center">Employees List</h3>
                <a href="{{Url('add')}}" class="btn btn-primary pl-auto">ADD</a>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-hover">
                        <thead class="text-center bg-secondary text-white">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if ($data!=null)

                                @foreach ($data as $item)
                                <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->Name}}</td>
                                <td>{{$item->Designation}}</td>
                                <td>{{$item->Department}}</td>
                                <td>
                                <a href={{Url('/Employee/Edit/'.$item->id)}} class="badge badge-primary">Edit</a> |
                                <a href={{Url('/Employee/Delete/'.$item->id)}} class="badge badge-danger">Delete</a>
                               </td>
                                </tr>
                                @endforeach
                             @else
                                <tr>
                                    <td colspan="5" class="text-primary">Employees Does Not Exist !</td>
                                </tr>
                            @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
