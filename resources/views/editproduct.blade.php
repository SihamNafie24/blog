
    <div>
        <form action="{{url('update/'.$product->id)}}" method="post">
            @csrf
            @method('patch')
            <label for="title">title</label>
            <input type="text" name="title" value="{{$product->title}}">
            <br>
            <br>
            <label for="description">description</label>
            <input type="text" name="description" value="{{$product->description}}">
            <br>
            <br>
            <label for="prix">prix</label>
            <input type="number" name="prix" value="{{$product->prix}}">
            <br>
            <br>
            <button>confirmer</button>
        </form>
    </div>