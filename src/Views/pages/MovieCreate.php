<?php require_once __DIR__ . '/../layouts/default.php';
 ?>
<main class="container">
    <section class='row justify-content-center'>
        <form action="/movies" method="POST">
            <div class="mb-3">
                <label for="inputTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputTitle" name="title" aria-describedby="Title">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <input type="url" for="exampleInputPassword1" class="form-label" name="image"aria-describedby="Image">
            </div>    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
</main>