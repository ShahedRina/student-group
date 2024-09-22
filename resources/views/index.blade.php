<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div>
  <h1 text ="center">اسماء الطلاب</h1>
</div>
<form action="{{Route('info.shu')}}" method="post">
  @csrf
  <div class="container 5p">
 
  <div class="form-group">
    <label for="exampleInputEmail1">الطالب الاول </label>
    <input name="name1" type="text" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">الطالب التاني </label>
    <input name="name2" type="text" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">الطالب التالت </label>
    <input  name="name3" type="text" class="form-control" >
</div>
      <div class="form-group">
    <label for="exampleInputEmail1">الطالب الرابع </label>
    <input name="name4" type="text" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">الطالب الخامس </label>
    <input name="name5" type="text" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>  
</div>
</body>
</html>