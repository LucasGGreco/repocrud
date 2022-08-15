<?php include("includes/head.php"); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-4 text-center">
            <div class="card card-body">
                <form action="registrar.php" method="POST">

                    <div class="form-group my-2">
                        <input type="text" class="form-control" name="titulo" placeholder="Nombre de la tarea" autofocus>
                    </div>

                    <div class="form-group my-2">
                        <input type="submit" name="save_task" class="btn btn-success btn-block" value="Nueva tarea">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<a href="https://www.php.net/manual/es/mysqli.error.php" target="_blank" rel="noreferrer noopener">mysqli_error</a>

<?php include("includes/footer.php"); ?>