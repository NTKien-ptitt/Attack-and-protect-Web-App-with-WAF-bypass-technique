# 1. Giới thiệu về Bypass WAF
WAF (Web Application Firewall) là một công cụ bảo mật thiết yếu giúp bảo vệ các ứng dụng web khỏi nhiều loại tấn công, bao gồm SQL Injection, Cross-Site Scripting (XSS), Command Injection và nhiều mối đe dọa khác. Mặc dù WAF có khả năng phát hiện và ngăn chặn các tấn công này, nhưng các kẻ tấn công cũng thường tìm cách bypass (vượt qua) các biện pháp bảo mật này để thực hiện hành vi độc hại.

# 2. Nguyên tắc hoạt động của WAF
WAF thường phân tích các yêu cầu HTTP và phản hồi từ máy chủ, sử dụng các quy tắc và mẫu để xác định liệu một yêu cầu có hợp lệ hay không. Bằng cách phát hiện các mẫu tấn công quen thuộc, WAF có thể từ chối hoặc chặn các yêu cầu đáng ngờ trước khi chúng đến ứng dụng web.

# 3. Các phương pháp Bypass WAF
Sử dụng Encoding:

Kẻ tấn công có thể mã hóa các ký tự độc hại trong yêu cầu để WAF không nhận diện được.
Ví dụ: Sử dụng URL encoding để biến % thành %25, hoặc sử dụng Base64 encoding cho các payload độc hại.
Kỹ thuật thực hiện: Nếu yêu cầu gốc là http://example.com/?input=<script>, kẻ tấn công có thể mã hóa như sau:
```bash
http://example.com/?input=%3Cscript%3E
```
Thay đổi Cú pháp:

Kẻ tấn công có thể thay đổi cú pháp của yêu cầu để tránh các mẫu mà WAF theo dõi.
Ví dụ: Sử dụng dấu cách (%20) thay cho ký tự thực tế, hoặc thay đổi thứ tự của các tham số.
Kỹ thuật thực hiện: Một yêu cầu gốc có thể là `http://example.com/?username=admin&password=12345`, kẻ tấn công có thể chuyển thành:
```bash
http://example.com/?password=12345&username=admin%20
```
Tấn công Dữ liệu Nhúng:

Một số ứng dụng cho phép chèn dữ liệu vào trong các trường hợp mà WAF không kiểm tra.
Ví dụ: Chèn mã độc vào các trường không được giám sát như User-Agent hoặc Referer.
Kỹ thuật thực hiện: Gửi một yêu cầu với User-Agent chứa mã độc:
```bash
GET / HTTP/1.1
User-Agent: <script>alert(1)</script>
```
Chia nhỏ Yêu cầu:

Bằng cách chia nhỏ payload thành nhiều yêu cầu khác nhau, kẻ tấn công có thể tránh được sự phát hiện của WAF.
Ví dụ: Thay vì gửi một yêu cầu đơn lẻ với payload độc hại, kẻ tấn công có thể chia thành hai yêu cầu.
Kỹ thuật thực hiện:
```bash
GET /page?param1=abc HTTP/1.1
GET /page?param2=def<script> HTTP/1.1
```
Sử dụng Kỹ thuật Chạy Bất đồng bộ:

Một số kẻ tấn công sử dụng kỹ thuật chạy bất đồng bộ để gửi yêu cầu qua nhiều bước khác nhau.
Ví dụ: Gửi yêu cầu đầu tiên để khởi tạo phiên làm việc, sau đó gửi yêu cầu độc hại trong yêu cầu tiếp theo.
Kỹ thuật thực hiện: Sử dụng JavaScript để thực hiện gọi AJAX đến ứng dụng web, nơi payload được chèn vào trong một yêu cầu khác.
Chuyển hướng và Proxy:

Kẻ tấn công có thể sử dụng các proxy hoặc dịch vụ chuyển hướng để gửi yêu cầu đến ứng dụng mà không trực tiếp chạm vào WAF.
Ví dụ: Sử dụng một máy chủ trung gian để gửi yêu cầu đến ứng dụng đích.
Kỹ thuật thực hiện: Kẻ tấn công có thể sử dụng một dịch vụ như Burp Suite hoặc một proxy HTTP để gửi yêu cầu:
ruby
Sao chép mã
http://proxy-server.com/?target=http://example.com/?input=<payload>
