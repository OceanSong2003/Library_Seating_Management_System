<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图书馆预约系统 - 登录</title>
    <!-- 引入Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- 引入Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Tailwind配置 -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#007bff',
                        secondary: '#28a745',
                        neutral: '#f8f9fa',
                        dark: '#343a40'
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <!-- 自定义工具类 -->
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
            .text-shadow {
                text-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            .card-hover {
                transition: all 0.3s ease;
            }
            .card-hover:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            .input-focus {
                transition: all 0.2s ease;
            }
            .input-focus:focus-within {
                transform: translateY(-2px);
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-50 min-h-screen font-sans">
    <!-- 导航栏 -->
    <?php include('./header.html'); ?>

    <!-- 主内容区 -->
    <main class="container mx-auto px-4 pt-24 pb-16">
        <div class="flex flex-col md:flex-row items-center justify-center gap-12">
            <!-- 左侧图片/信息区域 -->
            <div class="w-full md:w-1/2 hidden md:block">
                <div class="relative">
                    <!-- 背景装饰 -->
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-primary/10 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-10 -right-10 w-60 h-60 bg-secondary/10 rounded-full blur-3xl"></div>
                    
                    <!-- 主图 -->
                    <img src="./images/2.png" alt="图书馆学习环境" class="rounded-xl shadow-xl relative z-10 card-hover">
                    
                    <!-- 信息卡片 -->
                    <div class="absolute -bottom-8 -left-8 bg-white rounded-lg shadow-lg p-5 max-w-xs z-20 card-hover">
                        <div class="flex items-start gap-3">
                            <div class="bg-primary/10 p-3 rounded-full text-primary">
                                <i class="fa fa-users text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-dark">已有超过2000名学生使用</h3>
                                <p class="text-gray-600 mt-1">快速预约座位，提高学习效率</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 右侧表单区域 -->
            <div class="w-full md:w-1/2 max-w-md">
                <div class="bg-white rounded-xl shadow-xl p-8 card-hover">
                    <div class="text-center mb-8">
                        <h2 class="text-[clamp(1.8rem,3vw,2.5rem)] font-bold text-dark">登录系统</h2>
                        <p class="text-gray-600 mt-2">请使用学号和密码登录，获取座位预约权限</p>
                    </div>
                    
                    <form id="login-form" class="space-y-6">
                        <!-- 学号/工号 -->
                        <div class="input-focus">
                            <label for="student-id" class="block text-sm font-medium text-gray-700 mb-1">学号/工号</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fa fa-id-card text-gray-400"></i>
                                </div>
                                <input type="text" id="student-id" name="student-id" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-primary focus:border-primary sm:text-sm p-3 border" placeholder="请输入您的学号或工号" required>
                            </div>
                        </div>
                        
                        <!-- 密码 -->
                        <div class="input-focus">
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">密码</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fa fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" id="password" name="password" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-primary focus:border-primary sm:text-sm p-3 border" placeholder="请输入密码" required>
                                <button type="button" id="toggle-password" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- 图片验证码 -->
                        <div class="input-focus flex gap-3">
                            <div class="flex-1">
                                <label for="captcha" class="block text-sm font-medium text-gray-700 mb-1">验证码</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fa fa-shield text-gray-400"></i>
                                    </div>
                                    <input type="text" id="captcha" name="captcha" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-primary focus:border-primary sm:text-sm p-3 border" placeholder="请输入验证码" required>
                                </div>
                            </div>
                            <div class="image-container">
                                <input type="text" id="image" name="image" required>
                                <img src="image.php"  alt="验证码" onclick="this.src='image.php?' + Math.random();">
                            </div>
                        </div>
                        
                        <!-- 记住密码 -->
<!--                        <div class="flex items-center justify-between">-->
<!--                            <div class="flex items-center">-->
<!--                                <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">-->
<!--                                <label for="remember" class="ml-2 block text-sm text-gray-600">记住密码</label>-->
<!--                            </div>-->
<!--                            <a href="#" class="text-sm font-medium text-primary hover:text-primary/80 transition-colors">-->
<!--                                忘记密码?-->
<!--                            </a>-->
<!--                        </div>-->
                        
                        <!-- 提交按钮 -->
                        <div>
                            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors transform hover:scale-[1.02] active:scale-[0.98]">
                                登录
                            </button>
                        </div>
                    </form>
                    
                    <!-- 注册链接 -->
                    <div class="mt-6 text-center">
                        <p class="text-gray-600">
                            还没有账号? <a href="register.php" class="font-medium text-primary hover:text-primary/80 transition-colors">立即注册</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('./footer.html'); ?>



</body>
</html>
