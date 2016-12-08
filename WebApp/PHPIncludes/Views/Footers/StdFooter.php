<footer>

</footer>


</body>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://js.pusher.com/3.2/pusher.min.js"></script>


      <?php
       if(isset($pageRequirements)){
         $jsFiles = $pageRequirements->getFiles("js");
       }

      if(isset($jsFiles)){
         foreach ($jsFiles as $fileName) {
            echo '<script async src="/' . $fileName . '"></script>';
         }
      }
      ?>
      </html>