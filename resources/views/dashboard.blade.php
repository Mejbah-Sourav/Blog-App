<x-app-layout>

    <div style="background-color: #f5f5f5; padding: 20px; text-align: center;">


           <form action="{{url('view_post')}}" method="get">
            @csrf
             <input type="submit" value="View my Post" style="background-color: #7ddd07; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; font-size: 16px;">
           </form>


        <h1 style="color: navy; font-size: 24px; font-weight: bold;">Add A Post</h1>

        <form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="margin: 20px 0;">
                <label style="font-weight: bold; font-size: 20px;">Description:</label>
                <input type="text" name="description" style="height: 105px; width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            

            <div style="margin: 20px 0;">
                <label style="font-weight: bold; font-size: 20px;">Upload an Image:</label>
                <input type="file" name="image" style="display: block; margin-top: 10px;">
            </div>

            <div style="text-align: center; margin: 20px 0;">
                <input type="submit" style="background-color: #07a0dd; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; font-size: 16px;">
            </div>
        </form>

    </div>

</x-app-layout>
