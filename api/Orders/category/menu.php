<?php
  $current_category = isset($_GET['category']) ? (int)$_GET['category'] : 0;
  $query_category = mysqli_query($con,"SELECT * FROM tbl_category");
  // Giới hạn giá trị của $current_category từ -10 đến 10 (để dịch từ 30px đến -30px)
  $translateX =  90 - $current_category * 13.75;
?>
<div class="swiper-wrapper" style="transform: translate3d(<?php echo $translateX;?>px, 0px, 0px); transition: transform 0.3s ease;">
  <?php while($row_category = mysqli_fetch_array($query_category)) { ?>  
    <div class="swiper-slide" style="margin-right: 15px;">
      <a href="order.php?quanly=category&category=<?php echo $row_category['id_category'] ?>">
        <span class="img">
          <img src="../uploads/<?php echo $row_category['image_category'] ;?>" width="90" height="100" alt="<?php echo $row_category['name_category'] ?>" loading="eager" style="<?php echo ($current_category == $row_category['id_category']) ? 'border: 3px solid red;' : ''; ?>">
        </span>
        <span class="txt"><?php echo $row_category['name_category'] ?></span>
      </a>
    </div>
  <?php } ?>
</div>

<div class="swiper-pagination">
  <!-- Nút quay lại -->
  <span class="swiper-pagination-bullet">
    <a href="order.php?quanly=category&category=<?php echo max($current_category - 1, 1); ?>">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e45a5a">
        <path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z"/>
      </svg>
    </a>    
  </span>

  <!-- Nút tiến lên -->
  <span class="swiper-pagination-bullet">
    <a href="order.php?quanly=category&category=<?php echo min($current_category + 1, 12); ?>">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e45a5a">
        <path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/>
      </svg>
    </a>
  </span>
</div>
