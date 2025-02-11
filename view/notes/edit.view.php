
<?php require base_path('view/partials/header.php') ?>

 <?php require base_path("view/partials/nav.php") ?>

 <?php require base_path('view/partials/banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">
      <!-- hello welcome with <h2>Notes</h2>  page -->
        <form  method="POST" action="/backendphp/note/">  
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?=$note["Id"]?>">
             <div class="col-span-full">
          <label for="body" class="block text-sm/6 font-medium text-gray-900">body</label>
          <div class="mt-2">
            <textarea name="body" id="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"  ><?= $note["body"]?> 
        
        
        </textarea>
            <?php if (isset($errors['body'])): ?>
            <p class="text-red-500 text-xs mt-1">
              <?= $errors['body'] ?>
            </p>
            <?php endif; ?>
          </div>
   
        </div>


   <div class=" py-4 sm:px-5 lg:px-8 felx gap-4 justify-end ">
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>

    
    <button type="submit" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</button>
   </div>
 

  </div>
</form>

     

  </main>
  <?php require base_path('view/partials/footer.php') ?>