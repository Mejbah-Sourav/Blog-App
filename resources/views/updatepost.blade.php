<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
        <div style="text-align: center; padding: 20px;">
            <form action="{{url('confirm_update',$data->id)}}" method="POST" enctype="multipart/form-data" style="max-width: 300px; margin: 0 auto;">
                @csrf
                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: bold;">Post Description</label>
                    <input type="text" name="description" value="{{$data->description}}" style="width: 100%; padding: 10px;">
                </div><br>
                <div>
                   <label>Current Image</label>
                   <img src="/post/{{$data->image}}" height="300px" width="300px">
                </div><br>
                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: bold;">Change Image</label>
                    <input type="file" name="image"  style="width: 100%; padding: 10px;">
                </div><br>
                <div>
                    <input type="submit" value="Update Post" style="background-color: #007BFF; color: white; padding: 10px 20px; border: none; cursor: pointer;">
                </div>
            </form>
        </div>
    </x-app-layout>
</body>
</html>
