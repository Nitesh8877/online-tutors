<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <style>
        .div1{
            text-align: center;
            font-family: Constantia;
            font-size: 20px;
            color: white;
            margin-top: 100px;
            
            
        }
        
        
    </style>
    <body bgcolor="red;">
        <?php
        include 'header.php';
        
        ?>
        
        <div class="container-fluid">
            <div class="row" style="height: 820px;background-color: #8c1aff;">
                <div class="col-sm-8 div1">
                  
                    <h1 style="font-size: 60px;">HTML</h1>
                    <p>The language for building web pages</p>
                    <a href="learn_html.php"><input type="button" class="btn btn-success btn-sm" name="btn1" value="Learn HTML"></a><br><br>
                    <a href="html_video.php"> <input type="button" classbtn btn-danger " name="btn2" value="Video Tutorial" ></a><br><br>
                    <a href="html_reference.php"> <input type="button" class="btn btn-warning btn-lg" name="btn3" value="HTML Reference"></a><br><br>
                    
                    </div>
                <div class="col-sm-4 div1">
                    <div style="text-align:left;">
                    <h1>HMTL Example:</h1>
                   
                        <p style="color:white;">
                        &lt;!DOCTYPE html&gt; <br>
                        &lt;html&gt;<br>
                        &lt;title>HTML Tutorial&lt;/title&gt;<br>
                        &lt;body&gt;<br>

                        &lt;h1>This is a heading&lt;/h1&gt;<br>
                        &lt;p&gt;This is a paragraph.&lt;/p&gt;<br>

                        &lt;/body&gt;<br>
                        &lt;/html&gt;<br>
                        </p>
                        <input type="button"class="btn btn-success " name="btn4" value="Try Yourself"><br>
                        
                    </div>
                    
                    
                </div>
                </div>
            
             <div class="row" style="height: 820px;background-color: grey;">
                <div class="col-sm-8 div1">
                  
                    <h1 style="font-size: 60px;">CSS</h1>
                    <p>The language for styling web pages</p>
                    <a href="learn_css.php"><input type="button" class="btn btn-success" name="btn1" value="Learn CSS"></a><br><br>
                    
                    <a href="css_reference.php"> <input type="button" class="btn btn-warning btn-lg" name="btn3" value="CSS Reference"></a><br><br>
                    
                    </div>
                <div class="col-sm-4 div1">
                    <div style="text-align:left;">
                    <h1>CSS Example:</h1>
                   
                    .div1{<br>
                    text-align: center;<br>
            font-family: Constantia;<br>
            font-size: 20px;<br>
            color: white;<br>
            margin-top: 100px;<br>    
            }<br>
                        <input type="button"class="btn btn-success" name="btn4" value="Try Yourself"><br>
                        
                    </div>
                    
                    
                </div>
                </div>
                
             
             <div class="row" style="height: 820px;background-color: #ff80aa;">
                <div class="col-sm-8 div1">
                  
                    <h1 style="font-size: 60px;">JavaScript</h1>
                    <p>The language for programming web pages</p>
                    <a href="learn_javascript.php"><input type="button" class="btn btn-success" name="btn1" value="Learn CSS"></a><br><br>
                    
                    <a href="javascript_reference.php"> <input type="button" class="btn btn-warning btn-lg" name="btn3" value="CSS Reference"></a><br><br>
                    
                    </div>
                <div class="col-sm-4 div1">
                    <div style="text-align:left;">
                    <h1>JavaScript Example:</h1>
                   
                    &lt;button onclick="myFunction()">Click Me!&lt;/button><br>

                    &lt;script>
                    function myFunction() {<br>
                    let x = document.getElementById("demo");<br>
                    x.style.fontSize = "25px";<br>
                    x.style.color = "red";<br>
                    }<br>
                    &;t;/script><br>
                        <input type="button"class="btn btn-success" name="btn4" value="Try Yourself"><br>
                        
                    </div>
                    
                    
                </div>
            
            
            </div>
        </div>
        
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
                
            
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       <?php
        include'footer.php';        echo "<br>";
        include 'footer1.php';
        ?>
    </body>
</html>