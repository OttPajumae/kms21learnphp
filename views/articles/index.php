<?php include 'views/partials/header.php'; ?>
    
<h1>Articles</h1>
<a href="/articles/create" class="btn btn-primary">Add Article</a>
    <table  class="table table-striped table-dark"> 
        <thead>
            <th>ID</th>
            <th>title</th>
            <th>Actions</th>
        </thead>
   
    <tbody>
        <?php foreach($articles as $article): ?>
            <tr>
                <td><?=$article->id?></tbd>
                <td><?=$article->title?></tbd>
                <td>
                    <div class="btn-group">
                        <a href="/articles/view?id=<?=$article->id?>" class="btn btn-primary">View</a>
                        <a href="/articles/edit?id=<?=$article->id?>" class="btn btn-warning">Edit</a>
                        <a href="/articles/delete?id=<?=$article->id?>" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>    
    </tbody>
    <tfoot>
            <th>ID</th>
            <th>title</th>
            <th>Actions</th>
        </tfoot>
    </table>
<?php include 'views/partials/footer.php'; ?>   