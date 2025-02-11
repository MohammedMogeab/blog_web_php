<?php require base_path('view/partials/header.php') ?>
   <?php require base_path('view/partials/nav.php')?>
   <?php require base_path('view/partials/banner.php' )?>
     
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- hello welcome with <h2>Notes</h2>  page -->
       <p>
        <a href="/backendphp/notes" class="text-blue-900 hover:underline">go back...</a>
       </p>   



         <p>  <?= htmlspecialchars($note['body']) ?></p>
         <a href="/backendphp/note/edit?id=<?=$note['Id']?>" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
       <footer class="mt-6 border-t border-gray-200 p-6 text-center text-sm text-gray-500">
    
       </footer>
    </div>
  </main>
 <?php require base_path( 'view/partials/footer.php') ?>
 
      