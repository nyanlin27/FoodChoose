<?php
  include_once("nav.php");
  include_once("backend.php");
 ?>

<div class="container">
  <div class="panel panel-success" id="panel">
    <div class="panel-heading">
      <h1>အကြောင်းအရာ</h1>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <p>အသုံးပြုနည်း</p>
            </div>
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">မိမိကြိုက်နှစ်သက်သည့် အစားအစာများအား ထည့်ရန်။</li>
                <li class="list-group-item">စတင်ရန်ကို နှိပ်ပါ</li>
                <li class="list-group-item">ပြန်ဖျက်လိုပါက ရှင်းလင်းရန်ကို နှိပ်ပါ။</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <p>မေတ္တာရပ်ခံချက်</p>
            </div>
            <div class="panel-body" id="panel-font">
              <p>ဤsiteသည် အပျော်သဘောဖြင့် ရေးသားခြင်း <br>ဖြစ်ပါသည်။ အပျော်သဘောဖြင့်သာဝင်ရောက် <br> အသုံးပြုပေးကြပါရန် တောင်းဆိုအပ်ပါသည်။ Website ရေးသားနည်းကိုအခုမှလေ့လာနေသူ<br> တစ်ယောက်အနေနဲ့ ရေးသားခြင်းဖြစ်သော <br> ကြောင့် အမှားများပါလျှင်ခွင့်လွှတ်ပေးကြပါရန် မေတ္တာရပ်ခံအပ်ပါသည်။ အကြံများပြုလိုပါက <a href="mailto:nyanlin.htet27@outlook.com">Mail</a> ကိုပေးပို့နိုင်ပါတယ်။ <br><b>အားလုံးကိုကျေးဇူးတင်ပါတယ်ခင်ဗျာ။</b> <br><hr>
              </p>
              <h3>လည်ပတ်ပုံ</h3>
              <p class="font-weight-light">
                 <i style="font-size: 13px;">Random</i> အကြိမ်(၁၀၀) ပေးထားသောကြောင့် <br> အကြိမ်အများဆုံးသော အမျိုးအမည်ကိုဖော်ပြ <br>ပေးမှာဖြစ်ပါတယ်။ အကြိမ်ရေတူညီပါက<b>ဘာမှ မစားနဲ့</b> ဟူသောစားသားကျလာမှာဖြစ်ပါတယ်။
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footet -->
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
