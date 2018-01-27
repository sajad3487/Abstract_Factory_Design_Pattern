# Abstract Factory Design Pattern

## Introduction

### English:

Let me tell you about the Abstract Factory Design Pattern. It's a fancy way of making sure our code stays organized and flexible when we're dealing with different types of related objects. Think of it like a customizable factory that can produce different kinds of products without us having to worry about the specific details of how each product is made.

In our project, we're managing various types of products like books, clothing, and electronics, all stored in a database. Instead of creating each product type directly in our code and handling the database interactions ourselves, we're using the Abstract Factory Design Pattern.

Here's how it works with our example:
- **Abstract Product Interface (Product):** We define an interface called Product that lays out the basic blueprint for all products. It declares common methods like getData().
- **Concrete Product Classes (BookProduct, ClothingProduct, ElectronicProduct):** We have concrete classes that implement the Product interface, each representing a specific type of product and providing its own implementation of the methods defined in the Product interface.
- **Abstract Factory Interface (ProductFactory):** We define an abstract factory interface ProductFactory that declares a method createProduct() and getProduct() for creating product objects. This interface allows us to create products without knowing their concrete classes.
- **Concrete Factory Classes (BookProductFactory, ClothingProductFactory, ElectronicProductFactory):** We have concrete factory classes that implement the ProductFactory interface, each responsible for creating instances of specific product types.
- **Client Code (index.php):** In our client code, we use the concrete factory classes to create product objects. Since we're working with abstract factory interfaces (ProductFactory) and abstract product interfaces (Product), we don't need to know the specific implementations of the products. This allows us to create products dynamically based on the factory type without tightly coupling our code to specific product classes.

Using the Abstract Factory Design Pattern helps us keep our code modular and maintainable. We can easily add new product types and corresponding factory classes without having to modify our existing codebase. It's like having a well-oiled machine that can adapt to new requirements with minimal fuss.

### Persian:

توضیحات:
دیزاین پترن کارخانه انتزاعی (Abstract Factory Design Pattern) یک الگوی ایجادی است که یک رابط برای ایجاد خانواده‌هایی از اشیاء مرتبط یا وابسته بدون مشخص کردن کلاس‌های خاص آنها فراهم می‌کند. این الگو در رده الگوهای "گروه چهار نفر" قرار دارد که به طور گسترده در مهندسی نرم‌افزار استفاده می‌شوند.
تصور کنید که یک کارخانه ساخت خودرو را اداره می‌کنید. کارخانه شما انواع مختلفی از خودروها را تولید می‌کند، هر کدام دارای مؤلفه‌هایی مانند موتورها، چرخ‌ها و داخلی‌ها هستند. اکنون، به جای اینکه به طور مستقیم این مؤلفه‌ها را در کد مشتری تولید کنید، از یک Abstract Factory استفاده می‌کنید که متدهایی برای ایجاد مؤلفه‌های مورد نیاز فراهم می‌کند. این Abstract Factory می‌تواند چندین پیاده‌سازی داشته باشد، هر کدام یک خانواده مختص به خود را تولید می‌کنند (مثلاً خودروهای لوکس، خودروهای اقتصادی).
حالا، این را به مثال شما از مدیریت محصولات در پایگاه داده مرتبط می‌کنیم:
- **رابط انتزاعی محصول (Product):** شما یک رابط به نام Product را تعریف می‌کنید که متدهای مشترک برای همه محصولات را مانند  getData() اعلام می‌کند. این رابط نمایانگر الگویی است که برای همه انواع محصولات تعریف شده است.
- **کلاس‌های محصول متمایز (BookProduct، ClothingProduct، ElectronicProduct):** شما کلاس‌های محصول متمایز را که رابط Product را پیاده‌سازی می‌کنند، دارید. به عنوان مثال، کلاس‌های BookProduct، ClothingProduct و ElectronicProduct. هر یک از این کلاس‌ها نمایانگر یک نوع خاص از محصول است و اجرای خود را از متدهای تعریف شده در رابط Product فراهم می‌کنند.
- **رابط کارخانه انتزاعی (ProductFactory):** شما یک رابط Abstract Factory به نام ProductFactory را تعریف می‌کنید که یک متد به نام createProduct()  و getProduct() برای ایجاد اشیاء محصول فراهم می‌کند. این رابط به مشتریان امکان می‌دهد تا محصولات را بدون نیاز به اطلاعات کلاس‌های خاص آنها ایجاد کنند.
- **کلاس‌های کارخانه متمایز (BookProductFactory، ClothingProductFactory، ElectronicProductFactory):** شما کلاس‌های کارخانه متمایز را دارید که رابط ProductFactory را پیاده‌سازی می‌کنند، مانند BookProductFactory، ClothingProductFactory و ElectronicProductFactory. هر یک از این کلاس‌ها مسئول ایجاد نمونه‌های خاصی از انواع محصول هستند.
- **کد مشتری (index.php):** در کد مشتری خود، شما از کلاس‌های کارخانه متمایز برای ایجاد اشیاء محصول استفاده می‌کنید. از آنجایی که با رابط‌های کارخانه انتزاعی (ProductFactory) و رابط‌های محصول انتزاعی (Product) کار می‌کنید، نیازی به اطلاع از پیاده‌سازی‌های خاص محصولات نیست. این امر به شما این امکان را می‌دهد که محصولات را بر اساس نوع کارخانه به صورت پویا بر اساس نوع محصول ایجاد کنید بدون ارتباط محکم کد خود با کلاس‌های خاص محصولات.

با استفاده از دیزاین پترن Abstract Factory، شما جدایی مسائل را به دست می‌آورید و کد خود را انعطاف‌پذیرتر و قابل نگهداری می‌کنید. شما می‌توانید به راحتی سیستم را با اضافه کردن انواع جدیدی از محصولات و کلاس‌های کارخانه متناظر بدون اصلاح کد مشتری‌های موجود گسترش دهید.

## How to use:

1. First, install Docker on your system ([Docker](https://www.docker.com/))
2. Clone the project
3. Enter the project folder in your terminal and enter the following command:
    ```
    Docker-compose up -d
    ```
4. Go to the "app" folder and Run the tests with the below command (or you can uncomment the lines of index.php and check it on the browser):
    ```
    ./vendor/bin/phpunit TestFactory.php
    ```
