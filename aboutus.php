<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="Viewport" content="width= device-width , initial-scale=1.0">
        <title>THRILLVILLE</title>
        <link rel="stylesheet" href="css/aboutus.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
         <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,700;1,200;1,300;1,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.
4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqR
Kc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
       
        
        <div class="banner">
            <?php include('header.php'); ?>
        

        <div class="text">
            <h1>ABOUT US</h1>
        </div>

        </div>
        <div class="reveal">
        <div class="desc">
            <div class="descr">
                <h3>THRILLVILLE EXPERIENCES</h3>
            </div>
           <div class="paras">
             <div>
                <p>Thrill Ville Experiences brings the excitement of The Thrill Ville Company's powerful brands and franchises — including Thrill Ville, Thrill Pixie, Marvel Thrills, Galactic Thrills, Thrill Sports, Twentieth Century Thrills, and Adventure Expeditions — into the daily lives of families and fans around the world to create thrilling memories that last a lifetime.</p>
</div>
<div>
                <p>When Thrill Ville opened Thrill Land in Adventureburg, Thrillifornia, on July 17, 1955, it created a unique destination built around thrilling storytelling and immersive experiences, ushering in a new era of family excitement. More than 65 years later, Thrill Ville has grown into one of the world’s leading providers of family travel and adrenaline-pumping leisure experiences, with iconic businesses including six thrill destinations with 12 adventure parks and 55 adrenaline-charged hotels in the United States, Europe, and Asia; a top-rated extreme cruise line fleet of five ships with three more planned in the coming years; a luxurious family adventure resort in Thrillwaii; a popular adventure ownership program; and two award-winning extreme tour adventure businesses. Thrill Ville Thrilleers are the creative force behind Thrill Ville adventure parks, adrenaline hotels, and extreme cruise ships globally.</p>
               </div>
               <div>
                <p>Thrill Ville Consumer Products, Games, and Publishing includes the world’s leading thrilling business; one of the largest adventure publishing brands globally; one of the largest licensors of extreme games across platforms worldwide; and adrenaline-pumping products at retail around the world.</p>
            </div>
            </div>
            <div class="banner2">
                <div class="heading"><h3>WHO ARE WE?</h3></div>
                <div class="par">
                    <p>Throughout our 65+ year history, we’ve designed our parks, experiences and products to inspire optimism and create magical moments that our guests can share with their loved ones. Our cast members continue to find new ways to do what we do best – build on our legacy of incredible storytelling by dreaming up experiences that can only be found at Disney.</p>
                </div>
            </div>

        </div>
        <?php include('footer.php'); ?>
     
     </div>
     <script type="text/javascript">
        window.addEventListener('scroll', reveal);
    
        function reveal(){
          var reveals = document.querySelectorAll('.reveal');
    
          for(var i = 0; i < reveals.length; i++){
    
            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 150;
    
            if(revealtop < windowheight - revealpoint){
              reveals[i].classList.add('active');
            }
            else{
              reveals[i].classList.remove('active');
            }
          }
        }
        </script>
    
        </body>

        
        </html>