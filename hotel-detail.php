<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/reset.css" />
  <link rel="stylesheet" href="./assets/css/hotel.css" />
  <link rel="stylesheet" href="./assets/css/hotel-detail.css" />

  <title>Chi tiết khách sạn</title>
</head>
<body>
  <?php
  // Dữ liệu khách sạn (mảng tĩnh, sau này có thể thay bằng SQL)
  $hotels = [
    1 => [
      "name" => "DeLaSea Phát Linh Hạ Long",
      "image" => "./assets/css/img/kháchan1.jpg",
      "location" => "Hạ Long",
      "rooms" => "326 phòng",
      "intro" => "Khách sạn sang trọng với view vịnh Hạ Long tuyệt đẹp, mang đến trải nghiệm nghỉ dưỡng đẳng cấp.",
      "amenities" => ["Phòng có bồn tắm", "Wifi miễn phí", "Ban công/Cửa sổ", "Lễ tân 24h", "Nhà hàng", "Bể bơi ngoài trời"],
      "name room1" => "Deluxe City View",
      "image room1" => "./assets/css/img/Deluxe City View.jpg",
      "bed1" => "Giường đôi hoặc giường đơn",
      "price1" => "1555000", // Giá dạng số để tính toán
      "name room2" => "Deluxe Ocean",
      "image room2" => "./assets/css/img/Deluxe Ocean.jpg",
      "bed2" => "Giường đôi hoặc giường đơn",
      "price2" => "1800000", // Giá dạng số để tính toán
    ],
    2 => [
      "name" => "Citadines Marina Hạ Long",
      "image" => "./assets/css/img/Citadines Marina Hạ Long.jpg",
      "location" => "Hạ Long",
      "rooms" => "580 phòng",
      "price" => "1,600,000đ / phòng",
      "intro" => "Khách sạn hiện đại nằm gần bờ biển Hạ Long, với dịch vụ cao cấp và không gian thoải mái.",
      "amenities" => ["Hồ bơi ngoài trời", "Gym", "Quán cà phê"]
    ],
    3 => [
      "name" => "Sea Stars Hotel Hạ Long",
      "image" => "./assets/css/img/Sea Stars Hotel Hạ Long.jpg",
      "location" => "Hạ Long",
      "rooms" => "354 phòng",
      "price" => "2,300,000đ / phòng",
      "intro" => "Khách sạn đẳng cấp với dịch vụ hàng đầu, nằm ở vị trí lý tưởng gần vịnh Hạ Long.",
      "amenities" => ["Bãi biển riêng", "Sân golf", "Nhà hàng hải sản"]
    ],
    4 => [
      "name" => "Cozrum Homes - Sonata Residence",
      "image" => "./assets/css/img/Cozrum Homes - Sonata Residence.jpeg",
      "location" => "TP Hồ Chí Minh",
      "rooms" => "275 phòng",
      "price" => "508,554đ / phòng",
      "intro" => "Căn hộ dịch vụ tiện nghi tại trung tâm TP.HCM, phù hợp cho cả du lịch và công tác.",
      "amenities" => ["Hồ bơi", "Phòng gym", "Khu BBQ"]
    ],
    5 => [
      "name" => "M Village Living Cuu Long",
      "image" => "./assets/css/img/M Village Living Cuu Long.jpeg",
      "location" => "TP Hồ Chí Minh",
      "rooms" => "200 phòng",
      "price" => "508,554đ / phòng",
      "intro" => "Khách sạn phong cách sống hiện đại tại TP.HCM, mang đến không gian trẻ trung và sáng tạo.",
      "amenities" => ["Hồ bơi", "Khu làm việc chung", "Quán cà phê"]
    ],
    6 => [
      "name" => "Hotel Nikko Saigon",
      "image" => "./assets/css/img/Hotel Nikko Saigon.jpeg",
      "location" => "TP Hồ Chí Minh",
      "rooms" => "334 phòng",
      "price" => "5,288,422đ / phòng",
      "intro" => "Khách sạn 5 sao sang trọng tại trung tâm Sài Gòn, với dịch vụ đẳng cấp quốc tế.",
      "amenities" => ["Hồ bơi", "Spa", "Nhà hàng Nhật Bản"]
    ]
  ];

  // Lấy id từ URL, mặc định là 1 nếu không có
  $id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
  $hotel = isset($hotels[$id]) ? $hotels[$id] : $hotels[1]; // Nếu id không tồn tại, dùng khách sạn 1
  ?>

  <!-- Header -->
  <header class="header">
    <div class="container">
      <div class="header-top">
        <h3 class="header__fourece">fourece</h3>
        <nav class="navbar">
          <ul class="navbar__list">
            <li class="navbar__item"><a href="./trangchu.html" class="navbar__link">Trang chủ</a></li>
            <li class="navbar__item"><a href="./khachsan.html" class="navbar__link">Khách sạn</a></li>
            <li class="navbar__item"><a href="./nhahang.html" class="navbar__link">Nhà hàng</a></li>
            <li class="navbar__item"><a href="#!" class="navbar__link">Máy bay</a></li>
            <li class="navbar__item"><a href="#!" class="navbar__link">Du thuyền</a></li>
          </ul>
        </nav>
        <div class="action">
          <a href="#!" class="action__DN">Đăng nhập</a>
          <a href="#!" class="btn action__DK">Đăng ký</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Phần ảnh khách sạn -->
<section class="hotel-detail">
  <div class="container">
    <div class="hotel-detail-image">
      <img src="<?php echo $hotel['image']; ?>" alt="<?php echo $hotel['name']; ?>" class="hotel-detail__img" />
    </div>
  </div>
</section>

<!-- Phần thông tin chi tiết khách sạn -->
<section class="hotel-intro">
  <div class="container">
    <div class="hotel-detail-intro">
      <h1 ><?php echo $hotel['name']; ?></h1> 
      <div class="hotel-info">
        <div class="additional-info">
          <p>Vị trí: <span><?php echo $hotel['location']; ?></span></p> <!-- Vị trí -->
          <p>Số phòng: <span><?php echo $hotel['rooms']; ?></span></p> <!-- Số phòng -->
        </div>

        <h2>Giới thiệu</h2>
        <p><?php echo $hotel['intro']; ?></p> <!-- Giới thiệu -->

        <h2>Tiện ích</h2>
        <ul>
          <?php foreach ($hotel['amenities'] as $amenity) { ?> <!-- Lặp qua danh sách tiện ích -->
            <li><?php echo $amenity; ?></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</section>

  <!-- Form Tìm kiếm và Đặt phòng -->
  <section class="main__two">
    <div class="container">
      <section class="main__two__item">
        <form class="booking-form" method="POST" action="">
          <div class="main__two__list__room">
            <!-- Phòng 1 -->
            <div class="main__two__list__room__item">
              <img src="<?php echo $hotel['image room1'];?>" alt="<?php echo $hotel['name room1']; ?>" class="room-img" />
              <h2><?php echo $hotel['name room1']; ?></h2>
              <p><?php echo $hotel['bed1']; ?></p>
              <p><?php echo number_format($hotel['price1'], 0, ',', '.') . ' đ/phòng'; ?></p>
              <div class="quantity-selector">
                <button type="button" class="quantity-btn decrease" onclick="decreaseQuantity('room1')">-</button>
                <input type="text" id="room1-quantity" class="quantity-input" value="0" readonly />
                <button type="button" class="quantity-btn increase" onclick="increaseQuantity('room1')">+</button>
              </div>
            </div>

            <!-- Phòng 2 -->
            <div class="main__two__list__room__item">
             <img src="<?php echo $hotel['image room2'];?>" alt="<?php echo $hotel['name room2']; ?>" class="room-img" />
              <h2><?php echo $hotel['name room2']; ?></h2>
              <p><?php echo $hotel['bed2']; ?></p>
              <p><?php echo number_format($hotel['price2'], 0, ',', '.') . ' đ/phòng'; ?></p>
              <div class="quantity-selector">
                <button type="button" class="quantity-btn decrease" onclick="decreaseQuantity('room2')">-</button>
                <input type="text" id="room2-quantity" class="quantity-input" value="0" readonly />
                <button type="button" class="quantity-btn increase" onclick="increaseQuantity('room2')">+</button>
              </div>
            </div>
          

          
            <div class="main__two__list__date__bed"> 
            <div class="main__two__list__form___one__item2">
              <label for="nights" class="click__search">Số đêm ở:</label>
              <select name="nights" id="nights" class="select__search" required onchange="updateTotalPrice()">
                <option value="1" selected>1 đêm</option>
                <option value="2">2 đêm</option>
                <option value="3">3 đêm</option>
                <option value="4">4 đêm</option>
                <option value="5">5 đêm</option>
                <option value="6">6 đêm</option>
              </select>
            </div>
          

            <div class="main__two__list__form___one__item4">
              <label for="checkin-date" class="click__search">Ngày nhận phòng:</label>
              <input type="date" id="checkin-date" class="select__search" required />
            </div>
            </div>

            
              <div class="main__two__comment__list">
              <div class="main__two__comment__item">
                
                <label for="">Họ và tên:</label>
                <input type="text" placeholder = "Nhập họ tên"> 
              </div>
              <div class="main__two__comment__item">
                
                <label for="">Số điện thoại:</label>
                <input type="text" placeholder = "Nhập số điện thoại">
              </div>
              <div class="main__two__comment__item">
                
                <label for="">Địa chỉ email:</label>
                <input type="text" placeholder = "Nhập email">
              </div>
              <div class="main__two__comment__item">
                <label for="">Yêu cầu của bạn:</label>
                <textarea class="comment_yeucau" placeholder="Nhập yêu cầu bạn cần"></textarea>
              </div>
              </div>
            
            
          </div>

          <!-- Tổng tiền -->
           
           <div class="total-price">
            <label for="">Tổng tiền:</label>
            <h3 id="total-price">0 đ</h3>
          </div>
           
          

          <button type="submit" class="btn btn__search">Đặt phòng

          </button>
        </form>
      </section>
    </div>
  </section>

  <!-- Footer -->
  <section class="footer">
    <div class="container">
      <div class="footer__main">
        <div class="footer__column">
          <h3 class="header__fourece">fourece</h3>
          <p class="footer__heading__1">Fourece là nền tảng du lịch cung cấp dịch vụ đặt vé máy bay, du thuyền, khách sạn và nhà hàng cao cấp.</p>
        </div>
        <div class="footer__column">
          <h3 class="footer__heading__2">GIỚI THIỆU</h3>
          <ul class="footer__list">
            <li class="footer__item"><a href="#!" class="footer__link">Về chúng tôi</a></li>
            <li class="footer__item"><a href="#!" class="footer__link">Chính sách riêng tư</a></li>
            <li class="footer__item"><a href="#!" class="footer__link">Điều khoản và điều kiện</a></li>
          </ul>
        </div>
        <div class="footer__column">
          <ul class="footer__list">
            <li class="footer__item"><a href="#!" class="footer__link">Hotline: 09111111111</a></li>
            <li class="footer__item"><a href="#!" class="footer__link">Email: info@forece.com</a></li>
          </ul>
        </div>
        <div class="footer__column">
          <div class="footer__mangxahoi">
            <a href="#!" class="footer__mangxahoi__btn">
              <svg width="44px" height="44px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    // Tăng số lượng phòng
    function increaseQuantity(roomId) {
      let quantityInput = document.getElementById(roomId + '-quantity');
      let quantity = parseInt(quantityInput.value);
      quantityInput.value = quantity + 1;
      updateTotalPrice(); // Cập nhật tổng tiền
    }

    // Giảm số lượng phòng
    function decreaseQuantity(roomId) {
      let quantityInput = document.getElementById(roomId + '-quantity');
      let quantity = parseInt(quantityInput.value);
      if (quantity > 0) {
        quantityInput.value = quantity - 1;
        updateTotalPrice();
      }
    }

    // Tính và cập nhật tổng tiền
    function updateTotalPrice() {
      let room1Quantity = Math.max(0, parseInt(document.getElementById('room1-quantity')?.value || 0)); // Đảm bảo không âm
      let room2Quantity = Math.max(0, parseInt(document.getElementById('room2-quantity')?.value || 0));
      let room1Price = <?php echo $hotel['price1'] ?? 0; ?>; // Giá phòng 1, mặc định 0 nếu không có
      let room2Price = <?php echo $hotel['price2'] ?? 0; ?>;
      let nights = parseInt(document.getElementById('nights').value) || 1; // Số đêm, mặc định 1
      let total = (room1Quantity * room1Price + room2Quantity * room2Price) * nights;
      document.getElementById('total-price').textContent = total.toLocaleString('vi-VN') + ' đ'; // Định dạng số tiền
    }
  </script>
</body>
</html>