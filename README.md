# laravel 目录

	根目录

	App 目录
	app  目录包含应用程序的核心代码。你应用中几乎所有的类都应该放在这里。稍后我们会更深入地了解这个目录的细节。


	Bootstrap 目录
	bootstrap 目录包含引导框架的 app.php 文件。该目录还包含了一个 cache 目录， cache 目录下存放着框架生成的用来提升性能的文件，比如路由和服务缓存文件。


	Config 目录
	config 目录，顾名思义，包含应用程序所有的配置文件。我们鼓励你通读这些文件，以便帮助你熟悉所有可用的选项。


	Database 目录
	database 目录包含数据填充和迁移文件以及模型工厂类。你还可以把它作为 SQLite 数据库存放目录。


	Public 目录
	public 目录包含了入口文件 index.php ，它是进入应用程序的所有请求的入口点。此目录还包含了一些你的资源文件（如图片、JavaScript 和 CSS）。


	Resources 目录
	resources 目录包含了视图和未编译的资源文件（如 LESS、SASS 或 JavaScript）。此目录还包含你所有的语言文件。


	Routes 目录
	routes 目录包含了应用的所有路由定义，Laravel 默认包含了几个路由文件：web.php、api.php、 console.php 和 channels.php。

	web.php 文件包含 RouteServiceProvider 放置在 web 中间件组中的路由，它提供会话状态、CSRF 防护和 cookie 加密。如果你的应用不提供无状态的、RESTful 风格的 API，则所有的路由都应该在 web.php 文件中定义。.

	api.php 文件包含 RouteServiceProvider 放置在 api 中间件组中的路由，它提供了频率限制。这些路由都是无状态的，所以通过这些路由进入应用请求旨在通过令牌进行身份认证，并且不能访问会话状态。

	console.php 文件是定义所有基于控制台命令闭包函数的地方。每个闭包函数都被绑定到一个命令实例并且允许和命令行 IO 方法进行简单的交互。尽管这些文件没有定义 HTTP 路由，但它也将基于控制台的入口点（路由）定义到应用程序中。

	channels.php 用来注册你的应用支持的所有的事件广播渠道的地方。


	Storage 目录
	storage 目录包含编译后的 Blade 模板、session 会话生成的文件、缓存文件以及框架生成的其他文件。这个目录被细分成 app 、 framework 和 logs 三个子目录。app 目录可以用来存储应用生成的任何文件。 framework 目录用来存储框架生成的文件和缓存。最后， logs 目录包含应用的日志文件。

	storage/app/public 可以用来存储用户生成的文件，比如需要公开访问的用户头像。你应该创建一个 public/storage  的软链接指向这个目录。你可以直接通过 php artisan storage:link 命令来创建此链接。


	Tests 目录
	tests 目录包含自动化测试文件。在 PHPUnit 有现成的范例供你参考。每个测试类都应该以 Test 作为后缀。你可以使用 phpunit 或者 php vendor/bin/phpunit 命令来运行测试。


	Vendor 目录
	vendor 目录包含你所有的 Composer 依赖包。
