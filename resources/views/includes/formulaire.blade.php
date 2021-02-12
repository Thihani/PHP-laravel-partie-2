<h1>Ajouter</h1>
<form action="{{route('backoffice-add')}}" method="post">
    {{ csrf_field() }}
    <input style="width: 30%" type="text" class="form-control"  name="name" placeholder="Product name">
    <p style="color: red">@error('name') {{$message}} @enderror</p>
    <br>
    <input style="width: 30%" type="number" class="form-control"  name="price" placeholder="Price">
    <p style="color: red">@error('price') {{$message}} @enderror</p>
    <br>
    <textarea style="width: 30%" class="form-control" rows="3" name="description" placeholder="Description"></textarea>
    <br>
    <label>Category</label>
    <input style="width: 30%" type="number" class="form-control"  name="category">
    <p style="color: red">@error('category') {{$message}} @enderror</p>
{{--    <select name="category" style="width: 30%" class="form-select" aria-label="Default select example">
        <option value=""></option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="11">11</option>
    </select>--}}
    <button style="width: 30%" type="submit" class="btn btn-outline-success" name="add">Add</button>
</form>

