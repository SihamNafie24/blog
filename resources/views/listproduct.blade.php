<div>
    @foreach($products as $product)
        <ul>
            <li>{{$product->title}}</li>
            <li>{{$product->description}}</li>
            <li>{{$product->prix}}</li>
        </ul>
        <button onclick="window.location='{{url('show/'.$product->id)}}'">Show</button>
        <br>
        <br>
        <button onclick="window.location='{{url('edit/'.$product->id)}}'">Edit</button>
        <form action="{{ url('delete/'.$product->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete">
        </form>
    @endforeach

    <button onclick="window.location='{{url('create')}}'">Create product</button>
</div>