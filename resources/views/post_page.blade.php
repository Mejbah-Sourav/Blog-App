<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
 table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #07a0dd;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
    </style>

</head>
<body>
    <x-app-layout>

        <div>
            <table>
                <tr>
                    <th>Post Descripttion</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                @foreach ($post as $post)
                <tr>
                    <td>{{$post->description}}</td>
                    <td><img height="300px" width="300px" src="post/{{$post->image}}"></td>
                    <td>
                        <a href="{{url('update_post',$post->id)}}" class="btn btn-primary">Update</a>
                    </td>
                    <td>
                        <a onclick="return confirm('are you sure to delete this?')" href="{{url('delete_post',$post->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </x-app-layout>    



</body>
</html>