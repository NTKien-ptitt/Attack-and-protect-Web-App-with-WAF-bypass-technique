def remove_duplicates(file_path):
    try:
        # Đọc nội dung từ tệp với mã hóa UTF-8
        with open(file_path, 'r', encoding='utf-8') as file:
            lines = file.readlines()

        # Loại bỏ các dòng trùng lặp
        unique_lines = list(set(lines))

        # Ghi lại nội dung không trùng lặp vào tệp với mã hóa UTF-8
        with open(file_path, 'w', encoding='utf-8') as file:
            file.writelines(sorted(unique_lines))

        print("Đã loại bỏ các dòng trùng lặp thành công.")
    except Exception as e:
        print(f"Lỗi: {e}")

# Đường dẫn tới tệp txt cần xử lý
file_path = 'input.txt'
remove_duplicates(file_path)
