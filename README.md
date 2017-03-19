# DackyVanTien
Share source code game Đắc Kỷ 1.4.7


## Yêu cầu cơ bản
Một số yêu cầu và các điểm cần lưu ý khi cài đặt game Đắc Kỷ

1. Game chỉ hoạt động trên nền WIN 32bit
2. Cần phải có .NET Framework 2.0

## Cơ sở dữ liệu Mysql
Huớng dẫn cài đặt cơ sở dữ liệu

1. Giải nén thư mục ___Server___ vào ổ C:
2. Chạy file mysql.bat với quyền Admin (run as Administrator)
3. Tài khoản mặc định user=___root___ password=___WMeRc2xb___
4. Khi muốn đóng, bật Task Manager lên tìm process mysql-nt, đóng process là xong

## Hướng dẫn thiết lập và chạy game trên máy cá nhân
Thư mục lưu file chạy máy chủ có tên là ___s1___
Cần lưu ý và phải thực hiện đầy đủ các bước được yêu cầu như sau

Lần đầu chạy máy chủ:

1. Chạy file Module_Reg.bat bằng quyền Admin (nếu xảy ra lỗi, chạy thủ lại lần nữa, nếu vẫn bị lỗi thì báo lại với mình để được hỗ trợ)

Khởi chạy máy chủ cho các lần sau:

1. Chạy file mysql.bat để chạy database (nếu chưa chạy - nhớ chỉ cần chạy 1 lần duy nhất)
2. Chạy file ChatServer.exe bằng quyền admin và đợi khoảng 3-5 giây
3. Chạy file GameServer.exe bằng quyền admin và đợi đến khi hoàn tất!
4. Chạy file stop.bat để dừng máy chủ
