<form action="{{route('backoffice-add')}}" method="post">
    {{ csrf_field() }}
    <input style="width: 20%" type="text" class="form-control"  name="name" placeholder="Product name">
    <br>
    <input style="width: 20%" type="number" class="form-control"  name="price" placeholder="Price">
    <br>
    <textarea style="width: 20%" class="form-control" rows="3" name="description" placeholder="Description"></textarea>
    <br>
    <select name="category" style="width: 20%" class="form-select" aria-label="Default select example">
        <option selected>Category</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="11">11</option>
    </select>
    <button style="width: 10%" type="submit" class="btn btn-outline-success" name="add">Add</button>

</form>
