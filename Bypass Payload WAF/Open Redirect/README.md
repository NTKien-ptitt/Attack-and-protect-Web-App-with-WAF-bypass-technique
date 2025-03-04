### **Open Redirect là gì?**

**Open Redirect** (Chuyển hướng mở) là một lỗ hổng bảo mật xảy ra khi một ứng dụng web hoặc hệ thống cho phép người dùng chuyển hướng đến các URL bên ngoài mà không kiểm tra hoặc xác thực đầy đủ. Kẻ tấn công có thể lợi dụng lỗ hổng này để chuyển hướng nạn nhân đến các trang web độc hại hoặc giả mạo.

---

### **Cách hoạt động của Open Redirect:**

1. Ứng dụng web thường sử dụng tính năng chuyển hướng để điều hướng người dùng đến các URL khác, ví dụ:
   - Sau khi đăng nhập thành công, người dùng được chuyển hướng đến trang đích.
   - Một liên kết chuyển hướng trong email hoặc thông báo.

2. Khi lỗ hổng Open Redirect tồn tại, ứng dụng không kiểm tra tính hợp lệ của URL đích. Kẻ tấn công có thể chèn một URL độc hại vào tham số chuyển hướng, ví dụ:
   ```
   https://example.com/redirect?url=https://malicious-site.com
   ```
   hoac
   ```

   https://example.com/%00/malicious-site.com
   
   ```

4. Khi nạn nhân nhấp vào liên kết, họ sẽ bị chuyển hướng đến trang web của kẻ tấn công.

---

### **Hậu quả của Open Redirect:**

- **Phishing (Lừa đảo):** Kẻ tấn công có thể dẫn dụ nạn nhân đến một trang web giả mạo, yêu cầu nhập thông tin cá nhân hoặc tài khoản.
- **Malware Delivery (Phát tán mã độc):** Nạn nhân bị chuyển hướng đến một trang tải mã độc mà không hay biết.
- **Lạm dụng danh tiếng:** Trang web hợp pháp bị lợi dụng để tạo lòng tin với người dùng trước khi chuyển hướng.

---

### **Ví dụ thực tế:**

Một trang web có URL chuyển hướng:
```
https://example.com/redirect?url=https://trusted-site.com
```

Nếu không có biện pháp kiểm tra, kẻ tấn công có thể thay thế `https://trusted-site.com` bằng URL độc hại:
```
https://example.com/redirect?url=https://malicious-site.com
```

Nạn nhân nhấp vào liên kết tin rằng họ sẽ đến "example.com", nhưng thực tế bị chuyển hướng sang "malicious-site.com".

---

1. **Sử dụng ký tự `\` (dấu gạch chéo ngược):**
   - Thay vì sử dụng `//`, bạn có thể thử sử dụng `\` để bypass bộ lọc.
   - **Ví dụ:** `https:\evil.com`

2. **Sử dụng ký tự `%23` (mã hóa của `#`):**
   - Nếu bộ lọc chặn ký tự `#`, bạn có thể sử dụng `%23` để thay thế.
   - **Ví dụ:** `https://example.com?redirect=evil.com%23example.com`

3. **Sử dụng ký tự `%2e` (mã hóa của `.`):**
   - Thay thế dấu chấm `.` bằng `%2e` để bypass bộ lọc.
   - **Ví dụ:** `https://example.com?redirect=example%2ecom%2eevil.com`

4. **Sử dụng ký tự `%40` (mã hóa của `@`):**
   - Sử dụng `%40` để thay thế ký tự `@` trong URL.
   - **Ví dụ:** `https://example.com?redirect=example.com%40evil.com`

5. **Sử dụng ký tự `°`:**
   - Chèn ký tự `°` vào URL để bypass bộ lọc.
   - **Ví dụ:** `https://example.com?redirect=example.com/°evil.com`

6. **Sử dụng ký tự `%0d` hoặc `%0a` (mã hóa của ký tự xuống dòng):**
   - Chèn các ký tự này vào URL để bypass bộ lọc.
   - **Ví dụ:** `https://example.com?redirect=/%0d/evil.com`

---

