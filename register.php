<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图书馆预约系统 - 注册</title>
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
                    <img src="./images/3.jpg" alt="图书馆学习环境" class="rounded-xl shadow-xl relative z-10 card-hover">
                    
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
                        <h2 class="text-[clamp(1.8rem,3vw,2.5rem)] font-bold text-dark">创建账户</h2>
                        <p class="text-gray-600 mt-2">加入图书馆预约系统，开始享受便捷的座位预约服务</p>
                    </div>
                    
                    <form id="registration-form" class="space-y-5">
                        
                        <!-- 学号/工号 -->
                        <div>
                            <label for="student-id" class="block text-sm font-medium text-gray-700 mb-1">学号/工号</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fa fa-id-card text-gray-400"></i>
                                </div>
                                <input type="text" id="student-id" name="student-id" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-primary focus:border-primary sm:text-sm p-3 border" placeholder="请输入您的学号或工号" required>
                            </div>
                        </div>
                        
                        
                        
                        <!-- 密码 -->
                        <div>
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
                        
                        <!-- 确认密码 -->
                        <div>
                            <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-1">确认密码</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fa fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" id="confirm-password" name="confirm-password" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-primary focus:border-primary sm:text-sm p-3 border" placeholder="请再次输入密码" required>
                                <button type="button" id="toggle-confirm-password" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        
                        
                        <!-- 同意条款 -->
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" class="focus:ring-primary h-4 w-4 text-primary border-gray-300 rounded" required>
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="text-gray-600">我已阅读并同意<a href="#" class="text-primary hover:underline">《用户协议》</a>和<a href="#" class="text-primary hover:underline">《隐私政策》</a></label>
                            </div>
                        </div>
                        
                        <!-- 提交按钮 -->
                        <div>
                            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors">
                                注册
                            </button>
                        </div>
                    </form>
                    
                    <!-- 登录链接 -->
                    <div class="mt-6 text-center">
                        <p class="text-gray-600">
                            已有账号? <a href="login.php" class="font-medium text-primary hover:text-primary/80 transition-colors">立即登录</a>
                        </p>
                    </div>
                    
                    
                    </div>
                </div>
            </div>
        </div>
    </main>

   <!-- 引入页脚 -->
    <?php include 'footer.html'; ?>

    <!-- 成功提示模态框 -->
    <div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-xl p-8 max-w-md w-full mx-4 transform transition-all scale-95 opacity-0" id="modal-content">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-green-100 text-green-600 mb-4">
                    <i class="fa fa-check text-2xl"></i>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">注册成功！</h3>
                <p class="text-gray-600 mb-6">您的账户已创建，即将跳转到登录页面</p>
                <button id="close-modal" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors">
                    确定
                </button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        
        
        // 滚动时导航栏样式变化
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 10) {
                header.classList.add('shadow-md');
                header.classList.remove('shadow-sm');
            } else {
                header.classList.remove('shadow-md');
                header.classList.add('shadow-sm');
            }
        });
        
        // 密码显示/隐藏切换
        const togglePassword = document.getElementById('toggle-password');
        const password = document.getElementById('password');
        
        togglePassword.addEventListener('click', () => {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            togglePassword.querySelector('i').classList.toggle('fa-eye');
            togglePassword.querySelector('i').classList.toggle('fa-eye-slash');
        });
        
        const toggleConfirmPassword = document.getElementById('toggle-confirm-password');
        const confirmPassword = document.getElementById('confirm-password');
        
        toggleConfirmPassword.addEventListener('click', () => {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            toggleConfirmPassword.querySelector('i').classList.toggle('fa-eye');
            toggleConfirmPassword.querySelector('i').classList.toggle('fa-eye-slash');
        });
        
        
        
        // 表单提交
        const registrationForm = document.getElementById('registration-form');
        const successModal = document.getElementById('success-modal');
        const modalContent = document.getElementById('modal-content');
        const closeModal = document.getElementById('close-modal');
        
        registrationForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // 表单验证（实际项目中需要更完善的验证）
            const passwordValue = password.value;
            const confirmPasswordValue = confirmPassword.value;
            
            if (passwordValue !== confirmPasswordValue) {
                alert('两次输入的密码不一致，请重新输入');
                return;
            }
            
            // 显示成功模态框
            successModal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 10);
        });
        
        // 关闭模态框
        closeModal.addEventListener('click', () => {
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');
            
            setTimeout(() => {
                successModal.classList.add('hidden');
                // 实际项目中这里应该跳转到登录页面
                // window.location.href = 'login.html';
            }, 300);
        });
        
        // 点击模态框外部关闭
        successModal.addEventListener('click', (e) => {
            if (e.target === successModal) {
                closeModal.click();
            }
        });
        
        // 表单输入框焦点效果
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('scale-105');
                input.parentElement.classList.add('transition-transform');
            });
            
            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('scale-105');
            });
        });
    </script>
</body>
</html>
