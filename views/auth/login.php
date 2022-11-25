<?php include 'views/partials/header.php'; ?>
    
<form action="/login" method="POST"> 
    <div class="mb-3">
        <label for="title" class="form-label">Email </label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Something sweet">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <div class="mb-3">
        
        <input type="submit" class="btn btn-primary" value="login">
    </div>
</form>

<?php include 'views/partials/footer.php'; ?>   