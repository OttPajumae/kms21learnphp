<?php include 'views/partials/header.php'; ?>
    
<form action="/articles/update?id=<?=$article->id?>" method="POST"> 
    <div class="mb-3">
        <label for="title" class="form-label">Email address</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Something sweet" value="<?=$article->title?>">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Content</label>
        <textarea class="form-control" id="body" name="body" rows="3"><?=$article->body?></textarea>
    </div>
    <div class="mb-3">
        
        <input type="submit" class="btn btn-primary" value="Update">
    </div>
</form>

<?php include 'views/partials/footer.php'; ?>   