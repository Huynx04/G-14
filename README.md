# 🍽️ Cookable
Chào mừng bạn đến với Cookabe! Đây là một dự án website nấu ăn toàn diện giúp người dùng khám phá các công thức nấu ăn mới, cải thiện kỹ năng nấu nướng và chia sẻ những sáng tạo ẩm thực của mình.

## 🚀 Tính Năng
### Cơ Bản
- Đăng Kí, Đăng Nhập, Đổi Mật Khẩu: Đăng kí, đăng nhập và đặt lại mật khẩu người dùng an toàn.
- Xem Công Thức Nấu Ăn: Duyệt và khám phá nhiều công thức nấu ăn phong phú.
- Viết Blog (Trang Quản Trị): Quản trị viên có thể tạo và quản lý các bài viết blog liên quan đến nấu ăn và công thức.
- Tìm Công Thức Theo Nguyên Liệu Có Sẵn: Tìm công thức nấu ăn dựa trên các nguyên liệu bạn có.
- Tính Lượng Calo Cần Tiêu Thụ Trong Một Ngày: Tính toán lượng calo cần thiết hàng ngày dựa trên mục tiêu của bạn (tăng cân, tăng cơ, giảm cân).
- Mua Sắm: Tích hợp chức năng thương mại điện tử để mua các mặt hàng liên quan đến nấu ăn.
- Giao Diện Di Động: Thiết kế hoàn toàn tương thích với mọi thiết bị.
### Nâng Cao
- Gợi Ý Tự Động: Gợi ý thông minh cho sản phẩm khi bạn nhập liệu.
- Hoàn Thành Tự Động: Chức năng tìm kiếm nâng cao với các tính năng hoàn thành tự động.
- Tích Hợp AI - Chatbot: Chatbot tương tác sử dụng ChatGPT Turbo 3.5 (có phí).
- Nhận Diện Nguyên Liệu Bằng Hình Ảnh: Sử dụng nhận diện hình ảnh để xác định nguyên liệu từ các ảnh tải lên.
### Bonus
- Video giữa kì (298 Lượt Thích)
- Triển Khai Web: Được triển khai trên dịch vụ lưu trữ mạnh mẽ và mở rộng.
- Điểm Google PageSpeed và SEO 91: Tối ưu hóa cho hiệu suất và xếp hạng công cụ tìm kiếm.
### 🎨 Thiết Kế UI/UX
***Website của chúng tôi có thiết kế thân thiện với người dùng và hấp dẫn về mặt hình ảnh, giúp bạn dễ dàng điều hướng và tìm kiếm các công thức nấu ăn cần thiết. Chúng tôi tập trung vào sự đơn giản và tính năng để mang đến trải nghiệm người dùng tốt nhất.***

## 🛠️ Công Nghệ Sử Dụng
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MyPhPadmin
Tích Hợp AI: OpenAI API cho ChatGPT Turbo 3.5
Quản Lý Phiên Bản: Git, GitHub

## 📧 Liên Hệ
Nếu bạn có bất kỳ câu hỏi nào hoặc cần trợ giúp thêm, xin vui lòng liên hệ với chúng tôi:
Facebook: [Cookable WithEase](https://www.facebook.com/profile.php?id=61560046265826)
Instagram: Cookable CookWithEase



**1.	Nên dùng NodeJS với CSDL nào?**
Khi lựa chọn cơ sở dữ liệu (CSDL) để sử dụng với Node.js, cần xem xét nhiều yếu tố như loại ứng dụng, yêu cầu về hiệu suất, quy mô dữ liệu, tính phức tạp của truy vấn và sự quen thuộc của đội ngũ phát triển. Dưới đây là một số CSDL phổ biến và lý do vì sao chúng có thể phù hợp với Node.js trong các tình huống thực tế:
Nếu ứng dụng của bạn cần khả năng mở rộng, không cấu trúc dữ liệu chặt chẽ: MongoDB.
Loại: NoSQL (Document Store)
Lý do sử dụng:
JSON-like Document Storage: MongoDB lưu trữ dữ liệu dưới dạng BSON (Binary JSON), rất phù hợp với Node.js vì cả hai đều sử dụng JavaScript.
Scalability: Khả năng mở rộng tốt với các tính năng sharding.
Flexible Schema: Không cần schema cố định, dễ dàng thay đổi cấu trúc dữ liệu.
Community and Ecosystem: Có nhiều tài nguyên và công cụ hỗ trợ cộng đồng Node.js.
Nếu ứng dụng yêu cầu dữ liệu có cấu trúc và cần hiệu suất truy vấn cao: MySQL hoặc PostgreSQL.
- MySQL
1. Tính ổn định và phổ biến
Wide Adoption: MySQL là một trong những cơ sở dữ liệu được sử dụng rộng rãi nhất trên thế giới, được nhiều công ty lớn và dự án nhỏ sử dụng.
Community Support: Có một cộng đồng người dùng lớn, nhiều tài liệu và các diễn đàn hỗ trợ.
2. Hiệu suất cao
Performance: MySQL được tối ưu hóa cho các truy vấn đọc và ghi nhanh, đặc biệt là với các cấu trúc bảng lớn và nhiều chỉ mục.
InnoDB Storage Engine: Sử dụng InnoDB làm engine lưu trữ mặc định, hỗ trợ các tính năng như giao dịch (transactions) và khóa hàng (row-level locking), đảm bảo hiệu suất và tính toàn vẹn dữ liệu.
3. Dễ dàng sử dụng và quản lý
Ease of Use: MySQL dễ cài đặt, cấu hình và sử dụng, có nhiều công cụ quản lý như phpMyAdmin.
Integration: Dễ dàng tích hợp với các framework và công cụ khác, nhiều thư viện Node.js hỗ trợ MySQL (như mysql2 hoặc sequelize).
-PostgreSQL
1. Tính năng nâng cao
Advanced SQL Features: PostgreSQL hỗ trợ nhiều tính năng SQL nâng cao như các kiểu dữ liệu tùy chỉnh, JSONB, HSTORE, truy vấn toàn văn (full-text search), và các hàm cửa sổ (window functions).
Data Integrity: PostgreSQL có hệ thống ràng buộc dữ liệu mạnh mẽ, đảm bảo tính toàn vẹn dữ liệu tốt hơn so với nhiều cơ sở dữ liệu khác.
2. Hiệu suất và khả năng mở rộng
Performance: PostgreSQL tối ưu cho các truy vấn phức tạp, nhiều chỉ mục và xử lý dữ liệu lớn.
Scalability: Hỗ trợ tốt cho việc mở rộng quy mô và quản lý dữ liệu lớn.
3. Mở rộng và tùy chỉnh
Extensibility: PostgreSQL cho phép mở rộng và tùy chỉnh thông qua các extension, có thể tạo các hàm mới bằng nhiều ngôn ngữ lập trình khác nhau.
Rich Ecosystem: Có nhiều công cụ và thư viện hỗ trợ, cùng với một cộng đồng phát triển mạnh mẽ.
4. Tính tương thích với Node.js
ORM Support: Nhiều thư viện ORM trong Node.js hỗ trợ PostgreSQL (như sequelize và TypeORM), giúp dễ dàng quản lý cơ sở dữ liệu và tạo các truy vấn phức tạp.
npm Packages: Các package như pg (node-postgres) hỗ trợ kết nối và làm việc với PostgreSQL một cách dễ dàng và hiệu quả.
Sử dụng MySQL:
Khi cần một cơ sở dữ liệu dễ sử dụng, cấu hình đơn giản, hiệu suất cao cho các truy vấn đọc/ghi thông thường.
Khi ứng dụng yêu cầu tính ổn định và có thể dự đoán trước về hiệu suất.
Khi cần một giải pháp đã được thử nghiệm và chứng minh trong nhiều dự án thực tế.
Sử dụng PostgreSQL:
Khi ứng dụng yêu cầu các tính năng SQL nâng cao hoặc các kiểu dữ liệu phức tạp.
Khi cần tính toàn vẹn dữ liệu và các ràng buộc dữ liệu mạnh mẽ.
Khi ứng dụng có các truy vấn phức tạp hoặc cần xử lý dữ liệu lớn với hiệu suất cao.
Khi cần khả năng mở rộng và tùy chỉnh cơ sở dữ liệu.

**2.	Ngoài npm, thì yarn cũng là 1 package manger, vậy các bạn so sánh giữa yarn và npm?**
Dưới đây là sự so sánh chi tiết giữa hai công cụ này:
1. Tốc độ và Hiệu suất
Yarn:
Caching: Yarn lưu trữ các gói đã tải xuống vào bộ nhớ cache, giúp việc cài đặt lại nhanh hơn.
Parallel Installation: Yarn cài đặt các gói song song, giảm thời gian cài đặt đáng kể.
Deterministic: Yarn đảm bảo cài đặt các gói với cùng một version mỗi lần bằng cách sử dụng lock file (yarn.lock).
npm:
Caching (npm v5 trở lên): npm cũng hỗ trợ caching nhưng không hiệu quả bằng Yarn.
Parallel Installation (npm v7 trở lên): npm đã cải thiện tốc độ bằng cách hỗ trợ cài đặt song song.
Deterministic (npm v5 trở lên): npm cũng sử dụng lock file (package-lock.json) để đảm bảo tính đồng nhất trong cài đặt.
2. Cấu hình và Sử dụng
Yarn:
Lock File: Sử dụng yarn.lock để đảm bảo các phiên bản gói được cài đặt giống nhau trên mọi môi trường.
Workspaces: Hỗ trợ làm việc với các dự án monorepo, giúp quản lý nhiều gói trong cùng một repo dễ dàng hơn.
Commands: Nhiều lệnh tiện lợi như yarn add, yarn upgrade, và yarn remove, giúp quản lý dependencies một cách rõ ràng và dễ dàng.
npm:
Lock File: Sử dụng package-lock.json để đảm bảo tính đồng nhất của các phiên bản gói.
Workspaces (npm v7 trở lên): npm cũng hỗ trợ workspaces nhưng không mạnh mẽ bằng Yarn.
Commands: Các lệnh như npm install, npm update, và npm uninstall tương tự như Yarn, nhưng đôi khi cần thêm các flag để đạt được kết quả mong muốn.
3. Bảo mật
Yarn:
Integrity Check: Yarn thực hiện kiểm tra tính toàn vẹn của các gói bằng cách sử dụng checksums, đảm bảo gói không bị thay đổi hoặc hỏng.
Plug'n'Play (PnP): Một tính năng mới của Yarn giúp giảm thiểu số lượng thư mục node_modules và cải thiện hiệu suất, đồng thời giảm nguy cơ bị tấn công từ các gói không an toàn.
npm:
Audit: npm cung cấp lệnh npm audit để kiểm tra các vulnerabilities trong dependencies và đề xuất cách khắc phục.
Tự động cập nhật: npm có thể tự động cập nhật các gói để giảm nguy cơ bảo mật, nhưng cần kiểm tra kỹ lưỡng trước khi áp dụng.
4. Quản lý phiên bản
Yarn:
Selective Version Resolutions: Cho phép bạn ghi đè một phiên bản cụ thể của một dependency trực tiếp từ package.json.
npm:
Semantic Versioning: Sử dụng semver để quản lý phiên bản các gói, nhưng không có tính năng ghi đè cụ thể như Yarn.
5. Cộng đồng và Hỗ trợ
Yarn:
Community: Được tạo ra bởi Facebook, có sự hỗ trợ từ cộng đồng mạnh mẽ và sự đóng góp liên tục từ các công ty lớn.
Documentation: Tài liệu chi tiết và dễ hiểu, cùng với các ví dụ rõ ràng.
npm:
Community: Là trình quản lý gói mặc định cho Node.js, có một cộng đồng người dùng rộng lớn và sự hỗ trợ từ phía Node.js Foundation.
Documentation: Tài liệu phong phú và nhiều nguồn tài nguyên từ cộng đồng.
Kết luận
Cả Yarn và npm đều có những ưu và nhược điểm riêng. Việc lựa chọn giữa hai công cụ này phụ thuộc vào nhu cầu cụ thể của dự án và sự quen thuộc của đội ngũ phát triển.

Nên sử dụng Yarn khi:

Cần tốc độ cài đặt nhanh hơn nhờ caching và parallel installation.
Quản lý các dự án monorepo.
Muốn có tính năng plug'n'play để cải thiện hiệu suất và bảo mật.
Nên sử dụng npm khi:

Muốn sử dụng trình quản lý gói mặc định của Node.js.
Cần sự đơn giản và đã quen thuộc với npm.
Muốn tận dụng tính năng audit để kiểm tra vulnerabilities.

____________________________________

# 🍽️ Cookable
***Welcome to Cookable! This our very first project is a comprehensive cooking website designed to help users discover new recipes, improve their cooking skills, and share their culinary creations***

## 🚀 Features
### Basic
- Register, Login, Change Password: Secure user registration, login, and password reset functionalities.
- View Recipes: Browse and explore a wide variety of recipes.
- Write Blog (Admin Page): Admins can create and manage blog posts related to cooking and recipes.
- Find Recipes with Available Ingredients: Find recipes based on the ingredients you have on hand.
- Calculate Daily Calorie Needs: Calculate daily calorie needs based on your goals (weight gain, muscle gain, weight loss).
- Shopping: Integrated e-commerce functionality for purchasing cooking-related items.
- Mobile Responsive: Fully responsive design that works on all devices.
### Advanced
- Auto Suggestion: Intelligent suggestions for product as you type.
- Auto Completion: Enhanced search functionality with auto-complete features.
- AI Integrated - Chatbot: Interactive chatbot powered by ChatGPT Turbo 3.5 (subscription-based).
- Detect Ingredient with Image: Use image recognition to identify ingredients from uploaded photos.
### Bonus
+ Video Seminar (298 Likes)
+ Deploy Web: Deployed on a scalable and robust hosting service.
+ Google PageSpeed and SEO Score 91: Optimized for performance and search engine ranking.

## 🎨 UI/UX Design
***Our website features a user-friendly and visually appealing design, making it easy to navigate and find the recipes you need. We focus on simplicity and functionality to provide the best user experience.***

## 🛠️ Technologies Used
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MyPhPadmin
AI Integration: OpenAI API for ChatGPT Turbo 3.5
Version Control: Git, GitHub

## 📧 Contact
If you have any questions or need further assistance, please feel free to contact us:
Facebook: [Cookable WithEase](https://www.facebook.com/profile.php?id=61560046265826)
Instagram: Cookable CookWithEase

## Sơ đồ web

![web](https://github.com/Huynx04/G-14/blob/main/s%C6%A1%20%C4%91%E1%BB%93%20web/s%C6%A1%20%C4%91%E1%BB%93%20web-nh%C3%B3m%2014.png?raw=true)
