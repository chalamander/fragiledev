<footer>
<div id="footerContentWrapper">
   <div id="FooterLogoWrapper">
      <img id="FooterLogo" src="/assets/media/ACSSLogo.png" alt="Aston Computer Science Society Logo">
   </div>
<address>
   Aston Computer Science Society<br>MB263<br>Aston University<br>Aston Triangle<br>Birmingham<br>B4 7ET
</address>
</div>
</footer>


</body>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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