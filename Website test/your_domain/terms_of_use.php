<?php
// download.php
if (isset($_GET['file'])) {
    // Lấy tên file từ query parameter
    $file = $_GET['file'];
    
    // Cố gắng tải file
    $file_path = '/var/www/your_domain/' . $file;
    
    // Kiểm tra xem file có tồn tại không
    if (file_exists($file_path)) {
        // Thiết lập header để tải file
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));
        readfile($file_path);
        exit;
    } else {
        echo "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tải file</title>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px 20px;
            background: #fff;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5em;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }

        h2 {
            color: #2980b9;
            margin: 25px 0 15px;
            font-size: 1.8em;
        }

        h3 {
            color: #16a085;
            margin: 20px 0 10px;
            font-size: 1.3em;
        }

        p {
            margin-bottom: 15px;
            text-align: justify;
        }

        .contact-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 5px solid #3498db;
        }

        form {
            margin-top: 30px;
            text-align: center;
        }

        input[type="text"] {
            padding: 12px;
            width: 300px;
            border: 2px solid #bdc3c7;
            border-radius: 5px;
            margin-right: 10px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 12px 25px;
            background: #2ecc71;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #27ae60;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.3);
        }

        @media screen and (max-width: 600px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 2em;
            }

            h2 {
                font-size: 1.5em;
            }

            input[type="text"],
            input[type="submit"] {
                width: 100%;
                margin-bottom: 10px;
            }
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            animation: fadeIn 0.8s ease;
        }

        strong {
            color: #e74c3c;
        }
        
        
        
        
        
        
        
        form {
            max-width: 500px;
            margin: 30px auto;
            padding: 20px;
            background: linear-gradient(145deg, #f0f0f0, #ffffff);
            border-radius: 15px;
            box-shadow: 5px 5px 15px rgba(0,0,0,0.1);
        }

        .sss {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            color: #666;
            background: #fff;
            transition: all 0.3s ease;
        }

        .sss:focus {
            outline: none;
            border-color: #4CAF50;
            box-shadow: 0 0 8px rgba(76,175,80,0.3);
        }

        button {
            width: 100%;
            padding: 12px 25px;
            background: linear-gradient(45deg, #4CAF50, #45a049);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        button:hover {
            background: linear-gradient(45deg, #45a049, #4CAF50);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(76,175,80,0.4);
        }

        button:active {
            transform: translateY(0);
        }

        /* Animation */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        form {
            animation: slideIn 0.5s ease-out;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            form {
                margin: 15px;
                padding: 15px;
            }

            .sss, button {
                font-size: 14px;
                padding: 10px;
            }
    </style>
</head>
<body>
 <div class="container">
         <h1>Điều Khoản Sử Dụng</h1>
    
    <h2>1. Giới Thiệu</h2>
    <p>Chào mừng bạn đến với trang web mua sách của chúng tôi. Bằng việc truy cập và sử dụng trang web này, bạn đồng ý tuân thủ các điều khoản và điều kiện được nêu dưới đây. Nếu bạn không đồng ý với bất kỳ điều khoản nào, vui lòng không sử dụng trang web.</p>
    
    <h2>2. Định Nghĩa</h2>
    <p><strong>Người Dùng:</strong> Là cá nhân hoặc tổ chức truy cập và sử dụng trang web.</p>
    <p><strong>Sản Phẩm:</strong> Bao gồm tất cả các loại sách và sản phẩm liên quan được cung cấp trên trang web.</p>
    <p><strong>Dịch Vụ:</strong> Bao gồm tất cả các dịch vụ mà trang web cung cấp, bao gồm nhưng không giới hạn ở việc mua bán sách, giao hàng, hỗ trợ khách hàng.</p>
    
    <h2>3. Quyền và Nghĩa Vụ của Người Dùng</h2>
    <h3>3.1 Quyền của Người Dùng</h3>
    <p>Người dùng có quyền truy cập vào tất cả các phần của trang web và thực hiện các giao dịch mua sắm theo quy định.</p>
    <p>Người dùng có quyền yêu cầu hỗ trợ và tư vấn từ đội ngũ chăm sóc khách hàng.</p>
    
    <h3>3.2 Nghĩa Vụ của Người Dùng</h3>
    <p>Người dùng phải cung cấp thông tin chính xác và đầy đủ khi đăng ký tài khoản hoặc thực hiện giao dịch.</p>
    <p>Người dùng cam kết không sử dụng trang web cho các mục đích bất hợp pháp hoặc vi phạm quyền lợi của bên thứ ba.</p>
    
    <h2>4. Quyền và Nghĩa Vụ của Chúng Tôi</h2>
    <h3>4.1 Quyền của Chúng Tôi</h3>
    <p>Chúng tôi có quyền sửa đổi, bổ sung hoặc xóa bỏ các điều khoản, điều kiện mà không cần thông báo trước.</p>
    <p>Chúng tôi có quyền từ chối dịch vụ cho bất kỳ người dùng nào trong trường hợp vi phạm điều khoản sử dụng.</p>
    
    <h3>4.2 Nghĩa Vụ của Chúng Tôi</h3>
    <p>Chúng tôi cam kết cung cấp thông tin chính xác về sản phẩm và dịch vụ.</p>
    <p>Chúng tôi sẽ nỗ lực hết sức để đảm bảo trang web hoạt động ổn định và an toàn.</p>
    
    <h2>5. Chính Sách Bán Hàng</h2>
    <h3>5.1 Đặt Hàng</h3>
    <p>Người dùng có thể đặt hàng trực tuyến thông qua trang web. Các đơn hàng sẽ được xử lý trong thời gian sớm nhất có thể.</p>
    <p>Sau khi đặt hàng, người dùng sẽ nhận được xác nhận qua email về chi tiết đơn hàng.</p>
    
    <h3>5.2 Thanh Toán</h3>
    <p>Chúng tôi chấp nhận nhiều hình thức thanh toán, bao gồm thẻ tín dụng, chuyển khoản ngân hàng và các hình thức thanh toán trực tuyến khác.</p>
    <p>Người dùng có trách nhiệm đảm bảo rằng thông tin thanh toán là chính xác và đầy đủ.</p>
    
    <h3>5.3 Giao Hàng</h3>
    <p>Thời gian giao hàng sẽ được thông báo khi xác nhận đơn hàng. Chúng tôi sẽ nỗ lực giao hàng đúng hẹn, nhưng không thể đảm bảo vào thời gian chính xác do các yếu tố bất khả kháng.</p>
    
    <h2>6. Chính Sách Đổi Trả</h2>
    <p>Người dùng có quyền đổi hoặc trả sản phẩm trong vòng 7 ngày kể từ ngày nhận hàng, với điều kiện sản phẩm còn nguyên vẹn và chưa sử dụng.</p>
    <p>Đối với các sản phẩm bị lỗi, vui lòng liên hệ với chúng tôi để được hướng dẫn cụ thể về quy trình đổi trả.</p>
    
    <h2>7. Bảo Mật Thông Tin</h2>
    <p>Chúng tôi cam kết bảo mật thông tin cá nhân của người dùng. Thông tin của bạn sẽ chỉ được sử dụng cho mục đích xử lý đơn hàng và cải thiện dịch vụ của chúng tôi.</p>
    
    <h2>8. Trách Nhiệm</h2>
    <p>Chúng tôi không chịu trách nhiệm cho bất kỳ thiệt hại nào phát sinh từ việc sử dụng hoặc không thể sử dụng trang web, bao gồm nhưng không giới hạn ở mất mát dữ liệu, lợi nhuận hoặc các thiệt hại gián tiếp khác.</p>
    
    <h2>9. Luật Áp Dụng</h2>
    <p>Các điều khoản và điều kiện này sẽ được điều chỉnh bởi pháp luật của [quốc gia hoặc khu vực]. Mọi tranh chấp phát sinh sẽ được giải quyết tại tòa án có thẩm quyền.</p>
    
    <h2>10. Liên Hệ</h2>
    <div class="contact-info">
        <p>Nếu bạn có bất kỳ câu hỏi nào về các điều khoản sử dụng này, vui lòng liên hệ với chúng tôi tại:</p>
        <p>Email: [email@example.com]</p>
        <p>Điện thoại: [số điện thoại]</p>
        <p>Địa chỉ: [địa chỉ công ty]</p>
    </div>

     

    </div>

    
    
</body>
</html>
