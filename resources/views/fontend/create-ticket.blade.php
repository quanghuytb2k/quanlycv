@extends('fontend.layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css"> <!-- for live demo page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('stores')}}">
                    <div class="card">
                        <div class="card-header">
                            <h1 style="color: blue">Create Ticket</h1>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="name">Họ Tên</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập họ tên">
                                        @error('name')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="job">job</label>
                                        <select class="form-control h" name="job" id="job" value="{{old('job')}}">
                                            <option value="0">Chọn job</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        @error('job')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="defaultSelect">level</label>
                                        <select class="form-control form-control" name="level" id="defaultSelect">
                                            <option value="0">Chọn level</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        @error('level')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="cv">Tải CV lên</label><br>
                                        <input type="file" id="files" name="image[]" multiple />
                                        @error('image')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">		
                                    <div class="form-group">
                                        <label for="priority">Status</label>
                                        <select class="form-control form-control" name="status" id="Status">
                                            <option value="0">Chọn Status</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        @error('status')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>		
                                    <div class="form-group">
                                        <label for="priority">Độ ưu tiên</label>
                                        <select class="form-control form-control" name="priority" id="priority">
                                            <option value="0">Chọn độ ưu tiên</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        @error('priority')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="date-start">Start</label>
                                        <input type="date" class="form-control" name="date-start" id="date-start"  value="{{old('date-start')}}" placeholder="Nhập ngày deadline">
                                        @error('date-start')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="date-deadline">Deadline</label>
                                        <input type="date" class="form-control" name="date-deadline" id="date-deadline"  value="{{old('date-deadline')}}" placeholder="Nhập ngày deadline">
                                        @error('date-deadline')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group" >
                                        <label for="person-charge">Người phụ trách</label>
                                        <select class="form-control form-control" multiple="multiple" name="person-charge" id="person-charge" style="height: 20px ">
                                            <option>Chọn người phụ trách</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>5</option>
                                            <option>5</option>
                                            <option>5</option>
                                        </select>
                                        @error('person-charge')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="department">Phòng ban</label>
                                        <select class="form-control" multiple="multiple" name="department" id="department">
                                            <option>Chọn phòng ban</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        @error('department')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Mô tả</label><br>
                                        <textarea class="form-control" name="description" id="" cols="40" rows="3" style="width: 480px;" name="description"  value="{{old('description')}}" placeholder="Nhập nội dung mô tả"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action" style="text-align: center">
                            <input type="submit" class=" btn btn-success " style="width: 200px; height: 50px;font-size: 18px" value="Create">
                            <input type="reset" class=" btn btn-danger " style="width: 200px; height: 50px;font-size: 18px" value="Reset">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $("#job").select2({
        theme: 'bootstrap4',
        placeholder: "Select a programming language",
        allowClear: true
    });
    $("#multiple").select2({
        placeholder: "Select a programming language",
        allowClear: true
    });
  </script>
</html>
@endsection
