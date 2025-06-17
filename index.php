<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>图书馆预约选座系统</title>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  
  <?php include('./header.html'); ?>
  
  <!-- Banner 区域 -->
  <section class="banner">
    <div class="mask"></div>
    <div class="content">
      <h2>图书馆预约选座系统</h2>
      <p>图书馆预约系统是为了缓解高校图书馆座位紧缺，为大学生提供及时的座位供其使用。</p>
      <div class="btn-group">
        <a href="./login.php" class="btn">登录</a>
        <a href="register.php" class="btn btn-green">注册</a>
      </div>
    </div>
  </section>
  <section class="intro">
      <div class="container">
          <h2>📚 图书馆预约选座系统 · 简介</h2>
          <p class="lead">
              本系统旨在为广大师生提供一个便捷高效的在线图书馆座位查询与预约平台。<br>
              用户可以实时查看座位空闲情况，并根据个人需求选择合适的座位进行预约。无论是自习还是讨论，系统都能为您提供理想的空间，提高图书馆资源的使用效率。
          </p>

          <h4>✨ 核心功能：</h4>
          <ul class="features">
              <li>📌 实时查看座位空闲情况</li>
              <li>🧾 在线预约座位，避免现场排队</li>
              <li>⏰ 自动到期管理，资源合理分配</li>
              <li>📂 个人预约记录查询与管理</li>
              <li>🔐 管理员权限与状态维护功能</li>
          </ul>

          <p class="closing">
              我们致力于为您提供高效、智能、有序的座位管理体验，让学习与工作更加高效！
          </p>
      </div>
  </section>


  <?php include('./footer.html'); ?>

</body>
</html>