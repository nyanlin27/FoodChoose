<?php
  $aa = 0;
  $bb = 0;
  $cc = 0;
  $dd = 0;

     if (isset($_POST['submit'])) {
       $search_one = $_POST['search_one']; //name =search_one
       $search_two = $_POST['search_two']; //name =search_two
       $search_three = $_POST['search_three']; //name =search_three
       $search_four = $_POST['search_four']; //name =search_four

       if (!empty($search_one && $search_two && $search_three && $search_four)) {
         for ($i=0; $i < 100 ; $i++)
         {
           $a = 1;
           $b = 2;
           $c = 3;
           $d = 4;
           $result = rand(1,4);
             if ($result == $a) {
               $aa++;
             }elseif ($result == $b) {
               $bb++;
             }elseif ($result == $c) {
               $cc++;
             }elseif ($result == $d) {
               $dd++;
             }
         }
       }else {
         echo '<script>alert(" ! အစားအသောက်များကို ဖြည့်ပေးပါ။ !")</script>';
       }
     }
