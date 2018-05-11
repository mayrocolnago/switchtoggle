
/* Code for each toogler with diferent colors */
<?php
  $switchid = 'switch1';
  $switchopen = true;
  $switchsize = 'normal';
  $switchcolor = 'lime';
  echo '<style>#'.$switchid.' .switchactive .switchbark { background-color:'.$switchcolor.' !important; }</style>'; ?>
  <a onclick="switchtoggle(this,'toggle');" id="<?=$switchid;?>" class="switch<?=$switchsize;?>">
    <div class="switchanimation switchstate <?=(($switchopen)?'switchactive':'');?>">
      <div class="switchbark"><div class="switchbarb"></div></div></div></a>


<?php
  $switchid = 'switch2';
  $switchopen = true;
  $switchsize = 'small';
  $switchcolor = 'blue';
  echo '<style>#'.$switchid.' .switchactive .switchbark { background-color:'.$switchcolor.' !important; }</style>'; ?>
  <a onclick="switchtoggle(this,'toggle');" id="<?=$switchid;?>" class="switch<?=$switchsize;?>">
    <div class="switchanimation switchstate <?=(($switchopen)?'switchactive':'');?>">
      <div class="switchbark"><div class="switchbarb"></div></div></div></a>


<?php
  $switchid = 'switch3';
  $switchopen = true;
  $switchsize = 'big';
  $switchcolor = 'red';
  echo '<style>#'.$switchid.' .switchactive .switchbark { background-color:'.$switchcolor.' !important; }</style>'; ?>
  <a onclick="switchtoggle(this,'toggle');" id="<?=$switchid;?>" class="switch<?=$switchsize;?>">
    <div class="switchanimation switchstate <?=(($switchopen)?'switchactive':'');?>">
      <div class="switchbark"><div class="switchbarb"></div></div></div></a>




<?php /* Call JQuery code */ ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>



<?php /* General Javascript code */ ?>
<script>
function switchtoggle(which,vale) {
  if(vale == 'toggle') { $(which).children('.switchstate').toggleClass('switchactive'); }
  if(vale == 'true') { $(which).children('.switchstate').removeClass('switchactive'); }
  if(vale == 'false') { $(which).children('.switchstate').addClass('switchactive'); }
}
</script>



<?php /* General CSS code */ ?>
<style>
.switchactive .switchbarb { float:right !important; }
.switchbark { background-color:silver; vertical-align:middle; border:1px solid silver; display:inline-block; overflow:visible; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px; }
.switchbarb { float:left; background-color:#f6f6f6; border:1px solid silver; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%; }
.switchanimation { -webkit-transition:.40s ease-in-out; -moz-transition:.40s ease-in-out; -o-transition:.40s ease-in-out; transition:.40s ease-in-out; }
.switchsmall .switchbark { width:40px;height:13px; } .switchsmall .switchbarb { width:20px; height:20px; margin:-5px -2px 0px -2px; }
.switchnormal .switchbark { width:50px;height:17px; } .switchnormal .switchbarb { width:28px; height:28px; margin:-7px -2px -0px -2px; }
.switchbig .switchbark { width:65px;height:23px; } .switchbig .switchbarb { width:40px; height:40px; margin:-10.5px -2px 0px -2px; }
</style>

