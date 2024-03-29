<?php include 'views/partials/header.php'; ?>
    
<form action="/articles" method="POST" enctype="multipart/form-data"> 
    <div class="mb-3">
        <label for="title" class="form-label">Email address</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Something sweet">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Content</label>
        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">file</label>
        <input type="file" class="form-control" name="file" id="file">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Create">
    </div>
</form>

<?php include 'views/partials/footer.php'; ?>   