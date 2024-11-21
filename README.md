# Tấn công và bảo vệ ứng dụng web bằng kỹ thuật bỏ qua WAF
## Thiết lập môi trường thử nghiệm
- [Bước 1: Cài đặt các gói cần thiết](#bước-1-cài-đặt-các-gói-cần-thiết)
- [Bước 2: Tải và cài đặt ModSecurity](#bước-2-tải-và-cài-đặt-modsecurity)
- [Bước 3: Tải và cài đặt ModSecurity Nginx Connector](#bước-3-tải-và-cài-đặt-modsecurity-nginx-connector)
- [Bước 4: Tải và biên dịch phiên bản Nginx phù hợp với ModSecurity](#bước-4-tải-và-biên-dịch-phiên-bản-nginx-phù-hợp-với-modsecurity)
- [Bước 5: Cấu hình Nginx để sử dụng ModSecurity](#bước-5-cấu-hình-nginx-để-sử-dụng-modsecurity)
- [Bước 6: Cấu hình rule để bảo vệ website](#bước-6-cấu-hình-rule-để-bảo-vệ-website)


1. [Hướng dẫn cấu hình quy tắc WAF](https://github.com/NTKien-ptitt/Attack-and-protect-Web-App-with-WAF-bypass-technique/blob/main/Config%20Rules/README.MD)
   
2. [Tải trọng vượt qua WAF](https://github.com/NTKien-ptitt/Attack-and-protect-Web-App-with-WAF-bypass-technique/blob/main/Bypass%20Payload%20WAF/README.MD)
   

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
Cấu hình Nginx với ModSecurity:
```bash
./configure --with-compat --add-dynamic-module=../ModSecurity-nginx
make modules
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

## Bước 6: Cấu hình rule để bảo vệ website

Truy cập đến dường dẫn `/etc/nginx/modsec/main.conf`.

thêm các rule vào trong file `main.conf`.

Khởi động lại hệ thống
```bash
systemctl restart nginx
```



# Tham khảo


