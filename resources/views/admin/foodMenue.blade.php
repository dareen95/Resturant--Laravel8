
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include('admin.admincss');
      </head>
      <body>

        <div class="container-scroller">
            @include('admin.navbar');

            <div>
                <form action=" {{ route('upload-food') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                           <label>    Title </label>
                        <input type="text" name="title" required placeholder="Write atitle">
                    </div>
                    <div>
                        <label> Price</label>
                     <input type="num" name="price" required >
                 </div>
                 <div>
                    <label> Decription</label>
                 <input type="text" name="description" required placeholder="description">
             </div>
                 <div>
                    <label> Image</label>
                 <input type="file" name="image" required>
             </div>
             <div>
                 <input type="submit" value="save">
             </div>







            </form>

            <div>

<table bgcolor="black">
<tr>
<th style="padding: 30px">Food Name</th>
<th style="padding: 30px">Price </th>
<th style="padding: 30px">Description</th>
<th style="padding: 30px">Image </th>
<th style="padding: 30px">Action</th>
<th style="padding: 30px">Action2</th>
</tr>
@foreach ($data as $data)


<tr align="center">
<td>{{ $data->title }}</td>
<td>{{ $data->price }}/td>
<td>{{ $data->description }}</td>
<td><img src="/foodimage/{{ $data->image }}"></td>
<td><a href="{{ Route('menue.delete',$data->id) }}">Delete</a></td>
<td><a href="{{ Route('/updateview',$data->id) }}">update</a></td>
</tr>
@endforeach
            </div>
            </div>

        </div>
        @include('admin.adminscript');
      </body>
    </html>

