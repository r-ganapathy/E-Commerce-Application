<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan</title>
</head>
<style>
    body{
        margin: 0;
    }
    .header{
        background-color: rgb(16,32,51);
        width: 100%;
        height: 100vh;
    }
   
    .headercontent .context{
        position: absolute;
        color: white;
        top: 275px;
        left: 200px;
        animation-name: anime;
        animation-duration: 1s;
        font-family: Bradley Hand ITC;
        font-weight: 900;
    }
    @keyframes anime {
        0%{top: 700px; left: 200px;}
        100%{top: 275px; left: 200px;}
        
    }
    .headercontent .context .h1{
        font-size: 50px;
    }
    .headercontent .context .p{
        line-height: 5rem;
        font-size: 30px;
    }
    .headercontent .context .get_products{
        color: white;
        font-size: 25px;
        border: 1px solid white;
        text-decoration: none;
        padding: 8px;
        border-radius: 30px;
    }
    .headercontent .context .get_products:hover{
        background-color: white;
        color: black;
    }
    .square1{
        position: absolute;
        width: 200px;
        height: 200px;
        background-color: rgb(5, 4, 15);
        top: 200px;
        right: 250px;
        box-shadow: rgb(52, 80, 114) 5px 5px 50px;
        animation-name: anime1;
        animation-duration: 1s;
    }
    .square2{
        position: absolute;
        width: 200px;
        height: 200px;
        background-color: rgb(5, 4, 15);
        top: 350px;
        right: 100px;
        box-shadow: rgb(52, 80, 114) 5px 5px 50px;
        animation-name: anime2;
        animation-duration: 1s;
    }
    @keyframes anime1 {
        0%{top: 0px; right: -250px;}
        100%{top: 200px; right: 250px;}
    }

    @keyframes anime2 {
        0%{top: 800px; right: -500px;}
        100%{top: 350px; right: 100px;}
    }

    .middle{
        background-color: white;
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .middle .middleheading{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-size: 25px;
        font-weight: 900;
        color: rgb(16,32,51);
        margin-bottom: 30px;
        text-decoration: underline;
    }
    .middle .products{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 150px;
        font-family: Bradley Hand ITC;
        font-weight: 800;
    }
    .middle .products .product{
        width: 200px;
        height: auto;
        font-size: 18px;
        font-weight: 600;
        color: rgb(16,32,51);
    }
    .middle .products .product .product_head{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 22px;
        font-weight: 900;
    }
    .product div{
        margin-top: 30px;
    }
    .square3{
        width: 200px;
        height: 200px;
        background-color: rgb(5, 4, 15);
    }
    .square4{
        width: 200px;
        height: 200px;
        background-color: rgb(5, 4, 15);
    }
    .square5{
        width: 200px;
        height: 200px;
        background-color: rgb(5, 4, 15);
    }

    
    #footer{
        background-color: rgb(16,32,51);
        width: 100%;
        height: 100vh;
    }
    #footer .con{
        width: 100%;
        height: 600px;
    }

    #footer .deepfooter{
        width: 100%;
        height: 50px;
        background-color: rgb(5, 4, 15);
    }
</style>
<body>
<?php
        session_start();
    ?>
    <div class="home">
        <div class="header">
            <?php include './components/header.php'; ?>
            <div class="headercontent">
                <div class="context">
                    <div class="h1">Handmade with Hand</div>
                    <div class="p">Draw the soulful touch of our treasures</div>
                    <div ><a class="get_products" href="./pages/products.php">Get Products</a></div>
                </div>
                <div class="square1"></div>
                <div class="square2"></div>
            </div>
        </div>
        <div class="middle">
            <div class="middleheading">Our Products</div>
            <div class="products">
                <div class="product"> 
                    <div class="product_head">Product1</div>
                    <div class="square3"></div>
                    <div class="product_des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi esse provident eos quis quas, quod totam quasi sunt hic ex fuga aliquid ipsa. Maiores ut quo reiciendis eos placeat aperiam?</div>
                    
                </div>
                <div class="product">
                    <div class="product_head">Product2</div>
                    <div class="square4"></div>
                    <div class="product_des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi esse provident eos quis quas, quod totam quasi sunt hic ex fuga aliquid ipsa. Maiores ut quo reiciendis eos placeat aperiam?</div>

                </div>
                <div class="product">
                    <div class="product_head">Product3</div>
                    <div class="square5"></div>
                    <div class="product_des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi esse provident eos quis quas, quod totam quasi sunt hic ex fuga aliquid ipsa. Maiores ut quo reiciendis eos placeat aperiam?</div>

                </div>
            </div>
        </div>
        <div id="footer">
            <div class="con">
                <div class="contact">Contact</div>
                <div class="contacts">
                
                </div>
            </div>
            <div class="deepfooter">
                
            </div>
        </div>
    </div>
    <!-- <script>
        document.addEventListener("scroll",(e)=>{
            console.log(window.scrollY)
            console.log("home",document.querySelector(".deepfooter").offsetTop);

        })
    </script> -->
</body>

</html>