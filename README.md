# Switch Toogle

A switch similar to the iPhone's toogler wrote in PHP with Javascript, HTML and CSS

<p><br></p>

# Usage

Place this code for each toggler

```

<?php /* Configuration */
        $switchid = 'yesorno';
        $switchopen = true;
        $switchsize = 'normal';
        $switchcolor = '#ff8e2a'; ?>
  
<a onclick="switchtoggle(this,'toggle');" id="<?=$switchid;?>" switchstate="<?=(($switchopen)?'true':'false');?>" class="switch<?=$switchsize;?>">
  <div class="switchbark switchanimation" style="background-color:<?=(($switchopen) ? $switchcolor : 'silver');?>;">
  <div class="switchbarb switchanimation" style="float:<?=(($switchopen) ? 'right' : 'left');?>;"></div></div></a>
  
```

<p>
Then declare the CSS code anywhere on your page
  
```

<style>
  .switchbark { vertical-align:middle; border:1px solid silver; display:inline-block; overflow:visible; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px; }
  .switchbarb { background-color:#f6f6f6; border:1px solid silver; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%; }
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
    if(vale == 'toggle') { switchtoggle(which,$(which).attr('switchstate')); }
    if(vale == 'true') {
      $(which).attr('switchstate','false');
      $(which).children('.switchbark').children('.switchbarb').attr('style','float:left;');
      $(which).children('.switchbark').attr('style','background-color:silver;'); }
    if(vale == 'false') { 
      $(which).attr('switchstate','true'); 
      $(which).children('.switchbark').children('.switchbarb').attr('style','float:right;');
      $(which).children('.switchbark').attr('style','background-color:<?=$switchcolor;?>;'); } }
</script>

```

</p>
<p><br></p>
<p>
Now, if necessary, you can switch the toggler with
  
```
switchtoggle(ID,STATE);
```

which where STATE stands for 'true', 'false' or 'toggle' as an automatic switching of state
</p>
