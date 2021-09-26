# Authenticate-some-web-applications-of-KMA
  Xác thực một số ứng dựng web của HVKTMM. Đề tài ở đây chỉ tập trung vào việc xác thực ứng dụng web, không xây dựng chức năng cho dự án
  - Clone the repository
  
        git clone https://github.com/Sniper113/Authenticate-some-web-applications-of-KMA.git
 
## Mô hình
  ![image](https://user-images.githubusercontent.com/30212988/134802822-75173046-8317-4c75-8180-4417d7e12ea1.png)

## Yêu cầu hệ thống 
    - Operating Systems: Windown 10 
    - Php 7.2+ 
    - Laravel Framework: ~7.29 
    - Laravel Passport : ~9.0 
    - Database server: PhpMyadmin 
    - Xampp-control
## Khởi tạo App Server
  - Cài đặt Composer trong hệ thống  với lệnh:
     
        Composer install 
  - Cài đặt gói laravel passport thông qua trình quản lý composer 
  
        composer require laravel/passport
  - Tạo database với tên "student_management" và thực hiện migrate
       
        php artisan migrate
        php artisan passport:install
## Khởi tạo Client Side App
  - Cài đặt gói Guzzle HTTP
        
        composer require guzzlehttp/guzzle
## Thực hiện cấp uỷ quyền

Thực hiện đăng ký ứng dụng ở App Server
  
  - Việc đăng kí ứng dụng (client bao gồm client_id và client_secret) giống như vào các trang dành cho nhà phát triển.
  - Khởi chạy App Server bằng lệnh, ở đây App server sẽ chạy trên port 8000:
  
        Php artisan serve
  - Truy cập vào giao diện App Server với url: 127.0.0.1:8000 
  
![image](https://user-images.githubusercontent.com/30212988/134803799-8943eea4-0a46-4661-9d2c-fd9a79c75a41.png)

  - Đăng nhập bằng tài khoảng quản trị.

![image](https://user-images.githubusercontent.com/30212988/134803856-22b5d103-51ec-45c3-b27c-64d362055527.png)

  - Chuyển đến trang quản trị để thực hiện cấu hình OAuth2 - Passport Single Sign On như sau:  

 (1) Click vào để thực hiện cài đặt OAuth2 

 (2) Click vào để đăng ký ứng dụng.
 
 ![image](https://user-images.githubusercontent.com/30212988/134803884-ffb09a1f-8fd6-47d2-8fa2-7598a911b6bb.png)

  - Nhập thông tin đăng ký và đăng ký 
  
(1) Nhập application name 

(2) Nhập redirect url là địa chỉ client sẽ kết nối đến 

(3) Click vào create

![image](https://user-images.githubusercontent.com/30212988/134803902-a89033cb-6c02-4220-a0d7-d1677884c86c.png)

  - Sau khi đăng kí sẽ tạo ra cho chúng ta Client Id và Client Secret. ClientId được sử dụng để cài đặt cho ứng dụng website khác cần sử dụng App Server này để login.

![image](https://user-images.githubusercontent.com/30212988/134803980-b84dc4b6-ba50-4904-9f83-8eab2a25bdee.png)

 - khởi chạy Client Side App với port 8001
 
       Php artisan serve --port=8001
       
![image](https://user-images.githubusercontent.com/30212988/134804058-4a7d893d-fd83-4c06-adf8-c256d6a48799.png)

- Khi người dùng click vào “Đăng nhập với HVKTMM!” thì sẽ yêu cầu phải xác thực nên, nó chuyển hướng tiếp đến trang đăng nhập của App Server. Sau khi đăng nhập xong, sẽ chuyển hướng và hiện ra thông báo người dùng cần ủy quyền cho ứng dụng Client Side App
- Người dùng bấm vào “Authorize” để ủy quyền cho ứng dụng. App Server sẽ kiểm tra thông tin Client Id, Client Secret kèm theo mã ủy quyền, nếu xác thực thành công thì trả về access token và refresh token cho Client Side App. Khi đó Client Side App đã có được access token và refresh token. Do đó nó biết được người dùng đã xác thực thành công. Khi đó thì có thể lấy được thông tin người dùng.

![image](https://user-images.githubusercontent.com/30212988/134804121-6bd4e192-b9e0-4303-8a64-6326016791fa.png)


        
