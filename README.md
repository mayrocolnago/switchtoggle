# Switch Toggle

A switch similar to the iPhone's "toggler" wrote in PHP with Javascript/JQuery, HTML and CSS

<img border="0" src="example.png">

<p><br></p>

# Usage

Place this code for each toggler

```

<?php
  $switchid = 'yesorno';
  $switchopen = true;
  $switchsize = 'normal'; ?>
  
  <a onclick="switchtoggle(this,'toggle');" id="<?=$switchid;?>" class="switch<?=$switchsize;?>">
    <div class="switchanimation switchstate <?=(($switchopen)?'switchactive':'');?>">
      <div class="switchbark"><div class="switchbarb"></div></div></div></a>
  
```

<p>
Then declare the CSS code anywhere on your page
  
```

<style>
.switchactive .switchbark { background-color:lime !important; }
.switchactive .switchbarb { float:right !important; }
.switchbark { background-color:silver; vertical-align:middle; border:1px solid silver; display:inline-block; overflow:visible; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px; }
.switchbarb { float:left; background-color:#f6f6f6; border:1px solid silver; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%; }
.switchanimation { -webkit-transition:.40s ease-in-out; -moz-transition:.40s ease-in-out; -o-transition:.40s ease-in-out; transition:.40s ease-in-out; }
.switchsmall .switchbark { width:40px;height:13px; } .switchsmall .switchbarb { width:20px; height:20px; margin:-5px -2px 0px -2px; }
.switchnormal .switchbark { width:50px;height:17px; } .switchnormal .switchbarb { width:28px; height:28px; margin:-7px -2px -0px -2px; }
.switchbig .switchbark { width:65px;height:23px; } .switchbig .switchbarb { width:40px; height:40px; margin:-10.5px -2px 0px -2px; }
</style>

```

</p>
<p>
Finally place the Javascript code for the toggling function
  
```

<script>
function switchtoggle(which,vale) {
  if(vale == 'toggle') { $(which).children('.switchstate').toggleClass('switchactive'); }
  if(vale == 'true') { $(which).children('.switchstate').removeClass('switchactive'); }
  if(vale == 'false') { $(which).children('.switchstate').addClass('switchactive'); } }
</script>

```

</p>
<p><br></p>
<p>
Now, if necessary, you can switch the toggler with
  
```
switchtoggle(ID,STATE);
```

where STATE stands for 'true', 'false' or 'toggle' as an automatic switching of state
</p>

<p><br></p>
<p>
        
# Dependencies

Don't forget to add the JQuery call in order to use the functions
        
```
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
```

</p>
<p><br></p>
<p>
        
# More usage

You can either get if the switch is on or off by checking it's state 
        
```
$('#yesorno').on('click',function() {
  if($('#yesorno').children('.switchstate').hasClass('switchactive')) {
    //it is on
  } else {
    //it is off
} });
  
```

</p>

