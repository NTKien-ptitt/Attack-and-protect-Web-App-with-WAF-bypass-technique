# Kho lưu trữ [Bypass-Four03](https://github.com/nazmul-ethi/Bypass-Four03) 
- Là một công cụ hỗ trợ bypass mã lỗi **HTTP 403 (Forbidden)**.
- HTTP 403 thường xuất hiện khi máy chủ từ chối truy cập vào một tài nguyên cụ thể do không có quyền hoặc chính sách bảo mật chặn truy cập.

## **Cách hoạt động của công cụ Bypass-Four03**
1. **Thay đổi User-Agent**: Máy chủ đôi khi chặn truy cập dựa trên User-Agent. Bằng cách thay đổi User-Agent, ta có thể đánh lừa máy chủ rằng yêu cầu đến từ một trình duyệt hoặc bot khác.
2. **Thêm/Chỉnh sửa Header**: Một số trường hợp, việc thêm hoặc sửa đổi các header như `X-Forwarded-For` hoặc `Referer` có thể đánh lừa máy chủ cấp quyền.
3. **Sử dụng Encoding hoặc Obfuscation**: Một số payload được mã hóa hoặc làm mờ (obfuscated) có thể giúp vượt qua cơ chế bảo vệ.
4. **Thử các phương pháp bypass khác**: Như thay đổi phương thức HTTP (GET/POST), thêm dấu `/`, hoặc truy cập bằng IP thay vì domain.

---

## **Hướng dẫn sử dụng**
1. **Cài đặt yêu cầu**:
   - Clone kho lưu trữ:
     ```bash
      git clone https://github.com/nazmul-ethi/Bypass-Four03.git
      cd Bypass-Four03/
      sudo chmod +x bypass-Four03.sh
      sudo apt install curl jq figlet
     ```

2. **Chạy công cụ**:
   Ví dụ: kiểm tra URL bị chặn 403
   ```bash
   ./bypass-Four03.sh [URL] [path]

   ./bypass-Four03.sh https://example.com admin
   ./bypass-Four03.sh https://example.com admin/index.php
   ./bypass-Four03.sh https://example.com server-status

Options:
  -h, --help    Show this help menu
   ```
   Các tùy chọn cơ bản:
   - `-u`: URL cần kiểm tra.
   - `-H`: Thêm custom header nếu cần.
   - `-p`: Sử dụng proxy (nếu có).


