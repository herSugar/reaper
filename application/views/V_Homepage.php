<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Gudea&family=Lato:wght@100;400&family=Lexend:wght@100;400&family=Poppins:wght@100&family=Raleway:wght@100;300;400;600&display=swap');
    
        
     .frame-1{
        position: flex;
        text-indent: -250px;
        text-align: left;
    }
     .frame-1 h1{
       font-family: 'Raleway';
       font-weight: bold;
       letter-spacing: 10px;
       color: white;
       color: #fff;
       
       
       /* -webkit-text-stroke-width: 0.5px;
       -webkit-text-stroke-color: white; */
       font-size: 45px;
    }
    /* .frame-1 h1 span{
        color: cyan;
    } */
    .frame-1 h2{
        font-family: 'Raleway';
        font-size: medium;
        font-weight: bold;
        letter-spacing: 15px;
        color: white;
    }
    .dropdown{
    margin-top: 50px;
    width: 150px;
    padding: 10px;
    background: rgba(3, 3, 3, 0.20);
    color: white;
    border: 1px solid #ccc;
    border-radius:15px;
    
    
    }
   .dropdown option{
    background: white;
    color: black;
    text-indent: -250px;
    }
    
    
    </style>
</head>
<body>
    
    <div class="frame">
        <!-- <img src="<?php echo base_url('/assets/image/pantai.png')?>" alt=""> -->
        <div class="frame-1">
                <h1>SELAMAT <span>DATANG</span></h1>
                <h2> Di Jendela Wisata</h2>
            
          <select class="dropdown" >
            <option value="Pilih" >Semua</option> 
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select>
        <select class="dropdown">
            <option value="Pilih" >Semua</option>
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select>
        <select class="dropdown">
            <option value="Pilih">Semua</option>
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select> 
        </div>
</body>
</html> 