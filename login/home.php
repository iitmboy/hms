<?php
//include 'ext_functions.php';
include_once './control/session.php';
include_once './control/db.php';
//include './control/common.php';
session_check();

$_SESSION['user_role']=$_POST['user_role'];

?>

<html>
<head><title></title>
<style>
html, body {
    max-width: 100%;
    overflow-x: hidden;
    overflow-y: hidden;

      margin: 0;
  padding: 0;
}

#full_page{
height: 100%;
width:100%;
border: solid yellow;
display:block;
}

#top_area{
height:10%;
width:100%;
border: solid green;
position: relative;
display:block;

}
#left_area{
height:90%;
width:15%;
border: solid green;
position: relative;
display:inline-block;
float: left;
}

#main_area{
height:90%;
width:68%;
border: solid blue;
position: relative;
display:inline-block;
float: left;

}
#right_area{
height:90%;
width:15%;
border: solid red;
position: relative;
display:inline-block;

float: left;
}
#code_area{
position: relative;
border: solid pink;
}


<?php /*
.context-menu {
            position: absolute;
            text-align: center;
            background: lightgray;
            border: 1px solid black;
        }
  
        .context-menu ul {
            padding: 0px;
            margin: 0px;
            min-width: 150px;
            list-style: none;
        }
  
        .context-menu ul li {
            padding-bottom: 7px;
            padding-top: 7px;
            border: 1px solid black;
        }
  
        .context-menu ul li a {
            text-decoration: none;
            color: black;
        }
  
        .context-menu ul li:hover {
            background: darkgray;
        }
        */ ?>
</style>
<script>
/*
        
        document.onclick = hideMenu;
        document.oncontextmenu = rightClick;
   
        function hideMenu() {
            document.getElementById(
                "contextMenu").style.display = "none"
        }
  
        function rightClick(e) {
            e.preventDefault();
            menu_open(e);
           
        }     
function menu_open(e)
{
 if (document.getElementById(
                "contextMenu").style.display == "block")
                hideMenu();
            else {
                var menu = document
                    .getElementById("contextMenu")
                      
                menu.style.display = 'block';
                menu.style.left = e.pageX + "px";
                menu.style.top = e.pageY + "px";
            }

}       
 function getLastWord(event,element){
             var keyPressed = event.which;
             if(keyPressed == 32){ //Hits Space
                 var val = element.innerText.trim();
                 val = val.replace(/(\r\n|\n|\r)/gm," ");
                 var idx = val.lastIndexOf(' ');
                 var lastWord = val.substring(idx+1);
                 //document.getElementById("lastword").innerHTML = lastWord;
                 //console.log("Last Word " + lastWord);
                // event.preventDefault();
               //  menu_open(event);
                 
                 var selection = window.getSelection(),
    range = selection.getRangeAt(0),
    rect = range.getClientRects()[0];
   document.getElementById("lastword").innerHTML= rect.left;
                  
             }
        }    
        */
</script>
</head>
<body>
<div id='full_page'>

<div id='top_area'>
<div id='username' class='username'>
Hello <?php echo $_SESSION['username']; ?>,
</div>
</div>

<?php /*
<div id="contextMenu" class="context-menu" 
        style="display:none">
        <ul>
            <li><a href="#">Element-1</a></li>
            <li><a href="#">Element-2</a></li>
            <li><a href="#">Element-3</a></li>
            <li><a href="#">Element-4</a></li>
            <li><a href="#">Element-5</a></li>
            <li><a href="#">Element-6</a></li>
            <li><a href="#">Element-7</a></li>
        </ul>
    </div>
    */ ?>
<div id='left_area'> left side</div>   
 
<div id='main_area'>    
<div id="code_area" contenteditable="true" onkeypress="getLastWord(event,this)">
       Hello, my name is <span style="color: blue;">Bob</span> and I have a friend name <span style="color: green;">Joe</span>.
    </div>
</div>    
<div id='right_area'> </div>  

</div>  
</body>
</html>