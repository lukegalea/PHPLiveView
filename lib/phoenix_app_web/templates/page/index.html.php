<section class="phx-hero">
  <h1>
    Welcome to 
    <?= $name ?>!
</h1>
  <p><a href="/demo">PHPLiveView Demo</a></p>
    <?php date_default_timezone_set('America/Toronto'); ?>
    <p>The year is <?= date("Y") ?></p>
</section>

<section class="row">
  <article class="column">    
    <pre>for($i=100;$i>0;$i--){
  $p2=$i." bottle".(($i>1)?"s":"")." of beer";
  $p1=$p2." on the wall\n";
  $p3="Take one down, pass it around\n";
  echo (($i<100)?$p1."\n":"").$p1.$p2."\n".$p3.(($i<2)?($i-1).substr($p1,1,28):"");
}</pre>    
  </article>
  <article class="column">
    <pre><?php       
        for($i=100;$i>0;$i--){
          $p2=$i." bottle".(($i>1)?"s":"")." of beer";
          $p1=$p2." on the wall\n";
          $p3="Take one down, pass it around\n";
          echo (($i<100)?$p1."\n":"").$p1.$p2."\n".$p3.(($i<2)?($i-1).substr($p1,1,28):"");
        }
      ?>      
    </pre>    
  </article>
</section>
