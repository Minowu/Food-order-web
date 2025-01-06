<section class="main">
        <div class="image">
            <div class="ellipse">
                <div class="column-2">
                    <div class="div-2">
                    <h3 id="Order-food-now">
                        <span class="Bold black">Hãy đặt </span>
                        <span class="Bold red" style="color: #ff5b6a;">đồ ăn</span>
                        <span class="Bold black"> ngay bây giờ !</span>
                    </h3>
                    </div>
                    <form class="form" action ="main.html" method="post">
                        <input class="text-2" "type="text" name ="address" placeholder=" Your Address">
                        <button class="button-2" >Sign up</button>
                    </form>
                </div>
            </div>
        </section>
        <section class="what-we-serve">
            <div class="what-we-serve-text">
                <div style="color: #ff5b6a; font-size: 36px; font-weight: 500;">WHAT WE SERVE</div>
                <p style="font-size: 32px;">Quán ăn yêu thích của sinh viên</p>
            </div>
            <div class="grid-3">
                <div class="overlap">
                    <img class="img" src="images/near.svg">
                    <div class="text-wrapper-4">Convenience</div>
                    <p class="text-wrapper-5">Nhà ăn ở ngay trong khuôn viên trường</p>
                </div>
                <div class="overlap">
                    <img class="img" src="images/fresh.svg">
                    <div class="text-wrapper-4">Fresh</div>
                    <p class="text-wrapper-5">Nguyên liệu được nhập trong ngày</p>
                </div>
                <div class="overlap">
                    <img class="img" src="images/cheap.svg">
                    <div class="text-wrapper-4">Cheap</div>
                    <p class="text-wrapper-5">Giá cả phù hợp với sinh viên</p>
                </div>
            </div>
        </section>
        <section class="menu-section">
            <h2>A wide variety of food and drinks</h2>
            <div class="menu-filter">
                <button id="all-btn" class="active">All</button>
                <button id="food-btn">Food</button>
                <button id="drink-btn">Drink</button>
            </div>
            <div class="menu-items">
                <?php
                // Food items
                $query_food = "SELECT * FROM tbl_sanpham WHERE id_category IN (1,2,5,6,7,8,9,10,11) ORDER BY id_category DESC LIMIT 6";
                $result_food = mysqli_query($con, $query_food);
                ?>
                <h3 class="food-title">Food</h3>
                <div class="menu-grid food-grid">
                    <?php while ($row_food = mysqli_fetch_array($result_food)) { ?>
                        <div class="menu-item">
                            <a class="item-link" href ="../Orders/order.php?quanly=sanpham&id=<?php echo $row_food['sanpham_id']?> " >
                                <img src="../uploads/<?php echo $row_food['sanpham_image']; ?>" alt="<?php echo $row_food['sanpham_name']; ?>">
                                <h4><?php echo $row_food['sanpham_name']; ?></h4>
                                <span class="price"><?php echo number_format($row_food['sanpham_giakhuyenmai'], 3, '.', '.'); ?> đ</span>
                                <!-- <button class="add-to-cart" >+</button> -->
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <?php
                // Drink items
                $query_drink = "SELECT * FROM tbl_sanpham WHERE id_category IN (3,4,5) ORDER BY id_category DESC LIMIT 4";
                $result_drink = mysqli_query($con, $query_drink);
                ?>
                <h3 class="drink-title">Drink</h3>
                <div class="menu-grid drink-grid">
                    <?php while ($row_drink = mysqli_fetch_array($result_drink)) { ?>
                        <div class="menu-item">
                            <a class="item-link" href ="../Orders/order.php?quanly=sanpham&id=<?php echo $row_drink['sanpham_id']?> " >
                                <img src="../uploads/<?php echo $row_drink['sanpham_image']; ?>" alt="<?php echo $row_drink['sanpham_name']; ?>">
                                <h4><?php echo $row_drink['sanpham_name']; ?></h4>
                                <span class="price"><?php echo number_format($row_drink['sanpham_gia'], 3, '.', '.'); ?> đ</span>
                                <!-- <button class="add-to-cart" data-id="<?php echo $row_drink['sanpham_id']; ?>">+</button> -->
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>        
        <section class="reviews-section">
            <h2>What our customers say about us</h2>
            <div class="carousel-container">
                <button class="carousel-arrow left" onclick="moveCarousel(-1)" aria-label="Previous review">&lt;</button>
                <div class="carousel">
                    <div class="review-card" id="review1">
                        <img src="images/gumball.png" alt="Gumball Washington" class="reviewer-image">
                        <div class="review-content">
                            <h3>Gumball Washington</h3>
                            <p class="review-date">December 2, 2023</p>
                            <div class="star-rating">
                                <img src="images/star.png" alt="Star" class="star">
                                <img src="images/star.png" alt="Star" class="star">
                                <img src="images/star.png" alt="Star" class="star">
                                <img src="images/star.png" alt="Star" class="star">
                                <img src="images/star.png" alt="Star" class="star">
                            </div>
                            <p class="review-text">Quán này đúng là một địa điểm không thể bỏ qua nếu bạn yêu thích đồ ăn ngon. Tất cả các món đều được chế biến rất kỹ lưỡng, hương vị đậm đà và vô cùng tươi ngon. Đặc biệt là món bò nướng, mềm mại và thơm phức!</p>
                        </div>
                    </div>
                    <div class="review-card" id="review2">
                        <img src="images/ferb.png" alt="Ferb Johnson" class="reviewer-image">
                        <div class="review-content">
                            <h3>Ferb Johnson</h3>
                            <p class="review-date">November 15, 2023</p>
                            <div class="star-rating">
                                <img src="images/star.png" alt="Star" class="star">
                                <img src="images/star.png" alt="Star" class="star">
                                <img src="images/star.png" alt="Star" class="star">
                                <img src="images/star.png" alt="Star" class="star">
                                <img src="images/star.png" alt="Star" class="star">
                            </div>
                            <p class="review-text">Tôi rất ấn tượng với không gian của quán. Thiết kế hiện đại nhưng vẫn giữ được nét truyền thống. Đồ ăn ngon, nhân viên phục vụ nhiệt tình. Chắc chắn sẽ quay lại!</p>
                        </div>
                    </div>
                    <div class="review-card" id="review3">
                        <img src="images/darwin.png" alt="Darwin Gallanger" class="reviewer-image">
                        <div class="review-content">
                            <h3>Darwin Gallanger</h3>
                            <p class="review-date">October 30, 2023</p>
                            <div class="star-rating">
                                <img src="images/star.png" alt="Star" class="star">
                                <img src="images/star.png" alt="Star" class="star">
                                <img src="images/star.png" alt="Star" class="star">
                                <img src="images/star.png" alt="Star" class="star">
                                <img src="images/star.png" alt="Star" class="star">
                            </div>
                            <p class="review-text">Giá cả hợp lý cho chất lượng món ăn. Tôi đặc biệt thích món salad của họ, rất tươi và có hương vị độc đáo. Không gian cũng rất thoải mái để trò chuyện với bạn bè.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-arrow right" onclick="moveCarousel(1)" aria-label="Next review">&gt;</button>
            </div>
        </section>
        
        <section class="newsletter-section">
            <h2>Stay Updated with Food-A5</h2>
            <p>Subscribe to our newsletter for the latest updates and special offers.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Your Email Address" required>
                <button type="submit">Sign Up</button>
            </form>
        </section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const allBtn = document.getElementById('all-btn');
    const foodBtn = document.getElementById('food-btn');
    const drinkBtn = document.getElementById('drink-btn');
    
    const foodGrid = document.querySelector('.food-grid');
    const drinkGrid = document.querySelector('.drink-grid');
    const foodTitle = document.querySelector('.food-title');
    const drinkTitle = document.querySelector('.drink-title');

    function setActiveButton(button) {
        [allBtn, foodBtn, drinkBtn].forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
    }

    allBtn.addEventListener('click', function() {
        setActiveButton(this);
        foodGrid.style.display = 'grid';
        drinkGrid.style.display = 'grid';
        foodTitle.style.display = 'block';
        drinkTitle.style.display = 'block';
    });

    foodBtn.addEventListener('click', function() {
        setActiveButton(this);
        foodGrid.style.display = 'grid';
        drinkGrid.style.display = 'none';
        foodTitle.style.display = 'block';
        drinkTitle.style.display = 'none';
    });

    drinkBtn.addEventListener('click', function() {
        setActiveButton(this);
        foodGrid.style.display = 'none';
        drinkGrid.style.display = 'grid';
        foodTitle.style.display = 'none';
        drinkTitle.style.display = 'block';
    });
})
let currentReview = 1;
const totalReviews = 3; 

function moveCarousel(direction) {
    
    document.getElementById(`review${currentReview}`).classList.remove('active');
    
    currentReview += direction;
    if (currentReview > totalReviews) currentReview = 1;
    if (currentReview < 1) currentReview = totalReviews;
    
    document.getElementById(`review${currentReview}`).classList.add('active');
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('review1').classList.add('active');
});
</script>
</body>
</html>
