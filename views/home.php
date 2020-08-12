<div class="container my-4">
    <a href="?action=create" class="btn btn-primary mb-4">Add</a>
    <?php while ($list = $data->fetch(PDO::FETCH_OBJ)){?>
    <div class="row m-1">
        <div class="col-md-4">
            <?php echo $list->name; ?>
        </div>
        <div class="col-md-4">
            <?php echo $list->address; ?>
        </div>
        <div class="col-md-4">
            <a href="?action=show&id=<?php echo $list->id ?>" class="btn btn-primary">show</a>
            <a href="?action=edit&id=<?php echo $list->id ?>" class="btn btn-secondary">Edit</a>
            <a href="?action=delete&id=<?php echo $list->id ?>" class="btn btn-danger">Delete</a>
        </div>
    </div>
    <?php } ?>
</div>
