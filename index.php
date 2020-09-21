<?php
  include_once("backend.php");
  include_once("nav.php");
 ?>

      <div class="container">

        <div class="panel panel-success" id="panel">
          <div class="panel-heading">
              <h3>အစားအသောက်ရွေးမယ်</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="alert alert-info">
                  စုစုပေါင်းအကြိမ်ရေမှာ <span class="badge">100 ကြိမ်</span>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="alert alert-info">
                  အကြိမ်အများဆုံးအစားအစာ ==>

                  <?php
                  if ($aa > $bb && $aa > $cc && $aa > $dd) {
                    echo $search_one . "<span> ($aa ကြိမ်)</span>";
                  }elseif ($bb > $aa && $bb > $cc && $bb > $dd) {
                    echo $search_two . "<span> ($bb ကြိမ်)</span>";
                  }elseif ($cc > $aa && $cc > $bb && $cc > $dd) {
                    echo $search_three . "<span> ($cc ကြိမ်)</span>";
                  }elseif ($dd > $aa && $dd > $bb && $dd > $cc ) {
                    echo $search_four . "<span> ($dd ကြိမ်)</span>";
                  }else {
                    echo "( ဘာမှမစားနဲ့ )";
                  }
                   ?>
                </div>
              </div>
            </div><hr>

            <form class="" action="<?php $_PHP_SELF ?>" method="post">
              <div class="row">
                <div class="col-sm-12 col-md-3">
                  <div class="form-group">
                    <label for="">ပထမ အစားအစာ</label>
                    <input type="text" class="form-control" name="search_one" placeholder="အစားအစာထည့်ရန်" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-3">
                  <div class="form-group">
                    <label for="">ဒုတိယ အစားအစာ</label>
                    <input type="text" class="form-control" name="search_two" placeholder="အစားအစာထည့်ရန်" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-3">
                  <div class="form-group">
                    <label for="">တတိယ အစားအစာ</label>
                    <input type="text" class="form-control" name="search_three" placeholder="အစားအစာထည့်ရန်" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-3">
                  <div class="form-group">
                    <label for=""> စတုတ္ထ အစားအစာ</label>
                    <input type="text" class="form-control" name="search_four" placeholder="အစားအစာထည့်ရန်" required>
                  </div>
                </div>
              </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group" style="text-align: center">
                        <button  name="submit" class="btn btn-primary"><i class=" glyphicon glyphicon-check "></i>  စတင်ရန်</button>
                        <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-refresh"></i> ရှင်းလင်းရန်</button>
                        </div>
                      </div>
                    </div><hr>

            </form>

            <div class="row">
              <div class="col-sm-12 col-md-4">
                  <div class="panel panel-info">
                  <div class="panel-heading">
                    <h4>ရွေးချယ်သည့် အစားအစာ</h4>
                  </div>
                  <div class="panel-body" id="list">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <p>ပထမ အစားအစာ</p><hr>
                          <span class="badge"> <?php echo " $aa ကြိမ်"; ?></span>
                          <?php
                            if (isset($_POST['search_one'])) {
                              $search_one = $_POST['search_one'];
                              echo "$search_one";
                            }else {
                              echo "ဘာမှမထည့်ရသေးဘူး";
                            }
                           ?>

                        </li>
                        <li class="list-group-item">
                          <p>ဒုတိယ အစားအစာ</p><hr>
                          <span class="badge"><?php echo " $bb ကြိမ်"; ?> </span>
                          <?php
                            if (isset($_POST['search_two'])) {
                              $search_one = $_POST['search_two'];
                              echo "$search_two";
                            }else {
                              echo "ဘာမှမထည့်ရသေးဘူး";
                            }
                           ?>
                        </li>
                        <li class="list-group-item">
                          <p>တတိယ အစားအစာ</p><hr>
                          <span class="badge"><?php echo " $cc ကြိမ်"; ?></span>
                          <?php
                            if (isset($_POST['search_three'])) {
                              $search_one = $_POST['search_three'];
                              echo "$search_three";
                            }else {
                              echo "ဘာမှမထည့်ရသေးဘူး";
                            }
                           ?>
                        </li>
                        <li class="list-group-item">
                          <p>စတုတ္ထ အစားအစာ</p><hr>
                          <span class="badge"><?php echo " $dd ကြိမ်"; ?></span>
                          <?php
                            if (isset($_POST['search_four'])) {
                              $search_one = $_POST['search_four'];
                              echo "$search_four";
                            }else {
                              echo "ဘာမှမထည့်ရသေးဘူး";
                            }
                           ?>
                        </li>
                      </ul>

                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-8" id="alert">
                <div class="alert alert-danger" role="alert">
                  <?php
                  if ($aa > $bb && $aa > $cc && $aa > $dd) {
                    echo $search_one . "ကိုစားသင့်တယ်";
                  }elseif ($bb > $aa && $bb > $cc && $bb > $dd) {
                    echo $search_two . "ကိုစားသင့်တယ်";
                  }elseif ($cc > $aa && $cc > $bb && $cc > $dd) {
                    echo $search_three . "ကိုစားသင့်တယ်";
                  }elseif ($dd > $aa && $dd > $bb && $dd > $cc ) {
                    echo $search_four . "ကိုစားသင့်တယ်";
                  }else {
                    echo "<p>! ဒီအစားအစာတွေကအန္တာရယ်ရှိတယ်ဒါကြောင့် (ဘာမှမစားနဲ့)! </p>";
                  }
                   ?>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-footer">
          		<div style="text-align: center;">
          			<?php
          			$year = date('Y');
          			echo "<p>Copyright &#9400; Nyan Lin - {$year} </p>";
          		 ?>
          		</div>
          </div>
        </div>
      </div>
