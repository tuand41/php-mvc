<div class="container col-md-6 mt-4">
    <form action="?action=update&id=<?php echo $detail->id; ?>" method="POST">
        <div class="form-group">
            <label>name</label>
            <input type="text" class="form-control" placeholder="name" name="name" id="name" value="<?php echo $detail->name; ?>">
        </div>
        <div class="form-group">
            <label>address:</label>
            <input type="text" class="form-control" placeholder="address" id="address" name="address" value="<?php echo $detail->address; ?>">
        </div>
        <button type="submit" name="btnEdit" id="btnEdit" class="btn btn-primary">Edit</button>
    </form>
</div>
