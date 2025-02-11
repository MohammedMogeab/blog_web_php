
<?php require  base_path( 'view/partials/header.php')?>             

 <?php require  base_path( "view/partials/nav.php")?>      

 <?php require base_path( 'view/partials/banner.php')?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<ul>
          <!-- hello welcome with <h2>Notes</h2>  page -->
          <?php foreach($notes as $note): ?>
        <a href="/backendphp/note/?id=<?=$note['Id']?>" class="text-blue-500 hover:underline">
            <li><?= htmlspecialchars($note['body']) ?></li>
        </a>
     
        <?php endforeach; ?>
</ul>
<p class=" mt-20"> 
    <a href="/backendphp/notes/create" class="text-blue-500 hover:underline">Create Note</a>
</p>
    </div>
  </main>
  <?php require  base_path('view/partials/footer.php' )?>