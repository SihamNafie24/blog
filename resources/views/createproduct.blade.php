<div>
    <form action="{{url('store')}}" method="post">
        @csrf
        <label for="title">title</label>
        <input type="text" name="title">
        <br>
        <br>
        <label for="description">description</label>
        <input type="text" name="description">
        <br>
        <br>
        <label for="prix">prix</label>
        <input type="number" name="prix">
        <br>
        <br>
        <button>confirmer</button>
    </form>
</div>