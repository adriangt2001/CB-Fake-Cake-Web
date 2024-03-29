<!-- // views/category_list.php -->
<?php for ($i = 0; $i < count($categories); $i++): ?>
    
    <nav class="carousel" onclick="showCategory(<?php echo $categories[$i]['id']?>);">
        <div class="carousel-images">
            <img src=<?php echo '../../Imagenes/'.$products_img[$i][0]?>>
            <img src=<?php echo '../../Imagenes/'.$products_img[$i][1]?>>
        </div>
        <p class='category-content'><?php echo htmlentities($categories[$i]['nombre'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?></p>
    </nav>
<?php endfor; ?>