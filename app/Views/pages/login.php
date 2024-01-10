<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>
    <div class="d-flex justify-content-center mt-5 pt-5">
        <div class="card text-center col-sm-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <form class="form-inline">
                    <label class="sr-only" for="inlineFormInputName2">Name</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
<?= $this->endSection(); ?>