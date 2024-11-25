<?php
if(isset($_GET['login'])){
    $dangxuat = $_GET['login'];
    }else{
        $dangxuat = '';
    }
    if($dangxuat=='dangxuat'){
        session_destroy();
        header('Location: home.php');
    } 
?>
<nav class="nav-top"> 
        <div class="container">
            <h1 class="logo"><a href="../Main/home.php">LoGo</a></h1>
            <ul class="ul-center"> 
            <li><a href="../Aboutme/about-us.php" class="nav-center">About us</a></li>
            <li><a href="../Contact/contact.php" class="nav-center">Contacts</a></li>
            <li><a href="../Orders/order.php" class="nav-center">Orders</a></li>
            </ul>
            <a id="menu-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#000000">
                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
            </svg>
            </a>
            <ul class="ul-right"> 
            <li>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000">
            <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/>
          </svg>
        </li>
        <li>
          <a href="../Orders/order.php?quanly=giohang">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
              <path d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"/>
            </svg>
          </a>
        </li>
                <?php
                 if (isset($_SESSION['taikhoan'])) {
                ?>    
                <li ><span>
                    <?php echo"Hello: " .$_SESSION['taikhoan']; ?>
                </span></li>
                <li ><span id="Sign-up" style="cursor:pointer"><a href="?login=dangxuat">Đăng xuất</a></span></li>
                <?php
                } else {
                ?>
                <li ><span id="Sign-up" style="cursor:pointer">
                <a href="../Login/dangnhap.php">Sign up</a>
                </span></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>