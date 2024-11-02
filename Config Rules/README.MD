# ModSecurity Rule Guide

ModSecurity là một công cụ tường lửa ứng dụng web (WAF), giúp bảo vệ ứng dụng khỏi các cuộc tấn công như XSS, SQL Injection, và Command Injection. Bằng cách sử dụng các quy tắc (rules), ModSecurity có thể lọc và giám sát các yêu cầu HTTP nhằm phát hiện và ngăn chặn các hành vi nguy hiểm.

## 1. Các Thành Phần của Một Quy Tắc ModSecurity

Một quy tắc trong ModSecurity thường bao gồm ba phần chính:

- **Phase (Giai đoạn)**: Xác định giai đoạn mà quy tắc sẽ được áp dụng trong vòng đời của yêu cầu HTTP. Ví dụ:
  - `Phase 1`: Quy tắc áp dụng ngay khi nhận được yêu cầu từ client.
  - `Phase 2`: Quy tắc xử lý trong quá trình phân tích dữ liệu của yêu cầu.
  - `Phase 4`: Quy tắc áp dụng khi server chuẩn bị gửi phản hồi về cho client.

- **Condition (Điều kiện)**: Đây là các điều kiện để kích hoạt quy tắc, ví dụ như:
  - Kiểm tra các mẫu chuỗi trong URL hoặc tham số yêu cầu (ARGS) để phát hiện các ký tự nguy hiểm hoặc các chuỗi đáng ngờ.
  - Áp dụng các điều kiện cụ thể cho từng phần của yêu cầu (URI, Headers, Body) để phát hiện các mối đe dọa.

- **Action (Hành động)**: Hành động sẽ được thực hiện khi điều kiện trong quy tắc thỏa mãn. Các hành động phổ biến bao gồm:
  - `deny`: Từ chối truy cập.
  - `log`: Ghi lại thông tin vào nhật ký.
  - `redirect`: Chuyển hướng người dùng đến một URL khác.

## 2. Ví dụ về Quy Tắc ModSecurity

Dưới đây là một ví dụ đơn giản về quy tắc ModSecurity để chặn các yêu cầu chứa chuỗi `"cmd="`, một dấu hiệu thường gặp trong các cuộc tấn công lệnh (command injection):

```plaintext
SecRule ARGS "cmd=" "id:1001,phase:2,deny,status:403,msg:'Command Injection detected'"
```
`SecRule ARGS "cmd="`: Quy tắc này sẽ kiểm tra xem các tham số của yêu cầu có chứa chuỗi "cmd=" hay không. Nếu chuỗi này tồn tại, quy tắc sẽ được kích hoạt.
`id:1001`: Mỗi quy tắc ModSecurity cần có một ID duy nhất để phân biệt. Ở đây, ID của quy tắc là 1001.
`phase:2`: Quy tắc sẽ thực thi trong phase 2, tức là trong quá trình xử lý dữ liệu của yêu cầu HTTP.
`deny, status:403`: Từ chối yêu cầu và trả về mã trạng thái 403 (Forbidden).
`msg`:'Command Injection detected': Ghi lại thông báo 'Command Injection detected' vào nhật ký để dễ dàng theo dõi.
