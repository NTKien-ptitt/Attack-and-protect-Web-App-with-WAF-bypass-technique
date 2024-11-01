# Tấn công và bảo vệ ứng dụng web bằng kỹ thuật bỏ qua WAF
## Bước 1: Cài đặt các gói cần thiết

Đảm bảo bạn đã cài đặt các gói để biên dịch Nginx và ModSecurity.

Chạy các lệnh sau để cài đặt các gói cần thiết:

```bash
sudo apt install nginx
sudo apt update
sudo apt install git build-essential libtool libpcre3-dev libssl-dev zlib1g-dev wget
```
## Bước 2: Tải và cài đặt ModSecurity
Clone ModSecurity từ GitHub:
```bash

git clone https://github.com/owasp-modsecurity/ModSecurity
cd ModSecurity
git submodule init
git submodule update
```
Xây dựng và cài đặt ModSecurity:

```bash
./build.sh
./configure
make
sudo make install
```

## Bước 3: Tải và cài đặt ModSecurity Nginx Connector
Clone ModSecurity-nginx từ GitHub:
```bash
git clone https://github.com/owasp-modsecurity/ModSecurity-nginx
cd ModSecurity-nginx
```
Cấu hình Nginx với ModSecurity:
```bash
./configure --with-compat --add-dynamic-module=../ModSecurity-nginx
make modules
```
## Bước 4: Tải và biên dịch phiên bản Nginx phù hợp với ModSecurity
```bash
nginx -v
```
Tải Nginx phiên bản 1.18.0:
```bash
wget http://nginx.org/download/nginx-1.18.0.tar.gz
tar -zxvf nginx-1.18.0.tar.gz
cd nginx-1.18.0
```

Biên dịch và cài đặt Nginx:
```bash
make
sudo make install
```
## Bước 5: Cấu hình Nginx để sử dụng ModSecurity
Chỉnh sửa tệp cấu hình Nginx (/etc/nginx/nginx.conf).
Mở file cấu hình:
```bash
sudo nano /etc/nginx/nginx.conf
```
Thêm dòng sau vào trong phần http:
```bash
load_module modules/ngx_http_modsecurity_module.so;

http {
    modsecurity on;
    modsecurity_rules_file /etc/nginx/modsec/main.conf;
    ...
}
```
Bật Rules trong file cấu hình /etc/nginx/modsec/main.conf
```bash
SecRuleEngine On
```

Kiểm tra cấu hình Nginx:
```bash
sudo nginx -t
```
Khởi động lại Nginx:
```bash
sudo systemctl restart nginx
```
