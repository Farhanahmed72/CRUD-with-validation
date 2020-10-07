<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title>Add Employee</title>
</head>
<body class="bg-secondary">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 pt-5">

            <div class="card shadow">
                <div class="card-header">
                      <h3 class="text-center">Add Emplyee Form</h3>
                </div>
                    <div class="card-body">
                        <form action={{Url('/Employee/addempdata')}} method="post">
                            @csrf
                            <div class="form-group">
                                <label for="my-input">Employee Name</label>
                                <input id="my-input" class="form-control {{$errors->any() && $errors->first('name') ? 'is-invalid':''}}" type="text" name="name" value={{old('name')}}>
                                @if ($errors->any())
                               <small class="invalid-feedback">{{$errors->first('name')}}</small>
                                @endif

                            </div>
                               <div class="form-group">
                                <label for="my-input">Employee Designation</label>
                                <input id="my-input" class="form-control {{$errors->any() && $errors->first('Designation') ? 'is-invalid':''}}" type="text" name="Designation" value={{old('Designation')}}>
                               @if ($errors->any())
                               <small class="text-danger">{{$errors->first('Designation')}}</small>
                                @endif
                            </div>
                               <div class="form-group">
                                <label for="my-input">Employee Department</label>
                                <input id="my-input" class="form-control {{$errors->any() && $errors->first('Department') ? 'is-invalid':''}}" type="text" name="Department" value={{old('Department')}}>
                                @if ($errors->any())
                               <small class="text-danger">{{$errors->first('Department')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                              <input type="submit"  class="btn btn-primary btn-block" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
