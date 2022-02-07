    <header id="header">
            <div>
                <i  id="menu_icon" onclick="changeNav()" data-feather="menu"></i>
                <img onClick="location.href='index.php'" alt="Site Logo" src="img/logo.png"/>
                <i onClick="location.href='cart.php'" data-feather="shopping-cart"></i>
            </div>
            <?php
                if(isset($templateParams['header_title'])){
                    echo 
                    '<div>
                        <i data-feather="arrow-left" onClick="history.back()"></i>
                        <h2>'.$templateParams['header_title'].'</h2>
                    </div>';
                } 
            ?>  
    </header>
    <nav id="sideNav" class="sidenav">
            <a <?php isActive("index.php");?> href="index.php">Home</a>
            <a <?php isActive("account.php");?> href="details.php">Account</a>
            <a <?php isActive("categorie.php");?> href="categories.php">Categorie</a>   
            <a href="category.php?new_products=1">Nuovi arrivi</a>
            <a href="category.php?discounted=1">Saldi</a>    
            <div>
                <a <?php isActive("crea.php");?> href="new_product.php?type=custom">Crea</a>
                <h4>nuovo</h4>
            </div>
            
    </nav>
    <div id="main">


