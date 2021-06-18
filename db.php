<?php

    $result = false;

    $dbhost = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'demo';

    if( $_SERVER['REQUEST_METHOD']=='POST' ){

        $conn = new mysqli ( $dbhost,$username, $password, $db );
        if( $conn ){

            $sql='insert into demotb ( `select`,`text`) values (?,?);';
            $stmt=$conn->prepare( $sql );
            $stmt->bind_param('ss', $_POST['rating8'],$_POST['ta']);
            $result = $stmt->execute();

        }  
       
 else {
    echo "0 results";
}
        $conn->close();
    }

?>



<html>
    <head>
        <style>
            .rating {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    width:1em;
    padding:0 .1em;
	color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}
    
    
    
    /*demo */
    .rating1,.rating2,.rating3,.rating4,.rating5,.rating6,.rating7,.rating8 {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating1:not(:checked) > input,.rating2:not(:checked) > input,.rating3:not(:checked) > input,.rating4:not(:checked) > input,.rating5:not(:checked) > input,.rating6:not(:checked) > input,.rating7:not(:checked) > input,.rating8:not(:checked) > input {
    position:absolute;
    
    clip:rect(0,0,0,0);
}

.rating1:not(:checked) > label,.rating2:not(:checked) > label,.rating3:not(:checked) > label,.rating4:not(:checked) > label,.rating5:not(:checked) > label,.rating6:not(:checked) > label,.rating7:not(:checked) > label,.rating8:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    width:1em;
    padding:0 .1em;
	color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating1:not(:checked) > label:before,.rating2:not(:checked) > label:before,.rating3:not(:checked) > label:before,.rating4:not(:checked) > label:before,.rating5:not(:checked) > label:before,.rating6:not(:checked) > label:before,.rating7:not(:checked) > label:before,.rating8:not(:checked) > label:before {
    content: '★ ';
}

.rating1 > input:checked ~ label,.rating2 > input:checked ~ label,.rating3 > input:checked ~ label,.rating4 > input:checked ~ label,.rating5 > input:checked ~ label,.rating6 > input:checked ~ label,.rating7 > input:checked ~ label,.rating8 > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating1:not(:checked) > label:hover,
.rating1:not(:checked) > label:hover ~ label,
    .rating2:not(:checked) > label:hover,
.rating2:not(:checked) > label:hover ~ label,
    .rating3:not(:checked) > label:hover,
.rating3:not(:checked) > label:hover ~ label,
    .rating4:not(:checked) > label:hover,
.rating4:not(:checked) > label:hover ~ label,
    .rating5:not(:checked) > label:hover,
.rating5:not(:checked) > label:hover ~ label,
    .rating6:not(:checked) > label:hover,
.rating6:not(:checked) > label:hover ~ label,
    .rating7:not(:checked) > label:hover,
.rating7:not(:checked) > label:hover ~ label,
    .rating8:not(:checked) > label:hover,
.rating8:not(:checked) > label:hover ~ label{
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating1 > input:checked + label:hover,
.rating1 > input:checked + label:hover ~ label,
.rating1 > input:checked ~ label:hover,
.rating1 > input:checked ~ label:hover ~ label,
.rating1 > label:hover ~ input:checked ~ label,
    
    .rating2 > input:checked + label:hover,
.rating2 > input:checked + label:hover ~ label,
.rating2 > input:checked ~ label:hover,
.rating2 > input:checked ~ label:hover ~ label,
.rating2 > label:hover ~ input:checked ~ label,
    
    .rating3 > input:checked + label:hover,
.rating3 > input:checked + label:hover ~ label,
.rating3 > input:checked ~ label:hover,
.rating3 > input:checked ~ label:hover ~ label,
.rating3 > label:hover ~ input:checked ~ label,
    
    .rating4 > input:checked + label:hover,
.rating4 > input:checked + label:hover ~ label,
.rating4 > input:checked ~ label:hover,
.rating4 > input:checked ~ label:hover ~ label,
.rating4 > label:hover ~ input:checked ~ label,
    
    .rating5 > input:checked + label:hover,
.rating5 > input:checked + label:hover ~ label,
.rating5 > input:checked ~ label:hover,
.rating5 > input:checked ~ label:hover ~ label,
.rating5 > label:hover ~ input:checked ~ label,
    
    .rating6 > input:checked + label:hover,
.rating6 > input:checked + label:hover ~ label,
.rating6 > input:checked ~ label:hover,
.rating6 > input:checked ~ label:hover ~ label,
.rating6 > label:hover ~ input:checked ~ label,
    
    .rating7 > input:checked + label:hover,
.rating7 > input:checked + label:hover ~ label,
.rating7 > input:checked ~ label:hover,
.rating7 > input:checked ~ label:hover ~ label,
.rating7 > label:hover ~ input:checked ~ label,
    
    .rating8 > input:checked + label:hover,
.rating8 > input:checked + label:hover ~ label,
.rating8 > input:checked ~ label:hover,
.rating8 > input:checked ~ label:hover ~ label,
.rating8 > label:hover ~ input:checked ~ label{
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating1 > label:active,.rating2 > label:active,.rating3 > label:active,.rating4 > label:active,.rating5 > label:active,.rating6 > label:active,.rating7 > label:active,.rating8 > label:active {
    position:relative;
    top:2px;
    left:2px;
}
        
        
        
        
        </style>
            
        
        
        
    </head>
    <body>
        <form method="post">
        <div class="rating8">
  
    <input type="radio" id="star58" name="rating8" value="5" /><label for="star58" title="Rocks!">5 stars</label>
    <input type="radio" id="star48" name="rating8" value="4" /><label for="star48" title="Pretty good">4 stars</label>
    <input type="radio" id="star38" name="rating8" value="3" /><label for="star38" title="Meh">3 stars</label>
    <input type="radio" id="star28" name="rating8" value="2" /><label for="star28" title="Kinda bad">2 stars</label>
    <input type="radio" id="star18" name="rating8" value="1" /><label for="star18" title="Sucks big time">1 star</label>
</div>
        <textarea name="ta">
                </textarea>
                <input type="submit">
            
        </form>
    
    </body>



</html>