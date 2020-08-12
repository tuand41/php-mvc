<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <?php
        require_once __DIR__.'/controller/PageController.php';
        
        $action = $_GET['action'] ?? "";
        $id = $_GET['id'] ?? "";
        // var_dump($action, $id);
        
        $actions = [
            'index',
            'show',
            'edit',
            'update',
            'delete',
            'create',
            'store',
            ''
        ];
        if(!in_array($action, $actions)){
            $action = "error";
        } 
        
        // var_dump($action, $id);
        $controller = new PageController();
        $controller->handle($action, $id);
    ?>
</body>
</html>

